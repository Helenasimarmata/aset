

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
 	<center><h3><i>Depression Anxiety Stress Scales (DASS 42)</i></h3></center>
              <b>Keterangan</b><br>
              0 : Tidak ada atau tidak pernah<br>
              1 : Sesuai dengan yang dialami samai tingkat tertentu, atau kadang-kadang<br>
              2 : Sering<br>
              3 : Sangat sesuai dengan yang dialami, atau hampir setiap saat
 	<div class="row">
 		<div class="container">
 	<?php 
    foreach($getDataDetail as $r){
     ?>	
 	<table width="100%" border="1">
    
    

    <tr>
      <th>No.</th>
      <th>Aspek Penilaian</th>
      <th>0</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
    </tr>
 		<?php 
   include"koneksi/conn.php";
   $no=1;
   $id = $r->id_konseling;
             $sq = mysqli_query($koneksi,"select * from pertanyaan order by id_pertanyaan asc");
             while($d = mysqli_fetch_array($sq)){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $d['nama_pertanyaan'] ?></td>
                  <td>
                    <?php 
                    $nol = mysqli_fetch_array(mysqli_query($koneksi,"select * from detail_konseling where id_pertanyaan='$d[id_pertanyaan]' and id_konseling='$id' and nilai='0'"));
                    if($nol==''){

                    }else{
                      echo "<i class='fa fa-check'></i>";
                    }
                     ?>
                  </td>
                  <td>
                    <?php 
                    $nol = mysqli_fetch_array(mysqli_query($koneksi,"select * from detail_konseling where id_pertanyaan='$d[id_pertanyaan]' and id_konseling='$id' and nilai='1'"));
                    if($nol==''){

                    }else{
                      echo "<i class='fa fa-check'></i>";
                    }
                     ?>
                  </td>
                  <td>
                    <?php 
                    $nol = mysqli_fetch_array(mysqli_query($koneksi,"select * from detail_konseling where id_pertanyaan='$d[id_pertanyaan]' and id_konseling='$id' and nilai='2'"));
                    if($nol==''){

                    }else{
                      echo "<i class='fa fa-check'></i>";
                    }
                     ?>
                  </td>
                  <td>
                    <?php 
                    $nol = mysqli_fetch_array(mysqli_query($koneksi,"select * from detail_konseling where id_pertanyaan='$d[id_pertanyaan]' and id_konseling='$id' and nilai='3'"));
                    if($nol==''){

                    }else{
                      echo "<i class='fa fa-check'></i>";
                    }
                     ?>
                  </td>
                </tr>
          <?php } ?>
 	</table>
<?php 
    }
     ?>

<br>
<br>
<h3>Hasil Perhitungan</h3>
     <table width="60%" border="1">
      <tr>
        <th>Depresi</th>
        <th>Kecemasan</th>
        <th>Stress</th>
      </tr>
       <tr>
          <td>
                    <?php 
                    error_reporting(0);
                    $id = $this->uri->segment(3);
                    $id_konseling = $v->id_konseling;
                    include"koneksi/conn.php";
                    $depresi = mysqli_fetch_array(mysqli_query($koneksi,"select sum(detail_konseling.nilai)as total_depresi from detail_konseling,pertanyaan where pertanyaan.id_pertanyaan=detail_konseling.id_pertanyaan and detail_konseling.id_konseling='$id' and pertanyaan.id_jenis='7'"));
                    echo $depresi['total_depresi']; echo "-";
                    $dep = $depresi['total_depresi'];
                    if ($dep>=28){$ket = "Sangat Parah";}elseif ($dep>=21){$ket = "Parah";}
                    elseif ($dep>=14){$ket = "Sedang";}elseif ($dep>=10){$ket = "Ringan";}elseif ($dep>=0){$ket = "Normal";}
                    echo $ket;

                     ?>
                  </td>
                  <td>
                    <?php 
                    $id_konseling = $v->id_konseling;
                    include"koneksi/conn.php";
                    $kecemasan = mysqli_fetch_array(mysqli_query($koneksi,"select sum(detail_konseling.nilai)as total_cemas from detail_konseling,pertanyaan where pertanyaan.id_pertanyaan=detail_konseling.id_pertanyaan and detail_konseling.id_konseling='$id' and pertanyaan.id_jenis='8'"));
                    echo $kecemasan['total_cemas'];echo "-";
                    $kec = $kecemasan['total_cemas'];
                    if ($kec>=20){$ket = "Sangat Parah";}elseif ($kec>=15){$ket = "Parah";}
                    elseif ($kec>=10){$ket = "Sedang";}elseif ($kec>=8){$ket = "Ringan";}elseif ($kec>=0){$ket = "Normal";}
                    echo $ket;

                     ?>
                  </td>
                  <td>
                      
                       <?php 
                    $id_konseling = $v->id_konseling;
                    include"koneksi/conn.php";
                    $stress = mysqli_fetch_array(mysqli_query($koneksi,"select sum(detail_konseling.nilai)as total_stress from detail_konseling,pertanyaan where pertanyaan.id_pertanyaan=detail_konseling.id_pertanyaan and detail_konseling.id_konseling='$id' and pertanyaan.id_jenis='9'"));
                    echo $stress['total_stress'];echo "-";
                    $str = $stress['total_stress'];
                    if ($str>=34){$ket = "Sangat Parah";}elseif ($str>=26){$ket = "Parah";}
                    elseif ($str>=19){$ket = "Sedang";}elseif ($str>=15){$ket = "Ringan";}elseif ($str>=0){$ket = "Normal";}
                    echo $ket;

                     ?>

                  </td>
       </tr>
     </table>


     <br>
     <br>

 </div>
</div>
