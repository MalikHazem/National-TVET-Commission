@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
        <form action="{{url('/Project/store')}}" class="email-form" method="post">
            <div class="section-title">
                <h2>المشاريع</h2>
            </div>
            @csrf
            <div class="form-group">
                <input class="form-control" name="name" id="name" placeholder="Name" required>
                <textarea class="form-control" name="target_group" placeholder="Target_group" required></textarea>
                <input class="form-control" name="budget" id="budget" placeholder="Budget" required>
                <input class="form-control" type="date" name="duration_start" id="Duration_start" placeholder="Duration" required>
                <input class="form-control" type="date" name="duration_end" id="Duration_end" placeholder="Duration" required>
                <input class="form-control" name="donor" id="donor" placeholder="Donor" required>
                <input class="form-control" name="partner" id="partner" placeholder="Partner" required>
                <textarea class="form-control" name="goals" placeholder="Goals" required></textarea>
                <textarea class="form-control" name="idea" placeholder="Idea" required></textarea>
            </div>
            <div class="text-center"><button type="submit">Save</button></div>
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Contact Us Section -->
@endsection

