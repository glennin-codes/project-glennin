<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>glennintech'login</title>
    <link rel="stylesheet" href= "css/login.css">
<body>
     <div class="center">
         <img src="img/user.png" alt="" id="avatar">
                  <h1>login</h1>
                 
                 <form action="includes/login.inc.php" method="post">
                     <div class="textfield">
                        
                        <input type="text" name="uid"  required>
                        <span></span>
                        <label for="uid" id="label"> username/email</label>
                          
                    </div>
                    <div class="textfield">
                        <input type="password" name="pwd" required> 
                        <span></span>
                        <label for="pwd " id="label"> password</label>
                    </div>
                    <div class="forgetpwd">
                        <a href="#"> Forgot Password?</a>
                    </div>
                      <div>
                    <button name="login" > login</button>
                          </div>
                       <div class="signup">
                            <p>Not a member?</p> <a href="signup.php"> Signup</a>
                       </div>
                               
                   </form>
                   </div>
         
</html>