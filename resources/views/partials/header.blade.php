<header id="site_header">

    <div class="top_header">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-2 text-end">
                    <a href="{{ route('admin') }}">ADMIN</a>
                </div>
                <div class="col-2 text-end">
                    <p>DC POWER VISA&reg </p>
                </div>
                <div class="col-2 text-end">
                    <p>ADDITIONAL DC SITE</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom_header">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    @include('partials.logo')
                </div>

                <div class="col">
                    <nav class="nav justify-content-center">
                        @foreach (config('db.menu') as $link)

                            <a href="{{ route($link['href']) }}"
                                class="{{ Route::currentRouteName() === $link['href'] ? 'active' : '' }}">
                                {{ $link['name'] }}
                            </a>
                        @endforeach
                    </nav>
                </div>

                <div class="col">
                    <div class="search text-end">
                        <input type="search" name="" id="" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>
