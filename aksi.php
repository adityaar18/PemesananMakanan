<?php
session_start();
include "koneksi.php";
if($_GET['aksi']=="login"){
  $user = $_POST['username'];
  $pass = md5($_POST['password']);

  $cek = "SELECT * FROM tbl_user WHERE username='$user' AND password='$pass'";
  $data = $conn->query($cek);
  $jml = mysqli_num_rows($data);
  if($jml==0){
    echo '<script language="javascript">alert("Invalid username or password!"); document.location="index.php";</script>';
  }else{
    while ($row = $data->fetch_array()) {
        if($row['level']==1){
          $_SESSION['user']=$user;
  				echo '<script language="javascript">alert("Anda berhasil Login Sebagai Kasir!"); document.location="pesan.php";</script>';
        }else{
          $_SESSION['user']=$user;
  				echo '<script language="javascript">alert("Anda berhasil Login Sebagai Koki!"); document.location="tampil.php";</script>';
        }
    }
  }
}elseif ($_GET['aksi']=="insert") {
  $fanta = $_POST['fanta'];
  $cocacola = $_POST['cocacola'];
  $pepsi = $_POST['pepsi'];
  $icecream = $_POST['icecream'];
  $friedchicken = $_POST['friedchicken'];
  $burger = $_POST['burger'];
  $frenchfries = $_POST['frenchfries'];
  $spaghetti = $_POST['spaghetti'];
  $ins = "CALL t_transaksi('$fanta', '$cocacola', '$pepsi', '$icecream', '$friedchicken', '$burger', '$frenchfries', '$spaghetti')";
  $conn->query($ins);
  echo '<script>alert("Pesananan Behasil Dibuat."); document.location="pesan.php";</script>';
}elseif ($_GET['aksi']=="update") {
  $upd = "CALL ubah_transaksi($_GET[no])";
  $conn->query($upd);
  header("location: tampil.php");
}elseif($_GET['aksi']=="add"){
  $user = $_POST['username'];
  $pass = md5($_POST['password']);
  $level = ($_POST['level']);
  $nama = ($_POST['name']);
  $add = "CALL t_admin('$user', '$pass', '$level')";
  if ($_POST['level'] == 1) {
    $addka = "CALL t_karyawan('$user','$nama','Kasir')";
    $conn->query($addka);
    $conn->query($add);
    echo '<script>alert("Berhasil menambahkan data kasir."); document.location="index.php";</script>';
  } elseif ($_POST['level'] == 2) {
    $addko = "CALL t_karyawan('$user','$nama','Koki')";
    $conn->query($addko);
    $conn->query($add);
    echo '<script>alert("Berhasil menambahkan data koki."); document.location="index.php";</script>';
  }  
}elseif ($_GET['aksi']=="del") {
  $username = $_POST['username'];
  $cek = mysqli_query($conn2, "SELECT * FROM tbl_user WHERE username='$username'");
  if(mysqli_num_rows($cek) > 0){
    $del = mysqli_query($conn2, "CALL d_karyawan('$username')");
    if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php";</script>';
		}
  }
}
?>
