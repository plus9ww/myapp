@extends('layouts.master')
@section('content')
	<style>
    	body { color:gray; }
    	h1 { font-size:18pt; font-weight:bold; }
    </style>
	<h1>Sample</h1>
    <p>{!! $message !!}</p>
    <form method="post" action="/helo">
		{{ csrf_field() }}
        <input type="text" name="str">
        <input type="submit">
    </form>
@stop