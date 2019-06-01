<!-- MODAL INSERT TAMU -->
<div class="modal fade" id="popUpInsert-Tamu" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Tambah Data Tamu</h3>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-tamu">
				<!-- INPUT DATA TAMU -->
				<form method="POST" action="tambah_data_tamu.php">
					<div class="form-group row">
					    <label for="input_nama_tamu" class="col-sm-2 col-form-label">Nama</label>
					    <div class="col-sm-9">
					    	<input type="text" name="inp_nama_tamu" class="form-control" id="input_nama_tamu" placeholder="Inputkan Nama Tamu" required>
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="input_umur_tamu" class="col-sm-2 col-form-label">Umur</label>
					    <div class="col-sm-3">
					    	<input type="number" name="inp_umur_tamu" class="form-control" id="input_umur_tamu" required>
					    </div>
					    <small class="text-muted form-tahun">Tahun.</small>
				  	</div>
					<div class="form-group row">
					    <label for="input_email_tamu" class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-9">
					    	<input type="email" name="inp_email_tamu" class="form-control" id="input_email_tamu" placeholder="Inputkan Email Tamu" required>
					    	<div class="invalid-feedback">
								Contoh: <i><b>user@hostname.com</b></i>
							</div>
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="input_alamat_tamu" class="col-sm-2 col-form-label">Alamat</label>
					    <div class="col-sm-9">
					    	<textarea name="inp_alamat_tamu" class="form-control" id="input_alamat_tamu" placeholder="Inputkan Alamat Tamu" required></textarea>
					    </div>
				  	</div>
				  	<div class="form-group-last-modal-input row">
				  		<label for="input_telp_tamu" class="col-sm-2 col-form-label last-label">Telepon</label>
					  	<div class="col-sm-5">
					    	<div class="input-group">
					        	<div class="input-group-prepend">
					          		<div class="input-group-text">+62</div>
					        	</div>
					        	<input name="inp_notlp_tamu" type="text" class="form-control" id="input_telp_tamu" required>
					      	</div>
					    </div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" name="submit-input-tamu" class="btn btn-primary">Simpan Data</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
				</form>
		</div>
	</div>
</div>