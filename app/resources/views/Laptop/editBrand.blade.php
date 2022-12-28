@extends('Hospital.layout')
@section('title',"edit data")
    
@section('css')
    
<link rel="stylesheet" href="{{ URL::asset('css/edit.css') }}">
@section('main')
<div class="container-fluid w-50 p-5">
    <div class="text-center display-3">Edit Drugs</div>
    <form action="{{ route('brand.update',$brand->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Item name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="brand" value={{ $brand->brand }}>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Number of stock</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="product" value={{ $brand->product }}>
          </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Notic</label>
            <textarea type="text" class="form-control" aria-describedby="emailHelp" name="payment">{{ $brand->payment }}</textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection