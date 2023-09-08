<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: crud.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analiza</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" href="images/logo2.png">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
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
          <p class="logout"> <a href="crud.php?logout='1'" class="logout">Log out</a> </p>
        </div>
      <?php endif ?>
    </div>
  </nav>
  <div class="container">
  </div>
  <main>
    <div class="container">
      <div class="table-container">
          <div class="menu-title2" align=center>Analiza socio-economică de dezvoltare a regiunilor RM</div>
          <p class="crud-description">&nbspDezvoltarea regională este importantă în contextul integrării Republicii Moldova în Uniunea Europeană, având ca obiectiv dezvoltarea social-economică echilibrată şi durabilă a ţării, reducerea disparităţilor dintre regiuni şi în interiorul lor. 
            Analiza implementării masurilor luate de autorități, precum si situația actuală a regiunilor Republicii Moldova necesită a fi sistematizată și stocată in BD cu o ulterioară organizare a accesului larg la informaţiile ce pot fi obţinute în baza datelor stocate în ea.</p>
          <p class="crud-description2">
            Această pagină prezintă mai multe date statistice repartizate pe domenii pentru a oferi o viziune simplă și rapidă a situației actuale din regiunile de dezvoltare ale Republcii Moldova.
          </p>
          <?php include('php/crud_handler.php') ?> 
      </div>
    </div>
  </main>
  <script src="js/time.js"></script>
  <script src="js/removal.js"></script>
</body>
</html>