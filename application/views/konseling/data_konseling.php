
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Konseling
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"></i> Home</a></li>
    <li class="active">Data Konseling</li>
  </ol>
</section>
   

<!-- Main content -->
<section class="content container-fluid">

  <!-- Default box -->
  <div class="box box-danger">

    <?php if($this->session->userdata('level')==('Mahasiswa')){ ?>
      <div class="box-header with-border"> 
        <a href="<?php echo base_url() ?>konseling/tambahData" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data konseling</a>
      </div>
    <?php } ?>


    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i>
      </button>
      <!--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>-->
    </div>
  </div>
    <div class="box-body">
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Nama Mahasiswa</th>
              <th>Tanggal Konseling</th>
              <th>Jurusan</th>
              <?php if($this->session->userdata('level')==('admin')){ ?>
                <th>Depresi</th>
                <th>Kecemasan</th>
                <th>Stress</th>
                <th>Action</th>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
            <?php 
              $no=0;
              foreach ($getData as $v) { 
              $no++;
            ?>
            <tr>
              <td><?=$no;?></td>
              <td><?=$v->npm;?></td>
              <td><?=$v->nama_mahasiswa;?></td>
              <td><?=$v->tanggal_konsul;?></td>
              <td><?=$v->jurusan;?></td>
              <?php if($this->session->userdata('level')==('admin')){ ?>
                <td>
                  <?php 
                    error_reporting(0);
                    $id_konseling = $v->id_konseling;
                    include"koneksi/conn.php";
                    $depresi = mysqli_fetch_array(mysqli_query($koneksi,"select sum(detail_konseling.nilai)as total_depresi from detail_konseling,pertanyaan where pertanyaan.id_pertanyaan=detail_konseling.id_pertanyaan and detail_konseling.id_konseling='$id_konseling' and pertanyaan.id_jenis='7'"));
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
                    $kecemasan = mysqli_fetch_array(mysqli_query($koneksi,"select sum(detail_konseling.nilai)as total_cemas from detail_konseling,pertanyaan where pertanyaan.id_pertanyaan=detail_konseling.id_pertanyaan and detail_konseling.id_konseling='$id_konseling' and pertanyaan.id_jenis='8'"));
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
                    $stress = mysqli_fetch_array(mysqli_query($koneksi,"select sum(detail_konseling.nilai)as total_stress from detail_konseling,pertanyaan where pertanyaan.id_pertanyaan=detail_konseling.id_pertanyaan and detail_konseling.id_konseling='$id_konseling' and pertanyaan.id_jenis='9'"));
                    echo $stress['total_stress'];echo "-";
                    $str = $stress['total_stress'];
                    if ($str>=34){$ket = "Sangat Parah";}elseif ($str>=26){$ket = "Parah";}
                    elseif ($str>=19){$ket = "Sedang";}elseif ($str>=15){$ket = "Ringan";}elseif ($str>=0){$ket = "Normal";}
                    echo $ket;
                  ?>
                </td>
              <?php } ?>
              
              <td>
                <?php if($this->session->userdata('level')==('admin')){ ?>
                <a class="btn btn-primary btn-sm" href="<?=base_url();?>konseling/cetakKonseling/<?=$v->id_konseling;?>" title="Cetak"><i class="fa fa-print"></i> Cetak</a>
<?php } ?>

              <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini ?')" href="<?=base_url();?>konseling/konselingDelete/<?=$v->id_konseling;?>" title="Hapus Data"><i class="fa fa-remove"></i> Hapus</a>
              </td>
            </tr>

            <?php } ?>
            
            </tbody>
          </table>
        </div>
    </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->