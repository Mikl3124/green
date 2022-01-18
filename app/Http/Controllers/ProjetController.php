<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjetController extends Controller
{

  public function createAdministratif(Request $request)
  {

    $validator = Validator::make($request->all(), [
      'lastname_ouvrage' => 'required',
      'firstname_ouvrage' => 'required',
      'adresse_ouvrage' => 'required',
      'cp_ouvrage' => 'required|integer',
      'town_ouvrage' => 'required',
      'adresse_construction' => 'required',
      'cp_construction' => 'required|integer',
      'town_construction' => 'required',
      'ref_cadastrales' => 'required',

  ],
  [
      'lastname_ouvrage.required' => 'Le nom est requis',
      'firstname_ouvrage.required' => 'Le prénom est requis',
      'adresse_ouvrage.required' => "L'adresse est requise",
      'cp_ouvrage.required' => 'Le code postal est requis',
      'cp_ouvrage.integer' => 'Le code postal doit être un nombre',
      'town_ouvrage.required' => 'Le nom de la ville est requis',
      'adresse_construction.required' => "L'adresse est requise",
      'cp_construction.required' => 'Le code postal est requis',
      'cp_construction.integer' => 'Le code postal doit être un nombre',
      'town_construction.required' => 'Le nom de la ville est requis',
      'ref_cadastrales.required' => 'Les références cadastrales sont requises',
  ]);

  if ($validator->fails()) {
    return back()->withErrors($validator)->withInput();
  }

    return view('dashboard.enveloppe');
  }
}
