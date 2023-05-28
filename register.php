<?php
 $msg = "Alert box";
 $connect = mysqli_connect("localhost","root","","new_register");
  
  if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $roll = $_POST['roll'];
     $fname = $_POST['fname'];
     $mname = $_POST['mname'];

     $d_birth = $_POST['d_birth'];
     $email = $_POST['email'];
     $pass = $_POST['pass'];
     $c_pass = $_POST['c_pass'];

     // Check duplicate email
     $email_check = "SELECT * FROM register WHERE email ='$email' ";
     $email_query = mysqli_query($connect,$email_check);
     $num_row = mysqli_num_rows($email_query);
     if($num_row>0){
        $msg = "Email alrady exist ,  Please try another email";

     }else{
        // check password and confirm password
        if($pass==$c_pass){
             //check special characters
           $specialChars = preg_match('@[^\w]@', $pass);
            //check special characters || password length == 8 || passlen<8
            if(!$specialChars || strlen($pass) == 8 || strlen($pass) < 8 ){
                $msg = "vaiya apni akti special charaeter den and password length 8 er beshi din";
            }else{
                $insert = " INSERT INTO register(name,roll,fname,mname,d_birth,email,pass,c_pass) 
                VALUES('$name','$roll','$fname','$mname','$d_birth','$email','$pass','$c_pass') ";

                $query = mysqli_query($connect,$insert);
                if($query){
                    $msg="register success";
                }else{
                    $msg="register faild";
                }
            }
        }
        else{
            $msg = "Password and confirm dosen't match";
        }
        // insert query working

     }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registration Form</h1>
    <form method="POST">
    <div class="container">
        <br><br>
        <h4><?php  echo $msg  ?></h4>
        <div class="left-div">
            <span>Name</span>
            <div class="tdiv">
            <input type="text" name="name" placeholder="Enter your name"><br><br>
            </div>
            <span>Roll</span>
            <div class="tdiv">
            <input type="number" name="roll" placeholder="Enter your roll"><br><br>
            </div>
            <span>Father Name</span>
            <div class="tdiv">
            <input type="text" name="fname"placeholder="Enter your Fater name"><br><br>
            </div>
            <span>Mother Name</span>
            <div class="tdiv">
            <input type="text" name="mname" placeholder="Enter your Mother name"><br><br>
            </div>
         
        </div>
        <div class="right-div">
             <span>Date Of Birth</span>
            <div class="tdiv">
            <input type="date" name="d_birth" placeholder="Enter DOB"><br><br>
            </div>
            <span>Email</span>
            <div class="tdiv">
            <input type="email" name="email" placeholder="Enter your Email"><br><br>
            </div>
            <span>Password</span>
            <div class="tdiv">
            <input type="password" name="pass" placeholder="Enter your Password"><br><br>
            </div>
            <span>Confirm Password</span>
            <div class="tdiv">
            <input type="password" name="c_pass" placeholder="Enter your Confirm Password"><br><br>
            </div>

            </div>
        

    
    <div class="btn" >
        <button id="submit" name="submit" >Submit</button>
    </div>
    
    <div id="center">
        <a href="login.php" id="log">Login</a>
    </div>
    </form>
    </div>
    </div>

    
    
</body>
</html>