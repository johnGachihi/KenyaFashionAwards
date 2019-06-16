@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Articles</h1>
	@if(count($articles) >= 1)
		@foreach($articles as $article)
		<div class="card">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<img style="width: 100%" src="storage/cover_image/{{$article->cover_image}}">
				</div>
				<div class="col-md-8 col-sm-8">
					<h3 class="my-4"><a href="articles/{{$article->id}}">{{$article->title}}</a></h3>
				<p class="lead">Written on {{$article->created_at}} by {{$article->user->name}}</p>
				</div>
			</div>
		</div>
		      <br><br>
		@endforeach
		{{$articles->links()}}
	@else
		<p>No Articles posted</p>
	@endif
</div>   
@endsection