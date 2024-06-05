<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('hello');
    }

}
