<!doctype html>
<html class="no-js" lang="en">


<head>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f908d1abbdaff001262a39d&product=inline-share-buttons" async="async"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/kw_assets/images/favicon.ico">

    <!-- CSS
    ============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/kw_assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="public/kw_assets/css/vendor/bicon.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="public/kw_assets/css/vendor/flaticon.css">
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="public/kw_assets/css/plugins/plyr.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="public/kw_assets/css/plugins/slick.min.css">
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="public/kw_assets/css/plugins/nice-select.css">
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="public/kw_assets/css/plugins/perfect-scrollbar.css">
    <!-- light gallery css -->
    <link rel="stylesheet" href="public/kw_assets/css/plugins/lightgallery.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="public/kw_assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="public/kw_assets/css/plugins/owl.theme.default.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="public/kw_assets/css/style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Khabar Wala</title>
    <style>
        .container {
            /* outline: 1px solid red; */
        }
    </style>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=955132594994952&autoLogAppEvents=1" nonce="vaiLYi8G"></script>
    <div class="body_overlay">
        <header>
        <div class="container">
            <div class="row">
                <div class="col-12 d-lg-block d-none">
                    <!-- <img src="public/kw_assets/images/header/header.jpg" alt=""> -->
                    <video width="100%" autoplay muted loop>
                            <source src="public/kw_assets/1.mp4" type="video/mp4" />
                            <source src="public/kw_assets/1.ogg" type="video/ogg" />
                            Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo d-lg-none">
                            <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png" alt="">
                        </div>
                        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                             <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" id="1" href="{{url('/webpost')}}" style="cursor: pointer;">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="2" style="cursor: pointer;" href="{{url('/catpakistan')}}">Pakistan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="3" style="cursor: pointer;" href="{{url('/catinternational')}}">International</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="4" style="cursor: pointer;" href="{{url('/catbussiness')}}">Business</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="5" style="cursor: pointer;" href="{{url('/catsports')}}">Sports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="6" style="cursor: pointer;" href="{{url('/catscitech')}}">SCI & TECH</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="7" style="cursor: pointer;" href="{{url('/cattvsows')}}">TV Shows</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="8" style="cursor: pointer;" href="{{url('/catlifestyle')}}">Lifestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="9" style="cursor: pointer;" href="{{url('/cathealth')}}">Health</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="main-wrapper pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- share box start -->
                        <div class="card card-small">
                            <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <!-- <textarea name="searchString" class="share-text-field" aria-disabled="true"
                                            placeholder="Type To Search" data-toggle="modal" data-target="#textbox"
                                            id="searchString"></textarea> -->
                                            <input type='text' class="share-text-field" id='search' placeholder='Search'>
                                    </form>
                                </div>
                                <!-- share content box end -->

                                <!-- Modal start -->

                                <!-- Modal end -->
                            </div>
                        </div>
                        
                        <!-- share box end -->

                        <!-- post status start -->
                            @foreach ($data as $val)
                        <?php
                             $gettime;
                            $nowdatetime = date('Y-m-d h:i:s');
                            $postdatetime = $val->created_at;
                            $date_a = strtotime($postdatetime);
                            $date_b = strtotime($nowdatetime);
                            $diff   = abs($date_a - $date_b);
                            $years = floor($diff / (365*60*60*24));
                            $months = floor(($diff - $years * 365*60*60*24) 
                               / (30*60*60*24)); 
                            $days = floor(($diff - $years * 365*60*60*24 -  
                            $months*30*60*60*24)/ (60*60*24)); 
                            $hours = floor(($diff - $years * 365*60*60*24  
                            - $months*30*60*60*24 - $days*60*60*24) 
                                   / (60*60));  
                            $minutes = floor(($diff - $years * 365*60*60*24  
                            - $months*30*60*60*24 - $days*60*60*24  
                            - $hours*60*60)/ 60); 
                            $seconds = floor(($diff - $years * 365*60*60*24  
                            - $months*30*60*60*24 - $days*60*60*24 
                            - $hours*60*60 - $minutes*60)); 
                            if($years != 0){
                                $gettime = sprintf("%dy, %dm, %dd, %dh, "
                             . "%dmins", $years, $months, 
                                     $days, $hours, $minutes);  
                            }if ($years == 0 && $months != 0) {
                                $gettime = sprintf("%dm, %dd, %dh, "
                             . "%dmins", $months, 
                                     $days, $hours, $minutes);
                            }if ($years == 0 && $months == 0 && $days !=0) {
                                $gettime = sprintf("%dd, %dh, "
                             . "%dmins", $days, $hours, $minutes);
                            }
                            if ($years == 0 && $months == 0 && $days ==0 && $hours !=0) {
                                $gettime = sprintf("%dh, "
                             . "%dmins", $hours, $minutes);
                            }
                            if ($years == 0 && $months == 0 && $days ==0 && $hours ==0 && $minutes !=0) {
                                $gettime = sprintf("%dmins", $minutes);
                            }
                            if ($years == 0 && $months == 0 && $days ==0 && $hours ==0 && $minutes ==0 && $seconds!=0) {
                                $gettime = sprintf("%dsecs", $seconds);
                            }
                            $taskimage = DB::table('postimage')
                            ->where('post_id','=',$val->post_id)
                            ->where('status_id','=',1)
                            ->select('postimage.postimage_name')
                            ->get();
                            $taskvideo = DB::table('postvideo')
                            ->where('post_id','=',$val->post_id)
                            ->where('status_id','=',1)
                            ->select('postvideo.video_name')
                            ->get();
                            $taskembedvideo = $val->post_videolink;
                            // if (isset($taskimage)) {
                            if (!empty($taskimage)) {
                                $getimage = array();
                                foreach ($taskimage as $taskimages) {
                                    $getimage[] = $taskimages;
                                }    
                            }
                            // if (isset($taskvideo)) {
                            if(!empty($taskvideo)){
                                $getvideo = array();
                                foreach ($taskvideo as $taskvideos) {
                                    $getvideo[] = $taskvideos;
                                }    
                            }
                            // dd($getvideo);
                            $taskimagecount = DB::table('postimage')
                            ->where('post_id','=',$val->post_id)
                            ->where('status_id','=',1)
                            ->select('postimage.postimage_name')
                            ->count();
                            $taskvideocount = DB::table('postvideo')
                            ->where('post_id','=',$val->post_id)
                            ->where('status_id','=',1)
                            ->select('postvideo.video_name')
                            ->count();
                            $taskembedvideocount = DB::table('post')
                            ->where('post_id','=',$val->post_id)
                            ->where('status_id','=',1)
                            ->where('post_videolink','!=',null)
                            ->select('postvideo.post_videolink')
                            ->count();
                            if (isset($taskimagecount) || isset($taskvideocount) || isset($taskembedvideocount)) {
                                $sumimageandvideo = $taskimagecount+$taskvideocount+$taskembedvideocount;
                            }
                            $postlikecount = DB::table('postact')
                            ->where('post_id','=',$val->post_id)
                            ->where('postact_type','=',"Like")
                            ->select('postact.*')
                            ->count();
                            $postdislikecount = DB::table('postact')
                            ->where('post_id','=',$val->post_id)
                            ->where('postact_type','=',"DisLike")
                            ->select('postact.*')
                            ->count();
                            $postcommentscount = DB::table('postcomment')
                            ->where('post_id','=',$val->post_id)
                            ->where('status_id','=',1)
                            ->select('postcomment.*')
                            ->count();
                        ?>
                        <!-- post status start -->
                        <!-- One Start -->
                        
                        <!-- post status start -->
                @if($sumimageandvideo == 0)
                <div class='content'>
                    <div class='title'>
                        <div class="card" id="ahm_card_{{$val->post_id}}">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">Khabar111 Wala News</a></h6>
                                    @if($gettime != "")
                                    <span class="post-time">{{$gettime}} ago</span>
                                    @endif
                                </div>
                            </div>
                            <!-- post title start -->
                            @if($val->post_language == "Urdu")
                            <div class="post-content text-right">
                            @else
                            <div class="post-content text-left">
                            @endif
                           
                                <h3 class="ahm_post_title mb-2">{{$val->post_title}}</h3>
                            
                                <p class="post-desc">
                                    {{$val->post_description}}
                                </p>
                                <div class="post-meta">
                                    <button onclick="getlikeclientip({{$val->post_id}})" class="post-meta-like">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $likeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"Like")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($likeifexist)
                                        <i class="far fa-thumbs-up primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postlikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-up"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postlikecount}}</span>
                                        @endif
                                    </button>
                                    <button onclick="getdislikeclientip({{$val->post_id}})" class="post-meta-dislike ml-4">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $dislikeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"DisLike")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($dislikeifexist)
                                        <i class="far fa-thumbs-down primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postdislikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-down"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postdislikecount}}</span>
                                        @endif
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <!-- <i class="bi bi-chat-bubble"></i> -->
                                                <i class="far fa-comments"></i>
                                                <span>{{$postcommentscount}}</span>
                                            </button>
                                        </li>
                                        <li>
                                        <div class="fb-share-button" data-href="http://localhost/khabarwala/webpost" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fkhabarwala%2Fwebpost&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                        </li>
                                        <li>
                                        <script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
                                        <a class="twitter-share-button" target="_blank" 
                                           href="https://twitter.com/intent/tweet?url=http://localhost/khabarwala/singlepostpage/4"
                                            data-size="large">
                                        Tweet</a>
                                        </li>
                                        <li>
                                        <a target="_blank" href="https://web.whatsapp.com/send?text=http://localhost/khabarwala/singlepostpage/4" data-original-title="whatsapp" rel="tooltip" data-placement="left" data-action="share/whatsapp/share">Whatsapp Web</a> 
                                        </li>
                                        <li>
                                        <a target="_blank" href="http://whatsapp://send?text=http://localhost/khabarwala/singlepostpage/4" data-original-title="whatsapp" rel="tooltip" class="btn btn-whatsapp" data-placement="left">Whatsapp Mobile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- comment start from here -->
                            <div class="ahm_comment_container">
                                <div class="comment-header d-flex align-items-center">
                                    <button onclick="viewpostdetails({{$val->post_id}})">Veiw {{$postcommentscount}} more Comments </button>
                                </div>
                                <div class="ahm_comments_body">
                                    <!-- single comment -->
                                    <?php
                                    $getcomment =  DB::table('postcomment')
                                                    ->join('siteusers','siteusers.siteusers_email', '=','postcomment.siteusers_email')
                                                    ->where('postcomment.post_id','=',$val->post_id)
                                                    ->where('postcomment.status_id','=',1)
                                                    ->select('postcomment.postcomment_comment','postcomment.created_at','siteusers.siteusers_name','siteusers.siteusers_image')
                                                    ->orderByDesc('postcomment.postcomment_id')
                                                    ->limit(2)
                                                    ->get();
                                    if (!empty($getcomment)) {
                                        foreach ($getcomment as $getcomments) {
                                        $name        = $getcomments->siteusers_name; 
                                        $commentdate = $getcomments->created_at;
                                        $comment     = $getcomments->postcomment_comment;
                                        $image       = $getcomments->siteusers_image;
                                    ?>
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src={{$image}}
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">{{$name}}</a>
                                                    </h6>
                                                    <span class="ml-auto">{{$commentdate}}</span>
                                                </div>
                                                <p>{{$comment}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }    
                                    }
                                    ?>
                                    <!-- single comment end -->
                                </div>
                                <div class="ahm_new-comment">
                                    <div class="ahm_new-comment-content d-flex align-items-start">
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    @if(session()->get('email'))
                                                    <img src="{{session()->get('image')}}"
                                                        alt="profile picture">
                                                    @else
                                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                        alt="profile picture">
                                                    @endif
                                                </figure>
                                            </a>
                                        </div>
                                        @if(session()->get('email'))
                                        <div class="ahm_text">
                                            <textarea class="comment_textarea" name="comment" id="comment-{{$val->post_id}}" cols="" rows="1"
                                                placeholder="Type your comment..."></textarea>
                                        </div>
                                        <button  onclick="submitcomment({{$val->post_id}})" class="comment-btn">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                        @else
                                        <button class="login ml-auto login-call">
                                            <i class="far fa-paper-plane"> Login</i>
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- comment start end-->
                        </div>
                        </div>
                        </div>
                        @endif
                @if($sumimageandvideo == 1)
                <div class='content'>
                    <div class='title'>
                        <div class="card" id="ahm_card_{{$val->post_id}}">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">Khabar Wala News</a></h6>
                                    @if($gettime != "")
                                    <span class="post-time">{{$gettime}} ago</span>
                                    @endif
                                </div>
                            </div>
                            <!-- post title start -->
                            @if($val->post_language == "Urdu")
                            <div class="post-content text-right">
                            @else
                            <div class="post-content text-left">
                            @endif
                           
                                <h3 class="ahm_post_title mb-2">{{$val->post_title}}</h3>
                            
                                <p class="post-desc">
                                    {{$val->post_description}}
                                </p>

                                 @if($getimage != "")
                                <?php
                                foreach ($getimage as $taskimages){
                                    $image = $taskimages->postimage_name;
                                ?>
                                <img src="{{ URL::to('public/postimages/')}}/{{$val->post_id}}/{{$image}}" alt="">
                                <?php
                                }
                                ?>
                                @endif
                                @if($getvideo != "")
                                <?php
                                foreach ($getvideo as $taskvideos){
                                    $video = $taskvideos->video_name;
                                ?>
                                <video controls>
                                                    <source src="{{ URL::to('public/postvideos/')}}/{{$val->post_id}}/{{$video}}"
                                                        type="video/mp4">
                                                    Your browser does not support the video tag.
                                </video>
                                <?php
                                }
                                ?>
                                @endif
                                @if($taskembedvideo != "")
                                       <div class="plyr__video-embed plyr-youtube">
                                    {!! $taskembedvideo !!}
                                </div>
                                @endif
                                <div class="post-meta">
                                    <button onclick="getlikeclientip({{$val->post_id}})" class="post-meta-like">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $likeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"Like")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($likeifexist)
                                        <i class="far fa-thumbs-up primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postlikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-up"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postlikecount}}</span>
                                        @endif
                                    </button>
                                    <button onclick="getdislikeclientip({{$val->post_id}})" class="post-meta-dislike ml-4">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $dislikeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"DisLike")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($dislikeifexist)
                                        <i class="far fa-thumbs-down primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postdislikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-down"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postdislikecount}}</span>
                                        @endif
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <!-- <i class="bi bi-chat-bubble"></i> -->
                                                <i class="far fa-comments"></i>
                                                <span>{{$postcommentscount}}</span>
                                            </button>
                                        </li>
                                        <li>
                                        <div class="fb-share-button" data-href="http://localhost/khabarwala/webpost" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fkhabarwala%2Fwebpost&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                        </li>
                                        <li>
                                        <script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
                                        <a class="twitter-share-button" target="_blank" 
                                           href="https://twitter.com/intent/tweet?url=http://localhost/khabarwala/singlepostpage/4"
                                            data-size="large">
                                        Tweet</a>
                                        </li>
                                        <li>
                                        <a target="_blank" href="https://web.whatsapp.com/send?text=http://localhost/khabarwala/singlepostpage/4" data-original-title="whatsapp" rel="tooltip" data-placement="left" data-action="share/whatsapp/share">Whatsapp Web</a> 
                                        </li>
                                        <li>
                                        <a target="_blank" href="http://whatsapp://send?text=http://localhost/khabarwala/singlepostpage/4" data-original-title="whatsapp" rel="tooltip" class="btn btn-whatsapp" data-placement="left">Whatsapp Mobile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- comment start from here -->
                            <div class="ahm_comment_container">
                                <div class="comment-header d-flex align-items-center">
                                    <button onclick="viewpostdetails({{$val->post_id}})">Veiw {{$postcommentscount}} more Comments </button>
                                </div>
                                <div class="ahm_comments_body">
                                    <!-- single comment -->
                                    <?php
                                    $getcomment =  DB::table('postcomment')
                                                    ->join('siteusers','siteusers.siteusers_email', '=','postcomment.siteusers_email')
                                                    ->where('postcomment.post_id','=',$val->post_id)
                                                    ->where('postcomment.status_id','=',1)
                                                    ->select('postcomment.postcomment_comment','postcomment.created_at','siteusers.siteusers_name','siteusers.siteusers_image')
                                                    ->orderByDesc('postcomment.postcomment_id')
                                                    ->limit(2)
                                                    ->get();
                                    if (!empty($getcomment)) {
                                        foreach ($getcomment as $getcomments) {
                                        $name        = $getcomments->siteusers_name; 
                                        $commentdate = $getcomments->created_at;
                                        $comment     = $getcomments->postcomment_comment;
                                        $image       = $getcomments->siteusers_image;
                                    ?>
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src={{$image}}
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">{{$name}}</a>
                                                    </h6>
                                                    <span class="ml-auto">{{$commentdate}}</span>
                                                </div>
                                                <p>{{$comment}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }    
                                    }
                                    ?>
                                    <!-- single comment end -->
                                </div>
                                <div class="ahm_new-comment">
                                    <div class="ahm_new-comment-content d-flex align-items-start">
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    @if(session()->get('email'))
                                                    <img src="{{session()->get('image')}}"
                                                        alt="profile picture">
                                                    @else
                                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                        alt="profile picture">
                                                    @endif
                                                </figure>
                                            </a>
                                        </div>
                                        @if(session()->get('email'))
                                        <div class="ahm_text">
                                            <textarea class="comment_textarea" name="comment" id="comment-{{$val->post_id}}" cols="" rows="1"
                                                placeholder="Type your comment..."></textarea>
                                        </div>
                                        <button  onclick="submitcomment({{$val->post_id}})" class="comment-btn">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                        @else
                                        <button class="login ml-auto login-call">
                                            <i class="far fa-paper-plane"> Login</i>
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- comment start end-->
                        </div>
                        </div>
                        </div>
                        @endif
                        <!-- post status end -->

                        <!-- post status start -->
                @if($sumimageandvideo == 2)
                <div class='content'>
                    <div class='title'>
                        <div class="card" id="ahm_card_{{$val->post_id}}">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">ahmer Khabar Wala News</a></h6>
                                    @if($gettime != "")
                                    <span class="post-time">{{$gettime}} ago</span>
                                    @endif
                                </div>
                            </div>
                            <!-- post title start -->
                            @if($val->post_language == "Urdu")
                            <div class="post-content text-right">
                            @else
                            <div class="post-content text-left">
                            @endif
                                <h3 class="ahm_post_title mb-2">{{$val->post_title}}</h3>
                                <p class="post-desc">
                                    {{$val->post_description}}
                                </p>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters">
                                        @if($getvideo != "")
                                                <?php
                                                foreach ($getvideo as $taskvideos){
                                                    $image = $taskvideos->video_name;
                                                ?>
                                        <div class="col-6">
                                            <figure class="post-thumb ahm_two_post_thumb">
                                                <!-- <iframe src="https://www.youtube.com/embed/WeA7edXsU40"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe> -->
                                                <!-- <img src="public/kw_assets/images/post/photo.webp" alt=""> -->
                                              <video controls>
                                                    <source src="{{ URL::to('public/postvideos/')}}/{{$val->post_id}}/{{$image}}"
                                                        type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </figure>
                                        </div>
                                                <?php
                                                }
                                                ?>
                                                @endif
                                                @if($taskembedvideo != "")
                                                <div class="col-6">
                                                <figure class="post-thumb ahm_two_post_thumb">
                                                {!! $taskembedvideo !!}
                                                </figure>
                                                </div>
                                                @endif
                                                @if($getimage != "")
                                                <?php
                                                foreach ($getimage as $taskimages){
                                                    $video = $taskimages->postimage_name;
                                                ?>
                                                <div class="col-6">
                                                <figure class="post-thumb ahm_two_post_thumb">
                                                <img src="{{ URL::to('public/postimages/')}}/{{$val->post_id}}/{{$video}}" alt="">
                                                </figure>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                                @endif
                                    </div>
                                </div>
                                <div class="post-meta">
                                   <button onclick="getlikeclientip({{$val->post_id}})" class="post-meta-like">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $likeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"Like")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($likeifexist)
                                        <i class="far fa-thumbs-up primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postlikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-up"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postlikecount}}</span>
                                        @endif
                                    </button>
                                    <button onclick="getdislikeclientip({{$val->post_id}})" class="post-meta-dislike ml-4">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $dislikeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"DisLike")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($dislikeifexist)
                                        <i class="far fa-thumbs-down primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postdislikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-down"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postdislikecount}}</span>
                                        @endif
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <!-- <i class="bi bi-chat-bubble"></i> -->
                                                <i class="far fa-comments"></i>
                                                <span>{{$postcommentscount}}</span>
                                            </button>
                                        </li>
                                        <li>
                                        <div class="fb-share-button" data-href="http://localhost/khabarwala/webpost" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fkhabarwala%2Fwebpost&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ahm_comment_container">
                                <div class="comment-header d-flex align-items-center">
                                    <button onclick="viewpostdetails({{$val->post_id}})">Veiw {{$postcommentscount}} more Comments </button>
                                </div>
                                <div class="ahm_comments_body">
                                    <!-- single comment -->
                                    <?php
                                    $getcomment =  DB::table('postcomment')
                                                    ->join('siteusers','siteusers.siteusers_email', '=','postcomment.siteusers_email')
                                                    ->where('postcomment.post_id','=',$val->post_id)
                                                    ->where('postcomment.status_id','=',1)
                                                    ->select('postcomment.postcomment_comment','postcomment.created_at','siteusers.siteusers_name','siteusers.siteusers_image')
                                                    ->orderByDesc('postcomment.postcomment_id')
                                                    ->limit(2)
                                                    ->get();
                                    if (!empty($getcomment)) {
                                        foreach ($getcomment as $getcomments) {
                                        $name        = $getcomments->siteusers_name; 
                                        $commentdate = $getcomments->created_at;
                                        $comment     = $getcomments->postcomment_comment;
                                        $image       = $getcomments->siteusers_image;
                                    ?>
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src={{$image}}
                                                                alt="profile picture">
                                                            }
                                                            }
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">{{$name}}</a>
                                                    </h6>
                                                    <span class="ml-auto">{{$commentdate}}</span>
                                                </div>
                                                <p>{{$comment}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }    
                                    }
                                    ?>
                                    <!-- single comment end -->
                                </div>
                                <div class="ahm_new-comment">
                                    <div class="ahm_new-comment-content d-flex align-items-start">
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    @if(session()->get('email'))
                                                    <img src="{{session()->get('image')}}"
                                                        alt="profile picture">
                                                    @else
                                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                        alt="profile picture">
                                                    @endif
                                                </figure>
                                            </a>
                                        </div>
                                        @if(session()->get('email'))
                                        <div class="ahm_text">
                                            <textarea class="comment_textarea" name="comment" id="comment-{{$val->post_id}}" cols="" rows="1"
                                                placeholder="Type your comment..."></textarea>
                                        </div>
                                        <button  onclick="submitcomment({{$val->post_id}})" class="comment-btn">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                        @else
                                        <button class="login ml-auto login-call">
                                            Login To Comment
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                        <!-- post status end -->

                        <!-- post status start -->
                @if($sumimageandvideo == 3)
                <div class='content'>
                    <div class='title'>
                        <div class="card" id="ahm_card_{{$val->post_id}}">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->
                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">Khabar Wala News</a></h6>
                                    @if($gettime != "")
                                    <span class="post-time">{{$gettime}} ago</span>
                                    @endif
                                </div>
                            </div>
                            <!-- post title start -->
                            @if($val->post_language == "Urdu")
                            <div class="post-content text-right">
                            @else
                            <div class="post-content text-left">
                            @endif
                                <h3 class="ahm_post_title mb-2">{{$val->post_title}}</h3>
                                <p class="post-desc">
                                    {{$val->post_description}}
                                </p>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters ahm_three_post_dom_manipulation">
                                        @if($taskembedvideo != "")
                                        {!! $taskembedvideo !!}
                                        @endif
                                        @if($getimage != "")
                                        <?php
                                        foreach ($getimage as $taskimages){
                                            $image = $taskimages->postimage_name;
                                        ?>
                                        <img src="{{ URL::to('public/postimages/')}}/{{$val->post_id}}/{{$image}}" alt="">
                                        <?php
                                        }
                                        ?>
                                        @endif
                                        @if($taskvideo != "")
                                        <?php
                                        foreach ($getvideo as $taskvideos){
                                            $video = $taskvideos->video_name;
                                        ?>
                                        <video controls>
                                            <source src="{{ URL::to('public/postvideos/')}}/{{$val->post_id}}/{{$video}}"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <?php
                                        }
                                        ?>
                                        @endif
                                    </div>
                                </div>
                                <div class="post-meta">
                                   <button onclick="getlikeclientip({{$val->post_id}})" class="post-meta-like">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $likeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"Like")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($likeifexist)
                                        <i class="far fa-thumbs-up primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postlikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-up"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postlikecount}}</span>
                                        @endif
                                    </button>
                                    <button onclick="getdislikeclientip({{$val->post_id}})" class="post-meta-dislike ml-4">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $dislikeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"DisLike")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($dislikeifexist)
                                        <i class="far fa-thumbs-down primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postdislikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-down"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postdislikecount}}</span>
                                        @endif
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <!-- <i class="bi bi-chat-bubble"></i> -->
                                                <i class="far fa-comments"></i>
                                                <span>{{$postcommentscount}}</span>
                                            </button>
                                        </li>
                                        <li>
                                        <div class="fb-share-button" data-href="http://localhost/khabarwala/webpost" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fkhabarwala%2Fwebpost&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ahm_comment_container">
                                <div class="comment-header d-flex align-items-center">
                                    <button onclick="viewpostdetails({{$val->post_id}})">Veiw {{$postcommentscount}} more Comments </button>
                                </div>
                                <div class="ahm_comments_body">
                                    <!-- single comment -->
                                    <?php
                                    $getcomment =  DB::table('postcomment')
                                                    ->join('siteusers','siteusers.siteusers_email', '=','postcomment.siteusers_email')
                                                    ->where('postcomment.post_id','=',$val->post_id)
                                                    ->where('postcomment.status_id','=',1)
                                                    ->select('postcomment.postcomment_comment','postcomment.created_at','siteusers.siteusers_name','siteusers.siteusers_image')
                                                    ->orderByDesc('postcomment.postcomment_id')
                                                    ->limit(2)
                                                    ->get();
                                    if (!empty($getcomment)) {
                                        foreach ($getcomment as $getcomments) {
                                        $name        = $getcomments->siteusers_name; 
                                        $commentdate = $getcomments->created_at;
                                        $comment     = $getcomments->postcomment_comment;
                                        $image       = $getcomments->siteusers_image;
                                    ?>
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src={{$image}}
                                                                alt="profile picture">
                                                            }
                                                            }
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">{{$name}}</a>
                                                    </h6>
                                                    <span class="ml-auto">{{$commentdate}}</span>
                                                </div>
                                                <p>{{$comment}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }    
                                    }
                                    ?>
                                    <!-- single comment end -->
                                </div>
                                <div class="ahm_new-comment">
                                    <div class="ahm_new-comment-content d-flex align-items-start">
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                   @if(session()->get('email'))
                                                    <img src="{{session()->get('image')}}"
                                                        alt="profile picture">
                                                    @else
                                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                        alt="profile picture">
                                                    @endif
                                                </figure>
                                            </a>
                                        </div>
                                        @if(session()->get('email'))
                                        <div class="ahm_text">
                                            <textarea class="comment_textarea" name="comment" id="comment-{{$val->post_id}}" cols="" rows="1"
                                                placeholder="Type your comment..."></textarea>
                                        </div>
                                        <button onclick="submitcomment({{$val->post_id}})" class="comment-btn">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                        @else
                                        <button class="login ml-auto login-call">
                                            Login To Comment
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                        <!-- post status end -->

                        <!-- post status start -->
                @if($sumimageandvideo >= 4)
                <div class='content'>
                    <div class='title'>
                        <div class="card" id="ahm_card_{{$val->post_id}}">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->
                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">Khabar Wala News</a></h6>
                                    @if($gettime != "")
                                    <span class="post-time">{{$gettime}} ago</span>
                                    @endif
                                </div>
                            </div>
                            <!-- post title start -->
                            @if($val->post_language == "Urdu")
                            <div class="post-content text-right">
                            @else
                            <div class="post-content text-left">
                            @endif
                                <h3 class="ahm_post_title mb-2">{{$val->post_title}}</h3>
                                <p class="post-desc">
                                    {{$val->post_description}}
                                </p>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters ahm_four_post_dom_manipulation">
                                         @if($taskembedvideo != "")
                                        {!! $taskembedvideo !!}
                                        @endif
                                        @if($getimage != "")
                                        <?php
                                        foreach ($getimage as $taskimages){
                                            $image = $taskimages->postimage_name;
                                        ?>
                                        <img src="{{ URL::to('public/postimages/')}}/{{$val->post_id}}/{{$image}}" alt="">
                                        <?php
                                        }
                                        ?>
                                        @endif
                                        @if($taskvideo != "")
                                        <?php
                                        foreach ($getvideo as $taskvideos){
                                            $video = $taskvideos->video_name;
                                        ?>
                                        <video controls>
                                            <source src="{{ URL::to('public/postvideos/')}}/{{$val->post_id}}/{{$video}}"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <?php
                                        }
                                        ?>
                                        @endif
                                    </div>
                                </div>
                                <div class="post-meta">
                                  <button onclick="getlikeclientip({{$val->post_id}})" class="post-meta-like">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $likeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"Like")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($likeifexist)
                                        <i class="far fa-thumbs-up primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postlikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-up"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postlikecount}}</span>
                                        @endif
                                    </button>
                                    <button onclick="getdislikeclientip({{$val->post_id}})" class="post-meta-dislike ml-4">
                                        <?php
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $dislikeifexist = DB::table('postact')
                                        ->where('post_id','=',$val->post_id)
                                        ->where('postact_userip','=',$ip)
                                        ->where('postact_type','=',"DisLike")
                                        ->select('postact.*')
                                        ->first();
                                        ?>
                                        @if($dislikeifexist)
                                        <i class="far fa-thumbs-down primary_color_class"></i>
                                        <span class="current-user-action primary_color_class"></span>
                                        <span class="primary_color_class">{{$postdislikecount}}</span>
                                        @else
                                        <i class="far fa-thumbs-down"></i>
                                        <span class="current-user-action"></span>
                                        <span>{{$postdislikecount}}</span>
                                        @endif
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <!-- <i class="bi bi-chat-bubble"></i> -->
                                                <i class="far fa-comments"></i>
                                                <span>{{$postcommentscount}}</span>
                                            </button>
                                        </li>
                                        <li>
                                        <div class="fb-share-button" data-href="http://localhost/khabarwala/webpost" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fkhabarwala%2Fwebpost&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ahm_comment_container">
                                <div class="comment-header d-flex align-items-center">
                                    <button onclick="viewpostdetails({{$val->post_id}})">Veiw {{$postcommentscount}} more Comments </button>
                                </div>
                                <div class="ahm_comments_body">
                                    <!-- single comment -->
                                    <?php
                                    $getcomment =  DB::table('postcomment')
                                                    ->join('siteusers','siteusers.siteusers_email', '=','postcomment.siteusers_email')
                                                    ->where('postcomment.post_id','=',$val->post_id)
                                                    ->where('postcomment.status_id','=',1)
                                                    ->select('postcomment.postcomment_comment','postcomment.created_at','siteusers.siteusers_name','siteusers.siteusers_image')
                                                    ->orderByDesc('postcomment.postcomment_id')
                                                    ->limit(2)
                                                    ->get();
                                    if (!empty($getcomment)) {
                                        foreach ($getcomment as $getcomments) {
                                        $name        = $getcomments->siteusers_name; 
                                        $commentdate = $getcomments->created_at;
                                        $comment     = $getcomments->postcomment_comment;
                                        $image       = $getcomments->siteusers_image;
                                    ?>
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src={{$image}}
                                                                alt="profile picture">
                                                            }
                                                            }
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">{{$name}}</a>
                                                    </h6>
                                                    <span class="ml-auto">{{$commentdate}}</span>
                                                </div>
                                                <p>{{$comment}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }    
                                    }
                                    ?>
                                    <!-- single comment end -->
                                </div>
                                <div class="ahm_new-comment">
                                    <div class="ahm_new-comment-content d-flex align-items-start">
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    @if(session()->get('email'))
                                                    <img src="{{session()->get('image')}}"
                                                        alt="profile picture">
                                                    @else
                                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                        alt="profile picture">
                                                    @endif
                                                </figure>
                                            </a>
                                        </div>
                                        @if(session()->get('email'))
                                        <div class="ahm_text">
                                            <textarea class="comment_textarea" name="comment" id="comment-{{$val->post_id}}" cols="" rows="1"
                                                placeholder="Type your comment..."></textarea>
                                        </div>
                                        <button onclick="submitcomment({{$val->post_id}})" class="comment-btn">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                        @else
                                        <button class="login ml-auto login-call">
                                            Login To Comment
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endif

                @endforeach
                <div class="test"><button id="btn-moresdsd" onclick="loadonajex({{ $val->post_id  }})"> Load More From View </button></div>
                <p align="center"> 
                  <img id="loadingimage" src="{!! asset('public/assets/img/loading.gif') !!}" style="display: none;" />
                </p>
                        <!-- post status end -->
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="adds">
                            <img src="public/kw_assets/images/adds/add_one.jpg" alt="">
                        </div>
                        
                        <div class="hot-news">
                            <?php
                            $recentmostimportat = DB::table('post')
                            ->where('status_id','=',1)
                            ->where('post_important','!=',null)
                            ->select('post.*')
                            ->orderByDesc('post_important')
                            ->limit(3)
                            ->get();
                            $getrecentmostimportat = array();
                            foreach ($recentmostimportat as $recentmostimportats) {
                                $getrecentmostimportat[] = $recentmostimportats;
                            }
                            // dd($getrecentmostimportat);
                            if(isset($getrecentmostimportat)) {
                            ?>
                            @foreach($getrecentmostimportat as $getrecentmostimportats)
                                @if($getrecentmostimportats->post_language == "Urdu")
                                <div class="item text-right">
                                @else
                                <div class="item text-left">
                                @endif
                                    <h3>{{$getrecentmostimportats->post_title}}</h3>
                                    <?php
                                    $taskimageimp = DB::table('postimage')
                                    ->where('post_id','=',$getrecentmostimportats->post_id)
                                    ->where('status_id','=',1)
                                    ->select('postimage.postimage_name')
                                    ->first();
                                    $taskvideoimp = DB::table('postvideo')
                                    ->where('post_id','=',$getrecentmostimportats->post_id)
                                    ->where('status_id','=',1)
                                    ->select('postvideo.video_name')
                                    ->first();
                                    $taskembedvideoimp = $getrecentmostimportats->post_videolink;
                                    if (!empty($taskimageimp)) {
                                        $getimageimp = $taskimageimp->postimage_name;
                                    }else{
                                        $getimageimp = "";
                                    }
                                    // if (isset($taskvideo)) {
                                    if(!empty($taskvideoimp)){
                                        $getvideoimp = $taskvideoimp->video_name;
                                    }else{
                                        $getvideoimp = "";
                                    }
                                    if ($getimageimp != "") {
                                    ?>
                                    <figure class="post-thumb ahm_three_post_thumb">
                                        <img src="{{ URL::to('public/postimages/')}}/{{$getrecentmostimportats->post_id}}/{{$getimageimp}}" alt="">
                                    </figure>
                                    <?php
                                    }elseif ($getvideoimp != "") {
                                    ?>
                                    <video controls>
                                        <source src="{{ URL::to('public/postvideos/')}}/{{$getrecentmostimportats->post_id}}/{{$getvideoimp}}"
                                            type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <?php
                                    }else{
                                    ?>
                                    {!! taskembedvideoimp !!}
                                    <?php
                                    }
                                    ?>
                                    <p>{{$getrecentmostimportats->post_description}}</p>
                                </div>
                            @endforeach
                            <?php
                            }
                            ?>
                            </div>
                        <div class="our_androId_app">
                                <h3>Download Our App</h3>
                                <a href="">
                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png" alt="">
                                    <img src="public/kw_assets/images/playstore/play-store.png" alt="">
                                    <p>Get our app on <br> <span>Google Play</span></p>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <section id="ahm_loginin_with_section">
                <div class="popup text-center">
                    <button class="ahm_close">X</button>
                    <figure>
                        <img src="public/kw_assets/images/extras/Logos/ms-icon-310x310.png" alt="">
                    </figure>
                    <h1 class="text-ceter">Login</h1>
                    <a class="ahm_with_facebook" href="{{ url('/redirect/facebook') }}">Login with Facebook</a>
                    <a class="ahm_with_google" href="{{ url('/auth/redirect/google') }}">Login with Google</a>
                    <a class="ahm_info_link" href="">info@khabarwala.pk</a>
                </div>
            </section>
        </div>
        <!--  -->

    </main>
        
    <div class="logo_section">
        <img src="public/kw_assets/images/footer/logo.gif" alt="">
    </div>
        <footer>
            <div class="news_section">
                <div class="headline">
                    <h5><?php echo(date('h:i A'))?> : <?php echo(date('D'))?></h5>
                    <h3 class="headline_content"><span>Breaking News</span></h3>
                </div>
                <div class="news_detail">
                    <h4>news</h4>
                    <?php
                    $latestnewstitle = DB::table('post')
                    ->where('status_id','=',1)
                    ->select('post.post_title')
                    ->orderByDesc('post_id')
                    ->limit(5)
                    ->get();
                    if(isset($latestnewstitle)) {
                        $getlatestnewstitle =  array();
                        foreach ($latestnewstitle as $latestnewstitles) {
                            $getlatestnewstitle[] = $latestnewstitles->post_title;
                        }
                        $fotertitles = implode("<span>~~~~~~</span>",$getlatestnewstitle);
                    }
                    ?>
                    <marquee>{!!$fotertitles!!}</marquee>
                </div>

            </div>
        </footer>

<div id ='modals'></div>
    </div>
    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <!-- <i class="bi bi-finger-index"></i> -->
        <i class="fas fa-arrow-up"></i>
    </div>
   

    <!-- Scroll to Top End -->

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="public/kw_assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="public/kw_assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="public/kw_assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="public/kw_assets/js/vendor/bootstrap.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="public/kw_assets/js/plugins/slick.min.js"></script>
    <!-- nice select JS -->
    <script src="public/kw_assets/js/plugins/nice-select.min.js"></script>
    <!-- audio video player JS -->
    <script src="public/kw_assets/js/plugins/plyr.min.js"></script>
    <!-- perfect scrollbar js -->
    <script src="public/kw_assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- light gallery js -->
    <script src="public/kw_assets/js/plugins/lightgallery-all.min.js"></script>
    <!-- image loaded js -->
    <script src="public/kw_assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- isotope filter js -->
    <script src="public/kw_assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- jquery autosize -->
    <script src="public/kw_assets/js/vendor/jquery_auto_resize.js"></script>
    <!-- owl carousel -->
    <script src="public/kw_assets/js/plugins/owl.carousel.min.js"></script>
    <!-- Main JS -->
    <script src="public/kw_assets/js/main.js"></script>
    <script>
        function viewpostdetails($id){
            $.get('{{ URL::to("/viewpostdetails")}}/'+$id,function(data){
            $('#modals').empty().append(data);
            $('#requestview').modal('show');
            $.getScript("public/kw_assets/js/postdetails.js");
            });
        }
      
                $('#modals').on('submit','#frmsubmitpostdetailcomment',function(e){
                    e.preventDefault();
                    $("#btnsubmit").attr("disabled", true);
                    var frmData = $(this).serialize();
                 
                    $.ajax({
                        url:'{{ URL::to("/submitdetailcomment")}}',
                        type:'POST',
                        data: frmData,
                        dataType: 'json',
                        success : function (data){
                            console.log(data.no);
                            $("#loader").hide();
                            $("#messagecomment").append('<p class="alert alert-success">'+(data.no)+ '</p>');
                         // $("#errors").addClass("alert-success").text('Task added successfully...!');
                            
                            setTimeout(function(){$("#requestview").modal('hide');
                                            // window.location = "{{ URL::to('/webpost')}}";
                                          }, 5000);
        
                         },
                         error : function(error){
                            console.log(error);
                            // $("#loader").hide();
                            var error = error.responseJSON;
                            $("#modals #errors").empty();
                            $("#messagecomment").append('<p class="alert alert-danger">Oops Somenthing went wrong</p>');
                            
                            setTimeout(function(){$("#requestview").modal('hide');
                            // window.location = "{{ URL::to('/webpost')}}";
                                             }, 5000);
                         }
                    })
                });
        $('#search').keyup(function(){
         
          // Search text
          var text = $(this).val();
         
          // Hide all content class element
          $('.content').hide();

          // Search and show
          $('.content:contains("'+text+'")').show();
         
         });
        function submitcomment($id){
            $cmt = $('#comment-'+$id).val();
            $.get('{{ URL::to("/submitcomment")}}/'+$id+'/'+$cmt);
        }
        function getdislikeclientip($id){
            $.get('{{ URL::to("/getdislikeclientip")}}/'+$id);
        }
        function getlikeclientip($id){
            $.get('{{ URL::to("/getlikeclientip")}}/'+$id);
        }
        function loadonajex($id)
        {
                $('#loadingimage').show();
                $.ajax(

            {

                url: '{{ URL::to("/categorieswebpost")}}/'+$id,

                type: 'GET',

            }).done( 

                function(data) 

                {

                    $('.test').append(data.html);
                    $('#loadingimage').hide();


                }

            );
            $('#btn-moresdsd').css('display', 'none');
            $('#btn-'+$id).css('display', 'none');
        }
        $(document).ready(function () {
            $('marquee span').css('color', 'white')
            $('textarea').autoResize();
            $(document).ready(function () {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                })
            });

            $('marquee span').css('color', 'transparent')
            // login popup
            $('#ahm_loginin_with_section').hide()
            $('.login-call').click(function () {
                $('#ahm_loginin_with_section').fadeIn()
            })
            $('#ahm_loginin_with_section .ahm_close').click(function () {
                $('#ahm_loginin_with_section').fadeOut()
            });

            // login popup
            $('#ahm_loginin_with_section').hide()
            $('.login-call').click(function () {
                $('#ahm_loginin_with_section').fadeIn()
            })
            $('#ahm_loginin_with_section .ahm_close').click(function () {
                $('#ahm_loginin_with_section').fadeOut()
            });
            // like dislike 
            $('.post-meta-like, .post-meta-dislike').click(function () {
                if ($(this).children('i,span').hasClass('primary_color_class')) {
                    $(this).children('i,span').removeClass('primary_color_class');
                    $('.post-meta-like .current-user-action, .post-meta-dislike .current-user-action')
                        .text('');
                } else {
                    $(this).parent().children('button').children('i,span').removeClass(
                        'primary_color_class');
                    $('.post-meta-like .current-user-action,.post-meta-dislike .current-user-action')
                        .text('');
                    $(this).children('i,span').addClass('primary_color_class');
                    $('.current-user-action', this).text('You +')
                }
            })


            // comment
            $('.comment-btn').click(function () {
                var test1 = $(this).parentsUntil('.ahm_new-comment').children('.ahm_text').children(
                    '.comment_textarea')
                if (test1.val() != '') {
                    var c_body = $(this).parentsUntil('.ahm_comments_body').children(
                        '.ahm_comments_body')
                    var c2 = $(this).parentsUntil('.ahm_comments_body').children(
                        '.ahm_comments_body').children('.ahm_single-comment')[1]
                    c_body.html(c2)
var imgSrc = $(this).parentsUntil('.ahm_new-comment').find('img').attr('src')
                    var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1;
                    var yyyy = today.getFullYear();
                    if (dd < 10) {
                        dd = '0' + dd;
                    }
                    if (mm < 10) {
                        mm = '0' + mm;
                    }
                    today = dd + '-' + mm + '-' + yyyy;

                    var username = "<?php echo (session()->get('name'));?>"


                    var test =
                        '<div class="ahm_single-comment"><div class="ahm_comment_content d-flex"><div class="ahm_comment_image"><div class="profile-thumb"><a href="#"><figure class="profile-thumb-middle"><img src="' +
                        imgSrc +
                        '" alt="profile picture"></figure></a></div></div><div class="ahm_comment_text"><div class="d-flex align-items-center"><h6 class="author"><a href="profile.html">' +
                        username + '</a></h6><span class="ml-auto">' +
                        today + '</span></div><p>' +
                        test1.val() + '</p></div></div></div>'

console.log(test1.val())

                    test1.val('')
                    var c2 = $(this).parentsUntil('.ahm_comments_body').children('.ahm_comments_body')
                        .append(test)
                }

            });
            // moduleComment
        moduleComment("#ahm_card_1", "ahmer", "aa", "ahmer");
        function moduleComment(that, img, username, text) {
          var today = new Date();
          var dd = today.getDate();
          var mm = today.getMonth() + 1;
          var yyyy = today.getFullYear();
          if (dd < 10) dd = "0" + dd;
          if (mm < 10) mm = "0" + mm;
          today = dd + "-" + mm + "-" + yyyy;

          //   var username = "ahmer";
          //   var img = "aa";
          //   var text = "ahmer";

          var c2 = $(that).find(".ahm_single-comment")[1];
          var c_body = $(that).find(".ahm_comments_body");
          var newC =
            '<div class="ahm_single-comment"><div class="ahm_comment_content d-flex"><div class="ahm_comment_image"><div class="profile-thumb"><a href="#"><figure class="profile-thumb-middle"><img src="' +
            img +
            '" alt="profile picture"></figure></a></div></div><div class="ahm_comment_text"><div class="d-flex align-items-center"><h6 class="author"><a href="profile.html">' +
            username +
            '</a></h6><span class="ml-auto">' +
            today +
            "</span></div><p>" +
            text +
            "</p></div></div></div>";
          c_body.html(c2).append(newC);
        }


            // ahm_three_post_dom_manipulation
            $('.ahm_three_post_dom_manipulation').map(function () {
                console.log($(this).children().length)
                console.log($(this).children())
                var obj = $(this).children()
                var length = $(this).children().length
                if (length > 0) {
                    var element_one = obj[0].outerHTML;
                    $(this).html(
                        '<div class="col-8"><figure class="post-thumb ahm_three_post_thumb">' +
                        obj[0].outerHTML +
                        '</figure></div>'
                    )
                }
                if (length > 1) {
                    var element_two = obj[1].outerHTML;
                    $(this).append(
                        '<div class="col-4"><div class="row"></div></div>'
                    )

                    $(this).find('.row').append(
                        '<div class="col-12"><figure class="post-thumb ahm_three_inner_post_thumb">' +
                        element_two +
                        '</figure></div>'
                    )
                }
                if (length > 2) {
                    var element_three = obj[2].outerHTML;
                    $(this).find('.row').append(
                        '<div class="col-12"><figure class="post-thumb ahm_three_inner_post_thumb">' +
                        element_three +
                        '</figure></div>'
                    )
                }
            })
            // ahm_four_post_dom_manipulation
            $('.ahm_four_post_dom_manipulation').map(function () {
                var obj = $(this).children()
                var length = $(this).children().length
                if (length > 0) {
                    var element_one = obj[0].outerHTML;
                    $(this).html(
                        '<div class="col-8"><figure class="post-thumb ahm_four_post_thumb">' +
                        obj[0].outerHTML +
                        '</figure></div>'
                    )
                }
                if (length > 1) {
                    var element_two = obj[1].outerHTML;
                    $(this).append(
                        '<div class="col-4"><div class="row"></div></div>'
                    )

                    $(this).find('.row').append(
                        '<div class="col-12"><figure class="post-thumb ahm_four_inner_post_thumb">' +
                        element_two +
                        '</figure></div>'
                    )
                }
                if (length > 2) {
                    var element_three = obj[2].outerHTML;
                    $(this).find('.row').append(
                        '<div class="col-12"><figure class="post-thumb ahm_four_inner_post_thumb">' +
                        element_three +
                        '</figure></div>'
                    )
                }
                if (length > 3) {
                    var element_four = obj[3].outerHTML;
                    $(this).find('.row').append(
                        '<div class="col-12"><figure class="post-thumb ahm_four_inner_post_thumb">' +
                        element_four +
                        '</figure></div>'
                    )
                }
            })
        });
    </script>
</body>

</html>