<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
  public function index()
  {
    return view('dashboard.home');
  }

  public function administratif(Request $request)
  {
    if (session()->has('projet')) {
      $projet = Projet::find(Session::get('projet'));
      return view('dashboard.administratif', compact('projet'));
    }
    Flashy::error('Une erreur est survenue');
    return Redirect::back();
  }

  public function enveloppe()
  {
    return view('dashboard.enveloppe');
  }

  public function pricing()
  {
    return view('dashboard.pricing');
  }

}
