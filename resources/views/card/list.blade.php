<x-root-layout>
    <div class=" mx-5">
        <h1 >
            Liste des cartes
            <a href="/cards/create" class="btn btn-outline-primary float-end">Nouveau</a>
        </h1>

        @if($cards->count() > 0)
            <div class="row mx-0 mt-5">
                <div class="col-12">
                    
                            <div class="row mx-0">
                                @foreach($cards as $card)
                                    <div class="col-12 col-sm-6 col-lg-4 pt-3">
                                        <div class="shadow-sm">
                                            <div  class=" w-100 position-relative" style="height: 230px ; background:   #e0ebe9" >
                                                <button class="btn btn-warning like-btn d-none">
                                                    <span class="fas fa-heart  text-danger" ></span>
                                                </button>
                                                <img src="{{ url($card ->image) }}" 
                                                    alt=""
                                                    style="height: 100%; width: 100% ; object-fit: contain">
                                            </div>
                                            <div class="bg-light p-3 ">
                                                <h2>{{ $card -> fullname }}</h2>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <strong>{{ $card->age }}</strong>
                                                    <a href="/cards/detail/{{ $card -> id }}" class="btn btn-outline-info">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                @endforeach
                            </div>
                </div>
            </div>
        @else
            <h3 class="text-center mt-5">Aucun produit trouvé</h3>
        @endif
    </div>
</x-root-layout>

