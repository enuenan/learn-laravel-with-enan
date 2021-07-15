<?php

namespace App\Http\Controllers;

use App\Models\User\UserIp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        DB::table('user_ips')
            ->updateOrInsert(
                ['visitor' => $request->ip],
                ['visitor' => $request->ip]
            );
        return view('frontend.pages.tutorial.home');
    }

    public function ip(Request $request)
    {
        $userIps = UserIp::all();
        dd($userIps);
        return view('frontend.pages.tutorial.home');
    }
}
