<div>
   <h1>{{ $Formation->nom}}</h1>
   <h1>{{ $Formation->description}}</h1>
   <img src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img">
           @php
               $Formation=App\Models\Formation::with('videos')->get()
           @endphp

           @foreach ($Formation as $for )
               @foreach ($for->videos as $vide )
                    <p>{{ $vide->id }}</p>
               @endforeach

           @endforeach

</div>
