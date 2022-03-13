<?php
require "config.php";  

if(isset($_POST["submit"])) {
    
    if(buat_jadwal($_POST) > 0 ) {
    echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'booking.php'
        </script> 
        ";
    }else {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'booking.php'
        </script> 
        ";
    }
}

$tampil = tampil("CALL jadwal_booked()");

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
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#E5E5E5">
        <div class="container justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="asset/img/LogoBS.png" class=img-fluid width=25%>BOOKING SANTUY
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

<!--FORMULIR-->    
    <div class="container-fluid mt-5">
        <div class="row justify-content-evenly">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Form Booking
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label> 
                                    Nama
                                </label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
                            </div>
                            <div class="form-group">
                                <label> 
                                    No HP
                                </label>
                                <input type="text" name="no_hp" class="form-control" placeholder="Masukan No Handphone" required>
                            </div>    
                            <div class="form-group">
                                <label>
                                    Bengkel
                                </label>
                                <select name="id_bengkel" class="form-select" aria-label="Disabled select example">
                                    <option value="1" name="bengkel">Bengkel keren sekali, Jalan sawo mateng</option>
                                    <option value="2" name="bengkel">Bengkel pasti hepi, Citeureup raya no.777 </option>
                                    <option value="3" name="bengkel">Bengkel uhuy yuhu, Ciheuleut no.54</option>
                                    <option value="4" name="bengkel">Bengkel andalan, Jalan mangga</option>
                                    <option value="5" name="bengkel">Bengkel jaya selalu, Jalan juanda raya asoy</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label> 
                                Tanggal
                            </label>
                            <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label> 
                                Jam
                            </label>
                            <input type="time" name="jam" class="form-control" >
                            </div>
                                <button type="submit" class="btn btn-success mt-3" name="submit">
                                    Buat Jadwal
                                </button>
                                <button type="reset" class="btn btn-danger mt-3" >
                                    reset
                                </button>
                        </form>
                    </div>
                </div>                                        
            </div>
            <div class="col-6">
                <img src="asset/img/tang.png" width="70%">
            </div>
        </div>
    </div>
<!--FORMULIR-->

<!--TABEL JADWAL--> 

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-header">
                    Jadwal yang sudah dibooking
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr >
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Bengkel</th>
                           
                        </tr>
                        <?php
                            foreach($tampil as $booked) :
                        ?>
                        <tr>
                            <td><?=$booked["tanggal"]?></td>
                            <td><?=$booked["jam"]?></td>
                            <td><?=$booked["bengkel"]?></td>
                        </tr>
                        <?php  endforeach; ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

<!--TABEL JADWAL--> 

<div>

</div>
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

</body>
</html>