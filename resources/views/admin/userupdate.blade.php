@extends('layouts.Adminapp')

@section('content')
<div class="form">
<form action="/admin/updateuser/{{ $user->id }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<input type="hidden" name="id" id="id" value="{{$user->id}}">
<p>Name</p>
<input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name" value={{$user->name}} required autocomplete="email" autofocus placeholder="Please enter your name" >
<p>Email-Address</p>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" autofocus placeholder="Please enter your email" readonly>
<h4>Fill this field only if you want to change the password</h4>


<p>New Password</p>
<input type="text" name="password" placeholder="please enter new password">
<p>Confirm New Password</p>
<input type="text" name="password1" placeholder="please Confirm your new password">
<button type="submit" name="submit" class="btn btn-primary btn-lg">update</button>
<form>
</div>
@endsection


