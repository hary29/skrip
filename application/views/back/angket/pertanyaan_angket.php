
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Menu Awal</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Refresh</a>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>front/Log/logout">Home</a></li>
                            <li class="active">Angket</li>
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
            <div class="control-group" align="center">
            <h2>ANGKET</h2></div>
                <div class="col-sm-12 col-xs-12">
                                    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>back/register/tambah_user">
                                         <div class="form-group">
                                                       <div class="control-group">
                                                         <?php $user=$this->session->userdata('username');
                $level=$this->session->userdata('level');
                if ( $level==1) {
                    $nama="ADMIN";}
                    else
                        {
                          $nama="USER";}  ?>
                 <marquee><b>SELAMAT DATANG DI SISTEM PAKAR ANJING <?php echo $user ?> ANDA LOGIN SEBAGAI <?php echo $nama ?> </b></marquee>

            <label class="control-label">pertanyaan</label>
              <div class="controls">

              
                  <?php 
              $no = 0;$i=1;
            foreach($pertanyaan as $list1) { ?>
            <div class="control-group"> 
            <label class="control-label">
                    <input type="hidden" name="id_angket<?php echo $i; ?>" id="id_angket" class="form-control" value="<?php echo $list1['id_angket']; ?>" />

               
            <?php echo ++$no; echo"."; ?>
            <?php echo $list1['pertanyaan']; ?><br></label> </div>
            <?php 
            foreach($skala as $list) { ?>
             
             
             <div class="radio-inline">
                  <input type="radio" name="id_skala<?php echo $i; ?>" value="<?php echo $list['id_skala']; ?>" />
                  <?php echo $list['skala']; ?>   </div>              
                  
           <?php }  $i++; ?>
                <?php echo $this->session->flashdata('pesan'); ?>
                               
                  <?php }?>
               
              </div></div></div>
             <div class="text-center">
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><i class="fa fa-check"></i> Submit</button>
                                            <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                        </div>
                                    </form></div></div></div>
               
                
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
                

            
