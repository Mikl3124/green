<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    $pack1 = Pack::find(1);
    $pack2 = Pack::find(2);
    $pack3 = Pack::find(3);

        return view('home', compact('pack1', 'pack2', 'pack3'));
    }

    public function home()
    {

    $pack1 = Pack::find(1);
    $pack2 = Pack::find(2);
    $pack3 = Pack::find(3);

        return view('welcome', compact('pack1', 'pack2', 'pack3'));
    }
  }
