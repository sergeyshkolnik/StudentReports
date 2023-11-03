<?php
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM tblusers WHERE surname =:username ;" );
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();

$hashed=$row['Pword']; 
$attempt= $_POST['passwd'];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    if(password_verify($attempt, $hashed)){
        header('Location: users.php');
    }else{

        header('Location: login.php');
    }
}
$conn=null;
?>


