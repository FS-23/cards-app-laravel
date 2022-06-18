

<x-root-layout>
     <div class="col-6 shadow-sm p-3 mt-5 m-auto">
           <div class="row mx-0 mb-5">
              <div class="col-4">
                  <img src="{{ url($card -> image) }}" width="200" height="200"><br>
              </div>
              <div class="col-8">
                <h3>{{ $card -> name }}</h3>
                <p>{{ $card -> gender }}</p>

                <div class="mt-3">
                    {{ $card -> age }} 
                </div>
              </div>
           </div>
           <div>
               <a href="/cards/list" class="btn btn-secondary" >Liste</a>
               <a href="/cards/delete/{{ $card->id }}" class="btn btn-danger" >Supprimer</a>
               <a href="/cards/edit/{{ $card->id }}" class="btn btn-primary" >Editer</a>
           </div>
    </div>
</x-root-layout>
   