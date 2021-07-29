<div>
   <h1>{{ $Formation->nom}}</h1>
   <h1>{{ $Formation->description}}</h1>
   <img src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img">
           @php
               $Formation=App\Models\Formation::with('videos')->get()
           @endphp

</div>
