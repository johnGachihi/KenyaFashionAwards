@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Edit Article</h3>
	{!! Form::open(['action' => ['ArticlesController@update', $article->id],'method' => 'POST', 'enctype' => 'multipart/form-data'])!!} 
	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{Form::text('title', $article->title, ['class' => 'form-control','placeholder'=>'Title'])}}
	</div>
	<div class="form-group">
		{{Form::label('body', 'Body')}}
		{{Form::textarea('body', $article->body, ['class' => 'form-control','placeholder'=>'Body'])}}
	</div>
	<div class="form-group">
		{{Form::file('cover_image')}}
	</div>
	<!-- spoofing a request-->
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
	
</div>   
@endsection