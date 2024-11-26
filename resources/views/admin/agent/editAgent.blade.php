@extends('admin.layouts.index', ['title' => 'Edi Data Agent', 'page_heading' => 'Edit Data Agent'])

@section('content')
<section class="row">
	<div class="col card px-3 py-3">

	<div class="my-3 p-3 rounded">

		<!-- Table untuk memanggil data dari database -->
        @include('sweetalert::alert')
        <form method="post" action="{{ route('admin.updateAgent', ['id' => $agent->id]) }}" enctype="multipart/form-data">
            @method('PUT')
        @csrf
            {{-- Title --}}


            <div class="mb-3">
              <input type="hidden" value="0" name="views">
              <label for="nama" class="form-label">Nama Agent</label>
              <input type="text" value="{{ $agent->nama }}" name="nama" id="nama" placeholder="Masukkan Nama Agent" class="form-control">

            </div>

            <div class="mb-3">

                <label for="tipe" class="form-label">Tipe Agent</label>
                <select class="form-select" id="tipe" name="tipe">

                    <option value="Korporat"
                    {{ $agent->tipe === 'Korporat' ? 'selected' : '' }}>Korporat</option>
                    <option value="Perorangan" {{ $agent->tipe === 'Perorangan' ? 'selected' : '' }}>
                        Perorangan</option>
                    </select>
            </div>



            <div class="mb-3">
                <input type="hidden" value="0" name="views">
                <label for="kantor" class="form-label">Kantor Agent</label>
                <input type="text" value="{{ $agent->kantor }}" name="kantor" id="kantor" placeholder="Masukkan Nama Kantor" class="form-control">
              </div>

              <div class="mb-3">
                <input type="hidden" value="0" name="views">
                <label for="no_hp" class="form-label">No Telepon</label>
                <input type="text" value="{{ $agent->no_hp }}" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Telepon" class="form-control">
              </div>

              <div class="mb-3">
                <input type="hidden" value="0" name="views">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" value="{{ $agent->alamat }}" name="alamat" id="alamat" placeholder="Masukkan Alamat" class="form-control">
              </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-danger" href="{{ route('admin.agent') }}">Back</a>
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



