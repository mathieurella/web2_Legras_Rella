

        @extends('layouts.app')
@section('content')
    <h1>Articles</h1>
    @foreach($posts as $post)
        <h2> {{ $post->title }}</h2>
        <p> {{ $post->description }}</p>

    <a href="{{route('articles.show', $post->id)}}">
        <button>
            voir l'article
        </button>
    </a>
        <form action="{{route('articles.destroy', $post->id)}}" method="POST">
              {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
            <input type="submit">
        </form>

    @endforeach
@endsection
