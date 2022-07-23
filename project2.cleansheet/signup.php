<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/signup.css">
<body>
    <div class="center">
        <h1>Signup Here </h1>
        <div class="textfield">
            <form action="includes/signup.inc.php" method="post">
                <p> First Name </p>
                <input type="text" name="first-name" placeholder="enter your First Name" required>
                <p>Surname</p>
                <input type="text" name="surname" placeholder=" enter your Surname " required>
                <p>Username</p>
                <input type="text" name="uid" placeholder=" enter your username"  required>
                <P>E-MAIL</P>
                <input type="email" name="email" placeholder=" enter your personal E-mail "  required>
                <P>Password</P>
                <input type="password" name="pwd" placeholder=" enter a password"  required>
                <p>Confirm Password</p>
                <input type="password" name="rep-pwd" placeholder=" Confirm Password entered above"  required>
              <button id="signup" name="signup"> Signup</button>
                      
            </div>
            </form>
       
        <div class="member">
           <p id="member">already a member? <a href="login.php"> sign in</a> </p>
        </div>
    </div>
</body>
</html>