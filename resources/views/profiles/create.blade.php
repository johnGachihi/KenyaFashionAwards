@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Add Profile</h3>
	{!! Form::open(['action' => 'ProfilesController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
	<div class="form-group">
		{{Form::label('fname', 'First Name')}}
		{{Form::text('fname', '', ['class' => 'form-control','placeholder'=>'First Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('lname', 'Last Name')}}
		{{Form::text('lname', '', ['class' => 'form-control','placeholder'=>'Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('category', 'Category')}}
		{{Form::text('category', '', ['class' => 'form-control','placeholder'=>'Model, Photographer, Designer'])}}
	</div>
	<div class="form-group">
		{{Form::label('description', 'Description')}}
		{{Form::textarea('description', '', ['class' => 'form-control','placeholder'=>'Description'])}}
	</div>

	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
	
</div>   
@endsection