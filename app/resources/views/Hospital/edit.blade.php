@extends('Hospital.layout')
@section('title',"edit data")
    
@section('css')
    
<link rel="stylesheet" href="{{ URL::asset('css/edit.css') }}">
@section('main')
<div class="container-fluid w-50 p-5">
    <div class="text-center display-3">Edit Patient</div>
    <form action="{{ route('test.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="username" value={{ $user->username }}>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" class="form-control" aria-describedby="emailHelp" name="age" value={{ $user->age }}>
          </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" aria-describedby="emailHelp" name="email" value={{ $user->email }}>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">address</label>
            <textarea type="text" class="form-control" aria-describedby="emailHelp" name="address">{{ $user->address }}</textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection