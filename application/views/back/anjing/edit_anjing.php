<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Anjing</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Refresh</a>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>back/home_back">Dashboard</a></li>
                            <li><a href="#">Anjing</a></li>
                           <!--  <li class="active"><a href="<?php echo base_url() ?>back/anjing/edit">Edit Anjing</a></li> -->
                        </ol>
                    </div>
                    <!-- /.col-lg-12 

<!-- /.row -->
</div>
 <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0" align="center">Edit Anjing</h3>
                            <p class="text-muted m-b-30 font-13" align="center"> Form Edit Anjing </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php 
                            foreach($data_anjing as $list) { ?>
                                    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>back/anjing/edit_aksi">
                                        <div class="control-group">
                                    <input type="hidden" name="id_anjing" class="form-control" value="<?php echo $list['id_anjing']; ?>" />
                                    </div>
                                         <div class="control-group">
                                    <label class="control-label">No Registrasi Anjing <i style="color:red">*</i></label>
                                    <div class="controls">
                                   
                                        <input type="text" name="kode_anjing" id="kode_anjing" readonly="readonly" value="<?php echo $list['kode_anjing']; ?>"/>
                                        <small><?php echo form_error('kode') ?></small>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <label for="nama_anjing">nama anjing</label>
                                            <input type="text" class="form-control" name="nama_anjing" id="nama_anjing" placeholder="Enter Nama Anjing" value="<?php echo $list['nama_anjing']; ?>"> </div>
                                            <?php $level= $this->session->userdata('level'); 
                                if($level==1){?>
                                              <div class="form-group">
                                                        <label class="control-label">Pemilik</label>
                                                        <select class="form-control" name="id_user" >
                                                            <?php 
                    foreach($data_user as $row_user) { ?>
                    <option value="<?php echo $row_user->id_user?>"<?php if($list['id_user'] == ($row_user->id_user)){ echo 'selected'; } ?>><?php echo $row_user->nama?></option>
                    <?php } ?>
                                                        </select> <span class="help-block"> Select your user </span> </div>
                                                </div>
                                       <?php } }?>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div></div></div></div></div>