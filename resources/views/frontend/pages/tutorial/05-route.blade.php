@extends('frontend.layouts.default',[
'title'=>'Route',
'currentClass'=>'route',
'keywords'=>'Route',
'description'=>'Laravel Route',
])

@section('content')
    <h3>Routing</h3>
    <p>
        In Laravel, all requests are mapped with the help of routes. Basic routing routes the request to the
        associated controllers.
    </p>
    <p>Routing in Laravel includes the following categories − </p>
    <ul>
        <ol><span style="color: red;"> ☯</span> Basic Routing</ol>
        <ol><span style="color: red;"> ☯</span> Route parameters</ol>
        <ol><span style="color: red;"> ☯</span> Named Routes</ol>
    </ul>

    <h4>Basic Routing</h4>
    <p>
        All the application routes are registered within the routes/web.php file. This file tells Laravel for
        the URIs it should respond to and the associated controller will give it a particular call. The sample
        route for the welcome page can be seen as shown in the screenshot given below −
    </p>
    <img src="{{ asset('public/img/route.jpg') }}" class="image">

    <p>Open <span class="path">web.php</span></p>

    <p>
        <span style="text-decoration: underline; font-weight: bold">Basic Routing</span> : All the application
        routes are registered within the app/routes.php file. This file tells Laravel for the URIs it should
        respond to and the associated controller will give it a particular call. The sample route for the
        welcome page can be seen as shown in the screenshot given below −
    </p>
    <pre>
            <code class="javascript">
        Route::get($uri, $callback);
        Route::post($uri, $callback);
        Route::put($uri, $callback);
        Route::patch($uri, $callback);
        Route::delete($uri, $callback);
        Route::options($uri, $callback);
                        
        // Example
        Route::get('/', function () {
            return view('welcome');
        });
            </code>
        </pre>

    <p>
        <span style="text-decoration: underline; font-weight: bold"> Route parameters </span>: These parameters
        are those which should be mandatorily captured for routing the web application. For example, it is
        important to capture the user’s identification number from the URL. This can be possible by defining
        route parameters as shown below −
    </p>
    <pre>
            <code class="javascript">
        Route::get('ID/{id}',function($id) {
            echo 'ID: '.$id;
        });
            </code>
        </pre>

    <p>
        <span style="text-decoration: underline; font-weight: bold"> Named Routes </span>: Named routes allow a
        convenient way of creating routes. The chaining of routes can be specified using name method onto the
        route definition. The following code shows an example for creating named routes with controller −
    </p>
    <pre>
            <code class="javascript">
        Route::get('/user/profile', function () {
            return view('profile')->name('profile');
        });
            </code>
        </pre>

    <p>
        <span style="text-decoration: underline; font-weight: bold"> Resource route </span>: There is a easy way
        of basic routing.We will learn about it in <a href="07-controller.html" class="path">controller</a>
        chapter. Now just see the structure of resource route.
    </p>
    <pre>
            <code class="javascript">
        use App\Http\Controllers\UserController;

        Route::resource('user', UserController::class);
            </code>
        </pre>

    <p>
        To check all the links of the website run the below command:-
    </p>
    <input type="text" readonly value="php artisan route:list" id="route_list">
    <button value="copy" onclick="copyFunction('route_list')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

    <lottie-player src="https://assets9.lottiefiles.com/private_files/lf30_zmol4jv6.json" background="transparent"
        speed="0.5" loop autoplay></lottie-player>

@endsection
