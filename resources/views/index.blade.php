@extends('layouts.guest')
@section('title', '3cyberpractitioners')
@section('stylesheet')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection
@section('name')
@section('content')
<main>
  <div class="bg-gray-50 py-8 md:py-16 lg:py-20 xl:py-32 2xl:py-48 object-cover " style="background: url('/img/background.png'); position: center;">
    <div class="max-w-7xl grid lg:grid-cols-5 mx-auto gap-2 md:gap-4">
      <div class="lg:col-span-2 flex items-center  justify-around flex-col px-4 lg:px-0">
        <div class="mb-8 ">
          <h3 class="text-xl  lg:2text-xl xl:text-3xl 2xl:text-4xl uppercase tourney-black text-purple-900 tourney-black">3cyberpractitioners</h3>
        </div>
        <div>
          <p class="quicksand-medium text-gray-500 text-justify font-medium mb-4 text-lg">The fast evolution and constant threat of cyber attacks, our ever-growing reliance upon digital processes, and the exponential increase in online data makes cyber security one of the greatest challenges of our time. Despite this, few are equipped with the necessary skills to tackle it. 3cyberpractitioners created to close the skills gap quickly and effectively. </p>
          <a href="/contact" class="uppercase text-xs lg:text-xs text-white bg-purple-600 px-12 text-center my-4 py-3 hover:bg-red-500 hover:text-purple-600  ease-in-out border-purple-600 hover:shadow-lg no-underline  hover:border-red-600 rounded-3xl transition-all duration-300 hover:scale-90 transform shadow-2xl">Hire Us</a>
        </div>
      </div>
      <div class="lg:col-span-3">
        <img src="/img/svg/working.svg" alt="w-100 h-100" class="w-full h-full">
      </div>
    </div>
  </div>
</main>

{{-- anothr sections --}}
<article class="bg-purple-200 bg-opacity-50 shadow-inner">
  <div class="max-w-7xl grid lg:grid-3 mx-auto gap-2 md:gap-4 xl:gap-8">
    <div class="flex text-left lg:justify-between  space-x-4 items-center">
      <div class="p-8">
        <img src="/img/svg/logo.svg" alt="2cyberserity-logos" class="hover:bg-purple-100 w-24 md:w-36 lg:w-20 ">
      </div>
      <div class="p-8 hidden lg:block">
        <img src="/img/svg/show2.svg" alt="2cyberserity-logos" class="hover:bg-purple-100 w-16 ">
      </div>
      <div class="p-8 hidden lg:block">
        <img src="/img/svg/show3.svg" alt="2cyberserity-logos" class="hover:bg-purple-100 w-20 ">
      </div>
      <div class="p-8 hidden lg:block">
        <img src="/img/svg/show4.svg" alt="2cyberserity-logos" class="hover:bg-purple-100 w-20 ">
      </div>
      <div class="p-8 hidden lg:block">
        <img src="/img/svg/show5.svg" alt="2cyberserity-logos" class="hover:bg-purple-100 w-20 ">
      </div>
    </div>
  </div>

  {{-- why us section --}}
  <section class="bg-purple-50 py-8 lg:py-16 xl:py-24">
    <div class="max-w-7xl grid lg:grid-cols-3 mx-auto gap-2 md:gap-4 xl:gap-8 p-4 lg:p-8 space-y-4 md:space-x-16">
      <div class="">
        <h1 class="text-4xl tourney-black text-left ">Why choose <span class="text-purple-600">2cybersecurity?</span> </h1>
        <p class="my-12 font-medium text-gray-600 text-justify">We make use of latest most effective techonlogy softwares and device to extract information on the target device.Web and OS security such as SSL, 2FA, OTP, Google Protect, firewall, anytirus are a things of the past. </p>
        <a href="/contact" class="uppercase text-xs lg:text-xs text-white bg-purple-600 px-12 text-center my-4 py-3 hover:bg-red-500 hover:text-purple-600  ease-in-out border-purple-600 hover:shadow-lg no-underline  hover:border-red-600 rounded-3xl transition-all duration-300 hover:scale-90 transform shadow-2xl">Hire Us</a>
      </div>
      <div class="col-span-2 grid grid-cols-1 gap-4 lg:gap-8 md:grid-cols-2">
        <div class="shadow-md rounded-sm flex  flex-col  hover:shadow-lg transition duration-300 transform hover:scale-105 bg-white space-y-4 md:space-x-16 p-5 md:p-8 lg:p-12">
          <img src="/img/svg/service.svg" alt="2cybersecurity-logos" class="w-24 p-2 border-2 object-cover rounded-full hover:bg-purple-50 border-purple-600">
          <div class="w-full mx-0 space-y-4">
            <h1 class="text-purple-900 tourney-black text-xl">Excellent Service</h1>
            <p class="text-purple-900 text-opacity-70 font-medium text-justify">You will only receive quality and satisfactory services from us because we only use the latest tools(Software and hardware) to ensure that every single hacks is successful without any delay.</p>
          </div>
        </div>
        <div class="shadow-md rounded-sm flex  flex-col  hover:shadow-lg transition duration-300 transform hover:scale-105 bg-white space-y-4 md:space-x-16 p-5 md:p-8 lg:p-12">
          <img src="/img/svg/money-back.svg" alt="2cybersecurity-logos" class="w-24 p-2 border-2 object-cover hover:bg-purple-50 border-purple-600">
          <div class="w-full mx-0 space-y-4">
            <h1 class="text-purple-900 tourney-black text-xl">Money Back Guarantee</h1>
            <p class="text-purple-900 text-opacity-70 font-medium">If our services provided do not meet your expectations, you can easily reach out to us for a refund.</p>
          </div>
        </div>
        <div class="shadow-md rounded-sm flex  flex-col  hover:shadow-lg transition duration-300 transform hover:scale-105 bg-white space-y-4 md:space-x-16 p-5 md:p-8 lg:p-12">
          <img src="/img/svg/team.svg" alt="2cybersecurity-logos" class="w-24 p-2 border-2 object-cover hover:bg-purple-50 border-purple-600">
          <div class="w-full mx-0 space-y-4">
            <h1 class="text-purple-900 tourney-black text-xl">Expert team Members</h1>
            <p class="text-purple-900 text-opacity-70 font-medium text-justify">We are a team of professional with many years of experience who protect against unauthorized access to data centers and other computerized systems.</p>
          </div>
        </div>
        <div class="shadow-md rounded-sm flex  flex-col  hover:shadow-lg transition duration-300 transform hover:scale-105 bg-white space-y-4 md:space-x-16 p-5 md:p-8 lg:p-12">
          <img src="/img/svg/secure.svg" alt="2cybersecurity-logos" class="w-24 p-2 border-2 object-cover hover:bg-purple-50 border-purple-600">
          <div class="w-full mx-0 space-y-4">
            <h1 class="text-purple-900 tourney-black text-xl">100% Secure Transactions</h1>
            <p class="text-purple-900 text-opacity-70 font-medium text-justify">We ensure that all transactions and services rendered are entirely untraceable, undetected and secured.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</article>

{{-- why us section --}}
<section class="bg-gray-50 bg-opacity-50 shadow-inner py-4 lg:py-8 xl:py-20 2xl:py-48">
  <div class="max-w-7xl p-4 lg:p-0 grid grid-cols-1 lg:grid-cols-5 mx-auto gap-2 md:gap-4 xl:gap-8">
    <div class="lg:col-span-3">
      <img src="/img/svg/office.svg" alt="2cybersecurity office" class="w-full">
    </div>
    <div class="flex flex-col items-center justify-center space-y-4 md:space-x-16 lg:col-span-2">
      <h1 class=" text-3xl text-purple-600 tourney-black uppercase">21<sup class="-mt-4">st</sup> Century generation <span class="text-red-600">hackers</span> </h1>
      <p class="ml-0 text-lg font-medium text-justify italic text-gray-500">Transactions and hacks are being carried out by our workforce in most efficient, fatest and thorough manner and leave no space for loopholes.</p>
    </div>
  </div>
</section>

{{-- testimonies --}}
<section class="bg-white shadow-md py-4 lg:py-8 xl:py-20 2xl:py-48">
  <div class="max-w-7xl p-4 mx-auto">
    <div class="swiper-container mx-auto mySwiper w-100 my-4">
      <h1 class="text-3xl text-purple-900 font-black">Hear what our awesome clients is saying our work</h1>
      <div class="swiper-wrapper my-4">
        <div class="swiper-slide relative space-y-4 md:space-x-16 bg-gray-50 my-2 shadow-inner rounded-md p-8 md:border-0 md:py-12 justify-center md:justify-between flex flex-col text-center md:flex-row md:text-justify  items-center">
          <div class="md:px-4 max-w-max">
            <img src="/img/testimony/6.jpg" alt="2cybersecurity images slides" class="block hover:rounded-full w-28 h-auto md:w-32 xl:w-40 2xl:w-48 rounded-full md:rounded border-8 border-purple-200">
          </div>
          <div class="">
            <p class="text-gray-500 font-medium md:text-left">I want to reassure the potential clients of Abchackers.com Services who will read my personal testimonial letter to make a wise decision, and definitely choose abchackers Repair Services as your strongest ally and guardian in a difficult battle for your excellent credit.</p>
            </p>
            <h6 class="md:text-left font-black my-2 text-purple-500">Keira Holland</h6>
          </div>
          <span class="absolute top-0 right-0 m-2 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 lg:w-8 xl:w-10 bi bi-chat-right-quote" viewBox="0 0 16 16">
              <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
              <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z" />
            </svg>
          </span>
        </div>
        <div class="swiper-slide relative space-y-4 md:space-x-16 bg-gray-50 my-2 shadow-inner rounded-md p-8 md:border-0 md:py-12 justify-center md:justify-between flex flex-col text-center md:flex-row md:text-justify  items-center">
          <div class="md:px-4 max-w-max">
            <img src="/img/testimony/5.jpg" alt="2cybersecurity images slides" class="block hover:rounded-full w-28 h-auto md:w-32 xl:w-40 2xl:w-48 rounded-full md:rounded border-8 border-purple-200">
          </div>
          <div class="">
            <p class="text-gray-500 font-medium md:text-left">Thank you for your great program. I followed the instructions that 2cybersecurity.com provided for the expungement of my criminal record and everything went smoothly and exactly as planned, I’m so happy to finally have a clean record. </p>
            <h6 class="md:text-left font-black my-2 text-purple-500">Keira Holland</h6>
          </div>
          <span class="absolute top-0 right-0 m-2 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 lg:w-8 xl:w-10 bi bi-chat-right-quote" viewBox="0 0 16 16">
              <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
              <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z" />
            </svg>
          </span>
        </div>
        <div class="swiper-slide relative space-y-4 md:space-x-16 bg-gray-50 my-2 shadow-inner rounded-md p-8 md:border-0 md:py-12 justify-center md:justify-between flex flex-col text-center md:flex-row md:text-justify  items-center">
          <div class="md:px-4 max-w-max">
            <img src="/img/testimony/4.jpg" alt="2cybersecurity images slides" class="block hover:rounded-full w-28 h-auto md:w-32 xl:w-40 2xl:w-48 rounded-full md:rounded border-8 border-purple-200">
          </div>
          <div class="">
            <p class="text-gray-500 font-medium md:text-left"> OK, I screwed up and fell for a trap and got myself into a lot of trouble,
              but
              this company made it go away! Less than a week after I called them, my
              blackmailer left me alone. Thank God.</p>
            <h6 class="md:text-left font-black my-2 text-purple-500">Keira Holland</h6>
          </div>
          <span class="absolute top-0 right-0 m-2 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 lg:w-8 xl:w-10 bi bi-chat-right-quote" viewBox="0 0 16 16">
              <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
              <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z" />
            </svg>
          </span>
        </div>
        <div class="swiper-slide relative space-y-4 md:space-x-16 bg-gray-50 my-2 shadow-inner rounded-md p-8 md:border-0 md:py-12 justify-center md:justify-between flex flex-col text-center md:flex-row md:text-justify  items-center">
          <div class="md:px-4 max-w-max">
            <img src="/img/testimony/3.jpg" alt="2cybersecurity images slides" class="block hover:rounded-full w-28 h-auto md:w-32 xl:w-40 2xl:w-48 rounded-full md:rounded border-8 border-purple-200">
          </div>
          <div class="">
            <p class="text-gray-500 font-medium md:text-left">I met a woman online, and she seemed flirty and fun and one thing led to
              another. Then she says she recorded me and that she was going to show
              EVERYBODY
              online unless I paid her lots of money. I was desperate, and a cop told me
              about
              a company that could help. I called and believe it or not I AM NOT BEING
              SEXTORTED ANYMORE!</p>
            <h6 class="md:text-left font-black my-2 text-purple-500">Keira Holland</h6>
          </div>
          <span class="absolute top-0 right-0 m-2 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 lg:w-8 xl:w-10 bi bi-chat-right-quote" viewBox="0 0 16 16">
              <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
              <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z" />
            </svg>
          </span>
        </div>
        <div class="swiper-slide relative space-y-4 md:space-x-16 bg-gray-50 my-2 shadow-inner rounded-md p-8 md:border-0 md:py-12 justify-center md:justify-between flex flex-col text-center md:flex-row md:text-justify  items-center">
          <div class="md:px-4 max-w-max">
            <img src="/img/testimony/2.jpg" alt="2cybersecurity images slides" class="block hover:rounded-full w-28 h-auto md:w-32 xl:w-40 2xl:w-48 rounded-full md:rounded border-8 border-purple-200">
          </div>
          <div class="">
            <p class="text-gray-500 font-medium md:text-left">I should have known it was a trick the minute she contacted me on Instagram,
              but
              I was foolish. She had my pictures, a video, my contacts list. She was going
              to
              send it to my significant other unless I paid her. So I paid. And she
              demanded
              more money. This time, I did some research and found these guys. Their
              technology and expertise solved my problem much faster than I would have
              thought.</p>
            <h6 class="md:text-left font-black my-2 text-purple-500">Keira Holland</h6>
          </div>
          <span class="absolute top-0 right-0 m-2 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 lg:w-8 xl:w-10 bi bi-chat-right-quote" viewBox="0 0 16 16">
              <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
              <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z" />
            </svg>
          </span>
        </div>
        <div class="swiper-slide relative space-y-4 md:space-x-16 bg-gray-50 my-2 shadow-inner rounded-md p-8 md:border-0 md:py-12 justify-center md:justify-between flex flex-col text-center md:flex-row md:text-justify  items-center">
          <div class="md:px-4 max-w-max">
            <img src="/img/testimony/1.jpg" alt="2cybersecurity images slides" class="block hover:rounded-full w-28 h-auto md:w-32 xl:w-40 2xl:w-48 rounded-full md:rounded border-8 border-purple-200">
          </div>
          <div class="">
            <p class="text-gray-500 font-medium md:text-left">Thank you for your great program. I followed the instructions that 2cybersecurity.com provided for the expungement of my criminal record and everything went smoothly and exactly as planned, I’m so happy to finally have a clean record. </p>
            <h6 class="md:text-left font-black my-2 text-purple-500">Keira Holland</h6>
          </div>
          <span class="absolute top-0 right-0 m-2 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 lg:w-8 xl:w-10 bi bi-chat-right-quote" viewBox="0 0 16 16">
              <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
              <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z" />
            </svg>
          </span>
        </div>
      </div>
      <div class="mx-auto text-center block pt-24 swiper-pagination"></div>
    </div>
  </div>
</section>
{{-- testimony caps --}}
<section class="bg-purple-300 shadow-inner py-4 lg:py-8 xl:py-20 2xl:py-48">
  <div class="max-w-7xl p-4 mx-auto">
    @livewire('newsletters')
  </div>
</section>
@endsection

@section('scripts')
{{-- swiperjs --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal'
    , loop: true,

    // autoplay
    autoplay: {
      delay: 4000
      , disableOnInteraction: false
    , },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination'
      , clickable: true
    , },

    // Navigation arrows
    navigation: {
      nextEl: '.button-next'
      , prevEl: '.button-prev'
    , },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar'
    , }
  , });

</script>
@endsection
