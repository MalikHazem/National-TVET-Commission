@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Our Team Section ======= -->
  <section id="team">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>أخبار</h2>
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
            <a href="/News/add"><button dir="rtl" class="add"><b>+</b></button></a>
        </div>
        <div class="col-lg-12 col-md-10">
            <div class="table" data-aos="fade-up" data-aos-delay="100">
            <table id="myTable" dir="rtl" data-aos="fade-up">
                <tr id="tr-th">
                    <th>id</th>
                    <th>title</th>
                    <th>subject</th>
                    <th style="width: 30%">link</th>
                    <th>image</th>
                    <th>date</th>
                    <th style=""></th>
                </tr>
                @foreach ($news as $new)
                        <tr class="tr-td" onclick="window.location='{{url('/الهيئة/news',$new->id)}}';">
                            <td>{{$new->id}}</td>
                            <td><?php echo substr($new->title,0,65) ?></td>
                            <td><?php echo substr($new->subject,0,65) ?>...</td>
                            <td>{{$new->link}}</td>
                            <td><img id="img" src="{{url('/img/news/'.$new->image)}}" class="img_table" alt="{{$new->image}}"></td>
                            <td>{{$new->date}}</td>
                            <td colspan="2" style="text-align: center"><a href="{{url('News/edit',$new->id)}}" class="w3-padding w3-xlarge w3-text-cyan"><i class="material-icons">edit</i></a>
                            <a href="{{url('News/destroy',$new->id)}}" class="w3-padding w3-xlarge w3-text-red"><i class="material-icons">delete</i></a></td>
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

          if(txtValue.toUpperCase().indexOf(filter) > -1 != true){
                td = tr[i].getElementsByTagName("td")[4];

                if (td) {
                    txtValue = td.textContent || td.innerText;
                }
            }
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
