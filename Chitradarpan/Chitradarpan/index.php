<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/chitradarpan.png" />
        <title>Chitradarpan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>CHITRADARPAN :- ART GALLERY</h1>
                       <p></p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/13.jpg" alt="AI Landscape">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">AI Art Landscape</p>
                                        <p>Choose the best Landscape Artwork</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/14.jpg" alt="Digital Landscape">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Digital Art Landscape</p>
                                    <p>Choose the best Landscape Artwork</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/15.jpg" alt="AI Landscape">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">AI Art Landscape</p>
                                   <p>Another Beautifull ArtWork by AI</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
               <p>Copyright &copy Chitradarpan. All Rights Reserved.</p>
                   <p>Designed by Chitradarpan Team</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>