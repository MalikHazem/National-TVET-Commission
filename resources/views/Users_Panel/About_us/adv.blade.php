@extends('Users_Panel.template')
@section('main')

<main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="about2" class="focus" data-aos="fade-up">
        <div id="divCheckbox" style="visibility: hidden">
            <a href="">
                <div id="focusin" class="container">

                <div dir="rtl" class="row">
                    <div style="float: right" class="col-lg-2 col-md-2 col-sm-1">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <img id="img" src="" class="img_adv" alt="No comant">
                        </div>
                    </div>
                    <div style="margin-top: 1%; float: right; margin-right: 2%; font-size: 100%" class="col-lg-5 col-md-6 col-sm-5">
                        <h2 style="font-size: 18px" class="animate__animated animate__fadeInDown">sdfadfadfadfadsfd</h2>
                        <p id="p2" class="animate__animated animate__fadeInUp">dsfasdfdsfadfsdfsa</p>
                    </div>
                </div>
            </div></a>
        </div>
    </section>
    @foreach ($advs as $adv )
    <section id="about2" class="focus" data-aos="fade-up">
        <a href="{{url('/الهيئة/advertisements',$adv->id)}}">
            <div id="focusin" class="container">

            <div dir="rtl" class="row">
                <div style="float: right" class="col-lg-2 col-md-2 col-sm-1">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <img id="img" src="{{url('/img/adv/'.$adv->image)}}" class="img_adv" alt="No comant">
                    </div>
                </div>
                <div style="margin-top: 1%; float: right; margin-right: 2%; font-size: 100%" class="col-lg-5 col-md-6 col-sm-5">
                    <h2 style="font-size: 20px; font-weight: bold;" class="animate__animated animate__fadeInDown">{{$adv->title}}</h2>
                    <p id="p2" class="animate__animated animate__fadeInUp"><?php echo substr($adv->subject,0,240) ?>...</p>
                </div>
            </div>
        </div></a>

    </section>
    @endforeach<!-- End Counts Section -->
    <br>
    <br>

    </main><!-- End #main -->


@endsection
