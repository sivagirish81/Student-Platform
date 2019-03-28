<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
    
    $stmt = "SELECT e.SSN FROM exam_department as e, student as s WHERE s.SECTION = 'E' and s.SSN = e.SSN and s.SEMESTER='4' ORDER BY SGPA LIMIT 1";

    $sql = mysqli_query($db, $stmt);

    $row = $sql->fetch_assoc();

?>



<div class = "row" align="center" >
    <div class="col-sm-4"></div>
    <div class="col-sm-4"> <?php echo $row['SSN'] ?> </div>
</div>
