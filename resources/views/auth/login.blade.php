<DOCKTYPE html>
<html>
<title>{{ config('app.name', 'Laravel') }}</title>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
body{
	margin:0;
	padding:0;
	background-image:url({{url('images/5.jpg')}});
	background-size: fit;
    background-position: center;
    font-family: sans-serif;
}
.loginbox{
  outline:1px solid #000;
	width:320px;
	height:420px;
	background:grey;
	color:black;
	top:50%;
	left:50%;
	position:absolute;
	transform:translate(-50%,-50%);
	box-sizing:border-box;
	padding:70px 30px;

}
strong{
    color:red;
    font-size:10px;
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
	background:transparent;
	color:#000;
}
.loginbox a{
	text-decoration:none;
	font-size:12px;
	line-height:20px;
	color:indigo;
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
<video autoplay muted loop id="myVideo">
  <source src="{{url('images/stan.mp4')}}" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  <h1>project_id:default</h1>
  <p>E voting project, All copyrights reserved.</p>
  <p>&copystantech 2019.<p>
  <button id="myBtn" onclick="myFunction()">Pause</button>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
<div class="loginbox">
<h1>Voters login</h1>
<form method="post" action="{{ route('login') }}">
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

 <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
<input type="submit" name="" value="login"><br>
<a href="{{ route('register') }}">Register</a>
<a href="{{ ('/') }}">Go back Home</a><br>
<a href="{{ route('password.request') }}">Lost your password?</a>
</form>
</div>
</body>
</html>