@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="{{url('/About_us/Objectives/update',$Objs->id)}}" method="post" class="email-form">
                <div class="section-title">
                    <h2>اهداف الهيئة</h2>
                </div>
                @csrf
            <div class="form-group">
              <textarea class="form-control" name="subject" required>{{$Objs->subject}}</textarea>
            </div>
            <div class="text-center"><button type="submit">Save</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Us Section -->
@endsection

