<!DOCTYPE html>
<html lang="en">
    <head>
        @include('coreui::inc.meta')
        @include('coreui::inc.css')
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        @include('coreui::inc.header')
        <div class="app-body">
            @include('coreui::inc.sidebar')
            <main class="main">
                @yield('nav')
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        @yield('content')
                    </div>
                </div>
            </main>
            @include('coreui::inc.aside')
        </div>
        @include('coreui::inc.footer')
        @include('coreui::inc.js')
    </body>
</html>