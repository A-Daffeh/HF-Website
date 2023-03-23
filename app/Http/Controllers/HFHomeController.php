<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HFHomeController extends Controller
{
    public function index() {
        return view('web.hfhome');
    }
}
