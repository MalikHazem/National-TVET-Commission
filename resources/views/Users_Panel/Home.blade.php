@extends('Users_Panel.template')
@section('main')

    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div dir="rtl" class="carousel-inner">

            @foreach ($advertisements as $i => $advertisement)
            <div class="carousel-item @if($i==0) active @endif" style="background-image: url('{{url('img/slide',$advertisement->image)}}');">
                <div class="carousel-container">
                    <div class="carousel-content container">
                    <h2 class="animate__animated animate__fadeInDown">{{$advertisement->title}}</h2>
                    <p class="animate__animated animate__fadeInUp"><?php echo substr($advertisement->subject,0,750) ?>...</p>
                    <a href="{{url('/الهيئة/advertisements',$advertisement->id)}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">اقراءة المزيد</a>
                    </div>
                </div>
            </div>
            @endforeach

          {{-- <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('img/slide/slide-5.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">اجتماع مشترك بين رئيس الهيئة الوطنية للتعليم والتدريب المهني والتقني</h2>
                <p class="animate__animated animate__fadeInUp">اجتماع مشترك بين رئيس الهيئة الوطنية للتعليم والتدريب المهني والتقني ورئيس اتحاد الصناعات المعدنية والهندسية
الاربعاء ٢٢/٦/٢٠٢٢
اجتمع الدكتور زياد جويلس رئيس الهيئة الوطنية للتعليم والتدريب المهني والتقني مع السيد روبين الجولاني رئيس اتحاد الصناعات المعدنية والهندسية وذلك في مقر الهيئة الدائم... </p>
                <a href="{{url('/AL-HYYA/advertisements/1')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('img/slide/slide-5.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">مقرا دائما خاصا في الهيئة</h2>
                <p class="animate__animated animate__fadeInUp">اجتماع المجموعة الاساسية لمجموعة العمل القطاعية للتعليم والتدريب المهني والتقني في مقر الهيئة الدائم.
                    رام الله.الخميس ،16/6/2022
                    استقبل الدكتور زياد جويلس رئيس الهيئة الوطنية للتعليم والتدريب المهني والتقني في مقر الهيئة الدائم كلا من السيدة هانا ايلغي نائب رئيس التعاون الالماني في ممثلية المانيا في فلسطين،والسيد منير قليبو ممثل منظمة العمل الدولية ونائبه السيدة رشا الشرفا والسيدة ليزبيث البينوس من مكتب... </p>
                <a href="{{url('/AL-HYYA/advertisements/2')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('/img/slide/slide-6.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">زيارة المدير القطري للوكالة الكورية</h2>
                <p class="animate__animated animate__fadeInUp">الدكتور زياد جويلس يلتقي المدير القطري للوكالة الكورية للتعاون الدولي " KOICA " في فلسطين
                    رام الله , الثلاثاء 7/6/2022
                    التقى الدكتور زياد جويلس رئيس الهيئة الوطنية للتعليم والتدريب المهني والتقني في مكتب سكرتارية تنسيق المساعدات المحلي LACS الدكتور يوسن شن المدير القطري للوكالة الكورية للتعاون الدولي " KOICA " في فلسطين بهدف تعزيز الشراكة والتعاون بين الطرفين و انضمام الوكالة الكورية للتعاون الدولي " كويكا " الى مجموعة العمل القطاعية للتعليم ...</p>
                <a href="{{url('/AL-HYYA/advertisements/3')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image: url('/img/slide/slide-8.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">دعم الوكالة الالمانية للخريجين</h2>
                <p class="animate__animated animate__fadeInUp">بدعم من الوكالة الالمانية للتعاون الفني في الاردن وبتنسيق مع الوكالة الالمانية للتعاون الفني في فلسطين ،الهيئة الوطنية للتعليم والتدريب المهني والتقني ترسل فنيين متخصصين في مجال الطاقة المتجددة  من خريجي مؤسسات التعليم والتدريب المهني والتقني الى الاردن  لحضور دورة تدريبية متطورة في مجال الطاقة الشمسية والانظمة الفولتضوئية، والتي تنفذ من قبل...</p>
                <a href="{{url('/AL-HYYA/advertisements/4')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
            </div>
          </div> --}}

        </div>

        <a  href="#heroCarousel" class="carousel-control-prev" type="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a  href="#heroCarousel" class="carousel-control-next" type="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    {{-- <!-- ======= About Us Section ======= -->
    <section dir="rtl" id="about" class="about2">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

            <div class="col-lg-12 d-flex flex-column justify-content-center about-content">

                <div class="section-title">
                <h2>من نحن</h2>
                <p>تعدّ كتابة المقالات الأكاديمية واحدة من أهمّ عناصر النجاح خلال المرحلة الدراسية، الثانوية أو الجامعية على حدّ السواء. ويواجه الكثير من الطلاب الذين يفتقرون إلى موهبة الكتابة، صعوبة في إعداد المقالات الأكاديمية وتجهيزها. لكن، ما لا تصفح على موقع فرصة</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p style="font-size: 18px" class="description">تعدّ كتابة المقالات الأكاديمية واحدة من أهمّ عناصر النجاح خلال المرحلة الدراسية، الثانوية أو الجامعية على حدّ السواء.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bx-gift"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p style="font-size: 18px" class="description">تعدّ كتابة المقالات الأكاديمية واحدة من أهمّ عناصر النجاح خلال المرحلة الدراسية، الثانوية أو الجامعية على حدّ السواء.</p>
                </div>

            </div>
            </div>

        </div>
      <br>
    </section><!-- End About Us Section --> --}}

    <!-- ======= About Lists Section ======= -->
    {{-- <section class="about-lists">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>04</span>
            <h4>Repellendus molestiae</h4>
            <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>05</span>
            <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
            <span>06</span>
            <h4>Facilis Impedit</h4>
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div>

        </div>

      </div>
    </section><!-- End About Lists Section --> --}}

    <!-- ======= Counts Section ======= -->
    <section id="news" class="counts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row">

            <div class="section-title">
                <h2>إعلانات الهيئة</h2>
                </div>
            <div class="div-table">
                <table data-aos="fade-up">
                    @foreach ($news as $new)
                        <tr>
                            <td><span style="color: rgb(105, 105, 105); font-size: 13px">{{$new->date}}</span></td>
                            <td style="width: 90%"><a href="{{url('/الهيئة/news',$new->id)}}">{{$new->title}}</a></td>
                        </tr>
                    @endforeach
                </table>
              </div>
</div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    {{-- <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>مجالس ولجان</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-bounding-box"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-broadcast"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar2-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section --> --}}

    <!-- ======= Our Portfolio Section ======= -->

    <!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>شركاؤنا</h2>
                <p></p>
              </div>

          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <img src="{{url('img/team/users.png')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <img src="{{url('img/team/users.png')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <img src="{{url('img/team/users.png')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <img src="{{url('img/team/users.png')}}" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section --> --}}

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>تواصل معنا</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Ramallah/ Al-masyoon-behind Cario Amman bank - Hanna Ajloni St</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@tvetcommission.gov.ps<br>zjweiles@tvetcommission.gov.ps</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>Tel:0-22924272<br>02-2924270<br>FAX:02-2924271</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="{{url('/الهيئة/message')}}" method="post" class="php-email-form">
            @csrf
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->


@endsection
