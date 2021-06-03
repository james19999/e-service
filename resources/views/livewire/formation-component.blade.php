<div wire:poll.750ms>
    
                       <div class="row">
                            <div class="col-12">

                                 <div>
                            @if (session()->has('messages'))
                            <div class="alert alert-danger">
                                {{ session('messages') }}
                            </div>
                            @endif
                            </div> <br>
                                <div class="card card-statistics clients-contant">
                                    <div class="card-header">
                                        <div class="d-xxs-flex justify-content-between align-items-center">
                                            <div class="card-heading">
                                                <h4 class="card-title">Liste des Formations </h4>
                                            </div>
                                            <div class="mt-xxs-0 mt-3 btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-sm btn-round  btn-primary">
                                                    <input type="radio" name="options" id="option1" checked="">
                                                    Today
                                                </label>
                                                <label class="btn btn-sm btn-outline-primary">
                                                    <input type="radio" name="options" id="option2">
                                                    Week
                                                </label>
                                                <label class="btn btn-sm btn-round btn-outline-primary">
                                                    <input type="radio" name="options" id="option3"> Month
                                                </label>
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
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-pencil"></i></a>
                                                        <a href="javascript:void(0)" wire:click="delete('{{ $Formation->id }}')" onclick="return confirm('Voulez-vous supprimer ?')"  class="btn btn-icon btn-outline-danger btn-round"><i class="ti ti-close"></i></a>
                                                    </td>
                                                </tr>   
                                                @endforeach
                                                 
                                                
                                            </tbody>
                                        </table>
                                          {{-- {{ $Formations->links() }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
