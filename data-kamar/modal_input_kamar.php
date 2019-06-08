<!-- MODAL INSERT KAMAR -->
<div class="modal fade" id="popUpInsert-Kamar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Tambah Data Kamar</h3>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-costume">
				<!-- INPUT DATA KAMAR -->
				<form method="POST" action="tambah_data_kamar.php">
					<div class="form-group row">
						<label for="input_tp_kmr" class="col-sm-3 col-form-label">Tipe Kamar</label>
						<div class="col-sm-4">
							<select class="custom-select form-control" name="inp_tp_kamar" id="input_tipe_kmr">
								<option>Pilih tipe...</option>
								<option value="1">Tipe 1</option>
								<option value="2">Tipe 2</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="input_harga_kamar" class="col-sm-3 col-form-label">Harga Kamar</label>
						<div class="col-sm-4">
					    	<input type="number" name="inp_harga_kamar" class="form-control" id="input_harga_kamar" required>
					    </div>
					</div>
					<div class="form-group row">
						<label for="input_ket_kamar" class="col-sm-3 col-form-label">Keterangan</label>
						<div class="col-sm-8">
					    	<textarea name="inp_keterangan"class="form-control" rows="3" placeholder="Keterangan kamar"></textarea>
					    </div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" name="submit-input-kamar" class="btn btn-primary">Simpan Data</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
				</form>
		</div>
	</div>
</div>