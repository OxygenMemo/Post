<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>Home Page</title>
        <meta charset=UTF-8>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body{
                background-color:#dfded3;
            
            }
            li>a{
                color: white;
            }
            #LOGO{
                size: 500%;
                color: #004563;
            }
        </style>
        <?php 
            //#004563 น้ำเงิน
        ?>
    </head>
    <body>
        <div class="container-fluid">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">KINKEE</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Page 1-1</a></li>
                  <li><a href="#">Page 1-2</a></li>
                  <li><a href="#">Page 1-3</a></li>
               </ul>
             </li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
            </ul>
          </div>
        </nav> 
        <!-- close nav !-->

        <div class="row">
            <div class="col-sm-12">
                <center>
                    <h1 id="LOGO">KINDEE</h1>
                </center>
                
            </div>
        </div>
        </div>
    </body>
</html>