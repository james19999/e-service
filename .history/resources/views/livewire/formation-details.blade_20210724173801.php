<div>
   <h1>{{ $Formation->nom}}</h1>
   <h1>{{ $Formation->description}}</h1>
   <img src="{{ url('storage/image/'.$Formation->image) }}" alt="gallery-img">
           @php
               $Formation=App\Models\Formation::with('videos')->get()
           @endphp

           @foreach ($Formation as $for )
               @foreach ($for->videos as $vide )
               <video  width="50px" height="50px" src="{{ url('storage/video/'.$vide->video) }}" controls class="img-fluid" alt="Clients-01">

               @endforeach

           @endforeach

</div>
