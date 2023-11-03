<DOCTYPE! html>
<html>
<head>
<title>Subjects</title>
</head>
<body>
    <form action="addsubjects.php" method = "post">
        
        <input type = "text" name = "Subjectname">Subject name:<br>
        <input type="text" name ="Teacher">Teacher:<br>
        <input type="submit" value="Add User">

    </form>
    
</body>
<?php
 include_once('connection.php');
 $stmt = $conn->prepare("SELECT * FROM tblsubjects");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["SubjectID"].' '.$row["Subjectname"].' '.$row["Teacher"]."<br>");

}
