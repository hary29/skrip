
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Data Angket</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href=""  class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Refresh</a>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>front/Log/logout">Hospital</a></li>
                            <li class="active">Edit Angket</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php $id=$this->session->userdata('id');?>
                <?php 
                foreach($angket as $list) { ?>
                
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="white-box">
                             <form class="form-horizontal" action="<?php echo base_url(). 'back/angket/edit_aksi'; ?>" method="POST">

                              <input type="hidden" name="id_angket" required="" value="<?php echo $list['id_angket']; ?>" readonly="readonly" class="form-control" />

                              <!-- <div class="form-group">
                              <label for="kel_angket" class="col-sm-4">Kelompok Angket</label>
                              <div class="col-sm-4">
                              <input type="text" name="kel_angket" required="" value="<?php echo $list['kel_angket']; ?>" readonly="readonly" class="form-control" />
                              </div>
                              </div> -->
                              <div class="form-group">
                              <label for="kel_angket" class="col-sm-4">Kelompok Angket</label>
                              <div class="col-sm-4">
                                  <input type="text" name="kel_angket" class="form-control" value="<?php echo $list['kel_angket']; ?>" />
                              </div>
                              </div>


                              <div class="form-group">
                              <label for="Pertanyaan" class="col-sm-4">Pertanyaan</label>
                              <div class="col-sm-4">
                                  <input type="text" name="pertanyaan" class="form-control" value="<?php echo $list['pertanyaan']; ?>" />
                              </div>
                              </div>

                               <div class="form-group">
                              <label for="" class="col-sm-4">Nilai Bobot</label>
                              <div class="col-sm-4">
                                  <input type="number" placeholder="1.0" step="0.01" min="0" max="1" name="nilai_bobot" class="form-control" value="<?php echo $list['nilai_bobot']; ?>" />
                              </div>
                              </div>
                              <?php } ?>
                              
                              <button type="submit" class="btn btn-primary">Simpan</button>&nbsp &nbsp
                              <a href="<?php echo base_url(); ?>back/penyakit" label class="btn btn-primary">Kembali</a><br>
                              
                              </form>
                        </div>
                    </div>
                    </div>
                </div>

                
               </div>

                <!-- /.right-sidebar -->
            
