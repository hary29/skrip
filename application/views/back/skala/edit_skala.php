<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Skala</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Refresh</a>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>front/Log/logout">Home</a></li>
                            <li><a href="#">Skala</a></li>
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
                            <h3 class="box-title m-b-0" align="center">Edit Skala</h3>
                            <p class="text-muted m-b-30 font-13" align="center"> Form Edit Skala </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php 
                            foreach($data_skala as $list) { ?>
                                    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>back/skala/edit_aksi">
                                        <div class="control-group">
                                    <input type="hidden" name="id_skala" class="form-control" value="<?php echo $list['id_skala']; ?>" />
                                    </div>
                                        <div class="form-group">
                                            <label for="skala">Nama Skala</label>
                                            <input type="text" class="form-control" name="skala" id="skala" placeholder="Enter Nama skala" value="<?php echo $list['skala']; ?>"> </div>

                               <div class="form-group">
                              <label for="nilai_bobot">Nilai Bobot</label>
                              
                                  <input type="number" placeholder="1.0" step="0.01" min="0" max="1" name="bobot_skala" class="form-control" value="<?php echo $list['bobot_skala']; ?>" />
                              </div>
                              
                                   <?php }?>
                                       
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                           <script src="<?php echo base_url() ?>asset/back/jquery-1.11.0.js"></script>


<!--file include Bootstrap js dan datepickerbootstrap.js-->

<script src="<?php echo base_url(); ?>asset/back/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>asset/back/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>asset/back/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 
                    </div></div></div></div></div>
                  