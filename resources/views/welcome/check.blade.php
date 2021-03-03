@extends('layouts.welcome')
@section('content')
<div class="checkform">
<form action="{{ ('/checkvoter') }}" method="post">
@csrf
<h3>Check Voters Registration Details</h3>
<p>Enter National Identification Number</p>
<input type="text" name="id" placeholder="Name or Email" required>
<input type="submit" name="" value="check">
</form>
</div>
@endsection