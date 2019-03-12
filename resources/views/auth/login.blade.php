@extends('forms')


@section('title')
    Login
@endsection
@yield('headAssetsSection')

@section('content')

    <div id="registrationWrapper">
        <h1>Login</h1>
        <form id="registration" class="formBody" method="POST" action="{{route('login')}}">
            @csrf
            <div class="inputRow">
                <div class="formInner">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
            <div class="inputRow">
                <div class="formInner">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
            <input type="checkbox" class="checkbox" id="checkbox" />
            <label for="checkbox">Я переключаю чекбокс</label>
            <a href="{{route('password.request')}}" class="forgot">Forgot password?</a></p>
            <button name="submit" type="submit">Sign In</button>
            <a href="{{route('register')}}" class="register">Don`t have an account?</a>
        </form>
    </div>
@endsection

