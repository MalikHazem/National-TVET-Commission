@extends('Users_Panel.template')
@section('main')

<main id="main">

    <!-- ======= كلمة ترحيب Section ======= -->
    <section dir="rtl" id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-5 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{url('/img/news/'.$new->image)}}" class="img_readmore" alt="No comant">
                    </div>
                </div>
                <div style="margin-top: 1.5%" class="col-lg-7 col-md-6">
                        <h2 class="animate__animated animate__fadeInDown">{{$new->title}}</h2>
                        <p id="p1" class="animate__animated animate__fadeInUp">{{$new->subject}}</p>
                        <p id="p2" style="font-size: 14px; color: blue;" class="animate__animated animate__fadeInUp"><a href="{{$new->link}}">{{$new->link}}</a></p>
                    </div>
                </div>

            </div>

        </div>
        <br>
    </section><!-- End كلمة ترحيب Section -->
    <br>
    <!-- ======= Counts Section ======= -->
    @foreach ($news as $new )
    <section id="about2" class="focus" data-aos="fade-up">
        <a href="{{url('/الهيئة/news',$new->id)}}">
            <div id="focusin" class="container">

            <div dir="rtl" class="row">
                <div style="float: right" class="col-lg-2 col-md-2 col-sm-1">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <img id="img" src="{{url('/img/news/'.$new->image)}}" class="img_adv" alt="No comant">
                    </div>
                </div>
                <div style="margin-top: 1%; float: right; margin-right: 2%; font-size: 100%" class="col-lg-5 col-md-6 col-sm-5">
                    <h2 style="font-size: 18px" class="animate__animated animate__fadeInDown">{{$new->title}}</h2>
                    <p id="p2" style="font-size: 14px" class="animate__animated animate__fadeInUp"><?php echo substr($new->subject,0,240) ?>...</p>
                </div>
            </div>
        </div></a>

    </section>
    @endforeach<!-- End Counts Section -->
    <br>
    <br>

    </main><!-- End #main -->


@endsection
