@extends('layouts.app')
@section('content')
<div>
    <h1>Create </h1>
</div>
{!! Form::open(['action' => 'AlbumsController@store','method'=>'Post','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{Form::Label('name')}}
    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter name'])}}

</div>

<div class="form-group">
    {{Form::Label('Description')}}
    {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Enter Phone'])}}

</div>



<div class="form-group">
    {{Form::label('image',)}}
    {{Form::file('cover_image') }}

</div>
<div>
    {{form::submit('submit',['class'=> 'btn btn-primary'])}}
</div>

{!! Form::close() !!}
@endsection('content')