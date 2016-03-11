@extends('layouts.app')
@section('content')
    <h1>edit article n°{{$post->id}}</h1>

    <form action="{{route('articles.update', $post->id)}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">

        <select name="user_id">
            @foreach($users as $user)
                @if($user->id == $post->user_id)

                <option selected="selected" value="{{$user->id}}"> {{$user->name}}</option>

                @else
                    <option value="{{$user->id}}"> {{$user->name}}</option>
                @endif

            @endforeach
        </select>
        <input type="text" name="title" value="{{$post->title}}">
        <br/>
        <textarea name="description" id="" cols="30" rows="10">{{$post->description}}</textarea>
        <br/>
        <input type="submit" class="form-control">
    </form>

@endsection