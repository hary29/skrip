 <!-- Left navbar-header -->
 <?php $level= $this->session->userdata('level'); 
if($level==1){?>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                        <?php $user=$this->session->userdata('username');?>
                    </li>
                    <li class="user-pro">
                        <a href="<?php echo base_url() ?>back/home_back" class="waves-effect"><img src="<?php echo base_url() ?>asset/back/plugins/images/users/user.png" alt="user-img" class="img-circle"> <span class="hide-menu"><?php echo $user ?><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url() ?>back/user"><i class="ti-user"></i> My Profile</a></li>
                          <!--   <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li> -->
                            <li><a href="<?php echo base_url() ?>back/user/edit"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="<?php echo base_url() ?>front/Log/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="<?php echo base_url() ?>back/home_back" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                   <li> <a href="" class="waves-effect"><i class=" ti-comments-smiley p-r-10"></i> <span class="hide-menu"> Register <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/register/register_user">Register User</a> </li>
                            <li> <a href="<?php echo base_url() ?>back/register">Register Anjing</a> </li>
                        </ul>
                    </li>
                     <li> <a href="" class="waves-effect"><i class=" icon-note p-r-10"></i> <span class="hide-menu"> pemeriksaan <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <!-- <li> <a href="<?php echo base_url() ?>back/register/register_user">Register User</a> </li> -->
                            <li> <a href="<?php echo base_url() ?>back/pemeriksaan">pemeriksaan Anjing</a> </li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Manage</li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Metode <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/bayes">Batasan bayes</a> </li>
                            <!-- <li> <a href="book-appointment.html">Book Appointment</a> </li> -->
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> User <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/user/semua_user">Semua user</a> </li>
                            <li> <a href="<?php echo base_url() ?>back/register/register_user">Tambah user</a> </li>
                            <!-- <li> <a href="edit-doctor.html">Edit user</a> </li> -->
                            <li> <a href="<?php echo base_url() ?>back/user">User Profile</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-comments-smiley p-r-10"></i> <span class="hide-menu"> Anjing <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/anjing">Semua Anjing</a> </li>
                           <!--  <li> <a href="add-patient.html">Tambah </a> </li> -->
                            <!-- <li> <a href="edit-patient.html">Edit Patient</a> </li>
                            <li> <a href="patient-profile.html">Patient Profile</a> </li> -->
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-pulse p-r-10"></i> <span class="hide-menu"> Penyakit <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/penyakit">Semua Penyakit</a> </li>
                            <li> <a href="<?php echo base_url() ?>back/penyakit/tambah">Tambah Penyakit</a> </li>
                            <!-- <li> <a href="edit-patient.html">Edit Patient</a> </li>
                            <li> <a href="patient-profile.html">Patient Profile</a> </li> -->
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Gejala <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/gejala">semua Gejala</a></li>
                            <li> <a href="<?php echo base_url() ?>back/gejala/tambah">Tambah Gejala</a></li>
                            <!-- <li> <a href="sales-report.html">Sales Report</a></li> -->
                        </ul>
                    </li>
                     <li> <a href="javascript:void(0);" class="waves-effect"><i class=" ti-shopping-cart-full p-r-10"></i> <span class="hide-menu"> Bobot <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/bobot">Semua Bobot</a></li>
                            <li> <a href="<?php echo base_url() ?>back/bobot/tambah">Tambah Bobot</a></li>
                            <!-- <li> <a href="sales-report.html">Sales Report</a></li> -->
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Hasil Pemeriksaan<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/pemeriksaan/view_hasil">Hasil periksa</a></li>
                           <!--  <li> <a href="add-payments.html">Add Payment</a></li>
                            <li> <a href="patient-invoice.html">Patient Invoice</a></li> -->
                        </ul>
                    </li>
                    
                    <li><a href="<?php echo base_url() ?>front/Log/logout" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="hide-menu">
                        <a href="javacript:void(0);"> <span>Progress Report</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                            </div> <span>Leads Report</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <?php } 
        else { ?>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                        <?php $user=$this->session->userdata('username');?>
                    </li>
                    <li class="user-pro">
                        <a href="<?php echo base_url() ?>back/home_back" class="waves-effect"><img src="<?php echo base_url() ?>asset/back/plugins/images/users/user.png" alt="user-img" class="img-circle"> <span class="hide-menu"><?php echo $user ?><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url() ?>back/user"><i class="ti-user"></i> My Profile</a></li>
                          <!--   <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li> -->
                            <li><a href="<?php echo base_url() ?>back/user/edit"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="<?php echo base_url() ?>front/Log/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="<?php echo base_url() ?>back/home_back" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                   <li> <a href="" class="waves-effect"><i class=" ti-comments-smiley p-r-10"></i> <span class="hide-menu"> Register <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <!-- <li> <a href="<?php echo base_url() ?>back/register/register_user">Register User</a> </li> -->
                            <li> <a href="<?php echo base_url() ?>back/register">Register Anjing</a> </li>
                        </ul>
                    </li>
                     <li> <a href="" class="waves-effect"><i class=" icon-note p-r-10"></i> <span class="hide-menu"> pemeriksaan <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <!-- <li> <a href="<?php echo base_url() ?>back/register/register_user">Register User</a> </li> -->
                            <li> <a href="<?php echo base_url() ?>back/pemeriksaan">pemeriksaan Anjing</a> </li>
                        </ul>
                    </li>
                   
                    <li class="nav-small-cap m-t-10">--- Manage</li>
                    <!-- <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Metode <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="doctor-schedule.html">Batasan bayes</a> </li>
                            <li> <a href="book-appointment.html">Book Appointment</a> </li>
                        </ul>
                    </li> -->
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> User <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           <!--  <li> <a href="doctors.html">Semua user</a> </li>
                            <li> <a href="add-doctor.html">Tambah user</a> </li> -->
                            <!-- <li> <a href="edit-doctor.html">Edit user</a> </li> -->
                            <li> <a href="<?php echo base_url() ?>back/user">User Profile</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-comments-smiley p-r-10"></i> <span class="hide-menu"> Anjing <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/anjing/anjing_user">Semua Anjing</a> </li>
                           <!--  <li> <a href="add-patient.html">Tambah </a> </li> -->
                            <!-- <li> <a href="edit-patient.html">Edit Patient</a> </li>
                            <li> <a href="patient-profile.html">Patient Profile</a> </li> -->
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-pulse p-r-10"></i> <span class="hide-menu"> Penyakit <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/penyakit">Semua Penyakit</a> </li>
                            <!-- <li> <a href="add-patient.html">Tambah Penyakit</a> </li> -->
                            <!-- <li> <a href="edit-patient.html">Edit Patient</a> </li>
                            <li> <a href="patient-profile.html">Patient Profile</a> </li> -->
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Gejala <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/gejala">semua Gejala</a></li>
                            <!-- <li> <a href="income-report.html">Tambah Gejala</a></li> -->
                            <!-- <li> <a href="sales-report.html">Sales Report</a></li> -->
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Hasil Pemeriksaan<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>back/pemeriksaan/view_hasil_user">Hasil periksa</a></li>
                           <!--  <li> <a href="add-payments.html">Add Payment</a></li>
                            <li> <a href="patient-invoice.html">Patient Invoice</a></li> -->
                        </ul>
                    </li>
                    
                    <li><a href="<?php echo base_url() ?>front/Log/logout" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="hide-menu">
                        <a href="javacript:void(0);"> <span>Progress Report</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                            </div> <span>Leads Report</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <?php } ?>