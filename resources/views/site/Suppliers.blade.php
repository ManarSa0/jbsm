
@extends('layouts.appPortal')
@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2> الموردون</h2>
      <ol>
        <li><a href="{{URL :: to ('/' )}}">الرئيسية</a></li>
        <li>الموردون</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->

 <!-- ======= Blog Details Section ======= -->
 <section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row g-5">

      <div class="col-lg-8">

        <article class="blog-details">

    

          <h3 class="title">مرحبا بكم في صفحة علاقات الموردين الخاصة بشركة جندلة ، والتي يسرّنا من خلالها التواصل مع المنشآت المحلية والدولية بالإضافة إلى أصحاب العمل الحر المتخصصين في مجالاتهم.</h3>

      
          @foreach($allData as $data)

          <div class="content">
            <blockquote>
              <h1>
              {{ $data->title_ar }}
              </h1>
              <h5> {{ $data->desc_ar }}</h5>
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
            القطاعات التي تتعاقد معها جندلة بشكل مستمر
          </h3>
          <p>نحن في بحث دائم عن موردي خدمات وسلع في القطاعات المختلفة، والتي تتضمن:</p>              
          <blockquote>
           <p>
            حلول الأعمال</p>
          </blockquote>
          <blockquote>
           <p>إدارة الفعاليات</p>
          </blockquote>
          <blockquote>
           <p>تقنية المعلومات</p>
          </blockquote>
          <blockquote>
           <p>الاستشارات</p>
          </blockquote>
          <blockquote>
           <p>الخدمات القانونية</p>
          </blockquote>

        </div><!-- End Blog Sidebar -->

      </div>
    </div>

  </div>
</section><!-- End Blog Details Section -->

</main><!-- End #main -->
@endsection