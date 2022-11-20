@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Our Team Section ======= -->
  <section id="team">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>الجامعات</h2>
        </div>

      <div class="row">
        <div dir="rtl" class="col-lg-11 col-md-10">
            <main id="main">
                <div dir="ltr" class="SearchBox">
                    <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()" class="SearchBox-input" placeholder="BUSCA ALGO COOL">
                        <button id="button" class="SearchBox-button">
                            <i class="SearchBox-icon  material-icons">search</i>
                        </button>
                </div>
            </main>
        </div>
        <div dir="rtl" class="col-lg-1 col-md-2">
            <a href="add"><button dir="rtl" class="add"><b>+</b></button></a>
        </div>
        <div class="col-lg-12 col-md-10">
            <div class="table" data-aos="fade-up" data-aos-delay="100">
            <table id="myTable" dir="rtl" data-aos="fade-up">
                <tr id="tr-th">
                    <th>id</th>
                    <th>name</th>
                    <th>category</th>
                    <th>date_create</th>
                    <th>phone</th>
                    <th>website</th>
                    <th style=""></th>
                </tr>
                @foreach ($universities as $universitie)
                        <tr class="tr-td" onclick="window.location='{{url('/الهيئة/Universitie')}}';">
                            <td>{{$universitie->id}}</td>
                            <td>{{$universitie->name}}</td>
                            <td>{{$universitie->category}}</td>
                            <td>{{$universitie->date_create}}</td>
                            <td>{{$universitie->phone}}</td>
                            <td>{{$universitie->website}}</td>
                            <td colspan="2" style="text-align: center"><a href="{{url('/Education/Universitie/edit',$universitie->id)}}" class="w3-padding w3-xlarge w3-text-cyan"><i class="material-icons">edit</i></a>
                            <a href="{{url('/Education/Universitie/destroy',$universitie->id)}}" class="w3-padding w3-xlarge w3-text-red"><i class="material-icons">delete</i></a></td>
                        </tr>
                @endforeach
              </table>

      </div>

    </div>
  </section><!-- End Our Team Section -->
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
