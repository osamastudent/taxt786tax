<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--============== booot5 =============-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- font awesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


  <!-- _____ Slick Slider _____ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">

  <!-- boot -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- css -->
  <link rel="stylesheet" href="/index.css">
  <link rel="stylesheet" href="/cssfolder/video-page-sidebar.css">


  <link rel="icon" href="{{asset('logotitle3.jpg')}}">
  <title>videos Slug</title>
</head>

<body>

  @include('navbar')

  <hr class="hr3" id="hr3" style="display: none;">
  <hr class="hr4" id="hr4">

  <hr class="hr2" id="hr2">


  <!-- container start -->
  <div class="container">
    <div class="container">

     <!-- row Featured Videos heading start -->
     <div class="row mt-5">
        <div class="col-lg-3 col-6 col-md-6 col-sm-6">
          <h5 class="popular-heading"> Featured Videos</h5>
        </div>
      </div>
      <!-- row Featured Videos heading  end-->

      <!-- row start -->
      <div class="row mt-lg-1 mt-1 mt-sm-1 mt-md-1 mt-xl-0 mt-xxl-0">
        <div class="col-12">
          <div class="progress myprogress">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div><!-- row end -->


      <div class="row  featured-videos" style="position: static;">

@if($homevideo->count() > 0)
@foreach($homevideo as $values)

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5" style="position: static;">
  <div class="card video-card" style="position: static;">
    <iframe class="iframe" width="100%" height="100%" src="{{$values->video_link}}" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="card-body video-card-body">
    <a href="/videos-slug/{{$values->video_title.'/'.$values->id}}" target="_blank">
      <p class="video-card-title">{{$values->video_title}}</p>
      <p class="video-card-description">{{$values->video_description}}</p>
    </a>
    </div>
  </div>
</div>
@endforeach
@else
<span class="text-center">No Video Available</span>
@endif
</div>



      <!-- row start -->
      <div class="row mt-lg-1 mt-1 mt-sm-1 mt-md-1 mt-xl-0 mt-xxl-0">
        <div class="col-12">
          <div class="progress myprogress">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div><!-- row end -->









      <!-- both-sections-container start -->
      <div class="both-sections-container d-lg-flex ">
        <!-- section-one start -->
        <div class="section-one mt-5 mb-0">
          <!-- row popular video heading -->
          <div class="row">
            <div class="col-lg-3 col-6 col-md-6 col-sm-6">
              <h5 class="popular-heading">Popular Videos</h5>
            </div>

            <div class="col-lg-5  popular-video-text">
              <span class="mt-5">Recent</span>
              <span class="mx-4">TAX FILING</span>
              <span>NTN REGISTRATION</span>

            </div>

            <div class="col-12 col-lg-4 col-6 col-md-12 col-sm-12 ">
            <form action="{{route('videoSearch')}}" method="GET">
                <div class="input-group ">
                  <input type="text" name="video_search" class="form-control" placeholder="Search Videos" style="height: 30px;">
                  <button class=" btn-danger">Search</button>
                </div>
              </form>
            </div>
          </div><!-- row popular video heading end -->

          <!-- row start -->
          <div class="row mt-lg-1 mt-1 mt-sm-1 mt-md-1 mt-xl-0 mt-xxl-0">
            <div class="col-12">
              <div class="progress myprogress">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div><!-- row end -->



          <!-- row start -->
          <div class="row mt-1 featured-videos">

            @if($viewsData->count() > 0)


            <div class="col-12 ">
              <div class="card border-0">

                <div class="card-title mt-1">
                  <h2 class="blog-name">{{$viewsData->video_title}}</h2>
                </div>

                <p class="posted-date">{{$viewsData->created_at->format('F j, Y') }} / 786Tax</p>

                <iframe class="iframe" width="100%" height="350px" id="playvideo" src="{{$viewsData->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


                <!-- <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-imae changeinvideo" height="100%" width="100%"> -->



                <div class="card-body p-0">
                  <p class="video-description mt-2">{{$viewsData->video_description}}</p>
                  <!-- <p>Views: {{ $viewsData->views }}</p> -->

                </div>
              </div>
            </div>
            @else
            <span class="text-center">No Video Available</span>
            @endif
          </div>
          <!-- row end -->

        </div><!-- section-one end -->


         <!-- section-two start -->
         <div class="section-two">
          <!-- stick-card start -->
          <div class="sticky-card">

            <!-- row start -->
            <div class="row">
              <div class="col-12">
                <h5 class="top-trending-heading">Top Trending</h5>
              </div>

              <div class="col-12">
                <div class="progress myprogress">
                  <div class="progress-bar bg-dark" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

              </div>
            </div>
            <!-- row end -->

            <!-- row start   -->
            <div class="row mt-3">
              @foreach($topTrending as $indexx=> $topTrendingValues)
              <div class="col-6 mt-2 ">
                <iframe class="iframe" width="100%" height="100%" id="playvideotwo{{$indexx}}" src="{{$topTrendingValues->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="display: none;"></iframe>

                <div class="position-relative d-inline-block mt-2" style="height: 80px; width:100%">
                  <a href="{{$topTrendingValues->video_link}}">
                    <img src="{{ asset('videosimages/'.$topTrendingValues->video_image) }}" class="changeimageidtwo" width="100%" height="100%" />
                  </a>
                  <a href="{{$topTrendingValues->video_link}}" class="popular-link">
                    <span id="youtube-btn-icon-span-tagtwo{{$indexx}}" class="position-absolute bottom-0 youtube-btn-icon-span-tag end-0 m-1 bg-dark text-light p-2 rounded-circle">
                      <i class="fab fa-youtube youtubebtnicontwo"></i>
                    </span>
                  </a>
                </div>
              </div>

              <div class="col-6 mt-2 justify-content-start">
              <p class="video-card-title-top-trending" >
                <span class="popular-link">
                <a href="{{$topTrendingValues->video_link}}" >
                  {{$topTrendingValues->video_title}}
                  </a>
                </span>
                </p>
                <p class="video-card-description-top-trending">

                <span class="popular-link">
                <a href="{{$topTrendingValues->video_link}}" >
                {{$topTrendingValues->video_description}}  
                </a>
                </span>
              </p>
              
              </div>

              @endforeach
            </div>
            <!-- row end   -->


            <!-- row start   -->
            <div class="row">
              <div class="col-12">
                <h5 class="videos-page-category-title mt-5">Videos Category</h5>
                <div class="progress " style="height: 5px;">
                  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 15%; height: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="video-category-btn-area mt-2">
                  @foreach($videoCategory as $videoCategoryValues)
                  <a href="/videos-by-category/{{$videoCategoryValues->id}}" class="btn  mx-1 my-2 py-1 mt-0  border bg-danger text-light rounded-pill" style="text-transform: capitalize;">{{$videoCategoryValues->name}}</a>
                  @endforeach
                </div>
              </div>
            </div>
            <!-- row end   -->

          </div> <!-- stick-card end -->
        </div><!-- section-two end -->



      </div><!-- both-sections-container end -->

    </div>
    <!-- contain end here -->
  </div>
  <!-- contain end here -->

  <script>
    var changeinvideoImages = document.querySelectorAll('.changeinvideo');

    changeinvideoImages.forEach(function(image, index) {
      image.addEventListener("click", function() {
        var playvideo = document.getElementById('playvideo' + index);
        playvideo.style.display = "block";
        image.style.display = "none";
      });
    });
  </script>

  <footer>
    @include('footer') <!-- Include the footer -->
  </footer>