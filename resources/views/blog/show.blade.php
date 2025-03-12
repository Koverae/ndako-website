@extends('layouts.app')

@section('title', $blog->title)

@section('open-graph')
<meta name="theme-color" content="#026469">
<meta property="og:title" content="{{ $blog->title }}">
<meta property="og:image" content="{{ asset('assets/images/logo/logo.png') }}" />
<meta property="og:description" content="{!! Str::limit($blog->body, 105) !!}" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.ndako.koverae.com/blog/{{ $blog->slug }}">
@endsection

@section('content')




<article class="pb-150 hero  overflow-hidden relative max-lg:pt-150 pt-[240px] pb-[60px] z-40">
  <div
    class="absolute left-1/2 -top-[250px] w-full h-[550px] -translate-x-1/2 bg-cover  bg-[url('../images/hero-gradient.png')] bg-no-repeat bg-center opacity-70 md:hidden -z-10"
  ></div>
  <div class="container relative ">
    <div
      class="absolute flex -translate-x-1/2 -translate-y-1/2 left-1/2 top-20 max-md:flex-col max-md:-translate-y-0 -z-10 max-md:hidden"
    >
      <div
        class="max-1xl:w-[335px] max-1xl:h-[335px] 1xl:w-[442px] 1xl:h-[442px] rounded-full bg-primary-200/20 blur-[145px]"
      ></div>
      <div
        class="max-1xl:w-[335px] max-1xl:h-[335px] 1xl:w-[442px] 1xl:h-[442px] rounded-full bg-primary-200/25 -ml-[170px] max-md:ml-0 blur-[145px]"
      ></div>
      <div
        class="max-1xl:w-[335px] max-1xl:h-[335px] 1xl:w-[442px] 1xl:h-[442px] rounded-full bg-primary-200/20 -ml-[170px] max-md:ml-0 blur-[145px]"
      ></div>
    </div>

    <div class="p-2.5 bg-white dark:bg-dark-200 rounded-medium overflow-hidden shadow-box mb-16 max-md:h-[400px]">
      <img
        src="{{ asset('assets/images/blog/blogDetails.png') }}"
        alt="about images"
        class="w-full rounded max-md:object-cover max-md:object-center max-md:h-full"
      />
    </div>
    <div class="blog-details">
      <h2>{{ $blog->title }}</h2>
      <div class="flex items-center mb-12 gap-x-2 ">
        <p>{{ $blog->author->name }}</p>
        <span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="5"
            height="6"
            viewBox="0 0 5 6"
            fill="none"
          >
            <circle
              cx="2.5"
              cy="3"
              r="2.5"
              fill=""
              class="fill-[#D8DBD0] dark:fill-[#3B3C39]"
            />
          </svg>
        </span>
        <p>{{ \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') }}</p>
      </div>
    </div>
    <div class="blog-details-body">
        {!! $blog->body !!}
    </div>


  </div>
</article>


<section class="relative mt-4 pb-25 max-md:overflow-hidden">
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
            <p>
                Start your free trial today and experience seamless hotel management with Ndako! Effortlessly manage bookings, streamline operations, and grow your business, all in one place. No credit card required!
            </p>
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