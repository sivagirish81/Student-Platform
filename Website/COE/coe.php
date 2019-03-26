

<!DOCTYPE html>
<html lang="en">
<head>
  <title>COE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>

<div class="container">
    <h1 align="center" style="padding-bottom:50px">Examination Results</h1>


    <div class="row">
  	
        <div class="col-sm-3" >Course <select name="course" form="selection-from"> <?php 
            $sql = mysqli_query($db, "SELECT Course_Name FROM Course");
            while ($row = $sql->fetch_assoc()){?>
            
            <option value="<?php echo $row['Course_Name']; ?>"><?php echo $row['Course_Name']; ?></option>
            
            <?php}?>
            </select> 
        </div>

        <div class="col-sm-3" >Semester <select name="semester" form="selection-from"> <?php 
            $sql = mysqli_query($db, "SELECT DISTINCT Semester FROM Student");
            while ($row = $sql->fetch_assoc()){?>
            
            <option value="<?php echo $row['Semester']; ?>"><?php echo $row['Semester']; ?></option>
            
            <?php}?>
            </select> 
        </div>

        <div class="col-sm-3" >Section <select name="section" form="selection-from"> <?php 
            $sql = mysqli_query($db, "SELECT DISTINCT Section FROM Student");
            while ($row = $sql->fetch_assoc()){?>

            <option value="<?php echo $row['Section']; ?>"><?php echo $row['Section']; ?></option>
            
            <?php}?>
            </select> 
        </div>


        <form id="selection-from" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="col-sm-3 btn btn-primary" " type=submit >Apply</div>  
        </form>
    </div>

    <div id="ssn's" align = "center">
        <div class="row">
    
            <div class="col-sm-3"></div>

            <div class="col-sm-6" >  <?php 
                $set = isset($_POST["semester"]);

                if($set)
                    $sql = mysqli_query($db, "SELECT s.SSN, s.Name FROM Student as s, course_taken as ct, course as c where s.SEMESTER=\"".$_POST['semester']."\" and s.Section =\"". $_POST['section']."\" and s.SSN=ct.SSn and c.course_name =  and c.course_id = ct.course_id;");
            ?>
                <div>
                    <form action="marks.php" method="post">
                        <?php
            
                        while ( $set && $row = $sql->fetch_assoc()){
                
                        ?>
                        <input type="submit" name="SSN" value="<?php 
                        if($set)
                        echo $row['SSN']; ?> &nbsp&nbsp&nbsp&nbsp <?php if($set) echo $row['Name']; ?>"  >
                
                        <?php}?>

                    </form>
                </div>

            </div>

        </div>
    </div>


</div>

</body>
</html>
