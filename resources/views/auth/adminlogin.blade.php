<DOCKTYPE html>
<html>
<title>{{ config('app.name', 'Laravel') }}</title>
<head>
<style>
body{
	margin:0;
	padding:0;
	background-image:url({{url('images/5.jpg')}});
	background-size: fit;
    background-position: center;
    font-family: sans-serif;
}
.loginbox{
	width:320px;
	height:420;
	background:lightblue;
	color:green;
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
.loginbox input[type="email"],input[type="password"]{
	border:none;
	border-bottom:1px solid #000;
	background:transparent;
	outline:none;
	height:40px;
	color:indigo;
	font-size:16px;
}
.loginbox input[type="submit"]{
	border:1px solid #000;
	outline:none;
	height:40px;
	background:transparent;
	color:#fff;
	font-size:18px;
	border-radius:20px;
}
.loginbox input[type="submit"]:hover{
	cursor:pointer;

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
<h1>Admin login</h1>
<form method="post" action="{{ route('admin.login.submit') }}">
@csrf
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
<input type="checkbox" name="" value="remember">Remember Me<br>
<input type="submit" name="" value="login"><br>
<a href="{{ route('password.request') }}">Lost your password?</a>
<a href="{{ ('/') }}">Go back Home</a>
</form>
</div>
</body>
</html>