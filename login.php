<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sanjaya Pharmacy</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <div class="logo">
        <img src="imgs/logo1.jpg" alt="" width="200px" height="150px">
    </div>

    
    <div id="nav-bar">
        <li class="liLeft"><a href="Home.html">Home</a></li>
        <li class="liRight"><a href="insert.html">Register</a></li>
        <li class="liRight"><a href="http://localhost/uasmember/login.php">Login</a></li>
        <li class="liLeft"><a href="feedback.html">Feedback</a></li>
        <li class="liLeft"><a href="rating.html">Rating</a></li>
        <li class="liLeft"><a href="forum.html">Forum</a></li>  
    </div> 
    
    <div id="company">
    <form action="" method="POST">
        <div>
        <label>Username : </label> <br>
        <input type="text" name="uname" placeholder="Username" id="uname"> 
        <span id="errorUsername"></span>
        </div>

        <div>
        <label>Password : </label> <br>
        <input type="password" name="password" placeholder="Password" id="pass"> 
        <span></span>
        </div>

        <input type="submit" name="login" value="Login">
        
        
        <!-- <button type="submit" value="insert" id="btn-submit">Submit</button> -->
    
    <br><br><br><br><br>
    
    <div id="footer">
        <p id="desc">
            Sanjaya Pharmacy &copy; 2019
        </p>
    </div>
    
</body>
</html>

<?php
    if(isset($_POST['login'])){
        $con = mysqli_connect("localhost","root","","uasmember");
        if(!$con) {
            echo 'Not connected to server!';
        }
        if(!mysqli_select_db($con,'uasmember')) {
            echo 'Database not selected!';
        }
            $myusername = mysqli_real_escape_string($con,$_POST['uname']);
            $mypassword = mysqli_real_escape_string($con,$_POST['password']); 

            $sql = "SELECT * FROM datamember WHERE Username = '$myusername' and Password = '$mypassword'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            

            $count = mysqli_num_rows($result);

            // If result matched $myusername and $mypassword, table row must be 1 row

            if($count == 1) {
                echo 'Login Successful!';
                $_SESSION['login_user'] = $myusername;
            }else {
                echo 'Login Unsuccessfull !';
            }
    }
?>