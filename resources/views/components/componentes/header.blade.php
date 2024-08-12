<div>
    <header  id="sombrasheader">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-start justify-content-lg-start">
    
            {{-- INFORMACIÓN DEL DUEÑO DE ELECTRIC Y LOGO --}}
            <div class="col-2">
                <div class="row font-monospace">  {{-- TIPO DE LETRA MONOSPACE --}}
                    <h5 class="small">17610575@utgz.edu.mx | 7841071694</h5>                
                </div>
                <div class="row">
                    <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="{{url('/img/Logo.png')}}" width="60" alt="">
                    </a>
                </div>
            </div>
    
            {{-- RUTEO ENTRE PÁGINAS DE VISTA CLIENTE --}}
            
            <div class="col-7">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-white">Inicio</a></li>
                    <li><a href="/Vistas/Servicios" class="nav-link px-2 text-white">Servicio</a></li>
                    {{-- <li><a href="/Vistas/Tienda" class="nav-link px-2 text-white">Tienda</a></li> --}}
                    <li><a href="/Vistas/AcercaDeNosotros" class="nav-link px-2 text-white">AcercaDeNosotros</a></li>
    
                    @role('admin')
                        <li><a href="/Vistas/Informes" class="nav-link px-2 text-white">Informes</a></li>
                        <li><a href="/admin/costs" class="nav-link px-2 text-white">Costos Fijos</a></li>
                    @endrole
    
                    @role('employee')
                        <li><a href="/Vistas/Herramientas" class="nav-link px-2 text-white">Herramientas</a></li>
                    @endrole
                </ul>      
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
</div>

