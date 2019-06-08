<!-- MODAL UPDATE TAMU -->
<div class="modal fade" id="popUpUpdate-Tamu_<?php echo $row['id_tamu']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Perbarui Data Tamu</h3>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-costume">
				<!-- UPDATE DATA TAMU -->
				<form method="POST" action="ubah_data_tamu.php?id_tamu=<?php echo $row['id_tamu']; ?>">
					<div class="form-group row">
					    <label for="input_nama_tamu" class="col-sm-2">Nama</label>
					    <div class="col-sm-9">
					    	<input type="text" name="updt_nama_tamu" class="form-control" id="input_nama_tamu" placeholder="Inputkan Nama Tamu" value="<?php echo $row['nama_tamu']; ?>" required>
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="input_umur_tamu" class="col-sm-2">Umur</label>
					    <div class="col-sm-3">
					    	<input type="number" name="updt_umur_tamu" class="form-control" id="input_umur_tamu" required value="<?php echo $row['umur_tamu']; ?>">
					    </div>
					    <small class="text-muted form-tahun">Tahun.</small>
				  	</div>
					<div class="form-group row">
					    <label for="input_email_tamu" class="col-sm-2">Email</label>
					    <div class="col-sm-9">
					    	<input type="email" name="updt_email_tamu" class="form-control" id="input_email_tamu" placeholder="Inputkan Email Tamu" required value="<?php echo $row['email_tamu']; ?>">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="input_alamat_tamu" class="col-sm-2">Alamat</label>
					    <div class="col-sm-9">
					    	<textarea name="updt_alamat_tamu" class="form-control" id="input_alamat_tamu" placeholder="Inputkan Alamat Tamu" required><?php echo $row['alamat_tamu']; ?></textarea>
					    </div>
				  	</div>
				  	<div class="form-group-last-modal-input row">
				  		<label for="input_telp_tamu" class="col-sm-2 last-label">Nomor Telepon</label>
					  	<div class="col-sm-5">
					  		<input name="updt_notlp_tamu" type="text" class="form-control" id="input_telp_tamu" required value="<?php echo $row['notlp_tamu']; ?>">
					    </div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="submit-update-tamu">Simpan Pembaruan</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
			</form>
		</div>
	</div>
</div>