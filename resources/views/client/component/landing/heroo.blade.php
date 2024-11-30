<section data-aos="fade-up" data-aos-duration="1000" class="container mx-auto px-4 py-8 mt-24">
    <div  class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-gray-100 p-8 rounded-lg">
        <!-- Left Side (Text) -->
        <div class="flex flex-col justify-center">
            <p class="text-lg text-gray-600 text-justify mr-10">
               <span class="text-gray-800 font-bold">Mitramas Multi Investindo</span> adalah badan usaha yang bergerak di bidang Developer dan Kontraktor. Kami memulai pembangunan perumahan sebagai Developer sejak 2007. Kami berfokus pada pembangunan hunian tempat tinggal. Dimulai dari wilayah Depok, dan kini kami juga mengembangkan pembangunan perumahan sampai ke wilayah diluar Depok seperti JaBoTaBek. Sesuai Visi kami sebagai progressive and innovative property company, kami berkomitmen untuk menambah jumlah dan memperluas perumahan yang kami kembangkan.
            </p>
            <p class="mt-4 text-lg text-gray-600 text-justify mr-10">
                Diawal Kami telah mulai membangun dengan lahan yang kami miliki sendiri, dengan team kontraktor yang juga kami miliki sendiri. Atas dasar pengalaman kami membangun, dan untuk mendukung percepatan ekspansi kami, saat ini kami membuka relasi kepada Land Owner dan Investor untuk bekerjasama dalam pembangunan perumahan kami selanjutnya. Kami siap bekerjasama secara professional dan kami siap berdiskusi untuk membahasnya
            </p>
            <p class="mt-4 text-lg text-gray-600 text-justify mr-10">
                Beberapa Project Perumahan kami yang masih dan akan launching juga kami siapkan dengan kualitas terbaik untuk kepuasan konsumen kami. Pilih Perumahan yang anda inginkan dan hubungi kontak kami yang ada di website ini.
            </p>
        </div>

        <!-- Right Side (Image and Button) -->
        <div class="card-slider-container">
            <div class="swiper-wrapper">
                @foreach ($perumahan as $p)
                <div class="swiper-slide relative">
                    <!-- Image -->
                    @if ($p->images->isNotEmpty())
                    <img src="{{ asset('storage/' . $p->images->first()->image_path) }}" alt="House Image" class="w-full h-full object-cover rounded-lg">
                    @else
                    <img src="https://source.unsplash.com/1417x745/?house" class="w-full h-full object-cover rounded-lg" alt="...">
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
                @endforeach
            </div>

            <!-- Pagination -->

        </div>



    </div>
</section>
<script>

</script>
