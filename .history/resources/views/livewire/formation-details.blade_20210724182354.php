<div>
     @isset($Formation)

     <h1>{{ $Formation->nom}}</h1>
     @endisset
    <h1>{{ $Formation->description}}</h1>
    <img src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img">
         @foreach ($Formation->videos as  $vide )

         <p>{{ $vide->id }}

            <video  width="50px" height="50px" src="{{ url('storage/video/'.$vide->video) }}" controls class="img-fluid" alt="Clients-01">
        </p>

         @endforeach

</div>
