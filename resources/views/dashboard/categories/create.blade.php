@extends('dashboard.layouts.main')

@section('container')
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Category</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Category Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
                @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                 @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Create Post</button>
          </form>
    </div>

    <script>
      const name = document.querySelector('#name');
      const slug = document.querySelector('#slug');

      name.addEventListener('change', function(){
          fetch('/dashboard/categories/checkSlug?name=' + name.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
      });
  </script>

@endsection