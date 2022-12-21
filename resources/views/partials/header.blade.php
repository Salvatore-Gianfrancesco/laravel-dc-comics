<header>
    <div class="header_top">
        <div class="container d-flex justify-content-end align-items-center gap-5 py-1 text-uppercase">
            <a href="{{Route('home')}}">DC Power&trade;Visa&reg;</a>
            <a href="{{Route('home')}}">Additional DC Sites</a>
        </div>
    </div>

    <div class="header_bottom">
        <div class="container d-flex justify-content-between">
            <a href="{{Route('home')}}" class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo" class="my-2">
            </a>

            <nav class="d-flex align-items-center gap-4 text-uppercase">
                <a href="" disabled>characters</a>
                <a href="{{Route('comics.index')}}" class="{{Route::currentRouteName() === 'comics.index' ? 'active' : ''}}">comics</a>
                <a href="" disabled>movies</a>
                <a href="" disabled>tv</a>
                <a href="" disabled>games</a>
                <a href="" disabled>collectibles</a>
                <a href="" disabled>videos</a>
                <a href="" disabled>fans</a>
                <a href="" disabled>news</a>
                <a href="" class="gap-1">shop
                    <i class="fa-solid fa-caret-down"></i>
                </a>
            </nav>

            <div class="search d-flex align-items-center">
                <div class="text-end">
                    Search
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </div>
</header>