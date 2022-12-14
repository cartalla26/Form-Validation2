<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>

</head>

<body>

    <div class="container">
        <h2 class="he"><u>Registration Form</u></h2>
        <br><br>
        <form action="test1.php" , method="POST">
            <div class="form-group">
                <b>First Name</b> <input type="text" name="fname" id="fname" required placeholder="Enter first name"
                    pattern="^[A-Z]\w*$"
                    oninvalid="this.setCustomValidity('Please make first letter of your name as capital')"
                    onchange="try{setCustomValidity('')}catch(e){}"></input>
            </div>
            <div class="form-group">
                <b>Last Name</b> <input type="text" name="lname" id="lname" required placeholder="Enter last name"
                    pattern="^[A-Z]\w*$"
                    oninvalid="this.setCustomValidity('Please make first letter of your last name as capital')"
                    onchange="try{setCustomValidity('')}catch(e){}"></input>
            </div>
            <div class="form-group">
                <b>Address Name</b> <input type="text" name="addressname" id="addressname" required
                    placeholder="Enter address name" pattern="^[A-Z]\w*$"
                    oninvalid="this.setCustomValidity('Please make first letter of your address as capital')"
                    onchange="try{setCustomValidity('')}catch(e){}"></input>
            </div>
            <div class="form-group">
                <b>Email Address</b> <input type="email" name="email" id="email" placeholder="Enter email address"
                    required
                    oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')"
                    onchange="try{setCustomValidity('')}catch(e){}"></input>
            </div>
            <div class="form-group">
                <b>Password</b> <input type="password" name="pwd" id="pwd" placeholder="Enter new password"
                    pattern="(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z]).{6,10}"
                    title="Password should be of 6-10 length and should contain atleast one character and one number"></input>
            </div>
            <div class="form-group">
                <b>Confirm Password</b> <input type="password" name="psw-repeat" id="psw-repeat"
                    placeholder="Repeat your password" required>
            </div>
            <div class="form-group1">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>




    <script>
    var password = document.getElementById("pwd"),
        confirm_password = document.getElementById("psw-repeat");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;