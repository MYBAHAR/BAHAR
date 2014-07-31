@extends('layout')

@section('content')
    @foreach($users as $usr)
    	<p><strong>Name: </strong>{{ $usr->name }}</p>
    	<p><strong>Email: </strong>{{ $usr->email }}</p>
    	<hr>
    @endforeach
@stop