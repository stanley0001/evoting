@extends('layouts.welcome')
@section('content')
<div class="checkform">
<form action="{{ ('/checkvoter') }}" method="post">
@csrf
<h3>Check Voters Registration Details</h3>
<p>Enter National Identification Number</p>
<input type="text" name="id" placeholder="Name or Email" required length="6">
<input type="submit" name="" value="check">
</form>
@if(isset ($data))

    <div class="candidates"> 
    <table>       
      <tr><th>Name</th><th>email</th><th>last update</th></tr>
      @foreach($data as $data) 
      <tr><td>{{ $data->name }}</td><td>{{ $data->email }}</td><td>{{ $data->updated_at }}</td></tr> <br> 
       @endforeach  
      </table>
          
@else
<table>
<tr>
      <td>no data found</td>  
      </tr> 
      </table>     
@endif
</div>
</div>
@endsection