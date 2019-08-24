<?php

include "koneksi.php";

$NIS_siswa	= $_GET["NIS_siswa"];

$querysiswa = mysqli_query($konek, "SELECT * FROM siswa WHERE NIS_siswa='$NIS_siswa'");
if($querysiswa == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($siswa = mysqli_fetch_array($querysiswa)){

?>
		
<!-- Modal Popup Siswa -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Siswa</h4>
					</div>
					<div class="modal-body">
						<form action="siswa_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIS siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIS_siswa" type="text" class="form-control" value="<?php echo $siswa["NIS_siswa"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Semester</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Id_semester" class="form-control">
											<?php
												
												$querysemester = mysqli_query($konek, "SELECT * FROM semester");
												if($querysemester == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($semester = mysqli_fetch_array($querysemester)){
													echo "
														<option value='$semester[Semester]'>$semester[Semester]</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Kode_kelas" class="form-control">
											<?php
												
												$querykelas = mysqli_query($konek, "SELECT * FROM kelas");
												if($querykelas == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($kelas = mysqli_fetch_array($querykelas)){
													echo "
														<option value='$kelas[Nama_kelas]'>$kelas[Nama_kelas]</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Jurusan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Kode_jurusan" class="form-control">
											<?php
												
												$queryjurusan = mysqli_query($konek, "SELECT * FROM jurusan");
												if($queryjurusan == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($jurusan = mysqli_fetch_array($queryjurusan)){
													echo "
														<option value='$jurusan[Nama_jurusan]'>$jurusan[Nama_jurusan]</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_siswa" type="text" class="form-control" value="<?php echo $siswa["Nama_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat_siswa" type="text" class="form-control" value="<?php echo $siswa["Alamat_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>No HP Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="No_hp_siswa" type="text" class="form-control" value="<?php echo $siswa["No_hp_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Wali Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_wali_siswa" type="text" class="form-control" value="<?php echo $siswa["Nama_wali_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>No HP wali siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="No_hp_wali_siswa" type="text" class="form-control" value="<?php echo $siswa["No_hp_wali_siswa"]; ?>"/>
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