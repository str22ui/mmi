{{-- <div class="max-w-6xl mx-auto p-6 bg-gray-100"> --}}
    <div class=" mx-auto bg-gray-100 md:mt-32 ">
        <!-- Carousel dan Judul -->
        <div class="text-center mb-6 md:pt-12">
            <h1 class="text-2xl font-bold md:pt-18">{{ $perumahan->perumahan }}</h1>
        </div>
        <div class="image-galery relative overflow-hidden w-full">
            <!-- Left Button -->
            <button class="carousel-btn left-btn">
                &#8249;
            </button>

            <!-- Carousel Wrapper -->
            <div class="image w-screen flex gap-4">
                @if ($perumahan->images->isNotEmpty())
                    @foreach ($perumahan->images as $image)
                        <div class="card flex-none">
                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Perumahan Image" class="w-full rounded-md h-full">
                        </div>
                    @endforeach
                @else
                    <div class="card flex-none">
                        <img src="https://via.placeholder.com/1200x800" alt="Default Image" class="w-full rounded-md">
                    </div>
                @endif
            </div>

            <!-- Right Button -->
            <button class="carousel-btn right-btn">
                &#8250;
            </button>
        </div>



        <div class="bg-primary text-white md:mt-4 mx-auto px-6 py-6 md:px-24 md:py-12 rounded-lg shadow-md mb-8 grid grid-cols-1 md:grid-cols-4 gap-y-6 md:gap-x-6">
            <!-- Kolom Kiri: Deskripsi -->
            <div class="text-left">
                <h2 class="text-lg font-semibold">Alamat</h2>
                <p>{{ $perumahan->lokasi }}, {{ $perumahan->kota }}</p>
                {{-- <p class="mt-2">100% TERJUAL</p> --}}
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
                    <div class="text-left ">
                        <h2 class="text-lg font-semibold">Fasilitas</h2>
                        <ul class="mt-2 space-y-1 text-left items-left justify-start md:text-right">
                            @foreach ($fasilitas as $item)
                                <li class="flex md:items-center justify-start  gap-2 t">
                                    {{ $item }}<i class="fas fa-check-circle"></i>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @endif

            <!-- Kolom Bawah: Keunggulan -->
            @if ($perumahan->keunggulan)
                @php $keunggulan = json_decode($perumahan->keunggulan); @endphp
                @if (is_array($keunggulan))
                    <div class="text-left">
                        <h2 class="text-lg font-semibold">Keunggulan</h2>
                        <ul class="mt-2 space-y-1 text-left items-left justify-start md:text-right">
                            @foreach ($keunggulan as $item)
                                <li class="flex md:items-center justify-start  gap-2 t">
                                    {{ $item }}<i class="fas fa-check-circle"></i>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                @endif
            @endif
        </div>

    <div class="container mx-auto bg-gray-100 flex flex-col lg:flex-row justify-center items-start gap-8 mt-4 p-6 rounded-lg">
        @if(isset($embedUrl))
            <!-- Video -->
            <iframe
                src="{{ $embedUrl }}"
                frameborder="0"
                allowfullscreen
                class="rounded-lg shadow-lg w-full lg:w-1/2 lg:h-96 h-64">
            </iframe>
        @endif

        <!-- Deskripsi -->
        <div class="text-black flex-1 @if(!isset($embedUrl)) w-full @endif mt-4 lg:mt-0">
            <h1 class="text-xl font-semibold mb-4">Deskripsi</h1>
            <p>{{ $perumahan->deskripsi }}</p>
        </div>
    </div>




