<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\MaitreOeuvre;
use Illuminate\Http\Request;
use App\Models\MaitreOuvrage;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProjetController extends Controller
{
  public function index()
  {
    $projets = Projet::where('user_id', Auth::user()->id)->get();
    return view('dashboard.projets_list', compact('projets'));
  }

  public function show($id)
  {
    $projet = Projet::find($id);
    session(['projet' => $projet->id]);
    return view('dashboard.administratif', compact('projet'));
  }

  public function delete($id)
  {

    $projets = Projet::where('user_id', Auth::user()->id)->get();
    $projet = Projet::find($id);
    $maitre_ouvrage = MaitreOuvrage::find($projet->maitre_ouvrage_id);
    $maitre_oeuvre = MaitreOeuvre::find($projet->maitre_oeuvre_id);
    $projet->delete();
    $maitre_ouvrage->delete();
    $maitre_oeuvre->delete();
    
    Flashy::success('Le projet a été supprimé avec succès');
    return Redirect::back();
  }

  public function create(Request $request)
  {
    if (Auth::check()){
      $projet = new Projet;
      $projet->pack = $request->pack;
      $projet->name = $request->projet_name;
      $projet->user_id = Auth::user()->id;
      $projet->save();
      $projet->number = 643 . $projet->id;
      $projet->save();
      Flashy::success('Votre projet a bien été créé');
      session(['projet' => $projet->id]);

      return view('dashboard.administratif', compact('projet'));

    }
    Flashy::error('Vous devez être connecté pour créer un projet');
    return Redirect::back();

  }

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
      'date_pc'=> 'required'

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
      'date_pc.required' => 'La date est requise'
  ]);

  if ($validator->fails()) {
    return Redirect::back()->withErrors($validator)->withInput();
  }

    $projet = Projet::find($request->projet_id);
    session(['projet' => $projet->id]);
    $maitre_oeuvre = new MaitreOeuvre;
    $maitre_ouvrage = new MaitreOuvrage;

    $maitre_oeuvre->lastname = $request->lastname_oeuvre;
    $maitre_oeuvre->firstname = $request->firstname_oeuvre;
    $maitre_oeuvre->adresse = $request->adresse_oeuvre;
    $maitre_oeuvre->cp = $request->cp_oeuvre;
    $maitre_oeuvre->ville = $request->town_oeuvre;
    $maitre_oeuvre->type = $request->type_oeuvre;
    $maitre_oeuvre->save();

    $maitre_ouvrage->lastname = $request->lastname_ouvrage;
    $maitre_ouvrage->firstname = $request->firstname_ouvrage;
    $maitre_ouvrage->adresse = $request->adresse_ouvrage;
    $maitre_ouvrage->cp = $request->cp_ouvrage;
    $maitre_ouvrage->ville = $request->town_ouvrage;
    $maitre_ouvrage->contact_name = $request->contact_name;
    $maitre_ouvrage->contact_phone = $request->contact_phone;
    $maitre_ouvrage->save();

    $projet->maitre_oeuvre_id = $maitre_oeuvre->id;
    $projet->maitre_ouvrage_id = $maitre_ouvrage->id;
    $projet->ref_cadastrales = $request->ref_cadastrales;
    $projet->adresse = $request->adresse_construction;
    $projet->cp = $request->cp_construction;
    $projet->ville = $request->town_construction;
    $projet->date_pc = $request->date_pc;
    $projet->different_ouvrage = $request->different_ouvrage;
    $projet->emplacement = $request->emplacement;
    $projet->user_id = Auth::user()->id;
    $projet->administratif_complete = 1;
    $projet->save();


    return view('dashboard.enveloppe');
  }
}
