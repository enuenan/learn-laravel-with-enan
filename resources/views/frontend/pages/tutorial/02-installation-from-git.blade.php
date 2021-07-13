@extends('frontend.layouts.default',[
'title'=>'Installation from git',
'currentClass'=>'git',
'keywords'=>'Laravel installation from git',
'description'=>'Laravel installation from git',
])

@section('content')
    <h3>Installation From Git</h3>
    <!-- <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_S6vWEd.json" background="transparent"
                        speed="1" style="width: 400px; height: 400px;margin: auto;" loop autoplay></lottie-player> -->

    <p>
        1. Copy link from github
    </p>

    <p>
        2. Open gitbash
    </p>

    <p>
        3. Clone the Project in local folder.
    </p>
    <pre>
        <code class="javascript">
git clone [paste_the_link_copied_from_github]
        </code>
    </pre>

    <p style="font-weight: bold;">
        4. Go to project directory
    </p>

    <p style="font-weight: bold;">
        5. Open gitbash
    </p>
    <pre>
        <code class="javascript">
composer install
        </code>
    </pre>

    <p style="font-weight: bold;">
        6. .env file missing
    </p>
    <pre>
        <code class="javascript">
cp .env.example .env
        </code>
    </pre>

    <p style="font-weight: bold;">
        6. To generate a key
    </p>
    <pre>
        <code class="javascript">
php artisan key:generate
        </code>
    </pre>

    <p style="font-weight: bold;">
        7. Run the server
    </p>
    <input type="text" readonly value="php artisan serve" name="" id="server">
    <button value="copy" onclick="copyFunction('server')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <p style="font-weight: bold;">
        8. There you go copy the link and paste it on your browser. Your project is ready.
    </p>
    <input type="text" readonly value="http://localhost:8000/" name="" id="browser">
    <button value="copy" onclick="copyFunction('browser')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_f28ex302.json" background="transparent" speed="0.5"
        loop autoplay>
    </lottie-player>
@endsection
