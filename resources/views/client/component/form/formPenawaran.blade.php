<div class="mx-5 mt-2 md:mt-24 mb-10  ">

    <div class="md:mb-10 text-center pt-18">
        <img class="w-3/4 mx-auto md:w-1/4" src="{{ asset('images/logo.png') }}" alt="">
        {{-- <h2 class="text-2xl text-center font-bold mb-6">Please Fill This Form Below </h2> --}}
        <h2 class="text-xl font-bold mt-6 text-blue-700 "><label for="" class="text-blue-900 uppercase">[
                {{ $perumahan->perumahan }}]</label> E-Booklet & Pricelist Request</h2>

    </div>
    <form method="post"  action="{{ route('form.penawaran') }}"
        class="px-5 py-5 grid grid-cols-1 md:grid-cols-2 gap-4 text-col rounded-md" enctype="multipart/form-data">
        @csrf
        <!-- Bagian kiri form -->
        <div class="text-blue-700 mx-5  ">
            <div class="mb-5 relative">
                <label for="nama" class="form-label block mb-2 text-sm font-medium"> <i class="fas fa-user text-gray-400 mr-2"></i>Nama</label>
                <div class="input-with-icon">
                    <input type="text" id="name" name="nama"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Masukkan nama" value="{{ old('nama') }}" required>
                        @error('nama')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-5 relative">
                <label for="email" class="form-label block mb-2 text-sm font-medium "> <i class="fas fa-envelope text-gray-400 mr-2"></i>Email</label>
                <div class="input-with-icon">
                    <input type="email" id="email-input" name="email"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                        placeholder="Masukkan email" value="{{ old('email') }}">
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-5 relative">
                <label for="no_hp" class="form-label block mb-2 text-sm font-medium"><i class="fas fa-phone text-gray-400 mr-2"></i>Nomor
                    Telepon</label>
                <div class="input-with-icon">
                    <input type="tel" id="phone-input" name="no_hp"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Masukkan no hp" value="{{ old('no_hp') }}"required>
                        @error('no_hp')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-5 relative">
                <label for="domisili" class="form-label block mb-2 text-sm font-medium ">
                        <i class="fas fa-city text-gray-400 mr-2"></i>Domisili</label>
                <div class="input-with-icon">
                    <input type="text" id="city-input" name="domisili"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Masukkan Kota" value="{{ old('domisili') }}" required>
                        @error('domisili')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-5">
                <label for="pekerjaan" class="form-label block mb-2 text-sm font-medium"><i class="fas fa-user text-gray-400 mr-2"></i>Pekerjaan</label>
                <select id="pekerjaaan" name="pekerjaan"
                    class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                    <option value="">-- Pilih --</option>
                    <option value="ASN">ASN</option>
                    <option value="BUMN">BUMN</option>
                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Dll">Dll</option>
                </select>
                @error('pekerjaan')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-5 relative">
                <label for="nama_kantor" class="form-label block mb-2 text-sm font-medium"><i class="fas fa-briefcase text-gray-400 mr-2"></i>Nama Kantor
                </label>
                <div class="input-with-icon">
                    <input type="text" id="city-input" name="nama_kantor"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                        placeholder="Masukkan nama kantor" value="{{ old('nama_kantor') }}"  required>
                        @error('nama_kantor')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-5 hidden">

                <input type="text" id="perumahan_id" name="perumahan_id" value=" {{ $perumahan->id }}"
                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            </div>

             {{-- ===== Perlu Ditambah === --}}
             <div id="dropdown-section" class="mb-5">
                <label for="sumber_informasi" class="form-label block mb-2 text-sm font-medium">Dapat Informasi Dari (Dropdown)</label>
                <select id="sumber_informasi" name="sumber_informasi"
                    class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">-- Pilih Sumber Informasi --</option>
                    <option name="sumber_informasi" value="Instagram MMI">Instagram MMI</option>
                    <option name="sumber_informasi" value="Instagram Perumahan">Instagram Perumahan</option>
                    <option name="sumber_informasi" value="Youtube">Youtube</option>
                    <option name="sumber_informasi" value="Tiktok">Tiktok</option>
                    <option name="sumber_informasi" value="Brosur">Brosur</option>
                    <option name="sumber_informasi" value="Spanduk">Spanduk</option>
                    <option name="sumber_informasi" value="Walk in">Walk in Customer</option>
                    <option name="sumber_informasi" value="Agent">Agent</option>
                    <option name="sumber_informasi" value="Dll">Dll</option>
                    @error('sumber_informasi')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                </select>
            </div>
            <!-- Div untuk "Agent" -->
            <div class="agent flex w-full gap-4" style="display: none;">
                <div class="w-full">
                    <label for="agent_id" class="form-label block mb-2 text-sm font-medium">Nama Agent</label>
                    <select id="agent_id" name="agent_id"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">-- Pilih --</option>
                        @foreach ($agents as $agent)
                            <option value="{{ $agent->id }}" data-kantor="{{ $agent->kantor }}">
                                {{ $agent->nama }} - {{ $agent->kantor }}
                            </option>
                        @endforeach
                    </select>
                    @error('agent_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                </div>
            </div>

        </div>

        <!-- Bagian kanan form -->
        <div class="text-blue-700 mx-5  ">

            <div class="flex w-full gap-4 mb-5">
                <div class="w-full">
                    <label for="rumah_id" class="form-label block mb-2 text-sm font-medium">No Kavling</label>
                    <select id="rumah_id" name="rumah_id"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">-- Pilih --</option>
                        @foreach ($rumah as $r)
                            <option value="{{ $r->id }}"
                                data-lt="{{ $r->luas_tanah}}"
                                data-lb="{{ $r->luas_bangunan}}"
                                data-posisi="{{ $r->posisi}}"
                                >
                               {{ $r->no_kavling}}
                            </option>
                        @endforeach
                    </select>
                    @error('rumah_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                </div>
            </div>

            <div class="mb-5 relative">
                <label for="luas_tanah" class="form-label block mb-2 text-sm font-medium "> <i class="fas fa-envelope text-gray-400 mr-2"></i>Luas Tanah</label>
                <div class="input-with-icon">
                    <input type="luas_tanah" id="luas_tanah" name="luas_tanah"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" readonly>
                </div>

            </div>

            <div class="mb-5 relative">
                <label for="luas_bangunan" class="form-label block mb-2 text-sm font-medium "> <i class="fas fa-envelope text-gray-400 mr-2"></i>Luas Bangunan</label>
                <div class="input-with-icon">
                    <input type="luas_bangunan" id="luas_bangunan" name="luas_bangunan"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" readonly>
                </div>
            </div>

            <div class="mb-5 relative">
                <label for="posisi" class="form-label block mb-2 text-sm font-medium "> <i class="fas fa-envelope text-gray-400 mr-2"></i>Posisi</label>
                <div class="input-with-icon">
                    <input type="posisi" id="posisi" name="posisi"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" readonly>
                </div>
            </div>

                <div class="mb-5">
                    <label for="payment" class="form-label block mb-2 text-sm font-medium"><i class="fas fa-user text-gray-400 mr-2"></i>Payment</label>
                    <select id="payment" name="payment"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option value="">-- Pilih --</option>
                        <option value="Cash Keras">Cash Keras</option>
                        <option value="KPR">KPR</option>
                        <option value="Cash Bertahap">Cash Bertahap</option>
                    </select>
                    @error('payment')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                </div>

                <div class="mb-5">
                    <label for="dp" class="form-label block mb-2 text-sm font-medium"><i class="fas fa-user text-gray-400 mr-2"></i>DP</label>
                    <select id="dp" name="dp"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option value="">-- Pilih --</option>
                        <option value="0%">0%</option>
                        <option value="10%-30%">10% sd 30%</option>
                        <option value=">30%">>30%</option>
                    </select>
                    @error('dp')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                </div>

                <div class="mb-5">
                    <label for="income" class="form-label block mb-2 text-sm font-medium"><i class="fas fa-user text-gray-400 mr-2"></i>Income</label>
                    <select id="income" name="income"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option value="">-- Pilih --</option>
                        <option value="Single">Single</option>
                        <option value="Join">Join</option>
                    </select>
                    @error('income')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                </div>
            </div>

        </div>

        <div class="w-full flex justify-center md:justify-start md:ml-5  ">
            <button type="submit"
                class="text-white w-3/4 bg-blue-700 hover:bg-blue-800 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Submit</button>
        </div>

    </form>
</div>
<script>

</script>
