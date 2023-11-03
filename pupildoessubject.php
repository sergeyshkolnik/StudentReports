<DOCTYPE! html>
    <html>
        <body>
        <form action="addtoclass.php" method="post">
        <select name = "Student">
    
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE Role = 0 ORDER BY Surname ASC");
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row["UserID"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');
}
?>
</select>
<select name="Class">
    <?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROM TblSubjects ORDER BY Subjectname ASC");
    $stmt->execute();



    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        echo('<option value='.$row["SubjectID"].'>'.$row["Subjectname"].','.$row["Forename"].'</option>');

    }
    ?>

<input type="submit" value = "addtoclass">    


</select>
</form>


        </body>
    </html>