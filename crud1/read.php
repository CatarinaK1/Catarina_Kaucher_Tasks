<?php 
//Parent folder
$title = "Reading from database";
include '../layout/header_Catffee.php';
include 'db.php';

$sql = "select all * from studentInfo";
$result= $conn->query($sql);

//checks if theres any records or not
if ($result -> num_rows > 0) {
    //
   echo" <table class= 'table'>
    <tr><th>ID</tr></th><tr><th>First name </tr></th><tr><th>Last name </tr></th>
    <tr><th>city</tr></th>  <tr><th>Group Id </tr></th>
    
        ";

while ($row = $result -> fetch_assoc()){
        echo "
     <tr>
    <td> <a href='update.php?id=$row[id]'> $row[id]</a> </td>

     <td>$row[id] </td>
     <td>$row[fname] </td>
     <td>$row[lname] </td>
     <td>$row[city] </td>
     <td>$row[group_id] </td>
        
        ";
}
echo " </table>";
} else {
    echo "No results";
}
$conn -> close();
?>


<?php include '../layout/footer_Catffee.php';?>

<?php
/* connect with database
select what you want to insert

*/
?>