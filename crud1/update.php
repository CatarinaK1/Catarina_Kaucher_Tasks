<?php 
include '../layout/header_Catffee.php';
$title = "Update your info";

$a= $_GET['id'];
include 'db.php';

$result= mysqli_query($conn, "Select * from studentInfo
where id = '$a' ");

//fetch
$row = mysqli_fetch_array($result);

?>
 <form method = "post" action=""> 
    <input type = "text" name="fname" placeholder="First name" required>
    <input type = "text" name="lname" placeholder="Last name" required>
    <input type = "text" name= "city" placeholder="City name" required>
    <select name = "group_id">
        <option value= "BBCAP22"> BBCAP22 </option>
        <option value ="BBCAP21"> BBCAP21 </option>
        <option value = "Others"> Others </option>
    </select>
    <input type = "submit" value= "Update your info" name="update">
    <input type = "submit" value= "Delete your info" name="delete">
   </form>
   
   <?php 
   if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $group_id = $_POST['group_id'];
    $query = mysqli_query($conn, "UPDATE studentInfo set fname='$fname', lname='$lname' where id='$a' ");

    if ($query){
        echo "<h2>Your information was updated successfully </h2>";
    } else {
        echo "Record not modified";
    }
   }

   ?>


<?php include '../layout/footer_Catffee.php';?>