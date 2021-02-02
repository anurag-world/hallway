@extends ('layouts.app')

@section ('header')

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="description"
    content="HALLWAY is a Mumbai-based talent management, public relations and event management company that caters to local, national and international clients. Our services encompass Artist / Talent Management, Individual and Corporate Public Relations (PR) and Event Management. We work with clients who seek intelligent strategies and clever publicity to capture market share for their brands and themselves and desire events with sheer excellence.">
  <meta name="keywords" content="Hallway, Talent Management, Public Relations, Events N Entertainment, Social Responsibility, Events">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index,follow">
  <meta name="copyright" content="Hallway">
  <meta name="author" content="Hallway">
  <meta name="revisit-after" content="1">


  <link rel="shortcut icon" href="favicon/icon.ico" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/css/style.css">

  <meta property="og:title" content="Hallway - Talent Management, Public Relations, Events N Entertainment, Social Responsibility" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="images/logo.jpg" />
  <meta property="og:site_name" content="Hallway" />
  <meta property="fb:app_id" content="325874307450541" />

  <title>Hallway - Talent Management, Public Relations, Events N Entertainment, Social Responsibility</title>

<body class="bg-dark">

    <!-- Navigation -->

    <nav class="navbar sticky-top navbar-expand-xl navbar-dark bg-red">

      <div class="container">

        <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link ms-1 active" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ms-1" href="{{ url('/') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ms-1" href="{{ url('/') }}">Talent Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ms-1" href="{{ url('/') }}">Public Relations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ms-1" href="{{ url('/') }}">Events N Entertainment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ms-1" href="{{ url('/') }}">Social Responsibility</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Contact Us</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

@endsection

@section ('slide')

<div class="container-fluid p-0">

  <div id=" carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/main.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/main.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/main.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
  </div>

</div>

@endsection


@section ('homecontent')

<!-- Section 1 -->

<div class="container-fluid">

  <div class="row justify-content-center bg-light">


    <div class="col col-lg-6 col-sm-12 text-center">

      <img src="images/sec-01.jpg" class="img-fluid rounded my-5" alt="Section-Image">

    </div>

    <div class="col col-lg-6 col-sm-12 text-center px-5 my-5">

      <h1 class="display-6 text-red mb-4">WHO WE ARE</h1>

      <p class="lead fw-normal">HALLWAY is a Mumbai-based talent management, public relations and event management company that caters to local, national and international clients. Our services encompass Artist / Talent Management, Individual and Corporate
        Public Relations
        (PR) and Event Management. We work with clients who seek intelligent strategies and clever publicity to capture market share for their brands and themselves and desire events with sheer excellence.</p>

    </div>

  </div>




<!-- Section 2 -->



  <div class="row justify-content-center bg-dark">

    <div class="col col-lg-6 col-sm-12 text-center px-5 my-5">

      <h1 class="display-6 text-red mb-4">WHAT MAKES US DIFFERENT?</h1>

      <p class="lead fw-normal text-white">HALLWAY isn’t your average Artist, PR and Event Management Company. The market is fierce and competitive, and every company out there claims to be ‘innovative’, ‘strategic’, ‘passionate’ and ‘dynamic’. What we’re about is
        results:
        We work with
        the end goal in site. If you’re looking for Artist management, PR coverage and a well-thought-through event management, HALLWAY will deliver.</p>

    </div>

    <div class="col col-lg-6 col-sm-12 text-center">

      <img src="images/sec-02.jpg" class="img-fluid rounded my-5" alt="Section-Image">

    </div>

  </div>




  <!-- Section 3 -->


    <div class="row justify-content-center bg-light">


      <div class="col col-lg-6 col-sm-12 text-center">

        <img src="images/sec-03.jpg" class="img-fluid rounded my-5" alt="Section-Image">

      </div>

      <div class="col col-lg-6 col-sm-12 text-center px-5 my-5">

        <h1 class="display-6 text-red mb-4">WHAT DO WE DO?</h1>

        <p class="lead fw-normal">HALLWAY specializes in client-tailored advice and offers a range of services, including: artist and celebrity management, media relations, publicity, event management and social media initiatives to name a few.
        </p>
      </div>

    </div>

</div>

@endsection

@section ('testimonials')

<!-- Testimonials -->

<div class="container-fluid bg-red">

  <div class="row justify-content-center">

    <div class="col-lg-6">

      <div class="text-center my-5">
        <h1 class="display-6 text-white">Testimonials</h1>
      </div>

      <div id=" carouselExampleIndicators" class="carousel slide my-4" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>

        <div class="carousel-inner text-white py-5">
          <div class="carousel-item active">

            <figure class="text-center">
              <blockquote class="blockquote">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis vel eros donec ac odio tempor orci dapibus ultrices. Tempus egestas sed sed risus pretium.
                </p>
              </blockquote>
              <blockquote class="blockquote">
                <img src="images/dog-img.jpg" class="img-fluid profile" alt="profile">
              </blockquote>
              <figcaption class="blockquote-footer mt-2 text-white">
                Someone famous in <cite title="Source Title">Source Title</cite>
              </figcaption>
            </figure>

          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </div>

</div>

<!-- Press -->

<div class="container-fluid bg-light">

  <div class="row justify-content-center">

    <div class="col-lg-12 text-center my-5">

      <h1 class="display-6 text-red">Press Releases</h1>

    </div>

    <div class="col-lg-6 text-center my-5">

      <img class="press-logo img-fluid mx-3" src="images/techcrunch.png" alt="tc-logo">
      <img class="press-logo img-fluid mx-3" src="images/tnw.png" alt="tnw-logo">
      <img class="press-logo img-fluid mx-3" src="images/bizinsider.png" alt="biz-insider-logo">
      <img class="press-logo img-fluid mx-3" src="images/mashable.png" alt="mashable-logo">

    </div>

  </div>

</div>


@endsection

@section ('footer')

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <div class="container-fluid">

    <div class="row">

      <div class="col p-4">

        <nav class="nav justify-content-center mb-3">
          <a class="nav-link link-light" href="{{ url('/') }}" target="_parent">Home</a>
          <a class="nav-link link-light" href="{{ url('/') }}" target="_parent">Talent Management</a>
          <a class="nav-link link-light" href="{{ url('/') }}" target="_parent">Public Relations</a>
          <a class="nav-link link-light" href="{{ url('/') }}" target="_parent">Events n Entertainment</a>
          <a class="nav-link link-light" href="{{ url('/') }}" target="_parent">Social Responsibility</a>
          <a class="nav-link link-light" href="{{ url('/') }}" target="_parent">Gallery</a>
          <a class="nav-link link-light" href="{{ url('/') }}" target="_parent">Contact Us</a>
        </nav>

        <p class="lead fs-6 fw-normal text-center text-white">HALLWAY &#8482; All Rights Reserved.</p>

      </div>

    </div>

</div>

</body>

</html>

@endsection
