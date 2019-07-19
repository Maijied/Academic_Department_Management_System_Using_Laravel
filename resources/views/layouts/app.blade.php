
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SUST CSE Teacher Board</title>

    <!-- Styles -->
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">



    
</head>
<body class="grey lighten-3">
    <header > 

    <div id="app">
       <nav id="gayeb" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar ">
  <a class="navbar-brand waves-effect" href="#">SUST CSE Teacher Board</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link waves-effect" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect" href="{{url('/post')}}">Add Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect" href="{{url('/display')}}">Display</a>
      </li>
      

       </ul>
       <ul class=" navbar-nav navbar-right">
             @if (Auth::guest())
                            <li class="nav-item " data-toggle="modal" data-target="#modalLoginAvatar"><a class="nav-link waves-effect" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item" ><a class="nav-link waves-effect" href="{{ route('register') }}">Register</a></li>
                             @else
      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
          {{ Auth::user()->name }} 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if (Auth::user()->admin==1)
          <a class="dropdown-item nav-link waves-effect" href="{{ url('/manageposts') }}">Manage Posts</a>
          <a class="dropdown-item nav-link waves-effect" href="{{ url('/admin') }}">Accounts</a>
          <a class="dropdown-item nav-link waves-effect" href="{{ url('/assignteacher') }}">Assign users</a>
        @endif
          
          <a class="dropdown-item nav-link waves-effect" href="{{  url('/category') }}">Rules</a>
           <a class="dropdown-item nav-link waves-effect" href="{{ route('logout') }}" 
            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
          
      </li>
      @endif
    </ul>
     
  </div>
</nav>
<header>








        @yield('content')



               <!-- Footer -->
<footer class="page-footer font-small elegant-color-dark " id="gayeb">

    <div style="background-color: #1C2331;">
      

        <!-- Grid row-->
        <div class="row py-3 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-1  ">
            <h6 class="mb-0">  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Get connected with us on SUST CSE network!</h6>
          </div>
          <!-- Grid column -->

         

        </div>
        <!-- Grid row-->

      
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">ABOUT SUST CSE</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Department of Computer Science & Engineering got down to its journey along with that of School of Applied Science in 1992, the time from which till today it heaves the strength with non-breaking waves.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Academics</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="http://www.sust.edu/d/cse/program">Program</a>
          </p>
          <p>
            <a href="http://www.sust.edu/d/cse/admission">Admission</a>
          </p>
          <p>
            <a href="http://www.sust.edu/d/cse/curriculam">Curriculam</a>
          </p>
          <p>
            <a href="http://www.sust.edu/d/cse/student-engagement-and-support">Student Engagement & Support</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="http://www.sust.edu/d/cse/scholarship">Scholarship</a>
          </p>
          <p>
            <a href="http://www.sust.edu/d/cse/research">Research</a>
          </p>
          <p>
            <a href="http://www.sust.edu/d/cse/faculty">Faculty</a>
          </p>
          <p>
            <a href="http://www.sust.edu/d/cse/officers">Officers</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> 3114, University Ave, Sylhet, BD</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> system.admin@sust.edu</p>
          <p>
            <i class="fa fa-phone mr-3"></i> 0821-713491</p>
          <p>
            <i class="fa fa-print mr-3"></i> FAX : 880-821-715257, 725050</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/"> SUST CSE</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

    </div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>
</html>
