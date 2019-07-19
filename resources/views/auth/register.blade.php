@extends('layouts.applogin')
<style type="text/css">
   #shadow{
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  
}

</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12   mb-5 ">
            <div class="card mt-5 ml-5 mr-5">
                 <h5 class="card-header elegant-color-dark white-text text-center py-4">
        <strong>Sign Up</strong>
    </h5>
           <!-- Default form register -->
<form class="text-center border border-light p-5" method="POST" action="{{ route('register') }}">

    {{ csrf_field() }}


    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
 <input type="text" id="name" class="form-control mb-4" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
</div>
    <!-- E-mail -->
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <input type="email" id="email" class="form-control mb-4" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

</div>
    <!-- Password -->
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <input type="password" id="password" class="form-control" placeholder="Password (At least 8 characters and 1 digit)" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password" required>
    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
   
 <div class="form-group">
   <!-- Password -->
    <input  id="password-confirm" type="password"  class="form-control" placeholder=" Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password_confirmation" required>
</div>
   
    

    <!-- Sign up button -->
    <div class="form-group">
     <button type="submit" class="btn btn-outline-elegant waves-effect btn-block">Sign Up</button>
 </div>
</form>
    <!-- Social register -->
    

    <hr>
    <center>
     <p>Already a member?
        <a href="{{ route('login') }}">Log In</a>
    </p>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a> and
        <a href="" target="_blank">terms of service</a>. </p>

</center>
<!-- Default form register -->
</div>
        </div>
    </div>
</div>
@endsection
