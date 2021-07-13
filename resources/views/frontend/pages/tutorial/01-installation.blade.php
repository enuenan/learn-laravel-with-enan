@extends('frontend.layouts.default',[
'title'=>'Installation',
'currentClass'=>'installation',
'keywords'=>'Laravel installation',
'description'=>'Learn laravel',
])

@section('content')
    <!-- <img src="https://cdn3.iconfinder.com/data/icons/modern-technologies/32/Hardware_monitor_computer_install_software-128.png"
                            srcset="https://cdn3.iconfinder.com/data/icons/modern-technologies/32/Hardware_monitor_computer_install_software-256.png 1x, https://cdn3.iconfinder.com/data/icons/modern-technologies/32/Hardware_monitor_computer_install_software-512.png 2x"
                            alt="Computer, install, monitor, software" width="50" height="50" class=" lazyloaded"
                            data-srcset="https://cdn3.iconfinder.com/data/icons/modern-technologies/32/Hardware_monitor_computer_install_software-256.png 1x, https://cdn3.iconfinder.com/data/icons/modern-technologies/32/Hardware_monitor_computer_install_software-512.png 2x"> -->
    <!-- <h2 style="text-align: center;">Day: <span id="day"></span></h2> -->
    <h3>Essential Environments Setup</h3>
    <!-- <video playsinline="" autoplay="autoplay" muted="muted" loop="loop"
                            poster="https://assets7.lottiefiles.com/render/k9o2hroh.png" style="width: 300px" class="w-full
                            rounded-t-lg" __idm_id__="289670146">
                            <source type="video/mp4" src="https://assets2.lottiefiles.com/render/k9o2hroh.mp4">
                        </video> -->
    <!-- <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_bb4Swi.json" background="transparent"
                            speed="1" style="width: 300px; height: 300px;margin: auto;" loop autoplay></lottie-player> -->

    <p>1. XAMPP install</p>
    <input type="text" readonly value="https://www.apachefriends.org/download.html " name="" id="xampp">
    <button value="copy" onclick="copyFunction('xampp')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <p>2. Composer install</p>
    <input type="text" readonly value="https://getcomposer.org/Composer-Setup.exe" name="" id="composer">
    <button value="copy" onclick="copyFunction('composer')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <p>3. Git Bash install</p>
    <input type="text" readonly value="https://git-scm.com/downloads" name="" id="gitbash">
    <button value="copy" onclick="copyFunction('gitbash')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <p>4. Git Bash installation Process</p>
    <input type="text" readonly value="https://www.stanleyulili.com/git/how-to-install-git-bash-on-windows/" name=""
        id="gitbash_install">
    <button value="copy" onclick="copyFunction('gitbash_install')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <p>5. Get code editor (I prefer vs code)</p>
    <input type="text" readonly value="https://code.visualstudio.com/download" name="" id="editor_download">
    <button value="copy" onclick="copyFunction('editor_download')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <h3>Laravel Installation Process</h3>
    <p>1. Laravel installation</p>
    <p>There is two process. Open gitbash and run the bellow command.</p>
    <pre> Installation Via Composer
        <code class="javascript">
    composer create-project laravel/laravel example-app

    cd example-app

    php artisan serve
        </code>
    </pre>
    <pre> The Laravel Installer
        <code class="javascript">
    composer global require laravel/installer

    laravel new example-app

    cd example-app
        </code>
    </pre>

    <p>2. Run the server</p>
    <input type="text" readonly value="php artisan serve" name="" id="server">
    <button value="copy" onclick="copyFunction('server')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <p>
        3. There you go copy the link and paste it on your browser. Your project is ready.
    </p>
    <input type="text" readonly value="http://localhost:8000/" name="" id="browser">
    <button value="copy" onclick="copyFunction('browser')" type="button" class="btn btn-block btn-info">
        <i class="fas fa-copy"></i> Copy
    </button>

    <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_hlzxxlfs.json" background="transparent"
        speed="0.5" loop autoplay>
    </lottie-player>
@endsection
