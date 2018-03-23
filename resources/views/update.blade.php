@extends('layouts.master')
@section('content')
	<h1>Sample</h1>
    <p><?php echo $message; ?></p>
    <table>
    <form method="post" action="/helo/update">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="<?php echo $data->id; ?>">
        <tr><td>NAME:</td><td>
        <input type="text" name="name" value="<?php echo $data->name; ?>"></td></tr>
        <tr><td>MAIL:</td><td>
        <input type="text" name="mail" value="<?php echo $data->mail; ?>"></td></tr>
        <tr><td>AGE:</td><td>
        <input type="text" name="age" value="<?php echo $data->age; ?>"></td></tr>
        <tr><td></td><td><input type="submit"></td></tr>
    </form>
    </table>
@stop