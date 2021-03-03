@extends('layouts.Adminapp')
@section('content')
<div class="form">
<form method="post" action="{{ ('/upload/addcandidates') }}" id="addcandidates" enctype="multipart/form-data">
@csrf
<h3>Candidate registration</h3>
<table>
<tr>
<td>
<p>Fastname</p>
</td>
<td>
<p>Lastname</p>
</td>
<td>
<p>Nickname</p>
</td>
</tr>
<tr>
<td>
<input type="text" name="fastname" placeholder="Firstname">
</td>
<td>
<input type="text" name="lastname" placeholder="Lastname">
</td>
<td>
<input type="text" name="nickname" placeholder="Nickname">
</td>
</tr>
<tr>
<td>
<p>Position</p>
</td>
<td>
<p>Party</p>
</td>
<td>
<p>County</p>
</td>
</tr>
<tr>
<td>
<select name="position" form="addcandidates">
<option>President</option>
<option>Governor</option>
<option>Women rep</option>
<option>Member of pariament</option>
<option>mca</option>
</select>
</td>
<td>
<select name="party" form="addcandidates">
<option>Jubilee</option>
<option>Nasa</option>
<option>Indipendent candidate</option>
</select>
</td>
<td>
<select name="county" form="addcandidates">
<option>Nairobi</option>
<option>Kiambu</option>
<option>Not Defined</option>
</select>
</td>
</tr>
<tr>
<td>
<p>Candidates' image</p>
</td>
<td>
<p>Constituency</p>
</td>
<td>
<p>ward</p>
</td>
</tr>
<tr>
<td>
<input type="file" name="profile">
</td>
<td>
<select name="constituency" form="addcandidates">
<option>select</option>
<option>select</option>
<option>Not Defined</option>
</select>
</td>
<td>
<select name="ward" form="addcandidates">
<option>select</option>
<option>select</option>
<option>Not Defined</option>
</select>
</td>
</tr>
</table><br>
<button type="submit" name="">Register</button>
</form>
</div>
@if($data)
    <div class="candidates"> 
    <table>       
      <tr><th>image</th><th>Name</th><th>County</th><th>position</th></tr>
      @foreach($data as $data) 
      <tr><td><img src="{{ asset('uploads')}}/{{ $data->profile_image }}" height="50" width="50"></td><td>{{ $data->firstname }}</td><td>{{ $data->county }}</td><td>{{ $data->position }}</td></tr> <br> 
       @endforeach  
      </table>
          
@else
      <td>no data found</td>        
@endif
</div>
@endsection