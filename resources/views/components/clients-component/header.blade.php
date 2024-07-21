<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        {{-- INFORMACIÓN DEL DUEÑO DE ELECTRIC Y LOGO --}}
        <div class="col-1">
            <div class="row"> 
                Correo  Numero
            </div>
            <div class="row">
                <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{url('/img/Logo.png')}}" width="60" alt="">
                </a>
            </div>
        </div>

        {{-- RUTEO ENTRE PÁGINAS DE VISTA CLIENTE --}}
        
        <div class="col-8">
            <div class="row ms-3">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/Inicio" class="nav-link px-2 text-secondary">Inicio</a></li>
                    <li><a href="/Servicios" class="nav-link px-2 text-white">Servicio</a></li>
                    <li><a href="/Tienda" class="nav-link px-2 text-white">Tienda</a></li>
                    <li><a href="/AcercaDeNosotros" class="nav-link px-2 text-white">AcercaDeNosotros</a></li>
                </ul>
            </div>
            <div class="row"></div>        
        </div>

        {{-- FALTA REALIZAR EL INICIO DE SESION CON BREEZE --}}

        <div class="col-3">
            <div class="text-end ms-4">
                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                        <button type="button" class="btn btn-success">Iniciar sesion</button>
                        </a>
                    @endauth
                </nav>
            @endif
            </div>
        </div>  
      </div>
    </div>
  </header>