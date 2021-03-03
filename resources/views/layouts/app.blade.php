<DOCKTYPE html>
<html>
<head>
<title>dashbord</title>
<style>
body{
	font-family:times;
}
.header{
	position:fixed;
	top:0;
	left:0;
	width:100%;
	height:15%;
	background-color:#f1f1f1;
	color:#000;
	text-align:center;
}
.header a{
	text-decoration:none;
	color:#000;
	position:fixed;
	right:10;

}

.sidebar{
	height:50%;
	width:17%;
	position:fixed;
	top:16%;
	left:0;
	background-color:#f1f1f1;
	color:#fff;
	text-align:left;
	overflow:auto;
}
.sidebar a{
	text-decoration:none;
	font-size:20px;
	

}
.sidebar a:hover{
	text-decoration:none;
	color:#000;
	border-bottom:1px solid #f23;

}
.content{
	height:70%;
	width:80%;
	position:fixed;
	top:15%;
	left:20%;
	background:transparent;
	overflow:auto;
}
.content input[type="submit"]{
	background-color:#000;
	color:#fff;
	border-radius:20px;
	position:fixed;
	bottom:100;
	cursor:pointer;

}
.warnning{
	color:red;
	position:fixed;
	bottom:60;
	overflow:auto;
}
.footer{
	width:100%;
	position:fixed;
	bottom:0;
	left:0;
	background-color:black;
	color:#fff;
	text-align:center;
}
</style>
<head>
<body>
<div class="header">
<div class="auth">
<div class="dropdown">
<span>welcome {{ Auth::user()->name }} </span>
<div class="dropdown-content">
<span><a href="{{ url('/logout') }}"> logout </a></span>
</p>
@csrf

</div>
</div>
</div>

<p>indipendent electro and boundery commision</p>
</div>
<div class="content">
@yield('content')
</div>
<div class="sidebar">
<img src={{ asset('images/icons/users/home.png') }} width="40" height="30" alt="dashbord"><a href="/home">darshbord</a><br>
<img src={{ asset('images/icons/users/vote3.png') }} width="40" height="30" alt="vote"><a href="/vote">vote</a><br>
<img src={{ asset('images/icons/users/check1.png') }} width="40" height="30" alt="status"><a href="/votestatus">my vote status</a><br>
<img src={{ asset('images/icons/users/result3.png') }} width="40" height="30" alt="results"><a href="results">view results</a>
</div>
<div class="footer">
<p>&copy; stantech 2019</p>
</div>
</body>
