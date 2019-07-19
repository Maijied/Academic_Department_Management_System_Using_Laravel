@extends('layouts.app')

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

		<table class="table table-striped table-dark">
  <thead>
  	<?php $slno=1; ?>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Post</th>
      <th scope="col">Posted By</th>
      <th scope="col">Post Category</th>

      
      
      <th scope="col" >Actions</th>
      
      
    </tr>
  </thead>
  <tbody>
  	<?php
  	$usr=DB::table('posts')->join('users','posts.user_id','=','users.id')->join('categories','posts.category_id','=','categories.id')->orderBy('posts.status')->get();

  	?>
  	@foreach($usr as $u)
    <tr>

      <th ><?php echo $slno++; ?></th>
      <td class="text-truncate">{{$u->post_title}}</td>
      <td>{{$u->name}}</td>

      <td>{{$u->category}}</td>
      <td>

      		 @if($u->status == 0 ) 
        <button type="button" class="btn-success"  onclick="return confirm('Do you really want to approve this post? ');" >
                    <a href="{{url('/')}}/approvepost/{{$u->post_title}}">Approve Post</a>
        </button> 
        @elseif($u->status == 1)
                <button type="button" class="btn-danger"   onclick="return confirm('Do you really want to remove this post? ');" >
                    <a href="{{url('/')}}/removepost/{{$u->post_title}}">Remove Post</a>
        </button> 
        @endif


       
      
       
              </td>
     
    </tr>
   @endforeach
  </tbody>
</table>

		
	</div>
</div>
@endsection