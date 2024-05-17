<?php
include("far.php");
if (isset($_POST['ade'])) {
    $cod_E = $_POST['idc'];
    $nom = $_POST['_cnom'];
    $prename = $_POST['prinom_c'];
    $télefon = $_POST['télefon_c'];
    $adrase = $_POST['adrasse'];

    $add = $bd->prepare("INSERT INTO `conte_cl`(`idc`, `_cnom`, `prinom_c`, `télefon_c`, `adrasse`) VALUES 
   ('$cod_E','$nom ',' $prename ','   $télefon','    $adrase ')");
    $add->execute();
}
?><head> 
<link rel="stylesheet" href="insicri.css">

<div class="a">
    <table border="2px">
<tr><td>

<center>
<form method="post">
<div class="aa"><img src="cfcf.jpg" width="200px"></div> <br>
    <label>cod</label><br>
    <input type="number" name="idc"><br>
    <label>name</label><br>
    <input type="text" name="_cnom"><br>
    <label>prinom</label><br>
    <input type="text" name="prinom_c"><br>
    <label>télefon</label><br>
    <input type="number" name="télefon_c"><br>
    <label>adrase</label><br>
    <input type="text" name="adrasse"><br> <br>
    <button type="reset">suprimi</button>
    <button type="submit" name="ade">ajouti</button>

</form>
