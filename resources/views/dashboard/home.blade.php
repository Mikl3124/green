@extends('dashboard.layouts.app_home')

@section('content')

    <div class="section-title-dashboard mb-3 bg-light py-3">
        <h2>Votre espace client</h2>
    </div>
    <a href=" {{route('pricing') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Ajouter un projet</a>

@endsection
