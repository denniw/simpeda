
<?php 
/**
* 
*/
include_once 'Model.php';
class Supir extends Model
{
	public $no_supir;
	public $no_ktp;
	public $alamat;
	public $nama;
	public $no_telp;
	public $jenis_kelamin;
	
	public function getDaftarSupir()
	{
		$query = $this->db->prepare("SELECT * FROM Supir");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
}
?>