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
<body id="body">
    <div>
        @include("components.componentes.header")
    </div>


<br>

<br>
    @role('admin')
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('admin.Servicios.create') }}" class="btn btn-dark">Create</a>
            </div>
        </div>
    @endrole
<br>

<div class="card text-bg-dark" id="sombras">
    <div class="text-center">
        <div class="card-body">
            <div class="row me-2">
                <div class="col-10">
                    <div class="row">
                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:25rem">
                                <p class="card-title">Reparación</p>
                                <img src="{{url('/img/Reparacion.jpg')}}" height="400rem">
                                <div class="card-body">
                                    
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">ir</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:25rem">
                                <p class="card-title">Mantenimiento</p>
                                <img src="{{url('/img/Mantenimiento.jpg')}}" height="400rem">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">ir</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:25rem">
                                <p class="card-title">Instalacion electrica</p>
                                <img src="{{url('/img/Instalacion.jpg')}}" height="400rem">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">ir</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:25rem">
                                <p class="card-title">Reparación</p>
                                <img src="{{url('/img/Reparacion.jpg')}}" height="400rem">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">ir</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:25rem">
                                <p class="card-title">Reparación</p>
                                <img src="{{url('/img/Reparacion.jpg')}}" height="400rem">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">ir</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:25rem">
                                <p class="card-title">Reparación</p>
                                <img src="{{url('/img/Reparacion.jpg')}}" height="400rem">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">ir</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="text-center mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Solicitar un servicio</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                    @role('admin')
                    @role('employee')
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-10 d-flex justify-content-end">
                            <a href="{{ route('admin.Servicios.create') }}" class="btn btn-dark">Crear un servicio</a>
                        </div>
                    </div>
                    @endrole
                    @endrole
                    
                </div> 
            </div> 
        </div>
    </div>
</div>

    {{-- SOLICITAR UN SERVICIO --}} 

<hr>

        {{-- RASTREAR UN SERVICIO --}}

<div class="card text-bg-dark" id="sombras">
    <div class="card text-bg-dark" id="sombras">
        <div class="card-body">
            <div class="row me-2">
                <div class="col-4">  

                </div>
                <div class="col-4 text-center">
                    <div class="card px-2 py-2">
                        <h5 class="card-title">Rastrear un servicio solicitado  </h5>
                        <p class="card-text">Numero de servicio</p>
                        <label for=""></label>
                        <a href="#" class="btn btn-primary mx-3">Buscar</a>
                    </div>
                </div>
                <div class="col-4">  

                </div>    
            </div>     
        </div>
    </div>    
</div>

<div>
    @include("components.componentes.footer")
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>