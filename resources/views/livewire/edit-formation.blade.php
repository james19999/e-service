<div>
    <div class="col-xl-12">

         <div>
             @if (session()->has('sms'))
               <div class="alert alert-success">
                  {{ session('sms') }}
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
                <form wire:submit.prevent="modification">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom: {{ $nom }}</label>
                        <input type="text" name="nom" wire:model="nom"  class="form-control" id="name" placeholder="Entrer le nom de la formation">
                            @error('nom') <span style="color:red" class="error">{{ $message }}</span> @enderror
                    </div>

                        <div class="form-group">
                            <label for="name">Description: {{ $description }}</label>
                            <input type="text" class="form-control" id="name"  name="description" wire:model="description" placeholder="Entre une briève description de la formation">
                            @error('description') <span style="color:red" class="error">{{ $message }}</span> @enderror
                       </div>
                    
                    <div class="form-group">
                        <label for="name">Prix: {{ $prix }}</label>
                        <input type="text" class="form-control" min="0"  name="prix" wire:model="prix" placeholder="Entrer le prix de la formation">
                         @error('prix') <span style="color:red" class="error">{{ $message }}</span> @enderror
                    </div>

                         <button type="submit" class="btn btn-primary">Enregistrer</button>
                         <button type="submit" class="btn btn-info">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</div>

