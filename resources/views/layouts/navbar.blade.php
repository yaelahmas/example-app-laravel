 <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
     <div class="container">
         <a class="navbar-brand" href="{{ route('home') }}">
             <img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30"
                 class="d-inline-block align-top" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             {{-- @if (!Route::is('login') && !Route::is('register')) --}}
             @auth

                 <ul class="navbar-nav mr-auto">
                     <x-nav-item href="{{ route('home') }}">Dashboard</x-nav-item>
                     <x-nav-item href="{{ route('about') }}">Users</x-nav-item>
                     <x-nav-item href="{{ route('article') }}">Articles</x-nav-item>
                 </ul>
             @else
                 <ul class="navbar-nav mr-auto">
                     <x-nav-item href="{{ route('home') }}">Home</x-nav-item>
                     <x-nav-item href="{{ route('about') }}">About</x-nav-item>
                     <x-nav-item href="{{ route('article') }}">Article</x-nav-item>
                     <x-nav-item href="{{ route('contact') }}">Contact</x-nav-item>
                 </ul>
             @endauth
             {{-- @endif --}}

             <ul class="navbar-nav ml-auto">
                 @auth
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Muhammad Andre Syahli
                         </a>
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="">Your Profile</a>
                             <a class="dropdown-item" href="">Settings</a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="javascript:void(0);"
                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 Logout
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                         </div>
                     </li>
                 @else
                     <x-nav-item href="{{ route('login') }}">Login</x-nav-item>
                     <x-nav-item href="{{ route('register') }}">Register</x-nav-item>
                 @endauth
             </ul>

         </div>
     </div>
 </nav>
