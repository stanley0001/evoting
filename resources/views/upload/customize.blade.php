<DOCKTYPE html>
<html>
<head>
<title>home management</title>
<style>
html{
	background:lightblue;
}
.links{
	border:none;
	padding:0;
	outline:1px solid #000;
	margin:0;
	background:transparent;
	width:10%;
	height:auto;
	color:lightblue;
}
.links a:hover{
	background:blue;
	color:#fff;
}
.links a{
	text-decoration:none;
	background:transparent;
}
.image{
    height:300px;
    width:200px;
    border-right:1px solid #000;
	overflow:hidden;
	margin:0;
	padding:0;
	background-image:;
	background-size: fit;
    background-position: center;
    font-family: sans-serif;
}
.imagepic{
    height:300px;
    width:200px;
    border-right:none;
	overflow:hidden;
	margin:0;
	padding:0;
	background-image:;
	background-size: fit;
    background-position: center;
    font-family: sans-serif;
}
.image input[type="submit"]{
	border:none;
	outline:none;
	height:40px;
	background:lightgreen;
	color:#fff;
	font-size:18px;
	border-radius:20px;
}
.image input[type="submit"]:hover{
	cursor:pointer;
	background:green;
	color:#000;
}
.image input[type="text"]{
	border:none;
	border-bottom:1px solid #000;
	background:transparent;
	outline:none;
	height:30px;
	color:green;
	font-size:14px;
}
.image a{
	border:none;
	outline:none;
	height:40px;
	background:#000;
	color:#fff;
	font-size:12px;
	border-radius:20px;
	text-decoration:none;
}
.image a:hover{
	cursor:pointer;
	background:red;
	color:#000;
}

</style>
</head>
<body>
<h3>home page image customisation</h3>
<div class="links">
<a href="{{ ('/admin') }}">Darshbord</a><br>
<a href="{{ route('admin.home') }}">Back</a><a href="{{ ('/') }}">HOME</a><br>
</div>
<table>
<tr>
@foreach($data as $data)
<td>
<div class="imagepic">
<img src="{{URL::asset($data->image)}}">
</div>
</td>
<td>
<form action="update/{{ $data->id}}" method="post" enctype=multipart/form-data>
@csrf
<div class="image">
<h4>{{ $data->description }}</h4>
<div class="upload">
<input type="file" name="image"><br>
<input type="text" name="description" placeholder="must write description"><br>
<input type="submit" name="ok" value="update"><br><br>
<a href="#">Delete</a>
</div>
</div>
</form>
</td>
@endforeach
</tr>
<tr><button>Add New image</button></tr>
</table>
</body>
</html>