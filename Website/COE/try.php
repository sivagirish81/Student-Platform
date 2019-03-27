<?php
    $db = mysqli_connect("localhost:3306","root","","dbms_1");
    
    $stmt = "SELECT s.SSN, s.Name FROM Student as s, course_taken as ct, course as c where s.SEMESTER=\"".$_POST['semester']."\" and s.Section =\"". $_POST['section']."\" and s.SSN=ct.SSn and c.course_name =\"".$_POST['course']."\"  and c.course_id = ct.course_id;"
    echo $stmt;
?>