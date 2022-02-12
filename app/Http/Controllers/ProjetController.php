<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Projet;
use App\Models\MaitreOeuvre;
use Illuminate\Http\Request;
use App\Models\MaitreOuvrage;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class ProjetController extends Controller
{
  public function index()
  {
    session()->forget('projet');
    $projets = Projet::where('user_id', Auth::user()->id)->get();
    return view('dashboard.projets_list', compact('projets'));
  }

  public function show($id)
  {
    $projet = Projet::find($id);
    if ($projet->user_id == Auth::user()->id){
      session(['projet' => $projet->id]);
      return view('dashboard.administratif', compact('projet'));
    }

    Flashy::error('Une erreur est survenue');
    return Redirect::back();

  }

  public function delete($id)
  {

    $projet = Projet::find($id);
    if ($projet->user_id == Auth::user()->id){
      $maitre_ouvrage = MaitreOuvrage::find($projet->maitre_ouvrage_id);
    $maitre_oeuvre = MaitreOeuvre::find($projet->maitre_oeuvre_id);
    $projet->delete();
    if ($maitre_ouvrage != null){
      $maitre_ouvrage->delete();
    }
    if ($maitre_oeuvre != null){
      $maitre_oeuvre->delete();
    }
    Flashy::success('Le projet a été supprimé avec succès');
    return Redirect::back();
    }

    Flashy::error('Une erreur est survenue');
    return Redirect::back();

  }

  public function create(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'projet_name' => 'required' ]
      );
    if ($validator->fails()) {
      Flashy::error('Le nom du projet est obligatoire');
      return redirect()->back();
    }

    if (Auth::check()){
      $projet = new Projet;
      $maitre_oeuvre = new MaitreOeuvre;
      $maitre_oeuvre->type = "Constructeur";
      $maitre_oeuvre->save();
      $projet->maitre_oeuvre_id = $maitre_oeuvre->id;
      $projet->pack_id = $request->pack;
      if($projet->progress > 10){
        $projet->progress = $projet->progress;
      }else {
        $projet->progress += 10;
      }

      $projet->name = $request->projet_name;
      $projet->user_id = Auth::user()->id;
      $projet->save();
      $projet->number = 643 . $projet->id;
      $projet->save();
      Flashy::success('Votre projet a bien été créé');
      session(['projet' => $projet->id]);

      return redirect()->route('administratif', compact('projet'));

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
      'adresse_oeuvre' => 'required',
      'cp_oeuvre' => 'required',
      'town_oeuvre' => 'required',
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
      'adresse_oeuvre.required' => "L'adresse est requise",
      'cp_oeuvre.required' => 'Le code postal est requis',
      'town_oeuvre.required' => 'Le nom de la ville est requis',
      'ref_cadastrales.required' => 'Les références cadastrales sont requises',
      'date_pc.required' => 'La date est requise'
  ]);

  if ($validator->fails()) {
    return redirect()->route('administratif')->withErrors($validator)->withInput();
  }

    $projet = Projet::find($request->projet_id);

    if ($projet->user_id == Auth::user()->id){
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
    if($projet->progress > 20){
      $projet->progress = $projet->progress;
    }else {
      $projet->progress += 10;
    }
    $projet->user_id = Auth::user()->id;
    $projet->administratif_complete = 1;
    $projet->save();

    Flashy::success('Les informations ont bien été enregistrées');
    return view('dashboard.enveloppe', compact('projet'));
    }

    Flashy::error('Une erreur est survenue');
    return Redirect::back();

  }

  public function choice_pack($id)
  {
    $projet = Projet::find($id);

    $pack1 = Pack::find(1);
    $pack2 = Pack::find(2);
    $pack3 = Pack::find(3);
    return view('dashboard.change-pack', compact('pack1', 'pack2', 'pack3', 'projet'));
  }

  public function change_pack(Request $request)
  {
    $projet = Projet::find($request->projet_id);
    if ($projet->user_id == Auth::user()->id){
      $pack = Pack::find($request->pack_id);
      $projet->pack_id = $pack->id;
      $projet->save();

      Flashy::success('Le pack a bien été modifié');
      return redirect()->route('projet.show', $projet->id);
    }
    Flashy::error('Une erreur est survenue');
    return Redirect::back();

  }

  public function rename(Request $request)
  {
    $projet = Projet::find($request->projet_id);

    if ($projet->user_id == Auth::user()->id){
      $projet->name = $request->projet_name;
      $projet->save();

      Flashy::success('Le nom de votre projet a bien été modifié');
      return redirect()->route('projet.show', $projet->id);
    }
    Flashy::error('Une erreur est survenue');
    return Redirect::back();
  }

}
