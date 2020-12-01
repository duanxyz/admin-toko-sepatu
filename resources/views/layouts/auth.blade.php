<div class="wrapper">
    @include('layouts.navbars.sidebar')

    <div class="main">
        @include('layouts.navbars.navbar')

        <main class="content">
            <div class="container-fluid p-0">
                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <h3>@yield('titlePage')</h3>
                    </div>
                </div>
                @yield('content')
            </div>
        </main>

        @include('layouts.footers.footer')
    </div>
</div>
