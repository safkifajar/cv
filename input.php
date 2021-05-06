<?php
include "koneksi.php":
$nama	=$_POST['nama'];
$email	=$_POST['email'];
$subjek	=$_POST['subjek'];
$pesan	=$_POST['pesan'];

isset($_POST['simpan']){
$input = "INSERT INTO tb_masuk SET nama = '$nama', email = '$email', subjek = '$subjek', pesan = '$pesan'";
mysqli_connect($koneksi, $input);
header("location:index.html");
}
?>