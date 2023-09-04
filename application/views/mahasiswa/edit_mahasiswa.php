
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profil Mahasiswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></i> Home</a></li>
        <li class="active">Edit Profil</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Default box -->
      <div class="box box-danger">
        <?php 
        foreach($getDataMahasiswa as $d){
         ?>
        
        
        </div>
        <div class="box-body">
           <form method="post" accept-charset="utf-8" action="<?=base_url();?>mahasiswa/update" role="form">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="npm" required="" value="<?=$d->npm?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" value="<?=$d->nama_mahasiswa?>" class="form-control" placeholder="Nama Lengkap" name="nama_mahasiswa" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
     
    
      <div class="form-group has-feedback">
        <input type="text" value="<?=$d->fakultas?>" class="form-control" placeholder="Program Studi" name="fakultas" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" value="<?=$d->jurusan?>" class="form-control" placeholder="Jurusan" name="jurusan" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" value="<?=$d->email?>" class="form-control" placeholder="Email" name="email" required="">
        <span class="glyphicon  glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="number" value="<?=$d->no_hp?>" class="form-control" placeholder="Nomor Handphone" name="no_hp" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Jenis Kelamin</label>
        <input type="radio" name="jk" value="Laki-laki" <?php if($d->jk=='Laki-laki'){echo"checked";}else{} ?>> Laki-laki
        <input type="radio" name="jk" value="Perempuan" <?php if($d->jk=='Perempuan'){echo"checked";}else{} ?>> Perempuan
      </div>
      <div class="row">
       
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Edit Sekarang</button>
        </div>
        <!-- /.col -->
      </div>
    <?php } ?>
    </form>
           
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->




