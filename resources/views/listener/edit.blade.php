@extends('layouts.base')
@section('body')
 <div class="container">
      <h2>Update listener</h2><br/>
      {{-- {{ dd($listener) }} --}}
     {!! Form::model($listener,['method'=>'PUT','route' => ['listener.update',$listener->id]]) !!}
     <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">listener Name:</label>
            {!! Form::text('listener_name',$listener->listener_name,array('class' => 'form-control')) !!}
          </div>
        </div>
<div class="row">
          <div class="col-md-4"></div>
        <div class="form-group col-md-4">

        {{--   @foreach ($albums as $album_id => $album) --}} {{-- album_name to --}}
             {{--       <div class="form-check form-check-inline">

           @if (in_array($album_id, $album_listener))
           {!! Form::checkbox('album_id[]',$album_id, true, array('class'=>'form-check-input','id'=>'album')) !!} 
            {!!Form::label('album', $album,array('class'=>'form-check-label')) !!}
            @else
                {!! Form::checkbox('album_id[]',$album_id, null, array('class'=>'form-check-input','id'=>'album')) !!} 
            {!!Form::label('album', $album,array('class'=>'form-check-label')) !!}
           @endif --}}

            @foreach($albums as $id => $album)
          
          {{-- @foreach ($listener->albums as $listener_album) --}}
            {{-- {{dump($listener_album->album_name)}} --}}
            @if(in_array($album,$listener_albums))
            {{-- @if($listener_albums->album_name == $album) --}}
              {{Form::checkbox('album_id[]',$id, true, array('class'=>'form-check-input','id'=>'album')) }} 
{{Form::label('album', $album,array('class'=>'form-check-label')) }}
              {{-- @continue --}}
            @else
               {{Form::checkbox('album_id[]',$id, null, array('class'=>'form-check-input','id'=>'album')) }} 
 {{Form::label('album', $album,array('class'=>'form-check-label')) }}
            @endif
        @endforeach 
        </div>
</div>  
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
             <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
@endsection