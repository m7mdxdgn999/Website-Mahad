<?php 
//koneksi ke database
$conn=mysqli_connect("localhost", "root", "", "mahad");

function query ($query) {
    global $conn;
    $result=mysqli_query($conn, $query);
    $rows=[];
    while ($row =mysqli_fetch_assoc( $result)){
        $rows []=$row;
    }
    return $rows;
}

function tambah ($data){

    global $conn;

    $nama_mahasiswa= htmlspecialchars ($data["nama_mahasiswa"]);
    $nim=htmlspecialchars ($data["nim"]);
    $fakultas_jurusan_semester= htmlspecialchars ($data ["fakultas_jurusan_semester"]);
    $no_hp_mahasantri= htmlspecialchars ($data ["no_hp_mahasantri"]);
    $tempat_tanggal_lahir= htmlspecialchars ($data ["tempat_tanggal_lahir"]);
    $jalur_masuk= htmlspecialchars ($data ["jalur_masuk"]);
    $nama_org_tua= htmlspecialchars ($data ["nama_org_tua"]);
    $no_hp_org_tua= htmlspecialchars ($data ["no_hp_org_tua"]);
    $alamat_lengkap= htmlspecialchars ($data ["alamat_lengkap"]);
    $nama_mabna= htmlspecialchars ($data ["nama_mabna"]);

    //query insert data
    $query="INSERT INTO mahasantri VALUES
     ('', '$nama_mahasiswa', '$nim', '$fakultas_jurusan_semester', '$no_hp_mahasantri', '$tempat_tanggal_lahir', '$jalur_masuk', '$nama_org_tua', '$no_hp_org_tua','$alamat_lengkap', '$nama_mabna')";

     mysqli_query($conn,$query);
     return mysqli_affected_rows($conn);
    
}

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasantri WHERE id=$id");

    return mysqli_affected_rows($conn);
}

function ubah ($data){

    global $conn;

    $id=$data["id"];
    $nama_mahasiswa= htmlspecialchars ($data["nama_mahasiswa"]);
    $nim=htmlspecialchars ($data["nim"]);
    $fakultas_jurusan_semester= htmlspecialchars ($data ["fakultas_jurusan_semester"]);
    $no_hp_mahasantri= htmlspecialchars ($data ["no_hp_mahasantri"]);
    $tempat_tanggal_lahir= htmlspecialchars ($data ["tempat_tanggal_lahir"]);
    $jalur_masuk= htmlspecialchars ($data ["jalur_masuk"]);
    $nama_org_tua= htmlspecialchars ($data ["nama_org_tua"]);
    $no_hp_org_tua= htmlspecialchars ($data ["no_hp_org_tua"]);
    $alamat_lengkap= htmlspecialchars ($data ["alamat_lengkap"]);
    $nama_mabna= htmlspecialchars ($data ["nama_mabna"]);

    //query insert data
    $query="UPDATE mahasantri SET
    nama_mahasiswa='$nama_mahasiswa',
    nim='$nim',
    fakultas_jurusan_semester='$fakultas_jurusan_semester',
    no_hp_mahasantri='$no_hp_mahasantri',
    tempat_tanggal_lahir='$tempat_tanggal_lahir',
    jalur_masuk='$jalur_masuk',
    nama_org_tua='$nama_org_tua',
    no_hp_org_tua='$no_hp_org_tua',
    alamat_lengkap='$alamat_lengkap',
    nama_mabna='$nama_mabna'
    WHERE id=$id";

     mysqli_query($conn,$query);
     return mysqli_affected_rows($conn);
    
}

function cari ($keyword){
    $query = "SELECT * FROM mahasantri WHERE 
    nama_mahasiswa LIKE  '%$keyword%' OR
    nim LIKE  '%$keyword%' OR
    nama_mabna LIKE '%$keyword%'
    ";

    return query($query);
}

function registrasi($data){
    global $conn;

    $username= strtolower(stripslashes($data["username"]));
    $password=mysqli_real_escape_string($conn,$data["password"] );
    $password2=mysqli_real_escape_string($conn,$data["password2"] );

    //cek username sudah terdaftar atau belum
    $result=mysqli_query($conn," SELECT username FROM admins WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo"<script>
        alert('username sudah terdaftar');       
        </script>
        ";
        return false;

    }

    //cek konfirmasi password
    if ( $password !=  $password2) {
        echo"<script>
        alert('konfirmasi password tidak sesuai');       
        </script>
        ";

        return false;
    }

    //ekcripsi password 
    $password=password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user ke database
    mysqli_query($conn, "INSERT INTO admins VALUES ('', '$username', '$password')" );
    return mysqli_affected_rows($conn);

   
}

?>