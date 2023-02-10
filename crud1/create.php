<?php 
 $title = "A simple CRUP app";
include '../header_Catffee.php'; ?>

   <form method = "post" action=""> 
    <input type = "text" name="fname" placeholder="First name" required>
    <input type = "text" name="lname" placeholder="Last name" required>
    <input type = "text" name= "city" placeholder="City name" required>
    <select name = "group_id">
        <option value= "BBCAP22"> BBCAP22 </option>
        <option value ="BBCAP21"> BBCAP21 </option>
        <option value = "Others"> Others </option>
    </select>
    <input type = "submit" values= "Submit" name="submit">
   </form>
   
   
   <?php 
   if (isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $group_id = $_POST['group_id'];


    include 'db.php';
    $sql = " insert_into studentInfo (fname, lname, city, group_id)
    values ('$fname','$lname','$city','$group_id')";
    
    if ($con -> query($sql) == TRUE){
        echo "Your information is added successfully";

    }
    else {
        echo "Error: " .$conn->error;
    }

   }

    ?>

<?php include '../footer_Catffee.php';?>