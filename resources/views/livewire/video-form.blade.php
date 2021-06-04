<div>
    <div class="col-xl-12">

         <div>
             @if (session()->has('message'))
               <div class="alert alert-success">
                  {{ session('message') }}
               </div>
             @endif
        </div> <br>
    
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title">CREATION DE LA FORMATION</h4>
                </div>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="submit"  enctype="multipart/form-data" >
                    @csrf
                    

                                     <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                            </div>
                                            <select  wire:model="form_id" name="form_id" class="custom-select">
                                                 @error('form_id') <span style="color:red" class="error">{{ $message }}</span> @enderror
                                                @foreach ($Formations as $Formation )
                                                     <option value="{{ $Formation->id }}">{{ $Formation->nom }}</option>
                                                @endforeach
                                               
                                              
                                            </select>
                                        </div>
                                        <div wire:loading wire:target="video">
                                            Chargement en cours...
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                              @if ($video)
                                                   
                                                <video  width="150" height="100"  src="{{ $video->temporaryUrl() }}">
                                              @endif
                                            <div class="custom-file">
                                                <input type="file" wire:model="video" name="video" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                 @error('video') <span style="color:red" class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>


                         <button type="submit" class="btn btn-primary">Enregistrer</button>
                         <button type="submit" class="btn btn-info">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</div>

