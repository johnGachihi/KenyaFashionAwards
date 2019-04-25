@extends('layouts.app')

@section('content')
<a href="articles" class="btn btn-default">Go Back</a>
	<div class="container">
	<h1> {{$article->title}} </h1>
		<small>Written on {{$article->created_at}} by {{$article->user->name}}</small>
	<div>
		{{$article->body}}
	</div>

	</div>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $article->user_id)
			<a href="{{$article->id}}/edit" class="btn btn-primary">Edit</a></hr>
			{!!Form::open(['action' =>['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
			{!!Form::close()!!}
		@endif
	@endif
@endsection