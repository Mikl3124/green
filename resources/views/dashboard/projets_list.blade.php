@extends('dashboard.layouts.app_home')

@section('content')

    <div class="section-title-dashboard mb-3 bg-light py-3">
        <h2>Liste des projets</h2>
    </div>

    @foreach ($projets as $projet)
    <ul>   
        <div class="d-flex">
        <a class="btn btn-primary mb-2 mx-1" href="{{ route('projet.show',$projet->id) }}">{{ $projet->name }}</a>
            <form method="POST" action="{{ route('projet.delete',$projet->id) }}">
                @csrf
                <button class="btn btn-danger mb-2 mx-1" type="submit">Effacer le projet</button> 
            </form>
        </div>

    </ul>
      
    @endforeach

@endsection
