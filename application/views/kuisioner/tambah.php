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
    
           <form action="<?php echo base_url(); ?>kuisioner/kuisionerAdd" method="post">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Program Studi</label>
                  <input type="text" name="prodi" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <input type="text" name="jurusan" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Semester</label>
                  <input type="text" name="semester" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Pendidikan Terkahir</label>
                  <select name="pendidikan_terakhir" class="form-control" required="">
                    <option>SMA</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                  </select>
                </div>

              </div>

              <div class="col-md-4">

                <div class="form-group">
                  <label>Rekomendasi</label>
                  <select name="rekomendasi" class="form-control" required="">
                    <option>Jurusan/Prodi/Unit</option>
                    <option>Mandiri</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select name="status" class="form-control" required="">
                    <option>Dosen</option>
                    <option>Tendik</option>
                    <option>Mahasiswa</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>No Telp/Wa</label>
                  <input type="number" name="no_hp" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Status Perkawinan</label>
                  <select name="status_perkawinan" class="form-control" required="">
                    <option>Belum Menikah</option>
                    <option>Menikah</option>
                    <option>Janda</option>
                    <option>Duda</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Jenis Layanan yang dipilih</label>
                  <select name="jenis_layanan" class="form-control" required="">
                    <option>Konsultasi Anak</option>
                    <option>Konsultasi Remaja</option>
                    <option>Konsultasi Dewasa</option>
                    <option>Konsultasi Pasangan/Perkawinan</option>
                    <option>Tes Psikologi</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Bentuk Layanan yang dipilih</label>
                  <select name="bentuk_layanan" class="form-control" required="">
                    <option>Offline</option>
                    <option>Online</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jadwal konsul yang dipilih</label>
                  <select name="jadwal" class="form-control" required="">
                    <option>Senin Pagi (jam sesuai kesepakatan)</option>
                    <option>Selasa Pagi (jam sesuai kesepakatan)</option>
                    <option>Rabu Siang (jam sesuai kesepakatan)</option>
                    <option>Kamis Sore (jam sesuai kesepakatan)</option>
                    <option>Jumat Sore (jam sesuai kesepakatan)</option>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Media layanan konsultasi yang diinginkan</label>
                  <select name="media" class="form-control" required="">
                    <option>Offline (Gedung E)</option>
                    <option>Online (Setiap senin via ZOOM / Gmeet)</option>
                  </select>
                </div>

              </div>

              <div class="col-md-4">
                 

                <div class="form-group">
                  <label>1.Persoalan-persoalan atau masalah yang dihadapi sekarang ini, dan sudah berapa lama masalah itu dialami?</label>
                  <input type="text" name="soal1" placeholder="Jawaban..." class="form-control" required>
                </div>
                <div class="form-group">
                  <label>2.Apabila anda menilai masalah tersebut, kiranya terletak pada daerah:</label>
                  <select name="soal2" class="form-control" required="">
                    <option>Sedikit mengganggu</option>
                    <option>Cukup berat</option>
                    <option>Sangat berat</option>
                    <option>Gawat Sekali</option>
                    <option>Anda sama sekali tidak berdaya</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>3.Kepada siapa anda mengkonsultasikan masalah tersebut ?</label>
                  <input type="text" name="soal3" placeholder="Jawaban..." class="form-control" required>
                </div>
                <div class="form-group">
                  <label>4.Perasaan yang anda alami sekarang?</label>
                  <select name="soal4" class="form-control" required="">
                    <option>Sakit Kepala</option>
                    <option>Berdebar-debar</option>
                    <option>Gangguan pada buang air besar</option>
                    <option>Mimpi Buruk</option>
                    <option>Tegang</option>
                    <option>Murung(Sedih)</option>
                    <option>Tidak mampu untuk santai</option>
                    <option>Tidak menyukai hari libur atau cuti</option>
                    <option>Tidak mempunyai kawan</option>
                    <option>Tidak betah untuk bekerja tetap</option>
                    <option>Mengalami maslaah keuangan</option>
                    <option>Pusing</option>
                    <option>Gangguan Perut</option>
                    <option>Sangat Lelah</option>
                    <option>Tergantung pada obat tidur</option>
                    <option>Panic</option>
                    <option>Ingin bunuh diri</option>
                    <option>Pelupa</option>
                    <option>Ingin Pingsan</option>
                    <option>Pecandu minuman keras</option>
                    <option>Gemetar</option>
                    <option>tergantung pada obat</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>5.Tujuan datang kepsikolog ?</label>
                  <input type="text" name="soal5" placeholder="Jawaban..." class="form-control" required>
                </div>
                <div class="form-group">
                  <label>6.Apakah pernah datang ke psikolog/psikeater/konselor sebelumnya?</label>
                  <select name="soal6" class="form-control" required="">
                    <option>Pernah</option>
                    <option>Belum Pernah</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Hal lain yang perlu disampaikan</label>
                  <input type="text" name="hal_lain" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Informasi mengenai Layanan Tenaga Psikologis PPSDM</label>
                  <select name="ppsdm" class="form-control" required="">
                    <option>Teman</option>
                    <option>Dosen Wali</option>
                    <option>Media</option>
                  </select>
                </div>






              </div>


            


            </div>
              <input type="submit" name="kirim" value="Kirim Jawaban" class="btn btn-primary">
</form>
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->