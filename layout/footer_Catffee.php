<footer>
    <div class = "footer">
        <div class = "footerInsta"><i class="fa-brands fa-instagram"></i></div>
        <div class = "footerFB"><i class="fa-brands fa-facebook"></i></div>
        <div class = "footerTwitter"><i class="fa-brands fa-twitter"></i></div>
        <div class= "footerCopy"> <p>&#169 2023 Copyright</p></div>
       
       
       <?php 
        $path = $_SERVER['PHP_SELF'];
        echo "Last modified: ".date("F d Y H:i:s.", filemtime(basename($path)));
         ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script scr= "./js/site.js"> </script>
    </div>
   </footer>