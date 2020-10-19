<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ set_route_active('root_path') }}">
                    <a class="nav-link" href="{{ route('root_path') }}">Home</a>
                </li>
                <li class="nav-item {{ set_route_active('about_path') }}">
                    <a class="nav-link" href="{{ route('about_path') }}">About</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Planet
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://laraval.com">Laravel.com</a>
                        <a class="dropdown-item" href="https://laraval.io">Laravel.io</a>
                        <a class="dropdown-item" href="https://Laracasts.com">Laracasts</a>
                        <a class="dropdown-item" href="https://Larajobs.com">Larajobs</a>
                        <a class="dropdown-item" href="#">Laravel News</a>
                        <a class="dropdown-item" href="#">Larachat</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_route_active('contact_path') }}" href="{{ route('contact_path') }}">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>

        </div>

    </div>

</nav>
