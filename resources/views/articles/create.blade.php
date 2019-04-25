@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Add Article</h3>
	{!! Form::open(['action' => 'ArticlesController@store','method' => 'POST'])!!}
	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{Form::text('title', '', ['class' => 'form-control','placeholder'=>'Title'])}}
	</div>
	<div class="form-group">
		{{Form::label('body', 'Body')}}
		{{Form::textarea('body', '', ['class' => 'form-control','placeholder'=>'Body'])}}
	</div>
	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
	
</div>   
@endsection