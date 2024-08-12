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



    {{-- SOLICITAR UN SERVICIO --}} 

<hr>
{{-- Crear un servicio --}}

<div class="container">
    <div class="container">
        
    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('Herramientas.index') }}" class="btn btn-dark">Back</a>
        </div>
    </div>

        <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card borde-0 shadow-lg my-4">
            <div class="card-header">
                <h4>Editar el costo</h4>
            </div>
            <form enctype="multipart/form-data" action="{{route('admin.Herramientas.update',$herramienta->id)}}" method="POST">
                @method('PUT')
                @csrf
            <div class="card-body">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">elemento</label>
                <input type="string" class="form-control form-control-lg"  name="elemento">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">cantidad</label>
                <input type="number" class="form-control form-control-lg" placeholder="Ingrese la cantidad" name="cantidad">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">costo</label>
                <input type="number" class="form-control form-control-lg"  name="costo">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">vidaUtil</label>
                <input type="string" class="form-control form-control-lg" placeholder="Ingrese la cantidad" name="vidaUtil">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">marca</label>
                <input type="string" class="form-control form-control-lg"  name="marca">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">modelo</label>
                <input type="string" class="form-control form-control-lg" placeholder="Ingrese la cantidad" name="modelo">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">caracteristicas</label>
                    <input type="string" class="form-control form-control-lg" placeholder="Ingrese la cantidad" name="caracteristicas">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label h5">fotoHerramienta</label>
                    <input type="file" class="form-control form-control-lg" placeholder="Price" name="fotoHerramienta">
                    @if ($herramienta->fotoHerramienta != "")
                        <img class="w-50 my-3" src="{{ asset('uploads/herramientas/' . $herramienta->fotoHerramienta) }}" alt="" style="width: 100px">
                    @endif
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary btn-lg">Actualizar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


</div>
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