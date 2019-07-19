@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row" >
        <div class="col-md-8 col-md-offset-2" >
             
                       @foreach($posts as $post)
            <div class="panel panel-default" id="shadow">
                <div class="panel-heading"></div>

                <div class="panel-body" style="margin-top:10%;">
                   <h1> {{$post->post_title}} </h1>
                   <div class="col-md-8">
                   {{$post->post_body}}
                   

                        <!--style for view-->
                    
                    <style type="text/css">



                         
                            .avatar{
                           border-radius: 150%;
                              max-width: 150px;
                            }
                             #shadow {
                                    -moz-box-shadow:    inset 0 0 50px #100000;
                                    -webkit-box-shadow: inset 0 0 50px #100000;
                                    box-shadow:         inset 0 0 50px #100000;

                                  }

                              </style>

                              
                    
                  
                       
                   </div>
                   <div class="col-md-2">
                       
                     
                   </div>
                </div>
            </div>
                    @endforeach
               
        </div>
    </div>
  </div>>  





                        @endsection
