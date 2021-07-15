<!DOCTYPE html>
<html>

<head>
    {{-- @include('frontend.includes.head') --}}
    <link rel="stylesheet" href="{{ asset('public/css/default.css') }}">
    <script src="{{ asset('public/tools/indice.js') }}"></script>
    <script>
        var current_class = "{{ $currentClass }}";
    </script>
    <script src="./public/highlight/highlight.pack.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="description" content="{{ $description }}">
    <meta name="author" content="Enan">
    <!-- <meta property="og:image" content="public/img/logomark.min.svg" /> -->
    <meta property="og:image" content="{{ asset('public/img/Photo_1625506961500.jpg') }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--favicon-->
    <link rel="icon" type="image/png" href="{{ asset('public/img/Photo_1625506961500.jpg') }}">
    <title>Learn Laravel with Enan - {{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styles.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

</head>

<body>
    <div class="page-container">
        @include('frontend.includes.header')

        <main>
            @yield('content')

            @include('frontend.includes.footer')
        </main>
    </div>

    {{-- @include('frontend.includes.foot') --}}
    <script src="{{ asset('public/js/scripts.js') }}"></script>
    <script src="{{ asset('public/tools/copy.js') }}"></script>
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script src="{{ asset('public/tools/messenger.js') }}"></script>


</body>

</html>
