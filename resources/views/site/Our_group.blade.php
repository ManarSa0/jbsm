@extends('layouts.appPortal')
@section('content')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>مجموعتنا</h2>
      <ol>
        <li><a href="{{URL :: to ('/' )}}">الرئيسية</a></li>
        <li>مجموعتنا</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
<div class="container" data-aos="zoom-out">

<div class="clients-slider swiper">
  <div class="swiper-wrapper align-items-center">

    <div class="swiper-slide"><img src="  {{ asset('public/img/clients/202212221204images.jpeg')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src=" {{ asset('public/img/clients/202211092143logo.png')}}g" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="{{ asset('public/img/clients/2022122211421500x500.jpeg')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="  {{ asset('public/img/clients/202211200910logo-5.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src=" {{ asset('public/img/clients/132.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src=" {{ asset('public/img/clients/202211200911logo.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="  {{ asset('public/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src=" {{ asset('public/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
  </div>
</div>

</div>
</section><!-- End Clients Section -->
<!-- ======= Call To Action Section ======= -->
@foreach($allData as $data)
<section id="cta" class="cta">
<div class="container" data-aos="zoom-out">

<div class="row g-5">

  <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
    <h3> <em>{{ $data->title_ar }}</em></h3>
    <p> {{ $data->desc_ar }}</p>
    <a class="cta-btn align-self-start" href="#">أذهب الى الموقع</a>
  </div>

  <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
    <div class="img">
      <img src="{{ URL ::to ('public/upload/'.$data->images)}}"  alt="" class="img-fluid">
    </div>
  </div>

</div>

</div>
</section>
@endforeach

<!-- End Call To Action Section -->
<!-- ======= Call To Action Section ======= -

<section id="cta" class="cta">
<div class="container" data-aos="zoom-out">

<div class="row g-5">

  <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
    <h3>جندله  للخدمات <em>التجارية</em></h3>
    <p> 
      نسعى دائما من أجل تحقيق التقدم
      ونحافظ عل جودة وسلامة وأمان منتجاتنا
      والتزاماتنا واضحة لكل من يتعامل معنا
      إن منتجاتنا متداولة ومميزة في السوق السعودي والخارجي</p>
    <a class="cta-btn align-self-start" href="#">أذهب الى الموقع</a>
  </div>

  <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
    <div class="img">
      <img src="{{ asset('public/img/easygocat2.png')}}"   alt="" class="img-fluid">
    </div>
  </div>

</div>

</div>
</section><!-- End Call To Action Section -->
<!-- ======= Call To Action Section =======
<section id="cta" class="cta">
<div class="container" data-aos="zoom-out">

<div class="row g-5">

  <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
    <h3>الخدمات <em>العامة</em> </h3>
    <p> مراجعة كافة الدوائر الحكومية
      خدمات أصحاب السمو الملكي وكبار الشخصيات
      خدمات الشركات
      خدمات الأفراد
      لدينا فريق عمل ذو خبرة للتواصل مع العملاء</p>
    <a class="cta-btn align-self-start" href="#">أذهب الى الموقع</a>
  </div>

  <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
    <div class="img">
      <img src="{{ asset('public/img/65656.png')}}" alt="" class="img-fluid">
    </div>
  </div>

</div>

</div>
</section><!-- End Call To Action Section -->


</main><!-- End #main -->
@endsection