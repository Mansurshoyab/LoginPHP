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