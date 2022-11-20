@extends('Users_Panel.template')
@section('main')

<main id="main">

    <!-- ======= النشاة وتأسيس Section ======= -->
    <section dir="rtl" id="about" class="about">
        <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

            <div class="col-lg-12 d-flex flex-column justify-content-center about-content">

                <div class="section-title">
                <h2>النشأة والتأسيس</h2>
                <p class="p2">أنشئت الهيئة بموجب أحكام القرار بقانون رقم (4) للعام 2021  المادة رقم 2 والتي تنص على :</p>
                @foreach ($Fous as $Fou)
                <p class="p1">{{$Fou->id}}. {{$Fou->subject}}</p>
                @endforeach
                </div>
            </div>
            </div>

        </div>
        <br>
    </section><!-- End النشاة وتأسيس Section -->

  </main><!-- End #main -->


@endsection
