@extends('Users_Panel.template')
@section('main')
  <!-- ======= Our Team Section ======= -->
  <section id="team">
    <div class="container" data-aos="fade-up">
        <div class="section-title2">
            <h2>الجامعات</h2>
        </div>

      <div class="row">
        <div dir="rtl" class="col-lg-12 col-md-12">
            <main id="main2">
                <div dir="ltr" class="SearchBox">
                    <input dir="rtl" type="text" id="myInput" onkeyup="myFunction()" class="SearchBox-input" placeholder="BUSCA ALGO COOL">
                        <button id="button" class="SearchBox-button">
                            <i class="SearchBox-icon  material-icons">search</i>
                        </button>
                </div>
            </main>
        </div>
        <div class="col-lg-12 col-md-10">
            <div class="table" data-aos="fade-up" data-aos-delay="100">
            <table style="text-align: right" class="table"  id="myTable" dir="rtl" data-aos="fade-up">
                <tr id="tr-th">
                    <th style="width: 50%">اسم جامعة</th>
                    <th>نوع جامعة</th>
                    <th>الرقم الهاتف</th>
                    <th>تاريخ الانشاء</th>
                </tr>
                @foreach ($universities as $universitie)
                        <tr class="tr-td">
                            <td><a href="{{$universitie->website}}">{{$universitie->name}}</a></td>
                            <td>{{$universitie->category}}</td>
                            <td>{{$universitie->date_create}}</td>
                            <td>{{$universitie->phone}}</td>
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
