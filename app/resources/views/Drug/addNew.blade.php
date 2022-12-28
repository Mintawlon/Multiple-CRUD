@extends('Hospital.layout')

@section('title',"AddNew")
@section('css') 
<link rel="stylesheet" href="{{URL::asset('css/addnew.css')}}"> 

    @section('main')
    <div class="container-fluid w-50 p-5">
        <div class="text-center display-3 head">Add New</div>
      <form action="{{ route("addnew.store") }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Item Name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="itemname">
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputEmail1">Total Number of Stock</label>
                <input type="number" class="form-control" aria-describedby="emailHelp" name="total">
              </div>
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Awareness of Drugs</label>
                <textarea type="text" class="form-control" aria-describedby="emailHelp" name="notic"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
        
    @endsection