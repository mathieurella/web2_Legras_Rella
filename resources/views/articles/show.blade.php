@extends('layouts.app')
@section('content')
    <h1>Article n° {{$article->id}}  <a href="{{route('articles.edit', $article->id)}}">editer</a></h1>
    <h2> {{ $article->title }}</h2>
    <h3>Auteur: {{$article->user->name}}</h3>
    <p> {{ $article->description }}</p>


@endsection