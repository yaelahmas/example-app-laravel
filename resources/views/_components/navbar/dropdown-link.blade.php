 <!-- Active: "bg-gray-100", Not Active: "" -->

 <a {{ $attributes }}
     class="{{ request()->fullUrlIs(url($href)) ? 'bg-gray-100' : '' }} block px-4 py-2 text-sm text-gray-700"
     role="menuitem" tabindex="-1" id="user-menu-item-0">{{ $slot }}</a>
