@extends('layouts.app')
@section('content')
<div class="container mt-4 pt-5">
	<div class="row">
		<div class="col-md-12 mt-5 pt-3 mb-5">
		<div class="card ">
		<h5 class="card-header elegant-color-dark white-text text-center py-4">
        <strong>Assign Users For Posting Access</strong>
    </h5>
		<form action="{{url('/')}}/assignteacher" method="post" class="text-center border border-light p-5">
			{{csrf_field()}}
			Select Users:
		<select name="teacher" class="form-control">
			<?php 
			$usr=DB::table('users')->where('admin','=','2')->get();
			?>
			@foreach($usr as $u)
			<option value="{{$u->id}}">{{$u->name}}</option>
			@endforeach
		</select>

		Select Rules:
		<select name="catagory" class="form-control">
			<?php 
			$cats=DB::table('categories')->get();
			?>
			@foreach($cats as $cat)
			<option value="{{$cat->id}}">{{$cat->category}}</option>
			@endforeach
		</select>
		<input type="submit" name="submit" class="btn-lg btn-primary form-control mt-3" value="Assign Users!">

	</form>
		</div>
	</div>
	</div>
	</div>
	@endsection