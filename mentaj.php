<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صيدلية الشفاء</title>
    <link rel="stylesheet" href="pransipal.css"> <link rel="stylesheet" href="menta.css">
</head>
<body>
   <div class="a1">
        <h1>صيدلية الشفاء</h1>
    </header></div>
    <nav>
        <ul>
            
            <li><a href="mentaj.php">المنتجات</a></li>
           
        </ul>
    </nav>
   
   
   
   <?php 
// تضمين ملف الاتصال بقاعدة البيانات
include("far.php");
?>
<head><link rel="stylesheet" href="mentadj.css"></head>
<center>
    <div class="ae2">
<form method="GET">
    <input type="text" name="se" placeholder="ابحث...">
    <button type="submit" name="btn">ابحث</button>
</form>
   </div>

<?php





// استعلام SQL لاسترجاع البيانات من جدول "stoc" مرتبة بحسب العمود "idpro"
$aze = $bd->prepare("SELECT*FROM stoc ; ");
$aze->execute();

// عرض البيانات داخل جدول 
echo "<h1>  les prodoui disbonoble sur la farmasie:</h1>";
echo "<table border='3px' class='q1'>";
echo "<tr><th>cod</td><th>nom</td></tr>";

foreach($aze AS $result1){
    echo "<tr>";
    echo "<td>". $result1['idpro'] ."</td>";
    echo "<td>". $result1['nompro'] ."</td>";
 
  
  
    
    echo "</tr>";   
}
$ar = $bd->prepare("SELECT*FROM prixe; ");
$ar->execute();

   echo "<table border='3px' class='q1'>";
    echo "<tr><th>cod</td><th>nom</td><th>le prix</td></</tr>";
foreach($ar AS $arar){
    echo "<tr>";
    echo "<td>".$arar['idpro'] ."</td>";
    echo "<td>".$arar['nompro'] ."</td>";
    echo "<td>".$arar['prixvent'] ."</td>";
    echo "</tr>";   
}echo "<h1>  les prodoui disbonoble sur la farmasie+le peixe:</h1>";
echo "<center> ";
if(isset($_GET['btn'])){
    // استعلام SQL لاسترجاع البيانات بناءً على النص الذي تم إرساله عبر النموذج
    $ab = $bd->prepare("SELECT * FROM stoc WHERE nompro LIKE :value");
    $ab_v = "%".$_GET['se']."%"; // إضافة رموز "%" في البداية والنهاية من النص المرسل عبر النموذج
    $ab->bindParam(":value", $ab_v);
    $ab->execute();

    // عرض البيانات

    while($dat = $ab->fetch()){
        echo "<table border='3px'>";
        echo "<th>cod</td><th>nom</td><th>le prix</td></tr>";
    echo "<tr>";  

       echo "<td>". $dat['idpro']."</td>";
        echo "<td>". $dat['nompro']."</td>";
        echo"<td>". $arar['prixvent']."</td>";
        echo "</tr>";   
    }
}




?>




