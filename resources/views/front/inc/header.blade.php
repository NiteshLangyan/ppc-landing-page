
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $setting->msettingname }}</title>
    <meta   name="title" content="{{ $setting->msettingname }}" /> 
    <meta name="keywords" content="{{ $setting->keywords }}" /> <!-- Meta Keywords -->
    <meta name="description" content="{{ $setting->mdesp }}" >
    <meta name="google-site-verification" content="{{ $setting->footertext }}" />
 
    <!-- Open Graph / Facebook -->
     
    <meta  property="og:title" content="{{ $setting->msettingname }}" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ URL::current() }}">

    <meta property="og:description" content="{{ $setting->mdesp }}" />
    <meta property="og:image" content="https://punjabichaapcorner.ca/storage/app/public/mblogimage/1510848924mimage.png" />
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ URL::current() }}" />
    <meta property="twitter:title" content="{{ $setting->msettingname }}" />
    <meta property="twitter:description"  content="{{ $setting->mdesp }}" />
    <meta property="twitter:image"  content="https://punjabichaapcorner.ca/storage/app/public/mblogimage/1510848924mimage.png"  />
    <link rel="icon" type="image/x-icon"  href="https://punjabichaapcorner.ca/storage/app/public/logos/1487208762image.ico" />

    {{-- {!! $setting->Google_analytic_tag !!} --}}
    <!-- JS Script -->
    {{-- {!! $setting->script !!} --}}

    <!----- css ----->
    <link href="{{ url('public/front')}}/css/bootstrap.min.css" rel="stylesheet" />
    <!----- css ----->
    <link href="{{ url('public/front')}}/css/style.css" rel="stylesheet" />
    <!----- css ----->
    <link href="{{ url('public/front')}}/css/responsive.css" rel="stylesheet" />
    <!----- bootstrap-icons.css ----->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!----- fonts ----->
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Epilogue:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100..700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100..700&family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <!----- aos css ----->
    <link href="{{ url('public/front')}}/css/aos.css" rel="stylesheet" />
    <!----- Fav-icon ----->

    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('public/front')}}/images/fav.png" />
    <link rel="manifest" href="{{ url('public/front')}}/favicon/site.webmanifest" />
  </head>
  <body>
    <!----- header ----->
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"
            ><i class="bi bi-x"></i
          ></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header
      class="site-navbar site-navbar-target nav-up"
      role="banner"
      id="scroll-header"
      data-animation="fadeIn"
    >
      <div class="container-fluid">
        <div class="row align-items-center position-relative">
          <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 res2">
            <div class="site-logo">
              <a href="{{ url('/') }}"
                ><img src="{{url('/storage/app/')}}/{{$Headeradd->image}}" class="img-fluid" alt="logo"
              /></a>
            </div>
            <div class="ml-auto toggle-button d-inline-block d-lg-none">
              <a href="#" class="site-menu-toggle js-menu-toggle text-black"
                ><span class="icon-menu h3 text-black"
                  ><i class="bi bi-list"></i></span
              ></a>
            </div>
          </div>
          <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 res">
            <div class="m_xsee">
              <nav class="site-navigation text-right ml-auto" role="navigation">
                <ul
                  class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block"
                  id="top-menu"
                >
                  <li class="active">
                    <a href="#" class="nav-link">About us</a>
                  </li>
                  <li>
                    <a href="#Services" class="nav-link">What You’ll get</a>
                  </li>
                  <li>
                    <a href="#initial" class="nav-link">Initial Investment</a>
                  </li>
                  <!-- <li>
                  <a href="#contact-us" class="nav-link contact-s"
                    >Contact Us</a
                  >
                </li> -->
                </ul>
              </nav>
              <a href="#contact-us" class="wqqqx dawqsd"
                >Contact Us <img src="{{ url('public/front')}}/images/sss.svg" class="img-fluid"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </header>