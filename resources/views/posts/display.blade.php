@extends('layouts.app')
@section('content')
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Site Generator Description">
  <title>Notice</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  

    

  

<section class="engine"><a href="https://mobirise.me/h">how to create a web page</a></section><section class="carousel slide cid-r07UXuayIj" data-interval="false" id="slider1-q">

    

    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="10000">
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider1-q" class=" active" data-slide-to="0"></li>
                <li data-app-prevent-settings="" data-target="#slider1-q" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-q" data-slide-to="2"></li>
                <li data-app-prevent-settings="" data-target="#slider1-q" data-slide-to="3"></li>
                <li data-app-prevent-settings="" data-target="#slider1-q" data-slide-to="4"></li>
                <li data-app-prevent-settings="" data-target="#slider1-q" data-slide-to="5"></li>
                <li data-app-prevent-settings="" data-target="#slider1-q" data-slide-to="6"></li>
            </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/sust.jpg);">
                <div class="container container-slide">
                    <div class="image_wrapper">
        <div class="mbr-overlay">
            
        </div>
        <img src="assets/images/sust.jpg">
        <div class="carousel-caption justify-content-center">
            <div class="col-10 align-center">
                <h2 class="mbr-fonts-style display-1">This is SUST CSE Teacher Board! </h2>
                <p class="lead mbr-text mbr-fonts-style display-5">Stay tuned for more updates!</p></div>
            </div>
        </div></div>
    </div>
    <?php
    $notice=DB::table('posts')->orderBy('id','DESC')->where('status','=',1)->get();

    foreach($notice as $n){

    ?>

    <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url({{$n->post_image}});"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="{{$n->post_image}}"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"><h2 class="mbr-fonts-style display-1">{{$n->post_title}} </h2><p class="lead mbr-text mbr-fonts-style display-10 ">{{$n->post_body}}</p></div></div></div></div></div>
<?php
}
?>

    

    </div>

    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-q"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-q"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script type="text/javascript">
    $( document ).ready(function() {
    // console.log( "ready!" );
    $('#gayeb').hide();
  });
  </script>
  
  
@endsection