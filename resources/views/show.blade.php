@extends('index')
@section('main')
  <img src="{{ asset('/images/download.svg') }}" alt="">

  {{-- <h2>{{ $file }}</h2> --}}
  {{-- <h2>{{ $link }}</h2> 
  {{-- <h2>{{ $id }}</h2> --}}
  {{-- <h2>{{ $_SERVER['REMOTE_ADDR'] }}:{{ env('app.name') }}</h2> --}}
  {{-- <h2>{{ config('app.url')}}</h2> --}}

  
    {{-- <input type="hidden" name="" value="http://127.0.0.1:8000/{{$link->linkCode}}" id="shortLink{{$link->id}}"> --}}
  <a href="{{config('app.url')}}/{{$link}}" id="link" style="visibility: hidden"></a>
  <a href="{{route('file.download', $id) }}" onclick="" class="btn btn-outline-primary my-2">
    Download File <i class="fa fa-download" aria-hidden="true"></i> 
  </a>
  <button type="button" onclick="copyFunction()" class="btn btn-outline-success my-2">
    Copy Link <i class="bi bi-clipboard-check text-success fa-lg "></i>
  </button>
  {{-- <h4><a href="{{ $link }}"><i class="fas fa-external-link-alt fa-lg PrimaryColor"></i></a></h4> --}}
  <h5> <a href="{{route('file.destroy', $id) }}" class="btn btn-outline-danger my-2 w-100">Delete</a> </h5>
@endsection