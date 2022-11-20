@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <form action="{{url('/About_us/Laws/store')}}" method="post" class="email-form" enctype="multipart/form-data">
            @csrf
            <div class="section-title">
                <h2>القوانين والتشريعات</h2>
            </div>
            <div class="form-group">
                <input class="form-control" name="name" id="name" placeholder="Name" required>
              </div>
            <div class="form-group">
                <input type="file" class="form-control" name="file" id="file" placeholder="File" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="num_laws" id="num_laws" placeholder="Num_Laws" required>
            </div>
            <div class="text-center"><button type="submit">Save</button></div>
          </form>
        </div>
      </div>
  </section><!-- End Contact Us Section -->
@endsection

