@extends('layouts.welcome')
@section('content')
<div class="table">
<table>
<tr>
<th colspan="2">PRESIDENTIAL TOP COVERAGE</th>
</tr>
<tr>
<td><img src="{{ asset('images/5.jpg') }}" height="200px" width="200px"></td><td><img src="{{ asset('images/stan.jpg') }}" height="200px" width="200px"></td>
</tr>
<tr>
<td>Admin</td><td>Stanley</td>
</tr>
<tr>
<td style="color:red">0</td><td style="color:red">0</td>
</tr>
</table>
</div>
<div class="footer">
@endsection