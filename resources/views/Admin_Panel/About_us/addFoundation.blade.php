@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <form action="{{url('/About_us/Foundation/store')}}" class="email-form" method="post">
            <div class="section-title">
                <h2>نشأة والتأسيس</h2>
            </div>
            @csrf
            <div class="form-group">
              <textarea class="form-control" name="subject" placeholder="Subject" required></textarea>
            </div>
            <div class="text-center"><button type="submit">Save</button></div>
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Contact Us Section -->
@endsection

