<!-- MODAL READ KAMAR -->
<div class="modal fade" id="popUpRead-Kamar_<?php echo $row['id_tipe_kamar']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Detail Data Kamar</h3>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-costume">
				<!-- READ KAMAR -->
				<div class="form-row">
					<label class="col-sm-1 col-form-label">#</label>
					<div class="form-group col-sm-2">
						<input type="text" class="form-control" value="<?php echo $no ?>" disabled>
					</div>
					<label class="col-sm-1 col-form-label">ID</label>
					<div class="form-group col-sm-4">
						<input type="text" class="form-control" value="K-0<?php echo $row['id_tipe_kamar']; ?>" disabled>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Tipe Kamar</label>
					<div class="col-sm-4">
						<select class="custom-select form-control" disabled>
							<option value="Harap pilih tipe!">Pilih tipe...</option>
							<option value="1" <?php if ($row['tipe_kamar'] == '1') { echo 'selected="selected"'; } ?>>Tipe 1</option>>Tipe 1</option>
							<option value="2" <?php if ($row['tipe_kamar'] == '2') { echo 'selected="selected"'; } ?>>Tipe 2</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Harga Kamar</label>
					<div class="col-sm-4">
				    	<input type="number" class="form-control" value="<?php echo $row['harga_kamar'] ?>" disabled>
				    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Keterangan</label>
					<div class="col-sm-8">
				    	<textarea class="form-control" rows="3" disabled><?php echo $row['keterangan']; ?></textarea>
				    </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">KEMBALI</button>
			</div>
				</form>
		</div>
	</div>
</div>