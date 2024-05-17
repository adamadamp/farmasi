


<?php
include("far.php");

if (isset($_POST['adeeE'])) {
    // استخراج البيانات المرسلة عبر النموذج
    $cod_EaE = $_POST['idproE'];
    $nomaE = $_POST['nomproE'];
    $priE = $_POST['prx'];

    // إعداد الاستعلام لإدراج البيانات في قاعدة البيانات
    $addE = $bd->prepare("INSERT INTO `prixe`(`idpro`, `nompro`, `prixvent`) VALUES (?, ?, ?)");
    
    // تنفيذ الاستعلام مع تمرير القيم
    $addE->execute([$cod_EaE, $nomaE, $priE]);
}
?>

<p>لإضافة السعر</p>
<form method="POST">
    <label>الكود</label><br>
    <input type="number" name="idproE"><br>
    <label>الاسم</label><br>
    <input type="text" name="nomproE"><br>
    <label>السعر</label><br>
    <input type="number" name="prx"><br>
    <button type="submit" name="adeeE">إضافة</button>
</form>
