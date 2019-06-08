<!-- MODAL UPDATE RESERVASI -->
<div class="modal fade" id="popUpUpdate-Reservasi_<?php echo $row['id_reservasi']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Ubah Data Reservasi</h3>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-costume">
				<!-- INPUT DATA RESERVASI -->
				<form method="POST" action="ubah_data_reservasi.php?id_reservasi=<?php echo $row['id_reservasi']; ?>">
					<div class="form-group row">
					    <label for="input_nama_tamu" class="col-sm-3 col-form-label">Nama Tamu</label>
					    <div class="col-sm-8">
					    	<input type="text" name="updt_nm_tamu" class="form-control" id="input_nama_tamu" placeholder="Inputkan Nama Tamu" value="<?php echo $row['nm_tamu'] ?>" required>
					    </div>
				  	</div>
					<div class="form-group row">
						<label for="input_checkin_reservasi" class="col-sm-3 col-form-label">Check In</label>
						<div class="col-sm-6">
					    	<input type="date" name="updt_checkin_reservasi" class="form-control" id="input_checkin_reservasi" value="<?php echo $row['checkin'] ?>" required>
					    </div>
					</div>
					<div class="form-group row">
						<label for="input_checkout_reservasi" class="col-sm-3">Check Out</label>
						<div class="col-sm-6">
					    	<input type="date" name="updt_checkout_reservasi" class="form-control" id="input_checkout_reservasi" value="<?php echo $row['checkout'] ?>" required>
					    </div>
					</div>
					<div class="form-group row">
						<label for="input_tipe_kmr" class="col-sm-3 col-form-label">Tipe Kamar</label>
						<div class="col-sm-4">
							<select class="custom-select form-control" name="updt_tipe_kamar" id="input_tipe_kmr" required>
								<option value="Harap pilih tipe!">Pilih tipe...</option>
								<option value="1" <?php if ($row['tipe_kmr'] == '1') { echo 'selected="selected"';}?>>Tipe 1</option>
								<option value="2" <?php if ($row['tipe_kmr'] == '2') { echo 'selected="selected"';}?>>Tipe 2</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
					    <label for="input_jmlortu_reservasi" class="col-sm-3 col-form-label">Dewasa</label>
					    <div class="col-sm-3">
					    	<input type="number" name="updt_jmldwsa_reservasi" class="form-control" id="input_jmlortu_reservasi" value="<?php echo $row['jml_dewasa'] ?>" required>
					    </div>
					    <small class="text-muted form-tahun">Orang</small>
				  	</div>
				  	<div class="form-group row">
					    <label for="input_jmlanak_reservasi" class="col-sm-3 col-form-label">Anak-anak</label>
					    <div class="col-sm-3">
					    	<input type="number" name="updt_jmlanak_reservasi" class="form-control" id="input_jmlanak_reservasi" value="<?php echo $row['jml_anak'] ?>" required>
					    </div>
					    <small class="text-muted form-tahun">Orang</small>
				  	</div>
			</div>
			<div class="modal-footer">
				<button type="submit" name="submit-update-reservasi" class="btn btn-primary">Simpan Data</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
				</form>
		</div>
	</div>
</div>