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
 {{-- HEADER --}}

<body id="body">

    <div>
        <header  id="sombrasheader">
            @include("components.componentes.header")
        </header>
       
    </div>
   
<br>

 {{-- LISTAS DE SERVICIOS --}}

    <div class="container">
        <div class="row d-flex justify-content-center">
            @if(Session::has('success'))
                <div class="col-md-10">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
    
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h4 class="text-black">Servicios</h4>
                            </div>
                            <div class="col"></div>
                            <div class="col ">
                                <div class="justify-content-end">
                                    <a href="{{ route('admin.Servicios.create') }}" class="btn btn-dark">Create</a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                        <table class="table">
                            <thead>
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
                            </thead>
                            <tbody>
                                @if ($products->isNotEmpty())
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>
                                                @if ($product->image != "")
                                                    <img src="{{ asset('uploads/products/' . $product->image) }}" alt="" style="width: 100px">
                                                @endif
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->date }}</td>
                                            <td>{{ $product->category }}</td>
                                            <td>{{ $product->direction }}</td>
                                            <td>{{ $product->phone }}</td>
                                            <td>{{ $product->status }}</td>
                                            <td>{{ $product->person }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                <a href="{{ route('admin.Servicios.edit', $product->id) }}" class="btn btn-dark">Edit</a>
                                                <a href="#" onclick="deleteProduct({{ $product->id }});" class="btn btn-danger">Delete</a>
                                                <form id="delete-product-form-{{ $product->id }}" action="{{ route('admin.Servicios.destroy', $product->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    {{-- FOOTER --}}

    <script>
        function deleteProduct(id){
            if (confirm("¿Estas seguro?")){
                document.getElementById("delete-product-from-"+id).submit();
            }
        }
    </script>

    
    <div>
        @include("components.componentes.footer ")
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</body>
</html>


