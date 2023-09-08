<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: regiuni.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADR</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" href="images/logo2.png">
</head>
<body>
  <header class="top-bg">
    <div class="container1">
      <div class ="box1">
        <div>
          <img src="images/logo.png" alt="logo agentie" id="top-logo" onclick="location.href='index.php';">
          <div class="top-title" onclick="location.href='index.php';">Agenția de <br> dezvoltare regională </div>
        </div>
        <div class="motto">COOPERARE PENTRU DEZVOLTARE</div>
      </div>
      <div class="box2">
        <div>
          <img src="images/gov.png" alt="logo guvern" id="top-gov">
          <div class="top-gov-text">Ministerul Infrastructurii <br> și Dezvoltării Regionale</div>
        </div>
        <p class="date">Sâmbătă, 18 Decembrie 2021</p>
      </div>
    </div>
  </header>
  <nav class="bar">
    <div class="container menu">
      <a href="index.php" class="menu-btn menu-home"><i class="fas fa-home"></i></a>
      <a href="regiuni.php" class="menu-btn">Regiunile de dezvoltare</a>
      <a href="crud.php" class="menu-btn">Analiza dezvoltării regiunilor</a>
      <a href="php/interogari.php" class="menu-btn">Interogări</a>
      <a href="contacts.php" class="menu-btn">Contact</a>
      <?php  
        if(isset($_SESSION['username'])) {
            echo "";
        } else {
            echo "<a href='php/login/login.php' class='menu-btn logare'>Logare</a>";                                       
        }
        ?>
      <?php  if (isset($_SESSION['username'])) : ?>
        <div class="menu-log">
          <p>Logat ca <b><?php echo $_SESSION['username']; ?></b></p>
          <p class="logout"> <a href="regiuni.php?logout='1'" class="logout">Log out</a> </p>
        </div>
      <?php endif ?>
    </div>
    </div>
  </nav>
  <main>
    <div class="container container2">
      <div class="menu-title" align=center>Regiunile de dezvoltare ale Republicii Moldova</div>
      <section class="menu-description">
        <p>
          &nbsp Pentru a-şi atinge obiectivele naţionale de dezvoltare economică şi socială, orice ţară are nevoie
          de existenţa unor regiuni dinamice şi competitive, dezvoltarea regională fiind o politică
          complementară pentru politicile macroeconomice şi structurale.
        </p>
        <br>
        <p>
          &nbsp Dezvoltarea regională durabilă este un imperativ asumat şi Guvernul Republicii Moldova şi-a
          confirmat angajamentul ferm pentru distribuirea echitabilă a şanselor de dezvoltare pe întreg
          teritoriul ţării. Acest lucru este confirmat atât la nivel legislativ cât şi la nivelul planificării
          strategice. Succesul implementării politicii regionale va impulsiona şi accelera dezvoltarea ţării în
          ansamblu, scopul final fiind îmbunătăţirea calităţii vieţii cetăţenilor, indiferent unde locuiesc
          aceştia pe teritoriul Republicii Moldova.
        </p>
      </section>
      <div class="tabbed">
        <input type="radio" name="tabs" id="tab-nav-1" checked>
        <label for="tab-nav-1">Chișinău</label>
        <input type="radio" name="tabs" id="tab-nav-2">
        <label for="tab-nav-2">Nord</label>
        <input type="radio" name="tabs" id="tab-nav-3">
        <label for="tab-nav-3">Centru</label>
        <input type="radio" name="tabs" id="tab-nav-4">
        <label for="tab-nav-4">Sud</label>
        <input type="radio" name="tabs" id="tab-nav-5">
        <label for="tab-nav-5">Găgăuzia</label>
        <div class="tabs">
          <div class="clearfix">
            <img src="images/harta_chisinau.png" alt="" class="harta_regiune">
            <div>
              <p>&nbspMunicipiul Chișinău este o unitate administrativ-teritorială de nivelul al doilea din Republica Moldova. 
                Aceasta include în componența sa capitala țării, pro-priu zis Chișinăul, plus 6 orașe și 12 comune din imediata vecinătate (suburbii) ale orașului.
              </p>
              <p>
                &nbspMunicipiul Chișinău beneficiind de statutul de capitală, concentrează mare parte din
                activitatea economică a Republicii Moldova. Pentru Chișinău sunt multe domenii economice
                prioritare, din care pot fi luate în considerare următoarele sectoare de interes deosebit:
                fabricarea de produse informatice, electronice și optice, telecomunicații și programare,
                consultanță și activități conexe, subliniind evident importanța sectorului TIC pentru Chișinău.
                Sectorul TIC a fost identificat, de către MIEPO ca fiind unul dintre principalele sectoare
                economice care contribuie la dezvoltarea economică a orașului Chișinău și evident a
                Republicii Moldova.</p>
            </div>
          </div>
          <div class="clearfix">
            <img src="images/harta_nord.png" alt="" class="harta_regiune">
            <div>
              <p>&nbspRegiunea de Dezvoltare Nord (abreviat RDN) este o regiune de dezvoltare care include municipiul Bălți și 11 raioane: 
              Briceni, Edineț, Dondușeni, Drochia, Fălești, Florești, Glodeni, Ocnița, Rîșcani, Sîngerei și Soroca.
              </p>
              <p>
                &nbspLa nivelul Regiunii Nord avem identificate următoare sectoare cu potențial de creștere:
                agricultura și prelucrarea produselor alimentare, identificat de către MIEPO ca fiind unul
                dintre principalele sectoare economice, fabricarea produselor alimentare și lactate, precum și
                fabricarea de echipamente electrice, dispozitive de cablare care împreuna pot constitui
                elemente esențiale de dezvoltare. 
              </p>
            </div>    
          </div>
          <div class="clearfix">
            <img src="images/harta_centru.png" alt="" class="harta_regiune">
            <div>
              <p>&nbspRegiunea de Dezvoltare Centru (abreviat RDC) a Republicii Moldova include 13 raioane: 
                Anenii Noi, Călărași, Criuleni, Dubăsari, Hîncești, Ialoveni, Nisporeni, Orhei, Rezina, Strășeni, Șoldănești, Telenești și Ungheni.
              </p>
              <p>
                &nbspPentru Regiunea Centru, sectoarele economice cu potențial relevante sunt: agricultura și
                prelucrarea produselor alimentare, identificată de către MIEPO ca fiind unul dintre principalele
                sectoare economice, dar de interes deosebit sunt și producția animală, prelucrarea și
                conservarea cărnii și producția de produse din carne, indicând un rol important pentru industria
                cărnii. De asemenea, în această regiune sectorul textilelor, articolelor de îmbrăcăminte,
                încălțămintei și pieilor este unul dezvoltat comparativ cu alte zone din Moldova, precum și 
                fabricarea de produse farmaceutice și zona de materiale de construcții sunt, de asemenea,
                zone economice puternice.
              </p>
            </div>
          </div>
          <div class="clearfix">
            <img src="images/harta_sud.png" alt="" class="harta_regiune">
            <div>
              <p>&nbspRegiunea de Dezvoltare Sud (abreviat RDS) a Republicii Moldova cuprinde 8 raioane: 
                Basarabeasca, Cahul, Cantemir, Căușeni, Cimișlia, Ștefan Vodă, Leova și Taraclia. În comparație cu alte regiuni de dezvoltare și mediile pe țară, această regiune are cel mai mic grad de industrializare.
              </p>
              <p>
                &nbspPentru Regiunea Sud, din analiză remarcăm următoarele sectoare economice cu potențial:
                industria alimentară, care include fabricarea produselor de morărit, a amidonului și a
                produselor din amidon, fabricarea produselor de panificație și a produselor făinoase dar și
                fabricarea băuturilor, printre care se numără și producția de vin. 
              </p>
            </div>
          </div>
          <div class="clearfix">
            <img src="images/harta_gagauzia.png" alt="" class="harta_regiune1">
            <div>
              <p>&nbspGăgăuzia este o regiune autonomă (din 1995) din sud-vestul Republicii Moldova, locuită preponderent de găgăuzi, 
                un popor vorbitor al unei limbi turcice și apropiat cultural de turci, însă de confesiune creștină ortodoxă, 
                și fiind alcătuită din trei raioane: Comrat, Ceadâr-Lunga și Vulcănești.
              </p>
              <p>
                &nbspPentru UTA Găgăuzia, sectoare economice cu potențial relevante sunt: prelucrarea
                produselor alimentare, cu o mențiune specială la nivelul sectoarelor fabricarea produselor de
                morărit, a amidonului și a produselor din amidon, precum și fabricarea băuturilor, inclusiv
                producția de vin la fel ca în Regiunea Sud.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="js/time.js"></script>
</body>
</html>