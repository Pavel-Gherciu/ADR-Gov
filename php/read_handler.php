<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    require_once "config.php";
    

    $sql = "SELECT * FROM regiuni_de_dezvoltare WHERE id_regiune = ?";
    $sql2 = "SELECT * FROM demografia WHERE id_regiune = ?";
    $sql3 = "SELECT * FROM forta_de_munca WHERE id_regiune = ?";
    $sql4 = "SELECT * FROM indicatori_sociali WHERE id_regiune = ?";
    $sql5 = "SELECT * FROM produs_intern_brut WHERE id_regiune = ?";
    $sql6 = "SELECT * FROM infrastructura WHERE id_regiune = ?";
    $sql7 = "SELECT * FROM industrie WHERE id_regiune = ?";
    $sql8 = "SELECT * FROM agricultura WHERE id_regiune = ?";
    $sql9 = "SELECT * FROM antreprenoriat WHERE id_regiune = ?";

    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        $param_id = trim($_GET["id"]);
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                $nume_regiune = $row["nume_regiune"];
                $suprafata_regiune = $row["suprafata_regiune"];
                $nr_populatie = $row["nr_populatie"];
            } else{
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Eroare";
        }
    }
    
    if($stmt2 = mysqli_prepare($link, $sql2)){
        mysqli_stmt_bind_param($stmt2, "i", $param_id);
        
        $param_id = trim($_GET["id"]);
        
        if(mysqli_stmt_execute($stmt2)){
            $result = mysqli_stmt_get_result($stmt2);
    
            if(mysqli_num_rows($result) == 1){
                $row2 = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                $densitate_medie = $row2["densitate_medie"];
                $spor_natural = $row2["spor_natural"];
                $sold_migr_interna = $row2["sold_migr_interna"];
            } else{
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Eroare";
        }
    }

    if($stmt3 = mysqli_prepare($link, $sql3)){
      mysqli_stmt_bind_param($stmt3, "i", $param_id);
      
      $param_id = trim($_GET["id"]);
      
      if(mysqli_stmt_execute($stmt3)){
          $result = mysqli_stmt_get_result($stmt3);
  
          if(mysqli_num_rows($result) == 1){
              $row3 = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              $densitate_medie = $row3["nr_salariati"];
              $rata_ocuparii = $row3["rata_ocuparii"];
              $loc_munca_vacante = $row3["loc_munca_vacante"];
              $nr_someri = $row3["nr_someri"];
              $rata_somaj = $row3["rata_somaj"];
          } else{
              header("location: error.php");
              exit();
          }
          
      } else{
          echo "Eroare";
      }
    }

    if($stmt4 = mysqli_prepare($link, $sql4)){
      mysqli_stmt_bind_param($stmt4, "i", $param_id);
      
      $param_id = trim($_GET["id"]);
      
      if(mysqli_stmt_execute($stmt4)){
          $result = mysqli_stmt_get_result($stmt4);

          if(mysqli_num_rows($result) == 1){
              $row4 = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              $nr_institutii_medicale = $row4["nr_institutii_medicale"];
              $nr_scoli = $row4["nr_scoli"];
              $nr_elevi = $row4["nr_elevi"];
              $nr_inst_superioare = $row4["nr_inst_superioare"];
          } else{
              header("location: error.php");
              exit();
          }
        
      } else{
          echo "Eroare";
      } 
    }

    if($stmt5 = mysqli_prepare($link, $sql5)){
      mysqli_stmt_bind_param($stmt5, "i", $param_id);
      
      $param_id = trim($_GET["id"]);
      
      if(mysqli_stmt_execute($stmt5)){
          $result = mysqli_stmt_get_result($stmt5);

          if(mysqli_num_rows($result) == 1){
              $row5 = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              $pib_regional = $row5["pib_regional"];
              $ponderea_pib = $row5["ponderea_pib"];
          } else{
              header("location: error.php");
              exit();
          }
        
      } else{
          echo "Eroare";
      } 
    }

    if($stmt6 = mysqli_prepare($link, $sql6)){
      mysqli_stmt_bind_param($stmt6, "i", $param_id);
      
      $param_id = trim($_GET["id"]);
      
      if(mysqli_stmt_execute($stmt6)){
          $result = mysqli_stmt_get_result($stmt6);

          if(mysqli_num_rows($result) == 1){
              $row6 = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              $lung_drum_publice = $row6["lung_drum_publice"];
              $pond_loc_gazificate = $row6["pond_loc_gazificate"];
              $alim_apeducte = $row6["alim_apeducte"];
              $pond_canalizare = $row6["pond_canalizare"];
          } else{
              header("location: error.php");
              exit();
          }
        
      } else{
          echo "Eroare";
      } 
    }

    if($stmt7 = mysqli_prepare($link, $sql7)){
      mysqli_stmt_bind_param($stmt7, "i", $param_id);
      
      $param_id = trim($_GET["id"]);
      
      if(mysqli_stmt_execute($stmt7)){
          $result = mysqli_stmt_get_result($stmt7);

          if(mysqli_num_rows($result) == 1){
              $row7 = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              $nr_angajati = $row7["nr_angajati"];
              $nr_intreprinderi_ind = $row7["nr_intreprinderi_ind"];
              $val_productie = $row7["val_productie"];
              $pond_productie = $row7["pond_productie"];
          } else{
              header("location: error.php");
              exit();
          }
        
      } else{
          echo "Eroare";
      } 
    }

    if($stmt8 = mysqli_prepare($link, $sql8)){
      mysqli_stmt_bind_param($stmt8, "i", $param_id);
      
      $param_id = trim($_GET["id"]);
      
      if(mysqli_stmt_execute($stmt8)){
          $result = mysqli_stmt_get_result($stmt8);

          if(mysqli_num_rows($result) == 1){
              $row8 = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              $nr_angajati_agr = $row8["nr_angajati_agr"];
              $teren_arabil = $row8["teren_arabil"];
              $nr_animale = $row8["nr_animale"];
              $recolta_cerealiere = $row8["recolta_cerealiere"];
          } else{
              header("location: error.php");
              exit();
          }
        
      } else{
          echo "Eroare";
      } 
    }

    if($stmt9 = mysqli_prepare($link, $sql9)){
      mysqli_stmt_bind_param($stmt9, "i", $param_id);
      
      $param_id = trim($_GET["id"]);
      
      if(mysqli_stmt_execute($stmt9)){
          $result = mysqli_stmt_get_result($stmt9);

          if(mysqli_num_rows($result) == 1){
              $row9 = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              $nr_intreprinderi = $row9["nr_intreprinderi"];
              $nr_salariati = $row9["nr_salariati"];
              $sold_venit = $row9["sold_venit"];
          } else{
              header("location: error.php");
              exit();
          }
        
      } else{
          echo "Eroare";
      } 
    }
     

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);
    mysqli_stmt_close($stmt3);
    mysqli_stmt_close($stmt4);
    mysqli_stmt_close($stmt5);
    mysqli_stmt_close($stmt6);
    mysqli_stmt_close($stmt7);
    mysqli_stmt_close($stmt8);
    mysqli_stmt_close($stmt9);

    mysqli_close($link);
} else{

    header("location: error.php");
    exit();
}
?>