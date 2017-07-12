<?php 
require_once 'View.php';
/**
* 
*/
class PendaftaranUI extends View
{
	
	public function inputPelanggan()
	{
		include_once 'controller/PelangganControl.php';
		$pdf = new PelangganControl();
		$pesan = $pdf->setDataPelanggan();
		include_once 'pages/form-pendaftaran.php';
		$this->end();
	}

}
 ?>