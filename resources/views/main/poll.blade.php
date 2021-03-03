@extends('layouts.Adminapp')
@section('content')
<h3><u>Polls</u></h3>
<table>
<p>Active polls</p>
<tr>
<u><th><u>Poll name</u></th><th><u>Started at</u></th><th><u>Ends at</u></th><th><u>Overall supervisor</u></th></u>
</tr>
<tr>
<td> test mode</td><td> 0.0.0</td><td> 0.1.1</td><td> developer</td>
</tr>
</table>
<a href=""><img src={{ asset('images/icons/admin/add.png') }} height="30px" width="36px">Add a poll</a>

@endsection