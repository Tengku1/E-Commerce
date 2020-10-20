<nav class="navbar coreNav navbar-expand-lg col-12 border-bottom border-white" id="navbar">

    <button class="navbar-toggler text-white font-weight-bolder" type="button" data-toggle="collapse"
        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="col-md-4">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><i class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop">Shop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/#categories">
                        Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <a class="navbar-brand" href="/"><i class="fa fa-star-half-o"></i> Shoppers</a>
        </div>
        <div class="col-md-4">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                </li>
                <li class="nav-item">
                    <button class="btn bg-transparent border-0 text-white" onclick="OpenSidebar()">
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <i class="fa fa-sign-in"></i></a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} <i class="fa fa-user-plus"></i></a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="cartSidebar" id="BagCart">
    <div class="col-md-12 headCartSidebar">
        <span>Pesanan Anda</span>
        <button class="btn" onclick="CloseSidebar()">
            <i class="fa fa-close"></i>
        </button>
    </div>
    <span>Anda belum memiliki pesanan</span>
</div>

<script src="{{'js/index.js'}}"></script>