@extends('layouts.app')
<style type="text/css">
    .avatar{
        border-radius: 100%;
        max-width: 100px;
    }
    #shadow{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }


</style>
@section('content')
<div class="container mt-4 pt-5" >
   @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                   @endif

                   @if(session('response'))
                   <div class="alert alert-success">{{session('response')}}</div>
                   @endif
    <div class="row" >
      
        <div class="col-md-8 mb-4">
          <h3>All Posts</h3>
                  @if(count($posts)> 0)
                       @foreach($posts->all() as $post)
                  <!-- Status -->
          <div class="card mb-4 wow fadeIn">

                            <img src="{{$post->post_image}}" class="img-fluid" alt="">



                            <!--Card content-->
                            <div class="card-body">
                               <blockquote class="blockquote">

                                <div class="media d-block d-md-flex mt-3">
                                   @if(!empty($profile->profile_pic))
                                    <img class="d-flex mb-3 mx-auto z-depth-1" src="{{ $profile->profile_pic }}" alt="Generic placeholder image"
                                        style="width: 100px;">
                                        @else
                     <img src=" {{url('images/avatar.png')}} " class="avatar" alt="">
                    @endif
                                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                        <h4 class="h5 my-1 font-weight-bold">{{$post->post_title}}
                                        </h4>
                                        <p class="mb-0" >{{substr($post->post_body,0,150) }}</p>
                                        <footer class="blockquote-footer">Posted On: {{date('M j, Y H:i', strtotime($post->updated_at))}}
                                        <!-- <cite title="Source Title">Source Title</cite> -->
                                    </footer>

                                    <!--button for view-->

                                    <a href='{{ url("/viewpost/{$post->post_title}")}}'>
     <button type="button" class="btn btn-outline-primary waves-effect btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>  View</button>
   </a>
                     
                                       <!--button for edit-->
      
       
      <!--<a href='#'>
      <button type="button" class="btn btn-outline-primary waves-effect btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>  EDIT</button>
    </a>-->

                                       <!--button for Delete-->  

    @if($post->user_id == $profile->user_id)
    <a href='{{ url("/removepost/{$post->post_title}")}}' onclick="return confirm('Do you really want to approve this post? ');">
       <button type="button" class="btn btn-outline-primary waves-effect btn-sm"> <i class="fa fa-trash-o" aria-hidden="true" ></i>  Delete</button>
     </a>
     @endif
                        
                                    </div>
                                </div>
                              </blockquote>

                            </div>


                        </div>
                      
                @endforeach

                       @else
                       <p>No post available</p>

                       @endif           <!-- Status End -->
            
        </div>
        <!-- Left side end -->

        <!-- right side -->

        <div class="col-md-4 mb-4">



                    <!-- Post Categories -->

          <div class="card mb-5 text-center wow fadeIn fixed">

                            <div class="card-header">Post Categories</div>

                            <!--Card content-->
                            <div class="card-body">
                              <ul class="list-group ">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Exam
        <span class="badge badge-primary badge-pill">14</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
       Alumni
        <span class="badge badge-primary badge-pill">2</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Carnival
        <span class="badge badge-primary badge-pill">1</span>
    </li>
</ul>
                            </div>
                          </div>

                            <!-- Categories end -->

                             <!-- Related Articles Card -->

                        <div class="card mb-4 text-center wow fadeIn">

                            <div class="card-header">Related Articles </div>

                            <!--Card content RELATED ARTICLES-->

                            <div class="card-body">

                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img class="col-md-6 mb-2" src="https://www.sust.edu/vtours/thumb/IICT-Building.jpg" alt="Generic placeholder image" >
                                        <div class="media-body">
                                            <a target="_blank" href="https://www.sust.edu/cse">
                                                <h5 class="mt-6 pt-9 font-weight-bolder">DEPT OVERVIEW
                                               </h5>
                                            </a> 
                                                         
                                           Department of Computer Science & Engineering got down to its journey along with that of School of Applied Science in 1992, the time from which till today it heaves the strength with non-breaking waves(...).
                                            

                                            </div>
                                           </li>
                                    
                                                  <!--2nd section-->

                                    <li class="media my-4">
                                        <img class="col-md-6 mb-2" src="https://yt3.ggpht.com/a-/AAuE7mAbT2qel990CGriXlW6eXY5rXSODUx8cM_QSQ=s240-mo-c-c0xffffffff-rj-k-no" alt="An image">
                                        <div class="media-body">
                                            <a target="_blank" href="https://www.facebook.com/sustcsesociety/">

                                                <h5 class="mt-0 mb-1 font-weight-bold">
                                                  
                                                CSE Society
                                                </h5>
                                            </a>
                                             CSE Society is a non-political departmental organization. All the students and teachers of CSE department are the general member of this society

                                        </div>
                                    </li>

                                                         <!--3rd section-->

                                    <li class="media my-4">
                                        <img class="col-md-6 mb-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP6p0W8RTg18RFT_miuAfEECzdF48xQSL3SjhrEobE__r4FFTZ_A" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <a target="_blank" href="https://www.sust.edu/d/cse/alumni">
                                                <h5 class="mt-0 mb-1 font-weight-bold">
                                                  
                                                  Alumni

                                                </h5>
                                            </a>
                                            The Alumni Association of the Department of Computer Science and Engineering, SUST will be formed on 23rd March during the event(...)
                                        </div>
                                    </li>
                                                                  <!--4th section-->

                                     <li class="media my-4">
                                        <img class="col-md-6 mb-3" src="https://lh3.googleusercontent.com/CZqSva_C4DOmvxX-Bt6VwiNICBotreYCNdBpcD-x49iLEbC9-l29R_w5kbJwJZ1DUko=w412-h732-rw">
                                        <div class="media-body ">
                                            <a target="_blank" href="https://www.pipilika.com/">
                                                <h5 class="mt-0 mb-1 font-weight-bold">
                                                  
                                                  পিপীলিকা (সার্চ ইঞ্জিন)

                                                </h5>
                                            </a>
                                            Pipilika is a web search engine operated from Sylhet, Bangladesh.It is the country's first Bangla search engine developed by the Computer Science and Engineering students of Shahjalal University of Science and Technology, Sylhet .(...)
                                        </div>
                                    </li>


                                                      <!--5th section-->


                                    <li class="media my-4">
                                        <img class="col-md-6 mb-3" src="https://i.ytimg.com/vi/x96uiqpC_zc/maxresdefault.jpg">
                                        <div class="media-body">
                                            <a target="_blank" href="https://www.sust.edu/d/cse/faculty">
                                                <h5 class="mt-0 mb-1 font-weight-bold">
                                                  
                                                  Faculty

                                                </h5>
                                            </a>
                                            
                                           </div>
                                    </li>






                                     </ul>

                            </div>

                        </div>
                        <!--/Related articles.Card-->
        </div>


        <!-- right side end-->

    </div>
</div>

@endsection
