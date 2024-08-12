<footer class="row me-1 row-cols-1  pt-4 mt-4 border-top text-bg-dark">
    <div class="col-2 mb-3 border-start">
        <ul class="nav flex-column">
            <h5>Navegación</h5>
            <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-white">Inicio</a></li>
            <li class="nav-item mb-2"><a href="/Servicios" class="nav-link p-0 text-white">Servicio</a></li>
            <li class="nav-item mb-2"><a href="/Tienda" class="nav-link p-0 text-white">Tienda</a></li>
            <li class="nav-item mb-2"><a href="/AcercaDeNosotros" class="nav-link p-0 text-white">Acerca de nosotros</a></li>
            @role('admin')
                <li class="nav-item mb-2"><a href="/Vistas/Informes" class="nav-link px-2 text-white">Informes</a></li>
                <li class="nav-item mb-2"><a href="/Vistas/Registros" class="nav-link px-2 text-white">Registros</a></li>
            @endrole

            @role('employee')
                <li class="nav-item mb-2"><a href="/Vistas/Registros" class="nav-link px-2 text-white">Registros</a></li>
            @endrole
        </ul>
    </div>

    <div class="col-2 mb-3 border-start">
        <ul class="nav flex-column">
            <h5>Conocenos</h5>
            <li class="nav-item mb-2">17610575@utgz.edu.mx</li>
            <li class="nav-item mb-2">7841071694</li>
        </ul>
    </div>

    <div class="col-5 mb-3">
        <div class="row ms-5">
            <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{url('/img/Logo.png')}}" width="120" alt="">
            </a>
        </div>
        <div class="row ms-5">
            <p class="text-white">Electric-Cool |© 2024</p>
        </div>
    </div>


    <div class="col-3 align-items-end border-start">
        <div class="row text-center ">
            <div class="card-body">
                <h5 class="card-title">Contactanos</h5>
                <p class="card-text">Sé parte de nuestro equipo de trabajo</p>
                <a href="#" class="btn btn-primary">Contactanos</a>
            </div>
        </div>
    </div>
</footer>
