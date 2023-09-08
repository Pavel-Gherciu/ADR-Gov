<?php

require_once "config.php";

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 1){ 

$sql = "DELETE FROM regiuni_de_dezvoltare WHERE id_regiune = ?";

if($stmt = mysqli_prepare($link, $sql)){
  mysqli_stmt_bind_param($stmt, "i", $param_id);
  $param_id = trim($_POST["id"]);
  if(mysqli_stmt_execute($stmt)){
    header("location: ../crud.php");
    exit();
  } else{
    echo "Eroare";
  }
}
mysqli_stmt_close($stmt);
mysqli_close($link);
}

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 2){ 

  $sql = "DELETE FROM demografia WHERE id_demogr = ?";
  
  if($stmt = mysqli_prepare($link, $sql)){ 
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = trim($_POST["id"]);
    if(mysqli_stmt_execute($stmt)){
      header("location: ../crud.php");
      exit();
    } else{
      echo "Eroare";
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($link);
}

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 3){ 

$sql = "DELETE FROM forta_de_munca WHERE id_forta_munca = ?";

if($stmt = mysqli_prepare($link, $sql)){ 
  mysqli_stmt_bind_param($stmt, "i", $param_id);
  $param_id = trim($_POST["id"]);
  if(mysqli_stmt_execute($stmt)){
    header("location: ../crud.php");
    exit();
  } else{
    echo "Eroare";
  }
}
mysqli_stmt_close($stmt);
mysqli_close($link);
}


if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 4){ 

$sql = "DELETE FROM indicatori_sociali WHERE id_indicatori = ?";

if($stmt = mysqli_prepare($link, $sql)){ 
  mysqli_stmt_bind_param($stmt, "i", $param_id);
  $param_id = trim($_POST["id"]);
  if(mysqli_stmt_execute($stmt)){
    header("location: ../crud.php");
    exit();
  } else{
    echo "Eroare";
  }
}
mysqli_stmt_close($stmt);
mysqli_close($link);
}



if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 5){ 

$sql = "DELETE FROM produs_intern_brut WHERE id_pib = ?";

if($stmt = mysqli_prepare($link, $sql)){ 
  mysqli_stmt_bind_param($stmt, "i", $param_id);
  $param_id = trim($_POST["id"]);
  if(mysqli_stmt_execute($stmt)){
    header("location: ../crud.php");
    exit();
  } else{
    echo "Eroare";
  }
}
mysqli_stmt_close($stmt);
mysqli_close($link);
}

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 6){ 

$sql = "DELETE FROM infrastructura WHERE id_infr = ?";

if($stmt = mysqli_prepare($link, $sql)){ 
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = trim($_POST["id"]);
    if(mysqli_stmt_execute($stmt)){
      header("location: ../crud.php");
      exit();
    } else{
      echo "Eroare";
    }
}
mysqli_stmt_close($stmt);
mysqli_close($link);
}


if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 7){ 

$sql = "DELETE FROM industrie WHERE id_ind = ?";

if($stmt = mysqli_prepare($link, $sql)){ 
  mysqli_stmt_bind_param($stmt, "i", $param_id);
  $param_id = trim($_POST["id"]);
  if(mysqli_stmt_execute($stmt)){
    header("location: ../crud.php");
    exit();
  } else{
    echo "Eroare";
  }
}
mysqli_stmt_close($stmt);
mysqli_close($link);
}


if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 8){ 

$sql = "DELETE FROM agricultura WHERE id_agr = ?";

if($stmt = mysqli_prepare($link, $sql)){ 
  mysqli_stmt_bind_param($stmt, "i", $param_id);
  $param_id = trim($_POST["id"]);
  if(mysqli_stmt_execute($stmt)){
    header("location: ../crud.php");
    exit();
  } else{
    echo "Eroare";
  }
}
mysqli_stmt_close($stmt);
mysqli_close($link);
}
    
if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 9){ 

  $sql = "DELETE FROM antreprenoriat WHERE id_antrep = ?";
  
  if($stmt = mysqli_prepare($link, $sql)){ 
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = trim($_POST["id"]);
    if(mysqli_stmt_execute($stmt)){
      header("location: ../crud.php");
      exit();
    } else{
      echo "Eroare";
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($link);
  }


?>