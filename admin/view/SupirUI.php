<?php 

require_once 'View.php';
/**
* 
*/
class SupirUI extends View
{
	
	public function tampilLengkap()
	{
1		include_once 'model/Supir.php';
		$sp = new Supir();
		$daftar_supir = $sp->getDaftarSupir();
		include_once 'pages/detail-supir.php';
		$this->end();
	}
}



 ?>