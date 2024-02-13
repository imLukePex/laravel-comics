@php
    $navbar = [
        [
            "text" => "CHARACTERS",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "COMICS",
            "href" => "#",
            "current" => true,
        ],
        [
            "text" => "MOVIES",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "TV",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "COLLECTIBLES",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "VIDEOS",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "FANS",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "NEWS",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "SHOP",
            "href" => "#",
            "current" => false,
        ],
];
@endphp

<header>
    <div class="topbar">
        <div class="container">
            <div class="logo-box">
                <a href="#">
                    <img src="{{ Vite::asset('resources/imgs/dc-logo.png')}}" width="70px" alt="">
                </a>
            </div>

            <nav>
                <ul>
                    @foreach ( $navbar as $link => $value )

                    <li><a href="{{$value['href']}}"><h4>{{$value['text']}}</h4></a></li>

                    @endforeach
                </ul>
                <div class="search-bar">
                    <input type="text" name="fname" placeholder="Search">
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid jumbotron"></div>
</header>
