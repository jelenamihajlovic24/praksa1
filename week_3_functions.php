<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Some API functions</title>
</head>
<body>
<h1>Some API functions</h1>
<h2>Global variables or „superglobals“</h2> 
<p> Uvijek dostupne varijable, bez obzira na njihov domet.</p>
<p>Može im se pristupiti iz svake funkcije, klase ili fajla bez posebnih zahtjeva.</p>
<ul>
    <li><b>$_SERVER</b> – sadrži informacije o hederu, putanjama i lokaciji skripte 
        <p>Ove podatke stvara web server.</p>
    </li>
    <li><b>$_GET</b> – se koristi kako bi pokupila podatke poslane putem HTML forme „get“ metodom a može se iščitati u URL parametrima
        <p>U tom slučaju ova globalna varijabla treba biti izjednačena sa name unosom forme, a u method-u se treba naznačiti da je riječ o GET metodi.</p>
    </li>
    <li><b>$_POST</b> – se koristi kako bi uzeo podatke nakon slanja putem HTML forme „post“ metodom. 
        <p>Ovom metodom se šalju osjetljivi podaci poput šifre i sl. te kao takvi neće biti vidljivi na URL parametrima već proslijeđeni serveru na dalju obradu.</p>
    </li>
</ul>
<h2>JSON PHP</h2>
<ul>
    <li><b>json_encode()</b> – ugrađena funkcija za obradu JSON-a, konkretno za njegovo pretvaranje u JSON 
        <p>Vraća string kao JSON.
        Vrijednost varijable će pretvoriti u JSON format:</p>
        <p><pre>
        $myObj -> name = „Jelena“;
        $myObj -> age = 35;
        $myObj -> city = „Jastrebarsko“;

        $myJSON = json_encode($myObj);

        echo $myJSON;
        Result:{„name“:“Jelena“, „age“:“35“,“city“:“Jastrebarsko“} </pre></p>
        <?php
        error_reporting(0);
        $myObj -> name = „Jelena“;
        $myObj -> age = 35;
        $myObj -> city = „Jastrebarsko“;

        $myJSON = json_encode($myObj);

        echo $myJSON;
        ?>
    </li>
    <li><b>json_decode()</b> – funkcija za pretvaranje JSON kodiranog niza u PHP varijablu
        <p>Dekodira JSON.</p>
    </li>
</ul>
<h2>PHP funkcije</h2>
<ul>
    <li><b>include_once()</b> – je funkcija koja uključuje i procjenjuje određeni fajl tokom izvršavanja skripte. 
        <p>Slična je include funkciji sa razlikom da ako je kod iz fajla već jednom bio uključen neće biti ponovo uključen već će ova funkcija samo vratiti „TRUE“. Dakle, fajl se samo jednom uključuje.</p>
    </li>
    <li><b>is_array()</b> – pronalazi da li je data varijabla niz i vraća „TRUE“ ili „FALSE“.
        <p>Slične funkcije koje provjeravaju da li je varijabla decimalni broj, cjeli broj, string(riječ) ili objekat jesu is_float(), is_int(), is_string(), is_object()</p>
    </li>
    <li><b>in_array()</b> – provjerava da li vrijednost postoji u nizu. 
        <p>Vraća TRUE ukoliko je vrijednost pronađena u nizu, u suprotnom vraća FALSE. Tzv. traži „iglu u plastu sijena“, tj. needle (traženu vrijednost, value) in haystack (niz, array) manje striktno uspoređujući ukoliko drugačije nije navedeno, tačnije ukoliko strict nije definisan kao treći parametar kao TRUE. U tome slučaju će funkcija in_array() da provjeri  i koji je tip vrijednost u nizu.</p>
    </li>
    <li><b>count()</b> – broji sve elemente u nizu, ili nešto u objektu
        <p>Vraća broj.</p>
        <p><pre>error_reporting(0);
        $cars = array („Pegeout“, „Fico“, „Yugo“);
        echo count($cars);
        Result: 3</pre></p>
        <?php 
        error_reporting(0);
        $cars = array („Pegeout“, „Fico“, „Yugo“);
        echo count($cars);
        ?>
    </li>
    <li><b>empty()</b> – određuje da li je varijabla prazna
        <p>Varijabla se smatra praznom ukoliko ne postoji ili ukoliko je njena vrijednost FALSE. Ova funkcija ne izriče upozorenje ako varijabla ne postoji.</p>
    </li>
    <li><b>error()</b> – je osnovna klasa za sve PHP greške
        <p>Svojstva greške – (message) poruka, (code) kod, (file) naziv fajla gdje se desila greška i (line) linija gdje se greška desila.</p>
    </li>
    <li><b>error_log()</b> – šalje poruku o pogrešci o predefinisanim načinima rukovanja greškom web serveru zaduženom za logovanje, na mejl i u fajl
        <p>pr. „Failed to conect to a database!“ ili „You are not John!“</p>
    </li>
    <li><b>print_r()</b> – printa informacije o varijabli koje su čitljive ljudima</li>
    <li><b>delete()</b> – Pogledaj unlink() ili unset()
        <ul>
            <li><b>unlink()</b> – briše ime fajla. (Potrebno je postaviti ime i putanju fajla - filename)</li>
            <li><b>unset() +</b> - poništava zadane varijable</li>
        </ul>
    </li>
    <li><b>getData()</b> - </li>
    <li><b>saveData()</b> -</li>
    <li><b>respond()</b> - </li>
    <li><b>http_responde_code</b> – postavlja (setuje) ili vraća http odgovor o statusu koda
        <p>code – opcionalno postaviti za povratnu informaciju o vrsti koda http_response_code(code); pr. http_response_code(404)</p>
    </li>
    <li><b>global()</b> – traži u čitavom programu gdje se nalazi tražena varijabla, ne samo u treutnom fajlu</li>
    <li><b>file_exists()</b> – traži da li fajl ili direktorijum postoji
        <p>file_exist(path)<p>
        <p>file_exist(‘/path/to/doc.txt’)</p>
        <p>Vraća TRUE ukoliko fajl postoji ili FALSE ukoliko ne.</p>
    </li>
    <li><b>is_file</b> – govori da li je ime fajla regularan fajl</li>
    <li><b>file()</b> – čita cjelokupan fajl kao niz (pretvarajući ga u niz)</li>
</ul>



    
</body>
</html>
