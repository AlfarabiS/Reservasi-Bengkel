<?php

require "config.php";

$tampil = tampil("CALL tampil_bengkel()");

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="asset/css/style.css" rel="stylesheet">
        <title>Booking Sans</title>
</head>
<body>
<div id="body">

<!--HEADER-->
    <nav class="navbar navbar-expand-lg navbar-light mb-5" style="background-color:#E5E5E5">
        <div class="container justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="asset/img/logoBS.png" class=img-fluid width=25%>BOOKING SANTUY
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="btn btn-success btn-sm" float-end>Beranda </a>
                    </li>
                    <li>
                        <p>&nbsp&nbsp&nbsp&nbsp</p>
                    </li>
                    <li class="nav-item">
                        <a href="booking.php" class="btn btn-success btn-sm">Booking</a>
                    </li>
                    <li>
                        <p>&nbsp&nbsp&nbsp&nbsp</p>
                    </li>
                    <li class="nav-item">
                        <a href="bengkel.php" class="btn btn-success btn-sm">Bengkel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--HEADER-->


<!--Daftar Bengkel-->    
    <div class="container-fluid mt-5 mb-5">
        <div class="row justify-content-evenly">
            <div class="col">
                <table class="table table-bordered table-striped">
                    <tr >
                        <th>Nama Bengkel</th>
                        <th>Alamat Bengkel</th>        
                    </tr>
                <?php
                    foreach($tampil as $bengkel) :
                ?>
                    <tr>
                        <td><?=$bengkel["bengkel"]?></td>
                        <td><?=$bengkel["alamat_bengkel"]?></td>
                    </tr>
                <?php  endforeach; ?>
                </table>
            </div>
            <div class="col">
                <img src="asset/img/bengkel.png">
            </div>
        </div>
    </div>
<!--Daftar Benhkel-->

<!--FOOOTER-->
<footer class="mt-5">
    <div id="footer"></div>
        <div class="container-fluid" style="background-color:#8EA994">
            <div class="row justify-content-evenly">
                <div class="col">
                <p>
                    <img src="asset/img/LogoBS.png" width="90px">
                    <h3 >
                        Booking Santuy
                    </h3>
                    <p>
                        dibuat sejak 2021 diawali dengan doa dan usaha,</br>
                        usaha dan doa adalah kunci sukses.
                    </p>
                </p>
                </div>
                <div class="col justify-item-end">
                    <h4 class="text-end mt-2">
                        InFormasi</br></br>
                    </h4>
                       <a href="https://api.whatsapp.com/send/?phone=6285697623027&text&app_absent=0">
                       <p class="text-end text-dark" > 0923182334 <img src="asset/img/call.png" alt=""></br> </p>
                       </a> 
                       <a href="https://api.whatsapp.com/send/?phone=6285697623027&text&app_absent=0">
                       <p class="text-end text-dark">bookingsans@gmail.com <img src="asset/img/mail.png" alt=""></br></p>
                       </a>
                       <a href="https://www.instagram.com/alfarabis13/">
                       <p class="text-end text-dark">@bookingsans <img src="asset/img/ig.png" alt=""></p>
                       </a>                    
                </div>
            </div>
            <div class="row">
            <center>copyright &copy; Booking sans team<p></center>
            </div>
        </div>
    </div>
    </footer>
<!--FOOOTER-->
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</div>
</body>
</html>