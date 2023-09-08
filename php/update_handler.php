<?php

require_once "config.php";
 

$nume_regiune = $suprafata = $nr_populatie = "";
$nume_regiune_err = $suprafata_err = $nr_populatie_err = "";
 

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 1){

  $id = $_POST["id"];
  
  $input1 = trim($_POST["nume_regiune"]);
    if(empty($input1)){
        $nume_regiune_err = "Introduceti un nume de regiune";
    } elseif(!filter_var($input1, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nume_regiune_err = "Introduceti un nume de regiune valid";
    } else{
        $nume_regiune = $input1;
    }
    

    $input2 = trim($_POST["suprafata"]);
    if(empty($input2)){
      $suprafata_err = "Introduceti suprafata regiunii";   
  } elseif(!ctype_digit($input2)){
      $suprafata_err = "Introduceti un numar valid";  
    } else{
      $suprafata = $input2;
    }

    $input3 = trim($_POST["nr_populatie"]);
    if(empty($input3)){
      $nr_populatie_err = "Introduceti nr. populatiei regiunii";     
    } elseif(!ctype_digit($input3)){
      $nr_populatie_err = "Introduceti un numar valid";
    } else{
      $nr_populatie = $input3;
    }
  
  if(empty($nume_regiune_err) && empty($suprafata_err) && empty($nr_populatie_err)){
      $sql = "UPDATE regiuni_de_dezvoltare SET nume_regiune=?, suprafata_regiune=?, nr_populatie=? WHERE id_regiune=?";
        
      if($stmt = mysqli_prepare($link, $sql)){
          mysqli_stmt_bind_param($stmt, "sssi", $nume_regiune, $suprafata, $nr_populatie, $id);
          
          if(mysqli_stmt_execute($stmt)){
              header("location: ../crud.php");
              exit();
          } else{
              echo "Eroare";
          }
      }
        
      mysqli_stmt_close($stmt);
  }
  
  mysqli_close($link);

} elseif(isset($_GET["id"]) && !empty(trim($_GET["id"]))  && intval(trim($_GET["table"])) == 1){
    $id =  trim($_GET["id"]);
    
    $sql = "SELECT * FROM regiuni_de_dezvoltare WHERE id_regiune = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        $param_id = $id;
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                $nume_regiune = $row["nume_regiune"];
                $suprafata = $row["suprafata_regiune"];
                $nr_populatie = $row["nr_populatie"];
            } else{
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Eroare";
        }
    }
    

    mysqli_stmt_close($stmt);
    

    mysqli_close($link);
  }




$id_regiune = $densitate_medie = $spor_natural = $sold_migr_interna = $anul = "";
$id_regiune_err = $densitate_medie_err = $spor_natural_err = $sold_migr_interna_err = $anul_err = "";

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 2){
  $id = $_POST["id"];

  $input1 = trim($_POST["id_regiune"]);
  if(empty($input1)){
      $id_regiune_err = "Introduceti id-ul regiunii";
  } elseif(!ctype_digit($input1)){
      $id_regiune_err = "Introduceti un numar valid";
  } else{
      $id_regiune = $input1;
  }
  
  $input2 = trim($_POST["densitate_medie"]);
  if(empty($input2)){
  $densitate_medie_err = "Introduceti densitatea medie a regiunii";   
  } elseif(!ctype_digit($input2)){
  $densitate_medie_err = "Introduceti un numar valid";  
  } else{
  $densitate_medie = $input2;
  }
  

  $input3 = trim($_POST["spor_natural"]);
  if(empty($input3)){
  $spor_natural_err = "Introduceti sporul natural al regiunii";     
  } else{
  $spor_natural = $input3;
  }

  $input4 = trim($_POST["sold_migr_interna"]);
  if(empty($input4)){
  $sold_migr_interna_err = "Introduceti soldul migratiei interne a regiunii";     
  } else{
  $sold_migr_interna = $input4;
  }
  
  $input5 = trim($_POST["anul"]);
  if(empty($input5)){
    $anul_err = "Introduceti anul";   
  } elseif(!ctype_digit($input5)){
    $anul_err = "Introduceti un numar valid";    
  } else{
    $anul = $input5;
  }

  if(empty($id_regiune_err) && empty($densitate_medie_err) && empty($spor_natural_err) && empty($sold_migr_interna_err)){
      $sql = "UPDATE demografia SET id_regiune=?, densitate_medie=?, spor_natural=?, sold_migr_interna=?, anul=? WHERE id_demogr=?";
      
      if($stmt = mysqli_prepare($link, $sql)){
          mysqli_stmt_bind_param($stmt, "sssssi", $id_regiune, $densitate_medie, $spor_natural, $sold_migr_interna, $anul, $id);

          if(mysqli_stmt_execute($stmt)){
              header("location: ../crud.php");
              exit();
          } else{
              echo "Eroare";
          }
      }
      
      mysqli_stmt_close($stmt);
  }
  
  mysqli_close($link);
    
}elseif(isset($_GET["id"]) && !empty(trim($_GET["id"]))  && intval(trim($_GET["table"])) == 2){
  $id = trim($_GET["id"]);
  
  $sql = "SELECT * FROM demografia WHERE id_demogr = ?";
  if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "i", $param_id);
      
      $param_id = $id;
      
      if(mysqli_stmt_execute($stmt)){
          $result = mysqli_stmt_get_result($stmt);

          if(mysqli_num_rows($result) == 1){
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

              $id_regiune = $row["id_regiune"];
              $densitate_medie = $row["densitate_medie"];
              $spor_natural = $row["spor_natural"];
              $sold_migr_interna = $row["sold_migr_interna"];
              $anul = $row["anul"];
          } else{
              header("location: error.php");
              exit();
          }
          
      } else{
          echo "Eroare";
      }
  }
  

  mysqli_stmt_close($stmt);
  

  mysqli_close($link);
} 



$nr_salariati = $rata_ocuparii = $loc_munca_vacante = $nr_someri = $rata_somaj = "";
$nr_salariati_err = $rata_ocuparii_err = $loc_munca_vacante_err = $nr_someri_err = $rata_somaj_err = "";

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 3){
  $id = $_POST["id"];

  $input1 = trim($_POST["id_regiune"]);
  if(empty($input1)){
    $id_regiune_err = "Introduceti id-ul regiunii";
  } elseif(!ctype_digit($input1)){
    $id_regiune_err = "Introduceti un numar valid";
  } else{
    $id_regiune = $input1;
  }
  
  $input2 = trim($_POST["nr_salariati"]);
  if(empty($input2)){
    $nr_salariati_err = "Introduceti numarul salariatilor";   
  } elseif(!ctype_digit($input2)){
    $nr_salariati_err = "Introduceti un numar valid";  
  } else{
    $nr_salariati = $input2;
  }
  

  $input3 = trim($_POST["rata_ocuparii"]);
  if(empty($input3)){
    $rata_ocuparii_err = "Introduceti rata de ocupare a populaţiei";     
  } else{
    $rata_ocuparii = $input3;
  }

  $input4 = trim($_POST["loc_munca_vacante"]);
  if(empty($input4)){
    $loc_munca_vacante_err = "Introduceti numarul locurilor de munca vacante";     
  }elseif(!ctype_digit($input4)){
    $loc_munca_vacante_err = "Introduceti un numar valid";  
  }else{
    $loc_munca_vacante = $input4;
  }

  $input5 = trim($_POST["nr_someri"]);
  if(empty($input5)){
    $nr_someri_err = "Introduceti numarul somerilor";     
  }elseif(!ctype_digit($input5)){
    $nr_someri_err = "Introduceti un numar valid";  
  }else{
    $nr_someri = $input5;
  }
  
  $input6 = trim($_POST["rata_somaj"]);
  if(empty($input6)){
    $rata_somaj_err = "Introduceti rata de somaj a populaţiei";     
  } else{
    $rata_somaj = $input6;
  }

  $input7 = trim($_POST["anul"]);
  if(empty($input7)){
    $anul_err = "Introduceti anul";   
  } elseif(!ctype_digit($input7)){
    $anul_err = "Introduceti un numar valid";    
  } else{
    $anul = $input7;
  }
  

  if(empty($id_regiune_err) && empty($nr_salariati_err) && empty($rata_ocuparii_err) && empty($loc_munca_vacante_err) && empty($nr_someri_err) && empty($rata_somaj_err)  && empty($anul_err)){
    $sql = "UPDATE forta_de_munca SET id_regiune=?, nr_salariati=?, rata_ocuparii=?, loc_munca_vacante=?, nr_someri=?, rata_somaj=?, anul=? WHERE id_forta_munca=?";
    if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "sssssssi", $id_regiune, $nr_salariati, $rata_ocuparii, $loc_munca_vacante, $nr_someri, $rata_somaj, $anul, $id);

      if(mysqli_stmt_execute($stmt)){
        header("location: ../crud.php");
        exit();
      } else{
        echo "Eroare";
      }
    }
    
    mysqli_stmt_close($stmt);
  }
  
  mysqli_close($link);
    
}elseif(isset($_GET["id"]) && !empty(trim($_GET["id"]))  && intval(trim($_GET["table"])) == 3){
  $id =  trim($_GET["id"]);
  
  $sql = "SELECT * FROM forta_de_munca WHERE id_forta_munca = ?";
  if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    
    $param_id = $id;
    
    if(mysqli_stmt_execute($stmt)){
      $result = mysqli_stmt_get_result($stmt);

      if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $id_regiune = $row["id_regiune"];
        $nr_salariati = $row["nr_salariati"];
        $rata_ocuparii = $row["rata_ocuparii"];
        $loc_munca_vacante = $row["loc_munca_vacante"];
        $nr_someri = $row["nr_someri"];
        $rata_somaj = $row["rata_somaj"];
        $anul = $row["anul"];

      } else{
        header("location: error.php");
        exit();
      }
        
    } else{
        echo "Eroare";
    }
  }
    
  mysqli_stmt_close($stmt);
  
  mysqli_close($link);
} 




$nr_institutii_medicale = $nr_scoli = $nr_elevi= $nr_inst_superioare = "";
$nr_institutii_medicale_err = $nr_scoli_err = $nr_elevi_err = $nr_inst_superioare_err = "";

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 4){
  $id = $_POST["id"];

  $input1 = trim($_POST["id_regiune"]);
  if(empty($input1)){
    $id_regiune_err = "Introduceti id-ul regiunii";
  } elseif(!ctype_digit($input1)){
    $id_regiune_err = "Introduceti un numar valid";
  } else{
    $id_regiune = $input1;
  }
  
  $input2 = trim($_POST["nr_institutii_medicale"]);
  if(empty($input2)){
    $nr_institutii_medicale_err = "Introduceti nuamrul insitutiilor medicale";   
  } elseif(!ctype_digit($input2)){
    $nr_institutii_medicale_err = "Introduceti un numar valid";  
  } else{
    $nr_institutii_medicale = $input2;
  }
  

  $input3 = trim($_POST["nr_scoli"]);
  if(empty($input3)){
    $nr_scoli_err = "Introduceti numarul scolilor";     
  } else{
    $nr_scoli = $input3;
  }

  $input4 = trim($_POST["nr_elevi"]);
  if(empty($input4)){
    $nr_elevi_err = "Introduceti numarul elevilor";     
  }elseif(!ctype_digit($input4)){
    $nr_elevi_err = "Introduceti un numar valid";  
  }else{
    $nr_elevi = $input4;
  }

  $input5 = trim($_POST["nr_inst_superioare"]);
  if(empty($input5)){
    $nr_inst_superioare_err = "Introduceti numarul universitatilor";     
  }elseif(!ctype_digit($input5)){
    $nr_inst_superioare_err = "Introduceti un numar valid";  
  }else{
    $nr_inst_superioare = $input5;
  }
  
  $input6 = trim($_POST["anul"]);
  if(empty($input6)){
    $anul_err = "Introduceti anul";   
  } elseif(!ctype_digit($input6)){
    $anul_err = "Introduceti un numar valid";    
  } else{
    $anul = $input6;
  }
  

  if(empty($id_regiune_err) && empty($nr_institutii_medicale_err) && empty($nr_scoli_err) && empty($nr_elevi_err) && empty($nr_inst_superioare_err) && empty($anul_err)){
    $sql = "UPDATE indicatori_sociali SET id_regiune=?, nr_institutii_medicale=?, nr_scoli=?, nr_elevi=?, nr_inst_superioare=?, anul=? WHERE id_indicatori=?";
    if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "ssssssi", $id_regiune, $nr_institutii_medicale, $nr_scoli, $nr_elevi, $nr_inst_superioare, $anul, $id);
        
      if(mysqli_stmt_execute($stmt)){
        header("location: ../crud.php");
        exit();
      } else{
        echo "Eroare";
      }
    }
    
    mysqli_stmt_close($stmt);
  }
  
  mysqli_close($link);
    
}elseif(isset($_GET["id"]) && !empty(trim($_GET["id"]))  && intval(trim($_GET["table"])) == 4){
  $id =  trim($_GET["id"]);
  
  $sql = "SELECT * FROM indicatori_sociali WHERE id_indicatori = ?";
  if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    
    $param_id = $id;
    
    if(mysqli_stmt_execute($stmt)){
      $result = mysqli_stmt_get_result($stmt);

      if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $id_regiune = $row["id_regiune"];
        $nr_institutii_medicale = $row["nr_institutii_medicale"];
        $nr_scoli = $row["nr_scoli"];
        $nr_elevi = $row["nr_elevi"];
        $nr_inst_superioare= $row["nr_inst_superioare"];
        $anul = $row["anul"];

      } else{
        header("location: error.php");
        exit();
      }
        
    } else{
        echo "Eroare";
    }
  }
    
  mysqli_stmt_close($stmt);
  
  mysqli_close($link);
} 





$pib_regional = $ponderea_pib = "";
$pib_regional_err = $ponderea_pib_err = "";

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 5){
  $id = $_POST["id"];

  $input1 = trim($_POST["id_regiune"]);
  if(empty($input1)){
    $id_regiune_err = "Introduceti id-ul regiunii";
  } elseif(!ctype_digit($input1)){
    $id_regiune_err = "Introduceti un numar valid";
  } else{
    $id_regiune = $input1;
  }
  
  $input2 = trim($_POST["pib_regional"]);
  if(empty($input2)){
    $pib_regional_err = "Introduceti pib-ul regional";   
  } elseif(!ctype_digit($input2)){
    $pib_regional_err = "Introduceti un numar valid";  
  } else{
    $pib_regional = $input2;
  }
  

  $input3 = trim($_POST["ponderea_pib"]);
  if(empty($input3)){
    $ponderea_pib_err = "Introduceti ponderea pib-ului";     
  } else{
    $ponderea_pib = $input3;
  }

  $input4 = trim($_POST["anul"]);
  if(empty($input4)){
    $anul_err = "Introduceti anul";   
  } elseif(!ctype_digit($input4)){
    $anul_err = "Introduceti un numar valid";    
  } else{
    $anul = $input4;
  }
  

  if(empty($id_regiune_err) && empty($pib_regional_err) && empty($ponderea_pib_err) && empty($anul_err)){
    $sql = "UPDATE produs_intern_brut SET id_regiune=?, pib_regional=?, ponderea_pib=?, anul=? WHERE id_pib=?";
    if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "ssssi", $id_regiune, $pib_regional, $ponderea_pib, $anul, $id);         

      if(mysqli_stmt_execute($stmt)){
        header("location: ../crud.php");
        exit();
      } else{
        echo "Eroare";
      }
    }
    
    mysqli_stmt_close($stmt);
  }
  
  mysqli_close($link);
    
}elseif(isset($_GET["id"]) && !empty(trim($_GET["id"]))  && intval(trim($_GET["table"])) == 5){
  $id =  trim($_GET["id"]);
  
  $sql = "SELECT * FROM produs_intern_brut WHERE id_pib = ?";
  if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    
    $param_id = $id;
    
    if(mysqli_stmt_execute($stmt)){
      $result = mysqli_stmt_get_result($stmt);

      if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $id_regiune = $row["id_regiune"];
        $pib_regional = $row["pib_regional"];
        $ponderea_pib = $row["ponderea_pib"];
        $anul = $row["anul"];

      } else{
        header("location: error.php");
        exit();
      }
        
    } else{
        echo "Eroare";
    }
  }
    
  mysqli_stmt_close($stmt);
  
  mysqli_close($link);
} 



$lung_drum_publice = $pond_loc_gazificate = $alim_apeducte= $pond_canalizare = "";
$lung_drum_publice_err = $pond_loc_gazificate_err = $alim_apeducte_err = $pond_canalizare_err = "";

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 6){
  $id = $_POST["id"];

  $input1 = trim($_POST["id_regiune"]);
  if(empty($input1)){
    $id_regiune_err = "Introduceti id-ul regiunii";
  } elseif(!ctype_digit($input1)){
    $id_regiune_err = "Introduceti un numar valid";
  } else{
    $id_regiune = $input1;
  }
  
  $input2 = trim($_POST["lung_drum_publice"]);
  if(empty($input2)){
    $lung_drum_publice_err = "Introduceti lungimea drumurilor publice";   
  } elseif(!ctype_digit($input2)){
    $lung_drum_publice_err = "Introduceti un numar valid";  
  } else{
    $lung_drum_publice = $input2;
  }
  
  

  $input3 = trim($_POST["pond_loc_gazificate"]);
  if(empty($input3)){
    $pond_loc_gazificate_err = "Introduceti ponderea locuintelor alimentate cu gaze";     
  } else{
    $pond_loc_gazificate = $input3;
  }

  $input4 = trim($_POST["alim_apeducte"]);
  if(empty($input4)){
    $alim_apeducte_err = "Introduceti ponderea locuintelor alimentate prin apeduct";     
  }elseif(!ctype_digit($input4)){
    $alim_apeducte_err = "Introduceti un numar valid";  
  }else{
    $alim_apeducte = $input4;
  }

  $input5 = trim($_POST["pond_canalizare"]);
  if(empty($input5)){
    $pond_canalizare_err = "Introduceti ponderea locuintelor conectate la sistem de canalizare";     
  }elseif(!ctype_digit($input5)){
    $pond_canalizare_err = "Introduceti un numar valid";  
  }else{
    $pond_canalizare = $input5;
  }
  
  $input6 = trim($_POST["anul"]);
  if(empty($input6)){
    $anul_err = "Introduceti anul";   
  } elseif(!ctype_digit($input6)){
    $anul_err = "Introduceti un numar valid";    
  } else{
    $anul = $input6;
  }
  

  if(empty($id_regiune_err) && empty($lung_drum_publice_err) && empty($pond_loc_gazificate_err) && empty($alim_apeducte_err) && empty($pond_canalizare_err) && empty($anul_err)){
    $sql = "UPDATE infrastructura SET id_regiune=?, lung_drum_publice=?, pond_loc_gazificate=?, alim_apeducte=?, pond_canalizare=?, anul=? WHERE id_infr=?";
    if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "ssssssi", $id_regiune, $lung_drum_publice, $pond_loc_gazificate, $alim_apeducte, $pond_canalizare, $anul, $id);

      if(mysqli_stmt_execute($stmt)){
        header("location: ../crud.php");
        exit();
      } else{
        echo "Eroare";
      }
    }
    
    mysqli_stmt_close($stmt);
  }
  
  mysqli_close($link);
    
}elseif(isset($_GET["id"]) && !empty(trim($_GET["id"]))  && intval(trim($_GET["table"])) == 6){
  $id =  trim($_GET["id"]);
  
  $sql = "SELECT * FROM infrastructura WHERE id_infr = ?";
  if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    
    $param_id = $id;
    
    if(mysqli_stmt_execute($stmt)){
      $result = mysqli_stmt_get_result($stmt);

      if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $id_regiune = $row["id_regiune"];
        $lung_drum_publice = $row["lung_drum_publice"];
        $pond_loc_gazificate = $row["pond_loc_gazificate"];
        $alim_apeducte = $row["alim_apeducte"];
        $pond_canalizare = $row["pond_canalizare"];
        $anul = $row["anul"];

      } else{
        header("location: error.php");
        exit();
      }
        
    } else{
        echo "Eroare";
    }
  }
    
  mysqli_stmt_close($stmt);
  
  mysqli_close($link);
} 


$nr_angajati = $nr_intreprinderi_ind = $val_productie = $pond_productie = "";
$nr_angajati_err = $nr_intreprinderi_ind_err = $val_productie_err = $pond_productie_err = "";

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 7){
  $id = $_POST["id"];

  $input1 = trim($_POST["id_regiune"]);
  if(empty($input1)){
    $id_regiune_err = "Introduceti id-ul regiunii";
  } elseif(!ctype_digit($input1)){
    $id_regiune_err = "Introduceti un numar valid";
  } else{
    $id_regiune = $input1;
  }
  
  $input2 = trim($_POST["nr_angajati"]);
  if(empty($input2)){
    $nr_angajati_err = "Introduceti numarul angajatilor in industrie";   
  } elseif(!ctype_digit($input2)){
    $nr_angajati_err = "Introduceti un numar valid";  
  } else{
    $nr_angajati = $input2;
  }
  
  

  $input3 = trim($_POST["nr_intreprinderi_ind"]);
  if(empty($input3)){
    $nr_intreprinderi_ind_err = "Introduceti numarul intreprinderilor industriale";     
  } elseif(!ctype_digit($input3)){
    $val_productie_err = "Introduceti un numar valid";  
  }else{
    $nr_intreprinderi_ind = $input3;
  }

  $input4 = trim($_POST["val_productie"]);
  if(empty($input4)){
    $val_productie_err = "Introduceti valoarea productiei industriale";     
  }elseif(!ctype_digit($input4)){
    $val_productie_err = "Introduceti un numar valid";  
  }else{
    $val_productie = $input4;
  }

  $input5 = trim($_POST["pond_productie"]);
  if(empty($input5)){
    $pond_productie_err = "Introduceti ponderea productiei industriale";      
  }else{
    $pond_productie = $input5;
  }
  
  $input6 = trim($_POST["anul"]);
  if(empty($input6)){
    $anul_err = "Introduceti anul";   
  } elseif(!ctype_digit($input6)){
    $anul_err = "Introduceti un numar valid";    
  } else{
    $anul = $input6;
  }
  

  if(empty($id_regiune_err) && empty($nr_angajati_err) && empty($nr_intreprinderi_ind_err) && empty($val_productie_err) && empty($pond_productie_err) && empty($anul_err)){
    $sql = "UPDATE industrie SET id_regiune=?, nr_angajati=?, nr_intreprinderi_ind=?, val_productie=?, pond_productie=?, anul=? WHERE id_ind=?";
    if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "ssssssi", $id_regiune, $nr_angajati, $nr_intreprinderi_ind, $val_productie, $pond_productie, $anul, $id);

      if(mysqli_stmt_execute($stmt)){
        header("location: ../crud.php");
        exit();
      } else{
        echo "Eroare";
      }
    }
    
    mysqli_stmt_close($stmt);
  }
  
  mysqli_close($link);
    
}elseif(isset($_GET["id"]) && !empty(trim($_GET["id"]))  && intval(trim($_GET["table"])) == 7){
  $id =  trim($_GET["id"]);
  
  $sql = "SELECT * FROM industrie WHERE id_ind = ?";
  if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    
    $param_id = $id;
    
    if(mysqli_stmt_execute($stmt)){
      $result = mysqli_stmt_get_result($stmt);

      if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $id_regiune = $row["id_regiune"];
        $nr_angajati = $row["nr_angajati"];
        $nr_intreprinderi_ind = $row["nr_intreprinderi_ind"];
        $val_productie = $row["val_productie"];
        $pond_productie = $row["pond_productie"];
        $anul = $row["anul"];

      } else{
        header("location: error.php");
        exit();
      }
        
    } else{
        echo "Eroare";
    }
  }
    
  mysqli_stmt_close($stmt);
  
  mysqli_close($link);
} 



$nr_angajati_agr = $teren_arabil = $nr_animale = $recolta_cerealiere = "";
$nr_angajati_agr_err = $teren_arabil_err = $nr_animale_err = $recolta_cerealiere_err = "";

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 8){
  $id = $_POST["id"];

  $input1 = trim($_POST["id_regiune"]);
  if(empty($input1)){
    $id_regiune_err = "Introduceti id-ul regiunii";
  } elseif(!ctype_digit($input1)){
    $id_regiune_err = "Introduceti un numar valid";
  } else{
    $id_regiune = $input1;
  }
  
  $input2 = trim($_POST["nr_angajati_agr"]);
  if(empty($input2)){
    $nr_angajati_agr_err = "Introduceti numarul angajatilor in agricultura";   
  } elseif(!ctype_digit($input2)){
    $nr_angajati_agr_err = "Introduceti un numar valid";  
  } else{
    $nr_angajati_agr = $input2;
  }
  
  

  $input3 = trim($_POST["teren_arabil"]);
  if(empty($input3)){
    $teren_arabil_err = "Introduceti suprafata terenului arabil";     
  } elseif(!ctype_digit($input3)){
    $nr_animale_err = "Introduceti un numar valid";  
  }else{
    $teren_arabil = $input3;
  }

  $input4 = trim($_POST["nr_animale"]);
  if(empty($input4)){
    $nr_animale_err = "Introduceti numarul animalelor";     
  }elseif(!ctype_digit($input4)){
    $nr_animale_err = "Introduceti un numar valid";  
  }else{
    $nr_animale = $input4;
  }

  $input5 = trim($_POST["recolta_cerealiere"]);
  if(empty($input5)){
    $recolta_cerealiere_err = "Introduceti recolta anuala de cereale";      
  }else{
    $recolta_cerealiere = $input5;
  }
  
  $input6 = trim($_POST["anul"]);
  if(empty($input6)){
    $anul_err = "Introduceti anul";   
  } elseif(!ctype_digit($input6)){
    $anul_err = "Introduceti un numar valid";    
  } else{
    $anul = $input6;
  }
  

  if(empty($id_regiune_err) && empty($nr_angajati_agr_err) && empty($teren_arabil_err) && empty($nr_animale_err) && empty($recolta_cerealiere_err) && empty($anul_err)){
    $sql = "UPDATE agricultura SET id_regiune=?, nr_angajati_agr=?, teren_arabil=?, nr_animale=?, recolta_cerealiere=?, anul=? WHERE id_agr=?";
    if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "ssssssi", $id_regiune, $nr_angajati_agr, $teren_arabil, $nr_animale, $recolta_cerealiere, $anul, $id);

      if(mysqli_stmt_execute($stmt)){
        header("location: ../crud.php");
        exit();
      } else{
        echo "Eroare";
      }
    }
    
    mysqli_stmt_close($stmt);
  }
  
  mysqli_close($link);
    
}elseif(isset($_GET["id"]) && !empty(trim($_GET["id"]))  && intval(trim($_GET["table"])) == 8){
  $id =  trim($_GET["id"]);
  
  $sql = "SELECT * FROM agricultura WHERE id_agr = ?";
  if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    
    $param_id = $id;
    
    if(mysqli_stmt_execute($stmt)){
      $result = mysqli_stmt_get_result($stmt);

      if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $id_regiune = $row["id_regiune"];
        $nr_angajati_agr = $row["nr_angajati_agr"];
        $teren_arabil = $row["teren_arabil"];
        $nr_animale = $row["nr_animale"];
        $recolta_cerealiere = $row["recolta_cerealiere"];
        $anul = $row["anul"];

      } else{
        header("location: error.php");
        exit();
      }
        
    } else{
        echo "Eroare";
    }
  }
    
  mysqli_stmt_close($stmt);
  
  mysqli_close($link);
} 



$nr_intreprinderi = $sold_venit = "";
$nr_intreprinderi_err = $sold_venit_err = "";

if(isset($_POST["id"]) && !empty($_POST["id"]) && intval(trim($_GET["table"])) == 9){
  $id = $_POST["id"];

  $input1 = trim($_POST["id_regiune"]);
  if(empty($input1)){
    $id_regiune_err = "Introduceti id-ul regiunii";
  } elseif(!ctype_digit($input1)){
    $id_regiune_err = "Introduceti un numar valid";
  } else{
    $id_regiune = $input1;
  }
  
  $input2 = trim($_POST["nr_intreprinderi"]);
  if(empty($input2)){
    $nr_intreprinderi_err = "Introduceti numarul intreprinderilor comerciale";   
  } elseif(!ctype_digit($input2)){
    $nr_intreprinderi_err = "Introduceti un numar valid";  
  } else{
    $nr_intreprinderi = $input2;
  }
  
  
  $input3 = trim($_POST["nr_salariati"]);
  if(empty($input3)){
    $nr_salariati_err = "Introduceti numarul salariatilor intreprinderilor comerciale";     
  } elseif(!ctype_digit($input3)){
    $nr_salariati_err = "Introduceti un numar valid";  
  }else{
    $nr_salariati = $input3;
  }

  $input4 = trim($_POST["sold_venit"]);
  if(empty($input4)){
    $sold_venit_err = "Introduceti soldul veniturilor intreprinderilor comerciale";     
  }elseif(!ctype_digit($input4)){
    $sold_venit_err = "Introduceti un numar valid";  
  }else{
    $sold_venit= $input4;
  }
  
  $input5 = trim($_POST["anul"]);
  if(empty($input5)){
    $anul_err = "Introduceti anul";   
  } elseif(!ctype_digit($input5)){
    $anul_err = "Introduceti un numar valid";    
  } else{
    $anul = $input5;
  }
  

  if(empty($id_regiune_err) && empty($nr_intreprinderi_err) && empty($nr_salariati_err) && empty($sold_venit_err) && empty($anul_err)){
    $sql = "UPDATE antreprenoriat SET id_regiune=?, nr_intreprinderi=?, nr_salariati=?, sold_venit=?, anul=? WHERE id_antrep=?";
    if($stmt = mysqli_prepare($link, $sql)){
      mysqli_stmt_bind_param($stmt, "sssssi", $id_regiune, $nr_intreprinderi, $nr_salariati, $sold_venit, $anul, $id);

      if(mysqli_stmt_execute($stmt)){
        header("location: ../crud.php");
        exit();
      } else{
        echo "Eroare";
      }
    }
    
    mysqli_stmt_close($stmt);
  }
  
  mysqli_close($link);
    
}elseif(isset($_GET["id"]) && !empty(trim($_GET["id"]))  && intval(trim($_GET["table"])) == 9){
  $id =  trim($_GET["id"]);
  
  $sql = "SELECT * FROM antreprenoriat WHERE id_antrep = ?";
  if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    
    $param_id = $id;
    
    if(mysqli_stmt_execute($stmt)){
      $result = mysqli_stmt_get_result($stmt);

      if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $id_regiune = $row["id_regiune"];
        $nr_intreprinderi = $row["nr_intreprinderi"];
        $nr_salariati = $row["nr_salariati"];
        $sold_venit = $row["sold_venit"];
        $anul = $row["anul"];

      } else{
        header("location: error.php");
        exit();
      }
        
    } else{
        echo "Eroare";
    }
  }
    
  mysqli_stmt_close($stmt);
  
  mysqli_close($link);
} 


?>
