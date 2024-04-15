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
  <link rel="stylesheet" href="/cssfolder/blog-page-sidebar.css">


  <link rel="icon" href="{{asset('logotitle3.jpg')}}">
  <title>Getfiler - Income Tax Filing | NTN Registration | Tax Services</title>
</head>

<body>
  @include('navbar')

  <hr class="hr3" id="hr3" style="display: none;">
  <hr class="hr4" id="hr4">
  <hr class="hr2" id="hr2">


  <!-- container start -->
  <div class="container">




    <h2 class="blog-title">Blog Posts</h2>

    <!-- both-sections-container start -->
    <div class="both-sections-container d-lg-flex ">
      <!-- section-one start -->
      <div class="section-one mb-0">
        <!-- card start -->
        <div class="card mt-1 border-0">
          <div class="card-title mt-5">
          <h2 class="blog-name">{{$mydata->blog_title}}</h2>
          </div>
          <div class="card-body ">
            <p class="posted-date">{{$mydata->created_at->format('F j, Y')}}</p>
            <img src="{{asset('homepageblogs/'.$mydata->blog_image)}}" class="blog-slug-image " height="350px" width="100%">
            <p class="blog-description mt-2">
              {{$mydata->blog_description}}
            </p>
          </div>

        </div><!-- card end -->
      </div><!-- section-one end -->


       <!-- section-two start -->
       <div class="section-two  mt-0">
        <div class="sticky-card">

          <form action="{{url('Search-Blog')}}" method="GET">
            <div class="input-group d-flex mt-lg-5">
              <input type="text" name="search" value="{{$search}}" class="form-control" id="" placeholder="search">
              <button class="btn btn-dark text-light btn-outline-primary ">Search</button>
            </div>
          </form>

          <!--section-two card 1 start -->
          <div class="card bg-light  mt-2">

            <div class="card-title mt-2 mb-0">
              <span class="category-title  px-3 fs-5 ">Categories</spane>
            </div>
            <div class="card-body mt-0 bg-light">


              <ul class="list-group border-0 bg-light">
                @foreach ($blogCategory as $blogCategoryValues)
                <li class="list-group-item categories-name  border-start-0 border-end-0 bg-light">
                  <a href="/posts-by-category/{{$blogCategoryValues->id}}" target="_blank" class="categories-name ">{{ $blogCategoryValues->name }}</a>
                </li>
                @endforeach
              </ul>
              <li class="list-group-item categories-name border-start-0 border-end-0 bg-light">Uncategorized</li>
            </div>
          </div>
          <!-- section-two card 1 end -->



          <!--section-two card 2 start -->
          <div class="card bg-light mt-2">

            <div class="card-title mt-2 mb-0">
              <span class="category-title  px-3 fs-5 ">Suggested Blog Posts</spane>
            </div>
            <div class="card-body mt-0">

              <ul class="list-group border-0 bg-light">
                @foreach ($popularPost as $post)
                <li class="list-group-item categories-name border-start-0 border-end-0 bg-light">
                <a href="/bindclick/{{ $post->blog_title . '/' . $post->id }}" class="text-decoration-none text-dark" target="_blank">
                    {{ $post->blog_title }}</a>
                </li>
                @endforeach
              </ul>
              <li class="list-group-item categories-name border-start-0 border-end-0 bg-light">Uncategorized</li>
            </div>
          </div>
          <!-- section-two card 2 end -->

        </div> <!-- stick-card end -->
      </div><!-- section-two end -->

    </div><!-- both-sections-container end -->


  </div>
  <!-- contain end here -->


  <footer>
    @include('footer') <!-- Include the footer -->
  </footer>