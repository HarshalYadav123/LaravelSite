@extends('layout')

@section('content')
<div class="col-sm-6">
<h1>Edit Restaurant</h1>
    <form method="post" action="/edit">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="hidden" name="id" value="{{$data->id}}">
        <input type="text" name="name" class="form-control" value="{{$data->name}}" id="exampleInputEmail1" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="{{$data->email}}" id="exampleInputEmail1" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" value="{{$data->address}}" id="exampleInputEmail1" placeholder="Enter Address">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop