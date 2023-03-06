<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" width="50" height="50" class="d-inline-block align-top"
                alt="">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li>
                    <a href="{{ route('guests.index') }}"
                        class="{{ request()->routeIs('eggs.index') ? 'active' : '' }} text-black mx-3">PAZIENTI</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
