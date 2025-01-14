<!DOCTYPE html>
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default"     data-assets-path="{{ url('') }}/public/assets/admin/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin login</title>
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    <link rel="icon" type="image/x-icon"  href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/css/demo.css" />
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="{{ url('') }}/public/assets/admin/assets/vendor/css/pages/page-auth.css">
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/js/helpers.js"></script>
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/js/template-customizer.js"></script>
    <script src="{{ url('') }}/public/assets/admin/assets/js/config.js"></script>

</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
        <div class="card">
    <div class="card-body">
        <h4 class="mb-2">Admin Portal</h4>
        <p class="mb-2">Please provide at least one link to your social media or adult website   with the largest following.</p>
        @if(Session::has('fail'))
        <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;">    {{Session::get('fail')}}</small>
     @endif
        <form class="mb-3" action="{{ url('admin') }}" method="POST"   >
    @csrf



    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{old('email')}}">
        <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('email')
    {{$message}}
        @enderror </small>
    </div>
    <div class="mb-3 form-password-toggle">
        <label class="form-label" for="password">Password</label>
        <div class="input-group input-group-merge">
         <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"  value="{{old('password')}}" />
    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
    </div>

    <button type="submit" class="btn btn-primary d-grid w-100"> Login </button>
        </form>

    </div>
        </div>
    </div>
        </div>
    </div>
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js">
    </script>

    <script src="{{ url('') }}/public/assets/admin/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="{{ url('') }}/public/assets/admin/assets/vendor/js/menu.js"></script>
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js">  </script>
    <script src="{{ url('') }}/public/assets/admin/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"> </script>
    <script  src="{{ url('') }}/public/assets/admin/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"> </script>
    <script src="{{ url('') }}/public/assets/admin/assets/js/main.js"></script>


</body>

</html>
