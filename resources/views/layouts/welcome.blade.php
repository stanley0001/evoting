<DOCTYPE html>
<html>
<head>
<title>{{ config('app.name', 'Laravel') }}</title>
<style>
body{
    background-image:url({{url('images/gif.gif')}});
    
    
    
}
ul{
    list-style-type:none;
    margin:0;
    padding:0;
    width:100%;
    overflow:hidden;
    background-color:#f1f1f1;
}
li{
    float:left;
}
li a{
    display:block;
    color:#000;
    padding:8px 0 8px 16px;
    text-decoration:none;
}
li a.active{
    background-color:#4CAF50;
    color:white;
}
li a:hover:not(.active){
    background-color:#555;
    color:white;
}
.header{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    background-color:#f1f1f1;
    overflow:auto;
    text-align:center;
}
.table{
    position:fixed;
     top:150;
     left:400;
     background:#f1f1f1;
     color:red;
}
.logo{
    position:fixed;
    top:0;
    left:0;
}
.footer{
    position:fixed;
    left:0;
    bottom:0;
    background-color:#000;
    color:#fff;
    text-align:center;
    width:100%;
}
.content{
    background-color:#f1f1f1;
    position:fixed;
    top:150;
    left:32%;
    max-width:40%;
    text-align:center;
    overflow:auto;
}
.content textarea{
    background:transparent;
    color:purple;
    border-radius:11px;
    
}
.messageform{
    height:55%;
    width:500px;
    overflow:auto;
    text-align:center;
}
.checkform{
    max-height:500px;
    width:400px;
    overflow:auto;
    text-align:center;
}
.checkform input[type="submit"]{
	border:1px solid #000;
	outline:none;
	height:40px;
	background:green;
	color:#fff;
	font-size:18px;
	border-radius:20px;
}
.checkform input[type="submit"]:hover{
	cursor:pointer;

	color:#000;
}
.messageform input[type="email"],input[type="text"]{
	border:none;
	border-bottom:1px solid #000;
	background:transparent;
	outline:none;
    width:60%;
	height:40px;
	color:indigo;
	font-size:16px;
}
</style>
</head>
<body>
<div class="header">
<div class="logo">
<img src="{{ asset('images/icons/logo.png') }}" height="55px" width="200px">
</div>
<p>Indipendent Electro & Bounderies commission KENYA<marquee direction="up">Transparency begins with you</marquee></p>
<ul>
<li><a href="{{ ('/') }}">Home</a></li>
<li><a href="{{ ('/check') }}">Voter check</a></li>
<li><a href="{{ ('/login') }}">Cast Vote</a></li>
<li><a href="{{ ('/result') }}">Results</a></li>
<li><a class="active" href="{{ ('/how') }}">How to vote</a></li>
<li><a href="{{ ('/news') }}">News</a></li>
<li><a href="{{ ('/about') }}">About</a></li>
<li><a href="{{ ('/contact') }}">Contact</a></li>
<li><a href="{{ ('/developer') }}">Developer</a></li>
</ul>
</div>
<div class="content">
@yield('content')
</div>
<div class="footer">
<p>&copy stantech 2019</p>
</div>
</body>
</html>