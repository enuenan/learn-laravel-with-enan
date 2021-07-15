@extends('frontend.layouts.default',[
'title'=>'Crud',
'currentClass'=>'crud',
'keywords'=>'Laravel Crud',
'description'=>'Laravel Crud',
])

@section('content')
    <h3>CRUD</h3>
    <p>CRUD is an acronym for <u class="underline">Create</u>, <u class="underline">Read</u>,
        <u class="underline">Update</u> and <u class="underline">Delete</u>. CRUD operations are basic data
        manipulation for database.
    </p>
    <h4 style="text-decoration: none; text-align: center;">We will create a CRUD application by following the installations
        below:</h4>
    <p>
        <span style="font-weight: bold;">1. Install Laravel 8: </span> <br> First of all we need to get fresh Laravel 8
        version application using bellow command, So open your terminal OR command prompt and run bellow command:
    </p>
    <input type="text" readonly value="laravel new CRUD" name="" id="crud">
    <button value="copy" onclick="copyFunction('crud')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

    <p>
        <span style="font-weight: bold;">2. Database Configuration: </span> <br>In second step, we will make database
        configuration for example database name, username, password etc for our crud application of laravel 8. So let's open
        <span class="path">.env</span> file and fill all details like as bellow:
    </p>
    <pre> .env
        <code class="javascript">
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=here your database name(blog)
    DB_USERNAME=here database username(root)
    DB_PASSWORD=here database password(root)
        </code>
    </pre>

    <p>
        <span style="font-weight: bold;">3. Create Model and Migration file: </span> <br>We are going to create crud
        application for product. So we have to create migration file for "products" table using Laravel 8 php artisan
        command, so first run bellow command:
    </p>
    <input type="text" readonly value="php artisan make:model Product -m" name="" id="model">
    <button value="copy" onclick="copyFunction('model')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

    <pre>
        <code>
    &#60;?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateProductsTable extends Migration
    {
        /**
        * Run the migrations.
        *
        * @return void
        */
        public function up()
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255)->nullable();
                $table->string('description', 500)->nullable();
                $table->decimal('price', 22)->nullable()->default(0.00);
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->nullable();
            });
        }

        /**
        * Reverse the migrations.
        *
        * @return void
        */
        public function down()
        {
            Schema::dropIfExists('products');
        }
    }
        </code>
    </pre>

    <p>
        Ater this we have to run below command to migrate
    </p>
    <input type="text" readonly value="php artisan migrate" name="" id="migrate">
    <button value="copy" onclick="copyFunction('migrate')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

    <p>
        <span style="font-weight: bold;">4. Create Resource Route: </span> <br>In this step, now we should create new
        controller as ProductController. So run bellow command and create new controller. bellow controller for create
        resource controller.After bellow command you will find new file in this path
        <span class="path"> app/Http/Controllers/ProductController.php </span>
        In this controller will create seven methods by default as bellow methods: <br>
    </p>
    <p>1)index()</p>
    <p>2)create()</p>
    <p>3)store()</p>
    <p>4)show()</p>
    <p>5)edit()</p>
    <p>6)update()</p>
    <p>7)destroy()</p>

    <input type="text" readonly value="php artisan make:controller ProductController -r" name="" id="resource">
    <button value="copy" onclick="copyFunction('resource')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> &nbsp; Copy
    </button>

    <p>
        <span style="font-weight: bold;">5. Add Resource Route: </span> <br> Here, we need to add resource route for product
        crud application. so open your <span class="path">routes/web.php</span> file and add following route.
    </p>

    <pre>routes/web.php
        <code class="javascript">
    use App\Http\Controllers\ProductController;

    Route::resource('products', ProductController::class);
        </code>
    </pre>

    <img src="{{ asset('public/img/6322773582938112.jpg') }}" alt="" class="image"
        style="width: 75%;height: 50%;margin-top: 40px;">
@endsection
