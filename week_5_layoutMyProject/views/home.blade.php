@extends("layouts.master")
@section('title', 'Početna stranica')
 
@section("content")
  <div class="container" style="margin-top:30px">
    <div class="row">
      <!-- Start left section -->
      <div class="col-sm-4 left">
        <div class="slika">
          <img src="images/jelena_mihajlovic_blur.jpg" alt="Jelena" class="img-fluid rounded-circle">
        </div>
        <h2>Jelena Mihajlović</h2>
        <h5>Profesor filozofije i sociologije</h5>
        <h5>Web developer apprentice</h5>
        <p style="text-align: center;">Datum rođenja: 24.02.1984.</p>
        <a class="mejl" target="_blank" href="#"><i class="fa fa-envelope-o"></i> jmihajlovic84@gmail.com</a><br/>
        <a class="fejs" target="_blank" href="https://www.facebook.com/"><i class="flaticon-facebook-logo"></i></a>
        <h3>Blog writer</h3>
        <h5><a target="_blank" href="https://robokids.xyz/author/jelena-mihajlovic/">STEM tekstovi</h5></p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" target="_blank"
              href="https://robokids.xyz/prokrastinacija-kako-je-izbjeci-robokids/">Prokrastinacija</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://robokids.xyz/dizajniranje-beba/">Dizajniranje beba</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://robokids.xyz/primjena-robota-u-luci/">Robotizacija</a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-8 text-center">
        <h2>Biografija</h2>
        <h5><i>Što je teži uspon uz brdo, to je ljepši pogled sa vrha</i></h5>
        <p>Rođena u Karlovcu, djetinjstvo provela u <a target="_blank"
            href="http://www.jastrebarsko.hr/projekti/dugorocni_strateski_projekti/perivoj/">Jastrebarskom</a>, malom
          pitoresknom gradu sa <a target="_blank"
            href="http://jadovno.com/katanac-na-istini-logora-astrebarsko-i-dio/#.XUAcEPIzbIU">zastrašujućom istorijom
            iz II svjetskog rata</a>, smještenom negdje na sredini puta između Zagreba i Karlovca.</p>
        <p class="border_bottom"><q>Jaska</q> ostaje značajni okvir mog života kojem se uvijek vraćam. Priče davno
          ispričane u djetinjstvu
          protežu se uokvirujući sadašnji život, usmjeravajući ga i iznova ga nijansirajući bojama opalog lišća u jesen
          i šafranova, vjesnika proljeća, iz staroga parka.</p>
        <br>
        <div class="row">
          <div class="col-12">
            <h2>Obrazovanje</h2>
          </div>
          <div class="col-12 col-lg-6">
            <img class="img-fluid" src="images/fi_logo_gray.png" width="150px" alt="filozofija">
            <h5>Akademsko obrazovanje</h5>
            <p>Nakon završetka banjolučke Gimnazije školovanje nastavljam na Filozofskom fakultetu na odsjeku za Filozofiju i sociologiju nakon čijeg završetka stičem zvanje profesora filozofije i sociologije.</p> 
            <p class="border_bottom">U banjolučkim srednjim školama radila sam kao predavač na predmetima: Logika, Filozofija, Sociologija, Filozofija i etika, Demokratija i ljudska prava, Kultura religija i Poslovna komunikacija.</p>
          </div>
          <div class=" col-12 col-lg-6">
              <img class="img-fluid it" src="images/it_logo_gray.png" width="150px" alt="it-learn">
              <h5>Neformalno obrazovanje</h5>
              <p class="border_bottom">Nakon pohađanja edukacije iz oblasti digitalnog marketinga, angažujem se kao volonter u <a target="_blank" href="https://robokids.xyz/">Robokids</a> centru za obrazovanje mladih i STEM edukaciju te se okrećem IT sektoru, učeći nove vještine iz oblasti grafičkog dizajna, pisanja tekstova po SEO principima što potom i postaje inicijalni povod za priključivanje programu ITP100 i usmjerenje ka programiranju i web development-u.</p>
          </div><!-- end row obrazovanje-->
        </div>
        <div class="row marg_bottom">
          <div class="col-12">
              <a class="biography" target="_blank" href="file:///C:/Users/Korisnik/Desktop/IT%20prekvalifikacija/Projektni%20zadatak/Jelena%20Mihajlovi%C4%87,%20CV,%20europass.pdf">Moja biografija</a>
          </div>
        </div><!-- end row-->
      </div><!-- end col8-->
      
    </div><!-- end row-->
  </div><!-- end container-->
@endsection("content")

  