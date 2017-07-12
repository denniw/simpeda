<div class="row">	
			<div class="col-md-12">
				<h1 class="page-header">Form Pendaftaran</h1>
			</div>
			<form id="form" class="form-horizontal" action="regist-success.php" method="get">
				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="nama">Nama:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required="">
					</div>
				</div>

				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="sex">Jenis Kelamin:</label>
					<div class="col-sm-6">
						<label class="radio-inline">
							<input type="radio" name='sex' value="pria">Pria
						</label>
						<label class="radio-inline">
							<input type="radio" name='sex' value="wanita">Wanita
						</label>
					</div>
				</div>

				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-6">
						<input type="email" class="form-control" id="email" placeholder="Masukkan Email" required="">
					</div>
				</div>

				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="uname">Username:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="uname" placeholder="Masukkan Username" required="">
					</div>
				</div>

				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="pwd">Password:</label>
					<div class="col-sm-6">
						<input type="password" class="form-control" id="pwd" placeholder="Masukkan Password" required="">
					</div>
				</div>

				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="pass">Konfirmasi Password:</label>
					<div class="col-sm-6">
						<input type="password" class="form-control" id="pass" placeholder="Masukkan Ulang Password" required="">
					</div>
				</div>

				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="phone">No.HP:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="phone" placeholder="Masukkan No.HP" required="">
					</div>
				</div>

				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="ktp">No.KTP:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="ktp" placeholder="Masukkan No.KTP" required="">
					</div>
				</div>

				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="ktp2">Input KTP:</label>
					<div class="col-sm-6">
						<label class="btn btn-default btn-file">
							<input type="file">
						</label>
					</div>

				</div>

				<div class="form-group col-sm-8">
					<label class="control-label col-sm-2" for="alamat">Alamat:</label>
					<div class="col-sm-6">
						<textarea class="form-control" rows="5" id="alamat" placeholder="Masukkan Alamat" required=""></textarea>
					</div>
				</div>

				<div class="form-group col-sm-8">
					<div class="col-sm-offset-2 col-sm-10">
						<button class="btn btn-info" type="submit">Daftar</button>
					</div>
				</div>
			</form>
		</div>