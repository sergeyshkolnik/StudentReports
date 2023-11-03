
<?php
array_map("htmlspecialchars", $_POST);
include_once("connection.php");//connects page to the database
//assigns different scores to different types of users
switch($_POST["role"]){
	case "Pupil":
		$role=0;
		break;
	case "Teacher":
		$role=1;
		break;
	case "Admin":
		$role=2;
		break;
    }
    
    
$hashed_password = password_hash($_POST["passwd"], PASSWORD_DEFAULT); 


    $stmt = $conn->prepare("INSERT INTO TblUsers (UserID,Gender,Surname,Forename,Password,House,Year ,role)VALUES (null,:gender,:surname,:forename,:password,:house,:year,:role)");
//inserts values obtained from users.php into tblusers in the database
    $stmt->bindParam(':forename', $_POST["forename"]);
    $stmt->bindParam(':surname', $_POST["surname"]);
    $stmt->bindParam(':house', $_POST["house"]);
    $stmt->bindParam(':year', $_POST["year"]);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':gender', $_POST["gender"]);
    $stmt->bindParam(':role', $role);
    $stmt->execute();
    $conn=null;
    
echo $_POST["gender"]."<br>";
echo $_POST["forename"]."<br>";
echo $_POST["surname"]."<br>";
echo $_POST["house"]."<br>";
echo $_POST["year"]."<br>";
echo $_POST["passwd"]."<br>";
echo $_POST["role"]."<br>";



?>