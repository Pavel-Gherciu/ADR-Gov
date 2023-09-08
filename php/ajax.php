<?php 

if(isset($_GET['table']) && !empty($_GET['table'])){

include('config.php');

$table = $_GET['table'];

$query = "SHOW COLUMNS FROM $table";
$do = mysqli_query($link, $query);
$count = mysqli_num_rows($do);

if($count>0){
  while($row = mysqli_fetch_array($do)){
    echo '<option value="'.$row['Field'].'">'.$row['Field'].'</option> ';
  }
}else{
 echo '<option>Select table</option>';
}

}else{
  echo'<h1>Error</h1>';
}

if(isset($_POST['submit'])){
  echo'<h1>WORKS</h1>';
}

?>