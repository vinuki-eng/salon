<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Contact Us</title>
    </head>
    <body class="main">
        <?php include_once 'navbar.php';?>
        
        <div class="contact">

             <div class="contact-div">
              <div>
                <h2>Our Phone</h2>
                <h3>+94715682258</h3>
               </div>
               <br>
               <div>
                <h2>Our Email</h2>
                <h3>neththikumaravinuki@gmail.com</h3>
                </div>
            </div>

            <div class="contact-div">
              <h1>DM WITH US</h1>
              <form  action="submit.php"  method="post">
                 
                 <input type="text" id="name" name="name" placeholder="Your Name*" class="name-and-number" required>
                
                 <input type="number" id="Contact no" name="Contact no" placeholder=" Your contact number*" class="name-and-number" required><br><br>
                 
                 <textarea id="message" name="user_message" rows="6" cols="40" ></textarea><br>
                 <input type="submit" value="SEND MESSAGE" class="submit-button">
              </form>
            </div>

        </div>
        <?php include_once 'footer.php';?>
    </body>
</html>