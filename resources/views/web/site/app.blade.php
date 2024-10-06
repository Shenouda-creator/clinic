@include('web.site.layOut.head')
<body>
    <div class="page-wrapper">
    @include('web.site.layOut.nav')

           @yield('content')

    </div>
    @include('web.site.layOut.footer')
