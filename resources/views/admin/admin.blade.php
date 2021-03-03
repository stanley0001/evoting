@extends('layouts.Adminapp')

@section('content')
<h3>Admins</h3>
<table>
<tr>
<td>Name</td><td>Email</td><td>Job title</td><td><a href="{{('/admin/users')}}">Add new admin&nbsp;<a href="{{('/admin/user')}}">view voters</td>
</tr>
@foreach($data as $data)
<tr>
<td>{{$data->name}}</td><td>{{$data->email}}</td><td>{{$data->job_title}}</td><td><a href="{{('/admin/home')}}">Edit&nbsp;<a href="{{('/admin/home')}}">Delete</td>
</tr>
@endforeach
</table>
@endsection