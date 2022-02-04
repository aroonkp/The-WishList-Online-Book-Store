<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT user_id FROM user WHERE user_email = '$myusername' and user_pw = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['login_user'] = $myusername;        
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";

         echo $error;
      }
   }
?>
<html>
   
   <head>
      <title>Login Page | The WishList</title>

      <style>
      body {   
 width: 100%;   
height: 100%;   
font-family: "Helvetica Neue", Helvetica, sans-serif;   
color: #444;   
-webkit-font-smoothing: antialiased;    background:  #ecf0f1
;
}  



   #container {
position: fixed;
width: 340px;
height: 280px;
top: 50%;
left: 50%;
margin-top: -140px;
margin-left: -170px;
}



   form {
    margin: 0 auto;
    margin-top: 20px;
}
label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 14px;
}



   p a {
    font-size: 11px;
    color: #aaa;
    float: right;
    margin-top: -13px;
    margin-right: 20px;
}
p a:hover {
    color: #555;
}
input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 12px;
    outline: none;
}
input[type=text],
input[type=password] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
}

#lower {
    background: #ecf2f5;
    width: 100%;
    height: 69px;
    margin-top: 20px;
}
input[type=checkbox] {
    margin-left: 20px;
    margin-top: 30px;
}
.check {
    margin-left: 3px;
}
input[type=submit] {
    float: right;
    margin-right: 20px;
    margin-top: 20px;
    width: 304px;
    height: 30px;
}

button
{
   float: right;
    margin-right: 20px;
    margin-top: 20px;
    width: 304px;
    height: 30px;

    background-color: #4CAF50; /* Green */ color: white;
}



background: #fff;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
   </style>
   </head>
   
   <body>
   
      <div align = "center">
         <br>
         <br>
         <img src="images/logo2.png" height="100px" width="90px">

         <br>

         <div style = "width:300px; border: " align = "left">
            
            
            <div id="container"> 
               <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login to continue</b></div>
               <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" /><br /><br />
                  <label>Password  :</label><input type = "password" name = "password"  /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               <center>
               <br><br>
               <h2>OR</h2>
              
               <a href="register.php"><button type="button" class="btn btn-success btn-lg" width="304px" height="30px">Register Now!</button></a>
            </center>
            </div>



            </div>
            
         </div>
         
      </div>
      <a href="admin.php"><button type="button" class="btn btn-success " width="304px" height="30px">Login as Admin</button></a>

   </body>
</html>