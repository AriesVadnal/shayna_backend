@extends('layouts.default')

@section('content')
<div class="card">
  <div class="card-header">
    <strong>Ubah tansaksi {{ $item->uuid}}</strong>
  </div>
  <div class="card-body card-block">
    <form action="{{ route('transactions.update', $item->id )}}" method="POST">
      @csrf 
      @method('PUT')
      <div class="form-group">
        <label for="name" class="form-control-label">Nama Pemesan</label>
        <input type="text" 
        name="name" 
        value="{{ $item->name }}"
        class="form-control @error('name') is-invalid @enderror">
      </div>
      <div class="form-group">
        <label for="email" class="form-control-label">Email</label>
        <input type="text" 
        value="{{ $item->email }}" 
        name="email" 
        class="form-control @error('email') is-invalid @enderror">
      </div>
      <div class="form-group">
        <label for="number" class="form-control-label">Nomor HP</label>
        <input type="number" 
        value="{{ $item->number }}" 
        name="number" 
        class="form-control @error('number') is-invalid @enderror">
      </div>
      <div class="form-group">
        <label for="address" class="form-control-label">Alamat Pemesanan</label>
        <input type="text" 
        value="{{ $item->address }}" 
        name="address" 
        class="form-control @error('address') is-invalid @enderror">
      </div>
      <button class="btn btn-primary" type="submit">
        Save
      </button>
    </form>
  </div>
</div>
@endsection