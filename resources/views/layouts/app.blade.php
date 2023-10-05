<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WeddingNesia - Undangan pernikahan online gratis</title>

    {/* Meta tags SEO */}
    <meta name="description"
        content="WeddingNesia: Undang orang-orang terdekat dalam momen kebahagiaan pernikahan Anda dengan cara yang unik dan menarik. Coba buat undangan pernikahan online gratis sekarang juga!" />
    <meta name="keywords"
        content="undangan, pernikahan, online, gratis, undangan pernikahan, undangan online, undangan pernikahan gratis, undangan gratis, undangan pernikahan online gratis" />
    <meta name="author" content="Adrian, Didi and Irga" />

    {/* Open Graph meta tags */}
    <meta property="og:title"
        content="WeddingNesia: Platform untuk pembuatan undangan pernikahan online gratis terbaik di Indonesia." />
    <meta property="og:description"
        content="Undang orang-orang terdekat dalam momen kebahagiaan pernikahan Anda dengan cara yang unik dan menarik. Coba buat undangan pernikahan online gratis sekarang juga!" />
    <meta property="og:image"
        content="https://raw.githubusercontent.com/rianmz-genz/weddingnesia/main/public/images/mockuplaptop.jpg" />
    <meta property="og:url" content="https://weddingnesia.vercel.app" />
    <meta property="og:type" content="website" />
    <meta name="googlebot" content="index,follow" />
    <meta name="robots" content="index,follow" />
    {/* Favicon */}
    <link rel="icon" href="/wn.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('inline-scripts')
</head>

<body class="bg-light">
    <div id="app">
        @include('shared/navbar')

        <div class="container">
            @include('shared/alerts')

            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('shared/footer')
    </div>
</body>

</html>
