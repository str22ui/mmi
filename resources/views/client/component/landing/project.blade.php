    <div data-aos="fade-up" data-aos-duration="1000" class="container mx-auto px-4 py-8">
        <h2 class="text-center text-2xl font-bold mb-6">Our Projects</h2>

        <!-- Cards Container -->
        <div class="swiper-container " data-aos-duration="1000">
            <div class="swiper-wrapper">
                @foreach ($perumahan as $p)
                <div class="swiper-slide">
                    <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col justify-between h-auto relative">
                        @if ($p->images->isNotEmpty())
                            <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('storage/' . $p->images->first()->image_path) }}" alt="" />
                        @else
                            <img src="https://source.unsplash.com/1417x745/?house" class="w-full h-64 object-cover rounded-lg" alt="...">
                        @endif

                        <div class="flex justify-between mt-4">
                            <!-- Left side: Kota and Perumahan -->
                            <div class="flex flex-col justify-start">
                                <h3 class="text-md font-medium">{{ $p->kota }}</h3>
                                <h3 class="text-lg font-semibold">{{ $p->perumahan }}</h3>
                            </div>

                            <!-- Right side: Start From and Harga -->
                            <div class="flex flex-col justify-start text-right">
                                <p class="text-gray-800 font-bold text-sm">Start From</p>
                                <p class="text-md font-semibold">Rp {{$p->harga}} {{ $p->satuan }}-an</p>
                            </div>
                        </div>

                        <div class="pl-4">
                            @if($p->keunggulan)
                                @php
                                    $keunggulan = json_decode($p->keunggulan)
                                @endphp
                                @if (is_array($keunggulan))
                                <ul class="mt-2 text-gray-600 list-none">
                                    @foreach(array_slice($keunggulan, 0, 4) as $item)
                                        <li><i class="fas fa-check-circle mr-2"></i>{{ $item }}</li>
                                    @endforeach
                                    @if (count($keunggulan) > 4)
                                        <li class="text-gray-500 italic">and more...</li>
                                    @endif
                                </ul>
                                @endif
                            @endif


                            <div class="mt-4 flex flex-col space-y-2">
                                @if ($p->status === 'Available')
                                <!-- Button Download Pricelist -->
                                    <a href="/form/{{ $p->id }}"
                                    class="text-black text-center justify-center items-center py-2 px-4 rounded-lg border-2 border-blue-500 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        <i class="fas fa-file-download" style="color:blue"></i> Download Pricelist
                                    </a>
                                @else
                                    <!-- Disabled Button -->
                                    <button disabled
                                    class="text-white py-2 px-4 rounded-lg bg-gray-400 cursor-not-allowed">
                                        <i class="fas fa-file-download"></i> Download Pricelist
                                    </button>
                                @endif

                                <!-- Button Penawaran -->
                                <a href="/formPenawaran/{{ $p->id }}"
                                   class="text-white text-center justify-center items-center py-2 px-4 rounded-lg bg-blue-700 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    <i class="fas fa-handshake"></i> Penawaran
                                </a>

                                <!-- Button See More -->
                                <a href="/showPerumahan/{{$p->id}}"
                                   class="underline text-black py-1 px-4 text-center justify-center items-center hover:rounded-md hover:bg-gray-100 hover:text-black hover:border-b-2 border-blue-500">
                                    <i class="fas fa-info-circle"></i> See More
                                </a>
                            </div>

                        </div>
                    </div>

                </div>


                @endforeach
            </div>

            <!-- Tambahkan navigasi jika diperlukan -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Tambahkan pagination jika diperlukan -->
            <div class="swiper-pagination"></div>
        </div>

    </div>

