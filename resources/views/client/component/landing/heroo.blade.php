<section data-aos="fade-up" data-aos-duration="1000" class="container mx-auto px-4 py-8 mt-24">
    <div  class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-gray-100 p-8 rounded-lg">
        <!-- Left Side (Text) -->
        <div class="flex flex-col justify-center">
            <h1 class="text-4xl font-bold text-gray-800">
                Helps you find your <span class="text-blue-600">Perfect Home</span>
            </h1>
            <p class="mt-4 text-lg text-gray-600">
                Another tag line that can show in banner
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
