@extends('layouts.AdminUser')

@section('content')
<h1>{{ $Formation->nom}}</h1>
<h1>{{ $Formation->description}}</h1>
<img src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img">
    @foreach ($Formation as $form )
              @foreach ($form->videos as $vide )
                   <p>{{ $vide->video }}</p>
              @endforeach
    @endforeach
@endsection
