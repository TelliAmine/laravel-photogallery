@extends('layouts.app')

@section('content')
<br>
 <h1>{{$album->name}}</h1>
 <a class="btn btn-warning" href="/"> Go Back</a>
 <a class="btn btn-primary" href="/photos/create/{{$album->id}}"> Upload Photo To Album</a>
<hr>
@if(count($album->photos) > 0)
  <br>
  <h4 style="text-align: center">Photos</h4>
  <br>
    <?php
      $colcount = count($album->photos);
        $i = 1;
      
    ?>
    <div id="photos">
      <div class="row text-center">
        @foreach($album->photos as $photo)
          @if($i == $colcount)
             <div class='col-md-4'>
               <a href="/photos/{{$photo->id}}">
                  
                  <img height="180" width="220" class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
               <br>
 
               <br>
               <h4>{{$photo->title}}</h4>
             
          @else
            <div class='col-md-4'>
               <a href="/photos/{{$photo->id}}">
                  <img  height="180" width="220" class="img-thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
               <br>
               <br>
               <h4>{{$photo->title}}</h4>
              
          @endif
        	@if($i % 3 == 0)
          </div  ></div><div   class="row text-center">
        	@else
            </div>
          @endif
        	<?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <p>No Photos To Display</p>
  @endif

@endsection
