<x-app-layout>

    <div class="row justify-content-center">
      <div class="col-11">
          <div class="row justify-content-around p-4 m-3">
              @foreach ($platos as $plato)
        
                  <div class="col-md-3 position-relative">
                      <div class="card" style="width: 18rem;">
                        <br>
                          <h1 class="card-title text-center font-weight-bold">{{$plato->nombre}}</h1><br>
                          <img src="{{ asset($plato->foto) }}" class="img-fluid " />
                          <div class="card-body">
                          <p class="card-text">{{$plato->descripcion}}</p>
 
                          <p class="card-text font-weight-bold">{{$plato->precio}}€</p>
    
                              @foreach ($restaurantes as $restaurante)
                                  @if ($restaurante->id == $plato->retaurante_id)
                                      <h2 class="card-text">{{$restaurante->nombre}}</h2> 
                                  @endif
                              @endforeach
                          
                          </div>
                          <div class="buttons">
                              <a href="/pedido/{{Auth::user()->id}}/restaurante/{{$plato->id}}" class="btn btn-secondary">Hacer Pedido</a>
                          </div><br>
                      </div>
                      <br><br><br><br>
                  </div>
                  
              @endforeach
          </div>

      </div>
      
  </div> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</x-app-layout>