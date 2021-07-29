<div>
   <h1>{{ $Formation->nom}}</h1>
   <h1>{{ $Formation->description}}</h1>
   <img src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img">
          @foreach ($Formation as  $forma)
                 @foreach ($forma->videos as $vide )
                     <p>{{ $vide->video }}</p>
                 @endforeach
          @endforeach

</div>
