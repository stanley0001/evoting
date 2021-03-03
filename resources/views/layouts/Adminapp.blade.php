<DOCTYPE html>
<html>
<title>admin side</title>
<head>
<style>
body{
   background-color:#fff;
}
div.header{
     background-color:#f1f1f1;
	 color:#000;
     position:fixed;
	 top:0%;
	 left:0;
	 right:0;
	 width:100%;
	 height:16%;
	 border:0px;
	 overflow:hidden;
        }
.auth{
	position:fixed;
	right:4%;
	
}
.dropdown{
	cursor:pointer;
    position:relative;
	display:inline-block;
	 text-decoration:none;
}
.dropdown-content a{
	color:#000;
	overflow:hidden;
	padding:0;
	text-decoration:none;
}
.dropdown-content{
	cursor:pointer;
    display:none;
	position:absolute;
	background-color:transparent;
	min-width:160px;
	box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
	padding:12px 16px;
	z-index:1;
	 text-decoration:none;
}
.dropdown:hover .dropdown-content{
     display:block;
}.icon{

    position:fixed;
	left:0;
	display:inline-block;
	 text-decoration:none;
}
.icon-content{
    display:none;
	position:fixed;
	background-color:black;
	min-width:160px;
	box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
	padding:12px 16px;
	z-index:1;
	 text-decoration:none;
}
.icon:hover .dropdown-content{
     display:block;
}


ul {
   list-style-type:none;
   margin:0;
   padding:0;
   background-color:#f1f1f1;
   position:fixed;
   top:17%;
   left:0;
   width:20%;
   overflow:auto;
}
li a{
   display:block;
   color:#000;
   padding:8px 0 8px 16px;
   text-decoration:none;
}
li a.active{
   background-color:#4caf50;
   color:white;
}
li a:hover:not(.active){
   background:transparent;
   border-bottom:1px solid #f00;
   color:#364;
   
}
div.content{
     position:fixed;
	 top:16%;
	 left:21%;

	 width:79%;
	 border:none;
	 height:450px;
	 overflow:auto;
	
        }
#table{
text-align:center;
position:absolute;
bottom:0;
padding:5px;


}
div.footer{
background-color:black;
color:white;
width:100%;
text-align:center;
padding:5px;
position:fixed;
left:0;
bottom:0;
}
.form{
	width:50%;
}
.form p{
	margin:0;
	padding:0;
	font-weight:bold;
}
.form input[type="email"],input[type="password"],input[type="text"]{
	width:100%;
	margin-bottom:20px;
}
.form input[type="email"],input[type="password"],input[type="text"]{
	border:none;
	border-bottom:1px solid #000;
	background:transparent;
	outline:none;
	height:40px;
	color:indigo;
	font-size:16px;
}
.form button[type="submit"]{
	width:30%;
	border:1px solid #000;
	outline:none;
	height:30px;
	background:blue;
	color:#fff;
	font-size:18px;
	border-radius:20px;
}
.form button[type="submit"]:hover{
	cursor:pointer;
	background:black;
	color:#f00;
}
.form a{
	text-decoration:none;
	font-size:12px;
	line-height:20px;
	color:indigo;
}
.form a:hover{
	color:red;
}
.form input[type="checkbox"]{
	cursor:pointer;
}
.candidates img{
	border:none;
	border-radius:50px;
}

</style>

</head>

<body>

</body>
<div class='header'>

<div class="dropdown">
<span>HOME </span>
<div class="dropdown-content">
<p><a href="{{('/')}}">Home</a></p>
</div>
</div>
<div class="auth">
<div class="dropdown">
<span>{{ Auth::user()->name }} </span>

<div class="dropdown-content">
<span><a href="{{ url('/logout') }}"> logout </a></span>
@csrf
</p>
</div>
</div>
</div>

</div>
<ul>
<li><a class="active" href="{{('/admin')}}"><img src={{ asset('images/icons/admin/home.png') }} height="30px" width="30px">Dashbord</a></li>
<li><a href="{{('/admin/home')}}">Home Page Management</a></li>
<li><a href="{{('/admin/polls')}}"><img src={{ asset('images/icons/admin/poll.png') }} height="30px" width="36px">Polls</a></li>
<li><a href="{{('/admin/candidates')}}"><img src={{ asset('images/icons/admin/candidate.png') }} height="30px" width="36px">Candidates</a></li>
<li><a href="{{('/admin/user')}}"><img src={{ asset('images/icons/admin/voter.png') }} height="30px" width="36px">Voters</a></li>
<li><a href="{{('/admin/results')}}"><img src={{ asset('images/icons/admin/result3.png') }} height="30px" width="36px">Results</a></li>
<li><a href="{{('/admin/admin')}}">system admins</a></li>
</ul>
</div>
<div class='content'>
@yield('content')
</div>
<div class='footer'>
Copyright &copystans technologies 2019
</div>


</html>