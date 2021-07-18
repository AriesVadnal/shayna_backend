@extends('layouts.default')

@section('content')
<div class="card">
  <div class="card-header">
    <strong>Tambah barang</strong>
  </div>
  <div class="card-body card-block">
    <form action="{{ route('product-galleries.store')}}" method="POST" enctype="multipart/form-data">
      @csrf 
      <div class="form-group">
        <label for="name" class="form-control-label">Nama Barang</label>
        <select name="products_id" id="products_id" class="form-control">
            @foreach ( $products as $product )
              <option value="{{ $product->id}}">{{ $product->name }}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="photo" class="form-control-label">Foto</label>
        <input type="file" 
        value="{{ old('photo')}}" 
        name="photo" 
        class="form-control @error('photo') is-invalid @enderror">
      </div>
      <div class="form-group">
        <label for="is_default" class="form-control-label">Jadikan Default</label>
        <select name="is_default" id="is_default" class="form-control">
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
      </div>
      <button class="btn btn-primary" type="submit">
        Save
      </button>
    </form>
  </div>
</div>
@endsection