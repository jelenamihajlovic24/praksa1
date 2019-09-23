@extends('layouts.master')
@section('title', 'Hobi')

@section('content')
  <div class="container-fluid lotos_bcg">
    <div class="container" style="margin-top:30px">
      <div class="row">
        <!-- Start left section -->
        <div class="col-sm-4 left">
          <div class="slika">
            <img src="images/joga.jpg" alt="joga" class="img-fluid rounded-circle">
          </div>
          <h2>Ashtanga yoga</h2>
          <h5>Dinamična joga</h5>
          <p>Ashtanga joga je dinamična i energizirajuća joga praksa, sa tačnim redoslijedom joga položaja i sekvenci,
            tehnikom „Uđaji“ disanja koja se koristi tijekom vježbanja te korištenjem „bandhi“ – tehnika koje aktiviraju
            miofascijalne dijafragme, kojima se održava i jača tonus tijela i energetski tok.</p>
          <h3>Yoga</h3>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://en.wikipedia.org/wiki/Ashtanga_vinyasa_yoga">Ashtanga
                Vinyasa flow</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://en.wikipedia.org/wiki/K._Pattabhi_Jois">K. Pattabhi
                Jois</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank"
                href="https://www.yogajournal.com/practice/the-meaning-of-quot-namaste-quot">Namaste</a>
            </li>
          </ul>
          <hr class="d-sm-none">
        </div>
        <div class="col-sm-8" style="padding-left:3%; margin-bottom:5%;">
          <h2>Ashtanga yoga - stil joge</h2>
          <p>Ashtanga Vinyasa yoga je stil joga vježbi kreirana od strane učitelja K.Pattabhi Jois-a u toku 20. vijeka a
            često je bila promovisna kao moderni način klasične indijske joge.</p>
          <p> Ovakav stil joga vježbanja je energizirajući, navodeći tijelo da se zagrijava i znoji, pri tome
            sinhronizirajući dah
            i pokrete tijela. Čitava praksa se sastoji iz prelaska iz jedne poze u drugu bez pauze, dok se takozvano
            odmaranje
            vrši u relaksirajućim meditacijama na samom kraju vježbanja. </p>
          <p>Ashtanga yoga sistem vježbi je osnovao K.Pattabhi Jois u gradu Mysor-u u Indiji, po kojem se ovaj stil joge
            i naziva Mysor stil. Ashtanga yoga insitut postoji od 1948. godine kroz koji su prošli neki od trenutnih
            joga instruktora u Banjoj Luci.</p>
          <ul class="nav nav-pills flex-column border_bot">
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://en.wikipedia.org/wiki/Ashtanga_vinyasa_yoga">Pročitaj
                više</a>
            </li>
          </ul>
          <br>
          <div class="row">
            <div class="col-12">
              <h5>Osnovne poze</h5>
            </div>
            <div class="col-12 col-lg-6">
              <p>Pozdrav suncu A</p>
              <video class="img-fluid" width="355px" controls>
                <source src="images/pozdrav_suncu_a.mp4" type="video/mp4">
              </video>
            </div><!-- end col6-->
            <div class=" col-12 col-lg-6">
              <p>Pozdrav suncu B</p>
              <video class="img-fluid" width="355px" controls>
                <source src="images/pozdrav_suncu_b.mp4" type="video/mp4">
                Vaš preglednik ne podržava ovaj video!
              </video>
            </div><!-- end col6-->
            <div class="col-12 col-lg-4 padma">
              <img src="images/padma.jpg" class="img-fluid" alt="padma">
              <p>Moj omiljeni studio: <br /><a class="fejs" href="https://www.facebook.com/PadmaBL/"
                  target="_blank">Padma joga studio</a></p>
              <a class="fejs" href="https://www.facebook.com/PadmaBL/" target="_blank"><i
                  class="flaticon-facebook-logo"></i></a>
            </div><!-- end col4-->
            <div class="col-12- col-lg-8">
              <h5>Joga kao cjelovit pristup čovjeku</h5>
              <p><q> Prvo što treba znati je da joga nije nikakva religija i da nema nikakve veze sa bilo kojom religijom.
                Jeste da joga vodi porijeklo iz Indije i ima veliku vezu sa indijskom kulturom, pa se često pogrešno
                povezuje njihovom religijom, ali joga je nešto sasvim drugo. Joga je jedna filozofija, jedan pogled na
                svijet, jedan način života koji pomaže čovjeku da se vrati sebi, da otkrije ko je on i zašto je došao na
                ovu planetu; da otkrije sve svoje potencijale i da proširi svoje vidike; da postane bolja osoba </q>, navodi jedan od instruktora joge u Banjoj Luci u intervjuu povodom Međunarodnog dana joge.</p>
                <p><a target="_blank" href="https://6yka.com/novosti/niti-jedan-drugi-sistem-ne-pruza-tako-cjelovit-pristup-covjeku-i-njegovim-potrebama-kao-joga">Pročitaj više</a> o članku.</p>
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
@endsection('content')
  