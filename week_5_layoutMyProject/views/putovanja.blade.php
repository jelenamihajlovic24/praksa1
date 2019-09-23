@extends("layouts.master")
@section('title', 'Omiljeni grad')

@section("content")
  <div class="container" style="margin:30px auto">
    <div class="row">
      <!-- Start left section -->
      <div class="col-sm-4">
        <div class="slika">
          <a target="blank" href="images/grad/stari_grad_hvar.jpg" alt="Stari Grad">
          <img src="images/grad/stari_grad_hvar_square.jpg" alt="Stari Grad" class="img-fluid rounded-circle">
          </a>
        </div>
        <h2>Stari Grad</h2>
        <h5><i>Hrvatska</i></h5>
        <p>Smješten na sjevernoj strani ostrva Hvar u hrvatskoj Dalmaciji, <a target="_blank" href ="https://www.stari-grad.eu/hr/povijest">Stari grad</a> je jedan od najstarijih gradova u Evropi.</p>
        
        <p>Najstariji dio grada je pod UNESCO-vom zaštitom Svjetske kulturne baštine.</p>
        <ul class="nav nav-pills flex-column lavanda_bcg">
          <li class="nav-item">
            <a class="nav-link" target="_blank"
            href="https://en.wikipedia.org/wiki/Stari_Grad,_Croatia"><i>Stari Grad Hvar</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank"
              href="https://sr.wikipedia.org/wiki/Hvar_(ostrvo)"><i>Ostrvo Hvar</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://hr.wikipedia.org/wiki/Budrovka"><i>Hvarska lavanda</i></a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
      <!-- Start right col-->
      <div class="col-sm-8 text-center grad_table">
        <table border=1 cellpadding="10" cellspacing="5">
          <thead>
              <td colspan=3>Najpoznatije znamenitosti grada</td>
          </thead>
          <tbody>
              <tr>
                  <td>Crkva sv.Stjepana</td>
                  <td>Crkva sv. Stjepana  je župna crkva Starog Grada. Posvećena je mučeničkom papi Stefanu I. Stoji na istočnoj strani malog trga, na Trgu sv. Stjepana u povijesnom središtu Starog Grada</td>
                  <td>
                      <div>
                        <a target="_blank" href="images/grad/Crkva_sv_Stjepana.jpg">
                        <img class="img-fluid" src="images/grad/Crkva_sv_Stjepana.jpg" width="250px" height="auto" alt="crkva sv.Stjepana">
                      </div>
                  </td>
              </tr>
              <tr>
                    <td>Hektorovića kuća</td>
                    <td>Tvrdalj ili dvorac pjesnika Petra Hektorovića, najpoznatiji je spomenik Staroga Grada. Najveća znamenitost Tvrdalja je njegov ribnjak nastao na ostatku neke antičke piscine ili lučke naprave.</td>
                    <td>
                        <div>
                          <a target="_blank" href="images/grad/hektorovic.jpg">
                          <img class="img-fluid" src="images/grad/hektorovic.jpg" width="250px" height="auto" alt="Haktorovića kuća">
                        </div>
                    </td>
              </tr>
              <tr>
                    <td>Palata Biankini</td>
                    <td>Braća Biankini podigla su 1896. neorenesansnu palaču s dvorištem i vrtom dajući ovom gradnjom snažan pečat urbanističkoj preobrazbi Staroga Grada krajem 19. vijeka.</td>
                    <td>
                        <div>
                          <a target="_blank" href="images/grad/palata_biankini.jpg">
                          <img class="img-fluid" src="images/grad/palata_biankini.jpg" width="250px" height="auto" alt="palata Biankini">
                        </div>
                    </td>
               </tr>
               <tr>
                    <td>Budrovka</td>
                    <td>Iako biljka, hvarski lavandin ili hvarska lavanda nastala križanjem prave i širokolisne lavande žila je kucavica Starog grada i samog ostrva Hvara.</td>
                    <td>
                        <div>
                          <a target="_blank" href="images/grad/hvarska_lavanda.jpg">
                          <img class="img-fluid" src="images/grad/hvarska_lavanda.jpg" width="250px" height="auto" alt="lavanda">
                        </div>
                    </td>
               </tr>
          </tbody>
          <tfoot>
              <td colspan=3><a class="ostale_znamenitosti" target=_blank href="https://www.stari-grad.eu/hr/znamenitosti-staroga-grada">Pogledajte i ostale znamenitosti Starog grada</a></td>
          </tfoot>
        </table>
      </div><!-- end col8-->
    </div><!-- end row-->
  </div><!-- end container-->
@endsection("content")

 