
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صيدلية الشفاء</title>
    <link rel="stylesheet" href="projweb.css"><link rel="stylesheet" href="kadamate.css">
</head>
<body>
    <header>
        <h1>صيدلية الشفاء</h1>
    </header>
    <nav>
        <ul>

            <li><a href="kadamat.html">الخدمات</a></li>
         
        </ul>
    </nav>
    <center>
    <div class="container">
        <h1>مرحباً بك في !</h1>
        
       <h2>   الدواء</h2><p>الدواء</p>
        

        <h2>الادوية متوفرة</h2>


        <form action="" method="post" onsubmit="return false;" id="orderForm"></form>
            <h2>اطلب الآن!</h2>
        
            <label for="nom"></label> اسم الدواء<input type="text">
            <br>
            <label for="quantity">الكمية:</label>
            <input type="number" name="quantity" id="quantity" min="1" value="1">
            <label for="drink">العنوان بالكامل:</label><input type="text">
            
            <label for="quantity">رقم الهاتف:</label>
            <input type="number" >
            <br>
           <label >wilaya</label><select name="a" id="a">
            <option value="a">bodje</option>
            <option value="a">stif</option>
            <option value="a">msila</option>
           </select>
            <br>
            <button type="submit"  onclick="showConfirmation()">أرسل الطلب</button>
        </form>
        <div class="confirmation" id="confirmation">تم استلام الطلب بنجاح!</div>
    </div>

    <script>
        function showConfirmation() {
            document.getElementById("confirmation").style.display = "block";
        }
    </script>
</body>
</html>