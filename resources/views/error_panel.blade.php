@extends('Users_Panel.template')
@section('main')

<main id="main">

    <!-- ======= الرؤية Section ======= -->
    <section dir="rtl" id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <h2 style="color: red; font-size: 38px">الصفحة قيد التطوير</h2>
                    </div>
                    <div dir="rtl" class="row">
                        <div class="col-lg-12 col-md-9 col-sm-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <img style="height: 250px" id="img" src="{{url('/img/error.png')}}" class="img_adv" alt="No comant">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section><!-- End الرؤية Section -->

  </main><!-- End #main -->


@endsection
