@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Edit Profile</h3>
	{!! Form::open(['action' => ['ProfilesController@update', $profile->id],'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
	<div class="form-group">
		{{Form::label('fname', 'First Name')}}
		{{Form::text('fname', $profile->fname, ['class' => 'form-control','placeholder'=>'First Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('lname', 'Last Name')}}
		{{Form::text('lname', $profile->lname, ['class' => 'form-control','placeholder'=>'Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('category', 'Category')}}
		{{Form::text('category', $profile->category, ['class' => 'form-control','placeholder'=>'Model, Photographer, Designer'])}}
	</div>
	<div class="form-group">
		{{Form::label('description', 'Description')}}
		{{Form::textarea('description', $profile->description, ['class' => 'form-control','placeholder'=>'Description'])}}
	</div>
	{{Form::hidden('_method', 'PUT')}}
	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
	
</div>   
@endsection