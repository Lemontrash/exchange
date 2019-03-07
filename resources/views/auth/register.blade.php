@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="role" type="radio"  name="role" value="individual" >individual <br>
                        <input id="role" type="radio"  name="role" value="business" > business <br>
                        <div class="form-group row">
                            <label for="first-name" class="col-md-4 col-form-label text-md-right">fname</label>
                            <div class="col-md-6">
                                <input id="first-name" type="text" class="form-control" name="first-name" value="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="second-name" class="col-md-4 col-form-label text-md-right">sname</label>
                            <div class="col-md-6">
                                <input id="second-name" type="text" class="form-control" name="second-name" value="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">tel</label>
                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control" name="telephone" value="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password1" class="col-md-4 col-form-label text-md-right">p1</label>
                            <div class="col-md-6">
                                <input id="password1" type="password" class="form-control" name="password1" value="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-md-4 col-form-label text-md-right">p2</label>
                            <div class="col-md-6">
                                <input id="password2" type="password" class="form-control" name="password2" value="" >
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
