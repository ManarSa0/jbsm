
@extends('layouts.appPortal')
@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2> @lang('site.Suppliers')</h2>
      <ol>
        <li><a href="{{URL :: to ('/' )}}">@lang('site.Homepage')</a></li>
        <li>@lang('site.Suppliers')</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->

 <!-- ======= Blog Details Section ======= -->
 <section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row g-5">         
       <h3 class="title"
       >@lang('site.des_4') </h3>


      <div class="col-lg-8">

        <article class="blog-details">

    


      
          @foreach($allData as $data)

          <div class="content">
            <blockquote>
              <h1>
              {{ $data->{'title_'.app()->getLocale()}  }}
              </h1>
              <h5> {{ $data->{'desc_'.app()->getLocale()} }}</h5>
            </blockquote>
          </div>
          @endforeach

          <!--
                 
          <div class="content">
            <blockquote>
              <h1>
                الدعوة لمنافسات 
              </h1>
              <h5>يمكن لجميع المنشآت الراغبة في الدخول للمناقصات أو المنافسات للمشاريع التي تطرحها “جندلة” التسجيل في نظام الموردين، وسيتم إرسال الدعوات للجهات المهتمة بعد التأكد من أهليتها لتنفيذ نطاق العمل الخاص بالمشاريع.</h5>
            </blockquote>
          </div>
          <div class="content">
            <blockquote>
              <h1>
                الدعوة لمنافسات تكامل
              </h1>
              <h5>يمكن لجميع المنشآت الراغبة في الدخول للمناقصات أو المنافسات للمشاريع التي تطرحها “جندلة” التسجيل في نظام الموردين، وسيتم إرسال الدعوات للجهات المهتمة بعد التأكد من أهليتها لتنفيذ نطاق العمل الخاص بالمشاريع.</h5>
            </blockquote>
          </div>
             End post content -->

          

      </div>

      <div class="col-lg-4">

        <div class="sidebar">

          <h3>
          @lang('site.des_5')          </h3>
          <p> @lang('site.des_6')  </p>              
          <blockquote>
           <p>
           @lang('site.business-solutions')  </p>
          </blockquote>
          <blockquote>
           <p>  @lang('site.Event-management')</p>
          </blockquote>
          <blockquote>
           <p> @lang('site.information-technology')</p>
          </blockquote>
          <blockquote>
           <p>@lang('site.Consulting')</p>
          </blockquote>
          <blockquote>
           <p>@lang('site.Legal-services')</p>
          </blockquote>

        </div><!-- End Blog Sidebar -->

      </div>
    </div>

  </div>
</section><!-- End Blog Details Section -->

</main><!-- End #main -->
@endsection