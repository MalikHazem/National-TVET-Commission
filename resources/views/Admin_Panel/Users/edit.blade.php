@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <form action="{{url('/users/update',$users->id)}}" method="post" class="php-email-form">
          @csrf
            <div class="row">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" value="{{$users->name}}" required>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" value="{{$users->email}}" required>
              </div>
            </div>
            <select class="form-control" name="permissions" id="permissions" required>
                @foreach($permissions as $permission)
                    <option value="{{$permission->id}}">{{$permission->p_name}}</option>
                @endforeach
            </select ><br>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Save</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Us Section -->
  <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
@endsection

