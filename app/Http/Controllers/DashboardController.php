<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->authorize('create-articles');
        // $this->middleware('permission:create-articles')->only('index'); //No middleware podemos utilizar o only
    }

    public function index()
    {
        $this->authorize('edit-articles');

        return view('dashboard');
    }
}
