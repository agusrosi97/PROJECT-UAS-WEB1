<!-- MODAL READ TAMU -->
<div class="modal fade" id="popUpRead-Tamu_<?php echo $row['id_tamu']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Detail Data Tamu</h3>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- READ DATA TAMU -->
			<div class="modal-body modal-form-tamu">
				<div class="form-row">
					<label class="col-sm-1 col-form-label">#</label>
					<div class="form-group col-sm-2">
						<input type="text" class="form-control" value="<?php echo $no ?>" disabled>
					</div>
					<label class="col-sm-1 col-form-label">ID</label>
					<div class="form-group col-sm-4">
						<input type="text" class="form-control" value="T-00<?php echo $row['id_tamu']; ?>" disabled>
					</div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Nama</label>
				    <div class="col-sm-9">
				    	<input type="text" class="form-control" value="<?php echo $row['nama_tamu']; ?>" disabled>
				    </div>
			  	</div>
			  	<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Umur</label>
				    <div class="col-sm-3">
				    	<input type="number" class="form-control" value="<?php echo $row['umur_tamu']; ?>" disabled>
				    </div>
				    <small class="text-muted form-tahun">Tahun.</small>
			  	</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-9">
				    	<input type="email" class="form-control" value="<?php echo $row['email_tamu']; ?>" disabled>
				    </div>
			  	</div>
			  	<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Alamat</label>
				    <div class="col-sm-9">
				    	<textarea class="form-control" disabled><?php echo $row['alamat_tamu']; ?></textarea>
				    </div>
			  	</div>
			  	<div class="form-group-last-modal-input row">
			  		<label class="col-sm-2 col-form-label last-label">Telepon</label>
				  	<div class="col-sm-5">
				    	<div class="input-group">
				        	<div class="input-group-prepend">
				          		<div class="input-group-text">+62</div>
				        	</div>
				        	<input type="text" class="form-control" value="<?php echo $row['notlp_tamu']; ?>" disabled>
				      	</div>
				    </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
			</div>
		</div>
	</div>
</div>