@extends('layouts.app')
@section('content')
<h3><u>Personal information</u></h3>
<p><b>Name:</b>{{ Auth::user()->name }}</p>
<p><b>Email:</b>{{ Auth::user()->email }}</p>
<p><b>Reg date:</b>{{ Auth::user()->created_at }}</p>
<p><b>Last update:</b>{{ Auth::user()->updated_at }}</p>
<input type="submit" name="" value="Not {{ Auth::user()->name }}">

@endsection