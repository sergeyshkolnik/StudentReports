<DOCTYPE! html>
    <head>
        <title>

        </title>
        <a href="pupildoessubject.php">Add another pupil</a>
    </head>


<?php
include_once("connection.php");


echo $_POST["Student"];
echo $_POST["Class"];
$stmt = $conn->prepare("INSERT INTO TblStudentinClass(StudentId, ClassId)VALUES(:Student, :Class)");
$stmt-> bindParam(':Student', $_POST["Student"]);
$stmt-> bindParam(':Class',$_POST["Class"]);
$stmt->execute();

?>
