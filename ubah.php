<?php

require 'fungction.php';

//ambil data dari url
$id=$_GET["id"];

$mhs=query("SELECT * FROM  mahasantri WHERE id=$id") [0];


// cek apkah tombol submit  sudah ditentukan
if (isset($_POST["submit"])) {

   
   
   //cek apkah data berhasil ditambhakan
    if (ubah($_POST) > 0) {
       echo "
       <script>
          alert('data berhasil diubah!');
         document.location.href ='admin_panel.php';
     </script>
       ";        
   } else {
       echo "
      <script>
            alert('data gagal  diubah!');
            document.location.href ='admin_panel.php';
        </script>
      ";     
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
    <title>Pendaftaran</title>
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
                    <a href="dashboard.html">
                        <p class="icon-item-menu"><i class="fab fa-delicious"></i></p>
                    </a>
                </div>
                <div class="item-menu inactive ">
                    <a href="sales.html">
                        <p class="icon-item-menu"><i class="fas fa-ticket-alt"></i></p>
                    </a>
                </div>
                <div class="item-menu  ">
                    <a href="wisata.html">
                        <p class="icon-item-menu "><i class="fas fa-globe"></i></p>
                    </a>
                </div>
                <div class="item-menu inactive">
                    <a href="customer.html">
                        <p class="icon-item-menu "> <i class="far fa-user"></i></p>
                    </a>
                </div>
                <div class="item-menu inactive">
                    <a href="setting.html">
                        <p class="icon-item-menu "> <i class="fas fa-cog"></i></p>
                    </a>
                </div>
                <div class="item-menu inactive">
                    <a href="#">
                        <p class="icon-item-menu"><i class="fas fa-power-off"></i></p>
                    </a>
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
                <a href="dashboard.html">
                    <li>My Dashboard</li>
                </a>
                <a href="sales.html">
                    <li style="margin-top:-12px ;">Ticket Sales</li>
                </a>
                <a href="wisata.html">
                    <li style="margin-top: -13px;" class="active-link">Manage Wisata</li>
                </a>
                <a href="customer.html">
                    <li style="margin-top: -15px;">Customer <span class="badge badge-primary badge-tiketsaya">30</span>
                    </li>
                </a>
                <a href="setting.html">
                    <li style="margin-top: -12px;">Account setting</li>
                </a>
                <a href="logout.html">
                    <li style="padding-top: 120px;">Log out</li>
                </a>
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
                <p class="header-title"> Pendaftran Ma'had Al-jamiah</p>

            </div>
        </div>
        <!-- akhir header -->

        <!-- big report group -->
        <div class="row report-group">
            <!-- bagian kiri -->

            <!-- akhir bagian kirin -->

            <!-- thumbnail -->
            <div class="  col-md-12">
                <div class="item-big-report col-md-12">
                    <form action="" method="post">
                        <div class="row " style="padding-left: 30px;">
                            <p>Form Pendaftaran</p>
                        </div>
                        <div class="row">
                            <!--form kiri-->
                            <div class="col-md-5 " style="padding-left: 30px;">
                                <input type="hidden"  id="id"  name="id" require value="<?=$mhs["id"];?>">

                                <div class="form-group">
                                    <label for="nama_mahasiswa" class="title-input-primary-username">Nama Lengkap</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya" id="nama_mahasiswa" aria-describedby="emailHelp" placeholder="Nama Lengkap" name="nama_mahasiswa" require value="<?=$mhs["nama_mahasiswa"];?>">
                                </div>
                                <div class="form-group">
                                    <label for="fakultas_jurusan_semester" class="title-input-primary-username">Fakultas/Jurusan</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya" id="fakultas_jurusan_semester" aria-describedby="emailHelp" placeholder="Fakultas/Jurusan" name="fakultas_jurusan_semester" require value="<?=$mhs["fakultas_jurusan_semester"];?>" >
                                </div>
                                <div class="form-group">
                                    <label for="tempat_tanggal_lahir" class="title-input-primary-username">Tempat dan Tanggal Lahir</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya" id="tempat_tanggal_lahir" aria-describedby="emailHelp" placeholder="Tempat dan Tanggal Lahir" name="tempat_tanggal_lahir" require  value="<?=$mhs["tempat_tanggal_lahir"];?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama_org_tua" class="title-input-primary-username">Nama Orang Tua</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya" id="nama_org_tua" aria-describedby="emailHelp" placeholder="Nama Orang Tua" name="nama_org_tua" require value="<?=$mhs["nama_org_tua"];?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_lengkap" class="title-input-primary-username">Alamat</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya" id="alamat_lengkap" aria-describedby="emailHelp" placeholder="Alamat" name="alamat_lengkap" require value="<?=$mhs["alamat_lengkap"];?>">
                                </div>


                            </div>
                            <!-- akhir form kiri-->
                            <!-- form kanan -->
                            <div class="col-md-4" style="margin-left: 100px;">


                                <div class="form-group">
                                    <label for="nim" class="title-input-primary-username">NIM</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya" id="nim" aria-describedby="emailHelp" placeholder="NIM" name="nim" require value="<?=$mhs["nim"];?>">
                                </div>
                                <div class="form-group">
                                    <label for="no_hp_mahasantri" class="title-input-primary-username">No
                                        HP</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya" id="no_hp_mahasantri" placeholder="No hp" name="no_hp_mahasantri" require value="<?=$mhs["no_hp_mahasantri"];?>">
                                </div>

                                <div class="form-group">
                                    <label for="jalur_masuk" class="title-input-primary-username">
                                        Jalur Masuk:</label>
                                    <select class="custom-select" name="jalur_masuk" id="jalur_masuk" require value="<?=$mhs["jalur_masuk"];?>">
                                        <option value="SNMPTN"> SNMPTN</option>
                                        <option value="SPAN PTKIN">SPAN PTKIN </option>
                                        <option value="SBMPTN">SBMPTN</option>
                                        <option value="UMPTKIN">UMPTKIN</option>


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="no_hp_org_tua" class="title-input-primary-username">No HP Orang Tua/Wali</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya" id="no_hp_org_tua" placeholder="No HP Orang Tua/Wali" name="no_hp_org_tua" require value="<?=$mhs["no_hp_org_tua"];?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama_mabna" class="title-input-primary-username">
                                        Mabna:</label>
                                    <select class="custom-select" id="nama_mabna" name="nama_mabna" require value="<?=$mhs["nama_mabna"];?>">
                                        <option value="Mabna Syekh Nawawi">Mabna Syekh Nawawi (Putra-Umum) </option>
                                        <option value="Mabna Syekh Abdul Karim">Mabna Syekh Abdul Karim (Putra-Umum) </option>
                                        <option value="Mabna Sultan  Hasanuddin ">Mabna Sultan Hasanuddin (Putra-Kedokteran)</option>
                                        <option value="Mabna Syarifah Mudaim">Mabna Syarifah Mudaim (Putri-Umum)</option>
                                        <option value="Mabna Syarifah Khadijah ">Mabna Syarifah Khadijah (Putri-Kedokteran)</option>
                                        <option value="Mabna Rusunawa ">Mabna Rusunawa (Putri-Umum)</option>
                                    </select>
                                </div>


                                <button type="submit" class="btn btn-primary btn-primary-tiketsaya" id="submit" name="submit">Ubah</button>
                                <button type="reset" class="btn btn-primary btn-secondary-tiketsaya">Reset</button>

                            </div>




                    </form>
                </div>
                <!-- akhir form -->

            </div>


        </div>

    </div>
    <!-- akhir bagian kanan -->

    </div>
    <!-- akhir big report group -->
    </div>
    <!-- akhir main content -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="js/main.js"></script>
</body>

</html>