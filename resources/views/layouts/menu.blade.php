<ul class="navbar-nav ml-auto">
  <li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
      <i class="material-icons">apps</i> Menú
    </a>
    <div class="dropdown-menu dropdown-with-icons">
      <a href="{{route('libros.index')}}" class="dropdown-item">
        <i class="material-icons">library_books</i> Libros
      </a>

      <a href="{!! route('editoriales.index') !!}" class="dropdown-item"><i class="material-icons">collections_bookmark</i><span>Editoriales</span></a>

      <a href="{!! route('clientes.index') !!}" class="dropdown-item"><i class="material-icons">assignment_ind</i><span>Clientes</span></a>

      <a href="{!! route('generos.index') !!}" class="dropdown-item"><i class="material-icons">tag_faces</i><span>Géneros</span></a>

      <a href="{!! route('autores.index') !!}" class="dropdown-item"><i class="material-icons">person</i><span>Autores</span></a>

    </div>
  </li>
  @guest
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
  @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
              <a href="{!! route('user.index') !!}" class="dropdown-item"><i class="material-icons">person</i><span>Usuarios</span></a>
              <a href="{!! route('roles.index') !!}" class="dropdown-item"><i class="material-icons">person</i><span>Roles</span></a>
              <a href="{!! route('permissions.index') !!}" class="dropdown-item"><i class="material-icons">person</i><span>Permisos</span></a>
          </div>

      </li>

  @endguest
</ul>
