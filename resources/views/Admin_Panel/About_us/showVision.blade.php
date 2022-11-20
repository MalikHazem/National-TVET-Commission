@extends('Admin_Panel.template')
@section('main')
  <!-- ======= Our Team Section ======= -->
  <section id="team">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>الرؤية</h2>
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
            <a href="/Advertisement/add"><button dir="rtl" class="add"><b>+</b></button></a>
        </div>
        <div class="col-lg-12 col-md-10">
            <div class="table" data-aos="fade-up" data-aos-delay="100">
            <table id="myTable" dir="rtl" data-aos="fade-up">
                <tr id="tr-th">
                    <th>subject</th>
                    <th style=""></th>
                </tr>
                @foreach ($Viss as $Vis)
                        <tr class="tr-td" onclick="window.location='{{url('/الهيئة/About_us/VisionandMessage')}}';">
                            <td>{{$Vis->subject}}</td>
                            <td colspan="2" style="text-align: center"><a href="{{url('/About_us/Vision/edit',$Vis->id)}}" class="w3-padding w3-xlarge w3-text-cyan"><i class="material-icons">edit</i></a></td>
                        </tr>
                @endforeach
              </table>

      </div>

    </div>
  </section><!-- End Our Team Section -->
@endsection
