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
        <strong>Add Rules</strong>
    </h5>
<form class="text-center border border-light p-5" method="POST" action="{{url('/addCategory')}}">
     {{ csrf_field() }}

    

   
    <!--Name-->
    <div class="form-group{{ $errors->has('rules') ? ' has-error' : '' }}">
    <input type="rules" id="rules" class="form-control mb-5" placeholder="Enter New Notice Category" name="rules" value="{{ old('rules') }}" required autofocus>
     @if ($errors->has('rules'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rules') }}</strong>
                                    </span>
                                @endif
</div>
   
    <!-- Sign up button -->
    <div class="form-group">
    <button type="submit" class="btn btn-outline-elegant waves-effect btn-block">Update</button>
</div>
   

    
    <!-- Terms of service -->
   

</form>
<!-- Default form register -->
</div>
        </div>
    </div>
</div>
@endsection
