
document.addEventListener('DOMContentLoaded', () => {
  const countrySelect = document.getElementById('countrySelect');
  const priceToggle = document.getElementById('priceCheck');

  const pricingData = {
    ke: {
      currency: 'KSh',
      spark: { month: 475, monthOld: 730, year: 4700, yearOld: 7300 },
    },
    tz: {
      currency: 'TSh',
      spark: { month: 9800, monthOld: 15000, year: 98000, yearOld: 150000 },
    },
    ug: {
      currency: 'USh',
      spark: { month: 13150, monthOld: 20150, year: 131500, yearOld: 201500 },
    },
    rw: {
      currency: 'RWF',
      spark: { month: 5300, monthOld: 8100, year: 53000, yearOld: 81000 },
    },
  };

  function updatePrices() {
    const selectedCountry = countrySelect.value;
    const isYearly = priceToggle.checked;
    const { currency, spark } = pricingData[selectedCountry];

    const priceContainerMonth = document.querySelector('.price-month');
    const priceContainerYear = document.querySelector('.price-year');
    const sparkPrice = isYearly ? spark.year : spark.month;
    const sparkOldPrice = isYearly ? spark.yearOld : spark.monthOld;

    // Update visibility
    priceContainerMonth.style.display = isYearly ? 'none' : 'block';
    priceContainerYear.style.display = isYearly ? 'block' : 'none';

    // Update price content
    const sparkPriceEls = document.querySelectorAll('.spark-price');
    sparkPriceEls.forEach(el => {
      el.innerHTML = `
        ${currency} <span>${sparkPrice}</span>
        <sup style="text-decoration: line-through; font-size: 14px; color: #999; margin-left: 8px;">
          ${currency} ${sparkOldPrice}
        </sup>
      `;
    });
  }

  countrySelect.addEventListener('change', updatePrices);
  priceToggle.addEventListener('change', updatePrices);

  updatePrices(); // Initial load

  // --- Price Calculator ---
  const calcRooms = document.getElementById('calcRooms');
  const calcCountry = document.getElementById('calcCountry');
  const calcMonthly = document.getElementById('calcMonthly');
  const calcYearly = document.getElementById('calcYearly');
  const calcResult = document.getElementById('calcResult');
  const calcOldResult = document.getElementById('calcOldResult');
  const calcNote = document.getElementById('calcNote');

  let calcPeriod = 'month'; // 'month' or 'year'

  function updateCalcToggle() {
    if (calcPeriod === 'month') {
      calcMonthly.classList.add('bg-primary', 'text-white', 'border-primary');
      calcMonthly.classList.remove('bg-white', 'dark:bg-dark-200', 'text-paragraph', 'dark:text-white', 'border-gray-300');
      calcYearly.classList.remove('bg-primary', 'text-white', 'border-primary');
      calcYearly.classList.add('bg-white', 'dark:bg-dark-200', 'text-paragraph', 'dark:text-white', 'border-gray-300');
    } else {
      calcYearly.classList.add('bg-primary', 'text-white', 'border-primary');
      calcYearly.classList.remove('bg-white', 'dark:bg-dark-200', 'text-paragraph', 'dark:text-white', 'border-gray-300');
      calcMonthly.classList.remove('bg-primary', 'text-white', 'border-primary');
      calcMonthly.classList.add('bg-white', 'dark:bg-dark-200', 'text-paragraph', 'dark:text-white', 'border-gray-300');
    }
  }

  function updateCalculator() {
    const rooms = Math.max(1, parseInt(calcRooms.value, 10) || 1);
    const country = calcCountry.value;
    const { currency, spark } = pricingData[country];
    let price = 0, oldPrice = 0, note = '';

    if (rooms <= 15) {
      price = 0;
      oldPrice = 0;
      note = 'You qualify for the <b>Ndako Starter</b> plan: <span class="font-bold text-primary">Free</span>!';
      calcResult.innerHTML = `<span class="text-primary">Free</span>`;
      calcOldResult.innerHTML = '';
    } else {
      if (calcPeriod === 'month') {
        price = spark.month * rooms;
        oldPrice = spark.monthOld * rooms;
        note = `For <b>${rooms}</b> rooms, <b>monthly</b> billing.`;
      } else {
        price = spark.year * rooms;
        oldPrice = spark.yearOld * rooms;
        note = `For <b>${rooms}</b> rooms, <b>yearly</b> billing.`;
      }
      calcResult.innerHTML = `${currency} ${price.toLocaleString()}`;
      calcOldResult.innerHTML = `<span>${currency} ${oldPrice.toLocaleString()}</span>`;
    }
    calcNote.innerHTML = note;
  }

  calcMonthly.addEventListener('click', () => {
    calcPeriod = 'month';
    updateCalcToggle();
    updateCalculator();
  });
  calcYearly.addEventListener('click', () => {
    calcPeriod = 'year';
    updateCalcToggle();
    updateCalculator();
  });
  calcRooms.addEventListener('input', updateCalculator);
  calcCountry.addEventListener('change', updateCalculator);

  // Sync calculator with main pricing toggle/country
  countrySelect.addEventListener('change', () => {
    calcCountry.value = countrySelect.value;
    updateCalculator();
  });
  priceToggle.addEventListener('change', () => {
    calcPeriod = priceToggle.checked ? 'year' : 'month';
    updateCalcToggle();
    updateCalculator();
  });

  // Initial state
  updateCalcToggle();
  updateCalculator();
});