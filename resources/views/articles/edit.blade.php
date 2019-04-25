@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Edit Article</h3>
	{!! Form::open(['action' => ['ArticlesController@update', $article->id],'method' => 'POST'])!!} 
	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{Form::text('title', $article->title, ['class' => 'form-control','placeholder'=>'Title'])}}
	</div>
	<div class="form-group">
		{{Form::label('body', 'Body')}}
		{{Form::textarea('body', $article->body, ['class' => 'form-control','placeholder'=>'Body'])}}
	</div>
	//spoofing a put request 
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
	
</div>   
@endsection