<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">UTS</a>
        <div>
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('uts.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('uts.web') }}">UTS Web</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('uts.database') }}">UTS Database</a></li>
            </ul>
        </div>
    </div>
</nav>
