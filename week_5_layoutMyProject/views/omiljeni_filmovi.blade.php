@extends('layouts.master')
@section('title', 'Omiljeni film')
  
@section("content")
  <div class="container" style="margin-top:30px">
    <div class="row">
      <!-- Start left section -->
      <div class="col-sm-4 left">
        <div class="slika">
          <img src="images/transcendence_film_square.jpg" alt="Johny Depp" class="img-fluid rounded-circle">
        </div>
        <h2>Trancendence</h2>
        <h5><i>Does the conciousness exsistes in machines?</i></h5>
        <p>Film koji propituje svjesnost kao bitak čovječnosti smještenu u računarski program.</p>
        <a target="_blank" href="https://en.wikipedia.org/wiki/Transcendence_(2014_film)">Trancendence - technological singularity and the question can we upload a conciousness?</a>
        <h3>Recenzije filma</h3>
        <p>Pitanje postojanja vještačke inteligencije</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" target="_blank"
              href="https://www.theguardian.com/film/2014/apr/27/transcendence-review-grand-ideas-johnny-depp-wally-pfister"><i>Ideja
                prije spektakla</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank"
              href="https://reelrundown.com/movies/Creepy-Ghost-In-The-Machine-Transcendence-Movie-Review"><i>Deus ex
                machina</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://filmskerecenzije.com/transcendence-2014/"><i>Izgubljeni
                potencijal</i></a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
      <!-- Start right col-->
      <div class="col-sm-8 text-center film_table">
        <table border=1 cellpadding="10" cellspacing="5">
          <tr>
              <td colspan=3>
                  <div class="responsive">
                      <div class="gallery">
                        <a target="_blank" href="images/film_galerry/01.jpg">
                          <img src="images/film_galerry/01.jpg" alt="01" width="600" height="400">
                        </a>
                      </div>
                    </div>
                    <div class="responsive">
                      <div class="gallery">
                        <a target="_blank" href="images/film_galerry/02.jpg">
                          <img src="images/film_galerry/02.jpg" alt="Forest" width="600" height="400">
                        </a>
                      </div>
                    </div>
                    <div class="responsive">
                      <div class="gallery">
                        <a target="_blank" href="iimages/film_galerry/03.jpg">
                          <img src="images/film_galerry/03.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                      </div>
                    </div>
                    <div class="responsive">
                      <div class="gallery">
                        <a target="_blank" href="images/film_galerry/04.jpg">
                          <img src="images/film_galerry/04.jpg" alt="Mountains" width="600" height="400">
                        </a>
                      </div>
                    </div>
              </td>
          </tr>
            <tbody>
              <tr>
                <td colspan="3">
                  <h2>Transcendence</h2>
                  <p>10. april 2014. (USA)</p>
                </td>
              </tr>
              <tr>
                <td colspan="3">
                  <p>Dr. Will Caster (Johnny Depp) glavni je istražitelj na području umjetne inteligencije, koji nastoji
                    stvoriti osjetilni stroj koji kombinira kolektivnu inteligenciju svega poznatog sa svim ljudskim
                    emocijama.</p>
                  <p>Njegovi izuzetno kontroverzni eksperimenti su ga proslavili, ali ga i učinili metom
                    antitehnologijskih ekstremista koji će poduzeti sve da ga zaustave. Međutim, pokušavajući uništiti
                    Willa, nehotice postaju katalizator njegova uspjeha, postavši sudionicima njegove vlastite
                    transcedencije. Njegovoj supruzi Evelyn (Rebecca Hall) i najboljem prijatelju Maxu Watersu (Paul
                    Bettany), koji su mu i kolege, nameće se pitanje je li to uopće potrebno.</p>
                  <p>Njihov najveći strah se obistini kad se Willova žeđ za znanjem počne pretvarati u svepristunu borbu
                    za moć, kojoj se ne nazire kraj.Jedino što je zastrašujuće jasno jest da možda ne postoji način da
                    ga se zaustavi.</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>6.3/10<br><a target="_blank" href="https://www.imdb.com/title/tt2209764/">Imdb</a></p>
                </td>
                <td>
                  <p>20%<br><a target="_blank" href="https://www.rottentomatoes.com/m/transcendence_2014">Rotten
                      Tomatoes</a></p>
                </td>
                <td>
                  <p>5.2/10<br><a target="_blank" href="https://www.filmaffinity.com/en/film913067.html">Film
                      Affinity</a></p>
                </td>
              </tr>
              <tr>
                <td colspan="3">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-3">
                        <div class="card">
                          <img class="card-img-top" src="images/film_galerry/johny_depp.jpg" alt="Card image">
                          <div class="card-body">
                            <p class="card-title"><a target="_blank" href="https://en.wikipedia.org/wiki/Johnny_Depp">Johny Depp</a><p>
                          </div>
                        </div>
                      </div><!-- end col3-->
                      <div class=" col-3">
                        <div class="card">
                          <img class="card-img-top" src="images/film_galerry/kate_mara.jpg" alt="Card image">
                          <div class="card-body">
                            <p class="card-title"><a target="_blank" href="https://en.wikipedia.org/wiki/Kate_Mara">Kate Mara</a></p>
                          </div>
                        </div>
                      </div><!-- end col3-->
                      <div class="col-3">
                        <div class="card">
                          <img class="card-img-top" src="images/film_galerry/morgan_freeman.jpg" alt="Card image">
                          <div class="card-body">
                            <p class="card-title"><a target="_blank" href="https://en.wikipedia.org/wiki/Morgan_Freeman">Morgan Freeman</a></p>
                          </div>
                        </div>
                      </div><!-- end col3-->
                      <div class="col-3">
                        <div class="card">
                          <img class="card-img-top" src="images/film_galerry/rebecca_hall.jpg" alt="Card image">
                          <div class="card-body ">
                            <p class="card-title"><a target="_blank" href="https://en.wikipedia.org/wiki/Rebecca_Hall">Rebecca Hall</a></p>
                          </div>
                        </div>
                      </div><!-- end col3-->
                    </div><!-- end row-->
                  </div><!-- end fluid-->
                </td>
              </tr>
              <tr>
                <td colspan=3>
                  <video class="img-fluid" poster="images/poster.jpg" controls>
                    <source src="images/trancendence_trailer.mp4" type="video/mp4">
                  </video>
                </td>
              </tr>
              <tr>
                <td colspan="3">
                    <p class="flip" onclick="myFunction()">Pogodi moj omiljeni žanr filmova</p>
                    <div id="panel">
                        <p>Science Fiction (sci-fi)</p>
                      </div>
                </td>
              </tr>
            </tbody>
        </table>
      </div><!-- end col8-->
    </div><!-- end row-->
  </div><!-- end container-->
@endsection("content")

 