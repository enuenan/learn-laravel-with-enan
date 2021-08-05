@extends('frontend.layouts.default',[
'title'=>'Controller',
'currentClass'=>'controller',
'keywords'=>'Laravel controller',
'description'=>'Laravel controller',
])

@section('content')
    <h2>Controllers</h2>
    <p>Controllers are another essential feature provided by Laravel. In place of defining the handling request
        logic in the form of Closures in route files, it is possible to organize this process with the help of
        Controller classes. So what the controllers do? Controllers are meant to group associated request
        handling logic within a single class. In your Laravel project, they are stored in the
        <span class="path">app/Http/Controllers</span> directory. The full form of MVC is Model View Controller,
        which act as directing traffic among the Views and the Models.
    </p>

    <p>Open gitbash in project directory and run the following command</p>
    <input type="text" readonly value="php artisan make:controller [controller_name]" id="create_controller">
    <button value="copy" onclick="copyFunction('create_controller', 'create_controllerButton')" id="create_controllerButton" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>
    <p>The created controller can be seen at <span class="path">app/Http/Controllers</span></p>
    <p>Now you can use route like this.</p>
    <pre>
        <code class="javascript">
    use App\Http\Controllers\HomeController;
    
    Route::get('/', [HomeController::class, 'index'])
        </code>
    </pre>

    <p>And in the controller file write function: </p>
    <pre>
        <code class="javascript">
    public function index() {
        return view('Welcome');
    }
        </code>
    </pre>

    <h2>Resource Controller</h2>
    <p>You can create a resourse controller by a coomand.</p>
    <input type="text" readonly value="php artisan make:controller [controller_name] -r" id="create_resource_controller">
    <button value="copy" onclick="copyFunction('create_resource_controller', 'create_resource_controllerButton')" id="create_resource_controllerButton" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>
    <p>The created controller can be seen at <span class="path">app/Http/Controllers</span></p>

    <p>In <a href="05-route.html" class="path">Route</a> chapter you learnt how a resource route loke like.</p>
    <pre>
        <code class="javascript">
    use App\Http\Controllers\UserController;

    Route::resource('user', UserController::class);
        </code>
    </pre>
    <p>You may even register many resource controllers at once by passing an array to the resources method:</p>
    <pre>
        <code class="javascript">
    use App\Http\Controllers\PhotoController;
    use App\Http\Controllers\PostController;

    Route::resources([
        'photos' => PhotoController::class,
        'posts' => PostController::class,
    ]);
        </code>
    </pre>
    <p>When declaring a resource route, you may specify a subset of actions the controller should handle instead
        of the full set of default actions:</p>
    <pre>
        <code class="javascript">
    use App\Http\Controllers\PhotoController;

    Route::resource('photos', PhotoController::class)->only([
        'index', 'show'
    ]);

    Route::resource('photos', PhotoController::class)->except([
        'create', 'store', 'update', 'destroy'
    ]);
        </code>
    </pre>

    <video playsinline="" autoplay="autoplay" muted="muted" loop="loop" class="videoLottie"
        poster="https://assets10.lottiefiles.com/render/kf40khgh.png">
        <source type="video/mp4" src="https://assets5.lottiefiles.com/render/kf40khgh.mp4">
    </video>

@endsection
