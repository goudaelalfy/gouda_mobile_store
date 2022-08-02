<html>

<head>
    <title> تسجيل جديد </title>
    <link rel="stylesheet"  href="css/register-style.css">
</head>

<body>
<div class="register-div">
    <img class="register-img" src="images/Internet-10.jpg" alt=""مستخدم"  width="300px" height="300" />
<br>
<br>  
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<dl></dl>
<dt class="register-dt"> sign up </dt>
   
        <br>
        <br>
        <div class="label-div">
<label class="register-label"> First Name:</label>
<input type="text" name="first_name">
<label class="register-label">  Last Name:</label>
<input type="text"  name="last_name"><br><br>
<label class="register-label"> Password:</label>
<input type="password">
<label class="register-label">Confirm Password:</label>
<input type="password"><br><br>
<label class="register-label"> Email:</label>
<input type="email"><br><br>
<label class="register-label">Phone Number:</label>
<input type="tel"><br><br>
<label class="gender-label"> Gender:</label>
<input type="radio" name="g" > <label >male </label>
<input type="radio" name="g" > <label >female</label> <br><br>
        </div>
        
        
        <button type="submit" class="register-button">  send  </button>    
</form>



</div>

</body>


</html>


<?php

echo 'test';
echo '<br/>------------------<br/>';

echo $_POST['first_name'];
echo '<br/>------------------<br/>';
echo $_POST['last_name'];
echo '<br/>------------------<br/>';

?>
