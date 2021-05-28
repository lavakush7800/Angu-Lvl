@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="save" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="" name="name">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" placeholder="" name="image">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  @csrf
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection