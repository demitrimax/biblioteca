<ul class="navbar-nav ml-auto">
  <li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
      <i class="material-icons">apps</i> Menú
    </a>
    <div class="dropdown-menu dropdown-with-icons">
      @can('libros-list')
      <a href="{{route('libros.index')}}" class="dropdown-item">
        <i class="material-icons">library_books</i> Libros
      </a>
      @endcan
      @can('editoriales-list')
      <a href="{!! route('editoriales.index') !!}" class="dropdown-item"><i class="material-icons">collections_bookmark</i><span>Editoriales</span></a>
      @endcan
      @can('clientes-list')
      <a href="{!! route('clientes.index') !!}" class="dropdown-item"><i class="material-icons">assignment_ind</i><span>Clientes</span></a>
      @endcan
      @can('generos-list')
      <a href="{!! route('generos.index') !!}" class="dropdown-item"><i class="material-icons">tag_faces</i><span>Géneros</span></a>
       @endcan
       @can('autores-list')
      <a href="{!! route('autores.index') !!}" class="dropdown-item"><i class="material-icons">person</i><span>Autores</span></a>
      @endcan
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

          <div class="dropdown-menu dropdown-menu-right dropdown-with-icons" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
              @can('user-list')
              <a href="{!! route('user.index') !!}" class="dropdown-item"><i class="material-icons">person</i><span>Usuarios</span></a>
              @endcan
              @can('role-list')
              <a href="{!! route('roles.index') !!}" class="dropdown-item"><i class="material-icons">settings_input_composite</i><span>Roles</span></a>
              @endcan
              @can('permission-list')
              <a href="{!! route('permissions.index') !!}" class="dropdown-item"><i class="material-icons">thumbs_up_down</i><span>Permisos</span></a>
              @endcan
          </div>

      </li>

  @endguest
</ul>
