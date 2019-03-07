@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('pdf-createView')}}" class="login">
        @csrf

        <p>
            <label for="first-name">Email:</label>
            <input type="text" name="first-name" id="first-name">
        </p>

        <p>
            <label for="second-name">second-name:</label>
            <input type="text" name="second-name" id="second-name">
        </p>

        <p>
            <label for="last-name">last name:</label>
            <input type="text" name="last-name" id="last-name">
        </p>

        <p>
            <label for="Country-of-residence">Country of residence:</label>
            <input type="text" name="country-of-residence" id="country-of-residence">
        </p>

        <p>
            <label for="Citizenship">Citizenship:</label>
            <input type="text" name="Citizenship" id="Citizenship">
        </p>

        <p>
            <label for="Place-of-birth">Place of birth:</label>
            <input type="text" name="place-of-birth" id="place-of-birth">
        </p>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('PDF SUKA') }}
                </button>
            </div>
        </div>


    </form>
@endsection
