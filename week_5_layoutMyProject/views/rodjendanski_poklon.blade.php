@extends('layouts.master')
@section('title', 'Rodjendanski poklon')

@section("content")
  <div class="container-fluid">
  <div class="container" style="margin-top:30px">
    <div class="row">
      <!-- Start left section -->
      <div class="col-sm-4 left">
        <div class="slika">
          <img src="images/birthday_gift1.jpg" alt="gift" class="img-fluid rounded-circle">
        </div>
        <div class="gift">
          <div id="pjescani_sat" class="fa"></div>
          <h2 id="countdown"></h2>
        <h5>Rođendansko odbrojavanje</h5>
        </div><!-- end gift-->
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-8">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Moj rođendanski poklon</h2>
                <h5><a target="_blank" href="https://sokovicsport.ba/proizvod/cross-arena-28-2019/"><i class="fa fa-bicycle"></i> Cross Arena/2019</a></h5>
                <img src="images/bicikl.jpg" alt="bicikl" class="img-fluid">
            </div><!-- end col12-->
            <div class="col-12 col-lg-4 sokovic">
                <h5><a target="_blank" href="https://sokovicsport.ba/"><i class="fa fa-cart-plus"></i> Soković sport</a></h5>
                <ul>
                    <li><a href="tel:+38751312999"><i class="fa fa-phone"></i> 051 312-999</a></li>
                    <li><a target="_blank" href="mailto:info@sokovicsport.ba"><i class="fa fa-envelope-o"></i> info@sokovicsport.ba</a></li>
                    <li><a target="_blank" href="https://www.google.com/maps/place/Sokovi%C4%87+Sport/@44.775822,17.1989733,17z/data=!3m1!4b1!4m5!3m4!1s0x475e030e559a16c1:0x8b69c497a1be3645!8m2!3d44.775822!4d17.201162"><i class="fa fa-map-marker"></i> Gundulićeva 80 <br>78 000 Banja Luka</a></li>
                </ul>
            </div><!-- end col4-->
            <div col-12 col-lg-8 style="margin-bottom:10%;">
                <div style="width: 500px; position:relative;"></div>
                <div id="googleMap" style="width:100%; height:300px;"><iframe class="img-fluid" width="500" height="350" src="https://maps.google.com/maps?width=500&amp;height=350&amp;hl=en&amp;q=Gunduliceva%2080%2C%20BiH+(Sokovic%20sport)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/en/">gmapgen en</a> & <a href="http://abtof.org.uk/">cheapflightwebsites</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
            </div><!-- end col8-->
        </div><!-- end row-->
      </div><!-- end col8-->
    </div><!-- end row-->
  </div><!-- end container-->
  </div><!-- end fluid-->

  <div class="jumbotron text-center footer" style="margin-bottom:0">
      <div class="container-fluid">
          <div class="row text-center">
              <div class="col-12 col-lg-6">
                      <p id="footer_date"></p>
              </div>
              <div class=" col-12 col-lg-6">
                      <p>&copy Jelena Mihajlović</p>
              </div>
          </div><!-- end row-->
      </div><!-- end fluid-->
    </div><!-- end jumbotron-->
@endsection("content")
  