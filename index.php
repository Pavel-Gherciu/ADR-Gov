<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: index.php");
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
          <img src="images/logo.png" alt="logo agentie" id="top-logo" onclick="location.href='';">
          <div class="top-title" onclick="location.href='';">Agenția de <br> dezvoltare regională </div>
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
          <p class="logout"> <a href="index.php?logout='1'" class="logout">Log out</a> </p>
        </div>
      <?php endif ?>
    </div>
  </nav>
  <main>
    <div class="container">
      <div class="menu-title" align=center>Dezvoltarea Regională a Republicii Moldova</div>
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
      <section class="menu-regions">
        <p class="region-title" align=center>
        Crearea regiunilor de dezvoltare
        </p>
        <p class="region-content">
          &nbsp Modelul de dezvoltare regională, introdus prin Legea privind dezvoltarea regională în Republica Moldova, prevede crearea unor regiuni
        mai mari, cu atribuții în domeniul planificării strategice, care ar complementa structura teritorial-administrativă existentă.
        Această abordare oferă posibilitatea reducerii costurilor și a creșterii capacităților de planificare strategică, menținînd totodată prestarea
        serviciilor publice mai aproape de cetățeni - la nivelurile local și raional. Legea privind dezvoltarea regională corespunde aspirațiilor
        Republicii Moldova de integrare europeană și prevede crearea a două regiuni de nivel european NUTS II (Nord, Centru), precum și a
        regiunilor mai mici de nivelul NUTS III (Sud, UTA Găgăuzia, regiunea transnistreană și municipiul Chișinău).
        </p>
        <img src="images/map.png" alt="harta moldovei pe regiuni">
      </section>
    </div>
  </main>
  <script src="js/time.js"></script>
</body>
</html>