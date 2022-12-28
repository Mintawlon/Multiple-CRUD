@extends('Hospital.layout')

@section('title',"AddNew")
@section('css') 
<link rel="stylesheet" href="{{ URL::asset('css/addnew.css') }}"> 

    @section('main')
    <div class="container-fluid w-50 p-5">
        <div class="text-center display-3 head">Add New</div>
      <form action="{{ route("test.store") }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="username">
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputEmail1">Age</label>
                <input type="number" class="form-control" aria-describedby="emailHelp" name="age">
              </div>
            <div class="form-group mb-3">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">address</label>
                <textarea type="text" class="form-control" aria-describedby="emailHelp" name="address"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
        
    @endsection