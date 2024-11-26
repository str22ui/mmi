@extends('client.layouts.index')

@section('title', 'Sejarah')

@section('content')
    <section class="overflow-x-hidden">


      <div class="container mx-auto px-4 py-16">
          <h2 class="text-3xl font-bold text-center text-[#C09859] mb-12">Fasilitas SMK Al-Hasra <div class="w-1/4 h-1 bg-primaryDark mt-2 mx-auto"></div></h2>

          <div class="relative">
              <div class="swiper-container">
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas1.png" alt="Fasilitas 1" class="rounded-lg shadow-lg w-full">
                  </div>
                  <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas2.png" alt="Fasilitas 2" class="rounded-lg shadow-lg w-full">
                  </div>
                  <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas3.png" alt="Fasilitas 3" class="rounded-lg shadow-lg w-full">
                  </div>
                  <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas4.png" alt="Fasilitas 4" class="rounded-lg shadow-lg w-full">
                  </div>
                  <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas5.png" alt="Fasilitas 5" class="rounded-lg shadow-lg w-full">
                  </div>
                  <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas6.png" alt="Fasilitas 6" class="rounded-lg shadow-lg w-full">
                  </div>
                  <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas7.png" alt="Fasilitas 7" class="rounded-lg shadow-lg w-full">
                  </div>
                  <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas8.png" alt="Fasilitas 8" class="rounded-lg shadow-lg w-full">
                  </div>
                  <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas9.png" alt="Fasilitas 9" class="rounded-lg shadow-lg w-full">
                  </div>
                  <div class="swiper-slide">
                      <img src="/images/fasilitas/fasilitas10.png" alt="Fasilitas 10" class="rounded-lg shadow-lg w-full">
                  </div>
                      <!-- Tambahkan slide sesuai kebutuhan -->
                  </div>
              </div>
              <!-- Navigasi Swiper -->
              <div class="swiper-button-next absolute right-0 top-1/2 transform -translate-y-1/2"></div>
              <div class="swiper-button-prev absolute left-0 top-1/2 transform -translate-y-1/2"></div>
          </div>
      </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
    </script>
@endsection

