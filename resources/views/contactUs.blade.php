@extends('forms')


@section('title')
  Registration
@endsection
@yield('headAssetsSection')

@section('content')
<div id="registrationWrapper">
  <h1>Registration</h1>
  <form id="registration" class="formBody" method="POST" action="{{route('send')}}">
    @csrf
    <div class="inputRow">
      <div class="formInner">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="email" required>
        <i class="fas fa-check-circle"></i>
      </div>
    </div>
    <div class="inputRow">
      <div class="formInner">
        <label for="">Full name</label>
        <input type="text" name="name" placeholder="name" required>
        <i class="fas fa-check-circle"></i>
      </div>
    </div><div class="inputRow">
      <div class="formInner">
        <label for="">title</label>
        <input type="text" name="title" placeholder="title" required>
        <i class="fas fa-check-circle"></i>
      </div>
    </div>
    <div class="inputRow">
      <div class="formInner">
        <label for="">Phone</label>
        <input type="tel" name="phone" placeholder="phone" required>
        <i class="fas fa-check-circle"></i>
      </div>
    </div>
    <div class="inputRow">
      <div class="formInner">
        <label for="">message</label>
        <textarea name="message" id="message" cols="30" rows="10">
        </textarea>
        <i class="fas fa-check-circle"></i>
      </div>
    </div>

    <button name="submit" type="submit">Send</button>
  </form>
</div>
@endsection
        
