@extends('layouts.app')
<style type="text/css">
   #shadow{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
}
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-5 mt-5 pt-3">
             @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                   @endif

                   @if(session('response'))
                   <div class="alert alert-success">{{session('response')}}</div>
                   @endif
            <div class="card">
           <!-- Default form register -->
           <h5 class="card-header elegant-color-dark white-text text-center py-4">
        <strong>Update Profile</strong>
    </h5>
<form class="text-center border border-light p-5" method="POST" action="{{url('/addProfile')}}" enctype="multipart/form-data">

     {{ csrf_field() }}


   
    <!--Name-->
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <input type="name" id="name" class="form-control mb-4" placeholder="Enter Name"  name="name" value="{{ old('name') }}" required autofocus>
     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
</div>
     <!--Name-->
     <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
    <input type="designation" id="designation" class="form-control mb-4" placeholder="Enter Designation" name="designation" required>
    @if ($errors->has('designation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif

</div>

 <div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }} mb-4">
                            <label for="profile_pic" class="col-md-4 control-label">Choose Profile Pic</label>

                            <div class="col-mb-4">
                                <input id="profile_pic" type="file" class="form-control" name="profile_pic" required>

                                @if ($errors->has('profile_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
    <!-- Sign up button -->
    <div class="form-group">
    <button type="submit" class="btn btn-outline-elegant waves-effect btn-block">Update</button>
</div>

   

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Update</em> you agree to 
        <a href="" target="_blank">update</a> and
        <a href="" target="_blank">change your profile information.</a>. </p>

</form>
<!-- Default form register -->
</div>
        </div>
    </div>
</div>
@endsection
