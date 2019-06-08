<!-- MODAL DELETE TAMU -->
<div class="modal" id="popUpDelete-Tamu_<?php echo $row['id_tamu']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content animated faster bounceIn">
            <div class="modal-header bg-light">
                <h3 class="modal-title" id="exampleModalLabel">Hapus Data Tamu</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<h5 class="text-center"><?php echo "Hapus ID <span class='text-danger'>T-00".$row['id_tamu'].'</span> dengan nama <span class=text-danger>'.$row['nama_tamu']."</span>, lanjutkan ?"; ?></h5>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                <a href="hapus_data_tamu.php?id_tamu=<?php echo $row['id_tamu']; ?>" class="btn btn-danger">Hapus Data</a>
            </div>
        </div>
    </div>
</div>