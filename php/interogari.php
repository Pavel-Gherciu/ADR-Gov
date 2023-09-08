<?php
session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: interogari.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="shortcut icon" href="../images/logo2.png">
  <title>Interogari</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../js/query.js"></script>
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
          <p class="logout"> <a href="interogari.php?logout='1'" class="logout">Log out</a> </p>
        </div>
      <?php endif ?>
  </div>
</nav>
<div class="container">
</div>
<main>
  <div class="container query_container">
    <div class = "table-container">
      <div class="row">
        <h1 class="query-title" align=center>Selectarea datelor specifice</h1>
        <form class="text-center" action="interogari.php" method="POST">
          <div class="form-group">
            <label>Introduce id-ul regiunii</label>
            <input type="text" class="form-control" name="id" placeholder="id_regiune"></input>
            <br>
            <label>Selectează tabelul</label>
            <select name ="table" class="form-control" id="table">
              <option>Selectează tabelul</option>
              <?php 
              include('config.php');
              $query = "SHOW TABLES FROM lucr_an WHERE Tables_in_lucr_an NOT LIKE 'admin';";
              $do = mysqli_query($link, $query);
              while($row = mysqli_fetch_array($do)){
                echo '<option value="'.$row['Tables_in_lucr_an'].'">'.$row['Tables_in_lucr_an'].'</option> ';
              }
              ?>
            </select>
            <br>
            <label>Selectează un field</label>
            <select name ="field" class="form-control" id="field">
              <option>Selectează un field</option>
            </select>
          </div>
          <input type="submit" name="submit" class ="btn btn-primary" value="Confirmă">
        </form>
      </div>

      <div class="row">
        <table class="table table-bordered table-striped table_query">
          <thead>
            <tr>
              <th class="th_query">ID</td>
              <th class="th_query"><?php if(isset($_POST['submit'])){ echo $_POST['field']; }else{ echo "Interogare";} ?></td>
            </tr>
          </thead>
          <tbody>
            <?php 
            if(isset($_POST['submit'])){
              $id = $_POST['id'];
              $table = $_POST['table'];
              $column = $_POST['field'];
              if($id != "" || $table != "" || $column != ""){
                $query = "SELECT F.$column FROM $table F WHERE id_regiune = '$id'";
                $data = mysqli_query($link,$query) or die('error');
                if(mysqli_num_rows($data) > 0){
                  while($row = mysqli_fetch_assoc($data)){
                    $res1 = $id;
                    $res2 = $row[$column];
                    ?>  
                  <tr>
                    <td class="td_query"><?php echo $res1; ?></td>
                    <td class="td_query"><?php echo $res2; ?></td>
                  </tr>
                  <?php
                  }
                }else{
                  ?>
                  <tr>
                    <td>Eroare</td>
                  </tr>
                  <?php
                }
              }
            };
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
<script src="../js/time.js"></script>
</body>
</html>