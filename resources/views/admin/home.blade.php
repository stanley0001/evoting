@extends('layouts.Adminapp')

@section('content')
<h3>admin home management</h3>
<a href="{{ ('/upload/customize') }}">customize home images</a><br>
<a href="{{('upload/customize') }}">customize current advertizement</a><br>
<a href="{{ ('upload/customize') }}">customize About us</a>
@endsection