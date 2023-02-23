<?php 
include('./layout/header_Catffee.php'); ?>

<?php 




$title = "JavaScript Events and form validation";
?>

<h2> A simple button to display date</h2>

<button onclick="this.innerHTML = Date()">Click to know date</button>

<h2> Make a button to and a place holder as a paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML = Date()"> Click to know date </button>

<p id= "p1"> </p> 

<h2> Change the background color </h2>
<form>
<input type= "color" id= "background" onchange="changeColor1()">

</form>

<h2> Change the font color </h2>
<form>
<input type= "color" id= "fcolor" onchange="changeColor1()">

</form>

<h2> Mouse on  and mouse out </h2>


<span onmouseover="this.style.color= 'blue';
                   this.style.backgroundColor='yellow';
                   this.style.fontSize= '2em';" onmouseout="
                   this.style.color= 'red';
                   this.style.backgroundColor= 'white'
                   this.style.fontSize= '1em';">
                   some text </span>

<?php include './layout/footer_Catffee.php';?>