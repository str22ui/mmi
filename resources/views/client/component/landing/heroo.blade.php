<section data-aos="fade-up" data-aos-duration="1000" class="container mx-auto px-4 py-8 mt-24">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-gray-100 md:p-8 p-4 rounded-lg">
        <!-- Right Side (Image and Button, displayed first in mobile view) -->
        <div class="order-1 md:order-2 card-slider-container">
            <div class="swiper-wrapper">
                @foreach ($perumahanStat as $p)
                    <!-- Kondisi untuk menampilkan hanya perumahan yang statusnya Available -->
                    @if ($p->status === 'Available')
                        <div class="swiper-slide relative">
                            <!-- Image -->
                            @if ($p->images->isNotEmpty())
                                <img src="{{ asset('storage/' . $p->images->first()->image_path) }}" alt="House Image"
                                    class="w-full h-96 object-cover rounded-lg">
                            @else
                                <img src="https://source.unsplash.com/1417x745/?house" class="w-full h-96 object-cover rounded-lg"
                                    alt="...">
                            @endif

                            <!-- Location Text -->
                            <span class="absolute top-4 left-4 bg-gray-200 text-black font-semibold py-1 px-3 rounded-lg">
                                {{ $p->perumahan }}
                            </span>

                            <!-- Button -->
                            <a href="/showPerumahan/{{$p->id}}"
                                class="absolute bottom-4 left-4 bg-white text-black font-semibold py-2 px-6 rounded-full shadow-lg hover:bg-gray-200 transition">
                                See details
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>


        <!-- Left Side (Text, displayed second in mobile view) -->
        <div class="order-2 md:order-1 flex flex-col justify-center">
            <p class="text-gray-700 text-justify md:mr-10">
                <span class="text-lg font-semibold ">PT. Mitramas Multi Investindo</span> adalah Developer dan
                Kontraktor yang beroperasi sejak 2007. Fokus kami pada pembangunan hunian tempat tinggal. Dimulai dari
                wilayah Depok, dan kini telah mengembangkan pembangunan perumahan ke wilayah lain. Visi kami sebagai
                progressive and innovative property company, kami berkomitmen untuk memperluas jaringan perumahan kami.
            </p>
            <p class="mt-4 text-gray-700 text-justify md:mr-10">
                Untuk pengembangan Project lain, kami terbuka bagi Pemilik Lahan dan Investor untuk menjalin Kerjasama
                secara professional. Kami siap berdiskusi untuk pembahasan lebih detail.
            </p>
        </div>
    </div>
</section>
