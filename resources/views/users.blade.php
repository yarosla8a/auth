@extends('layouts.app')
@section('top-bar')
    @parent
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Добро пожалывать, {{$name}}</h1>
            <p class="lead my-3"> Здесь ты сможешь опубликовывать свои статьи</p>
        </div>
    </div>
@endsection
@section ('content')

@endsection
