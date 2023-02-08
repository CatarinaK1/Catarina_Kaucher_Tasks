<?php include 'header_Catffee.php';
?>
        <h3> 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
            Use IF statement with strops function to print the name of the browser as below: 
            If someone is using Chrome it should print, you are using Goolge Chrome….
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

<?php include 'footer_Catffee.php';?>