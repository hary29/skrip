<link rel="stylesheet" href="<?php echo base_url() ?>asset/back/hiden-form/style.css" />
    <script src="<?php echo base_url() ?>asset/back/hiden-form/jquery.js"></script>
    <script>
      $(document).ready(function(){
        $("#form-input").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
            $(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
              if ($("input[name='anjing']:checked").val() == "0" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
                  $("#form-input").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
              } else {
                  $("#form-input").slideUp("fast");  //Efek Slide Up (Menghilangkan Form Input)
              }
               if ($("input[name='anjing']:checked").val() == "1" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
                  $("#form-input1").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
              } else {
                  $("#form-input1").slideUp("fast");  //Efek Slide Up (Menghilangkan Form Input)
              }

          });
        });
    </script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Pemeriksaan Anjing</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href=""  class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Refresh</a>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>back/home_back">Dashboard</a></li>
                            <li><a href="<?php echo base_url() ?>back/pemeriksaan">pemeriksaan</a></li>
                            <!-- <li class="active"><a href="<?php echo base_url() ?>back/register">Register Anjing</a></li> -->
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
                            <h3 class="box-title m-b-0" align="center">pemeriksaan Anjing</h3>
                            <p class="text-muted m-b-30 font-13" align="center"> Form pemeriksaan </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                      <div class="form-group">
                                                        <label class="control-label">Apakah anda akan melakukan pemeriksaan dengan anjing baru ?</label>
                                                        <div class="radio-list">
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="anjing" id="radio1" value="1"  class="detail" checked="checked">
                                                                    <label for="radio1">ya</label>
                                                                </div>
                                                            </label>
                                                            <label class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="anjing" id="radio2" value="0"  class="detail">
                                                                    <label for="radio2">tidak </label>
                                                                </div>

                                                            </label>
                                                        </div>
                                                        <div id="form-input">
                                                            <div class="form-group">
                                                        <label class="control-label">Pilih Anjingmu</label>
                                                        <select class="form-control" name="id_anjing" >
                                                             <?php foreach($data_anjing as $row_nama_anjing) { ?>
                    <option value="<?php echo $row_nama_anjing->id_anjing?>"><?php echo $row_nama_anjing->nama_anjing?></option>
                    <?php } ?>
                                                        </select> <span class="help-block"> pilihlah anjing untuk melakukan pemeriksaan </span> </div>
                                                </div>
                                                        </div>
                                                     <div id="form-input1">
                                                          <form class="form-horizontal" method="post" action="<?php echo base_url() ?>back/register/tambah_anjing_pemeriksaan">
                                         <div class="control-group">
                                    <label class="control-label">No Registrasi Anjing <i style="color:red">*</i></label>
                                    <div class="controls">
                                   
                                        <input type="text" name="kode_anjing" id="kode_anjing" readonly="readonly" value="<?php echo $kode; ?>"/>
                                        <small><?php echo form_error('kode') ?></small>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <label for="nama_anjing">nama anjing</label>
                                            <input type="text" class="form-control" name="nama_anjing" id="nama_anjing" placeholder="Enter Nama Anjing"> </div>
                                            <?php $level= $this->session->userdata('level'); 
                                if($level==1){?>
                                              <div class="form-group">
                                                        <label class="control-label">Pemilik</label>
                                                        <select class="form-control" name="id_user" >
                                                             <?php foreach($data_user as $row_nama_user) { ?>
                    <option value="<?php echo $row_nama_user->id_user?>"><?php echo $row_nama_user->nama?></option>
                    <?php } ?>
                                                        </select> <span class="help-block"> Select your user </span> </div>
                                                </div>
                                       <?php } ?>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </form>
                                                     </div>
                                                    </div>
                                                     
                                </div>
                            </div>
                        </div>
                    </div></div></div></div></div>