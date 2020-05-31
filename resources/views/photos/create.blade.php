@extends('layouts.app')
@section('content')
<div>
    <h1>Upload Photo </h1>
</div>
{!! Form::open(['action' => 'PhotosController@store','method'=>'Post','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{Form::Label('title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter name'])}}

</div>

<div class="form-group">
    {{Form::Label('Description')}}
    {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Photo Description'])}}

</div>
{{ Form::hidden('album_id',$album_id) }}

<div class="form-group">
    {{Form::label('image',)}}
    {{Form::file('photo') }}

</div>
<div>
    {{form::submit('submit',['class'=> 'btn btn-primary'])}}
</div>

{!! Form::close() !!}
@endsection('content')