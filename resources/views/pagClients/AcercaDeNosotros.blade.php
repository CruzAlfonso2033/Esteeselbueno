<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/StylePages.css')}}">
    <title>Document</title>
</head>
<body id="body">

    
{{-- HEADER --}}
<div >
    @include("components.clients-component.header")
</div>
<hr>

{{-- MISION --}}
<div class="card text-bg-dark" id="sombras">
    <div class="card-body">
        <div class="row me-2">
            <div class="col-5 ps-5">
                <div class="text-center items-align-center" id="redondo">
                    <img id="redondo" src="{{url('/img/mision.jpg')}}"> 
                </div>
            </div>
            <div class="col-7 border-start" >
                <h2 class="card-title text-center">MISION</h2>
                <br>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis saepe accusantium expedita a laudantium delectus ipsam enim. Eum mollitia, enim eveniet beatae rerum facilis illum ullam expedita recusandae animi rem.</p>
            </div>
        </div>
    </div>
</div>

<hr>

{{-- VISION --}}

<div class="card text-bg-dark" id="sombras">
    <div class="card-body">
        <div class="row me-2">
            <div class="col-8 border-end" >
                <h2 class="card-title text-center">VISION</h2>
                <br>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis saepe accusantium expedita a laudantium delectus ipsam enim. Eum mollitia, enim eveniet beatae rerum facilis illum ullam expedita recusandae animi rem.</p>
            </div>
            <div class="col-4 ps-5">
                <div class="text-center" id="redondo">
                    <img id="redondo" src="{{url('/img/mision.jpg')}}"> 
                </div>
            </div>           
        </div>
    </div>
</div>

<hr>

{{-- VALORES --}}
   {{-- CARRUSEL --}}
    <div class="card text-bg-dark" id="sombras">
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <h1 class="text-center">Valores</h1>
            {{-- INDICADOR DEL TAMAÑO DE ELEMENTOS DEL CARRUSEL --}}
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
    
            {{-- ELEMENTOS DEL CARRUSEL
            LAS IMAGENES SON DE TAMAÑO 3000x600 --}}

            <div class="card mx-5">
                <div class="carousel-inner">
                    <div class="carousel-item active ms-2">
                        <img src="{{url('/img/carrusel1.webp')}}" height="300" alt=""> 
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Example headline.</h1>
                                <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
        
        
                    <div class="carousel-item ms-2">
                        <div class="text-center">
                            <img src="{{url('/img/honestidad.png')}}" width="120" alt="">
                        </div>
                        <br>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>HONESTIDAD</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium alias atque sapiente corporis veritatis ducimus, quia, quaerat tenetur porro maxime iure sequi magni error nihil iusto adipisci aliquid eaque labore?.</p>
                            </div>
                        </div>
                    </div>
        
        
                    <div class="carousel-item ms-2">
                        <img src="{{url('/img/carrusel3.png')}}" height="300" alt="">            
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
        
                    {{-- BOTONES DE PREVIO Y SIGUIENTE --}}
        
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
        </div>
    </div>



<hr>

{{-- DONDE NOS ENCONTRAMOS --}}
<div class="card text-bg-dark" id="sombras">
    <div class="card text-center text-bg-dark">
        <div class="card-header">
            <h3>¿DONDE NOS ENCONTRAMOS?</h3>
        </div>
        <div class="card-body">
            <div class="row me-1">
                <img src="{{url('/img/mapa.png')}}" height="300" alt=""> 
            </div>    
            <div class="mt-1">
                2 de Abril 105, Los Pinos, 93557 Gutiérrez Zamora, Ver.
            </div>                           
        </div>
    </div>
</div>





    {{-- FOOTER --}}
    <div>
        @include("components.clients-component.footer ")
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('/JS/Carousell.js')}}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  
</body>
</html>
