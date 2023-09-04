 <section class="content-header">
      <h1>
        Tambah Data Konseling
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></i> Home</a></li>
        <li class="active">Tambah Data Konseling</li>
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
    
           
            <div class="row">
              <center><h3>KUISIONER</h3></center>
              <center><h3><i>Depression Anxiety Stress Scales (DASS 42)</i></h3></center>
              <b>Keterangan</b>
              0 : Tidak ada atau tidak pernah<br>
              1 : Sesuai dengan yang dialami samai tingkat tertentu, atau kadang-kadang<br>
              2 : Sering<br>
              3 : Sangat sesuai dengan yang dialami, atau hampir setiap saat
              <form action="<?php echo base_url(); ?>konseling/konselingAdd" method="post">
              <table class="table" width="80%">
                <tr>
                  <th width="5%">No.</th>
                  <th width="40%">Aspek Penilaian</th>
                  <th width="20%">Nilai</th>
                  <td width="35%"></td>
                </tr>
                <?php 
                $no=1;
                foreach ($getDataPertanyaan as $p){
                  ?> 
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->nama_pertanyaan ?></td>
                    <td>
                      <input type="hidden" name="id[]" value="<?=$p->id_pertanyaan?>">
                      <select name="nilai[]" class="form-control">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </td>
                    <td></td>
                  </tr>
                   <?php
                }
                 ?>

                 <tr>
                   <td colspan="4"><input type="submit" name="kirim" value="Kirim Data" class="btn btn-success"></td>
                 </tr>
                
              </table>
              </form>


            </div>

        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->