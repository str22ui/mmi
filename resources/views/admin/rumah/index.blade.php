@extends('admin.layouts.index', ['title' => 'Data Rumah', 'page_heading' => 'Data Rumah'])


@section('content')
@include('sweetalert::alert')
<section class="row">
	<div class="col card px-3 py-3">

	<div class="my-3 p-3 rounded">


        {{-- <a href="{{ route('admin.createTeacher') }}" class="btn btn-success me-2 py-2" > --}}
        <a href="{{ route('admin.createRumah') }}" class="btn btn-success me-2 py-2" >
            + Insert Data
        </a>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
        {{ session('success') }}
        </div>
        @endif
		<!-- Table untuk memanggil data dari database -->
		<table class="table">
            <thead>
                <tr>
                    <th class="col-sm-1">No</th>
                    <th class="col-md-1">No Kavling </th>
                    <th class="col-md-1">LT</th>
                    <th class="col-md-1">LB</th>
                    <th class="col-md-2 ">Posisi</th>
                    <th class="col-md-2">Harga</th>
                    <th class="col-md-2">Perumahan</th>
                    <th class="col-md-2">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($rumah as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $r->no_kavling }}</td>
                        <td>{{ $r->luas_tanah}}</td>
                        <td>{{ $r->luas_bangunan }}</td>
                        <td>{{ $r->posisi }}</td>
                        <td>{{ $r->harga }}</td>
                        <td>{{ $r->perumahan->perumahan }}</td>


                        <td>
                            {{-- <a href='{{ route('admin.showTeacher', ['management' => $m->slug])  }}' class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a> --}}
                            <a href='#' class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                            {{-- <a href="{{ route('admin.editTeacher', ['management' => $m->slug]) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a> --}}
                            <a href="{{ route('admin.editRumah', ['id' => $r->id]) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data?')" class="d-inline" action="{{ route('admin.deleteRumah') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <!-- Input untuk mengirim ID perumahan yang ingin dihapus -->
                                <input type="hidden" name="id" value="{{ $r->id }}">
                                <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
		</table>


		<div class="d-flex align-items-end flex-column p-2 mb-2">

		</div>

		{{-- {{ $management->withQueryString()->links() }} --}}
  </div>
</div>

</section>
@endsection
