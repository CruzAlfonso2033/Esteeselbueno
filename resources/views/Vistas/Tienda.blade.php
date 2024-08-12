<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/StylePages.css')}}">
    <title>Document</title>
</head>
<body  id="body">
  {{-- HEADER --}}
    <div>
        @include("components.componentes.header")
    </div>
<br>

<div class="card text-bg-dark" id="sombras">
  <div class="text-center">
    <div class="card-body">
        <div class="row me-2">
            <div class="col-12">
                <div class="row ms-1">
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
  </div>
</div>

hr

<div class="card text-bg-dark" id="sombras">
  <div class="text-center">
    <div class="card-body">
        <div class="row me-2">
            <div class="col-12">
                <div class="row ms-1">
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                      <div class="card" style="width: 12rem; height:20rem">
                        <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
  </div>
</div>



{{-- FOOTER --}}
<div>
    @include("components.componentes.footer ")
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>