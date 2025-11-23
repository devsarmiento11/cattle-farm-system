<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand fw-bold text-dark" href="/">🐄 Cattle Farm</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-dark" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="/dashboard">Home</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="/contact">Contact</a></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link text-dark" style="border: none; background: none;">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
