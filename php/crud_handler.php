<?php

require_once "config.php";

// pentru regiuni de dezvoltare
$sql = "SELECT * FROM regiuni_de_dezvoltare";
$value = 1;
$value_1 = 1;

if(isset($_POST['asc_sort']) && !empty($_POST['asc_sort']) && $_POST['asc_sort']==1)
{
  $sql = "SELECT * FROM regiuni_de_dezvoltare ORDER BY suprafata_regiune ASC";
  $value = 2;
}elseif(isset($_POST['asc_sort']) && !empty($_POST['asc_sort']) && $_POST['asc_sort']==2){
  $sql = "SELECT * FROM regiuni_de_dezvoltare ORDER BY suprafata_regiune DESC";
  $value = 1;
}

if(isset($_POST['asc_sort_1']) && !empty($_POST['asc_sort_1']) && $_POST['asc_sort_1']==1)
{
  $sql = "SELECT * FROM regiuni_de_dezvoltare ORDER BY nr_populatie ASC";
  $value_1 = 2;
}elseif(isset($_POST['asc_sort_1']) && !empty($_POST['asc_sort_1']) && $_POST['asc_sort_1']==2){
  $sql = "SELECT * FROM regiuni_de_dezvoltare ORDER BY nr_populatie DESC";
  $value_1 = 1;
}

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
      echo '<div class="clearfix">';
      echo '<h2 class="table-title pull-left">Regiunile de dezvoltare</h2>';
      echo '<a href="php/create/create.php?table=1" class="btn btn-success pull-right hide"><i class="fa fa-plus"></i> Adauga o regiune</a>';
      echo "</div>";
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nume regiune</th>";
            echo "<th>Suprafata</th>";
            echo "<th>Numarul populatiei</th>";
            echo "<th>Acțiuni</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
              echo "<td>" . $row['id_regiune'] . "</td>";
              echo "<td>" . $row['nume_regiune'] . "</td>";
              echo "<td>" . $row['suprafata_regiune'] . " km2</td>";
              echo "<td>" . $row['nr_populatie'] . "</td>";
              echo "<td>";
                echo '<a href="php/read.php?id='. $row['id_regiune'] .'" class="mr-3 table-button" title="Vizualizare date" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                echo '<a href="php/update.php?table=1&id='. $row['id_regiune'] .'" class="mr-3 table-button hide" title="Modifica date" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                echo '<a href="php/delete.php?table=1&id='. $row['id_regiune'] .'" class="mr-3 table-button hide" title="Sterge date" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
              echo "</td>";
            echo "</tr>";
          }
        echo "</tbody>";                            
      echo "</table>";
      echo "<form name='' method='post' action=''>";
      echo "<button type='submit' name='asc_sort' id='asc_sort' class='btn btn-primary button' value='0'>Reset</button>";
      echo "<button type='submit' name='asc_sort' id='asc_sort' class='btn btn-primary button' value='$value'>Sortează suprafața</button>";
      echo "<button type='submit' name='asc_sort_1' id='asc_sort_1' class='btn btn-primary button' value='$value_1'>Sortează nr. populației</button>";
      // Free result set
      
    } else{
        echo '<div class="alert alert-danger"><em>Nu au fost gasite date</em></div>';
    }
} else{
    echo "Eroare";
}

// pentru demografie

$sql2 = "SELECT D.*, R.nume_regiune FROM demografia D JOIN regiuni_de_dezvoltare R ON D.id_regiune = R.id_regiune";
$value2 = 1;
$value2_1 = 1;
$value2_2 = 1;

if(isset($_POST['asc_sort2']) && !empty($_POST['asc_sort2']) && $_POST['asc_sort2']==1)
{
  $sql2 = "SELECT D.*, R.nume_regiune FROM demografia D JOIN regiuni_de_dezvoltare R ON D.id_regiune = R.id_regiune ORDER BY D.densitate_medie ASC";
  $value2 = 2;
}elseif(isset($_POST['asc_sort2']) && !empty($_POST['asc_sort2']) && $_POST['asc_sort2']==2){
  $sql2 = "SELECT D.*, R.nume_regiune FROM demografia D JOIN regiuni_de_dezvoltare R ON D.id_regiune = R.id_regiune ORDER BY D.densitate_medie DESC";
  $value2 = 1;
}

if(isset($_POST['asc_sort2_1']) && !empty($_POST['asc_sort2_1']) && $_POST['asc_sort2_1']==1)
{
  $sql2 = "SELECT D.*, R.nume_regiune FROM demografia D JOIN regiuni_de_dezvoltare R ON D.id_regiune = R.id_regiune ORDER BY D.spor_natural ASC";
  $value2_1 = 2;
}elseif(isset($_POST['asc_sort2_1']) && !empty($_POST['asc_sort2_1']) && $_POST['asc_sort2_1']==2){
  $sql2 = "SELECT D.*, R.nume_regiune FROM demografia D JOIN regiuni_de_dezvoltare R ON D.id_regiune = R.id_regiune ORDER BY D.spor_natural DESC";
  $value2_1 = 1;
}


if(isset($_POST['asc_sort2_2']) && !empty($_POST['asc_sort2_2']) && $_POST['asc_sort2_2']==1)
{
  $sql2 = "SELECT D.*, R.nume_regiune FROM demografia D JOIN regiuni_de_dezvoltare R ON D.id_regiune = R.id_regiune ORDER BY D.sold_migr_interna ASC";
  $value2_2 = 2;
}elseif(isset($_POST['asc_sort2_2']) && !empty($_POST['asc_sort2_2']) && $_POST['asc_sort2_2']==2){
  $sql2 = "SELECT D.*, R.nume_regiune FROM demografia D JOIN regiuni_de_dezvoltare R ON D.id_regiune = R.id_regiune ORDER BY D.sold_migr_interna DESC";
  $value2_2 = 1;
}

if($result2 = mysqli_query($link, $sql2)){
    if(mysqli_num_rows($result2) > 0){
      echo '<div class="clearfix">';
      echo '<h2 class="table-title pull-left">Demografia</h2>';
      echo '<a href="php/create/create.php?table=2" class="btn btn-success pull-right hide"><i class="fa fa-plus"></i> Adauga date</a>';
      echo "</div>";
      echo '<table class="table table-bordered table-striped">';
      echo "<thead>";
        echo "<tr>";
          echo "<th>ID</th>";
          echo "<th>Nume regiune</th>";
          echo "<th>Densitatea medie a populației</th>";
          echo "<th>Sporul natural al populatiei</th>";
          echo "<th>Soldul migratiei interne</th>";
          echo "<th>Anul</th>";
          echo "<th>Acțiuni</th>";
        echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
      while($row2 = mysqli_fetch_array($result2)){
        echo "<tr>";
          echo "<td>" . $row2['id_demogr'] . "</td>";
          echo "<td>" . $row2['nume_regiune'] . "</td>";
          echo "<td>" . $row2['densitate_medie'] . " loc/km2</td>";
          echo "<td>" . $row2['spor_natural'] . "</td>";
          echo "<td>" . $row2['sold_migr_interna'] . "</td>";
          echo "<td>" . $row2['anul'] . "</td>";
          echo "<td>";
            echo '<a href="php/read.php?id='. $row2['id_demogr'] .'" class="mr-3 table-button" title="Vizualizare date" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
            echo '<a href="php/update.php?table=2&id='. $row2['id_demogr'] .'" class="mr-3 table-button hide" title="Modifica date" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
            echo '<a href="php/delete.php?table=2&id='. $row2['id_demogr'] .'" class="mr-3 table-button hide" title="Sterge date" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
          echo "</td>";
        echo "</tr>";
        }
        echo "</tbody>";                            
      echo "</table>";
      echo "<form name='' method='post' action=''>";
      echo "<button type='submit' name='asc_sort2' id='asc_sort2' class='btn btn-primary button' value='0'>Reset</button>";
      echo "<button type='submit' name='asc_sort2' id='asc_sort2' class='btn btn-primary button' value='$value2'>Sortează dens. medie</button>";
      echo "<button type='submit' name='asc_sort2_1' id='asc_sort2_1' class='btn btn-primary button' value='$value2_1'>Sortează sporul natural</button>";
      echo "<button type='submit' name='asc_sort2_2' id='asc_sort2_2' class='btn btn-primary button' value='$value2_2'>Sortează migrația internă</button>";
      
    } else{
        echo '<div class="alert alert-danger"><em>Nu au fost gasite date</em></div>';
    }
} else{
    echo "Eroare";
}



// pentru forta_de_munca

$sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune";
$value3 = 1;
$value3_1 = 1;
$value3_2 = 1;
$value3_3 = 1;
$value3_4 = 1;

if(isset($_POST['asc_sort3']) && !empty($_POST['asc_sort3']) && $_POST['asc_sort3']==1)
{
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.nr_salariati ASC";
  $value3 = 2;
}elseif(isset($_POST['asc_sort3']) && !empty($_POST['asc_sort3']) && $_POST['asc_sort3']==2){
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.nr_salariati DESC";
  $value3 = 1;
}

if(isset($_POST['asc_sort3_1']) && !empty($_POST['asc_sort3_1']) && $_POST['asc_sort3_1']==1)
{
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.rata_ocuparii ASC";
  $value3_1 = 2;
}elseif(isset($_POST['asc_sort3_1']) && !empty($_POST['asc_sort3_1']) && $_POST['asc_sort3_1']==2){
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.rata_ocuparii DESC";
  $value3_1 = 1;
}


if(isset($_POST['asc_sort3_2']) && !empty($_POST['asc_sort3_2']) && $_POST['asc_sort3_2']==1)
{
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.loc_munca_vacante ASC";
  $value3_2 = 2;
}elseif(isset($_POST['asc_sort3_2']) && !empty($_POST['asc_sort3_2']) && $_POST['asc_sort3_2']==2){
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.loc_munca_vacante DESC";
  $value3_2 = 1;
}


if(isset($_POST['asc_sort3_3']) && !empty($_POST['asc_sort3_3']) && $_POST['asc_sort3_3']==1)
{
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.nr_someri ASC";
  $value3_3 = 2;
}elseif(isset($_POST['asc_sort3_3']) && !empty($_POST['asc_sort3_3']) && $_POST['asc_sort3_3']==2){
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.nr_someri DESC";
  $value3_3 = 1;
}

if(isset($_POST['asc_sort3_4']) && !empty($_POST['asc_sort3_4']) && $_POST['asc_sort3_4']==1)
{
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.rata_somaj ASC";
  $value3_4 = 2;
}elseif(isset($_POST['asc_sort3_4']) && !empty($_POST['asc_sort3_4']) && $_POST['asc_sort3_4']==2){
  $sql3 = "SELECT F.*, R.nume_regiune FROM forta_de_munca F JOIN regiuni_de_dezvoltare R ON F.id_regiune = R.id_regiune ORDER BY F.rata_somaj DESC";
  $value3_4 = 1;
}

if($result3 = mysqli_query($link, $sql3)){
    if(mysqli_num_rows($result3) > 0){
      echo '<div class="clearfix">';
      echo '<h2 class="table-title pull-left">Forța de munca</h2>';
      echo '<a href="php/create/create.php?table=3" class="btn btn-success pull-right hide"><i class="fa fa-plus"></i> Adauga date</a>';
      echo "</div>";
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nume regiune</th>";
            echo "<th>Numărul salariaților</th>";
            echo "<th>Rata de ocupare a populaţiei</th>";
            echo "<th>Locuri de munca vacante</th>";
            echo "<th>Numarul somerilor</th>";
            echo "<th>Rata somajului</th>";
            echo "<th>Anul</th>";
            echo "<th>Acțiuni</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row3 = mysqli_fetch_array($result3)){
          echo "<tr>";
            echo "<td>" . $row3['id_forta_munca'] . "</td>";
            echo "<td>" . $row3['nume_regiune'] . "</td>";
            echo "<td>" . $row3['nr_salariati'] . "</td>";
            echo "<td>" . $row3['rata_ocuparii'] . "%</td>";
            echo "<td>" . $row3['loc_munca_vacante'] . "</td>";
            echo "<td>" . $row3['nr_someri'] . "</td>";
            echo "<td>" . $row3['rata_somaj'] . "%</td>";
            echo "<td>" . $row3['anul'] . "</td>";
            echo "<td>";
              echo '<a href="php/read.php?id='. $row3['id_forta_munca'] .'" class="mr-3 table-button" title="Vizualizare date" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
              echo '<a href="php/update.php?table=3&id='. $row3['id_forta_munca'] .'" class="mr-3 table-button hide" title="Modifica date" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
              echo '<a href="php/delete.php?table=3&id='. $row3['id_forta_munca'] .'" class="mr-3 table-button hide" title="Sterge date" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";                            
      echo "</table>";
      echo "<form name='' method='post' action=''>";
      echo "<button type='submit' name='asc_sort3' id='asc_sort3' class='btn btn-primary button' value='0'>Reset</button>";
      echo "<button type='submit' name='asc_sort3' id='asc_sort3' class='btn btn-primary button' value='$value3'>Sortează nr. salariați</button>";
      echo "<button type='submit' name='asc_sort3_1' id='asc_sort3_1' class='btn btn-primary button' value='$value3_1'>Sortează ocupărea</button>";
      echo "<button type='submit' name='asc_sort3_2' id='asc_sort3_2' class='btn btn-primary button' value='$value3_2'>Sortează loc. vacante</button>";
      echo "<button type='submit' name='asc_sort3_3' id='asc_sort3_3' class='btn btn-primary button' value='$value3_3'>Sortează șomeri</button>";
      echo "<button type='submit' name='asc_sort3_4' id='asc_sort3_4' class='btn btn-primary button' value='$value3_4'>Sortează șomaj</button>";
    } else{
      echo '<div class="alert alert-danger"><em>Nu au fost gasite date</em></div>';
    }
} else{
    echo "Eroare";
}


// pentru indicatori_sociali

$sql4 = "SELECT I.*, R.nume_regiune FROM indicatori_sociali I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune";
$value4 = 1;
$value4_1 = 1;
$value4_2 = 1;
$value4_3 = 1;

if(isset($_POST['asc_sort4']) && !empty($_POST['asc_sort4']) && $_POST['asc_sort4']==1)
{
  $sql4 = "SELECT I.*, R.nume_regiune FROM indicatori_sociali I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_institutii_medicale ASC";
  $value4 = 2;
}elseif(isset($_POST['asc_sort4']) && !empty($_POST['asc_sort4']) && $_POST['asc_sort4']==2){
  $sql4 = "SELECT I.*, R.nume_regiune FROM indicatori_sociali I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_institutii_medicale DESC";
  $value4 = 1;
}

if(isset($_POST['asc_sort4_1']) && !empty($_POST['asc_sort4_1']) && $_POST['asc_sort4_1']==1)
{
  $sql4 = "SELECT I.*, R.nume_regiune FROM indicatori_sociali I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_scoli ASC";
  $value4_1 = 2;
}elseif(isset($_POST['asc_sort4_1']) && !empty($_POST['asc_sort4_1']) && $_POST['asc_sort4_1']==2){
  $sql4 = "SELECT I.*, R.nume_regiune FROM indicatori_sociali I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_scoli DESC";
  $value4_1 = 1;
}


if(isset($_POST['asc_sort4_2']) && !empty($_POST['asc_sort4_2']) && $_POST['asc_sort4_2']==1)
{
  $sql4 = "SELECT I.*, R.nume_regiune FROM indicatori_sociali I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_elevi ASC";
  $value4_2 = 2;
}elseif(isset($_POST['asc_sort4_2']) && !empty($_POST['asc_sort4_2']) && $_POST['asc_sort4_2']==2){
  $sql4 = "SELECT I.*, R.nume_regiune FROM indicatori_sociali I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_elevi DESC";
  $value4_2 = 1;
}


if(isset($_POST['asc_sort4_3']) && !empty($_POST['asc_sort4_3']) && $_POST['asc_sort4_3']==1)
{
  $sql4 = "SELECT I.*, R.nume_regiune FROM indicatori_sociali I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_inst_superioare ASC";
  $value4_3 = 2;
}elseif(isset($_POST['asc_sort4_3']) && !empty($_POST['asc_sort4_3']) && $_POST['asc_sort4_3']==2){
  $sql4 = "SELECT I.*, R.nume_regiune FROM indicatori_sociali I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_inst_superioare DESC";
  $value4_3 = 1;
}



if($result4 = mysqli_query($link, $sql4)){
    if(mysqli_num_rows($result4) > 0){
      echo '<div class="clearfix">';
      echo '<h2 class="table-title pull-left">Indicatori sociali</h2>';
      echo '<a href="php/create/create.php?table=4" class="btn btn-success pull-right hide"><i class="fa fa-plus"></i> Adauga date</a>';
      echo "</div>";
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nume regiune</th>";
            echo "<th>Numărul instituțiilor medicale</th>";
            echo "<th>Numărul școlilor</th>";
            echo "<th>Numărul elevilor</th>";
            echo "<th>Numărul instituțiilor superioare de invățământ</th>";
            echo "<th>Anul</th>";
            echo "<th>Acțiuni</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row4 = mysqli_fetch_array($result4)){
          echo "<tr>";
            echo "<td>" . $row4['id_indicatori'] . "</td>";
            echo "<td>" . $row4['nume_regiune'] . "</td>";
            echo "<td>" . $row4['nr_institutii_medicale'] . "</td>";
            echo "<td>" . $row4['nr_scoli'] . "</td>";
            echo "<td>" . $row4['nr_elevi'] . "</td>";
            echo "<td>" . $row4['nr_inst_superioare'] . "</td>";
            echo "<td>" . $row4['anul'] . "</td>";
            echo "<td>";
              echo '<a href="php/read.php?id='. $row4['id_indicatori'] .'" class="mr-3 table-button" title="Vizualizare date" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
              echo '<a href="php/update.php?table=4&id='. $row4['id_indicatori'] .'" class="mr-3 table-button hide" title="Modifica date" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
              echo '<a href="php/delete.php?table=4&id='. $row4['id_indicatori'] .'" class="mr-3 table-button hide" title="Sterge date" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";                            
      echo "</table>";
      echo "<form name='' method='post' action=''>";
      echo "<button type='submit' name='asc_sort4' id='asc_sort4' class='btn btn-primary button' value='0'>Reset</button>";
      echo "<button type='submit' name='asc_sort4' id='asc_sort4' class='btn btn-primary button' value='$value4'>Sortează nr. inst. medicale</button>";
      echo "<button type='submit' name='asc_sort4_1' id='asc_sort4_1' class='btn btn-primary button' value='$value4_1'>Sortează nr. școlilor</button>";
      echo "<button type='submit' name='asc_sort4_2' id='asc_sort4_2' class='btn btn-primary button' value='$value4_2'>Sortează nr. elevilor</button>";
      echo "<button type='submit' name='asc_sort4_3' id='asc_sort4_3' class='btn btn-primary button' value='$value4_3'>Sortează nr. universităților</button>";
    } else{
      echo '<div class="alert alert-danger"><em>Nu au fost gasite date</em></div>';
    }
} else{
    echo "Eroare";
}



// pentru produs_intern_brut

$sql5 = "SELECT P.*, R.nume_regiune FROM produs_intern_brut P JOIN regiuni_de_dezvoltare R ON P.id_regiune = R.id_regiune";
$value5 = 1;
$value5_1 = 1;

if(isset($_POST['asc_sort5']) && !empty($_POST['asc_sort5']) && $_POST['asc_sort5']==1)
{
  $sql5 = "SELECT P.*, R.nume_regiune FROM produs_intern_brut P JOIN regiuni_de_dezvoltare R ON P.id_regiune = R.id_regiune ORDER BY P.pib_regional ASC";
  $value5 = 2;
}elseif(isset($_POST['asc_sort5']) && !empty($_POST['asc_sort5']) && $_POST['asc_sort5']==2){
  $sql5 = "SELECT P.*, R.nume_regiune FROM produs_intern_brut P JOIN regiuni_de_dezvoltare R ON P.id_regiune = R.id_regiune ORDER BY P.pib_regional DESC";
  $value5 = 1;
}

if(isset($_POST['asc_sort5_1']) && !empty($_POST['asc_sort5_1']) && $_POST['asc_sort5_1']==1)
{
  $sql5 = "SELECT P.*, R.nume_regiune FROM produs_intern_brut P JOIN regiuni_de_dezvoltare R ON P.id_regiune = R.id_regiune ORDER BY P.ponderea_pib ASC";
  $value5_1 = 2;
}elseif(isset($_POST['asc_sort5_1']) && !empty($_POST['asc_sort5_1']) && $_POST['asc_sort5_1']==2){
  $sql5 = "SELECT P.*, R.nume_regiune FROM produs_intern_brut P JOIN regiuni_de_dezvoltare R ON P.id_regiune = R.id_regiune ORDER BY P.ponderea_pib DESC";
  $value5_1 = 1;
}




if($result5 = mysqli_query($link, $sql5)){
    if(mysqli_num_rows($result5) > 0){
      echo '<div class="clearfix">';
      echo '<h2 class="table-title pull-left">Produsul intern brut regional</h2>';
      echo '<a href="php/create/create.php?table=5" class="btn btn-success pull-right hide"><i class="fa fa-plus"></i> Adauga date</a>';
      echo "</div>";
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nume regiune</th>";
            echo "<th>PIB-ul regional</th>";
            echo "<th>Ponderea PIB-ului regional</th>";
            echo "<th>Anul</th>";
            echo "<th>Acțiuni</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row5 = mysqli_fetch_array($result5)){
          echo "<tr>";
            echo "<td>" . $row5['id_pib'] . "</td>";
            echo "<td>" . $row5['nume_regiune'] . "</td>";
            echo "<td>" . $row5['pib_regional'] . " mii lei</td>";
            echo "<td>" . $row5['ponderea_pib'] . "%</td>";
            echo "<td>" . $row5['anul'] . "</td>";
            echo "<td>";
              echo '<a href="php/read.php?id='. $row5['id_pib'] .'" class="mr-3 table-button" title="Vizualizare date" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
              echo '<a href="php/update.php?table=5&id='. $row5['id_pib'] .'" class="mr-3 table-button hide" title="Modifica date" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
              echo '<a href="php/delete.php?table=5&id='. $row5['id_pib'] .'" class="mr-3 table-button hide" title="Sterge date" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";                            
      echo "</table>";
      echo "<form name='' method='post' action=''>";
      echo "<button type='submit' name='asc_sort5' id='asc_sort5' class='btn btn-primary button' value='0'>Reset</button>";
      echo "<button type='submit' name='asc_sort5' id='asc_sort5' class='btn btn-primary button' value='$value5'>Sortează pib-ul</button>";
      echo "<button type='submit' name='asc_sort5_1' id='asc_sort5_1' class='btn btn-primary button' value='$value5_1'>Sortează ponderea pib-ului</button>";
    } else{
      echo '<div class="alert alert-danger"><em>Nu au fost gasite date</em></div>';
    }
} else{
    echo "Eroare";
}



// pentru infrastructura

$sql6 = "SELECT I.*, R.nume_regiune FROM infrastructura I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune";
$value6 = 1;
$value6_1 = 1;
$value6_2 = 1;
$value6_3 = 1;

if(isset($_POST['asc_sort6']) && !empty($_POST['asc_sort6']) && $_POST['asc_sort6']==1)
{
  $sql6 = "SELECT I.*, R.nume_regiune FROM infrastructura I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.lung_drum_publice ASC";
  $value6 = 2;
}elseif(isset($_POST['asc_sort6']) && !empty($_POST['asc_sort6']) && $_POST['asc_sort6']==2){
  $sql6 = "SELECT I.*, R.nume_regiune FROM infrastructura I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.lung_drum_publice DESC";
  $value6 = 1;
}

if(isset($_POST['asc_sort6_1']) && !empty($_POST['asc_sort6_1']) && $_POST['asc_sort6_1']==1)
{
  $sql6 = "SELECT I.*, R.nume_regiune FROM infrastructura I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.pond_loc_gazificate ASC";
  $value6_1 = 2;
}elseif(isset($_POST['asc_sort6_1']) && !empty($_POST['asc_sort6_1']) && $_POST['asc_sort6_1']==2){
  $sql6 = "SELECT I.*, R.nume_regiune FROM infrastructura I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.pond_loc_gazificate DESC";
  $value6_1 = 1;
}


if(isset($_POST['asc_sort6_2']) && !empty($_POST['asc_sort6_2']) && $_POST['asc_sort6_2']==1)
{
  $sql6 = "SELECT I.*, R.nume_regiune FROM infrastructura I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.alim_apeducte ASC";
  $value6_2 = 2;
}elseif(isset($_POST['asc_sort6_2']) && !empty($_POST['asc_sort6_2']) && $_POST['asc_sort6_2']==2){
  $sql6 = "SELECT I.*, R.nume_regiune FROM infrastructura I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.alim_apeducte DESC";
  $value6_2 = 1;
}


if(isset($_POST['asc_sort6_3']) && !empty($_POST['asc_sort6_3']) && $_POST['asc_sort6_3']==1)
{
  $sql6 = "SELECT I.*, R.nume_regiune FROM infrastructura I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.pond_canalizare ASC";
  $value6_3 = 2;
}elseif(isset($_POST['asc_sort6_3']) && !empty($_POST['asc_sort6_3']) && $_POST['asc_sort6_3']==2){
  $sql6 = "SELECT I.*, R.nume_regiune FROM infrastructura I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.pond_canalizare DESC";
  $value6_3 = 1;
}



if($result6 = mysqli_query($link, $sql6)){
    if(mysqli_num_rows($result6) > 0){
      echo '<div class="clearfix">';
      echo '<h2 class="table-title pull-left">Infrastructura</h2>';
      echo '<a href="php/create/create.php?table=6" class="btn btn-success pull-right hide"><i class="fa fa-plus"></i> Adauga date</a>';
      echo "</div>";
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nume regiune</th>";
            echo "<th>Lungimea drumurilor publice</th>";
            echo "<th>Ponderea locuintelor alimentate cu gaze</th>";
            echo "<th>Ponderea locuintelor alimentate prin apeduct</th>";
            echo "<th>Ponderea locuintelor conectate la sistem de canalizare</th>";
            echo "<th>Anul</th>";
            echo "<th>Acțiuni</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row6 = mysqli_fetch_array($result6)){
          echo "<tr>";
            echo "<td>" . $row6['id_infr'] . "</td>";
            echo "<td>" . $row6['nume_regiune'] . "</td>";
            echo "<td>" . $row6['lung_drum_publice'] . "  km</td>";
            echo "<td>" . $row6['pond_loc_gazificate'] . "%</td>";
            echo "<td>" . $row6['alim_apeducte'] . "%</td>";
            echo "<td>" . $row6['pond_canalizare'] . "%</td>";
            echo "<td>" . $row6['anul'] . "</td>";
            echo "<td>";
              echo '<a href="php/read.php?id='. $row6['id_infr'] .'" class="mr-3 table-button" title="Vizualizare date" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
              echo '<a href="php/update.php?table=6&id='. $row6['id_infr'] .'" class="mr-3 table-button hide" title="Modifica date" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
              echo '<a href="php/delete.php?table=6&id='. $row6['id_infr'] .'" class="mr-3 table-button hide" title="Sterge date" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";                            
      echo "</table>";
      echo "<form name='' method='post' action=''>";
      echo "<button type='submit' name='asc_sort6' id='asc_sort6' class='btn btn-primary button' value='0'>Reset</button>";
      echo "<button type='submit' name='asc_sort6' id='asc_sort6' class='btn btn-primary button' value='$value6'>Sortează lung. drum.</button>";
      echo "<button type='submit' name='asc_sort6_1' id='asc_sort6_1' class='btn btn-primary button' value='$value6_1'>Sortează gazificarea loc.</button>";
      echo "<button type='submit' name='asc_sort6_2' id='asc_sort6_2' class='btn btn-primary button' value='$value6_2'>Sortează alim. prin apeduct</button>";
      echo "<button type='submit' name='asc_sort6_3' id='asc_sort6_3' class='btn btn-primary button' value='$value6_3'>Sortează pond. canalizarii</button>";
    } else{
      echo '<div class="alert alert-danger"><em>Nu au fost gasite date</em></div>';
    }
} else{
    echo "Eroare";
}


// pentru industrie

$sql7 = "SELECT I.*, R.nume_regiune FROM industrie I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune";
$value7 = 1;
$value7_1 = 1;
$value7_2 = 1;
$value7_3 = 1;

if(isset($_POST['asc_sort7']) && !empty($_POST['asc_sort7']) && $_POST['asc_sort7']==1)
{
  $sql7 = "SELECT I.*, R.nume_regiune FROM industrie I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_angajati ASC";
  $value7 = 2;
}elseif(isset($_POST['asc_sort7']) && !empty($_POST['asc_sort7']) && $_POST['asc_sort7']==2){
  $sql7 = "SELECT I.*, R.nume_regiune FROM industrie I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_angajati DESC";
  $value7 = 1;
}

if(isset($_POST['asc_sort7_1']) && !empty($_POST['asc_sort7_1']) && $_POST['asc_sort7_1']==1)
{
  $sql7 = "SELECT I.*, R.nume_regiune FROM industrie I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_intreprinderi_ind ASC";
  $value7_1 = 2;
}elseif(isset($_POST['asc_sort7_1']) && !empty($_POST['asc_sort7_1']) && $_POST['asc_sort7_1']==2){
  $sql7 = "SELECT I.*, R.nume_regiune FROM industrie I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.nr_intreprinderi_ind DESC";
  $value7_1 = 1;
}


if(isset($_POST['asc_sort7_2']) && !empty($_POST['asc_sort7_2']) && $_POST['asc_sort7_2']==1)
{
  $sql7 = "SELECT I.*, R.nume_regiune FROM industrie I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.val_productie ASC";
  $value7_2 = 2;
}elseif(isset($_POST['asc_sort7_2']) && !empty($_POST['asc_sort7_2']) && $_POST['asc_sort7_2']==2){
  $sql7 = "SELECT I.*, R.nume_regiune FROM industrie I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.val_productie DESC";
  $value7_2 = 1;
}


if(isset($_POST['asc_sort7_3']) && !empty($_POST['asc_sort7_3']) && $_POST['asc_sort7_3']==1)
{
  $sql7 = "SELECT I.*, R.nume_regiune FROM industrie I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.pond_productie ASC";
  $value7_3 = 2;
}elseif(isset($_POST['asc_sort7_3']) && !empty($_POST['asc_sort7_3']) && $_POST['asc_sort7_3']==2){
  $sql7 = "SELECT I.*, R.nume_regiune FROM industrie I JOIN regiuni_de_dezvoltare R ON I.id_regiune = R.id_regiune ORDER BY I.pond_productie DESC";
  $value7_3 = 1;
}



if($result7 = mysqli_query($link, $sql7)){
    if(mysqli_num_rows($result7) > 0){
      echo '<div class="clearfix">';
      echo '<h2 class="table-title pull-left">Industria</h2>';
      echo '<a href="php/create/create.php?table=7" class="btn btn-success pull-right hide"><i class="fa fa-plus"></i> Adauga date</a>';
      echo "</div>";
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nume regiune</th>";
            echo "<th>Numarul angajatilor in industrie</th>";
            echo "<th>Numarul intreprinderilor industriele</th>";
            echo "<th>Valoarea productiei industriele</th>";
            echo "<th>Ponderea productiei industriele</th>";
            echo "<th>Anul</th>";
            echo "<th>Acțiuni</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row7 = mysqli_fetch_array($result7)){
          echo "<tr>";
            echo "<td>" . $row7['id_ind'] . "</td>";
            echo "<td>" . $row7['nume_regiune'] . "</td>";
            echo "<td>" . $row7['nr_angajati'] . "</td>";
            echo "<td>" . $row7['nr_intreprinderi_ind'] . "</td>";
            echo "<td>" . $row7['val_productie'] . " mil. lei</td>";
            echo "<td>" . $row7['pond_productie'] . "%</td>";
            echo "<td>" . $row7['anul'] . "</td>";
            echo "<td>";
              echo '<a href="php/read.php?id='. $row7['id_ind'] .'" class="mr-3 table-button" title="Vizualizare date" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
              echo '<a href="php/update.php?table=7&id='. $row7['id_ind'] .'" class="mr-3 table-button hide" title="Modifica date" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
              echo '<a href="php/delete.php?table=7&id='. $row7['id_ind'] .'" class="mr-3 table-button hide" title="Sterge date" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";                            
      echo "</table>";
      echo "<form name='' method='post' action=''>";
      echo "<button type='submit' name='asc_sort7' id='asc_sort7' class='btn btn-primary button' value='0'>Reset</button>";
      echo "<button type='submit' name='asc_sort7' id='asc_sort7' class='btn btn-primary button' value='$value7'>Sortează nr. angajati</button>";
      echo "<button type='submit' name='asc_sort7_1' id='asc_sort7_1' class='btn btn-primary button' value='$value7_1'>Sortează nr. intreprinderi</button>";
      echo "<button type='submit' name='asc_sort7_2' id='asc_sort7_2' class='btn btn-primary button' value='$value7_2'>Sortează val. productie</button>";
      echo "<button type='submit' name='asc_sort7_3' id='asc_sort7_3' class='btn btn-primary button' value='$value7_3'>Sortează pond. productie</button>";
    } else{
      echo '<div class="alert alert-danger"><em>Nu au fost gasite date</em></div>';
    }
} else{
    echo "Eroare";
}


// pentru agricultura

$sql8 = "SELECT A.*, R.nume_regiune FROM agricultura A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune";
$value8 = 1;
$value8_1 = 1;
$value8_2 = 1;
$value8_3 = 1;

if(isset($_POST['asc_sort8']) && !empty($_POST['asc_sort8']) && $_POST['asc_sort8']==1)
{
  $sql8 = "SELECT A.*, R.nume_regiune FROM agricultura A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.nr_angajati_agr ASC";
  $value8 = 2;
}elseif(isset($_POST['asc_sort8']) && !empty($_POST['asc_sort8']) && $_POST['asc_sort8']==2){
  $sql8 = "SELECT A.*, R.nume_regiune FROM agricultura A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.nr_angajati_agr DESC";
  $value8 = 1;
}

if(isset($_POST['asc_sort8_1']) && !empty($_POST['asc_sort8_1']) && $_POST['asc_sort8_1']==1)
{
  $sql8 = "SELECT A.*, R.nume_regiune FROM agricultura A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.teren_arabil ASC";
  $value8_1 = 2;
}elseif(isset($_POST['asc_sort8_1']) && !empty($_POST['asc_sort8_1']) && $_POST['asc_sort8_1']==2){
  $sql8 = "SELECT A.*, R.nume_regiune FROM agricultura A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.teren_arabil DESC";
  $value8_1 = 1;
}


if(isset($_POST['asc_sort8_2']) && !empty($_POST['asc_sort8_2']) && $_POST['asc_sort8_2']==1)
{
  $sql8 = "SELECT A.*, R.nume_regiune FROM agricultura A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.nr_animale ASC";
  $value8_2 = 2;
}elseif(isset($_POST['asc_sort8_2']) && !empty($_POST['asc_sort8_2']) && $_POST['asc_sort8_2']==2){
  $sql8 = "SELECT A.*, R.nume_regiune FROM agricultura A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.nr_animale DESC";
  $value8_2 = 1;
}


if(isset($_POST['asc_sort8_3']) && !empty($_POST['asc_sort8_3']) && $_POST['asc_sort8_3']==1)
{
  $sql8 = "SELECT A.*, R.nume_regiune FROM agricultura A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.recolta_cerealiere ASC";
  $value8_3 = 2;
}elseif(isset($_POST['asc_sort8_3']) && !empty($_POST['asc_sort8_3']) && $_POST['asc_sort8_3']==2){
  $sql8 = "SELECT A.*, R.nume_regiune FROM agricultura A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.recolta_cerealiere DESC";
  $value8_3 = 1;
}



if($result8 = mysqli_query($link, $sql8)){
    if(mysqli_num_rows($result8) > 0){
      echo '<div class="clearfix">';
      echo '<h2 class="table-title pull-left">Agricultura</h2>';
      echo '<a href="php/create/create.php?table=8" class="btn btn-success pull-right hide"><i class="fa fa-plus"></i> Adauga date</a>';
      echo "</div>";
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nume regiune</th>";
            echo "<th>Numarul angajatilor in agricultura</th>";
            echo "<th>Suprafata terenului arabil</th>";
            echo "<th>Numarul animalelor</th>";
            echo "<th>Recolta anuala de cereale</th>";
            echo "<th>Anul</th>";
            echo "<th>Acțiuni</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row8 = mysqli_fetch_array($result8)){
          echo "<tr>";
            echo "<td>" . $row8['id_agr'] . "</td>";
            echo "<td>" . $row8['nume_regiune'] . "</td>";
            echo "<td>" . $row8['nr_angajati_agr'] . "</td>";
            echo "<td>" . $row8['teren_arabil'] . " hectare</td>";
            echo "<td>" . $row8['nr_animale'] . "</td>";
            echo "<td>" . $row8['recolta_cerealiere'] . " tone</td>";
            echo "<td>" . $row8['anul'] . "</td>";
            echo "<td>";
              echo '<a href="php/read.php?id='. $row8['id_agr'] .'" class="mr-3 table-button" title="Vizualizare date" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
              echo '<a href="php/update.php?table=8&id='. $row8['id_agr'] .'" class="mr-3 table-button hide" title="Modifica date" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
              echo '<a href="php/delete.php?table=8&id='. $row8['id_agr'] .'" class="mr-3 table-button hide" title="Sterge date" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";                            
      echo "</table>";
      echo "<form name='' method='post' action=''>";
      echo "<button type='submit' name='asc_sort8' id='asc_sort8' class='btn btn-primary button' value='0'>Reset</button>";
      echo "<button type='submit' name='asc_sort8' id='asc_sort8' class='btn btn-primary button' value='$value8'>Sortează nr. angajati</button>";
      echo "<button type='submit' name='asc_sort8_1' id='asc_sort8_1' class='btn btn-primary button' value='$value8_1'>Sortează terenuri arabile</button>";
      echo "<button type='submit' name='asc_sort8_2' id='asc_sort8_2' class='btn btn-primary button' value='$value8_2'>Sortează nr. animale</button>";
      echo "<button type='submit' name='asc_sort8_3' id='asc_sort8_3' class='btn btn-primary button' value='$value8_3'>Sortează recolta cereale</button>";
    } else{
      echo '<div class="alert alert-danger"><em>Nu au fost gasite date</em></div>';
    }
} else{
    echo "Eroare";
}




// pentru anteprenoriat

$sql9 = "SELECT A.*, R.nume_regiune FROM antreprenoriat A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune";
$value9 = 1;
$value9_1 = 1;
$value9_2 = 1;
$value9_3 = 1;

if(isset($_POST['asc_sort9']) && !empty($_POST['asc_sort9']) && $_POST['asc_sort9']==1)
{
  $sql9 = "SELECT A.*, R.nume_regiune FROM antreprenoriat A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.nr_intreprinderi ASC";
  $value9 = 2;
}elseif(isset($_POST['asc_sort9']) && !empty($_POST['asc_sort9']) && $_POST['asc_sort9']==2){
  $sql9 = "SELECT A.*, R.nume_regiune FROM antreprenoriat A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.nr_intreprinderi DESC";
  $value9 = 1;
}

if(isset($_POST['asc_sort9_1']) && !empty($_POST['asc_sort9_1']) && $_POST['asc_sort9_1']==1)
{
  $sql9 = "SELECT A.*, R.nume_regiune FROM antreprenoriat A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.nr_salariati ASC";
  $value9_1 = 2;
}elseif(isset($_POST['asc_sort9_1']) && !empty($_POST['asc_sort9_1']) && $_POST['asc_sort9_1']==2){
  $sql9 = "SELECT A.*, R.nume_regiune FROM antreprenoriat A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.nr_salariati  DESC";
  $value9_1 = 1;
}


if(isset($_POST['asc_sort9_2']) && !empty($_POST['asc_sort9_2']) && $_POST['asc_sort9_2']==1)
{
  $sql9 = "SELECT A.*, R.nume_regiune FROM antreprenoriat A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.sold_venit ASC";
  $value9_2 = 2;
}elseif(isset($_POST['asc_sort9_2']) && !empty($_POST['asc_sort9_2']) && $_POST['asc_sort9_2']==2){
  $sql9 = "SELECT A.*, R.nume_regiune FROM antreprenoriat A JOIN regiuni_de_dezvoltare R ON A.id_regiune = R.id_regiune ORDER BY A.sold_venit DESC";
  $value9_2 = 1;
}




if($result9 = mysqli_query($link, $sql9)){
    if(mysqli_num_rows($result9) > 0){
      echo '<div class="clearfix">';
      echo '<h2 class="table-title pull-left">Antreprenoriat</h2>';
      echo '<a href="php/create/create.php?table=9" class="btn btn-success pull-right hide"><i class="fa fa-plus"></i> Adauga date</a>';
      echo "</div>";
      echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
          echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nume regiune</th>";
            echo "<th>Numarul intreprinderilor comerciale</th>";
            echo "<th>Numarul salariatilor intreprinderilor comerciale</th>";
            echo "<th>Soldul veniturilor intreprinderilor comerciale</th>";
            echo "<th>Anul</th>";
            echo "<th>Acțiuni</th>";
          echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row9 = mysqli_fetch_array($result9)){
          echo "<tr>";
            echo "<td>" . $row9['id_antrep'] . "</td>";
            echo "<td>" . $row9['nume_regiune'] . "</td>";
            echo "<td>" . $row9['nr_intreprinderi'] . "</td>";
            echo "<td>" . $row9['nr_salariati'] . "</td>";
            echo "<td>" . $row9['sold_venit'] . " mil. lei</td>";
            echo "<td>" . $row9['anul'] . "</td>";
            echo "<td>";
              echo '<a href="php/read.php?id='. $row9['id_antrep'] .'" class="mr-3 table-button" title="Vizualizare date" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
              echo '<a href="php/update.php?table=9&id='. $row9['id_antrep'] .'" class="mr-3 table-button hide" title="Modifica date" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
              echo '<a href="php/delete.php?table=9&id='. $row9['id_antrep'] .'" class="mr-3 table-button hide" title="Sterge date" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
          echo "</tr>";
        }
        echo "</tbody>";                            
      echo "</table>";
      echo "<form name='' method='post' action=''>";
      echo "<button type='submit' name='asc_sort9' id='asc_sort9' class='btn btn-primary button' value='0'>Reset</button>";
      echo "<button type='submit' name='asc_sort9' id='asc_sort9' class='btn btn-primary button' value='$value9'>Sortează nr. intreprinderi</button>";
      echo "<button type='submit' name='asc_sort9_1' id='asc_sort9_1' class='btn btn-primary button' value='$value9_1'>Sortează nr. salariati</button>";
      echo "<button type='submit' name='asc_sort9_2' id='asc_sort9_2' class='btn btn-primary button' value='$value9_2'>Sortează soldul veniturilor</button>";
    } else{
      echo '<div class="alert alert-danger"><em>Nu au fost gasite date</em></div>';
    }
} else{
    echo "Eroare";
}



mysqli_free_result($result);
mysqli_free_result($result2);
mysqli_free_result($result3);
mysqli_free_result($result4);
mysqli_free_result($result5);
mysqli_free_result($result6);
mysqli_free_result($result7);
mysqli_free_result($result8);
mysqli_free_result($result9);

// Close connection
mysqli_close($link);
?>