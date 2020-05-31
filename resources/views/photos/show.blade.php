@extends('layouts.app')
@section('content')
<h3>{{$photo->title}}</h3>
<p>{{$photo->description}}</p>
<a href="/albums/{{$photo->album_id}}">Back To Gallery</a>
<hr>
<img height="480" width="620" class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
<br><br>
{!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST'])!!}

@csrf
{{Form::hidden('_method', 'DELETE')}}
{{form::submit('Delete Photo',['class'=> 'btn btn-danger'])}}
{!! Form::close() !!}
<hr>
<small>Size : {{$photo->size}} </small>
@endsection('content')