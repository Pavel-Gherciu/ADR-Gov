<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: read.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADR</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="shortcut icon" href="../images/logo2.png">
</head>
<body>
  <header class="top-bg">
    <div class="container1">
      <div class ="box1">
        <div>
          <img src="../images/logo.png" alt="logo agentie" id="top-logo" onclick="location.href='../index.php';">
          <div class="top-title" onclick="location.href='../index.php';">Agenția de <br> dezvoltare regională </div>
        </div>
        <div class="motto">COOPERARE PENTRU DEZVOLTARE</div>
      </div>
      <div class="box2">
        <div>
          <img src="../images/gov.png" alt="logo guvern" id="top-gov">
          <div class="top-gov-text">Ministerul Infrastructurii <br> și Dezvoltării Regionale</div>
        </div>
        <p class="date">Sâmbătă, 18 Decembrie 2021</p>
      </div>
    </div>
  </header>
  <nav class="bar">
    <div class="container menu">
      <a href="../index.php" class="menu-btn menu-home"><i class="fas fa-home"></i></a>
      <a href="../regiuni.php" class="menu-btn">Regiunile de dezvoltare</a>
      <a href="../crud.php" class="menu-btn">Analiza dezvoltării regiunilor</a>
      <a href="interogari.php" class="menu-btn">Interogări</a>
      <a href="../contacts.php" class="menu-btn">Contact</a>
      <?php  
        if(isset($_SESSION['username'])) {
            echo "";
        } else {
            echo "<a href='login/login.php' class='menu-btn logare'>Logare</a>";                                       
        }
        ?>
      <?php  if (isset($_SESSION['username'])) : ?>
        <div class="menu-log">
          <p>Logat ca <b><?php echo $_SESSION['username']; ?></b></p>
          <p class="logout"> <a href="read.php?logout='1'" class="logout">Log out</a> </p>
        </div>
      <?php endif ?>
    </div>
  </nav>
  <main>
    <div class="container">
      <?php include('read_handler.php') ?>
      <div class="wrapper">
        <h1 class="read-title">Analiza regiunii</h1>
        <div class="form-group">
            <label>Numele regiunii</label>
            <p><b><?php echo $row["nume_regiune"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Suprafața regiunii</label>
            <p><b><?php echo $row["suprafata_regiune"]; ?> km2</b></p>
        </div>
        <div class="form-group">
            <label>Numărul populației</label>
            <p><b><?php echo $row["nr_populatie"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Densitatea medie a populației</label>
            <p><b><?php echo $row2["densitate_medie"]; ?> loc/km2</b></p>
        </div>
        <div class="form-group">
            <label>Sporul natural</label>
            <p><b><?php echo $row2["spor_natural"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Soldul migrației interne</label>
            <p><b><?php echo $row2["sold_migr_interna"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Numărul salariaților</label>
            <p><b><?php echo $row3["nr_salariati"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Rata de ocupare a populaţiei</label>
            <p><b><?php echo $row3["rata_ocuparii"]; ?>%</b></p>
        </div>
        <div class="form-group">
            <label>Locuri de munca vacante</label>
            <p><b><?php echo $row3["loc_munca_vacante"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Numarul somerilor</label>
            <p><b><?php echo $row3["nr_someri"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Rata somajului</label>
            <p><b><?php echo $row3["rata_somaj"]; ?>%</b></p>
        </div>
        <div class="form-group">
            <label>Numarul institutiilor medicale</label>
            <p><b><?php echo $row4["nr_institutii_medicale"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Numarul scolilor</label>
            <p><b><?php echo $row4["nr_scoli"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Numarul elevilor</label>
            <p><b><?php echo $row4["nr_elevi"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Numarul institutiilor superioare de invatamant</label>
            <p><b><?php echo $row4["nr_inst_superioare"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Produsul intern brut</label>
            <p><b><?php echo $row5["pib_regional"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Ponderea produsului intern brut</label>
            <p><b><?php echo $row5["ponderea_pib"]; ?>%</b></p>
        </div>
        <div class="form-group">
            <label>Lungimea drumurilor publice</label>
            <p><b><?php echo $row6["lung_drum_publice"]; ?> km</b></p>
        </div>
        <div class="form-group">
            <label>Ponderea locuintelor alimentate cu gaze </label>
            <p><b><?php echo $row6["pond_loc_gazificate"]; ?>%</b></p>
        </div>
        <div class="form-group">
            <label>Ponderea locuintelor alimentate prin apeduct </label>
            <p><b><?php echo $row6["alim_apeducte"]; ?>%</b></p>
        </div>
        <div class="form-group">
            <label>Ponderea locuintelor conectate la sistem de canalizare </label>
            <p><b><?php echo $row6["pond_canalizare"]; ?>%</b></p>
        </div>
        <div class="form-group">
            <label>Numarul angajatilor in industrie </label>
            <p><b><?php echo $row7["nr_angajati"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Numarul intreprinderilor industriale</label>
            <p><b><?php echo $row7["nr_intreprinderi_ind"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Valoarea productiei industriale</label>
            <p><b><?php echo $row7["val_productie"]; ?> mil. lei</b></p>
        </div>
        <div class="form-group">
            <label>Ponderea productiei industriale</label>
            <p><b><?php echo $row7["pond_productie"]; ?>%</b></p>
        </div>
        <div class="form-group">
            <label>Numarul angajatilor in agricultura</label>
            <p><b><?php echo $row8["nr_angajati_agr"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Suprafata terenului arabil</label>
            <p><b><?php echo $row8["teren_arabil"]; ?> hectare</b></p>
        </div>
        <div class="form-group">
            <label>Numarul animalelor</label>
            <p><b><?php echo $row8["nr_animale"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Recolta anuala de cereale</label>
            <p><b><?php echo $row8["recolta_cerealiere"]; ?> tone</b></p>
        </div>
        <div class="form-group">
            <label>Numarul intreprinderilor comerciale</label>
            <p><b><?php echo $row9["nr_intreprinderi"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Numarul salariatilor intreprinderilor comerciale</label>
            <p><b><?php echo $row9["nr_salariati"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Soldul veniturilor intreprinderilor comerciale</label>
            <p><b><?php echo $row9["sold_venit"]; ?> mil. lei</b></p>
        </div>
        <p><a href="../crud.php" class="btn btn-primary">Back</a></p>
      </div>
    </div>
  </main>
  <script src="../js/time.js"></script>
</body>
</html>