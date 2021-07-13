@extends('frontend.layouts.default',[
'title'=>'Model',
'currentClass'=>'model',
'keywords'=>'Model',
'description'=>'Model',
])

@section('content')
    <h3>Database</h3>
    <p>1. Create Database </p>
    <span style="color: red;font-weight: bold;">N.B:</span> Select utf8_unicode_ci

    <p>2. paste the database name in <span class="path">.env</span>file</p>
    <pre>
        <code class="javascript">
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_course //Your database name should be placed here
    DB_USERNAME=root //Username
    DB_PASSWORD= //Password if any
        </code>
    </pre>

    <h3>Laravel Model</h3>
    <p>1. To create model classes with migration</p>
    <input type="text" readonly value="php artisan make:model [ModelName] -m" id="createModelWithMigration">
    <button value="copy" onclick="copyFunction('createModelWithMigration')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <p>These are some example of how you can make model classes</p>
    <pre>
        <code class="javascript">
    // Generate a model and a FlightFactory class...
    php artisan make:model Flight -f

    // Generate a model and a FlightSeeder class...
    php artisan make:model Flight -s

    // Generate a model and a FlightController class...
    php artisan make:model Flight -c

    // Generate a model and a migration, factory, seeder, and controller...
    php artisan make:model Flight -mfsc

    // Shortcut to generate a model, migration, factory, seeder, and controller...
    php artisan make:model Flight --all
        </code>
    </pre>

    <p>
        2. Got to migration file. You can find it <code class="path"> database\migrations</code>
    </p>
    <pre>
        <code class="javascript">
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //this will create a name column in database which store string.
            $table->string('email')->unique(); //this will create a email column in database which is unique.
            $table->timestamp('email_verified_at')->nullable(); //this will create a email column in database which store Date and time.
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
        </code>
    </pre>

    <p>
        3. Lets make a new model class and migration
    </p>
    <input type="text" readonly value="php artisan make:model UserDetails -m" id="creatUserDetailsModel">
    <button value="copy" onclick="copyFunction('creatUserDetailsModel')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>
    <pre>
        <code class="javascript">
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            //This will create a relationship with users table. user_id is the foreign key and id of users table is primary key.
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('image')->nullable();
            $table->string('gender');
            $table->bigInteger('contact');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }
        </code>
    </pre>

    <p>
        4. Run the command bellow to migrate the migration files.
    </p>
    <input type="text" readonly value="php artisan migrate" id="migrate">
    <button value="copy" onclick="copyFunction('migrate')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_wqypnpu5.json" background="transparent"
        speed="0.5" loop autoplay>
    </lottie-player>
@endsection
