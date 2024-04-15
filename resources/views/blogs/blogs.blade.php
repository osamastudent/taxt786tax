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
  <div class="container blog-container">

    <h2 class="blog-title">Blog Posts</h2>



    <!-- load-more-posts start -->





    <!-- both-sections-container start -->
    <div class="both-sections-container d-lg-flex " >
      <!-- section-one start -->
      <div class="section-one mb-0" >
        <!-- id id blog-posts-container start -->
        <div id="blog-posts-container" >
          @if($homeBlog->count()>0)
          @foreach($homeBlog as $values)
          <!-- card start -->
          <div class="card mt-1 load-more-posts border-0" style="position: static;">
            <!-- row start -->
            <div class="row">
              <!-- column start -->
              <a href="" class="bindclick">
                <div class="col-12">
                  <div class="card-title">
                    <!-- <h2 class="blog-name">Exploring Pakistan’s Leather Exports: A Guide on How to Run a Leather Export Business on Amazon</h2> -->
                    <a href="/bindclick/{{ $values->blog_title . '/' . $values->id }}" class="bindclick">
                    <h2 class="blog-name">{{$values->blog_title}}</h2>
                    </a>
                  </div>
                </div>
              </a>
              <!-- column end -->
            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row">
              <!-- column start -->
              <div class="col-5">
                <!-- card body start -->
                <div class="card-body">
                    <a href="/bindclick/{{ $values->blog_title . '/' . $values->id }}" class="bindclick">
                      <p class="posted-date">{{$values->created_at->format('F j, Y')}} / 786Tax</p>
                    </a>
                    <a href="/bindclick/{{ $values->blog_title . '/' . $values->id }}" class="bindclick">
                      <img src="{{asset('homepageblogs/'.$values->blog_image)}}" class="recentblog-imae " height="200px" width="100%">
                    </a>
                </div>
                <!-- card body end -->
              </div>
              <!-- column end -->


              <!-- column start -->
              <div class="col-7 ">
                <p class="blog-description mt-5 ">
                  <a href="/bindclick/{{ $values->blog_title . '/' . $values->id }}" class="bindclick">
                    {{$values->blog_description}}
                  </a>
                </p>

                <a href="/bindclick/{{ $values->blog_title . '/' . $values->id }}" class="read-more">Read more</a>


              </div>

              <!-- column end -->

            </div>
            <!-- row end -->


          </div>
          <!-- card end -->

          
          @endforeach
          @else
          <div class="col-12 mt-5"> <br>
          <span class="text-center"><span class="text-center bg-dark text-white py-3 mt-5 px-5 rounded-pill">No Results Found.</span></span>
          </div>
          @endif
        </div>
        <!-- id id blog-posts-container end here -->



        <button class="bg-info btn load-btn form-control " id="load-more">Load More Posts</button>
      </div><!-- section-one end -->


      <!-- section-two start -->
      <div class="section-two  mt-0">
        <div class="sticky-card">

          <form action="{{url('/Search-Blog')}}" method="GET">
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
                <li class="list-group-item categories-name border-start-0 border-end-0 bg-light">
                  <a href="/posts-by-category/{{$blogCategoryValues->id}}" target="_blank" class="categories-name">{{ $blogCategoryValues->name }}</a>
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
                  <a href="/bindclick/{{ $post->blog_title . '/' . $post->id }}" class="categories-name popular-link">{{ $post->blog_title }}</a>
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

  <script>
  let loadMoreBtn = document.querySelector('#load-more');
  let blogPostsContainer = document.querySelector('#blog-posts-container');
  let blogPosts = document.querySelectorAll('.load-more-posts');
  let currentItem = 3;

  // Initially, hide all blog posts except the first three
  for (let i = currentItem; i < blogPosts.length; i++) {
    blogPosts[i].style.display = 'none';
  }

  // Hide the "Load More" button if there are less than 3 blog posts
  if (blogPosts.length <= 3) {
    loadMoreBtn.style.display = 'none';
  }

  loadMoreBtn.addEventListener('click', () => {
    console.log('Load More button clicked');
    for (let i = currentItem; i < currentItem + 3 && i < blogPosts.length; i++) {
      blogPosts[i].style.display = 'block';
    }
    currentItem += 3;

    // Hide the "Load More" button when all posts are displayed
    if (currentItem >= blogPosts.length) {
      console.log('All posts displayed. Hiding Load More button.');
      loadMoreBtn.style.display = 'none';
    }
  });
</script>

