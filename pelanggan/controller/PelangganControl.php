<?php 
include_once 'Controller.php';
class PelangganControl extends Controller
{
/*
public function inputPelanggan()
	{
		include_once 'model/Pelanggan.php';
		$pl = new Pelanggan();
		$id_pelanggan = isset($_POST['id_pelanggan']) ? $_POST['id_pelanggan'] : "";
		$nama = isset($_POST['nama']) ? $_POST['nama'] : "";
		$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "";
		$no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : 0;
		$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
		$no_ktp = isset($_POST['no_ktp']) ? $_POST['no_ktp'] : 0;
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";
		$scan_ktp_pel = isset($_POST['scan_ktp_pel']) ? $_POST['scan_ktp_pel'] : "";
		$pesan = $pl->inputPelanggan($id_pelanggan,$nama,$jenis_kelamin,$no_telp,$alamat,$no_ktp,$username,$password,$scan_ktp_pel);
		return $pesan;
	}
}*/


public function inputPelanggan()
	{
		include_once 'model/Pelanggan.php';
		$pl = new Pelanggan();
		$id_pelanggan = $_POST['id_pelanggan'];
		$nama = $_POST['nama'];
		$jenis_kelamin =$_POST['jenis_kelamin'];
		$no_telp =$_POST['no_telp'];
		$alamat = $_POST['alamat'];
		$no_ktp = $_POST['no_ktp'];
		$password =$_POST['password'];
		$scan_ktp_pel =$_POST['scan_ktp_pel'];
		$pesan = $pl->inputPelanggan($id_pelanggan,$nama,$jenis_kelamin,$no_telp,$alamat,$no_ktp,$password,$scan_ktp_pel);
		return $pesan;
	}
}
?>