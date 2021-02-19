@extends('layouts.app')

@section('content')
    <form class="needs-validation" novalidate=""method="POST" action=" {{route('update',$id)}}">
        @csrf
        <div class="mb-3">

            <input type="hidden"  name="id"  value="{{$id}}" required="">

        </div>
        <div class="mb-3">
            <label for="name">Имя</label>

                <input type="text" class="form-control" name="name" id="name" value="{{$name}}" required="">

        </div>

        <div class="mb-3">
            <label for="email">Email </label>
            <input type="email" class="form-control" name="email" id="email" value="{{$email}}">

        </div>





        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Сохранить изменения</button>
    </form>
@endsection
