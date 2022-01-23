@extends('dashboard.layouts.app')

@section('content')

    <div class="section-title-dashboard mb-3 bg-light py-3">
        <h2>Enveloppe</h2>
    </div>

    {{-- **********  Surfaces  ********** --}}
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h3>Surfaces</h3>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#surfaces" role="button" aria-expanded="false" aria-controls="collapseExample">
            Saisir
          </a>
        </div>
      </div>
    </div>

    {{-- **********  Enveloppe  ********** --}}
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h3>Enveloppe</h3>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#surfaces" role="button" aria-expanded="false" aria-controls="collapseExample">
            Saisir
          </a>
        </div>
      </div>
    </div>

    {{-- **********  Ventilation  ********** --}}
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h3>Ventilation</h3>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#surfaces" role="button" aria-expanded="false" aria-controls="collapseExample">
            Saisir
          </a>
        </div>
      </div>
    </div>

    {{-- **********  Menuiseries  ********** --}}
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h3>Menuiseries</h3>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#surfaces" role="button" aria-expanded="false" aria-controls="collapseExample">
            Saisir
          </a>
        </div>
      </div>
    </div>

    {{-- **********  Confort d'été  ********** --}}
    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h3>Confort d'été</h3>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#surfaces" role="button" aria-expanded="false" aria-controls="collapseExample">
            Saisir
          </a>
        </div>
      </div>
    </div>

@endsection
