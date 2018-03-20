 <!--script-nav --> 
              <script>
          $("span.menu-info").click(function(){
            $("ul.cl-effect-21").slideToggle("slow" , function(){
            });
          });
          </script>
          <!-- /script-nav -->
                    <div class="clearfix"> </div> 
       </div>
  </div>
<!--/header-->



  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url() ?>asset/back/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>asset/back/css/style.min.css" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="<?php echo base_url() ?>asset/back/css/colors/megna.css" id="theme" rel="stylesheet">
    <div class="about">
  <div class="container">
        <div class="about-top">
          <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
          <div class="about-top-info">
              <h3>REGISTER</h3>
              <div class="col-md-4 about-img">
                <img src="<?php echo base_url() ?>asset/front/images/icon-doc.png" alt=""/>
              </div>
              <div class="col-md-8 about-desc">
                <div class="col-md-6" align="center">
                       
                                <div class="col-sm-12 col-xs-12">
                                    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>front/register/tambah_aksi">
                                       <div class="control-group">
                                    <label class="control-label">No Pendaftaran <i style="color:red">*</i></label>
                                    <div class="controls">
                                   
                                        <input type="text" class="form-control" name="kode_pendaftaran" id="kode_pendaftaran" readonly="readonly" value="<?php echo $kode; ?>"/>
                                        <small><?php echo form_error('kode') ?></small>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Nama</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Enter alamat">
                                                <div class="input-group-addon"><i class="ti-home"></i></div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                                        <label class="control-label">Jenis Kelamin</label>
                                                        <div class="radio-list">
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="jenis_kelamin" id="radio1" value="L">
                                                                    <label for="radio1">Laki-laki</label>
                                                                </div>
                                                            </label>
                                                            <label class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="jenis_kelamin" id="radio2" value="P">
                                                                    <label for="radio2">Perempuan </label>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                          <div class="form-group">
                                            <label for="exampleInputuname">User Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="username" id="Username" placeholder="Username">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputpwd1">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter pwd">
                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            </div>
                                        </div>
                                       
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><i class="fa fa-check"></i> Submit</button>
                                            <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

              <div class="clearfix"> </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>