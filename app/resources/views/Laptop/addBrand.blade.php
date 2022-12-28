@extends('Hospital.layout')

@section('title',"AddNew")
@section('css') 
<link rel="stylesheet" href="{{URL::asset('css/addnew.css')}}"> 

    @section('main')
    <div class="container-fluid w-50 p-5">
        <div class="text-center display-3 head">New Branded</div>
      <form action="{{ route('brand.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Brand Name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputEmail1">Product Type</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="product">
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputEmail1">Payment</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="payment">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
        
    @endsection