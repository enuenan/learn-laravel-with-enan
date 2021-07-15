<!DOCTYPE html>
<html>

<head>
    @include('frontend.includes.head')
</head>

<body>
    <div class="page-container">
        @include('frontend.includes.header')

        <main>
            @yield('content')

            @include('frontend.includes.footer')
        </main>
    </div>

    @include('frontend.includes.foot')

</body>

</html>
