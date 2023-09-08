<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analiza</title>
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="../../css/all.css">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="shortcut icon" href="../../images/logo2.png">
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
          <img src="../../images/logo.png" alt="logo agentie" id="top-logo" onclick="location.href='../../index.php';">
          <div class="top-title" onclick="location.href='../../index.php';">Agenția de <br> dezvoltare regională </div>
        </div>
        <div class="motto">COOPERARE PENTRU DEZVOLTARE</div>
      </div>
      <div class="box2">
        <div>
          <img src="../../images/gov.png" alt="logo guvern" id="top-gov">
          <div class="top-gov-text">Ministerul Infrastructurii <br> și Dezvoltării Regionale</div>
        </div>
        <p class="date">Sâmbătă, 18 Decembrie 2021</p>
      </div>
    </div>
  </header>
  <nav class="bar">
    <div class="container menu">
      <a href="../../index.php" class="menu-btn menu-home"><i class="fas fa-home"></i></a>
      <a href="../../regiuni.php" class="menu-btn">Regiunile de dezvoltare</a>
      <a href="../../crud.php" class="menu-btn">Analiza dezvoltării regiunilor</a>
      <a href="../interogari.php" class="menu-btn">Interogări</a>
      <a href="../../contacts.php" class="menu-btn">Contact</a>
      <a href="" class="menu-btn">Logare</a>
    </div>
  </nav>
  <div class="container">
  </div>
  <main>
    <div class="container container3">
      <div class="table-container">
        <div class="menu-title2" align=center>Logarea pentru administratori</div>
        <?php include('server.php') ?>
        <div class="logform">
          <form action="login.php" method ="post" name="logform">
            <div class="logform_div">
              <label for="username" class="logform_label">Username</label>
              <input type="text" name="username" class="logform_input" placeholder="Username" required>
            </div>
            <div class="logform_div">
              <label for="password" class="logform_label">Parola</label>
              <input type="password" name="password" class="logform_input" placeholder="Parola" required>
            </div>
            <?php include('errors_login.php') ?>
            <button type="submit" class="logform_button btn btn-primary" align=center name="login_user">Confirmă</button>
          </form>
        </div>
      </div>
    </div>
  </main>
  <script src="../../js/time.js"></script>
</body>
</html>