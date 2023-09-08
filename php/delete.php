<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stergerea datelor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-5 mb-3">Stergerea datelor</h2>
          <?php include('delete_handler.php') ?>
          <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI']));?>" method="post">
            <div class="alert alert-danger">
              <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
              <p>Sunteti sigur ca doriti sa stergeti datele?</p>
              <p>
                <input type="submit" value="Da" class="btn btn-danger">
                <a href="../crud.php" class="btn btn-secondary">Nu</a>
              </p>
            </div>
          </form>
        </div>
      </div>        
    </div>
  </div>
</body>
</html>