<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionOneController extends Controller
{
    public function installation()
    {
        return view('frontend.pages.tutorial.01-installation');
    }

    public function installationFromGit()
    {
        return view('frontend.pages.tutorial.02-installation-from-git');
    }

    public function model()
    {
        return view('frontend.pages.tutorial.03-model');
    }

    public function routesAndViews()
    {
        return view('frontend.pages.tutorial.04-routes-and-views');
    }

    public function route()
    {
        return view('frontend.pages.tutorial.05-route');
    }

    public function views()
    {
        return view('frontend.pages.tutorial.06-view');
    }

    public function controller()
    {
        return view('frontend.pages.tutorial.07-controller');
    }

    public function layout()
    {
        return view('frontend.pages.tutorial.08-layout');
    }

    public function middlewaref()
    {
        return view('frontend.pages.tutorial.09-middleware');
    }
}
