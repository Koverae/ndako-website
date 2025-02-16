@extends('layouts.app')

@section('title', 'Get a demo')

@section('content')
<section class="py-[200px] max-md:pt-150 relative overflow-hidden">
  <div
    class="absolute left-1/2 top-0 w-full h-[550px] -translate-x-1/2 bg-cover  bg-[url('../images/hero-gradient.png')] bg-no-repeat bg-center opacity-70 md:hidden -z-10"
  ></div>
  <div
    class="container relative"
    data-aos="fade-up"
    data-aos-offset="200"
    data-aos-duration="1000"
    data-aos-once="true"
  >
    <div class="mb-12 text-center max-w-[475px] mx-auto">
      <p class="section-tagline">Book a Free Demo</p>

      <h2>See Ndako in action</h2>
    </div>
    <div class="relative z-10 max-w-[850px] mx-auto">
      <div class="absolute flex -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 -z-10 max-md:hidden">
        <div class="w-[442px] h-[442px] rounded-full bg-primary-200/20 blur-[145px]"></div>
        <div class="w-[442px] h-[442px] rounded-full bg-primary-200/25 -ml-[170px] blur-[145px]"></div>
        <div class="w-[442px] h-[442px] rounded-full bg-primary-200/20 -ml-[170px] blur-[145px]"></div>
      </div>
      <div class=" bg-white dark:bg-dark-200 rounded-medium p-2.5  shadow-nav">
        <div
          class="p-12 bg-white border border-gray-100 border-dashed rounded dark:bg-dark-200 dark:border-borderColour-dark max-md:p-5"
        >
          <form method="POST" action="{{ route('demo.store') }}">
            @csrf

            @if (session('success'))
            <div class="w-full mt-4 mb-3">
                <p class="mb-4 text-center text-green-600">{{ session('success') }}</p>
            </div>
            @endif

            <div class="grid grid-cols-12 max-md:gap-y-10 md:gap-x-12 md:gap-8">
              <div class="max-md:col-span-full md:col-span-6">
                <label for="name" class="block mb-2 text-sm font-medium font-jakarta_sans text-paragraph dark:text-white">
                  Your name
                </label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  value="{{ old('name') }}"
                  required
                  placeholder="e.g. Brian Mwangi"
                  class="block w-full text-sm rounded-[48px] border border-borderColour dark:border-borderColour-dark py-2.5 px-5 text-paragraph-light placeholder:text-paragraph-light dark:placeholder:text-paragraph-light outline-none bg-white dark:bg-dark-200 focus:border-primary dark:focus:border-primary  duration-300 transition-all"
                />
                @error('name') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
    
              </div>
              <div class="max-md:col-span-full md:col-span-6">
                <label for="company" class="block mb-2 text-sm font-medium font-jakarta_sans text-paragraph dark:text-white">
                  Company Name
                </label>
                <input
                  type="text"
                  name="company"
                  id="company"
                  value="{{ old('company') }}"
                  required
                  placeholder="e.g. Horizon Hotels Kenya"
                  class="block w-full text-sm rounded-[48px] border border-borderColour dark:border-borderColour-dark py-2.5 px-5 text-paragraph-light placeholder:text-paragraph-light dark:placeholder:text-paragraph-light outline-none bg-white dark:bg-dark-200 focus:border-primary dark:focus:border-primary  duration-300 transition-all"
                />
                @error('company') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
    
              </div>
              <div class="max-md:col-span-full md:col-span-6">
                <label for="phone" class="block mb-2 text-sm font-medium font-jakarta_sans text-paragraph dark:text-white">
                  Contact No.
                </label>
                <input
                  type="tel"
                  name="phone"
                  id="phone"
                  value="{{ old('phone') }}"
                  required
                  placeholder="e.g. +254 712 345 678"
                  class="block w-full text-sm rounded-[48px] border border-borderColour dark:border-borderColour-dark py-2.5 px-5 text-paragraph-light placeholder:text-paragraph-light dark:placeholder:text-paragraph-light outline-none bg-white dark:bg-dark-200 focus:border-primary dark:focus:border-primary  duration-300 transition-all"
                />
                @error('phone') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
    
              </div>
              <div class="max-md:col-span-full md:col-span-6">
                <label for="email" class="block mb-2 text-sm font-medium font-jakarta_sans text-paragraph dark:text-white">
                  Your Email
                </label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  value="{{ old('email') }}"
                  required
                  placeholder="e.g. brian.mwangi@company.com"
                  class="block w-full text-sm rounded-[48px] border border-borderColour dark:border-borderColour-dark py-2.5 px-5 text-paragraph-light   placeholder:text-paragraph-light outline-none bg-white dark:bg-dark-200 focus:border-primary dark:focus:border-primary  duration-300 transition-all"/>
                  @error('email') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
      
              </div>
              <div class="max-md:col-span-full md:col-span-6">
                <label for="rooms" class="block mb-2 text-sm font-medium font-jakarta_sans text-paragraph dark:text-white">
                    Number of Rooms
                </label>
                <input
                  type="number"
                  name="rooms"
                  id="rooms"
                  value="{{ old('rooms') }}"
                  placeholder="e.g. 25"
                  class="block w-full text-sm rounded-[48px] border border-borderColour dark:border-borderColour-dark py-2.5 px-5 text-paragraph-light placeholder:text-paragraph-light dark:placeholder:text-paragraph-light outline-none bg-white dark:bg-dark-200 focus:border-primary dark:focus:border-primary  duration-300 transition-all"
                />
                @error('rooms') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
    
              </div>
              <div class="max-md:col-span-full md:col-span-6">
                <label for="date" class="block mb-2 text-sm font-medium font-jakarta_sans text-paragraph dark:text-white">
                    Preferred Demo Date & Time
                </label>
                <input
                type="date" 
                name="date" 
                id="date" 
                required 
                value="{{ now()->format('Y-m-d') }}"
                  placeholder="e.g. 25"
                  class="block w-full text-sm rounded-[48px] border border-borderColour dark:border-borderColour-dark py-2.5 px-5 text-paragraph-light placeholder:text-paragraph-light dark:placeholder:text-paragraph-light outline-none bg-white dark:bg-dark-200 focus:border-primary dark:focus:border-primary  duration-300 transition-all"
                />
                @error('date') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
              </div>
              <div class="col-span-full">
                <label for="message" class="block mb-2 text-sm font-medium font-jakarta_sans text-paragraph dark:text-white">
                  Message
                </label>
                <textarea name="message" id="message"
                  value="{{ old('message') }}" placeholder="Tell us what you're looking for in a hotel management solution." rows="10" class="block w-full text-sm rounded border border-borderColour dark:border-borderColour-dark py-2.5 px-5   text-paragraph-light placeholder:text-paragraph-light outline-none resize-none bg-white dark:bg-dark-200 focus:border-primary dark:focus:border-primary  duration-300 transition-all">
                </textarea>
                @error('message') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
              </div>

              <div class="flex gap-2 mx-auto text-center col-span-full">
                <a href="#" class="btn-outline">Not ready for a demo? Try Ndako for Free</a>
                <button class="btn">Request Now</button>
              </div>
                
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="relative pb-25 max-md:overflow-hidden">
    <div class="container relative max-md:text-center">
      <div class="absolute left-1/2 -bottom-[442px] -translate-x-1/2  flex max-md:flex-col -z-10 max-md:hidden">
        <div
          class="max-md:hidden max-1xl:w-[335px] max-1xl:h-[335px]  1xl:w-[442px] 1xl:h-[442px]  rounded-full bg-primary-200/20 blur-[145px]"
        ></div>
        <div
          class="max-1xl:w-[335px] max-1xl:h-[335px]  1xl:w-[442px] 1xl:h-[442px]  rounded-full bg-primary-200/25 -ml-[170px] max-md:ml-0 blur-[145px]"
        ></div>
        <div
          class="max-1xl:w-[335px] max-1xl:h-[335px]  1xl:w-[442px] 1xl:h-[442px]  rounded-full bg-primary-200/20 -ml-[170px] max-md:ml-0 blur-[145px]"
        ></div>
      </div>
      <div
        class="absolute left-1/2 -bottom-[350px] p-[350px] -translate-x-1/2 bg-contain w-full h-full  bg-[url('../images/hero-gradient.png')] bg-no-repeat bg-center opacity-70 md:hidden -z-10"
      ></div>
      <div>
        <div>
          <p class="section-tagline">Start Today</p>
        </div>
        <div class="grid items-start grid-cols-12 grid-y-10">
          <div class="max-md:col-span-full md:col-span-6 lg:col-span-7">
            <h2 class="mb-5 max-lg:text-[32px] text-[48px] font-semibold ">Start your free trial now!</h2>
            <p>Start your free trial today and experience seamless hotel management with Ndako! Effortlessly manage bookings, streamline operations, and grow your business, all in one place. No credit card required! ✅</p>
          </div>
          <div class="max-md:col-span-full md:col-span-6 lg:col-span-5 max-md:mt-5 ">
            <form>
              <div class="grid items-center grid-cols-12 max-lg:gap-y-5 lg:gap-x-6 ">
                <input
                  type="text"
                  placeholder="Enter your email"
                  class="bg-transparent placeholder:text-light dark:placeholder:text-[#A1A49D] text-[#A1A49D] text-light focus:outline-none  leading-[1.5] border rounded-[60px] bg-white dark:bg-dark-200 dark:border-[#31332F] border-borderColour max-lg:col-span-full lg:col-span-8 h-full ps-5 max-lg:py-3.5 focus:border-primary dark:focus:border-primary  duration-300 transition-all outline-none"
                />
                <button class="btn max-lg:col-span-full lg:col-span-4">Get Started</button>
              </div>
            </form>
            <ul class=" flex max-md:flex-col max-lg:gap-y-2.5 items-center max-lg:justify-between lg:gap-5 mt-6 ">
              <li class="flex items-center">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="mr-3"
                >
                  <path
                    d="M14.125 7.75L8.62497 13L5.875 10.375M19 10C19 14.9706 14.9706 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10Z"
                    stroke=""
                    class="stroke-paragraph dark:stroke-primary"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <p>No Credit Card Required</p>
              </li>
              <li class="flex items-center">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="mr-3"
                >
                  <path
                    d="M14.125 7.75L8.62497 13L5.875 10.375M19 10C19 14.9706 14.9706 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10Z"
                    stroke=""
                    class="stroke-paragraph dark:stroke-primary"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <p>Free For 7 Day Trial.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection