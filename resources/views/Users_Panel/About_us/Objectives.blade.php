@extends('Users_Panel.template')
@section('main')

<main id="main">

    <!-- ======= اهداف الهيئة Section ======= -->
    <section dir="rtl" id="about" class="about">
        <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

            <div class="col-lg-12 d-flex flex-column justify-content-center about-content">

                <div class="section-title">
                <h2>اهداف الهيئة</h2>
                <p class="p2">تسعى الهيئة لتحقيق الأهداف الآتية:</p>
                @foreach ($Objs as $Obj)
                <p class="p1">{{$Obj->id}}. {{$Obj->subject}}</p>
                @endforeach
                </div>
            </div>
            </div>

        </div>
        <br>
    </section><!-- End اهداف الهيئة Section -->

  </main><!-- End #main -->


@endsection
