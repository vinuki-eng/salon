<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>My Account</title>
    </head>
    <body class="main">
        <?php include_once 'navbar.php';?>
        <div class="phone-number-login" id="phone-number-login-area">
           <h1>Login With Mobile Number</h1> 
           <form action="login.php" method="post" class="phone-login">
              <sapn class="phone-code">+94</span>
              <input type="tel" id="phone" name="phone" placeholder="Mobile Number" required>
           
           </form>
        
             <form>
                <input type="submit" value="Login" class="login-button" required>
            </form>
            </div>
         <?php include_once 'footer.php';?>
    </body>
</html>
