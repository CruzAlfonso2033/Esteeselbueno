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
        @include("components.admin-component.header")
    </div>


<br>
{{-- Crear un servicio --}}

<div class="container">

    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('admin.Servicios.create') }}" class="btn btn-dark">Create</a>
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
                        <th></th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Direction</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Person</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @if ($products->isNotEmpty())
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            @if ($product->image != "")
                                <img src="{{ asset('uploads/products/' . $product->image) }}" alt="" style="width: 100px">
                                
                            @endif
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->date}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->direction}}</td>
                        <td>{{$product->phone}}</td>
                        <td>{{$product->status}}</td>
                        <td>{{$product->person}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a href="{{ route('admin.Servicios.edit',$product->id)}}" class="btn btn-dark">Edit</a>
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


                            <a href="" onclick="deleteProduct();"class="btn btn-danger">Delete
                                <form id="delete-product-from-{{ $product->id }}" action="{{ route('admin.Servicios.destroy',$product->id )}}"method="POST" >
                                @csrf
                                    @method('DELETE')
                                </form>
                            </a>
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

<div class="card text-bg-dark" id="sombras">
    <div class="card text-bg-dark" id="sombras">
        <div class="card-body">
            <div class="row me-2">
                <div class="col-4">  

                </div>
                <div class="col-4 text-center">
                    <div class="card px-2 py-2">
                        <h5 class="card-title">Rastrear un servicio solicitado</h5>
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
    @include("components.clients-component.footer")
</div>


<script>
    function deleteProduct(id){
        if (confirm('Are you sure?')){
            document.getElementById('delete-product-form-'+id);
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

