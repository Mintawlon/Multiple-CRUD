@extends('Hospital.layout')

@section('title',"New Shop")
@section('css') 
<link rel="stylesheet" href="{{ URL::asset('css/addnew.css') }}"> 

    @section('main')
    <div class="container-fluid w-50 p-5">
        <div class="text-center display-3 head">Add New</div>
      <form action="{{ route('shop.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Shop Name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="brand">
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputEmail1">Selling Product</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="product">
              </div>
            <div class="form-group mb-3">
              <label for="exampleInputEmail1">Payment</label>
              <input type="text" class="form-control" aria-describedby="emailHelp" name="payment">
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">address</label>
                <textarea type="text" class="form-control" aria-describedby="emailHelp" name="address"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
        
    @endsection