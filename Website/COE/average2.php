<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
    
    $stmt = "SELECT AVG(e.SGPA) as Avg FROM exam_department as e,student as s WHERE e.SSN = s.SSN and s.Section='".$_POST['section']."' and s.Semester='".$_POST['semester']."'";

    $sql = mysqli_query($db, $stmt);

    $row = $sql->fetch_assoc();

?>



<div class = "row" align="center" >
    <div class="col-sm-4"></div>
    <div class="col-sm-4"> <?php echo $row['Avg'] ?> </div>
</div>
