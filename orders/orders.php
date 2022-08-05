<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
    <link rel="stylesheet" href="style _order.css">
    <link rel="stylesheet" href="hover.css">
</head>
<body>
   
    <header>
        <h2>mobile_store</h2>
        <button  class="openmenu_btn">Show</button>
    </header>
    <div class="order_details">
        <h1  class="hvr-curl-top-left" > ORDERS </h1>
      
       
    <br>
    </div>
    <section>
               <table>
        <tr class="frow">
            <th>رقم الطلب   </th>
            <th>التاريخ   </th>
            <th>عنوان التوصيل    </th>
            <th>المجموع </th>
        </tr>
        <tr>
            <th>  <a href="orders_details.php">5585</a> </th>
            <th>   </th>
            <th>   </th>
            <th>   </th>
        </tr>
        <tr>
            <th><a  href="orders_details.php">5962</a></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th><a href="orders_details.php">4785</a></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th><a href="orders_details.php">6540</a></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
</table> 

    </section>
<aside>
    <img class="img1" src="../img/phone.jpg" width="300" height="300" alt="order_img">
</aside>
<nav class="menu">
        <a class="menu-anchor" href="index.html">home</a>
        <a class="menu-anchor" href="#">about us</a>
        <a class="menu-anchor" href="">contact</a>
        <a class="menu-anchor" href="orders_details">order_details</a>
        <a class="menu-anchor" href="#">photo</a>
        <a class="menu-anchor" href="">location</a>
    <img class="img2" src="../img/phone.jpg" width="300" height="300" alt="order_img">
    </nav>
  <script src="jquery-3.6.0.min.js" ></script>
  <script>
     $("button").click(function(){
        let openMenue=$(this).html()
        if(openMenue == 'Show'){
            $(this).html("Hide")
        }else{
            $(this).html("Show")
        }
        //menu opening
        $(".menu").toggle(500);
    })
    

  </script>
</body>
</html>
?>