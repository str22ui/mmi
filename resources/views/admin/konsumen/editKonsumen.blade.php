@extends('admin.layouts.index', ['title' => 'Ebook', 'page_heading' => 'Update Ebook'])

@section('content')
<section class="row">
	<div class="col card px-3 py-3">

	<div class="my-3 p-3 rounded">
        
		<!-- Table untuk memanggil data dari database -->
    @include('sweetalert::alert')
		<form class="mb-5" method="post" action="{{ route('admin.updateEbook', ['id' => $ebook->id]) }}"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            {{-- Title --}}
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" autofocus value="{{ old('title', $ebook->title) }}" name="title" id="title" placeholder="Masukkan Title" class="form-control @error('title') is-invalid @enderror">
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror

            </div>
            {{-- Slug --}}
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" name="slug" id="slug" placeholder="Slug akan digenerate.." value="{{ old('slug', $ebook->slug) }}" readonly class="form-control @error('slug') is-invalid @enderror" id="slug" required>
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            {{-- Ebook Cover --}}
            <div class="mb-3">
              <label for="book_cover" class="form-label">Cover Ebook</label>

              @if (!empty($ebook->img))
              <input type="hidden" name="oldImage" value="{{ $ebook->img }}">
              <img src="{{ env('STORAGE_URL') .$ebook->img }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
              @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
              @endif
              <input class="form-control @error('img') is-invalid @enderror" onchange="previewImage()" type="file" id="img" name="img" accept="image/png, image/gif, image/jpeg, image/webp" >
              @error('img')
                {{ $message }}
              @enderror
            </div>
            {{-- Ebook File --}}
            <div class="mb-3">
              <label for="book_cover" class="form-label">File Ebook</label>

              @if (!empty($ebook->doc))
              <input type="hidden" name="oldDoc" value="{{ $ebook->doc }}">
              File Buku Sebelumnya <a class="mt-3 " target="_blank" href="{{ env('STORAGE_URL') . $ebook->doc }}"><i class="bi bi-journal-album"></i> : {{ $ebook->title }}</a>
              @endif
              <input class="form-control @error('doc') is-invalid @enderror" onchange="previewImage()" type="file" id="doc" name="doc" accept=".pdf, .doc, .docx, .ppt, .pptx" >
              @error('doc')
                {{ $message }}
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-danger" href="{{ route('admin.ebook') }}">Back</a>
        </form>
			
		{{-- Menampilkan total pemasukan --}}
		<div class="d-flex align-items-end flex-column p-2 mb-2">
			{{-- <p class="h4 p-3 rounded fw-bolder">Total Pemasukan : Rp. {{ $totalPemasukan }}</p> --}}
		</div>
		{{-- Paginator --}}
		{{-- {{ $data->withQueryString()->links() }} --}}
  </div>
</div>

</section>

{{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> --}}
    <script>
      const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/admin/checkSlugTitle?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });


        function previewImage(){
          const image = document.querySelector('#img');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
          }
        }

    </script>

@endsection



