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
    @include("components.componentes.header")
</div>
<hr>

{{-- MISION --}}
<div class="card mx-4 py-2 pe-2" id="sombras">
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
                <p class="card-text">Nuestra misión es proporcionar a nuestros clientes productos de alta calidad en electrodomésticos, electrónica y herramientas, acompañados de un servicio de mantenimiento excepcional. Nos comprometemos a mejorar la vida diaria de nuestros clientes a través de soluciones tecnológicas innovadoras y un soporte técnico confiable, asegurando su satisfacción y confianza en cada interacción.</p>
            </div>
        </div>
    </div>
</div>

<hr>

{{-- VISION --}}

<div class="card mx-4 py-2 pe-2" id="sombras">
    <div class="card-body">
        <div class="row me-2">
            <div class="col-8 border-end" >
                <h2 class="card-title text-center">VISION</h2>
                <br>
                <p class="card-text">Nuestra visión es ser la empresa líder en el mercado de electrodomésticos, electrónica y herramientas, reconocida por nuestra excelencia en productos y servicios. Aspiramos a expandir nuestra presencia a nivel nacional e internacional, estableciendo estándares de calidad y servicio que superen las expectativas de nuestros clientes y contribuyan al desarrollo sostenible de la comunidad.</p>
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
   
<div class="card mx-4 py-2 pe-2" id="sombras">
    <h3 class="card-title text-center">VALORES</h3>
    <ul class="list-group mx-3 my-3">
        <li class="list-group-item" id="sombras">Calidad: Nos esforzamos por ofrecer productos y servicios de la más alta calidad, garantizando la satisfacción y confianza de nuestros clientes.</li>
        <li class="list-group-item" id="sombras">Innovación: Fomentamos la creatividad y la innovación en todas nuestras operaciones, buscando constantemente nuevas formas de mejorar y adaptarnos a las necesidades del mercado.</li>
        <li class="list-group-item" id="sombras">Integridad: Actuamos con honestidad y transparencia en todas nuestras relaciones comerciales, manteniendo un alto estándar ético.</li>
        <li class="list-group-item" id="sombras">Compromiso: Estamos dedicados a cumplir nuestras promesas y a proporcionar un servicio excepcional en todo momento.</li>
        <li class="list-group-item" id="sombras">Sostenibilidad: Promovemos prácticas sostenibles que minimicen nuestro impacto ambiental y contribuyan al bienestar de la comunidad.</li>
        <li class="list-group-item" id="sombras">Trabajo en Equipo: Valoramos la colaboración y el respeto mutuo, reconociendo que el éxito se logra a través del esfuerzo conjunto de todos los miembros de nuestro equipo.</li>
      </ul>
</div>


<hr>

{{-- DONDE NOS ENCONTRAMOS --}}

    <div class="card text-center mx-4 py-2 pe-2" id="sombras">
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






    {{-- FOOTER --}}
    <div>
        @include("components.componentes.footer ")
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('/JS/Carousell.js')}}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  
</body>
</html>
