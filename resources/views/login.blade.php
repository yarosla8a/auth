@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <form class="transparent col-4" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-inner">
                <h3>Вход</h3>
                <br>
                <label for="login">Login</label>
                <input type="login" id="login" name="login"class="form-control @error('login') is-invalid @enderror" value="{{ old('login') }}" required autocomplete="login" autofocus>

                @error('login')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                <label for="password">Пароль</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input type="submit" value="Отправить">
            </div>
        </form>
    </div>
@endsection
