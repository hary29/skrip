  
 <?php $level= $this->session->userdata('level'); 
                                if($level==1){?>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Hospital Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Refresh</a>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>front/Log/logout">Hospital</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--row -->
                <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-user bg-megna"></i>
                                <div class="bodystate">
                                    <h4><?php echo $user;?></h4> <span class="text-muted">Total User</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-comments-smiley bg-info"></i>
                                <div class="bodystate">
                                    <h4><?php echo $anjing;?></h4> <span class="text-muted">Total Anjing</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-wallet bg-success"></i>
                                <div class="bodystate">
                                    <h4><?php echo $diagnosa;?></h4> <span class="text-muted">Total Pemeriksaan</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-wallet bg-inverse"></i>
                                <div class="bodystate">
                                    <h4><?php echo $penyakit;?></h4> <span class="text-muted">Total Penyakit</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"></i> Jumlah User Per Level</small> User</h3>
                            <div class="stats-row">
                               <?php foreach($perlevel as $list) { ?>
                                      <div class="stat-item">
                          <h6><?php echo $list['level']; ?></h6>
                            <b><?php echo $list['total']; ?></b></div>
                            <?php } ?>
                            </div>
                            <!-- <div id="sparkline8" class="minus-mar"></div> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger">Hasil Diagnosa Sistem</small>Hasil Diagnosa</h3>
                            <div class="stats-row">
                              
                                    <?php foreach($perpenyakit as $list) { ?>
                                      <div class="stat-item">
                          <h6><?php echo $list['nama_penyakit']; ?></h6>
                            <b><?php echo $list['total']; ?></b></div>
                            <?php } ?>
                               
                            </div>
                            <!-- <div id="sparkline9" class="minus-mar"></div> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success">Jumlah gejala per penyakit</small>Jumlah Gejala</h3>
                            <div class="stats-row">
                                 <?php foreach($bobotperpenyakit as $list) { ?>
                                      <div class="stat-item">
                          <h6><?php echo $list['nama_penyakit']; ?></h6>
                            <b><?php echo $list['total']; ?></b></div>
                            <?php } ?>
                            </div>
                            <!-- <div id="sparkline10" class="minus-mar"></div> -->
                        </div>
                    </div>
                </div>
                <?php $user=$this->session->userdata('username');
                $level=$this->session->userdata('level');
                if ( $level==1) {
                    $nama="ADMIN";}
                    else
                        {
                          $nama="USER";}  ?>
                 <marquee><b>SELAMAT DATANG DI SISTEM PAKAR ANJING <?php echo $user ?> ANDA LOGIN SEBAGAI <?php echo $nama ?> </b></marquee>
                
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme working">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                           
                        </div>
                    </div>
                </div></div>
                <!-- /.right-sidebar -->
                <?php } else { ?>
                <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Hospital Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Refresh</a>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>front/Log/logout">Hospital</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--row -->
                <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
                <div class="row">
                    <!-- <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-user bg-megna"></i>
                                <div class="bodystate">
                                    <h4><?php echo $user;?></h4> <span class="text-muted">Total User</span> </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-comments-smiley bg-info"></i>
                                <div class="bodystate">
                                    <h4><?php echo $anjing;?></h4> <span class="text-muted">Total Anjing</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-wallet bg-success"></i>
                                <div class="bodystate">
                                    <h4><?php echo $diagnosa;?></h4> <span class="text-muted">Total Pemeriksaan</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-wallet bg-inverse"></i>
                                <div class="bodystate">
                                    <h4><?php echo $penyakit;?></h4> <span class="text-muted">Total Penyakit</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="icon-chart bg-megna"></i>
                                <div class="bodystate">
                                    <h4><?php echo $gejala;?></h4> <span class="text-muted">Total Gejala</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row -->
                <!-- .row -->
                <!-- <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"></i> Jumlah User Per Level</small> User</h3>
                            <div class="stats-row">
                               <?php foreach($perlevel as $list) { ?>
                                      <div class="stat-item">
                          <h6><?php echo $list['level']; ?></h6>
                            <b><?php echo $list['total']; ?></b></div>
                            <?php } ?>
                            </div>
                            <div id="sparkline8" class="minus-mar"></div>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger">Hasil Diagnosa Sistem</small>Hasil Diagnosa</h3>
                            <div class="stats-row">
                              
                                    <?php foreach($perpenyakit as $list) { ?>
                                      <div class="stat-item">
                          <h6><?php echo $list['nama_penyakit']; ?></h6>
                            <b><?php echo $list['total']; ?></b></div>
                            <?php } ?>
                               
                            </div>
                            <!-- <div id="sparkline9" class="minus-mar"></div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success">Jumlah gejala per penyakit</small>Jumlah Gejala</h3>
                            <div class="stats-row">
                                 <?php foreach($bobotperpenyakit as $list) { ?>
                                      <div class="stat-item">
                          <h6><?php echo $list['nama_penyakit']; ?></h6>
                            <b><?php echo $list['total']; ?></b></div>
                            <?php } ?>
                            </div>
                            <!-- <div id="sparkline10" class="minus-mar"></div> -->
                        </div>
                    </div>
                </div>
                <?php $user=$this->session->userdata('username');
                $level=$this->session->userdata('level');
                if ( $level==1) {
                    $nama="ADMIN";}
                    else
                        {
                          $nama="USER";}  ?>
                 <marquee><b>SELAMAT DATANG DI SISTEM PAKAR ANJING <?php echo $user ?> ANDA LOGIN SEBAGAI <?php echo $nama ?> </b></marquee>
                
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme working">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                           
                        </div>
                    </div>
                </div></div> <?php } ?>

            
