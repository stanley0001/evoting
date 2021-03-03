<DOCKTYPE html>
<html>
<title>{{ config('app.name', 'Laravel') }}</title>
<head>
<style>
body{
	margin:0;
	padding:0;
	background-color:green;
	background-size: fit;
    background-position: center;
    font-family: sans-serif;
}
.loginbox{
	width:320px;
	height:auto;
	background:#000;
	color:#fff;
	top:50%;
	left:50%;
	position:absolute;
	transform:translate(-50%,-50%);
	box-sizing:border-box;
	padding:70px 30px;

}
h1{
	margin:0;
	padding: 0 0 20px;
	text-align:center;
	font-size:22px;
}
.loginbox p{
	margin:0;
	padding:0;
	font-weight:bold;
}
.loginbox input[type="email"],input[type="password"],input[type="submit"]{
	width:100%;
	margin-bottom:20px;
}
.loginbox input[type="email"],input[type="password"],input[type="text"]{
	border:none;
	border-bottom:1px solid #fff;
	background:transparent;
	outline:none;
	height:40px;
	color:indigo;
	font-size:16px;
}
.loginbox input[type="submit"]{
	border:none;
	outline:none;
	height:40px;
	background:indigo;
	color:#fff;
	font-size:18px;
	border-radius:20px;
}
.loginbox input[type="submit"]:hover{
	cursor:pointer;
	background:pink;
	color:#000;
}
.loginbox a{
	text-decoration:none;
	font-size:12px;
	line-height:20px;
	color:darkgrey;
}
.loginbox a:hover{
	color:red;
}
.loginbox input[type="checkbox"]{
	cursor:pointer;
}

</style>
</head>
<body>
<div class="loginbox">
<h1>Register</h1>
<form method="post" action="{{ route('register') }}">
@csrf
<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
<div class="col-md-6">
<div class="col-md-6">
<input id="email" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('email') }}" required autocomplete="name" autofocus placeholder="Enter name" >

@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
 </div>
</div>
<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
<div class="col-md-6">
<div class="col-md-6">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email" >

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
 </div>
<div class="form-group row">
<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

<div class="col-md-6">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

 @error('password')
 <span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
 </span>
@enderror
 </div>
 </div>
 </div><div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('confirm password') }}</label>
<div class="col-md-6">
<div class="col-md-6">
<input id="email" type="password" class="form-control @error('password1') is-invalid @enderror" name="password_confirmation" value="{{ old('password1') }}" required autocomplete="password1" autofocus placeholder="confirm your password" >

@error('password1')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
 </div>
</div>
<input type="submit" name="" value="Register"><br>
<a href="{{ ('/') }}">Go back Home</a>
<a href="{{ ('/login') }}">Already have account Login</a>
</form>
</div>
</body>
</html>