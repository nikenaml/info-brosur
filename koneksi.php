<?php
$servername = "localhost";
$username = "u1083606_admin";
$password = "Mercubuana";
$database = "u1083606_db_marketing_p1";


date_default_timezone_set('Asia/Jakarta');

$sekarang = new DateTime();
$menit = $sekarang -> getOffset() / 60;
 
$tanda = ($menit < 0 ? -1 : 1);
$menit = abs($menit);
$jam = floor($menit / 60);
$menit -= $jam * 60;
 
$offset = sprintf('%+d:%02d', $tanda * $jam, $menit);

//$koneksi = mysqli_connect("localhost","root","","db_marketing_p1");
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);
mysqli_query("SET time_zone = '$offset'");
// mengecek koneksi
//   if (!$koneksi) {
//       die("Koneksi gagal: " . mysqli_connect_error());
//   }
//   echo "Koneksi berhasil";
//   mysqli_close($koneksi);


// $host = 'localhost';
// $name = 'u1083606_db_marketing_p1';
// $pass = 'Mercubuana';
// $uname = 'u1083606_admin';

//$koneksi = mysqli_connect($host, $uname, $pass, $name);

?>