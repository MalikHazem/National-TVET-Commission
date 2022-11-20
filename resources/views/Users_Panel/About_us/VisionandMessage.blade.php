@extends('Users_Panel.template')
@section('main')

<main id="main">

    <!-- ======= الرؤية Section ======= -->
    <section dir="rtl" id="about" class="about">
        <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

            <div class="col-lg-12 d-flex flex-column justify-content-center about-content">

                <div class="section-title">
                <h2>الرؤية</h2>
                <p class="p1">{{$Viss->subject}}</p>
                </div>

                <div style="margin-top: 45px ;" class="section-title">
                    <h2>الرسالة</h2>
                    <p class="p1">{{$Mess->subject}}</p>
                </div>

            </div>
            </div>

        </div>
        <br>
    </section><!-- End الرؤية Section -->

  </main><!-- End #main -->


@endsection
