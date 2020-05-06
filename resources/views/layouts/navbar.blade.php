<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>{{ config('app.name', 'Reciclar') }}</h3>
        <strong>R</strong>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-users"></i>
                Mis recicladores
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-street-view"></i>
                Comunidad
            </a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-chart-line"></i>
                Indicadores Ambientales
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-comment"></i>
                Notificaciones
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-cogs"></i>
                Configuracion
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-phone"></i>
                Contacto
            </a>
        </li>
    </ul>
</nav>
<!--End Sidebar-->