
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Alat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></i> Home</a></li>
        <li class="active">Data alat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Default box -->
      <div class="box box-danger">
         <div class="box-header with-border"> <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahalat"><i class="fa fa-plus"></i> Tambah Data alat</a></h3>
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
                  <th>No Seri</th>
                  <th>Status</th>
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
                  <td><?=$v->nama_alat;?></td>
                  <td><?=$v->no_seri;?></td>
                  <td><?=$v->status_barang;?></td>
                  <td>
                    <a class="btn btn-warning btn-sm" href="#" data-toggle="modal" data-target="#editalat<?=$v->id_alat ?>" title="Detail Data"> <i class="glyphicon glyphicon-pencil"></i> Edit</a> 

                     <div class="modal fade" id="editalat<?=$v->id_alat ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Edit alat</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url(); ?>alat/alatEdit/<?=$v->id_alat?>" method="post">
                <table class="table">
                  <tr>
                    <td><label for="exampleInputEmail1">Nama Alat</label></td>
                    <td>:</td>
                    <td> <input type="text" class="form-control" id="nama" name="nama_alat" value="<?=$v->nama_alat?>" required data-fv-notempty-message="Tidak boleh kosong"></td>
                  </tr>
                  <tr>
                    <td><label for="exampleInputEmail1">No Seri</label></td>
                    <td>:</td>
                    <td> <input type="text" class="form-control" id="no_seri" name="no_seri" value="<?=$v->no_seri?>" required data-fv-notempty-message="Tidak boleh kosong"></td>
                  </tr>
                  
                </table>
                  
                
              </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Edit Data</button>
            </div>
            </form>
          </div>
        </div>
    </div>
  </div>




                  <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini ?')" href="<?=base_url();?>alat/alatDelete/<?=$v->id_alat;?>" title="Hapus Data"><i class="fa fa-remove"></i> Hapus</a>
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






     <div class="modal fade" id="tambahalat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Tambah Alat</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url(); ?>alat/alatAdd" method="post">
                  <div class="form-group">
                                <label for="exampleInputEmail1">Nama Alat</label>
                                <input type="text" class="form-control" id="nama" name="nama_alat" placeholder="Nama Alat" required data-fv-notempty-message="Tidak boleh kosong">

                  </div>
                  <div class="form-group">
                                <label for="exampleInputEmail1">No seri</label>
                                <input type="text" class="form-control" id="nama" name="no_seri" placeholder="No seri" required data-fv-notempty-message="Tidak boleh kosong">
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