@extends('layouts.app')
@section('content')
<form action="/votepresident" method="post">
{{csrf_field()}}
<h3><u>Presidential voting</u></h3>
@foreach($data as $data)
<table>
<tr>
<td><img src="{{ asset('uploads')}}/{{ $data->profile_image}}" height="100" width="100" style="border-radius:50px"></td>
<td><input type="text" name="firstname" value="{{ $data->firstname }}" style="border:none" readonly></td><td><input type="text" name="position" value="{{ $data->position }}" style="border:none" readonly></td>
<td><input type="text" name="nickname" value="{{ $data->nickname }}" style="color:green;border:none" readonly></td>
<td><b>vote</b><input type="checkbox" name="checkbox" value="{{ $data->id }}"></td>
</tr>
</table>
@endforeach
<br>
<div class="warnning">
<p>Warning!! CONFIRM YOUR CANDIDATES before clicking the 'Vote' button</p>
 </div>
<input type="submit" name="submit" value="VOTE">
</form>
@endsection