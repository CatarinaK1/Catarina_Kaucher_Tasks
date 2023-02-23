<?php include './layout/header_Catffee.php'; ?>


    <h1> My simple PHP script </h1>
    <?php
        //Opening tag
        echo "Hello World";
        echo "This is a new line";
        ?>
       <h1> 3.1 Name and Id </h1>
       <?php
        echo "Catarina <br>";
        echo "BBCAP22";
        ?>

        <h1> 3.2 Display the following message </h1>
      <?php 
       echo " Hello world, my name is \"Catarina\"";
    ?>
    <h1> 3.3 get the current date  </h1>
      <?php  echo date ('d.m.y');?>

    <script>
    //window.alert
    //window.alert("This will trigger an alert box");
    //window.alert(5+8);
    </script>

      <script> 

      document.write("Hello world this is Javascript");

      //if its on the same line use ;
      a = 10; b = 10;
      //if it's a new line then there's no need

      </script>
      <noscript> 
      Please enable Javascript to view this content.

      </noscript>
      <button onclick='add()'>Click here</button>
      <input type="button" onclick='hello()' value="Click me">

      
      <h1> 3.4 "PHP is interesting”. </h1>
      <?php 
        $title1 = "PHP is interesting";
        echo "<h1>" .$title1. "</h1>";
        
        ?>

      <hr>
      <p  id="place1" style= "color: red; background-color: pink;"> </p>
      <span id= "place2" style = "color : blue; background-color: violet;"></span>

      <script>
      
      document.getElementById("place1").innerHTML = "This will go to place1";
      document.getElementById("place2").innerHTML = "This will go to span";

      </script>



  <h1> 3.5 Tables & Variables </h1>
  <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 3;
    echo "
    <table>
    <tr>
    <th> S.N </th><th> Name </th><th> Grade </th>
    </tr>
    <td> 1 </td><td> Pekka </td><td> $g1 </td>
    </tr>
    <td> 1 </td><td> Johanna </td><td> $g2 </td>
    </tr>
    <td> 1 </td><td> John </td><td> $g3 </td>
    </tr>
    </table> "; ?>

   <h1> 4 Screenshot </h1>
    <img src="images/image.png" alt="image" width= 50%;>

    <h2> Changing background-color </h2>
    <form>
    <input type ="color" name = "background" onchange = "changeColor('background', this.value)">
   </form>

      <?php include './layout/footer_Catffee.php';?>