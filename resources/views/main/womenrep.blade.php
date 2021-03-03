@extends('layouts.app')
@section('content')
<form action="votewomenrep" method="post">
{{ csrf_field() }}
<h3><u>Women rep voting</u></h3>
@foreach($data as $data)
<table>
<tr>
<td><img src="{{ asset('uploads')}}/{{ $data->profile_image}}" height="100" width="100" style="border-radius:50px"></td>
<td><input type="text" name="firstname" value="{{ $data->firstname }}" style="border:none" readonly></td><td><input type="text" name="lastname" value="{{ $data->lastname }}" style="border:none" readonly></td>
<td><input type="text" name="nickname" value="{{ $data->nickname }}" style="color:green;border:none" readonly></td>
<td><b>vote</b><input type="checkbox" name="checkbox" value="{{ $data->id }}"></td>
</tr>
</table>
@endforeach
<br>
<div class="warnning">
<p>Warning!! make sure you have choosen collectly as there is no turning back after clicking the 'Next' button</p>
 </div>
<input type="submit" name="submit" value="Next">
</form>
@endsection