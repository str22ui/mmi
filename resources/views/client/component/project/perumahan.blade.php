{{-- <div class="max-w-6xl mx-auto p-6 bg-gray-100"> --}}
<div class=" mx-auto bg-gray-100 md:mt-32 ">
    <!-- Carousel dan Judul -->
    <div class="text-center mb-6 md:pt-12">
        <h1 class="text-2xl font-bold md:pt-18">{{ $perumahan->perumahan }}</h1>
    </div>
    <div class="flex justify-center items-center mb-8">
        <!-- Carousel Wrapper -->
        <div class="swiper-container card-slider-container w-full md:w-2/3 relative">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <!-- Gambar Carousel -->
                @if ($perumahan->images->isNotEmpty())
                    @foreach ($perumahan->images as $image)
                        <div class="swiper-slide">
                            <img class="w-full rounded-lg shadow-md mb-4"
                                 src="{{ asset('storage/' . $image->image_path) }}"
                                 alt="Perumahan Image" />
                        </div>
                    @endforeach
                @else
                    <div class="swiper-slide">
                        <img src="https://source.unsplash.com/1417x745/?house"
                             class="w-full rounded-lg shadow-md" alt="Default House Image">
                    </div>
                @endif
            </div>
            <!-- Navigation Buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination (Optional) -->
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <div class="bg-primary text-white mx-auto px-24 py-12 rounded-lg shadow-md mb-8 grid grid-cols-1 md:grid-cols-3 gap-x-6 ">
        <!-- Kolom Kiri: Deskripsi -->
        <div class="text-left">
            <h2 class="text-lg font-semibold">Alamat</h2>
            <p>{{ $perumahan->lokasi }}, {{ $perumahan->kota }}</p>
            <p class="mt-2">100% TERJUAL</p>
            <p class="flex items-center gap-2 mt-2">
                <span class="text-sm"><i class="fas fa-ruler-combined"></i> {{ $perumahan->luas }} m²</span>
                <span class="text-sm"><i class="fas fa-home"></i> {{ $perumahan->unit }} unit</span>
            </p>
        </div>


        <!-- Kolom Tengah: Tipe Unit -->
        @if ($perumahan->tipe)
            @php $tipe = json_decode($perumahan->tipe); @endphp
            @if (is_array($tipe))
                <div class="text-center">
                    <h2 class="text-lg font-semibold">Tipe Unit</h2>
                    <div class="flex flex-wrap justify-center gap-2 mt-2">
                        @foreach ($tipe as $item)
                            <span class="bg-white text-blue-600 px-3 py-1 rounded-full text-sm shadow">Tipe {{ $item }}</span>
                        @endforeach
                    </div>
                </div>
            @endif
        @endif

        <!-- Kolom Kanan: Fasilitas -->
        @if ($perumahan->fasilitas)
            @php $fasilitas = json_decode($perumahan->fasilitas); @endphp
            @if (is_array($fasilitas))
                <div class="text-right">
                    <h2 class="text-lg font-semibold">Fasilitas</h2>
                    <ul class="mt-2 space-y-1">
                        @foreach ($fasilitas as $item)
                            <li class="flex items-center justify-end gap-2">
                                <i class="fas fa-check-circle"></i> {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endif
    </div>
    @if(isset($embedUrl))




</div>
<div class="container mx-auto bg-gray-100 flex justify-center items-start gap-8 mt-4 p-6 rounded-lg">
    <!-- Video -->
    {{-- @if(isset($embedUrl)) --}}
        <iframe
            src="{{ $embedUrl }}"
            frameborder="0"
            allowfullscreen
            class="rounded-lg shadow-lg"
            width="50%"
            height="400px">
        </iframe>
    @else
        <p class="text-center">Video tidak tersedia.</p>
    @endif

    <!-- Deskripsi -->
    <div class="text-black flex-1">
        <h1 class="text-xl font-semibold mb-4">Deskripsi</h1>
        <p>{{ $perumahan->deskripsi }}</p>
    </div>
</div>

