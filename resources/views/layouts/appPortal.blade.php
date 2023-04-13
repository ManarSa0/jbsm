<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>جندله لإدارة الأعمال</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="" href="">
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/img/File22023_1_3_125367_c861ec.jpeg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/img/File12023_1_3_125351_d4bf76.png')}}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200;300;400&family=Cairo:wght@600;800&family=IBM+Plex+Sans+Arabic:wght@300&display=swap" rel="stylesheet">

      <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('public/vendor/aos/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('public/vendor/glightbox/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/main.css')}}">


    

</head>

<body dir="rtl">
  <!-- ======= Header ======= -->
  <!-- Logo -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="{{URL :: to ('/' )}}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <img src=" {{ asset('public/img/File12023_1_3_125351_d4bf76.png')}}" alt="">
      </a>


  <!-- Main-menu -->
  <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{URL :: to ('/' )}}"><span>الرئيسية</span> </a></li>
          <li><a class="nav-link scrollto" href="{{URL :: to ('/' )}}#about">من نحن</a></li>
          <li><a class="nav-link scrollto" href="{{URL :: to ('/' )}}#features">خدماتنا</a></li>
          <li><a class="nav-link scrollto" href="{{URL :: to ('/' )}}#services">مشاريعنا </a></li>
          <li><a class="nav-link scrollto" href=" {{URL :: to ('/our_group' )}}"">مجموعتنا</a></li>
          <li><a class="nav-link scrollto" href=" {{URL :: to ('/suppliers' )}}"">الموردون</a></li>
          <li><a class="nav-link scrollto"  href=" {{URL :: to ('/news' )}}"">الأخبار</a></li>
          <li><a class="nav-link scrollto" href="{{URL :: to ('/' )}}#contact">تواصل معنا </a></li>
          <div class=" nav-item dropdown">
                                               <a class=" dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ app()-> getLocale()=='ar'?'عربي':'English'}}
                                               </a>

                                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                  <a class="dropdown-item"  href="{{url(app()->getLocale()=='ar'?'en':'ar')}}">{{ app()-> getLocale()=='ar'?'English':'عربي'}}</a>
                                                </div>
                                               </div>
        </ul>
        
        
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav>

  <!-- Header-btn -->
      <a class="btn-getstarted scrollto" href="index.html#about">اشترك معنا </a>

    </div>
  </header>
   <!-- End Header -->                         
                    

    @yield('content')



   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="footer-info">
        <img src=" {{ asset('public/img/2030 (2).png')}}" alt="">

        <p>
  السعودية - الرياض <br>
  مخرج 24<br><br>
  <strong>Phone:</strong> +966553777769<br>
  <strong>Phone:</strong> +966 5555 4418<br>
  <strong>Email:</strong> info@jehat.com<br>
</p>
</div>
</div>

<div class="col-lg-2 col-md-7 footer-links">
            <h4>روابط</h4>
            <ul>
              <li><i class="bi bi-chevron-left"></i> <a href="{{URL :: to ('/' )}}">الرئيسية</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">من نحن</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">خدماتنا</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">مشاريعنا</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="{{URL :: to ('/our_group' )}}">مجموعتنا</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">الأخبار</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">تواصل معنا</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-7 footer-links">
            <h4>خدماتنا</h4>
            <ul>
              <li><i class="bi bi-chevron-left"></i> <a href="#">صناعة الاحداث</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">استشارات الاعمال</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">استضافة وادارة الفعاليات</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">الاتصالات التسويقية المتكاملة</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">الضيافة وحلول المناسبات الخاصة</a></li>
              <li><i class="bi bi-chevron-left"></i> <a href="#">تنظيم المعارض</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>نشرتنا الإخبارية</h4>
            <p>أشترك في نشرة جندلة لادراة حلول الاعمال</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="أشتراك">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
          </div>
          <div class="credits">
          جميع الحقوق محفوظة <a href="https://bootstrapmade.com/">لدى جندلة لإدارة حلول الأعمال</a>
          </div>  
        </div>
        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>
    </footer>
<!-- End Footer -->



    <!-- Scroll Up -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
 <!-- Vendor JS Files -->
      <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('public/vendor/aos/aos.js')}}"></script>
      <script src="{{ asset('public/vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src="{{ asset('public/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src="{{ asset('public/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{ asset('public/vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
     <script src="{{ asset('public/js/main.js')}}"></script>


</body>

</html>