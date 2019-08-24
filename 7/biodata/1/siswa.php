<?php
session_start();
include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Sistem Hasil Laporan Survei</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Beranda</span></a></li>
			  <li><a href="siswa.php"><i class="fa fa-user"></i><span>Data Biodata</span></a></li>     
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Biodata
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				<a href="#"><button class="btn btn-success" type="button" data-target="#Modalinput" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Data</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_siswa.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Siswa -->
		<div id="Modalinput" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Biodata</h4>
					</div>
					<div class="modal-body">
						<form action="siswa_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Nama Lengkap</label>
									<div class="input-group">
										<input name="full_name" type="text"  autocomplete="off" class="form-control" value="<?php echo $siswa["full_name"]; ?>" />
									</div>
							</div>
							<div class="form-group">
								<label>Tempat Lahir</label>
									<div class="input-group">
									<select name="birth_of_place_id" class="form-control">
											<option value="Pria">Jakarta</option>
                							<option value="Wanita">Bandung</option>
									</select>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group">
										<input name="birth_of_date" type="text"  autocomplete="off" class="form-control" value="<?php echo $siswa["birth_of_date"]; ?>" />
									</div>
							</div>
							<div class="form-group">
								<label>Nomor Hp</label>
									<div class="input-group">
										<input name="phone_number" type="text"  autocomplete="off" class="form-control" value="<?php echo $siswa["phone_number"]; ?>" />
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<input name="addres" type="text"  autocomplete="off" class="form-control" value="<?php echo $siswa["addres"]; ?>" />
									</div>
							</div>
							<div class="form-group">
								<label>Pendidikan Terakhir</label>
									<div class="input-group">
									<select name="last_educaton" class="form-control">
											<option value="Pria">SD</option>
                							<option value="Wanita">SMP</option>
											<option value="Pria">SMA</option>
                							<option value="Wanita">DI</option>
											<option value="Pria">DII</option>
                							<option value="Wanita">DIII</option>
                							<option value="Wanita">S1</option>
                							<option value="Wanita">S2</option>
                							<option value="Wanita">S3</option>
									</select>
									</div>
							</div>
							<div class="form-group">
								<label>Agama </label>
									<div class="input-group">
									<input type="radio" name="agama" value=""> Islam<br>
  									<input type="radio" name="agama" value=""> Kristen<br>
 									 <input type="radio" name="agama" value=""> katholik
									</div>
							</div>
							<div class="form-group">
								<label>Hobi</label>
									<div class="input-group">
									<input type="checkbox" name="hobi1" value="Bike"> Renang<br>
									<input type="checkbox" name="hobi2" value="Car"> Mancing<br>
									<input type="checkbox" name="hobi3" value="Boat"> Game<br> 
									<input type="checkbox" name="hobi2" value="Car"> Gibah<br>
									<input type="checkbox" name="hobi3" value="Boat"> Programming<br> 
									</div>
							</div>
							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Tambah
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Keluar
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Siswa Edit -->
		<div id="ModalEditSiswa" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Apakah kamu akan menghapusnya ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
