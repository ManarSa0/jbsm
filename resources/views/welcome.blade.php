@extends('layouts.appPortal')
@section('content')


<section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">

      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="animate-charcter"> 
              اهلا بكم في جندله لإدارة الأعمال</h3>
          </div>
        </div>
      </div>
     <!-- <h2>اهلا بكم في   <span> جندله لإدارة الأعمال</span></h2>-->
    </p>
      <h3>  مع جندله لإدارة الاعمال اوجدنا للاعمال حلول </p>
        <span> تضم شركة حلول الاعمال فريق من الخبراء في مجالات متعددة لضمان تقديم خدمات متكاملة للعملاء</h3> </span>
      </p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto ">اشترك معنا</a> <br>
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i> <span>شاهد الفيديو </span></a>
      </div>
    </div>
  </section>

  <main id="main">


      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>من نحن</h2>
            <p>نحن جندله لإدارة الأعمال  تعمل وفق رؤى عصرية متجددة، نعتمد الابتكار منهجاً لنا في جميع أعمالنا، وقد اكتسبنا مكانتنا المتميزة في صناعة الأحداث وإدارة فعاليات الأعمال مستندين في ذلك على قيم الإبداع والتكامل الخدمي تحقيقاً لمزيد من التميز ومواكبة سباق التطور المتنامي بكل القطاعات والمجالات بما يتناسب مع تطلعات عملائنا وطموحاتهم   </p>

      <p>ومتخصصون في تقديم الحلول المختلفة للجهات الحكومية، وشبه الحكومية، وقطاع الأعمال الخاص الربحي، وغير الربحي في كل مشروع نعمل عليه نقترب نحو تحقيق الرؤية على أرض الواقع</p>
          </div>
  
          <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
  
            <div class="col-lg-5">
              <div class="about-img">
                <img src= "{{ asset('public/img/download (1) .png')}}" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-7">
              <h3 class="pt-0 pt-lg-5">شركة حلول الأعمال لتقديم جميع الخدمات</h3>
  
              <!-- Tabs -->
              <ul class="nav nav-pills mb-3">
                <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">رؤيتنا</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">مجتمعنا</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">الكتيب التعريفي للشركة</a></li>
              </ul><!-- End Tabs -->
  
              <!-- Tab Content -->
              <div class="tab-content">
  
                <div class="tab-pane fade show active" id="tab1">
  
                  <p class="fst-italic">رؤيتنا هي أن نتفرد بمصاف صُنّاع فعاليات الأعمال عالمياً من خلال تقديم حلول مبتكرة ارتكازاً على القيم وارتكازاً على القيم واستناداً إلى البحث والتحليل المستمر للاتجاهات السوقية ودراسة متغيراتها</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>نحن نتفهم ديناميكيات اتجاهات صناعة الحدث في العالم</h4>
                  </div>
                  <p> في مجموعة حلول الأعمال نسعى دائماً إلى تطوير مفهوم جديد للأحداث وفعاليات الأعمال يلبي احتياجات السوق ورغباته ويوفر لجميع شركائنا فرصاً جديدة لبناء العلاقات والشبكات لتحقيق نمو أعمال مستدام.</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>نحول الأفكار إلى واقع</h4>
                  </div>

                  <p>
                    نعمل بشغف على تقديم الحلول السوقية المتكاملة عبر أنشطتنا الخدمية المتمثلة في فعاليات أعمال مبتكرة مستندين على تطبيق أعلى مستويات الجودة والمعايير العالمية، وذلك سعيا لتغطية الفجوات السوقية وتغيير الاتجاهات المستقبلية لصناعة الأحداث في منطقة الشرق الأوسط وشمال أفريقيا.</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>رسالتنا</h4>
                  </div>
                  <p>
                    رسالتنا هي الاستجابة للاحتياجات السوقية بقطاعات الأعمال من خلال تقديم فعاليات عالية الجودة تمثل حلولاً متكاملة، مدعومة بفريق مُبتكِر ومبدع ذو علاقات متينه وموثوقة مع مختلف الشركاء..</p>
  
                </div><!-- End Tab 1 Content -->
                  <br>
                <div class="tab-pane fade show" id="tab2">
  
                  <p class="fst-italic">  يقع مقرنا بمدينة الرياض، ونقدم خدماتنا الإبداعية المتكاملة بجميع أنحاء المملكة العربية السعودية  . نتطلع دوما لتوسيع شبكة شركائنا عالميا لتقديم حلول أعمال متكاملة عالية الأداء، مع استعدادنا الدائم للدخول في تحالفات مع لشركات والجهات الدولية لإستضافة الأحداث العالمية وتنظيمها بالمملكة العربية السعودية.
                   </p>
                </div>
  
                <div class="tab-pane fade show" id="tab3">
  
                  <p class="fst-italic">لكتيب التعريفي للشركةا</p>
  
                 
                </div>
              </div>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End About Section -->
    
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">
        <div class="section-header">
          <h2> رؤيتنا</h2>
          <div class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column" style="background-position:left top;background-blend-mode: overlay;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 0px 0px 0px 0px;"><style type="text/css">@media only screen and (max-width:1024px) {.fusion-title.fusion-title-1{margin-top:20px!important; margin-right:0px!important;margin-bottom:20px!important;margin-left:0px!important;}}@media only screen and (max-width:640px) {.fusion-title.fusion-title-1{margin-top:0px!important; margin-right:0px!important;margin-bottom:20px!important; margin-left:0px!important;}}</style><div class="fusion-title title fusion-title-1 fusion-sep-none fusion-title-text fusion-title-size-four" style="margin-top:20px;margin-right:0px;margin-bottom:20px;margin-left:0px;"><h4 class="title-heading-right md-text-align-center fusion-responsive-typography-calculated" style="margin:0;color:var(--awb-color5);--fontSize:18;--minFontSize:18px;line-height:1.5;"><p>نقود التغيير للفرد، للمجتمع، للاقتصاد.<br>
            نبتكر الحلول بمحاكاة التحديات التي يواجهها الفرد والمجتمع والشركـات.</p></h4></div><div class="fusion-separator fusion-full-width-sep" style="align-self: center;margin-left: auto;margin-right: auto;margin-top:10px;width:100%;"></div><div class="fusion-text fusion-text-1 md-text-align-center" style="font-size:18px;line-height:var(--awb-custom_typography_1-line-height);text-transform:var(--awb-custom_typography_1-text-transform);color:var(--awb-color5);"><ul>
            </ul>
            </div></div>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">رؤيتنا</a></h4>
              <p> الممكن الرئيسي للتحول الاقتصادي والاجتماعي.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">رسالتنا</a></h4>
              <p> إيجاد حلول شاملة للخدمات الحكومية تساهم في التطور الاجتماعي والاقتصادي من خلال خلق بيئة محفزة لإطلاق المواهب البشرية.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">أهدافنا</a></h4>
              <p> تقديم خدمات تكنولوجيا المعلومات للمجتمع العربي بأعلى المعايير وبدقة وأمان وإتقان.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">أعمالنا</a></h4>
              <p>تقديم خدمات تكنولوجيا المعلومات للمجتمع العربي بأعلى المعايير وبدقة وأمان وإتقان.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

  
    
    

    <!-- ======= Clients Section
      <h2>شركاء النجاح</h2> ======= -->
    <section id="clients" class="clients">
      <div class="section-header">
        <h2>شركاؤنا</h2>
      </div>
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img  src="{{ asset('public/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/img/clients/client-3.png')}}"class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('public/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>خدماتنا</h2>
        </div>
        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bi bi-binoculars color-cyan"></i>
              <h4> صناعة الأحداث</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="bi bi-box-seam color-indigo"></i>
              <h4>استشارات الأعمال</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bi bi-brightness-high color-teal"></i>
              <h4>استضافة وإدارة الفعاليات</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="bi bi-command color-red"></i>
              <h4>الاتصالات التسويقية المتكاملة</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <i class="bi bi-easel color-blue"></i>
              <h4>الضيافة وحلول
                المناسبات الخاصة</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <i class="bi bi-map color-orange"></i>
              <h4>تنظيم المعارض
                </h4>
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>صناعة الأحداث</h3>
                <p class="fst-italic">
                  استبصار الفجوات والفرص السوقية
                </p> 
                
                <p>
                  تبدأ أعمالنا دوماً بتقصي الفرص الواعدة بأسواق الأعمال، ومن ثم نُكرس جهودنا ونسخر جميع إمكاناتنا ومقدراتنا البحثية العالية، ونستخدم أنسب الوسائل والأساليب في بناء الأفكار والمفاهيم العامة للحدث وصولاً لصناعة فعاليات غير تقليدية تطرح قيم مضافة، مستندين في ذلك على قيم الإبداع والتكامل الخدمي واعتماد أعلى معايير الجودة المتعارف عليها عالمياً.
                </p>
                <p class="fst-italic">
                  نقدم حلول مؤسسية
                  مبتكرة ومتكاملة                </p> 
                  <ul>
                  <li><i class="bi bi-check-circle-fill"></i>الأبحاث السوقية وتحليل السوق.</li>
                  <li><i class="bi bi-check-circle-fill"></i>  بناء الأفكار وصناعة هوية الحدث   .</li>
                  <li><i class="bi bi-check-circle-fill"></i>ابتكار وتطوير فعاليات الأعمال</li>
                </ul> 

               
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src=" {{ asset('public/img/features-1.svg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane" id="tab-2">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>استشارات الأعمال</h3>
                <p>
                  حلول استشارية مبتكرة ومستدامة
                </p>
                <p class="fst-italic">
                  نعمل على دعم أعمال شركائنا وعملائنا وحلفائنا بالقطاعين العام والخاص بكفاءة عاليه، وذلك من خلال تقديم خدمات مساندة متمثلة في طرح حلول متكاملة لصناعة فعالياتهم ومناسباتهم الخاصة، ابتداءً من تقييم الفرص المتاحة ومروراً بإعداد وتطوير محتوى الأحداث وصولاً لتنظيم فعاليات أعمال توفر حلولاً مستدامة تدعم خطط أعمالهم، وتجعلنا مرجعاً لهم يوصف بالموثوقية والاحترافية.
                </p>
                <p class="fst-italic">
                  نقدم حلول مؤسسية
                  مبتكرة ومتكاملة                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> تنسيق البرامج وصناعة المحتوى</li>
                  <li><i class="bi bi-check-circle-fill"></i> إدارة الحملات وتسويق الحدث</li>
                  <li><i class="bi bi-check-circle-fill"></i> حلول التنظيم والتنفيذ</li>
                  <li><i class="bi bi-check-circle-fill"></i> حلول التنظيم والتنفيذ</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('public/img/features-2.svg')}}"class="img-fluid">

              </div>
            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-3">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>استضافة وإدارة الفعاليات</h3>
                <p>
                  خدمات تنظيمية وتنفيذية متكاملة
                </p>
                <p>
                  مستندين على فريق أعمالنا المتخصص للغاية، نستضيف فعاليات الأعمال والمؤتمرات العالمية بالمملكة العربية السعودية، وذلك تضامناً مع شبكة شركائنا وحلفائنا حول العالم، ونعمل على تطوير وتنفيذ الخطط الموضوعة لإدارة تلك الفعاليات، وإدارة العلاقات الخارجية والداخلية لكل حدث بكل مراحله التنظيمية.                </p>
                  <p>
                    نقدم حلول مؤسسية
                    مبتكرة ومتكاملة                  </p>
                  <ul>
                  <li><i class="bi bi-check-circle-fill"></i> تخطيط الأحداث</li>
                  <li><i class="bi bi-check-circle-fill"></i>التنسيق، العلاقات والدعم الحكومي</li>
                  <li><i class="bi bi-check-circle-fill"></i> اللوجستيات وحلول التنفيذ.</li>
                </ul>
            
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="{{ asset('public/img/features-3.svg')}}"class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 3 -->

          <div class="tab-pane" id="tab-4">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>الاتصالات التسويقية المتكاملة</h3>
                <p>
                  وصول متكامل للشرائح والأسواق المستهدفة
                </p>
                
                <p class="fst-italic">
                  نمتلك فريق تسويقي مبدع، ونستخدم أنسب الاستراتيجيات التسويقية لكل حدث، بجانب أحدث الوسائل والتقنيات العالمية للاتصال بالشرائح المستهدفة؛ وذلك بتطبيق حزمة من الإجراءات التسويقية المترابطة التي تحقق الوصول الكامل للمستهدفات، ومزيداً من الزخم الإعلامي لفعاليات أعمالنا.
                </p>
                <p>
                  نقدم حلول مؤسسية
                  مبتكرة ومتكاملة                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>  صناعة المحتوى التسويقي  </li>
                  <li><i class="bi bi-check-circle-fill"></i> التخطيط التسويقي</li>
                  <li><i class="bi bi-check-circle-fill"></i> الحملات التسويقية المتكاملة
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('public/img/features-4.svg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 4 -->

          <div class="tab-pane" id="tab-5">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>الضيافة وحلول
                  المناسبات الخاصة</h3>
                <p>
                  تغطية مميزة للفعاليات والمناسبات الخاصة
                </p>
                <p class="fst-italic">
                  نظراً لأهمية خدمات الضيافة في نجاح الفعاليات والمناسبات، تتكامل خدماتنا بتوفير خيارات مرنة ومبتكرة من الخدمات المساندة، تدعم وتحقق أهداف كل من المؤسسات الحكومية والشركات الكبرى والمناسبات الاجتماعية للعائلات والتجمعات الترفيهية
                </p>
                <p>
                  نقدم حلول مؤسسية
                  مبتكرة ومتكاملة                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> إدارة، تنظيم الحشود</li>
                  <li><i class="bi bi-check-circle-fill"></i> خدمات الضيافة الخارجية</li>
                  <li><i class="bi bi-check-circle-fill"></i>تنظيم المناسبات الخاصة</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('public/img/features-5.svg')}}" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 5 -->

          <div class="tab-pane" id="tab-6">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>تنظيم المعارض
                  واجتماعات الأعمال</h3>
                <p>
                  حلول لوجستية وعلاقات تجارية مميزة
                </p>
                <p class="fst-italic">
                  ندرك تماماً بأن المعارض التجارية واجتماعات الأعمال هي الطريقة المثلى لبناء علاقات تجارية ناجحة وفتح أسواق جديدة، وبمجموعة حلول الأعمال نتميز بخبرتنا العريقة وعلاقاتنا السوقية المميزة في صناعة وتنفيذ المعارض التجارية وتنسيق اجتماعات الأعمال وإدارة الصفقات التجارية والاستثمارية.
                </p>
                <p>
                  نقدم حلول مؤسسية
                  مبتكرة ومتكاملة                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> العلاقات التجارية الدولية</li>
                  <li><i class="bi bi-check-circle-fill"></i> تصميم وبناء تجهيزات المعارض .</li>
                  <li><i class="bi bi-check-circle-fill"></i>الخدمات المساندة للعارضين</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('public/img/features-6.svg')}}" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 6 -->

        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>مشاريعنا</h2>
          <p>تعتبر مشاريعنا إستجابة للاحتياجات السوقية بقطاعات الأعمال من خلال تقديم فعاليات عالية الجودة تمثل حلولاً متكاملة، مدعومة بفريق مُبتكِر ومبدع ذو علاقات متينه وموثوقة مع مختلف الشركاء.
          </p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
               
              <img src="{{ asset('public/img/services-1.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>غرف الدوام</h3>
                </a>
                <p></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">

                <img src="{{ asset('public/img/services-2.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>اقرار</h3>
                </a>
                <p></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            
            <div class="service-item">
              <div class="img">
              <img src="{{ asset('public/img/services-3.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>سي ار ام</h3>
                </a>
                <p></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
              <img src="{{ asset('public/img/services-4.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>منصة جهات</h3>
                </a>
                <p></p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
              <img src="{{ asset('public/img/services-5.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>نيو</h3>
                </a>
                <p></p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
              <div class="img">
              <img src="{{ asset('public/img/services-6.jpg')}}" class="img-fluid" alt="">

             </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-chat-square-text"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>ايزي قو</h3>
                </a>
                <p></p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-header text-white-50 ">
          <h2 class="text-white ">اراء عملائنا</h2>
        </div>
        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
        
              <img src="{{ asset('public/testimonials/testimonials-1.jpg')}}"class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  أتقدم بالشكر الجزيل الى مجموعة حلول الاعمال على التميز في الاعداد والتنظيم لمؤتمر سيدات الصناعة 2020 في نسخته الأولى بشراكة مع مدن، وهذه بداية الرحلة في شراكات أكثر سعياً الى الوصول الى مستهدفات مدن في تمكين الصناعة وتحقيق رؤية السعودية 2030. أرجو لكم التوفيق والسداد ونلتقي بكم في مزيد من النجاحات.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
              <img src="{{ asset('public/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  أتقدم بالشكر الجزيل الى مجموعة حلول الاعمال على التميز في الاعداد والتنظيم لمؤتمر سيدات الصناعة 2020 في نسخته الأولى بشراكة مع مدن، وهذه بداية الرحلة في شراكات أكثر سعياً الى الوصول الى مستهدفات مدن في تمكين الصناعة وتحقيق رؤية السعودية 2030. أرجو لكم التوفيق والسداد ونلتقي بكم في مزيد من النجاحات.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
              <img src="{{ asset('public/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  أتقدم بالشكر الجزيل الى مجموعة حلول الاعمال على التميز في الاعداد والتنظي0 في نسخته الأولى بشراكة مع مدن، وهذه بداية الرحلة في شراكات أكثر سعياً الى الوصول الى مستهدفات مدن في تمكين الصناعة وتحقيق رؤية السعودية 2030. أرجو لكم التوفيق والسداد ونلتقي بكم في مزيد من النجاحات.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
              <img src="{{ asset('public/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  أتقدم بالشكر الجزيل الى مجموعة حلول الاعمال على التميز في الاعداد والتنظيم لمؤتمر سيدات الصناعة 2020 في نسخته الأولى بشراكة مع مدن، وهذه بداية الرحلة في شراكات أكثر سعياً في تمكين الصناعة وتحقيق رؤية السعودية 2030. أرجو لكم التوفيق والسداد ونلتقي بكم في مزيد من النجاحات.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
              <img src="{{ asset('public/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  أتقدم بالشكر الجزيل الى مجموعة حلول الاعمال على التميز في  2030. أرجو لكم التوفيق والسداد ونلتقي بكم في مزيد من النجاحات.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


            
        

         
    <section id="faq" class="faq">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content px-xl-5">
              <h3><strong>الأسألة الشائعة</strong></h3>
            
            </div>

            <div class="accordion accordion-flush px-xl-5" id="faqlist">

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    كيف اتمكن من مخاطبة جهة؟
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                                            تستطيع مخاطبه جميع الجهات المسجلة فى المنصة بإختيار إضافة طلب وتحديد الجهه المراد التواصل معها وكتابه عنوان الموضوع والتفاصل وتحديد أولويه المعاملة وارفاق المستندات ايضا ان وجدت ثم الضغط على حفظ                                 
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                  لدى موظف الان اجازة لمده شهر كيف اوقف توزيع المعاملات لديه ؟                </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    بكل سهولة الدخول الى قائمه الموظفين لديك واختيار الموظف ثم الضغط على ايقونه التعديل والتي علي شكل قلم ثم من تابه جهات العمل تاكد ان التوزيع التلقائى للمعاملات غير مفعل ثم اضغط حفظ
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    تم إنشاء اجتماع عام ولكن لم اتمكن من بدأ الاجتماع الايقونه لا تظهر                   </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    تاكد ان تاريخ الاجتماع تم إدخاله بصورة صحيحه حيث لا تظهر ايقونات التحكم فى الاجتماع الا فى التاريخ المحدد لعقد الاجتماع
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                     كيف أحصل على تقرير عدد المعاملات القائمه عند كل موظف ومدى الانجاز المطلوب؟                 </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    من قائمه معاملات أختار مراجعة معاملات موظف ثم اختار النطاق الزمنى للتقرير تستطيع عرض وطباعة تقرير مفصل يبين عدد المعاملات القائمه عند كل موظف ومدي الانجاز
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    كيف أحصل على تقرير عدد المعاملات القائمه عند كل موظف ومدى الانجاز المطلوب؟                 </button>
               
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    من قائمه معاملات أختار مراجعة معاملات موظف ثم اختار النطاق الزمنى للتقرير تستطيع عرض وطباعة تقرير مفصل يبين عدد المعاملات القائمه عند كل موظف ومدي الانجاز
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("public/img/faq.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section>
    <!-- End F.A.Q Section -->

    

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>الأخبار</h2>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"> <img src="{{ asset('public/img/news.jpeg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, December 12</span>
              </div>
              <h3 class="post-title">حضور صاحب السمو الملكي الأمير/ فيصل بن بندر بن عبدالعزيز آل سعود، أمير منطقة الرياض، انتخابات مجلس إدارة جمعية بن باز الخيرية وذلك عبر #منصة_جهات
                </h3>
              <p>حضور صاحب السمو الملكي الأمير/ فيصل بن بندر بن عبدالعزيز آل سعود، أمير منطقة الرياض، انتخابات مجلس إدارة جمعية بن باز الخيرية وذلك عبر #منصة_جهات
              </p>
              <a href="blog-details.html" class="readmore stretched-link"><i class="bi bi-arrow-left"></i><span>المزيد</span></a>

               <!--                            <span class="post-author"> / Julia Parker</span>

 -->

            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('public/img/news.jpeg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
              </div>
              <h3 class="post-title">حضور صاحب السمو الملكي الأمير/ فيصل بن بندر بن عبدالعزيز آل سعود، أمير منطقة الرياض، انتخابات مجلس إدارة جمعية بن باز الخيرية وذلك عبر #منصة_جهات
              </h3>
            <p>حضور صاحب السمو الملكي الأمير/ فيصل بن بندر بن عبدالعزيز آل سعود، أمير منطقة الرياض، انتخابات مجلس إدارة جمعية بن باز الخيرية وذلك عبر #منصة_جهات
            </p>
            <a href="blog-details.html" class="readmore stretched-link"><i class="bi bi-arrow-left"></i><span>المزيد</span></a>

         <!--                  <span class="post-author"> / Mario Douglas</span>

                       <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
 -->            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
            <div class="post-box">
              <div class="post-img">< <img src="{{ asset('public/img/news.jpeg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                
              </div>
              <h3 class="post-title">حضور صاحب السمو الملكي الأمير/ فيصل بن بندر بن عبدالعزيز آل سعود، أمير منطقة الرياض، انتخابات مجلس إدارة جمعية بن باز الخيرية وذلك عبر #منصة_جهات
              </h3>
              <p>حضور صاحب السمو الملكي الأمير/ فيصل بن بندر بن عبدالعزيز آل سعود، أمير منطقة الرياض، انتخابات مجلس إدارة جمعية بن باز الخيرية وذلك عبر #منصة_جهات
                </p>
                <a href="blog-details.html" class="readmore stretched-link"><i class="bi bi-arrow-left"></i><span>المزيد</span></a>

         <!--     <span class="post-author"> / Lisa Hunter</span>
                    <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
 -->            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= 
                <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>

    -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>اتصل بنا</h2>
        </div>

      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.09742698673!2d46.6946985855279!3d24.585833662265347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0f65f5d44c21%3A0x21602e9c7844e7dd!2z2YXYrNmF2YjYudipINi02LHZg9in2Kog2KzZhtiv2YTYqQ!5e0!3m2!1sar!2ssa!4v1674637239292!5m2!1sar!2ssa" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div><!-- End Google Maps -->
      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>تواصل معنا
              </h3>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>موقع</h4>
                  <p>الرياض, المملكة العربية السعودية
                  </p>
                </div>
              </div><!-- End Info Item 
                              <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

              -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>استفسارات عامة</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>الهاتف</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="أدخل اسمك " required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="أدخل بريديك الالكتروني " required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="العنوان" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="رسالتك لنا " required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>

              <div class="text-center"><button type="submit">ارسال</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection