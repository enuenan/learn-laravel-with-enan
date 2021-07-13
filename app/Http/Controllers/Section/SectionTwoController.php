<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionTwoController extends Controller
{
    public function crud()
    {
        return view('frontend.pages.tutorial.10-crud');
    }
}
