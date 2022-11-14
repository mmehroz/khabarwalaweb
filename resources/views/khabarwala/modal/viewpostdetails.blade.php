<div id="requestview" class="ahm_layer_two">
    <div class="ahm_layer_overlay">
        <div class="ahm_layer_content container">
        	<?php
                            $nowdatetime = date('Y-m-d h:i:s');
                            $postdatetime = $data->created_at;
                            $date_a = new DateTime($postdatetime);
                            $date_b = new DateTime($nowdatetime);
                            $interval = date_diff($date_a,$date_b);
                            $gettime =  $interval->format('%hh:%im');
                            $taskimage = DB::table('postimage')
                            ->where('post_id','=',$data->post_id)
                            ->where('status_id','=',1)
                            ->select('postimage.postimage_name')
                            ->get();
                            $taskvideo = DB::table('postvideo')
                            ->where('post_id','=',$data->post_id)
                            ->where('status_id','=',1)
                            ->select('postvideo.video_name')
                            ->get();
                            $taskembedvideo = $data->post_videolink;
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
                        
                        ?>
            <div class="row pt-4 pb-4">
                <div class="col-8 h-100">
                	<h1 class="ahm_post-title">{{$data->post_title}}</h1>
                    <div class="owl-carousel owl-theme ahm_layer_two_owl_carousel text-center ">
                    	@if($getimage != "")
                                <?php
                                foreach ($getimage as $taskimages){
                                    $image = $taskimages->postimage_name;
                                ?>
                                <div class="item">
                                	<img src="{{ URL::to('public/postimages/')}}/{{$data->post_id}}/{{$image}}" alt="">
                            	</div>
                                <?php
                                }
                                ?>
                                @endif
                                @if($getvideo != "")
                                <?php
                                foreach ($getvideo as $taskvideos){
                                    $video = $taskvideos->video_name;
                                ?>
                                <div class="item">
	                                <video controls>
	                                    <source src="{{ URL::to('public/postvideos/')}}/{{$data->post_id}}/{{$video}}"
	                                        type="video/mp4">
	                                    Your browser does not support the video tag.
	                                </video>
                            	</div>
                                <?php
                                }
                                ?>
                                @endif
                                @if($taskembedvideo != "")
                                <div class="item">
	                                <div class="plyr__video-embed plyr-youtube">
	                                    {!! $taskembedvideo !!}
	                                </div>
                            	</div>
                                @endif
                    </div>
                </div>
                <div class="col-4 h-100">
                    <div class="ahm_comment_content">
                        <div class="ahm_post_header d-flex">
                            <div class="post-title d-flex align-items-center ">
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
                        </div>
                        <div class="ahm_post_detail">
                        	<p>{{$data->post_description}}</p>
                        </div>
                        <div class="ahm_comment_container">
                            <div class="ahm_comments_body layer_two_comments_body">
                                <!-- single comment -->
                                	<?php
                            $getcomment =  DB::table('postcomment')
                                            ->join('siteusers','siteusers.siteusers_email', '=','postcomment.siteusers_email')
                                            ->where('postcomment.post_id','=',$data->post_id)
                                            ->where('postcomment.status_id','=',1)
                                            ->select('postcomment.postcomment_comment','postcomment.created_at','siteusers.siteusers_name','siteusers.siteusers_image')
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
                            </div>
                           <div class="ahm_new-comment">
                                <div class="ahm_new-comment-content d-flex align-items-start">
                                    <div class="profile-thumb">
                                        <a href="#">
                                        	<input type="hidden" id="ahm_user_id" name="" value="{{session()->get('name')}}">
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
                                    <form action="{{ URL::to('/submitdetailcomment')}}" id="frmsubmitpostdetailcomment" method="POST" >
                                    {{ csrf_field() }}
                                    <input type="hidden" name="hdnpostid" value="{{$data->post_id}}">
                                    <div class="ahm_text">
                                        <textarea class="comment_textarea ahm_card_{{$data->post_id}}" name="postcomment" id="" cols="" rows="1"
                                            placeholder="Type your comment..."></textarea>
                                    </div>
                                    <button type="submit" id="btnsubmit"  class="comment-btn">
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                    </form>
                                    @else
                                    <button class="login ml-auto login-call">
                                        Login To Comment
                                    </button>
                                    @endif
                                </div>
                                <div id="messagecomment"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>