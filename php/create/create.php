<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Record</title>
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
          <h2 class="mt-5">Adaugă o regiune</h2>
          <p>Vă rog completați spațiile pentru a fi adăugate în baza de date.</p>
          <?php include('create_handler.php') ?>
          <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
            <?php include('create_fields.php') ?>
            <input type="hidden" name="table" value="<?php echo $id; ?>"/>
            <input type="submit" class="btn btn-primary" value="Trimite">
            <a href="../../crud.php" class="btn btn-secondary ml-2">Inapoi</a>
          </form>
        </div>
      </div>        
    </div>
  </div>
</body>
</html>