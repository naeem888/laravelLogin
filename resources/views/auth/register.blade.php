@extends("layouts.default")

@section("title", "Register")
@section("content")

<div class="login-page">
  <div class="form">
    <div class="div">
        @if(session()->has("success"))
        <div class="alert alert-success"></div>
        {{session()->get("success")}}
        @endif
        @if(session()->has("error"))
        <div class="alert alert-success"></div>
        {{session()->get("error")}}
        @endif
    </div>
    <h4>Register</h4>
    <form method="POST" action="{{route('register.post')}}" class="login-form">
        @csrf
    <div class="div">
        <input required Autofocused type="text" placeholder="Full Name" id="name" name="fullname"  />
      @if ($errors->has('fullname'))
      <span> class="danger-danger">
        {{ $errors->first('fullname') }} </span>
        @endif
    </div>
      <input required Autofocused type="text" placeholder="Email" id="email" name="email" />
      @if ($errors->has('email'))
      <span> class="danger">
        {{$errors->first('email')}} </span>
        @endif
      <input required Autofocused type="password" placeholder="password" id="password" name="password"/>
      
      @if ($errors->has('password'))
      <span> class="danger">
        {{$errors->first('password')}} </span>
        @endif
      
      <button type="submit">Sign Up</button>
    </form>

    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
  </div>
</div>

@endsection