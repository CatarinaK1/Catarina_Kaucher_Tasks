<?php include 'header_Catffee.php';?>
<h3> 1.  Write a php script to display courses as list. Use < li ></h3>

<?php $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
 $num = count($courses);

for ($i = 0; $i < $num; $i++) {
    echo "<li> $courses[$i] </li> <br>";
}
?>
<h3>The unset() function is used to remove element from the array. The var_dump() 
    function is used to dump information about a variable.  array_values() is an inbuilt 
    function that returns all the values of an array and not the keys.
 </h3>

 <?php $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
 $num = count($courses);
 unset($courses[0]);

for ($i = 1; $i < $num; $i++) {
    echo "$courses[$i] ";
}
?>

<h3> Sort the following array </h3>

<?php $courses=array("C1" => "PHP","C2"=> "HTML","C3"=> "JavaScript","C4"=> "CMS","C5"=> "Project");
 $num = count($courses);
 asort($courses);
 /*
 ksort($courses);
 arsort($courses);
 krsort($courses);*/

foreach ($courses as $c => $c_value) {
    echo  "$c_value ";
}
echo "<hr>";

$courses=array("C1" => "PHP","C2"=> "HTML","C3"=> "JavaScript","C4"=> "CMS","C5"=> "Project");
 $num = count($courses);
 ksort($courses);
 /*
 arsort($courses);
 krsort($courses);*/

foreach ($courses as $c => $c_value) {
    echo  "$c_value ";
}
echo "<hr>";

$courses=array("C1" => "PHP","C2"=> "HTML","C3"=> "JavaScript","C4"=> "CMS","C5"=> "Project");
 $num = count($courses);
 arsort($courses);
 /*
 krsort($courses);*/

foreach ($courses as $c => $c_value) {
    echo  "$c_value ";
}
echo "<hr>";

$courses=array("C1" => "PHP","C2"=> "HTML","C3"=> "JavaScript","C4"=> "CMS","C5"=> "Project");
 $num = count($courses);
 Krsort($courses);

foreach ($courses as $c => $c_value) {
    echo  "$c_value ";
}
?>

<!-- <p><?php /*$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
 $num = count($courses);
 rsort($courses);

for ($i = 0; $i < $num; $i++) {
    echo  "$courses[$i] ";
}*/
?></p>-->
<h3>Change the following array's all values to upper case. </h3>

<?php 

$courses4=array("php" => "0", "html" => "1", "javascript" => "2", "cms" => "3", "project" => "4");
print_r(array_change_key_case($courses4,CASE_UPPER))
?>


<h3> List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h3>
<?php 

$color=array("red" => "#c60600", "blue" => "#2243b6", "green" => "#95a844", "yellow" => "#daa520", "purple" => "#c10dc8");
foreach ($color as $c => $c_value) {
    echo  "Color is " .$c. " hexadecimal equivalents is " .$c_value. "<br/>";
}

?>


<h3> PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3>

<?php
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? :
//function separates strings and removes an item example the comma 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
//counts how many items are there inside the array
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
//Sort an array in ascending order
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
//prints the items inside the array limiting the outcome by 5
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>


<form action="arrays.php" method="get">
    <input type="number" name="num1" placeholder="Enter your first number" required>
    <input type="number" name="num2" placeholder="Enter your second number" required>
<select name="operator">
    <option value="add"> Add </option>
    <option value="sub"> Substract </option>
    <option value="mul"> Multiply </option>
    <option value="div"> Divide </option>
</select>
    <input type="submit" name="calculate" value="Calculate"> 
</form>
<?php 
if (isset ($_GET["calculate"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;

        case "sub":
            $result = $num1 - $num2;
            break;
        
        case "mul":
        $result = $num1 * $num2;
        break;
    
        case "div":
            $result = $num1 / $num2;
            break;

        default:
            $result = " Error : You have not selected the correct operator";

    }

}
if (isset($result)){
    echo " <h2> Result $result </h2>";

}

?>


<?php include 'footer_Catffee.php';
 ?>