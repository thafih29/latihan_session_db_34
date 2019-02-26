<?php
  //register.php
  session_start();

  if (isset($_SESSION['message'])) {
    if ($_SESSION['message']!="") {
      echo "<span style='color:red'>".$_SESSION['message']."</span>";
      $_SESSION['message'] = "";
    }
  }

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Register</title>
         <link rel="stylesheet" type="text/css" href="register.css">
       </head>
       <body>
        <div class="ckck">
          <h2>Register Here</h2>
          <form method="POST" action="cekregister.php">
            <table>
                <tr>
                    <td></td>
                    <td> <input type="text" placeholder="Username" required class="usr"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="password" placeholder="Password" required class="psw"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <button type="submit" name="register" class="btn">Register</button> </td>
                </tr>
            </table>
            <p>Already account?</p>
            <tr>
              <a href="login.php">Login here</a>
            </tr>
     </body>
 </html>
