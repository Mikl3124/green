@extends('dashboard.layouts.app_home')

@section('content')

    <div class="section-title-dashboard mb-3 bg-light py-3">
        <h2>Liste des projets</h2>
    </div>

    @foreach ($projets as $projet)
      <form action="{{ route('projet.show') }}" method="post">
        @csrf
        <input type="hidden" name="projet_id" value="{{ $projet->id }}">
        <button class="btn btn-primary mb-2" type="submit">{{ $projet->name }} {{ $projet->maitre_oeuvre->firstname }}</button>
      </form>
    @endforeach

@endsection
