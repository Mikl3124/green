<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use App\Mail\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProspectController extends Controller
{
  public function create(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'projet' => 'required',
      'categorie' => 'required',
      'surface' => 'required',
      'email' => 'required',
      'telephone' => 'required',
  ]);

  if ($validator->fails())
  {
    return Redirect::back()->withErrors($validator)->withInput();
  }

    $prospect = new Prospect;
    $prospect->projet = $request->projet;
    $prospect->categorie = $request->categorie;
    $prospect->surface = $request->surface;
    $prospect->email = $request->email;
    $prospect->telephone = $request->telephone;
    $prospect->nom = "inconnu";
    $prospect->prenom = "inconnu";

    if($prospect->save()){
      Mail::to(env('MAIL_ADMIN'))
        ->send(new QuoteRequest($prospect));
    }

  }
}
