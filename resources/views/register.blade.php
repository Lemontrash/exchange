@extends('layouts.app')

@section('content')
    <form method="post" action="" class="login">
        @csrf

        <p><input name="dzen" type="radio" value="nedzen" checked> individual</p>
        <p><input name="dzen" type="radio" value="dzen"> business</p>
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="name@example.com">
        </p>
        <p>
            <label for="login">Логин :</label>
            <input type="text" name="login" id="login" placeholder="Для входа на сайт">
        </p>
        <p>
            <label for="first-name">first-name :</label>
            <input type="text" name="username" id="first-name" placeholder="">
        </p>
        <p>
            <label for="last-name">last-name :</label>
            <input type="text" name="username" id="last-name" placeholder=" ">
        </p>
        <p>
            <label for="password-1">Пароль:</label>
            <input type="password" name="password-1" id="password-1" placeholder="******">
        </p>
        <p>
            <label for="password-2">Пароль еще раз:</label>
            <input type="password" name="password-2" id="password-2" placeholder="******">
        </p>

        <p class="login-submit">
            <button type="submit" class="login-button">Войти</button>
        </p>
    </form>
@endsection
