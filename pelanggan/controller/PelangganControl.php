<?php 
include_once 'Controller.php';
class PelangganControl extends Controller
{
public function setDataPelanggan()
	{
		include_once 'model/Pelanggan.php';
		$pl = new Pelanggan();
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$no_telp = $_POST['no_telp'];
		$alamat = $_POST['alamat'];
		$no_ktp = $_POST['no_ktp'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$scan_ktp_pel = $_POST['scan_ktp_pel'];
		$pesan = $pl->setDataPelanggan($nama,$jenis_kelamin,$no_telp,$alamat,$no_ktp,$username,$password,$scan_ktp_pel);
		return $pesan;
	}
}	
 ?>