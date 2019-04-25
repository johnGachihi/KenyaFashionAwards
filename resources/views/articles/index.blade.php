@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Articles</h1>
	@if(count($articles) >= 1)
		@foreach($articles as $article)
		<div class="jumbotron">
			<h3 class="my-4">
				<a href="articles/{{$article->id}}">{{$article->title}}</a></h3>
				<p class="lead">Written on {{$article->created_at}} by {{$article->user->name}}</p>
		</div>
		@endforeach
		{{$articles->links()}}
	@else
		<p>No Articles posted</p>
	@endif
</div>   
@endsection