				<thead>
					<tr>	
						<th>NIS siswa</th>
						<th>Pelanggaran</th>
						<th>Bobot</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querypelanggaran = mysqli_query ($konek, "SELECT Id_pelanggaran_siswa,NIS_siswa,Kode_pelanggaran,point FROM pelanggaran_siswa");
						if($querypelanggaran == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($pelanggaran = mysqli_fetch_array ($querypelanggaran)){
							
							echo "
								<tr>
								
									<td>$pelanggaran[NIS_siswa]</td>
									<td>$pelanggaran[Kode_pelanggaran]</td>
									<td>$pelanggaran[point]</td>
									<td>
										<a href='#' class='open_modal' id='$pelanggaran[Id_pelanggaran_siswa]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"point_delete.php?Id_pelanggaran_siswa=$pelanggaran[Id_pelanggaran_siswa]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>