@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
        <form action="{{url('/Education/Universitie/update',$universities->id)}}" class="email-form" method="post">
            <div class="section-title">
                <h2>الجامعات</h2>
            </div>
            @csrf
            <div class="form-group">
            <input class="form-control" name="name" id="name" placeholder="Name" value="{{$universities->name}}" required>
                <input class="form-control" name="category" id="category" placeholder="Category" value="{{$universities->category}}" required>
                <input class="form-control" type="date" name="date_create" id="date_create" placeholder="Date_create" value="{{$universities->date_create}}" required>
                <input class="form-control" name="phone" type="number" id="phone" placeholder="Phone" value="{{$universities->phone}}" required>
                <input class="form-control" name="website" id="website" placeholder="Website" value="{{$universities->website}}" required>
            </div>
            <div class="text-center"><button type="submit">Save</button></div>
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Contact Us Section -->
@endsection

