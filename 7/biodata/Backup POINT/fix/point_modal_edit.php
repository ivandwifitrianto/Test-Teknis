<?php

include "koneksi.php";

$Id_pelanggaran_siswa	= $_GET["Id_pelanggaran_siswa"];

$querypoint = mysqli_query($konek, "SELECT * FROM pelanggaran_siswa WHERE Id_pelanggaran_siswa='$Id_pelanggaran_siswa'");
if($querypoint == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($point = mysqli_fetch_array($querypoint)){

?>
		
<!-- Modal Popup Siswa -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Siswa</h4>
					</div>
					<div class="modal-body">
						<form action="point_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIS siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIS_siswa" type="text" class="form-control" value="<?php echo $point["NIS_siswa"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Pelanggaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Kode_pelanggaran" class="form-control">
											<?php
												
												$querypelanggaran = mysqli_query($konek, "SELECT * FROM pelanggaran");
												if($querypelanggaran == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($pelanggaran = mysqli_fetch_array($querypelanggaran)){
													echo "
														<option value='$pelanggaran[Nama_pelanggaran]'>$pelanggaran[Nama_pelanggaran]</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Bobot</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="point" type="text" class="form-control" value="<?php echo $pelanggaran["point"]; ?>"/>
									</div>
							</div>
			
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>