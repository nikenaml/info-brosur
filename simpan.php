<?php
include 'koneksi.php';

$error_nama = "";
$error_email = "";
$error_alamat_kota = "";
$error_no_hp = "";
$error_asal_sekolah = "";
$error_minat_prodi = "";
$error_tanggal = "";

$nama = "";
$email = "";
$alamat_kota = "";
$no_hp = "";
$asal_sekolah = "";
$minat_prodi = "";
$tanggal = date("Y-m-d h:i:sa");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["nama"])) {
			$error_nama = "Nama tidak boleh kosong";
		} 
	else {
    $nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
      	$nameErr = "Inputan Hanya boleh huruf dan spasi"; 
    }
	}
	
	if (empty($_POST["email"])) {
	$error_email = "Email tidak boleh kosong";} 
	else {
    $email = cek_input($_POST["email"]);
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $error_email = "Format email Invalid"; }
	}
	
	if (empty($_POST["alamat_kota"])) {
	$error_alamat_kota = "Alamat tidak boleh kosong";} 
	else{
    $alamat_kota = cek_input($_POST["alamat_kota"]);}
    
  	// if (empty($_POST["web"])) {
    // $error_web = "Website tidak boleh kosong";}
  	// else {
    // $web = cek_input($_POST["web"]);
    // 	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) {
	// 	  $error_web = "URL tidak valid"; }
	// }
	
	if (empty($_POST["no_hp"])) {
    $error_no_hp = "Telp tidak boleh kosong";} 
  	else {
	$no_hp = cek_input($_POST["no_hp"]); 
		if(!is_numeric($no_hp)) {
      	$error_no_hp = 'Nomor HP hanya boleh angka';}
    }

    if (empty($_POST["asal_sekolah"])) {
        $error_asal_sekolah = "Asal sekolah tidak boleh kosong";} 
    else{
        $asal_sekolah = cek_input($_POST["asal_sekolah"]);}

    if (empty($_POST["minat_prodi"])) {
        $error_minat_prodi = "Minat prodi tidak boleh kosong";} 
    else{
    $minat_prodi = cek_input($_POST["minat_prodi"]);}
    
    $tanggal = $_POST["tanggal"];
}
 
function cek_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// menyimpan data kedalam variabel
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat_kota = $_POST['alamat_kota'];
$no_hp = $_POST['no_hp'];
$asal_sekolah = $_POST['asal_sekolah'];
$minat_prodi = $_POST['minat_prodi'];
$tanggal = date("Y-m-d H:i:s");
// query SQL untuk insert data
// $query="INSERT INTO camaba SET nama='$nama',email='$email',alamat='$alamat',no_hp='$no_hp',asal_sekolah='$asal_sekolah',jurusan_sekolah='$jurusan_sekolah'";
$test = "INSERT INTO camaba SET nama='$nama',email='$email',alamat_kota='$alamat_kota',no_hp='$no_hp',asal_sekolah='$asal_sekolah',minat_prodi='$minat_prodi',tanggal='$tanggal'";

// mysqli_query($koneksi, $query);
mysqli_query($koneksi, "INSERT INTO camaba VALUES('','$nama','$email','$alamat_kota','$no_hp','$asal_sekolah','$minat_prodi','$tanggal')");
// mengalihkan ke halaman index.php
header("location:download-brosur.html");
?>