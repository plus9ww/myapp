@extends('layouts.master')
@section('content')
	<h1>Sample</h1>
    <p><?php echo $message; ?></p>
    <table>
    <form method="post" action="/helo/new">
		{{ csrf_field() }}
        <tr><td>NAME:</td><td><input type="text" name="name"></td></tr>
        <tr><td>MAIL:</td><td><input type="text" name="mail"></td></tr>
        <tr><td>AGE:</td><td><input type="text" name="age"></td></tr>
        <tr><td></td><td><input type="submit"></td></tr>
    </form>
    </table>
@stop