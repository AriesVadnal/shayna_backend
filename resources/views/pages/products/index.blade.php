@extends('layouts.default')

@section('content')
 <div class="orders">
   <div class="row">
     <div class="col-12">
       <div class="card">
         <div class="card-body">
           <h4 class="box-title">Daftar Barang</h4>
         </div>
         <div class="card-body">
           <div class="table-stars order-table ov-h">
             <table class="table">
               <thead>
                 <tr>
                   <th>#</th>
                   <th>Name</th>
                   <th>Type</th>
                   <th>Price</th>
                   <th>Quantity</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>
                 @forelse ($items as $item)
                 <tr>
                  <td>{{ $item->id}}</td>
                  <td>{{ $item->name}}</td>
                  <td>{{ $item->type}}</td>
                  <td>{{ $item->price}}</td>
                  <td>{{ $item->quantity}}</td>
                  <td>
                    <a href="{{ route('gallery', $item->id)}}" class="btn btn-info btn-sm">
                      <i class="fa fa-picture-o"></i>
                    </a>
                    <a href="{{ route('products.edit', $item->id )}}" class="btn btn-primary btn-sm">
                     <i class="fa fa-pencil"></i>
                   </a>
                   <form action="{{ route('products.destroy', $item->id )}}" class="d-inline" method="POST">
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