<?php
array_map("htmlspecialchars", $_POST);
include_once("connection.php");
print_r($_POST);




$stmt = $conn->prepare("INSERT INTO tblsubjects (SubjectId, Subjectname,Teacher)VALUES(:null, :Subjectname, :Teacher)");


$stmt->bindParam(':Subjectname', $_POST["Subjectname;"])
$stmt->bindParam(':Teacher', $_POST["Teacher"]);

$stmt->execute();



$conn=null;

echo $_POST["Subjectname"]."<br>";
echo $_POST["Teacher"]."<br>";

?>