<?php
require 'fungction.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('data berhasil dimasukan!');       
        </script>
        ";
    } else {
        echo mysqli_error($conn); 
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="TiketSaya, Web Dashboard TiketSaya, Login TiketSaya">
    <meta name="author" content="Muhammad">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/0801180830.js" crossorigin="anonymous"></script>
    <title>Halaman Registrasi</title>
</head>

<body>
    <!-- login -->
    <div class="container login-section">
        <!-- logo header sign in -->
        <div class="row header-sign-in">
            <div class="col-md-12 text-center  ">
                <img src="images/Logo_UIN_Syarif_Hidayatullah_Jakarta.png  " height="100px">
            </div>
        </div>
        <!-- akhir logo header sign in -->

        <!-- parent-->
        <div class="row ">
            <div class="col-md-10 offset-md-1 form-sign-in">

                <div class="row">
                    <!-- gambar -->
                    <div class="col-md-6 text-center d-none d-sm-block">
                        <img src="images/illustration_login.png" height="276px" alt="">
                    </div>
                    <!-- akhir gambar -->

                    <!-- title -->
                    <div class="col-md-4">
                        <p class="title-form">Registrasi</p>
                        <p class="subtitle-form">Lets make a report today </p>
                        <!-- akhir title -->

                        <!-- form sign in -->
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="username" class="title-input-primary-username">User Name</label>
                                <input type="text" class="form-control input-type-primary-tiketsaya" id="username" aria-describedby="emailHelp" placeholder="Enter User Name" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password" class="title-input-primary-username">Password</label>
                                <input type="password" class="form-control input-type-primary-tiketsaya" id="password" placeholder="Enter Password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="password2" class="title-input-primary-username"> Konfirmasi Password</label>
                                <input type="password" class="form-control input-type-primary-tiketsaya" id="password2" placeholder="Enter Password" name="password2">
                            </div>
                            <button type="submit" class="btn btn-primary btn-primary-tiketsaya" name="register">Register</button>
                        </form>
                        <!-- akhir form sign in -->
                    </div>



                </div>



            </div>
        </div>
        <!-- akhir parent -->
    </div>
    <!-- akhir login -->














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>