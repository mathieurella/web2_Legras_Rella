@extends('layouts.app')
@section('content')
    <h1>formulaire</h1>

  {!! Form::open(['url' => route('articles.store'), 'method' => 'POST']) !!}
        {{csrf_field()}}
{!! Form::select('user_id', $users) !!}
       {!! Form::text('title') !!}

        <br/>
    {{Form::textarea('description')}}

        <br/>
    {!! Form::submit('envoyer') !!}


{!! Form::close() !!}
   @if($errors)
       <ul>
           @foreach($errors->all() as $errors)
               <li>{{$errors}}</li>
           @endforeach

       </ul>
@endif

@endsection