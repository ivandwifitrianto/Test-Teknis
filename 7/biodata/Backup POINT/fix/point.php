<?php

include "koneksi.php";

?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Monitoring Siswa</title>
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
              <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
              <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
			        <li><a href="siswa.php"><i class="fa fa-user"></i><span>Data Siswa</span></a></li>
					<li><a href="point.php"><i class="fa fa-columns"></i><span>Data Pelanggaran Siswa</span></a></li>
			        <li><a href="pesan.php"><i class="fa fa-users"></i><span>Kirim Pesan</span></a></li>
			        <li><a href="surat.php"><i class="fa fa-columns"></i><span>Cetak Surat</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Pelanggaran Siswa
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
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i>Tambah</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_point.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Siswa -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Pelanggaran Siswa</h4>
					</div>
					<div class="modal-body">
						<form action="point_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIS siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="NIS_siswa" class="form-control">
											<?php
												
												$querynis = mysqli_query($konek, "SELECT * FROM siswa");
												if($querynis == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($nis = mysqli_fetch_array($querynis)){
													echo "
														<option value='$nis[NIS_siswa]'>$nis[NIS_siswa]</option>";
												}
											?>
										</select>
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
									Add
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Siswa Edit -->
		<div id="ModalEditPoint" class="modal fade" tabindex="-1" role="dialog"></div>
		
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
