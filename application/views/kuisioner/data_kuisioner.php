
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data kuisioner
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></i> Home</a></li>
        <li class="active">Data kuisioner</li>
      </ol>
    </section>

     <?php if($this->session->userdata('level')==('admin')){ ?>

     <?php 
  include"koneksi/conn.php";
  mysqli_query($koneksi,"update kuisioner set baca='R'");
 ?>
 <?php }else{} ?>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Default box -->
      <div class="box box-danger">

<?php if($this->session->userdata('level')==('Mahasiswa')){ ?>
         <div class="box-header with-border"> <a href="tambahData" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data kuisioner</a></h3>
         <?php }else{} ?>


          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
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
                  <th>Email</th>
                  <th>Nama Lengkap</th>
                  <th>Jurusan</th>
                  <th>Keterangan</th>
                  <th>Action</th>
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
                  <td><?=$v->email;?></td>
                  <td><?=$v->nama_lengkap;?></td>
                  <td><?=$v->jurusan;?></td>
                  <td>
                    <?php if($this->session->userdata('level')==('admin')){ ?>

                      <?php 
                      if($v->keterangan=='Validasi'){
                        ?> 


        <a class="btn btn-success btn-sm" onclick="return confirm('Apakah anda yakin untuk menyetujui ?')" href="<?=base_url();?>kuisioner/kuisionerAcc/<?=$v->id_kuisioner;?>" title="Setujui"><i class="fa fa-check"></i> Setujui</a>
        <a class="btn btn-warning btn-sm" onclick="return confirm('Apakah anda yakin untuk menolak')" href="<?=base_url();?>kuisioner/kuisionerTolak/<?=$v->id_kuisioner;?>" title="Tolak"><i class="fa fa-close"></i> Tolak</a>
                         <?php
                      }else if($v->keterangan=='Ditolak'){
                        echo $v->keterangan;
                      }else{
                        echo $v->keterangan;
                      }
                       ?>
                      
                      



         <?php }else{

          echo $v->keterangan;
         } ?>
                    </td>
                  <td>
                  <?php if($this->session->userdata('level')==('admin')){ ?>
                 <a class="btn btn-primary btn-sm" href="<?=base_url();?>kuisioner/cetakKuisioner/<?=$v->id_kuisioner;?>" title="Cetak"><i class="fa fa-print"></i> Cetak</a>
<?php } ?>

                  <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini ?')" href="<?=base_url();?>kuisioner/kuisionerDelete/<?=$v->id_kuisioner;?>" title="Hapus Data"><i class="fa fa-remove"></i> Hapus</a>
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