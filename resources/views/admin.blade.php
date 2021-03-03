@extends('layouts.Adminapp')

@section('content')
<h3>Personal information</h3>
<p>Name:{{Auth::user()->name}}<a href="">Edit</a></p>
<p>Email:{{Auth::user()->email}}</p>
<p>Job title:{{Auth::user()->job_title}}</p>
<p><a href="">change password</a></p>
@endsection