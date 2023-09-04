
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peminjaman Alat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></i> Home</a></li>
        <li class="active">Data peminjaman</li>
      </ol>
    </section>
<?php if($this->session->userdata('level')==('admin')){ ?>

<?php 
  include"koneksi/conn.php";
  mysqli_query($koneksi,"update peminjaman set baca='R'");
 ?>
<?php }else{} ?>
    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Default box -->
      <div class="box box-danger">

<?php if($this->session->userdata('level')==('Mahasiswa')){ ?>
         <div class="box-header with-border"> <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahpeminjaman"><i class="fa fa-plus"></i> Pinjam Alat</a></h3>
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
                  <th>Nama Alat</th>
                  <th>Peminjam</th>
                  <th>Tanggal Pengajuan</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Tanggal Dikembalikan</th>
                  <th>Tujuan</th>
                  <th>Status</th>
                  <?php if($this->session->userdata('level')==('admin')){ ?>
        <th>Action</th>
         <?php }else{} ?>
                  
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
                  <td><?=$v->nama_alat;?></td>
                  <td>NIM : <?=$v->npm;?> - <?=$v->nama_mahasiswa;?></td>
                  <td><?=$v->tanggal_pengajuan;?></td>
                  <td>
                    <?php 
                    if($v->tanggal_peminjaman==''){
                      echo "Belum dipinjam";
                    }else{
                      echo $v->tanggal_peminjaman;
                    }
                     ?>
                  </td>
                  <td>
                    <?php 
                    if($v->tanggal_kembali==''){
                      echo "Belum ada";
                    }else{
                      echo $v->tanggal_kembali;
                    }
                     ?>
                  </td>
                  <td><?=$v->alasan;?></td>
                   <td>
                    <?php if($this->session->userdata('level')==('admin')){ ?>

                      <?php 
                      if($v->keterangan=='Validasi'){
                        ?> 


        <a class="btn btn-success btn-sm" onclick="return confirm('Apakah anda yakin untuk menyetujui dan meminjamkan barang ?')" href="<?=base_url();?>peminjaman/peminjamanAcc/<?=$v->id_peminjaman;?>/<?=$v->id_alat;?>" title="Setujui, dan barang dipinjamkan"><i class="fa fa-check"></i> Setujui</a>
        <a class="btn btn-warning btn-sm" onclick="return confirm('Apakah anda yakin untuk menolak dan tidak meminjamkan barang ?')" href="<?=base_url();?>peminjaman/peminjamanTolak/<?=$v->id_peminjaman;?>/<?=$v->id_alat;?>" title="Tolak, dan barang tidak dipinjamkan"><i class="fa fa-close"></i> Tolak</a>
                         <?php
                      }else if($v->keterangan=='Disetujui'){
                        ?> 
                        <a class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin barang sudah dikembalikan ?')" href="<?=base_url();?>peminjaman/peminjamanKembali/<?=$v->id_peminjaman;?>/<?=$v->id_alat;?>" title="Dikembalikan"><i class="fa fa-download"></i> Dikembalikan</a>
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
        <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini ?')" href="<?=base_url();?>peminjaman/peminjamanDelete/<?=$v->id_peminjaman;?>" title="Hapus Data"><i class="fa fa-remove"></i> Hapus</a>
         <?php }else{} ?>




                  
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






     <div class="modal fade" id="tambahpeminjaman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Tambah peminjaman</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url(); ?>peminjaman/peminjamanAdd" method="post">
                  <div class="form-group">
                                <label for="exampleInputEmail1">Alat</label>
                                <select name="alat" class="form-control" required="">
                                  <option value="">-Pilih Alat-</option>
                                  <?php 
                 
                  foreach ($getDataAlat as $a) { 
                    ?> 
                    <option value="<?php echo $a->id_alat ?>"><?php echo $a->nama_alat ?></option>
                     <?php }
                ?>
                                </select>
                  </div>
                  <div class="form-group">
                                <label for="exampleInputEmail1">Tujuan</label>
                                <input type="text" class="form-control" id="nama" name="tujuan" placeholder="Tujuan" required data-fv-notempty-message="Tidak boleh kosong">
                  </div>
                  
                
              </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
            </form>
          </div>
        </div>
    </div>
  </div>