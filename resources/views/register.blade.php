@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <form class="transparent col-4" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-inner">
                <h3>Регистрация</h3>
                <br>
                <label for="username">Имя пользователя</label>
                <input type="text" id="username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >
                @error('name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="email">Email</label>
                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="login">login</label>
                <input type="text" id="login"  class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('phone') }}" >
                @error('login')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password">Пароль</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <label for="password-confirm">Пароль</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                <input type="submit" value="Отправить">
            </div>
        </form>
    </div>
@endsection
