@extends('layouts.applogin')



<style type="text/css">
   
            #shadow{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
}
 .view {
      height: 100%;
    }
    @media (max-width: 559px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }
    @media (min-width: 560px) and (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 700px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 600px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
  </style>


@section('content')
 <div class="view">

    <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline autoplay muted loop>
      <source src="https://mdbootstrap.com/img/video/Lines-min.mp4" type="video/mp4">
    </video>

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn">

        <h1 class="display-4 mb-4">
          <strong>SUST CSE Teacher Board!</strong>
        </h1>

        <!-- Time Counter -->
        <p id="time-counter" class="border border-light my-4"></p>


        <h4 class="mb-4">
          <strong>Create an account and get all the news from the dept of CSE,SUST </strong>
        </h4>

       <!-- Modal -->

 <form class="form-horizontal"  method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
       
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <img src="images/avatarlogin.png" alt="avatar" class="rounded-circle img-responsive">
            </div>
            <!--Body-->
            <div class="modal-body text-center mb-1">

                <h5 class="mt-1 mb-2">Provide correct credentials</h5>
           
                 

        <div class="md-form ml-0 mr-0 {{ $errors->has('email') ? ' has-error' : '' }}">
            <label data-error="wrong" data-success="right" for="email" class="ml-0">Enter Email</label>
                    <input type="email" type="email" id="email" name="email" class="form-control " value="{{ old('email') }}" required autofocus>
                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>


                <div class="md-form ml-0 mr-0 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label data-error="wrong" data-success="right" for="password" class="ml-0">Enter password</label>
                    <input type="password" type="password" id="password" class="form-control form-control-sm validate ml-0" name="password"  required>
                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    
                </div>
                <div class="form-group">
                            <div class="md-form ml-0 mr-0  ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                <div class="text-center mt-5 pt-4">
                    <button class="btn btn-cyan mt-1"    type="submit">Login <i class="fa fa-sign-in ml-1"></i></button>
                </div>
                <hr>
                <p>Not a member?
        <a href="{{ route('register') }}">Sign Up</a>
        <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
    </p>

</form>


            </div>

        </div>
        
    </div>
</div>
<!--Modal: Login with Avatar Form-->


       <!-- Modal End-->
         @if (! Auth::guest())
         <a  href="{{ url('/home') }}" class="btn btn-outline-white btn-lg">Home
          <i class="fa fa-graduation-cap ml-2"></i>
        </a>
        @else

        <a  href="#!" class="btn btn-outline-white btn-lg" data-toggle="modal" data-target="#modalLoginAvatar">Log In
          <i class="fa fa-graduation-cap ml-2"></i>
        </a>
         <a  href="{{ route('register') }}" class="btn btn-outline-white btn-lg">Registration
          <i class="fa fa-graduation-cap ml-2"></i>
        </a>
         @endif
        

       

        </div>
        
    </div>
</div>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

</div>
@endsection
