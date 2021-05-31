@extends('layouts.app')
@section('title','user_show')
@section('content')
<?php
  // dd($data);
?>
<div class="container">
 <center> <h2>User Table</h2></center>   
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>IMAGES</th>
      </tr>
    </thead>
    <tbody>
    @foreach($results as $data)
      <tr>
        <td>{{ $data['id'] }}</td>
        <td>{{ $data['name'] }}</td>
        <td><img src='<?php echo "/storage/".str_replace('public/frontend/img/','',$data['image']); ?>' width="80" /></td>
        <td>
        <form  action="user/edit/{{ $data['id'] }}">
        @csrf
        <button class="btn btn-primary btn-sm">Edit</button>
        </form>
        </td>
        <td>
        <a href="user/delete/{{ $data['id'] }}">
        <button class="btn btn-primary btn-sm ">Delete</button>
        </a>
        </td>
      </tr>
    @endforeach
    </tbody>
    <td></td>
    <td>
        <a href="/user">
        <button class="btn btn-primary btn-md ">Add User</button>
        </a>
        </td>
  </table>
</div>
@endsection