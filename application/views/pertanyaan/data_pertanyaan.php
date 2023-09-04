
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data pertanyaan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></i> Home</a></li>
        <li class="active">Data pertanyaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Default box -->
      <div class="box box-danger">
         <div class="box-header with-border"> <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahpertanyaan"><i class="fa fa-plus"></i> Tambah Data pertanyaan</a></h3>
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
                  <th>Jenis</th>
                  <th>Nama pertanyaan</th>
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
                   <td><?=$v->nama_jenis;?></td>
                  <td><?=$v->nama_pertanyaan;?></td>
                  <td>
                    <a class="btn btn-warning btn-sm" href="#" data-toggle="modal" data-target="#editpertanyaan<?=$v->id_pertanyaan ?>" title="Detail Data"> <i class="glyphicon glyphicon-pencil"></i> Edit</a> 

                     <div class="modal fade" id="editpertanyaan<?=$v->id_pertanyaan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Edit pertanyaan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url(); ?>pertanyaan/pertanyaanEdit/<?=$v->id_pertanyaan?>" method="post">
                <table class="table">
                  <tr>
                    <td>Jenis</td>
                    <td>:</td>
                    <td>
                      <select name="jenis" class="form-control" required="">
                                  <?php 
                                  foreach($getDataJenis as $t){
                                    ?> <option value="<?php echo $t->id_jenis ?>" 
                                      <?php if($t->id_jenis==$v->id_jenis){echo"selected";}else{} ?>
                                      ><?php echo $t->nama_jenis ?></option> <?php
                                  }
                                   ?>
                                  
                                </select>
                    </td>
                  </tr>
                  <tr>
                    <td><label for="exampleInputEmail1">Nama pertanyaan</label></td>
                    <td>:</td>
                    <td> <input type="text" class="form-control" id="nama" name="nama_pertanyaan" value="<?=$v->nama_pertanyaan?>" required data-fv-notempty-message="Tidak boleh kosong"></td>
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




                  <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini ?')" href="<?=base_url();?>pertanyaan/pertanyaanDelete/<?=$v->id_pertanyaan;?>" title="Hapus Data"><i class="fa fa-remove"></i> Hapus</a>
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






     <div class="modal fade" id="tambahpertanyaan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Tambah pertanyaan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url(); ?>pertanyaan/pertanyaanAdd" method="post">
                  <div class="form-group">
                                <label for="exampleInputEmail1">Jenis</label>
                                <select name="jenis" class="form-control" required="">
                                  <option value="">-Pilih Jenis-</option>
                                  <?php 
                                  foreach($getDataJenis as $t){
                                    ?> <option value="<?php echo $t->id_jenis ?>"><?php echo $t->nama_jenis ?></option> <?php
                                  }
                                   ?>
                                  
                                </select>
                  </div>
                  <div class="form-group">
                                <label for="exampleInputEmail1">Nama pertanyaan</label>
                                <input type="text" class="form-control" id="nama" name="nama_pertanyaan" placeholder="Nama pertanyaan" required data-fv-notempty-message="Tidak boleh kosong">
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