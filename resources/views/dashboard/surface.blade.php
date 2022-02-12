@extends('dashboard.layouts.app')

@section('content')

    <div class="section-title-dashboard mb-3 bg-light py-3">
        <h2>Saisie des Surfaces</h2>
        <p>{{$projet->name}} (Projet: {{ $projet->number }})</p>
        @include('dashboard.layouts.progress')
    </div>
    <div class="container">
      <h5 class="my-4">Quel est le type de construction?</h5>
      <form action="{{ route('surface.store') }}" method="post">
        @csrf
        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
        <div class="d-flex">
          <div class="mx-3">
            <input class="form-check-input" type="radio"  name="type" value="Construction" onclick="show1();" checked required/>
            Nouvelle Construction
          </div>
          <div class="mx-3">
            <input class="form-check-input" type="radio"  name="type" value="Extension" onclick="show2();" required/>
            Extension
          </div>
        </div>
        <div class="form-group mt-4 div1">
          <label for="basic-url">Surface S.RT construction</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">m<span><sup>2</sup></span></span>
            </div>
            <input type="number"  name="surface_rt" class="form-control @error('surface_rt') is-invalid @enderror"  value="{{ old('surface_rt', $projet->surface->surface_srt ?? '')  }}" required>
            @error('surface_rt')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <label for="basic-url">Surface habitable de la construction</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">m<span><sup>2</sup></span></span>
          </div>
          <input type="number"  name="surface_hab" class="form-control @error('surface_hab') is-invalid @enderror"  value="{{ old('surface_hab', $projet->surface->surface_hab ?? '')  }}" required>
          @error('surface_hab')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group div2">
          <label for="basic-url">Surface S.RT de l'existant </label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">m<span><sup>2</sup></span></span>
            </div>
            <input type="number" class="form-control" name="surf_extistant">
          </div>
        </div>


        <div class="text-center my-3">
          <a class="btn btn-sm btn-secondary"  href="{{ url()->previous() }}"><i class="fas fa-arrow-left"></i> Retour</a>
          <button class="btn btn-success" type="submit">Valider et continuer <i class="fas fa-arrow-right"></i></button>
        </div>
      </form>
    </div>


    <script>
      function show1(){
        x = document.getElementsByClassName('div2');
        x[0].style.display ='none';
      }
      function show2(){
        x = document.getElementsByClassName('div2')
        x[0].style.display ='block';
      }
    </script>

@endsection


