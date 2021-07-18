@extends('layouts.default')

@section('content')
<div class="card">
  <div class="card-header">
    <strong>Tambah barang</strong>
  </div>
  <div class="card-body card-block">
    <form action="{{ route('products.store')}}" method="POST">
      @csrf 
      <div class="form-group">
        <label for="name" class="form-control-label">Nama Barang</label>
        <input type="text" 
        name="name" 
        value="{{ old('name')}}"
        class="form-control @error('name') is-invalid @enderror">
      </div>
      <div class="form-group">
        <label for="type" class="form-control-label">Type Barang</label>
        <input type="text" 
        value="{{ old('type')}}" 
        name="type" 
        class="form-control @error('type') is-invalid @enderror">
      </div>
      <div class="form-group">
        <label for="description" class="form-control-label">Description</label>
        <textarea name="description" id="editor" cols="10" rows="10" class="form-control @error('type') is-invalid @enderror">{{ old('description')}}</textarea>
      </div>
      <div class="form-group">
        <label for="price" class="form-control-label">Harga Barang</label>
        <input type="number" 
        value="{{ old('price')}}" 
        name="price" 
        class="form-control @error('price') is-invalid @enderror">
      </div>
      <div class="form-group">
        <label for="quantity" class="form-control-label">Quantity</label>
        <input type="number" 
        value="{{ old('quantity')}}" 
        name="quantity" 
        class="form-control @error('quantity') is-invalid @enderror">
      </div>
      <button class="btn btn-primary" type="submit">
        Save
      </button>
    </form>
  </div>
</div>
@endsection

@push('addon_script')
<script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
@endpush