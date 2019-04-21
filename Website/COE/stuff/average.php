<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
    
    $stmt = "SELECT AVG(e.SGPA) FROM exam_department as e,student as s WHERE e.SSN = s.SSN and s.Section='E' and s.Semester='4'";

    $sql = mysqli_query($db, $stmt);

    $row = $sql->fetch_assoc();

?>



<div class = "row" align="center" >
    <div class="col-sm-4"></div>
    <div class="col-sm-4"> <?php echo $row['Avg'] ?> </div>
</div>
