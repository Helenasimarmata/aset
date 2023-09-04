
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mahasiswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></i> Home</a></li>
        <li class="active">Data mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Default box -->
      <div class="box box-danger">
        
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
                  <th>NIM</th>
                  <th>Nama Lengkap</th>
                  <th>Prodi</th>
                  <th>Jurusan</th>
                  <th>Jenis Kelamin</th>
                  <th>No HP</th>
                  <th>Email</th>
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
                  <td><?=$v->npm;?></td>
                  <td><?=$v->nama_mahasiswa;?></td>
                  <td><?=$v->fakultas;?></td>
                  <td><?=$v->jurusan;?></td>
                  <td><?=$v->jk;?></td>
                  <td><?=$v->no_hp;?></td>
                  <td><?=$v->email;?></td>
                  <td>
                   

                  <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini ?')" href="<?=base_url();?>mahasiswa/mahasiswaDelete/<?=$v->id_mahasiswa;?>" title="Hapus Data"><i class="fa fa-remove"></i> Hapus</a>
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






     <div class="modal fade" id="tambahmahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Tambah mahasiswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url(); ?>mahasiswa/mahasiswaAdd" method="post">
                  <div class="form-group">
                                <label for="exampleInputEmail1">Nama mahasiswa</label>
                                <input type="text" class="form-control" id="nama" name="nama_mahasiswa" placeholder="Nama mahasiswa" required data-fv-notempty-message="Tidak boleh kosong">
                  </div>
                  <div class="form-group">
                                <label for="exampleInputEmail1">Merk</label>
                                <input type="text" class="form-control" id="nama" name="merk" placeholder="Merk" required data-fv-notempty-message="Tidak boleh kosong">
                  </div>
                  <div class="form-group">
                                <label for="exampleInputEmail1">No seri</label>
                                <input type="text" class="form-control" id="nama" name="no_seri" placeholder="No seri" required data-fv-notempty-message="Tidak boleh kosong">
                  </div>
                   <div class="form-group">
                                <label for="exampleInputEmail1">Tahun</label>
                                <input type="number" class="form-control" id="nama" name="tahun" placeholder="Tahun" required data-fv-notempty-message="Tidak boleh kosong">
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