@foreach($children as $submenu)
    <ul class="navbar-nav ml-auto">
        @if(count($submenu->children))
            <li class="nav-item dropdown">{{$submenu->title}}</li>
            <ul class="navbar-nav ml-auto">
                @include('home.menutree',['children'=>$submenu->children])
            </ul>
            <hr>
        @else
            <li><a href=#>{{$submenu->title}}</a></li>
        @endif
    </ul>
@endforeach
