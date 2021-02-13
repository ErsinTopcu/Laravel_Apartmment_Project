<!-- Start header -->
@php
    $parentMenu = \App\Http\Controllers\HomeController::menuList()
@endphp


<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">Online Ödeme</a></li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    @foreach($parentMenu as $rs)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">{{$rs->title}}<i class="fa fa-angle-right"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                @if(count($rs->children))
                                    @include('home.menutree',['children' => $rs->children])
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </nav>
</header>
