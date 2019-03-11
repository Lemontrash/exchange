@extends('forms')


@section('title')
    Change Password
@endsection
@yield('headAssetsSection')

@section('content')

    <div id="registrationWrapper">
        <h1>Change Password</h1>
        <form id="registration" class="formBody" method="POST" action="{{route('changePassword')}}">
            @csrf
            <div class="inputRow">
                <div class="formInner">
                    <label for="">Current Password</label>
                    <input type="password" name="passwordOld" placeholder="Current Password" required>
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
            <div class="inputRow">
                <div class="formInner">
                    <label for="">New Password</label>
                    <input type="password" name="passwordNew" placeholder="New Password" required>
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
            <div class="inputRow">
                <div class="formInner">
                    <label for="">Confirm Password</label>
                    <input type="password" name="passwordConfirmation" placeholder="Confirm Password" required>
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
            <button name="submit" type="submit">Sign In</button>
        </form>
    </div>
@endsection

