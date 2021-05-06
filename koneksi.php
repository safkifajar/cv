<?php

$conn = mysqli_connect("localhost", "root","","cvsafki");

if (mysqli_connect_error()) {
	echo "koneksi gagal :" . mysqli_connect_error();
}
echo "koneksi berhasil";
mysqli_close($conn);
?>