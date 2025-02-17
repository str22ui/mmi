@extends('admin.layouts.index', ['title' => 'Tambah Data Rumah', 'page_heading' => 'Tambah Data Rumah'])

@section('content')
<section class="row">
	<div class="col card px-3 py-3">

	<div class="my-3 p-3 rounded">

		<!-- Table untuk memanggil data dari database -->
        @include('sweetalert::alert')
		<form method="post" action="{{ route('admin.storeRumah') }}" enctype="multipart/form-data">
        @csrf
            {{-- Title --}}


            <div class="mb-3">
              <label for="no_kavling" class="form-label">No Kavling</label>
              <input type="text" autofocus value="" name="no_kavling" id="no_kavling" placeholder="Masukkan No Kavling" class="form-control">
            </div>

            <div class="mb-3">
                <label for="luas_tanah" class="form-label">Luas Tanah</label>
                <input type="text" autofocus value="" name="luas_tanah" id="luas_tanah" placeholder="Masukkan Luas Tanah" class="form-control">
            </div>


            <div class="mb-3">
                <label for="luas_bangunan" class="form-label">Luas Bangunan</label>
                <input type="text" autofocus value="" name="luas_bangunan" id="luas_bangunan" placeholder="Masukkan Luas Bangunan" class="form-control">
            </div>

            <div class="mb-3">
                <label for="posisi" class="form-label">Posisi</label>
                <select id="posisi" name="posisi"
                    class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Badan">Badan</option>
                    <option value="Hoek">Hoek</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" autofocus value="" name="harga" id="harga" placeholder="Masukkan Harga" class="form-control">
            </div>

            <div class="mb-3">
                <label for="perumahan_id" class="form-label block mb-2 text-sm font-medium ">Perumahan</label>
                <select id="perumahan_id" name="perumahan_id"
                    class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="pilih">-- Pilih --</option>
                    @foreach ($perumahan as $item)
                        {{-- <option value="{{ $item->id }}">{{ $item->nama_perumahan }}</option> --}}
                        <option value="{{ $item->id }}">{{ $item->perumahan }}</option>
                    @endforeach
                </select>

            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status"
                    class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Available">Available</option>
                    <option value="DP">DP</option>
                    <option value="Sold">Sold</option>

                </select>
            </div>



            <button type="submit" class="btn btn-primary">Create</button>
            <a class="btn btn-danger" href="{{ route('admin.penawaran') }}">Back</a>
        </form>

		{{-- Menampilkan total pemasukan --}}
		<div class="d-flex align-items-end flex-column p-2 mb-2">
			{{-- <p class="h4 p-3 rounded fw-bolder">Total Pemasukan : Rp. {{ $totalPemasukan }}</p> --}}
		</div>

  </div>
</div>

</section>

<script>
document.getElementById('tipe').addEventListener('change', function() {
            var kantorInput = document.getElementById('kantor');
            if (this.value === 'Perorangan') {
                kantorInput.value = 'N/A';
                kantorInput.readOnly = true;
            } else {
                kantorInput.value = '';
                kantorInput.readOnly = false;
            }
        });
</script>


@endsection



