@extends('layouts.app')

@section('content')
@include('layouts.header')

<div class="container">
    <!-- Page Heading -->
  <h1 class="my-4">Le Blog</h1>
  @foreach($articles as $article)
    <div class="row">
      <div class="col-md-3">
        <img class="img-thumbnail mb-3 mb-md-0" src="https://iziplans.s3.eu-west-3.amazonaws.com/documents/{{ $article->filename }}" alt="{{ $article->title }}">
      </div>
      <div class="col-md-9">
        <h3>{{$article->title}}</h3>
        <p>{{ $article->intro_text}}</p>
        <a class="btn btn-primary" href="{{ route('article.show', Str::slug($article->url)) }}">Voir l'article</a>
      </div>
    </div>
      <hr>
  @endforeach

  {{ $articles->links() }}
</div>


@endsection
