<!-- MODAL DELETE RESERVASI -->
<div class="modal" id="popUpDelete-Reservasi_<?php echo $row['id_reservasi']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content animated faster bounceIn">
            <div class="modal-header bg-light">
                <h3 class="modal-title" id="exampleModalLabel">Hapus Data Reservasi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<h5 class="text-center"><?php echo "Hapus ID <span class='text-danger'>RSV-00".$row['id_reservasi'].'</span> dengan nama <span class=text-danger>'.$row['nm_tamu']."</span>, lanjutkan ?"; ?></h5>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                <a href="hapus_data_reservasi.php?id_reservasi=<?php echo $row['id_reservasi']; ?>" class="btn btn-danger">Hapus Data</a>
            </div>
        </div>
    </div>
</div>