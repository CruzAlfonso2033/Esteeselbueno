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
{{-- Crear un servicio --}}

<div class="container">

    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('admin.Herramientas.create') }}" class="btn btn-dark">Create</a>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        @if(Session::has('success'))
            <div class="col-md-10">
                <div class="alert alert-success">
                    {{ Session :: get('success') }}
                </div>
        </div>
        @endif
        <div class="col-md-10">
            <div class="card borde-0 shadow-lg my-4">
            <div class="card-header">
                <h4 class="text-white">Costos fijos</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th></th>
                        <th>elemento</th>
                        <th>cantidad</th>
                        <th>costo</th>
                        <th>vidaUtil</th>
                        <th>marca</th>
                        <th>modelo</th>
                        <th>caracteristicas</th>
                    </tr>
                    @if ($herramientas->isNotEmpty())
                    @foreach ($herramientas as $herramienta)
                    <tr>
                        <td>{{ $herramienta->id }}</td>
                        <td>
                            @if ($herramienta->fotoHerramienta != "")
                                <img src="{{ asset('uploads/herramientas/' . $herramienta->fotoHerramienta) }}" alt="" style="width: 100px">
                                
                            @endif
                        </td>
                        <td>{{$herramienta->element}}</td>
                        <td>{{$herramienta->cantidad}}</td>
                        <td>{{$herramienta->costo}}</td>
                        <td>{{$herramienta->vidaUtil}}</td>
                        <td>{{$herramienta->marca}}</td>
                        <td>{{$herramienta->modelo}}</td>
                        <td>{{$herramienta->caracteristicas}}</td>
                        <td>
                            <a href="{{ route('admin.Herramientas.edit',$herramienta->id)}}" class="btn btn-dark">Edit</a>
                            

                            <a href="#" onclick="deleteHerramienta({{ $herramienta->id  }});" class="btn btn-danger">Delete</a>
                            <form id="delete-cost-from-{{ $herramienta->id }}" action="{{ route('admin.Herramientas.destroy',$herramienta->id )}}" method="POST" >
                            @csrf
                                @method('DELETE')
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                    
                    @endif
                    
                </table>

            </div>
            
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


<script>
    function deleteHerramienta(id){
        if (confirm("¿Estas seguro?")){
            document.getElementById("delete-Herramienta-from-"+id).submit();
        }
    }
</script>
