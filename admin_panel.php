<?php

require 'fungction.php';
$mahasiswa =query("SELECT * FROM mahasantri");



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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/0801180830.js" crossorigin="anonymous"></script>
        <title>Admin Panel</title>
</head>

<body>
   
    <!-- side left -->
    <div class="side-left">
        <!-- shortcut -->
        <div class="shortcut" onmouseover="showAdminProfile()">
            <!-- emblem -->
            <div class="emblem text-center">
                <img src="images/PUTIHLOGO.png" height="49" alt="">
            </div>
            <!-- akhir emblem -->
            <!-- menus -->
            <div class="menus ">
                <div class="item-menu inactive">
                    <a href="dashboard.html"><p class="icon-item-menu"><i class="fab fa-delicious"></i></p></a>   
                </div>
                <div class="item-menu  ">
                    <a href="sales.html"><p class="icon-item-menu"><i class="fas fa-ticket-alt"></i></p> </a>  
                </div>
                <div class="item-menu inactive ">
                    <a href="wisata.html"><p class="icon-item-menu "><i class="fas fa-globe"></i></p> </a>  
                </div>
                <div class="item-menu inactive">
                    <a href="customer.html"><p class="icon-item-menu "> <i class="far fa-user"></i></p></a>  
                </div>
                <div class="item-menu inactive">
                    <a href="setting.html"><p class="icon-item-menu "> <i class="fas fa-cog"></i></p> </a>  
                </div>
                <div class="item-menu inactive">
                    <a href="#"><p class="icon-item-menu"><i class="fas fa-power-off"></i></p></a>   
                </div>
            </div>
            <!-- akhir menus -->       
        </div>
        <!-- akhir shortcut -->

        <!-- adimn profile -->
        <div class="admin-profile " id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
            <div class="admin-picture text-center">
                <img src="images/muhammad.jpeg" alt="" class="rounded-circle">                
            </div>
            <p class="admin-name">Muhammad</p>
            <p class="admin-level">Mudabbir</p>
            <ul class="admin-menus">
                <a href="dashboard.html"><li >My Dashboard</li></a>
                <a href="sales.html" ><li style="margin-top:-12px ;" class="active-link">Ticket Sales</li></a>
                <a href="wisata.html"><li style="margin-top: -13px;">Manage Wisata</li></a>
                <a href="customer.html"><li style="margin-top: -15px;">Customer <span class="badge badge-primary badge-tiketsaya">30</span></li></a>
                <a href="setting.html"><li style="margin-top: -12px;">Account setting</li></a>
                <a href="logout.html"><li style="padding-top: 120px;">Log out</li></a>
            </ul>
        </div>
        <!-- akhir admin profile -->
    </div>
    <!-- akhir side left -->
    
    <!-- main content -->
    <div class="main-content">
        <!-- header -->
        <div class="row header">
            <div class="col-md-12">
                <p class="header-title"> Admin Panel</p>
                
            </div>
        </div>
        <!-- akhir header -->
        
        <!-- big report group -->
        <div class="row report-group">
            <!-- bagian kiri -->
            
            <!-- akhir bagian kirin -->

            <!-- table -->
            <div class="  col-md-12">
                <div class="item-big-report col-md-12">
                    <!-- head -->
                    <table class="table table-borderless table-tiketsaya">
                        <thead>
                          <tr>
                            <th scope="col">no </th>
                            <th scope="col">Aksi </th>
                            <th scope="col">Nama </th>
                            <th scope="col">NIM</th>
                            <th scope="col">Mabna</th>
                            <th scope="col">Profile</th>
                          </tr>
                        </thead>
                        <!-- akhir head -->
                        <!-- body -->
                        <tbody>

                            <?php $i=1; ?>
                            <?php foreach ($mahasiswa as $row) : ?>
                          <tr>
                            <td scope="row user-table-item"> <?=$i; ?></td>
                            <td>
                                <a href="ubah.php?id= <?= $row["id"]; ?>"> ubah |</a>
                                <a href="hapus.php?id= <?= $row["id"]; ?> "  onclick="return confirm('yakin?');"> hapus </a>
                            </td>
                            <td><?= $row["nama_mahasiswa"]; ?></td>
                            <td><?=$row["nim"]; ?></td>
                            <td><?=$row["nama_mabna"]; ?></td>
                            <td><a href="sales_detail.html" class="btn-small-table btn-primary ">Details</a></td>
                          </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                          
                          
                        </tbody>
                        <!-- akhir body -->
                      </table>
                                                         
                </div>             
             
            </div>
            <!-- akhir bagian kanan -->
            
        </div>
        <!-- akhir big report group -->
    </div>
    <!-- akhir main content -->
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
        <script type="text/JavaScript" src="js/main.js"></script>
</body>

</html>