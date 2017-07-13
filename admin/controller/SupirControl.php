<?php 
/**
* 
*/
include_once 'Controller.php';
class SupirControl extends Controller
{
	
	public function getDaftarSupir()
	{
		include_once 'model/Supir.php';
		$sp  = new Supir();
		$daftar_supir = $kat->getDaftarSupir();
		return $daftar_supir;
	}

}
 ?>