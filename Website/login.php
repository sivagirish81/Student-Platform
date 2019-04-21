<?php
	extract($_POST);
    
	$db = mysqli_connect("localhost:3306","root","","student_platform");				//string,username,password,database name
    
    if($uname == "COE" && $pwd=="coe")
    {
        header("location:COE/coe1.php");
    }
    else if(is_numeric(substr($uname,-1))) //check if last character is number. If it is - student else teacher
    {
        $stmt="select * from student where SSN=\"".$uname."\" and password = \"".$pwd."\";";		//sql query
   
        $res = mysqli_query($db,$stmt);				//query object

        $err="";
        
        if($res && mysqli_num_rows($res)==1)				//atleast one row and only one row
        {
            while($arr=mysqli_fetch_assoc($res))	
            {	
                header("location:Student/Student_Home.php");
            }
    
    
            session_start();								//start session name
            $_SESSION["uname"]=$uname;
        
        }
        else
            $err="Login credentials Incorrect. Please try again";   
    }
    else
    {
        $stmt="select * from teacher where initials=\"".$uname."\" and password = \"".$pwd."\";";

        $res = mysqli_query($db,$stmt);				//query object

        $err="";
        
        if($res && mysqli_num_rows($res)==1)				//atleast one row and only one row
        {
            while($arr=mysqli_fetch_assoc($res))	
            {	
                header("location:Teachers\Teacher_Home.html");
            }
    
    
            session_start();								//start session name
            $_SESSION["uname"]=$uname;
        
        }
        else
            $err="Login credentials Incorrect. Please try again";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <style type="text/css">
        body, html
        { 
            font: 14px sans-serif;


         }
        
        .wrapper{ width: 350px; padding: 20px; padding-top:25px }

        #submit_login {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
            padding:10px;
            border-radius: 5px;
            margin:10px;
        }

        #submit_login:focus {
            color: #fff;
            background-color: #286090;
            border-color: #122b40;
        }

        #submit_login:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74;
        }

        #username_input
        {
            margin:10px;
            padding:5px;
            border-radius: 5px;
        }
        
        #password_input
        {
            margin:10px;
            padding:5px;
            border-radius: 5px;
        }


    </style>
</head>
<body>
    <div align="center">
    <div><img src="peslogo.jpg"></div>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label><br>
                <input id="username_input" type="text" name="uname" class="form-control" >
            </div>    
            <div class="form-group">
                <label>Password</label><br>
                <input id="password_input" type="password" name="pwd" class="form-control">
                
            </div>
            <div class="form-group">
                <input id="submit_login" type="submit" class="btn btn-primary" value="Login" ><br><br>
                <span class="help-block" style="color:red"><?php echo $err; ?></span>
            </div>
            
        </form>
    </div>   
    </div> 
</body>
</html>

