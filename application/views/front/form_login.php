
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
<!--about-->
<div class="about">
	 <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
								<?php {
                        $this->load->view('front/log'); }?>

								
				</div>
			</div></div>		
	</body>
