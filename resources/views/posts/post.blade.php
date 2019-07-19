@extends('layouts.app')
<style type="text/css">
   #shadow{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
}
</style>
@section('content')
<div class="container mt-4 pt-5">
   @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                   @endif

                   @if(session('response'))
                   <div class="alert alert-success">{{session('response')}}</div>
                   @endif
    <div class="row">
       <div class="col-md-12 mt-5 pt-3 mb-5">
          <div class="card">
<!-- Default form contact -->
<h5 class="card-header elegant-color-dark white-text text-center py-4">
        <strong>Create A Notice</strong>
    </h5>
<form class="text-center border border-light p-5" method="POST" action="{{ url('/addPost') }}" enctype="multipart/form-data">

    {{ csrf_field() }}

    <!-- Name -->
<div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
    <input type="text" id="post_title" class="form-control mb-4" placeholder="Notice Title"  name="post_title" value="{{ old('post_title') }}" required autofocus>
     @if ($errors->has('post_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                @endif
</div>
    <!-- Email -->
    <div class="form-group{{ $errors->has('post_body') ? ' has-error' : '' }}">
        <textarea class="form-control rounded-0" id="post_body" rows="5" placeholder="Notice Body" name="post_body" value="{{ old('post_body') }}" required></textarea>
         @if ($errors->has('post_body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_body') }}</strong>
                                    </span>
                                @endif
    </div>

    <!-- Subject -->
     <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    <select id="category_id" type="category_id" name="category_id" required class="browser-default custom-select mb-4">
        <option value="" selected>Choose category</option>
         @if(count($categories)>0)
                                     @foreach($categories -> all() as $category)
        <option value="{{ $category->id}}">{{$category->category}}</option>
         @endforeach

                                    @endif
    </select>
    @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
</div>
    <!-- Message -->
   
    <!-- Copy -->
    <div class="form-group{{ $errors->has('post_image') ? ' has-error' : '' }}">
                            <label for="post_image" class="col-md-4 control-label">Choose Image</label>

                            
                                <input id="post_image" type="file" class="form-control" name="post_image">

                                @if ($errors->has('post_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_image') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

    <!-- Send button -->
    <div class="form-group">
   <button type="submit" class="btn btn-outline-elegant waves-effect btn-block">Publish</button>
</div>

</form>
</div>
<!-- Default form contact -->
       </div>
    </div>
</div>
@endsection
