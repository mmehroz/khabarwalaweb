<?php
$getpath = DB::table('directory')
->select('directory.directory_path')
->get();
$senddata = $getpath[0]->directory_path;
$profileimage = $data['userinfo']->avatar;
$combineimgandpath = $senddata.$profileimage;

$sendcover = $getpath[1]->directory_path;
$coverimage = $data['userinfo']->cover;
$combinecoverimgandpath = $sendcover.$coverimage;

$vid = $data['postvideo'];
$sendvideo = $getpath[2]->directory_path;
$videosrc = array();
foreach ($vid as $vids) {
	$videosrc[] = $vids->post_video;
}
?>
<style>
	.profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url({{$combinecoverimgandpath}});
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background: linear-gradient(to right, #e96443, #904e95);
    min-height: 100vh
}
</style>
<link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<div class="row py-5 px-4">
    <div class="col-xl mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="{{$combineimgandpath}}" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="" class="btn btn-outline-dark btn-sm btn-block">User profile</a></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">{{$data['userinfo']->name}}</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>{{$data['userinfo']->email}}</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">{{$data['userinfo']->post}}</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Posts</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">{{$data['userinfo']->followers}}</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">{{$data['userinfo']->following}}</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">About</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">{{$data['userinfo']->phone}}</p>
                    <p class="font-italic mb-0">{{$data['userinfo']->city}}</p>
                </div>
            </div>
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent Post</h5><a href="" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
        	    @if($videosrc != "")
                    <?php
                    foreach ($videosrc as $videosrcs){
                        
                    ?>
                    <div class="col-lg-3"><video width="40%"  autoplay muted loop>
                            <source src="{{$sendvideo}}{{$videosrcs}}.webm" type="video/webm" />
                            Your browser does not support the video tag.
                    </video></div>
                  	<?php
                       }
                  	?>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>