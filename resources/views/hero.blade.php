@extends('layouts.main')

@section('content')
<div class="relative max-w-4xl mx-auto pt-3 sm:pt-10 lg:pt-20">
    <h1 class="font-Cera text-white font-bold lg:text-[80px] lg:leading-[80px] sm:text-[56px] sm:leading[60px] text-[40px] leading[55px] text-center">Web and Apps Mobile
      <span class="my-4 before:block before:absolute before:-inset-1 before:-skew-y-1 before:bg-biru relative inline-block">
        <span class="relative text-white">for developers</span>
      </span> 
    </h1> 
    <p class="font-Cera max-w-sm lg:max-w-xl mx-auto text-center text-[16px] lg:text-[20px] font-bold my-4 text-gray-500">Transforming Visions into Reality - Crafting Seamless Websites and Mobile Apps for a Connected Future.</p>
</div>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="/assets/img6.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img5.png" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img1.jpg" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      loop: true,
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
        coverflowEffect: {
          rotate: 15,
          stretch: 0,
          depth: 300,
          modifier: 1,
          slideShadows: true,
        },
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        
      });
    </script>
  </body>
    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }
  
      body {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
  
      .swiper {
        width: 100%;
        height: 100%;
      }
  
      .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 30%;
        height: 80%;
      }
  
      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        -webkit-box-reflect: below 1px linear-gradient(transparent,transparent, #0002, #0004);
      }
  
    </style>
@endsection