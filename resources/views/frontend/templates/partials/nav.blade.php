<div class="navbar-fixed">
<nav class="white">
    <div class="nav-wrapper">
      <a href="/" style="padding-left: 10%; ; color: black" class="brand-logo gambar"><img width="60px" height="60px" src="image/11.png" alt=""> </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        @guest
          <li><a href= "login">Login</a></li>
          <li><a href= "{{route('register')}}">Register</a></li>
          

          @else
          <ul id="dropdown1" class ="dropdown-content">
              <li>
                <a href="/">Home</a>
              </li>

            <li><a href="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
          </ul>
          <form id="logout-form" action="logout" method="POST" style="display: none;">
          @csrf
          </form>
          <li><a href="#" class="dropdown-trigger" data-target="dropdown1">{{ auth()->user()->name }}</a></li>

        @endguest
      </ul> 
    </div>
</nav>
</div>
