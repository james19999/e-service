<div wire:poll.1000ms>
    
    <div class="row">
        <div class="col-12">
             {{-- @if  (session()->has('messages'))
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
                   
                  
             @endif --}}
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
                            <h4 class="card-title">LISTES DES VIDEOS </h4>
                        </div>

                        <div class="mt-xxs-0 mt-3 btn-group btn-group-toggle" data-toggle="buttons">
                            <input style="margin-right: 5%"  wire:model="search"  type="search" class="form-control " placeholder="Recherche">
                               {{ $Videos->links() }}
                        </div>     
                       
                    </div>

                </div> 
                    
               
                       <div class="card-body py-0 table-responsive">
                           
                             <table class="table clients-contant-table mb-0">
                                 <thead>
                                         <tr>
                                             <th scope="col">formation</th>
                                            <th scope="col">video</th>
                                            
                                            
                                         </tr>
                                 </thead>
                               <tbody>
                                   @foreach ($Videos as $video )
                                       <tr>
                                            
                                                 <td>{{ optional($video->formation)->nom }}</td>
                                                  <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-img mr-4">
                                                         <video src="{{ url('storage/video/'.$video->video) }}" controls class="img-fluid" alt="Clients-01">
                                                         <h6></h6>
                                                    </div>
                                                     <p class="font-weight-bold"></p>
                                                </div>
                                             </td>
                                                 
                                                 <td><a href="javascript:void(0)"></a><span></span></>
                                             <td>
                                                  <a href="" class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-pencil"></i></a>
                                                  <a href="javascript:void(0)" wire:click="delete('{{ $video->id }}')"  onclick="return confirm('Voulez-vous supprimer ?')||event.stopImmediatePropagation()"  class="btn btn-icon btn-outline-danger btn-round"><i class="ti ti-close"></i></a>
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
