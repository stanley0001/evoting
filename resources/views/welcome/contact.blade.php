@extends('layouts.welcome')
@section('content')
<div class="messageform">
<form action="" method="post" id="messageform">
@csrf
<h3>message form</h3>
<p>Name</p>
<input type="text" name="name" placeholder="please input your name" required><br>
<p>Email</p>
<input type="email" name="email" placeholder="please input your email" required><br>
<p>Message</p>
<textarea rows="4" cols="50" name="message"form="messageform" required>
Enter message here...</textarea>
<input type="submit" name="" value="Send">
</form>
</div>
@endsection