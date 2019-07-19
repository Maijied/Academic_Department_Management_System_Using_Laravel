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
      
      <th scope="col">User</th>
      <th scope="col">Email</th>
      <th scope="col">Assigned Roles</th>
      
      
      <th scope="col" >Actions</th>
      
      
    </tr>
  </thead>
  <tbody>
  	<?php
  	$usr=DB::table('users')->where('admin','=',0)->orwhere('admin','=',2)->get();

  	?>
  	@foreach($usr as $u)
    <tr>

      <th ><?php echo $slno++; ?></th>
      <td>{{$u->name}}</td>
      <td>{{$u->email}}</td>
      <td>
        <?php 
        $at=DB::table('teacherassign')
            ->join('categories','teacherassign.catagory_id','=','categories.id')
            ->where('teacherassign.teacher_id','=', $u->id)
            ->get();
            
         foreach ($at->unique('category') as $a) {
              echo $a->category." - ";
              ?>
              <a href="{{url('/')}}/removeassignteacher/{{$u->id}}/{{$a->catagory_id}}"><img src="{{url('images/delete.png')}}" height="15px" width="15px"></a>
              <?php

            }   

        ?>
      </td>
      <td>
      @if($u->admin == 0 ) 
        <button type="button" class="btn-success"  onclick="return confirm('Do you really want to approve this account as teacher? ');" >
                    <a href="{{url('/')}}/approveteacher/{{$u->id}}">Give permission for post</a>
        </button> 
        @elseif($u->admin == 2)
                <button type="button" class="btn-danger"   onclick="return confirm('Do you really want to remove this account as teacher? ');" >
                    <a href="{{url('/')}}/removeteacher/{{$u->id}}">Remove permission</a>
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