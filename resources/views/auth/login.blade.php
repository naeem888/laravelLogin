@extends("layouts.default")

@section("title", "Login")
@section("content")

<div class="login-page">

  
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
  <div class="form">
    <h3> LogIn</h3>
    <form method="POST" action="{{route('login.post')}}" class="login-form">
        @csrf
      <input type="text" placeholder="Email" id="email" name="email" />
      @if ($errors->has('email'))
      <span> class="danger">
        {{$errors->first('email')}} </span>
        @endif
      <input type="password" placeholder="password" id="password" name="password"/>
      
      @if ($errors->has('password'))
      <span> class="danger">
        {{$errors->first('password')}} </span>
        @endif
      
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="{{route('register')}}">Register an account</a></p>
    </form>

    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="">Sign In</a></p>
    </form>
  </div>
</div>

@endsection