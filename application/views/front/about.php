script-nav -->	
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
<!--about-->
<div class="about">
	<div class="container">
				<div class="about-top">
					<div class="about-top-info">
							<h3>Tentang Penyakit</h3>
							<h4> berikut definisi  singkat dari beberapa penyakit yang digunakan dalam sistem pakar ini </h4><br>
							<div class="col-md-4 about-img">
								<img src="<?php echo base_url() ?>asset/front/images/pic8.jpg" alt=""/>
							</div>
							<div class="col-md-8 about-desc">

								<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
                    
                    <tr class="active">
                     
                      <th width="5%" scope="col">Nama Penyakit</th>
                      <th width="5%" scope="col">Definisi</th>
                      
                    </tr>
                    <?php 
                     
                    foreach($penyakit as $list) { ?>
                    <tr>
                      
                      <td><?php echo $list['nama_penyakit']; ?></td>
                      <td><?php echo $list['definisi']; ?></td>
                      
                    </tr>
                    <?php } ?>
                    <?php echo $this->session->flashdata('pesan'); ?>
                    
                    
                  </table>
                  
                                  </div>
                                 
                              </div>
								<!-- <a class="about-desc-button" href="#">READ MORE</a> -->
							</div>
							<div class="clearfix"> </div>
					</div>
			</div>
			<!-- <div class="about-bottom">
						<div class="about-topgrid1">
							<h3>Who We Are</h3>
					<div class="col-md-8 about-bottom-info">
							   <h5>LOREM IPM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT. PRAESENT VESTIBULUM.</h5>
							   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris..</p>
							   <a class="about-bottom-info-button" href="#">READ MORE</a>
					</div>
						<div class="col-md-4 about-bottom-info-right">
						 <img src="<?php echo base_url() ?>asset/front/images/pic9.jpg" alt="" />
						 </div>
						 <div class="clearfix"> </div>
					</div>
					</div> -->
					 <div class="clearfix"> </div>
		</div>
</div>
<div class="aboutus">
			<div class="container">
		<div class="about-bottom-info">
	<div class="col-md-4 about-left">
		<div class="col-md-4 check-in">
			<img src="<?php echo base_url() ?>asset/front/images/dg-6.png" alt=""/>
		</div>
		<div class="col-md-8 check-out">
			<p>Mauris fermentum dictum magna
			sed laoreet aliquam leo ut tellus</p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="col-md-4 about-left">
		<div class="col-md-4 check-in">
			<img src="<?php echo base_url() ?>asset/front/images/dg-5.png" alt=""/>
		</div>
		<div class="col-md-8 check-out">
			<p>Mauris fermentum dictum magna
			sed laoreet aliquam leo ut tellus</p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="col-md-4 about-left">
		<div class="col-md-4 check-in">
			<img src="<?php echo base_url() ?>asset/front/images/dg-4.png" alt=""/>
		</div>
		<div class="col-md-8 check-out">
			<p>Mauris fermentum dictum magna
			sed laoreet aliquam leo ut tellus</p>
		</div>
		<div class="clearfix"> </div>
	</div>
		<div class="col-md-4 about-left">
		<div class="col-md-4 check-in">
			<img src="<?php echo base_url() ?>asset/front/images/dg-3.png" alt=""/>
		</div>
		<div class="col-md-8 check-out">
			<p>Mauris fermentum dictum magna
			sed laoreet aliquam leo ut tellus</p>
		</div>
		<div class="clearfix"> </div>
	</div>
		<div class="col-md-4 about-left">
		<div class="col-md-4 check-in">
			<img src="<?php echo base_url() ?>asset/front/images/dg-2.png" alt=""/>
		</div>
		<div class="col-md-8 check-out">
			<p>Mauris fermentum dictum magna
			sed laoreet aliquam leo ut tellus</p>
		</div>
		<div class="clearfix"> </div>
	</div>
			<div class="col-md-4 about-left">
		<div class="col-md-4 check-in">
			<img src="<?php echo base_url() ?>asset/front/images/dg-1.png" alt=""/>
		</div>
		<div class="col-md-8 check-out">
			<p>Mauris fermentum dictum magna
			sed laoreet aliquam leo ut tellus</p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>

	</div>
	</div>
</div>
<!--/about