@extends('frontend.layouts.default',[
'title'=>'Middleware',
'currentClass'=>'middleware',
'keywords'=>'Laravel Middleware',
'description'=>'Laravel Middleware',
])

@section('content')
    <h3>Middleware</h3>
    <p>Simply laravel middleware filter all the HTTP requests in laravel based on projects. For example when the
        user is doing any request that time middleware check user is logged in or not and redirect accordingly.
        Any user is not logged in but he wants to access the dashboard or other things in projects that time
        middleware filter requests redirect to the user.</p>

    <p><b style="text-decoration: underline;">1. Create Middleware: </b>Open gitbash and execute the following
        command to create custom middleware</p>
    <input type="text" readonly value="php artisan make:middleware CheckStatus" id="createMiddleware">
    <button value="copy" onclick="copyFunction('createMiddleware')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <p>After successfully create middleware, go to <span class="path">app/http/kernel.php</span> and register
        your custom middleware here :</p>
    <pre>
        <code class="javascript">
    protected $routeMiddleware = [
        ....
        'checkStatus' => \App\Http\Middleware\CheckStatus::class,
    ];
        </code>
    </pre>

    <p> <b style="text-decoration: underline;">2. Implement Logic In Middleware: </b> After successfully
        register your middleware in laravel project, go to <span>app/http/middleware </span> and implement your
        logic here :</p>

    <pre>app/Http/Middleware/CheckStatus.php
        <code class="javascript">
    public function handle($request, Closure $next)
    {
        if (auth()->user()->status == 'active') {
            return $next($request);
        }
        return response()->json('Your account is inactive');

    }
        </code>
    </pre>

    <p><b style="text-decoration: underline;">3. Create Route: </b>we will create a route and use custom
        middleware here. Filter http every request and protect routes :</p>
    <pre>
        <code>
    use App\Http\Controllers\HomeController;

    Route::middleware([CheckStatus::class])->group(function(){

        Route::get('home', [HomeController::class,'home']);

    });

    Route::get('home', [HomeController::class,'home'])->middleware('checkStatus');

    // Multiple Middleware Use
    use App\Http\Middleware\CheckAge;

    Route::middleware([CheckStatus::class,CheckAge::class])->group(function(){
        Route::get('home', [HomeController::class,'home']);
    });

    Route::group(['middleware' => ['checkStatus','other_middleware']], function (){
        Route::get('home', [HomeController::class,'home']);
    });

    Route::middleware(['checkStatus', 'other_middleware'])->group(function () {
        Route::get('home', [HomeController::class,'home']);
    });
    
    Route::get('home', [HomeController::class,'home'])->middleware(['checkStatus', 'other_middleware'])
        </code>
    </pre>

    <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_5iy2fmls.json" background="transparent" speed="1"
        loop autoplay></lottie-player>

@endsection
