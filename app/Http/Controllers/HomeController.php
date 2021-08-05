<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.tutorial.home');
    }

    public function gitPush()
    {
        return view('frontend.pages.tutorial.git_push');
    }

    public function heroku()
    {
        return view('frontend.pages.tutorial.heroku');
    }

    public function contactform()
    {
        return view('frontend.pages.contact.contact');
    }

    public function formData(Request $request)
    {
        $id = Cache::get('id');
        if (empty($id)) {
            Cache::put('id', 0);
        }
        $id++;
        $data = [
            [
                'id' => $id,
                'name' => $request->name,
                'email' => $request->email,
                'comment' => $request->comment
            ],
        ];
        Cache::store('redis')->put('data', $data);
        $data = Cache::get('data');
        dd($id, $data);

        dd($request);

        return view('frontend.pages.contact.contact');
    }
}
