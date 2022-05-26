

@guest
<div class="dropdown" id="navv">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      تسجيل/ تسجيل الدخول
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        
        @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif
       @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif

            @else
           
        
    </div>
    @endguest
    <div class="dropdown">
    {{-- <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <i class="fa fa-user-circle" aria-hidden="true"></i>
      </button> --}}
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        {{-- <a  href="{{ route('products.index') }}" class="dropdown-item"> <i style="color: #008b8b" class="fa fa-box"></i> المنتجات</a> --}}
        {{-- <a  href="{{ route('products.index') }}" class="dropdown-item"> <i style="color: #008b8b" class="fa fa-box"></i> المنتجات</a>  --}}
        <a  class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
           <i class="fa fa-sign-out " style="color: red"></i>  {{ __('خروج') }}  </a>
         
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        
      </div>
    </div>
  </div>


