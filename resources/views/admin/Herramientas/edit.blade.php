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
                <h4>Editar herramienta</h4>
            </div>
            <form enctype="multipart/form-data" action="{{route('admin.Herramientas.update',$herramienta->id)}}" method="POST">
                @method('PUT')
                @csrf
            <div class="card-body">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">elemento</label>
                    <input value="{{ old('elemento',$herramienta->elemento) }}" type="text" class="form-control form-control-lg"  name="elemento">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">cantidad</label>
                    <input value="{{ old('cantidad',$herramienta->cantidad) }}" type="number" class="form-control form-control-lg"  name="cantidad">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">costo</label>
                    <input value="{{ old('costo',$herramienta->costo) }}" type="number" class="form-control form-control-lg"  name="costo">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">vidaUtil</label>
                    <input value="{{ old('vidaUtil',$herramienta->vidaUtil) }}" type="text" class="form-control form-control-lg"  name="vidaUtil">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">marca</label>
                    <input value="{{ old('marca',$herramienta->marca) }}" type="text" class="form-control form-control-lg"  name="marca">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">modelo</label>
                    <input value="{{ old('modelo',$herramienta->modelo) }}" type="text" class="form-control form-control-lg"  name="modelo">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label>">caracteristicas</label>
                    <input value="{{ old('caracteristicas',$herramienta->caracteristicas) }}" type="text" class="form-control form-control-lg"  name="caracteristicas">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label h5">image</label>
                    <input type="file" class="form-control form-control-lg" placeholder="Price" name="image">
                    @if ($herramienta->image != "")
                        <img class="w-50 my-3" src="{{ asset('uploads/herramienta/' . $herramienta->image) }}" alt="" style="width: 100px">
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

<div>
    @include("components.componentes.footer")
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>