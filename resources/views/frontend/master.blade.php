@include('frontend\layout\hader')


<body>
    @include('frontend\layout\navbar')
    <main>
        @yield('main-content')
    </main>
    @include('frontend\layout\footer')
    @include('frontend\layout\modal')
    @include('frontend\layout\script')

</body>
