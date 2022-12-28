@extends('Hospital.layout')
@section('title',"edit data")
    
@section('css')
    
<link rel="stylesheet" href="{{ URL::asset('css/edit.css') }}">
@section('main')
<div class="container-fluid w-50 p-5">
    <div class="text-center display-3">Edit Drugs</div>
    <form action="{{ route('addnew.update',$items->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Item name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="item" value={{ $items->item }}>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Number of stock</label>
            <input type="number" class="form-control" aria-describedby="emailHelp" name="stock" value={{ $items->stock }}>
          </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Notic</label>
            <textarea type="text" class="form-control" aria-describedby="emailHelp" name="notic">{{ $items->notic }}</textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection