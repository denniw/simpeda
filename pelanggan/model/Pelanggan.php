<?php 

/**
* 
*/

include_once 'Model.php';
class Pelanggan extends Model
{
	public $id_pelanggan;
	public $nama;
	public $jenis_kelamin;
	public $no_telp;
	public $alamat;
	public $no_ktp;
	public $password;
	public $scan_ktp_pel;

	public function inputPelanggan($nama,$jenis_kelamin,$no_telp,$alamat,$no_ktp,$password,$scan_ktp_pel)
	{
				try
		  {
		   $stmt = $this->db->prepare("INSERT INTO Pelanggan(id_pelanggan,nama,jenis_kelamin,no_telp,alamat,no_ktp,password,scan_ktp_pel) VALUES(:id_pelanggan, :nama, :jenis_kelamin, :no_telp, :alamat, :no_ktp, :password, :scan_ktp_pel)");
		   $stmt->bindparam(":id_pelanggan",$id_pelanggan);
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
		   $stmt->bindparam(":no_telp",$no_telp);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":no_ktp",$no_ktp);
		   $stmt->bindparam(":password",$password);
		   $stmt->bindparam(":scan_ktp_pel",$scan_ktp_pel);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }

	}
}
	?>