@extends('layouts.Adminapp')

@section('content')
<h3>Voters</h3>
<table>
<tr>
<td>Name</td><td>Email</td><td><a href="{{route('register')}}">Add new voter&nbsp;<a href="{{('/admin/admin')}}">view admins</td>
</tr>
@foreach($data as $data)
<tr>
<td>{{$data->name}}</td><td>{{$data->email}}</td><td><button><a href="edituser/{{$data->id}}" class="btn btn-succes">edit</a></button></td>
@endforeach
</table>
@endsection