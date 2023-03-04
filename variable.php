<?php include './layout/header_Catffee.php';?>

<h3> In-class Task Variable & Operators </h3>

<h2> Create a simple html form to get Firstname and Lastname 
    from the user and use echo echo 
    statement to print using tag: Hello …., You are welcome to my site.</h2>


    <form action="action.php" method="post">
    <div class="row">
    
    <div class="col">
    <input type="text" name="fname" placeholder="First Name" class="form-control"> </div>
    
    <div class="col">
    <input type="text" name="lname" placeholder="Last Name" class="form-control"></div>
    </div>

    Birth date: <input type="date" name="bdate"> <br>
    Select fav color: <input type="color" name="color"> <br>
    <input type="submit" value="submit">
    
    </form>
    <h3> 3 Tables & Variables </h3>
    <?php 
        $g1 = 5;
        $g2 = 4;
        $g3 = 3;
       
        echo "
        <table class= 'table'>
        <tr>
        <th scope='col' > S.N </th><th scope='col'> Name </th><th scope='col'> Grade </th>
        </tr>
        <td scope='row'> 1 </td><td> Pekka </td><td> $g1 </td>
        </tr>
        <td scope='row'> 1 </td><td> Johanna </td><td> $g2 </td>
        </tr>
        <td scope='row'> 1 </td><td> John </td><td> $g3 </td>
        </tr>
        </table> ";
    
    ?>
    <h3> 4 Write a PHP script with two string variables. Assign any text to these variables. Join them
      together.Print the length of the string
    </h3>
     <?php 
        $txt = "Hello world!";
         $x = "Hamk";
         $c = $txt . $x;
       echo" $txt $x  <br>";
       echo strlen (" $c ");
        ?>

    <h3> 5 Write a script to add up the numbers: 298, 234, 46. 
        Use variables to store these numbers and 
        echo statement to output your answer. </h3>
        <?php 
        $a = 298;
         $b = 234;
         $c= 46;
         $d = $a+ $b+ $c;
       echo" $d";
        ?>
    <h3> 6 Write a PHP script to detect the browser being used to view your pages.</h3>
    <?php
    $host = $_SERVER['HTTP_USER_AGENT'];
       echo" $host";
        ?>
<h3> 7 Write a PHP script in the footer section of your universal footer just below 
    the Copyright information to display 
    the last modification time of a file..</h3>
    
<?php include './layout/footer_Catffee.php';
 ?>