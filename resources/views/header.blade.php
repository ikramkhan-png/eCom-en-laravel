<?php
use App\http\controllers\ProductController;
$total=0;
if(Session::has('user')){ $total = ProductController::cartItem(); } ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link active" href="/">Home</a>
            </li>
            <li><a class="nav-link" href="#">Orders</a></li>
            <form class="form-inline my-2 my-lg-0" action="/search">
                <input
                    class="form-control mr-sm-2 search-box"
                    type="search"
                    placeholder="Search"
                    name="query"
                    aria-label="Search"
                />
                <button
                    class="btn btn-outline-success my-2 my-sm-0"
                    type="submit"
                >
                    Search
                </button>
            </form>
        </ul>
        <ul class="navbar-nav navbar-right">
            <li>
                <a class="nav-link" href="#">Cart({{ $total }})</a>
            </li>
            @if(Session::has('user'))
            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    {{Session::get('user')['name']}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </li>
            @else

            <a class="btn btn-default" href="/login">Login</a>
            @endif
        </ul>
    </div>
</nav>
