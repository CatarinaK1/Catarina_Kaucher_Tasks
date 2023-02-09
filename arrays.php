<?php include 'header_Catffee.php';?>
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