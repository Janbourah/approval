 <div class="header_main" style="background-color: #2b2278">
     <div class="mobile_menu" style="background-color: #2b2278">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <div class="logo_mobile"><a href="index.html"></a></div>
             <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">Home</a></li>


                     @if (Route::has('login'))
                         @auth

                             <li> <x-app-layout>

                                 </x-app-layout>
                             </li>
                             <li class="nav-item"><a href="{{ url('create_post') }}" class="nav-link">Add a Request</a>
                             </li>
                         @else
                             <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                             <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>

                         @endauth
                     @endif
                 </ul>
             </div>
         </nav>
     </div>
     <div class="container-fluid">
         {{-- <div class="logo"><a href="index.html"><img src=""></a></div> --}}
         <div class="menu_main">
             <ul>
                 <li class="active"><a href="{{ route('homepage') }}">Home</a></li>


                 @if (Route::has('login'))
                     @auth

                         <li> <x-app-layout>

                             </x-app-layout>
                         </li>
                         <li><a href="{{ url('create_post') }}">add suggestion</a></li>
                     @else
                         <li><a href="{{ route('login') }}">Login</a></li>
                         <li><a href="{{ route('register') }}">Register</a></li>

                     @endauth
                 @endif
             </ul>
         </div>
     </div>
 </div>
