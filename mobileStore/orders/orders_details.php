<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders_details</title>
    <link rel="stylesheet" href="style _order.css">
    <link rel="stylesheet" href="hover.css">
    
</head>
<body>
    <div class="container">
    <header>
        <h2  >mobile_store</h2>
    </header>
    <div class="order_details">
        <h1 class="hvr-curl-top-left"> ORDERS DETAILS </h1>
        <form action="get">
        <label for="name">اسم العميل </label>
        <input type="name">
        <label for="text">الايميل </label>
        <input type="email">
        <label for="name">رقم الطلب </label>
        <input type="name">
        <label for="name">تاريخ الطلب  </label>
        <input type="name">
        </form>
       
    <br>
    <li><a href="">الأصناف </a>    

        <select name="select" id="idselect">
        <option value="">sumsung</option>
        <option value="">hawawy</option>
        <option value="">oppo</option>
        <option value="">iphone</option>
        <option value="">nokia</option>
        <option value="">realme</option>
        <option value="">alkatel</option>
        <option value="">lonovo</option>
        <option value="">nokia</option>
        <option value="">shawme</option>
        <option value="">tablet</option>
        <option value="">pc</option>
    </select></li>
    </div>
    <section>
               <table>
        <tr class="frow">
            <th>الصنف  </th>
            <th>الكمية  </th>
            <th>السعر   </th>
            <th>المجموع </th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
</table> 
    </section>
    <aside>
        <img class="img1" src="../images/phone.jpg" width="300" height="300" alt="order_img">
    </aside>

    </div>
    <script src="../orders/jquery-3.6.0.min.js" ></script>
<script>
    setInterval(myTimer,1000);
    function myTimer (){
        const date = new Date();
        document.getElementById ("theTime").innerHTML= date.toLocaleString();
    }
</script>

</body>
</html>
?>