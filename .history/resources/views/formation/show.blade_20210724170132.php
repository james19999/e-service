@extends('layouts.AdminUser')

@section('content')
<h1>{{ $Formation->nom}}</h1>
<h1>{{ $Formation->description}}</h1>
  @foreach ($Formation->videos() as $video )
      <video src="{{ url('storage/video/'.$video->video) }}" controls class="img-fluid" alt="Clients-01">

  @endforeach
@endsection
