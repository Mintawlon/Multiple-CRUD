@extends('Hospital.layout')
@section('title',"Edit Shop")
@section('css')
    
<link rel="stylesheet" href="{{ URL::asset('css/edit.css') }}">
@section('main')
<div class="container-fluid w-50 p-5">
    <div class="text-center display-3">Edit Store</div>
    <form action="{{ route('shop.update',$shop->id) }}" method="POST">
       @csrf
       @method('PUT')
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Store Name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="shop" value={{ $shop->brand }}>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Product</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="product" value={{ $shop->product }}>
          </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1">Payment</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" name="payment" value={{ $shop->payment }}>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">address</label>
            <textarea type="text" class="form-control" aria-describedby="emailHelp" name="address">{{ $shop->address }}</textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection