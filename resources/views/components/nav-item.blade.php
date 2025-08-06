 {{-- <li class="nav-item active">
     <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
 </li> --}}

 <li class="nav-item {{ request()->fullUrlIs(url($href)) ? 'active' : '' }}">
     <a class="nav-link" {{ $attributes }}>
         {{ $slot }}
         @if (request()->fullUrlIs(url($href)) && strtolower(trim($slot)) === 'home')
             <span class="sr-only">(current)</span>
         @endif
     </a>
 </li>
