@extends('layouts.app');

@section('content')
<div class="container">

  {!! Form::open(['action' => 'ProfilesController@store', 'method' => 'POST']) !!}
  <div class="form-group">
  	{{Form::label('fname', 'First Name')}}
  	{{Form::text('fname', '', ['class'=> 'form-control', 'placeholder' => 'First Name'])}}
  </div>
    <div class="form-group">
  	{{Form::label('lname', 'Last Name')}}
  	{{Form::text('lname', '', ['class'=> 'form-control', 'placeholder' => 'Last Name'])}}
  </div>
    <div class="form-group">
  	{{Form::label('category', 'Category')}}
  	{{Form::text('category', '', ['class'=> 'form-control', 'placeholder' => 'Model, Designer, Photographer'])}}
  </div>
   <div class="form-group">
  	{{Form::label('description', 'Description')}}
  	{{Form::textarea('description', '', ['class'=> 'form-control', 'placeholder' => 'Description'])}}
  </div>
  {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
</div>
@endsection