<ul class="navbar-nav ml-auto">
  <li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
      <i class="material-icons">apps</i> Menú
    </a>
    <div class="dropdown-menu dropdown-with-icons">
      <a href="{{route('libros.index')}}" class="dropdown-item">
        <i class="material-icons">library_books</i> Libros
      </a>
      <a href="https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html" class="dropdown-item">
        <i class="material-icons">content_paste</i> con descuentos
      </a>

      <a href="{!! route('editoriales.index') !!}" class="dropdown-item"><i class="material-icons">collections_bookmark</i><span>Editoriales</span></a>

      <a href="{!! route('clientes.index') !!}" class="dropdown-item"><i class="material-icons">assignment_ind</i><span>Clientes</span></a>


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
          </div>
      </li>
  @endguest
</ul>
<li class="{{ Request::is('clientes*') ? 'active' : '' }}">

</li>
