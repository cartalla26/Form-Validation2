<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" . </head>

<body>

    <div class="container" align="center">
        <h2 class="he"><u>Registered Successfully</u></h2>
        <h3>Account Information</h3>


        <div class="form-group">



            <?php
        echo "<section style='text-align: centertart; color: black;'>";
        
        echo "<b> First Name: <span style='font-weight: 600; text-align:center;'>";"</span></b> <br>";
        echo $_POST['fname']."<br><br>";
        echo "<p>Last Name:<span style='font-weight: 600; text-align:center;'>";"</span></p> <br>";
	    echo $_POST['lname']."<br><br>";
	    echo "<p>Address Name:<span style='font-weight: 600; fontt: size 25px; text-align:center;'>";"</span></p><br> ";
	    echo $_POST['addressname']."<br><br>";	
        echo "<p>Email Id:<span style='font-weight: 600; fontt: size 25px; text-align:center;'>";"</span></p><br> ";
      echo $_POST['email']."<br>";  
	    echo "<p>Password:<span 
        style='font-weight: 600; text-align:center;'>";"</span></p><br> ";
	    echo $_POST['pwd']."<br>";
	  
?>

        </div>
        <div class="form-group1">
            <button type="submit"><a href="index.php">LOG-OUT</a></button>
        </div>
        </form>
    </div>
</body>

</html>