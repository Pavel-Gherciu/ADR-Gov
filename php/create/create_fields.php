

<?php

if(intval(trim($_GET["table"])) == 1){

$error1_1 = (!empty($nume_regiune_err)) ? 'is-invalid' : '';
$error1_2 = (!empty($suprafata_err)) ? 'is-invalid' : '';
$error1_3 = (!empty($nr_populatie_err)) ? 'is-invalid' : '';

echo'<div class="form-group">';
echo'<label>Numele regiunii</label>';
echo"<input type='text' name='nume_regiune' class='form-control $error1_1' value='$nume_regiune'>";
echo"<span class='invalid-feedback'> $nume_regiune_err</span>";
echo'</div>';

echo'<div class="form-group">';
echo'<label>Suprafata regiunii</label>';
echo"<input name='suprafata' class='form-control $error1_2' value='$suprafata'>";
echo"<span class='invalid-feedback'>$suprafata_err</span>";
echo'</div>';

echo'<div class="form-group">';
echo'<label>Numarul populatiei</label>';
echo "<input type='text' name='nr_populatie' class='form-control $error1_3' value='$nr_populatie'>";
echo "<span class='invalid-feedback'>$nr_populatie_err</span>";
echo'</div>';
}

if(intval(trim($_GET["table"])) == 2){
  $error2_1 = (!empty($id_regiune_err)) ? 'is-invalid' : '';
  $error2_2 = (!empty($densitate_medie_err)) ? 'is-invalid' : '';
  $error2_3 = (!empty($spor_natural_err)) ? 'is-invalid' : '';
  $error2_4 = (!empty($sold_migr_interna_err)) ? 'is-invalid' : '';
  $error2_5 = (!empty($anul_err)) ? 'is-invalid' : '';
  echo'<div class="form-group">';
  echo'<label>Id-ul regiunii</label>';
  echo"<input type='text' name='id_regiune' class='form-control $error2_1' value='$id_regiune'>";
  echo"<span class='invalid-feedback'> $id_regiune_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Densitatea medie a populației</label>';
  echo"<input name='densitate_medie' class='form-control $error2_2' value='$densitate_medie'>";
  echo"<span class='invalid-feedback'>$densitate_medie_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Sporul natural al populatiei</label>';
  echo "<input type='text' name='spor_natural' class='form-control $error2_3' value='$spor_natural'>";
  echo "<span class='invalid-feedback'>$spor_natural_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Soldul migratiei interne</label>';
  echo "<input type='text' name='sold_migr_interna' class='form-control $error2_4' value='$sold_migr_interna'>";
  echo "<span class='invalid-feedback'>$sold_migr_interna_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Anul</label>';
  echo "<input type='text' name='anul' class='form-control $error2_5' value='$anul'>";
  echo "<span class='invalid-feedback'>$anul_err</span>";
  echo'</div>';

}


if(intval(trim($_GET["table"])) == 3){
  $error3_1 = (!empty($id_regiune_err)) ? 'is-invalid' : '';
  $error3_2 = (!empty($nr_salariati_err)) ? 'is-invalid' : '';
  $error3_3 = (!empty($rata_ocuparii_err)) ? 'is-invalid' : '';
  $error3_4 = (!empty($loc_munca_vacante_err)) ? 'is-invalid' : '';
  $error3_5 = (!empty($nr_someri_err)) ? 'is-invalid' : '';
  $error3_6 = (!empty($rata_somaj_err)) ? 'is-invalid' : '';
  $error3_7 = (!empty($anul_err)) ? 'is-invalid' : '';

  echo'<div class="form-group">';
  echo'<label>Id-ul regiunii</label>';
  echo"<input type='text' name='id_regiune' class='form-control $error3_1' value='$id_regiune'>";
  echo"<span class='invalid-feedback'> $id_regiune_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numărul salariaților</label>';
  echo"<input name='nr_salariati' class='form-control $error3_2' value='$nr_salariati'>";
  echo"<span class='invalid-feedback'>$nr_salariati_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Rata de ocupare a populaţiei</label>';
  echo "<input type='text' name='rata_ocuparii' class='form-control $error3_3' value='$rata_ocuparii'>";
  echo "<span class='invalid-feedback'>$rata_ocuparii_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Locuri de munca vacante</label>';
  echo "<input type='text' name='loc_munca_vacante' class='form-control $error3_4' value='$loc_munca_vacante'>";
  echo "<span class='invalid-feedback'>$loc_munca_vacante_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numarul somerilor</label>';
  echo "<input type='text' name='nr_someri' class='form-control $error3_5' value='$nr_someri'>";
  echo "<span class='invalid-feedback'>$nr_someri_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Rata somajului</label>';
  echo "<input type='text' name='rata_somaj' class='form-control $error3_6' value='$rata_somaj'>";
  echo "<span class='invalid-feedback'>$rata_somaj_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Anul</label>';
  echo "<input type='text' name='anul' class='form-control $error3_7' value='$anul'>";
  echo "<span class='invalid-feedback'>$anul_err</span>";
  echo'</div>';

}


if(intval(trim($_GET["table"])) == 4){
  $error4_1 = (!empty($id_regiune_err)) ? 'is-invalid' : '';
  $error4_2 = (!empty($nr_institutii_medicale_err)) ? 'is-invalid' : '';
  $error4_3 = (!empty($nr_scoli_err)) ? 'is-invalid' : '';
  $error4_4 = (!empty($nr_elevi_err)) ? 'is-invalid' : '';
  $error4_5 = (!empty($nr_inst_superioare_err)) ? 'is-invalid' : '';
  $error4_6 = (!empty($anul_err)) ? 'is-invalid' : '';

  echo'<div class="form-group">';
  echo'<label>Id-ul regiunii</label>';
  echo"<input type='text' name='id_regiune' class='form-control $error4_1' value='$id_regiune'>";
  echo"<span class='invalid-feedback'> $id_regiune_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numarul instituțiilor medicale</label>';
  echo"<input name='nr_institutii_medicale' class='form-control $error4_2' value='$nr_institutii_medicale'>";
  echo"<span class='invalid-feedback'>$nr_institutii_medicale_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numărul școlilor</label>';
  echo "<input type='text' name='nr_scoli' class='form-control $error4_3' value='$nr_scoli'>";
  echo "<span class='invalid-feedback'>$nr_scoli_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numărul elevilor</label>';
  echo "<input type='text' name='nr_elevi' class='form-control $error4_4' value='$nr_elevi'>";
  echo "<span class='invalid-feedback'>$nr_elevi_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numărul instituțiilor superioare de invățământ</label>';
  echo "<input type='text' name='nr_inst_superioare' class='form-control $error4_5' value='$nr_inst_superioare'>";
  echo "<span class='invalid-feedback'>$nr_inst_superioare_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Anul</label>';
  echo "<input type='text' name='anul' class='form-control $error4_6' value='$anul'>";
  echo "<span class='invalid-feedback'>$anul_err</span>";
  echo'</div>';

}




if(intval(trim($_GET["table"])) == 5){
  $error5_1 = (!empty($id_regiune_err)) ? 'is-invalid' : '';
  $error5_2 = (!empty($pib_regional_err)) ? 'is-invalid' : '';
  $error5_3 = (!empty($ponderea_pib_err)) ? 'is-invalid' : '';
  $error5_4 = (!empty($anul_err)) ? 'is-invalid' : '';

  echo'<div class="form-group">';
  echo'<label>Id-ul regiunii</label>';
  echo"<input type='text' name='id_regiune' class='form-control $error5_1' value='$id_regiune'>";
  echo"<span class='invalid-feedback'> $id_regiune_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>PIB-ul regional</label>';
  echo"<input name='pib_regional' class='form-control $error5_2' value='$pib_regional'>";
  echo"<span class='invalid-feedback'>$pib_regional_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Ponderea PIB-ului</label>';
  echo "<input type='text' name='ponderea_pib' class='form-control $error5_3' value='$ponderea_pib'>";
  echo "<span class='invalid-feedback'>$ponderea_pib_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Anul</label>';
  echo "<input type='text' name='anul' class='form-control $error5_4' value='$anul'>";
  echo "<span class='invalid-feedback'>$anul_err</span>";
  echo'</div>';

}



if(intval(trim($_GET["table"])) == 6){
  $error6_1 = (!empty($id_regiune_err)) ? 'is-invalid' : '';
  $error6_2 = (!empty($lung_drum_publice_err)) ? 'is-invalid' : '';
  $error6_3 = (!empty($pond_loc_gazificate_err)) ? 'is-invalid' : '';
  $error6_4 = (!empty($alim_apeducte_err)) ? 'is-invalid' : '';
  $error6_5 = (!empty($pond_canalizare_err)) ? 'is-invalid' : '';
  $error6_6 = (!empty($anul_err)) ? 'is-invalid' : '';

  echo'<div class="form-group">';
  echo'<label>Id-ul regiunii</label>';
  echo"<input type='text' name='id_regiune' class='form-control $error6_1' value='$id_regiune'>";
  echo"<span class='invalid-feedback'> $id_regiune_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Lungimea drumurilor publice</label>';
  echo"<input name='lung_drum_publice' class='form-control $error6_2' value='$lung_drum_publice'>";
  echo"<span class='invalid-feedback'>$lung_drum_publice_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Ponderea locuintelor alimentate cu gaze</label>';
  echo "<input type='text' name='pond_loc_gazificate' class='form-control $error6_3' value='$pond_loc_gazificate'>";
  echo "<span class='invalid-feedback'>$pond_loc_gazificate_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Ponderea locuintelor alimentate prin apeduct</label>';
  echo "<input type='text' name='alim_apeducte' class='form-control $error6_4' value='$alim_apeducte'>";
  echo "<span class='invalid-feedback'>$alim_apeducte_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Ponderea locuintelor conectate la sistem de canalizare</label>';
  echo "<input type='text' name='pond_canalizare' class='form-control $error6_5' value='$pond_canalizare'>";
  echo "<span class='invalid-feedback'>$pond_canalizare_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Anul</label>';
  echo "<input type='text' name='anul' class='form-control $error6_6' value='$anul'>";
  echo "<span class='invalid-feedback'>$anul_err</span>";
  echo'</div>';

}



if(intval(trim($_GET["table"])) == 7){
  $error7_1 = (!empty($id_regiune_err)) ? 'is-invalid' : '';
  $error7_2 = (!empty($nr_angajati_err)) ? 'is-invalid' : '';
  $error7_3 = (!empty($nr_intreprinderi_ind_err)) ? 'is-invalid' : '';
  $error7_4 = (!empty($val_productie_err)) ? 'is-invalid' : '';
  $error7_5 = (!empty($pond_productie_err)) ? 'is-invalid' : '';
  $error7_6 = (!empty($anul_err)) ? 'is-invalid' : '';

  echo'<div class="form-group">';
  echo'<label>Id-ul regiunii</label>';
  echo"<input type='text' name='id_regiune' class='form-control $error7_1' value='$id_regiune'>";
  echo"<span class='invalid-feedback'> $id_regiune_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numarul angajatilor in industrie</label>';
  echo"<input name='nr_angajati' class='form-control $error7_2' value='$nr_angajati'>";
  echo"<span class='invalid-feedback'>$nr_angajati_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numarul intreprinderilor industriale</label>';
  echo "<input type='text' name='nr_intreprinderi_ind' class='form-control $error7_3' value='$nr_intreprinderi_ind'>";
  echo "<span class='invalid-feedback'>$nr_intreprinderi_ind_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Valoarea productiei industriale</label>';
  echo "<input type='text' name='val_productie' class='form-control $error7_4' value='$val_productie'>";
  echo "<span class='invalid-feedback'>$val_productie_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Ponderea productiei industriale</label>';
  echo "<input type='text' name='pond_productie' class='form-control $error7_5' value='$pond_productie'>";
  echo "<span class='invalid-feedback'>$pond_productie_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Anul</label>';
  echo "<input type='text' name='anul' class='form-control $error7_6' value='$anul'>";
  echo "<span class='invalid-feedback'>$anul_err</span>";
  echo'</div>';

}


if(intval(trim($_GET["table"])) == 8){
  $error8_1 = (!empty($id_regiune_err)) ? 'is-invalid' : '';
  $error8_2 = (!empty($nr_angajati_agr_err)) ? 'is-invalid' : '';
  $error8_3 = (!empty($teren_arabil_err)) ? 'is-invalid' : '';
  $error8_4 = (!empty($nr_animale_err)) ? 'is-invalid' : '';
  $error8_5 = (!empty($recolta_cerealiere_err)) ? 'is-invalid' : '';
  $error8_6 = (!empty($anul_err)) ? 'is-invalid' : '';

  echo'<div class="form-group">';
  echo'<label>Id-ul regiunii</label>';
  echo"<input type='text' name='id_regiune' class='form-control $error8_1' value='$id_regiune'>";
  echo"<span class='invalid-feedback'> $id_regiune_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numarul angajatilor in agricultura</label>';
  echo"<input name='nr_angajati_agr' class='form-control $error8_2' value='$nr_angajati_agr'>";
  echo"<span class='invalid-feedback'>$nr_angajati_agr_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Suprafata terenului arabil</label>';
  echo "<input type='text' name='teren_arabil' class='form-control $error8_3' value='$teren_arabil'>";
  echo "<span class='invalid-feedback'>$teren_arabil_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numarul animalelor</label>';
  echo "<input type='text' name='nr_animale' class='form-control $error8_4' value='$nr_animale'>";
  echo "<span class='invalid-feedback'>$nr_animale_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Recolta anuala de cereale</label>';
  echo "<input type='text' name='recolta_cerealiere' class='form-control $error8_5' value='$recolta_cerealiere'>";
  echo "<span class='invalid-feedback'>$recolta_cerealiere_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Anul</label>';
  echo "<input type='text' name='anul' class='form-control $error8_6' value='$anul'>";
  echo "<span class='invalid-feedback'>$anul_err</span>";
  echo'</div>';

}


if(intval(trim($_GET["table"])) == 9){
  $error9_1 = (!empty($id_regiune_err)) ? 'is-invalid' : '';
  $error9_2 = (!empty($nr_intreprinderi_err)) ? 'is-invalid' : '';
  $error9_3 = (!empty($nr_salariati_err)) ? 'is-invalid' : '';
  $error9_4 = (!empty($sold_venit_err)) ? 'is-invalid' : '';
  $error9_5 = (!empty($anul_err)) ? 'is-invalid' : '';

  echo'<div class="form-group">';
  echo'<label>Id-ul regiunii</label>';
  echo"<input type='text' name='id_regiune' class='form-control $error9_1' value='$id_regiune'>";
  echo"<span class='invalid-feedback'> $id_regiune_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numarul intreprinderilor comerciale</label>';
  echo"<input name='nr_intreprinderi' class='form-control $error9_2' value='$nr_intreprinderi'>";
  echo"<span class='invalid-feedback'>$nr_intreprinderi_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Numarul salariatilor intreprinderilor comerciale</label>';
  echo "<input type='text' name='nr_salariati' class='form-control $error9_3' value='$nr_salariati'>";
  echo "<span class='invalid-feedback'>$nr_salariati_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Soldul veniturilor intreprinderilor comerciale</label>';
  echo "<input type='text' name='sold_venit' class='form-control $error9_4' value='$sold_venit'>";
  echo "<span class='invalid-feedback'>$sold_venit_err</span>";
  echo'</div>';

  echo'<div class="form-group">';
  echo'<label>Anul</label>';
  echo "<input type='text' name='anul' class='form-control $error9_5' value='$anul'>";
  echo "<span class='invalid-feedback'>$anul_err</span>";
  echo'</div>';

}

?>


