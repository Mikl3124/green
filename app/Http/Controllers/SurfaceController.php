<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Surface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SurfaceController extends Controller
{
  public function create($id)
  {
    $projet = Projet::find($id);

    if ($projet->user_id == Auth::user()->id){
      session(['projet' => $projet->id]);

      return view('dashboard.surface', compact('projet'));
    }
  }

  public function store(Request $request)
  {
    $projet = Projet::find($request->projet_id);

    if ($projet->user_id == Auth::user()->id){
      session(['projet' => $projet->id]);

      $validator = Validator::make($request->all(), [
        'type' => 'required',
        'surface_rt' => 'required | integer',
        'surface_hab' => 'required | integer'
    ],
    [
      'surface_rt.required' => 'La surface RT est requise',
      'surface_rt.integer' => 'Un nombre est attendu',
      'surface_hab.required' => 'La surface habitable est requise',
      'surface_hab.integer' => 'Un nombre est attendu'
    ]);

    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput();
    }

    $surface = new Surface;
    $surface->surface_srt = $request->surface_rt;
    $surface->surface_habitable = $request->surface_hab;
    $surface->surface_existant = $request->surface_existant;
    if ($surface->save()){
      $surface->complete = 1;
      $projet->surface_id = $surface->id;
      $projet->save();
      dd($projet, $surface);
    }

    dd($surface);
      return view('dashboard.surface', compact('projet'));
    }
  }
}
