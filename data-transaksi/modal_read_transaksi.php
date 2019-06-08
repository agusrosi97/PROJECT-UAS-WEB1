<!-- MODAL READ TRANSAKSI -->
<div class="modal fade" id="popUpRead-Transaksi_<?php echo $row['id_transaksi'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Detail Data Transaksi</h3>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-costume">
				<!-- READ DATA TRANSAKSI -->
				<div class="form-row">
					<label class="col-sm-1 col-form-label">#</label>
					<div class="form-group col-sm-2">
						<input type="text" class="form-control" value="<?php echo $no ?>" disabled>
					</div>
					<label class="col-sm-1 col-form-label">ID</label>
					<div class="form-group col-sm-4">
						<input type="text" class="form-control" value="TR-00<?php echo $row['id_transaksi']; ?>" disabled>
					</div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-3 col-form-label">Nama Tamu</label>
				    <div class="col-sm-8">
				    	<input type="text" class="form-control" value="<?php echo $row['nama_tamu'] ?>" disabled>
				    </div>
			  	</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Check In</label>
					<div class="col-sm-5">
				    	<input type="date" class="form-control" value="<?php echo $row['checkin'] ?>" disabled>
				    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3">Check Out</label>
					<div class="col-sm-5">
				    	<input type="date" class="form-control" value="<?php echo $row['checkout'] ?>" disabled>
				    </div>
				</div>
				<div class="form-group row">
					<label for="input_tipe_kmr" class="col-sm-3 col-form-label">Tipe Kamar</label>
					<div class="col-sm-4">
						<select class="custom-select form-control" disabled>
							<option>Pilih tipe...</option>
							<option value="1" <?php if ($row['tipe_kamar'] == '1') { echo 'selected="selected"'; }?>>Tipe 1</option>
							<option value="2" <?php if ($row['tipe_kamar'] == '2') { echo 'selected="selected"'; }?>>Tipe 2</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-3 col-form-label">Dewasa</label>
				    <div class="col-sm-3">
				    	<input type="number" class="form-control" value="<?php echo $row['jml_dewasa'] ?>" disabled>
				    </div>
				    <small class="text-muted form-tahun">Orang</small>
			  	</div>
			  	<div class="form-group row">
				    <label class="col-sm-3 col-form-label">Anak-anak</label>
				    <div class="col-sm-3">
				    	<input type="number" class="form-control" value="<?php echo $row['jml_anak'] ?>" disabled>
				    </div>
				    <small class="text-muted form-tahun">Orang</small>
			  	</div>
			  	<div class="form-group row">
				    <label class="col-sm-3">Total Pembayaran</label>
				    <div class="col-sm-3">
				    	<input type="number" class="form-control" value="<?php echo $row['total_pembayaran'] ?>" disabled>
				    </div>
			  	</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
			</div>
		</div>
	</div>
</div>