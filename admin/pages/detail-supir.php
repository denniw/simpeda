<h2>Daftar Berita</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No_Supir</th>
			<th>No_ktp</th>
			<th>Alamat</th>
			<th>Nama</th>
			<th>No_telp</th>
			<th>Jenis_kelamin</th>	
		</tr>
	</thead>
	<tbody>

 <?php
 $i=1;
  foreach ($isi_supir as $is) { ?>
		<tr>
			<td><?= $ib['no_supir']?></td>
			<td><?= $ib['no_ktp'] ?></td>
			<td><?= $ib['alamat'] ?></td>
			<td><?= $ib['nama'] ?></td>
			<td><?= $ib['no_telp'] ?></td>
			<td><?= $ib['jenis_kelamin'] ?></td>
			<td><a href="aksi_detail.php <?php echo $ib['no_supir1'] ?>"></a></td>
		</tr>
		<?php 
		$i++;
		} ?>
	</tbody>
</table>
