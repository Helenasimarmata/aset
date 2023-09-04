
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SISTEM INFORMASI MANAJAMEN PEMINJAMAN RUANGAN DAN ALAT 
      </h1>
      <p>DI LTPB ITERA
</p>
      <ol class="breadcrumb">
        <li><a href="#"></i> </a></li>
      </ol>
    </section>

    <!-- Main content -->
    
 <section class="content container-fluid">

    <?php if($this->session->userdata('level')==('admin')){ ?>
  <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>
              <?php 
                foreach($getDataUser as $v){
                  $id = $v->id;
                }
              echo $id ?>
            </h3>

              <p>Data User</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
              <?php 
                foreach($getDataAlat as $v){
                  $id = $v->id;
                }
              echo $id ?>
            </h3>

              <p>Data Alat</p>
            </div>
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
              <?php 
                foreach($getDataMahasiswa as $v){
                  $id = $v->id;
                }
              echo $id ?>
            </h3>

              <p>Data Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
              <?php 
                foreach($getDataPeminjaman as $v){
                  $id = $v->id;
                }
              echo $id ?>
            </h3>

              <p>Data Peminjaman</p>
            </div>
            <div class="icon">
              <i class="fa fa-upload"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


      <?php }else if($this->session->userdata('level')==('Mahasiswa')){ ?>


        <center><h3>Profil Saya</h3></center>
<?php 
                foreach($getDataProfil as $p){
                 ?> 
         

        <div class="row">
<div class="col-md-4">

<div class="box box-widget widget-user-2">

<div class="widget-user-header bg-green">
<div class="widget-user-image">
<img class="img-circle" src="<?=base_url();?>assets/dist/img/itera.png" alt="User Avatar">
</div>

<h3 class="widget-user-username"><?=$p->nama_mahasiswa?></h3>
<h5 class="widget-user-desc">NIM : <?=$p->npm?></h5>
</div>
<div class="box-footer no-padding">
<ul class="nav nav-stacked">
<li><a href="#">Program Studi <span class="pull-right badge bg-blue"><?=$p->fakultas?></span></a></li>
<li><a href="#">Jurusan <span class="pull-right badge bg-aqua"><?=$p->jurusan?></span></a></li>
<li><a href="#">Email <span class="pull-right badge bg-green"><?=$p->email?></span></a></li>
<li><a href="#">Nomor Handphone <span class="pull-right badge bg-red"><?=$p->no_hp?></span></a></li>
<li><a href="#">Jenis Kelamin <span class="pull-right badge bg-yellow"><?=$p->jk?></span></a></li>
</ul>
</div>
</div>

</div>
</div>

                  <?php
                }
                ?>
        

      <?php }else{} ?>


      
      

       


    </section>
    <!-- /.content -->