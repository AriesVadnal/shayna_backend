@extends('layouts.default')

@section('content')
 <div class="orders">
   <div class="row">
     <div class="col-12">
       <div class="card">
         <div class="card-body">
           <h4 class="box-title">Gambar barang</h4>
         </div>
         <div class="card-body">
           <div class="table-stars order-table ov-h">
             <table class="table">
               <thead>
                 <tr>
                   <th>#</th>
                   <th>Nama Barang</th>
                   <th>Foto</th>
                   <th>Default</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>
                 @forelse ($items as $item)
                 <tr>
                  <td>{{ $item->id}}</td>
                  <td>{{ $item->product->name}}</td>
                  <td>
                      <img src="{{ url($item->photo)}}" alt="" style="width:70px;">
                  </td>
                  <td>{{ $item->is_default ? 'Ya' : 'Tidak'}}</td>
                  <td>
                   <form action="{{ route('product-galleries.destroy', $item->id )}}" class="d-inline" method="POST">
                     @method('DELETE')
                     @csrf
                     <button class="btn btn-danger btn-sm" type="submit">
                       <i class="fa fa-trash"></i>
                     </button>
                   </form>
                  </td>
                </tr>
                 @empty
                  <tr>
                    <td class="text-center p-5" colspan="7">
                      Data tidak tersedia
                    </td>
                  </tr>
                 @endforelse
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection