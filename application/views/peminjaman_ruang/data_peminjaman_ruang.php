
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peminjaman Ruangan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></i> Home</a></li>
        <li class="active">Data peminjaman</li>
      </ol>
    </section>
    <?php if($this->session->userdata('level')==('admin')){ ?>
    <?php 
  include"koneksi/conn.php";
  mysqli_query($koneksi,"update peminjaman_ruang set baca='R'");
 ?>
 <?php }else{} ?>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Default box -->
      <div class="box box-danger">

<?php if($this->session->userdata('level')==('Mahasiswa')){ ?>
         <div class="box-header with-border"> <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahpeminjaman"><i class="fa fa-plus"></i> Pinjam Ruang</a></h3>
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
                  <th>Peminjam</th>
                  <th>Nama Ruangan</th>
                  <th>Tanggal Digunakan</th>
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
                  foreach ($getDataRuang as $v) { 
                  $no++;
                ?>
                <tr>
                  <td><?=$no;?></td>
                  <td>NIM : <?=$v->npm;?> - <?=$v->nama_mahasiswa;?></td>
                  <td>
                    
                    <?php 
                    if($v->ruangan==''){
                      echo "Belum ada";
                    }else{
                      echo $v->ruangan;
                    }
                     ?>

                  </td>
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
                  <td><?=$v->tujuan;?></td>
                   <td>
                    <?php if($this->session->userdata('level')==('admin')){ ?>

                      <?php 
                      if($v->keterangan=='Validasi'){
                        ?> 


        <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahruang<?=$v->id_peminjaman?>" href="#" title="Setujui, dan ruangan dipinjamkan"><i class="fa fa-check"></i> Setujui</a>

         <div class="modal fade" id="tambahruang<?=$v->id_peminjaman?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Peminjaman Ruangan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?=base_url();?>peminjaman_ruang/peminjamanRuangAcc/<?=$v->id_peminjaman;?>" method="post">
                 
                 <input type="hidden" name="id_peminjaman" value="<?=$v->id_peminjaman?>">
                  <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ruangan</label>
                                <input type="text" class="form-control" id="nama" name="ruangan" placeholder="Ruangan" required data-fv-notempty-message="Tidak boleh kosong">
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





        <a class="btn btn-warning btn-sm" onclick="return confirm('Apakah anda yakin untuk menolak dan tidak meminjamkan ruangan ?')" href="<?=base_url();?>peminjaman_ruang/peminjamanRuangTolak/<?=$v->id_peminjaman;?>" title="Tolak, dan Ruangan tidak dipinjamkan"><i class="fa fa-close"></i> Tolak</a>
                         <?php
                      }else if($v->keterangan=='Disetujui'){
                        ?> 
                        <a class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin kunci ruangan sudah dikembalikan ?')" href="<?=base_url();?>peminjaman_ruang/peminjamanRuangKembali/<?=$v->id_peminjaman;?>" title="Dikembalikan"><i class="fa fa-download"></i> Dikembalikan</a>
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
        <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini ?')" href="<?=base_url();?>peminjaman_ruang/peminjamanRuangDelete/<?=$v->id_peminjaman;?>" title="Hapus Data"><i class="fa fa-remove"></i> Hapus</a>
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
              <form action="<?php echo base_url(); ?>peminjaman_ruang/peminjamanRuangAdd" method="post">

                 <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Digunakan</label>
                                <input type="date" class="form-control" id="nama" name="tanggal"  required data-fv-notempty-message="Tidak boleh kosong">
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