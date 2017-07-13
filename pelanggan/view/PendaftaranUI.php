<?php 
require_once 'View.php';
/**
* 
*/
class PendaftaranUI extends ViewPelanggan
{
	
	public function inputPelanggan()
	{
		include_once 'controller/PelangganControl.php';
		$pdf = new PelangganControl();
		$pesan = $pdf->inputPelanggan();
		include_once 'pages/form-pendaftaran.php';
		$this->end();
	}

}
 ?>