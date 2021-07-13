@extends('frontend.layouts.default',[
'title'=>'Views & Routes',
'currentClass'=>'views-and-routes',
'keywords'=>'Laravel Views & Routes',
'description'=>'Laravel Views & Routes',
])

@section('content')
    <h2>View & Route</h2>
    <h3>Views</h3>
    <p>
        By default, Laravel views are built using the Blade template language, and stored in the
        <span class="path">/resources/views/</span> folder. We can create our view files there. Rules to create
        a view file is <span class="path">filename.blade.php</span>
    </p>

    <h3>Routes</h3>
    <p>
        The main application route configuration is stored at <span class="path">routes/web.php</span>. This
        file already contains the
        main route (the root path / ) pointing to a welcome page view.
    </p>
    <pre>
        <code class="javascript">
    Route::get('/', function () {
        return view('filename');
    });
        </code>
    </pre>
    <p>Later on you will get to know about <a href="05-route.html"><span class="path">Routes</span></a> and
        <a href="04-view.html"><span class="path">Views</span></a>.
    </p>

    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_3ny313nr.json" background="transparent" speed="1"
        speed="0.5" loop autoplay></lottie-player>

@endsection
