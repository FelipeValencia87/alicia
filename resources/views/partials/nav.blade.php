 <nav class=" bg-blue-900">



        <div class=" " id="navbarSupportedContent " >

            <ul class="flex justify-content-between px-6 p-4">
                 <img src="../img/logopoli.png" alt="Logo Poli" width="20%" class="mr-md-3">
                <li class=" {{request()->routeIs('home') ? 'active' : ''}}"><a href="/" class="nav-link">Home</a></li>
                <li class=" {{request()->routeIs('nosotros') ? 'active' : ''}}"><a href="/nosotros " class="nav-link">Nosotros</a></li>
                <li class=" {{request()->routeIs('servicios') ? 'active' : ''}}"><a href="/servicios" class="nav-link">Servicios</a></li>
                <li class=" {{request()->routeIs('beneficios.*') ? 'active' : ''}}"><a href="/beneficios" class="nav-link">Beneficios</a></li>
                @auth
                    <li class=" {{request()->routeIs('informes') ? 'active' : ''}}"><a href="/informes" class="nav-link">  Informes</a></li>
                    <li class=" {{request()->routeIs('indicadores') ? 'active' : ''}}"><a href="/indicadores" class="nav-link">Indicadores</a></li>

                    <li><a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                    </form>
                @endauth
                @guest
                <li> <a href="{{ route('login') }}">Login</a></li>
                @endguest
            </ul>
        </div>
    </nav>