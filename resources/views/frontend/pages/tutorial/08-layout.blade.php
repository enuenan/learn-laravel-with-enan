@extends('frontend.layouts.default',[
'title'=>'Layout',
'currentClass'=>'layout',
'keywords'=>'Laravel Layout',
'description'=>'Laravel Layout',
])

@section('content')
    <h2>Layout</h2>
    <p>
        Layouts are often the starting point of many web development projects. Laravel Blade template engine
        enables the developer to produce HTML based sleek designs and themes. <br>

        All views in Laravel are usually built in the blade template. Blade engine is fast in rendering views
        because it caches the view until they are modified. All the files in resources/views have the extension
        .blade.php. <br>

        Laravel blade template is pretty impressive in performance. This tutorial will serve as an introduction
        to this templating engine.
    </p>

    <pre>
        <code class="javascript">
    - resources

    -- views

    --- layouts

    ------- default.blade.php

    --- pages

    ------- home.blade.php

    ------- contact.blade.php

    --- includes

    ------- head.blade.php

    ------- header.blade.php

    ------- footer.blade.php
        </code>
    </pre>

    <h2>Create Includes</h2>
    <p>Create the following includes, with the following code:</p>
    <pre><span class="path">head.blade.php</span>
        <code class="javascript">
    &lt;meta charset="utf-8"&gt;

    &lt;meta name="description" content=""&gt;

    &lt;meta name="Saquib" content="Blade"&gt;

    &lt;title&gt;Checkout our layout&lt;/title&gt;

    &lt;!-- load bootstrap from a cdn --&gt;

    &lt;link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css"&gt;
        </code>
    </pre>

    <pre><span class="path">Header.blade.php</span>
        <code class="javascript">
    &lt;div class="navbar"&gt;

        &lt;div class="navbar-inner"&gt;

            &lt;a id="logo" href="/"&gt;Single Malt&lt;/a&gt;

            &lt;ul class="nav"&gt;

                &lt;li&gt;&lt;a href="/"&gt;Home&lt;/a&gt;&lt;/li&gt;

                &lt;li&gt;&lt;a href="/contact"&gt;Contact&lt;/a&gt;&lt;/li&gt;

            &lt;/ul&gt;

        &lt;/div&gt;

    &lt;/div&gt;
        </code>
    </pre>

    <pre><span class="path">footer.blade.php</span>
        <code class="javascript">
    &lt;div id="copyright text-right"&gt;© Copyright 2017 Saquib Rizwan &lt;/div&gt;
        </code>
    </pre>

    <h2>Create the Layout</h2>
    <p>I will use &#64;include to bring in tiny parts of the code that I have created in includes folders, and
        &#64;yield to bring in content from the individual pages I will be using.</p>
    <pre><span class="path">default.blade.php</span>
        <code class="javascript">
    &lt;!doctype html&gt;

    &lt;html&gt;

        &lt;head&gt;

            &#64;include('includes.head')

        &lt;/head&gt;

        &lt;body&gt;

            &lt;div class="container"&gt;

                &lt;header class="row"&gt;

                    &#64;include('includes.header')

                &lt;/header&gt;

                &lt;div id="main" class="row"&gt;

                    &#64;yield('content')

                &lt;/div&gt;

                &lt;footer class="row"&gt;

                    &#64;include('includes.footer')

                &lt;/footer&gt;

            &lt;/div&gt;

        &lt;/body&gt;

    &lt;/html&gt;
        </code>
    </pre>

    <p>Blade allows the use of the layout that I just created by using &#64;extends. By creating &#64;section, I will
    create a section that will be used in the layout. Here I will use &#64;section(‘content’) and in the layout,
        everything that I will type here will be injected in &#64;yield in the layout.</p>
    <p>Go to resources/views/pages and put the following code in these files.</p>
    <pre><span class="path">pages/home.blade.php</span>
        <code class="javascript">
    &#64;extends('layouts.default')

    &#64;section('content')

        i am the home page

    &#64;endsection
        </code>
    </pre>

    <pre><span class="path">pages/home.blade.php</span>
        <code class="javascript">
    &#64;extends('layouts.default')

    &#64;section('content')

        i am the contact page

    &#64;endsection
        </code>
    </pre>

<video loading="lazy" playsinline="" autoplay="autoplay" muted="muted" loop="loop" class="videoLottie"
    poster="https://assets1.lottiefiles.com/render/km27jq3z.png" class="w-full rounded-t-lg" __idm_id__="121224193">
    <source type="video/mp4" src="https://assets6.lottiefiles.com/render/km27jq3z.mp4">
</video>

@endsection
