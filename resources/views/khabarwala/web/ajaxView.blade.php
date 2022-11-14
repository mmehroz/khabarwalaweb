
                        @foreach ($data as $val)
                        <?php
                            $nowdatetime = date('Y-m-d h:i:s');
                            $postdatetime = $val->created_at;
                            $date_a = new DateTime($postdatetime);
                            $date_b = new DateTime($nowdatetime);
                            $interval = date_diff($date_a,$date_b);
                            $gettime =  $interval->format('%hh:%im:%sseconds');
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
                            // dd($sumimageandvideo);
                        ?>
                        <!-- post status start -->
                        <!-- One Start -->
                        
                        <!-- post status start -->
                        @if($sumimageandvideo == 1)
                        <div class="card">
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
                                    <span class="post-time">{{$gettime}} ago</span>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <h3 class="ahm_post_title mb-2">{{$val->post_title}}</h3>
                                <p class="post-desc">
                              	{{$val->post_description}}
                                </p>
                                <!-- ahm image/video container  -->
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
                                <!-- ahm image/video container end -->
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="far fa-thumbs-up"></i>
                                        <span>50</span>
                                    </button>
                                    <button class="post-meta-dislike ml-4">
                                        <i class="far fa-thumbs-down"></i>
                                        <span>50</span>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <!-- <i class="bi bi-chat-bubble"></i> -->
                                                <i class="far fa-comments"></i>
                                                <span>36</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="far fa-share"></i>
                                                <span>08</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- comment start from here -->
                            <div class="ahm_comment_container">
                                <div class="comment-header d-flex align-items-center">
                                    <button>Veiw 8 more Comments </button>
                                </div>
                                <div class="ahm_comments_body">
                                    <!-- single comment -->
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="public/kw_assets/images/profile/profile-small-29.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">Kate Palson</a>
                                                    </h6>
                                                    <span class="ml-auto">12-Jan-2020</span>
                                                </div>
                                                <p>Ut wisi enim ad mdasdasdas asdsad asd asds
                                                    adasdsad asdasd sdasdinim laoreet dolore magna aliquam erat</p>
                                            </div>
                                        </div>
                                        <!-- <div class="ahm_comment_status text-right">
                                            <button class="comment-like">
                                                <i class="far fa-thumbs-up"></i>
                                                <span>15</span>
                                            </button>
                                            <button class="comment-dislike ml-4">
                                                <i class="far fa-thumbs-down"></i>
                                                <span>1</span>
                                            </button>
                                        </div> -->
                                    </div>
                                    <!-- single comment end -->
                                    <!-- single comment -->
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="public/kw_assets/images/profile/profile-small-29.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">Stella Johnson</a>
                                                    </h6>
                                                    <span class="ml-auto">12-Jan-2020</span>
                                                </div>
                                                <p>Ut wisi enim ad minim laoreet dolore David </p>
                                            </div>
                                        </div>
                                        <!-- <div class="ahm_comment_status text-right">
                                            <button class="comment-like">
                                                <i class="far fa-thumbs-up"></i>
                                                <span>8</span>
                                            </button>
                                            <button class="comment-dislike ml-4">
                                                <i class="far fa-thumbs-down"></i>
                                                <span>0</span>
                                            </button>
                                        </div> -->
                                    </div>
                                    <!-- single comment end -->
                                </div>
                                <div class="ahm_new-comment">
                                    <div class="ahm_new-comment-content d-flex align-items-start">
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="ahm_text">
                                            <textarea name="" id="" cols="" rows="1"
                                                placeholder="Write your comment..."></textarea>
                                        </div>
                                        <button class="comment-btn">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- comment start end-->
                        </div>
                        @endif
                        <!-- post status end -->

                        <!-- post status start -->
                        @if($sumimageandvideo == 2)
                        <div class="card">
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
                                    <span class="post-time">{{$gettime}} ago</span>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <h3 class="ahm_post_title mb-2">{{$val->post_title}}</h3>
                                <p class="post-desc">
                                    {{$val->post_description}}
                                </p>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters">
                                        
                                                <!-- <iframe src="https://www.youtube.com/embed/WeA7edXsU40"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe> -->
                                                <!-- <img src="public/kw_assets/images/post/photo.webp" alt=""> -->
                                                @if($getvideo != "")
                                                <?php
				                                foreach ($getvideo as $taskvideos){
				                                	$image = $taskvideos->video_name;
				                                ?>
                                        <div class="col-6">
                                            <figure class="post-thumb ahm_two_post_thumb">
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
                                                <!-- ahm image/video container end -->
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="far fa-thumbs-up"></i>
                                        <span>50</span>
                                    </button>
                                    <button class="post-meta-dislike ml-4">
                                        <i class="far fa-thumbs-down"></i>
                                        <span>50</span>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <!-- <i class="bi bi-chat-bubble"></i> -->
                                                <i class="far fa-comments"></i>
                                                <span>36</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="far fa-share"></i>
                                                <span>08</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ahm_comment_container">
                                <div class="comment-header d-flex align-items-center">
                                    <button>Veiw 8 more Comments </button>
                                </div>
                                <div class="ahm_comments_body">
                                    <!-- single comment -->
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="public/kw_assets/images/profile/profile-small-29.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">Kate Palson</a>
                                                    </h6>
                                                    <span class="ml-auto">12-Jan-2020</span>
                                                </div>
                                                <p>Ut wisi enim ad mdasdasdas asdsad asd asds
                                                    adasdsad asdasd sdasdinim laoreet dolore magna aliquam erat</p>
                                            </div>
                                        </div>
                                        <!-- <div class="ahm_comment_status text-right">
                                            <button class="comment-like">
                                                <i class="far fa-thumbs-up"></i>
                                                <span>15</span>
                                            </button>
                                            <button class="comment-dislike ml-4">
                                                <i class="far fa-thumbs-down"></i>
                                                <span>1</span>
                                            </button>
                                        </div> -->
                                    </div>
                                    <!-- single comment end -->
                                    <!-- single comment -->
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="public/kw_assets/images/profile/profile-small-29.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">Stella Johnson</a>
                                                    </h6>
                                                    <span class="ml-auto">12-Jan-2020</span>
                                                </div>
                                                <p>Ut wisi enim ad minim laoreet dolore David </p>
                                            </div>
                                        </div>
                                        <!-- <div class="ahm_comment_status text-right">
                                            <button class="comment-like">
                                                <i class="far fa-thumbs-up"></i>
                                                <span>8</span>
                                            </button>
                                            <button class="comment-dislike ml-4">
                                                <i class="far fa-thumbs-down"></i>
                                                <span>0</span>
                                            </button>
                                        </div> -->
                                    </div>
                                    <!-- single comment end -->
                                </div>
                                <div class="ahm_new-comment">
                                    <div class="ahm_new-comment-content d-flex align-items-start">
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="ahm_text">
                                            <textarea cols="" rows="1" placeholder="Write your comment..."
                                                style="resize: none; overflow-y: hidden; position: absolute; top: 0px; left: -9999px; height: 43px; width: 602.641px; line-height: 23.8px; text-decoration: none solid rgb(0, 0, 0); letter-spacing: 0px;"
                                                tabindex="-1"></textarea><textarea name="" id="" cols="" rows="1"
                                                placeholder="Write your comment..."
                                                style="resize: none; overflow-y: hidden;"></textarea>
                                        </div>
                                        <button class="comment-btn">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- post status end -->
                        @if($sumimageandvideo == 3)
                        <div class="card">
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
                                    <span class="post-time">{{$gettime}} ago</span>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
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
                                    <button class="post-meta-like">
                                        <i class="far fa-thumbs-up"></i>
                                        <span>50</span>
                                    </button>
                                    <button class="post-meta-dislike ml-4">
                                        <i class="far fa-thumbs-down"></i>
                                        <span>50</span>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <!-- <i class="bi bi-chat-bubble"></i> -->
                                                <i class="far fa-comments"></i>
                                                <span>36</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="far fa-share"></i>
                                                <span>08</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ahm_comment_container">
                                <div class="comment-header d-flex align-items-center">
                                    <button>Veiw 8 more Comments </button>
                                </div>
                                <div class="ahm_comments_body">
                                    <!-- single comment -->
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="public/kw_assets/images/profile/profile-small-29.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">Kate Palson</a>
                                                    </h6>
                                                    <span class="ml-auto">12-Jan-2020</span>
                                                </div>
                                                <p>Ut wisi enim ad mdasdasdas asdsad asd asds
                                                    adasdsad asdasd sdasdinim laoreet dolore magna aliquam erat</p>
                                            </div>
                                        </div>
                                        <!-- <div class="ahm_comment_status text-right">
                                            <button class="comment-like">
                                                <i class="far fa-thumbs-up"></i>
                                                <span>15</span>
                                            </button>
                                            <button class="comment-dislike ml-4">
                                                <i class="far fa-thumbs-down"></i>
                                                <span>1</span>
                                            </button>
                                        </div> -->
                                    </div>
                                    <!-- single comment end -->
                                    <!-- single comment -->
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="public/kw_assets/images/profile/profile-small-29.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">Stella Johnson</a>
                                                    </h6>
                                                    <span class="ml-auto">12-Jan-2020</span>
                                                </div>
                                                <p>Ut wisi enim ad minim laoreet dolore David </p>
                                            </div>
                                        </div>
                                        <!-- <div class="ahm_comment_status text-right">
                                            <button class="comment-like">
                                                <i class="far fa-thumbs-up"></i>
                                                <span>8</span>
                                            </button>
                                            <button class="comment-dislike ml-4">
                                                <i class="far fa-thumbs-down"></i>
                                                <span>0</span>
                                            </button>
                                        </div> -->
                                    </div>
                                    <!-- single comment end -->
                                </div>
                                <div class="ahm_new-comment">
                                    <div class="ahm_new-comment-content d-flex align-items-start">
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="ahm_text">
                                            <textarea cols="" rows="1" placeholder="Write your comment..."
                                                style="resize: none; overflow-y: hidden; position: absolute; top: 0px; left: -9999px; height: 43px; width: 602.641px; line-height: 23.8px; text-decoration: none solid rgb(0, 0, 0); letter-spacing: 0px;"
                                                tabindex="-1"></textarea><textarea name="" id="" cols="" rows="1"
                                                placeholder="Write your comment..."
                                                style="resize: none; overflow-y: hidden;"></textarea>
                                        </div>
                                        <button class="comment-btn">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- post status start -->
                     
                        <!-- post status end -->

                        <!-- post status start -->
                        @if($sumimageandvideo >= 4)

                        <div class="card">
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
                                    <span class="post-time">{{$gettime}} ago</span>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
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
                                    <button class="post-meta-like">
                                        <i class="far fa-thumbs-up"></i>
                                        <span>50</span>
                                    </button>
                                    <button class="post-meta-dislike ml-4">
                                        <i class="far fa-thumbs-down"></i>
                                        <span>50</span>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <!-- <i class="bi bi-chat-bubble"></i> -->
                                                <i class="far fa-comments"></i>
                                                <span>36</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="far fa-share"></i>
                                                <span>08</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ahm_comment_container">
                                <div class="comment-header d-flex align-items-center">
                                    <button>Veiw 8 more Comments </button>
                                </div>
                                <div class="ahm_comments_body">
                                    <!-- single comment -->
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="public/kw_assets/images/profile/profile-small-29.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">Kate Palson</a>
                                                    </h6>
                                                    <span class="ml-auto">12-Jan-2020</span>
                                                </div>
                                                <p>Ut wisi enim ad mdasdasdas asdsad asd asds
                                                    adasdsad asdasd sdasdinim laoreet dolore magna aliquam erat</p>
                                            </div>
                                        </div>
                                        <!-- <div class="ahm_comment_status text-right">
                                            <button class="comment-like">
                                                <i class="far fa-thumbs-up"></i>
                                                <span>15</span>
                                            </button>
                                            <button class="comment-dislike ml-4">
                                                <i class="far fa-thumbs-down"></i>
                                                <span>1</span>
                                            </button>
                                        </div> -->
                                    </div>
                                    <!-- single comment end -->
                                    <!-- single comment -->
                                    <div class="ahm_single-comment">
                                        <div class="ahm_comment_content d-flex">
                                            <div class="ahm_comment_image">
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="public/kw_assets/images/profile/profile-small-29.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ahm_comment_text">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="author"><a href="profile.html">Stella Johnson</a>
                                                    </h6>
                                                    <span class="ml-auto">12-Jan-2020</span>
                                                </div>
                                                <p>Ut wisi enim ad minim laoreet dolore David </p>
                                            </div>
                                        </div>
                                        <!-- <div class="ahm_comment_status text-right">
                                            <button class="comment-like">
                                                <i class="far fa-thumbs-up"></i>
                                                <span>8</span>
                                            </button>
                                            <button class="comment-dislike ml-4">
                                                <i class="far fa-thumbs-down"></i>
                                                <span>0</span>
                                            </button>
                                        </div> -->
                                    </div>
                                    <!-- single comment end -->
                                </div>
                                <div class="ahm_new-comment">
                                    <div class="ahm_new-comment-content d-flex align-items-start">
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="public/kw_assets/images/extras/Logos/android-icon-72x72.png"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="ahm_text">
                                            <textarea cols="" rows="1" placeholder="Write your comment..."
                                                style="resize: none; overflow-y: hidden; position: absolute; top: 0px; left: -9999px; height: 43px; width: 602.641px; line-height: 23.8px; text-decoration: none solid rgb(0, 0, 0); letter-spacing: 0px;"
                                                tabindex="-1"></textarea><textarea name="" id="" cols="" rows="1"
                                                placeholder="Write your comment..."
                                                style="resize: none; overflow-y: hidden;"></textarea>
                                        </div>
                                        <button class="comment-btn">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <button id="btn-{{ $val->post_id  }}" onclick="loadonajex({{ $val->post_id  }})"> Load More From View </button>