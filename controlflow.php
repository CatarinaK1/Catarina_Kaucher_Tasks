<?php include './layout/header_Catffee.php';
?>
<h3> 1 Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
</h3>
<?php 
$month = date("F");
echo "$month <br>";

if ($month == 'August'){
    echo "It's $month so it's still holiday.";
   }
   else{
    echo "this is $month so I don't have any holidays";
   }
?>


<h3>2 Assign colour red to a variable name $color and check to print one the following responses (if else statement)
 </h3>
 <?php
 $color = "red";

 if ( $color == "red"){
     echo "The color is $color";
 } else {
     echo "The color is not red.";
 }
 ?>


<h3> 3 Write a program to grade students based on their total score for a subject. 
    Use variable to hold the total score. The grading scheme is:</h3>

    <?php
    $grade = 80;

    switch ($grade){
        case $grade >= 80:
            echo "Excellent";
            break;

        case $grade >= 70 && $grade <80:
        echo "Great";
        break;
        
        case $grade >= 60 && $grade <70:
            echo "Good";
            break;
        
        case $grade >= 50 && $grade <60:
         echo "Pass";
        break;

        default:
        echo "Fail";
        break;        
        /*case $grade > 50:
            echo "Fail";
            break;*/
    }

/* if ($grade >= 80) {
        echo "Excellent"; } 
    
    elseif ($grade > 70 && $grade <80){
        echo "Great";
    }
    elseif ($grade > 60 && $grade <70){
        echo "Good";
    }
    elseif ($grade > 50 && $grade <60){
        echo "Pass";
    }
    else {
        echo "Fail";
    } */
    
    ?>

<h3> 4 Write a program to get inputs (age and name) from the user and based on their age, 
    decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h3>

    <form action="controlflow.php" method="post">
    <div class="row">
    
    <div class="col">
    <input type="text" name="fname" placeholder="First Name" class="form-control"> </div>
  
    <div class="col">
    <input type="text" name="age" placeholder="age" class="form-control"></div>
    <input type="submit" value="submit">
    </div>

<?php 
$fname = $_POST["fname"];
$age = $_POST["age"];
$intAge = (int) $age;

if ( $intAge >= 18) {
    echo "$fname is eligible for voting.";

} else {
    echo "$fname can't vote";
}
?>

 <h3> 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
     Use IF statement with strops function to print the name of the browser as below: 
     If someone is using Chrome it should print, you are using Google Chrome….
 </h3>
    <?php
    $host = $_SERVER['HTTP_USER_AGENT'];
       echo" $host <br>";


       if (strpos($host, 'Edg') == true){
        echo "You are using Microsoft Edge.";
       }
       elseif (strpos($host, 'Firefox') == true){
        echo "You are using Firefox.";
       }
       elseif (strpos($host, 'Chrome') == true){
        echo "You are using Google Chrome.";
       }
       else {
        echo 'Yor browser could not be determined';
       }


       
        ?>

<?php include './layout/footer_Catffee.php';?>