<nav class="navbar sticky-top p-3 bg-white shadow-sm">
    <div class="container">
        <div class="d-flex align-items-center">

            <a class="navbar-brand" href="{{ route('dashboard') }}"><img class="logo-h mr-3" src="{{ asset('img/logo/logoh.png') }}" alt=""></a>
        </div>
        <div></div>
        <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ucwords (Auth::user()->name )}}
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Conta</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">
                    <form action="logout" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{auth()->user()->id}}">
                        <button type="submit">Sair</button>
                    </form>
                    </a>
                </li>
            </ul>
        </div>


    </div>
</nav>
