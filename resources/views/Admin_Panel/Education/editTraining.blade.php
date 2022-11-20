@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
        <form action="{{url('/Education/Training/update',$trainings->id)}}" class="email-form" method="post">
            <div class="section-title">
                <h2>المراكز التعليمية</h2>
            </div>
            @csrf
            <div class="form-group">
                <input class="form-control" name="name" id="name" placeholder="Name" value="{{$trainings->name}}" required>
                <input class="form-control" name="category" id="category" placeholder="Category" value="{{$trainings->category}}" required>
                <input class="form-control" type="date" name="date_create" id="date_create" placeholder="Date_create" value="{{$trainings->date_create}}" required>
                <input class="form-control" name="phone" type="number" id="phone" placeholder="Phone" value="{{$trainings->phone}}" required>
                <input class="form-control" name="website" id="website" placeholder="Website" value="{{$trainings->website}}" required>
            </div>
            <div class="text-center"><button type="submit">Save</button></div>
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Contact Us Section -->
@endsection

