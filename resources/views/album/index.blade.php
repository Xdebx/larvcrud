{{-- {{ dd($albums) }} --}}
@extends('layouts.base')
@section('body')
<div class="container">
       <a href="{{route('album.create')}}" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>ADD</strong></span>            
    </a>
</div>

@if ($message = Session::get('success'))
 <div class="alert alert-success alert-block">
 <button type="button" class="close" data-dismiss="alert">×</button> 
         <strong>{{ $message }}</strong>
 </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-hover">
    <thead>
<tr>
        <th>Album ID</th>
        <th>title</th>
        <th>Artist</th>
        <th>Action</th>
        {{-- <th>Genre</th>
        <th>Year</th> --}}
        </tr>
    </thead>
    <tbody>
      @foreach($albums as $album)
      <tr>
          <td>{{$album->id}}</td>
          <td>{{$album->title}}</td>
          <td>{{$album->artist}}</td>
          {{-- <td>{{$album->genre}}</td>
          <td>{{$album->year}}</td> --}}
          <td align="center"><a href="{{route('album.edit',$album->id)}}">
            <i class="fa-regular fa-pen-to-square" aria-hidden="true" style="font-size:24px" ></i></a>
          </td>
          <td align="center"><a href="{{route('album.delete',$album->id)}}">
            <i class="fa-solid fa-trash-can" style="font-size:24px; color:red" ></i></a>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection