@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <form action="{{url('/News/store')}}" method="post" class="php-email-form">
          @csrf
            <div class="row">
              <div class="col-lg-6 form-group">
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
              </div>
            </div>
            <div class="col-lg-6 form-group">
                <input type="text" name="link" class="form-control" id="link" placeholder="Link">
              </div>
            <div class="form-group">
              <input type="file" class="form-control" name="image" id="image" placeholder="Image" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="subject" rows="5" placeholder="Subject" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your Add Successfully</div>
              </div>
            <div class="text-center"><button type="submit">Save</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Us Section -->
@endsection

