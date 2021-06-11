<div wire:poll.1000ms>
    
    <div class="row">
        <div class="col-12">
             @if  (session()->has('messages'))
                  <div class="alert alert-danger">
                     {{ session('messages') }}
                    </div>
             @elseif  (session()->has('sms'))
                 <div class="alert alert-info">
                     {{ session('sms') }}
                    </div> <br>
                @elseif (session()->has('message'))
                  <div class="alert alert-success">
                     {{ session('message') }}
                    </div> <br>
                   
                  
             @endif
            {{-- <div>
                    @if (session()->has('messages'))

                    <div class="alert alert-danger">
                     {{ session('messages') }}
                    </div>
                       @else

                    @endif

             </div> <br> --}}

            <div class="card card-statistics clients-contant">
                <div class="card-header">
                    <div class="d-xxs-flex justify-content-between align-items-center">

                        <div class="card-heading">
                            <h4 class="card-title">LISTES DES FORMATIONS </h4>
                        </div>

                        <div class="mt-xxs-0 mt-3 btn-group btn-group-toggle" data-toggle="buttons">
                            <input style="margin-right: 5%"  wire:model="search"  type="search" class="form-control " placeholder="Recherche">
                             {{ $Formations->links() }}
                        </div>     
                       
                    </div>

                </div>
                       <div class="card-body py-0 table-responsive">
                             <table class="table clients-contant-table mb-0">
                                 <thead>
                                         <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Prix</th>
                                            <th scope="col">image</th>
                                            <th scope="col">statut</th>
                                            <th scope="col">Edit & Delete</th>
                                         </tr>
                                 </thead>
                               <tbody>
                                     @foreach ($Formations as $Formation )
                                         <tr>
                                             <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-img mr-4">
                                                         {{-- <img src="assets/img/avtar/01.jpg" class="img-fluid" alt="Clients-01"> --}}
                                                         <h6>{{ $Formation->id }}</h6>
                                                    </div>
                                                     <p class="font-weight-bold"></p>
                                                </div>
                                             </td>
                                                 <td>{{ $Formation->nom }}</td>
                                                 <td>{{ $Formation->description }}</td>
                                                 <td><a href="javascript:void(0)"></a><span>{{ $Formation->prix }}</span></td>
                                                 <td><img src="{{ url('storage/image/'.$Formation->image) }}"  class="img-fluid" style="width:50px; height:50px"></td>
                                                 <td>
                                                 @if ($Formation->statut == false)
                                                     <a href=""  wire:click.prevent="btns('{{$Formation->id}}')" class="dot bg-danger"></a><span>Non payer</span>
                                                 @else
                                                     <a href=""wire:click.prevent="btns('{{$Formation->id}}')" class="dot"></a><span>Payer</span>
                                                 @endif
                                                 </td>
                                              
                                             <td>
                                                  <a href="{{ route('formationedit',$Formation) }}" class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-pencil"></i></a>
                                                  <a href="javascript:void(0)" wire:click="delete('{{ $Formation->id }}')" onclick="return confirm('Voulez-vous supprimer ?')||event.stopImmediatePropagation()"  class="btn btn-icon btn-outline-danger btn-round"><i class="ti ti-close"></i></a>
                                            </td>
                                         </tr>   
                                    @endforeach
                                
                            
                                </tbody>
                            </table>
                        
                        </div> 
                   
                </div>
       </div>
   </div>
</div>
