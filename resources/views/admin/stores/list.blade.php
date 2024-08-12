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
            <a href="{{ route('admin.stores.create') }}" class="btn btn-dark">Create</a>
            <a href="{{url('pdf_generatore')}}" class="btn btn-dark ml-2">Generate PDF</a>
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
                <h4 class="text-white">Products</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Action</th>


                    </tr>
                    @if ($stores->isNotEmpty())
                    @foreach ($stores as $store)
                    <tr>
                        <td>{{ $store->id }}</td>
                        <td>{{ $store->name }}</td>
                        <td>{{ $store->address }}</td>
                        <td>{{ $store->phone }}</td>
                        <td>{{ $store->email }}</td>
                        <td>{{ $store->type }}</td>
                        <td>{{ $store->description }}</td>
                        <td>
                            <a href="{{ route('admin.stores.edit',$store->id)}}" class="btn btn-dark">Edit</a>
                           {{--  <form onclick="deleteProduct({{ $product->id }});" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form> --}}

                            {{-- <form id="delete-product-form-{{ $product->id }}" action="{{ route('admin.Servicios.destroy', $product->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="deleteProduct();">Delete</button>
                            </form> --}}


                            <a href="#" onclick="deleteStore({{ $store->id  }});" class="btn btn-danger">Delete</a>
                                <form id="delete-store-from-{{ $store->id }}" action="{{ route('admin.stores.destroy',$store->id )}}"method="POST" >
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
    function deleteStore(id){
        if (confirm("¿Estas seguro?")){
            document.getElementById("delete-store-from-"+id).submit();
        }
    }
</script>

