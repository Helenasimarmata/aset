<?php 
                  $no=0;
                  foreach ($getDataKuisioner as $v) { 
                  $no++;
                ?>

 <table width="100%">
 	<tr>
 		<td width="20%"><img src="<?=base_url();?>assets/dist/img/itera.png" width="80" alt="User Image"></td>
 		<td width="80%"><h3><center>INSTITUT TEKNOLOGI SUMATERA</center></h3>
 			<center>
 			Jalan Terusan Ryacudu, Desa Way Hui, Kecamatan Jatiagung, Lampung Selatan 35365</center>
 		</td>
 	</tr>
 </table>
 <br>
 <img src="<?=base_url();?>assets/dist/img/garis3.jpg" alt="User Image">

 <h4><b>HASIL KUISIONER</h4>
 	<div class="row">
 		<div class="container">
 			<div class="col-md-6">
 	<table width="100%" border="0">
 		<tr>
 			<td>Nama Lengkap</td>
 			<td>:</td>
 			<td><?=$v->nama_lengkap ?></td>
 		</tr>
 		<tr>
 			<td>Tempat, Tanggal Lahir</td>
 			<td>:</td>
 			<td><?=$v->tempat_lahir ?>, <?=$v->tgl_lahir ?></td>
 		</tr>
 		<tr>
 			<td>Jurusan</td>
 			<td>:</td>
 			<td><?=$v->jurusan ?></td>
 		</tr>
 		<tr>
 			<td>Program Studi</td>
 			<td>:</td>
 			<td><?=$v->prodi ?></td>
 		</tr>
 		<tr>
 			<td>Semester</td>
 			<td>:</td>
 			<td><?=$v->semester ?></td>
 		</tr>
 		<tr>
 			<td>Pendidikan Terakhir</td>
 			<td>:</td>
 			<td><?=$v->pendidikan_terakhir ?></td>
 		</tr>
 		<tr>
 			<td>Rekomendasi</td>
 			<td>:</td>
 			<td><?=$v->rekomendasi ?></td>
 		</tr>
 		<tr>
 			<td>Status</td>
 			<td>:</td>
 			<td><?=$v->status ?></td>
 		</tr>
 		<tr>
 			<td>Nomor Telepon/WA</td>
 			<td>:</td>
 			<td><?=$v->no_hp ?></td>
 		</tr>
 		<tr>
 			<td>Status Perkawinan</td>
 			<td>:</td>
 			<td><?=$v->status_perkawinan ?></td>
 		</tr>
 		<tr>
 			<td>Alamat</td>
 			<td>:</td>
 			<td><?=$v->alamat ?></td>
 		</tr>
 	</table>
 	<br>

 	<table width="100%" border="1">
 		<tr>
 			<td colspan="4"><center>LAYANAN</center></td>
 		</tr>
 		<tr>
 			<td colspan="2">Jenis Layanan yang dipilih</td>
 			<td>:</td>
 			<td><?=$v->jenis_layanan ?></td>
 		</tr>
 		<tr>
 			<td colspan="2">Bentuk Layanan yang dipilih</td>
 			<td>:</td>
 			<td><?=$v->bentuk_layanan ?></td>
 		</tr>
 		<tr>
 			<td>1.</td>
 			<td>Persoalan-persoalan atau masalah yang dihadapi sekarang ini, dan sudah berapa lama masalah itu dialami?</td>
 			<td>:</td>
 			<td><?php echo $v->soal1 ?></td>
 		</tr>
 		<tr>
 			<td>2.</td>
 			<td>Apabila anda menilai masalah tersebut, kiranya terletak pada daerah?</td>
 			<td>:</td>
 			<td><?php echo $v->soal2 ?></td>
 		</tr>
 		<tr>
 			<td>3.</td>
 			<td>Kepada siapa anda mengkonsultasikan masalah tersebut?</td>
 			<td>:</td>
 			<td><?php echo $v->soal3 ?></td>
 		</tr>
 		<tr>
 			<td>4.</td>
 			<td>Perasaan yang anda alami sekarang?</td>
 			<td>:</td>
 			<td><?php echo $v->soal4 ?></td>
 		</tr>
 		<tr>
 			<td>5.</td>
 			<td>Tujuan datang kepsikolog?</td>
 			<td>:</td>
 			<td><?php echo $v->soal5 ?></td>
 		</tr>
 		<tr>
 			<td>6.</td>
 			<td>Apakah pernah datang ke psikolog/psikeater/konselor sebelumnya?</td>
 			<td>:</td>
 			<td><?php echo $v->soal6 ?></td>
 		</tr>
 	</table>
 	<br>
 	<table width="100%" border="0">
 		<tr>
 			<td>Jadwal konsul yang dipilih</td>
 			<td>:</td>
 			<td><?=$v->jadwal ?></td>
 		</tr>
 		<tr>
 			<td>JHal lain yang perlu disampaikan</td>
 			<td>:</td>
 			<td><?=$v->hal_lain ?></td>
 		</tr>
 		<tr>
 			<td>Informasi mengenai layanan tenaga Psikologis PPSDM</td>
 			<td>:</td>
 			<td><?=$v->jadwal ?></td>
 		</tr>
 		<tr>
 			<td>Media layanan konsultasi yang diinginkan</td>
 			<td>:</td>
 			<td><?=$v->media ?></td>
 		</tr>
 	</table>
 </div>

 </div>
</div>
 <?php } ?>