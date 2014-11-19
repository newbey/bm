<!--Top Navigation-->
<div class="topnav">
	<div class = "container">
		<div class="row">
			<div class="col-md-4">THIS IS THE LOGO</div>
			<div class="col-md-8">
				<div class="navigation">
					<div class="col-md-2">
						<div class="fixed cropcenterimg">
	  						<div class="thumb">
	  							<img src="<?php echo base_url();?>images/admin/profile.jpg"/>
	  						</div>
						</div>
					</div>
					<div class="col-md-10">
						<?php echo 'Welcome, ' . $this->session->userdata('username');?>
					</div>
				</div>
			</div>
		</div>	
</div>
</div>
<!--Main Body-->
<div class="container">
	<div class="wrapper">
			<div class="row">
				<div class="col-md-4">
						<div class="bio">
							<div class="row">
								<div class="col-md-4">
									<div class="fixed cropcenterimg">
				  						<div class="profile_pic">
				  								<img src="<?php echo base_url();?>images/admin/profile.jpg"/>
				  						</div>
									</div>
								</div>
								<div class="col-md-8">
									<?php echo $this->session->userdata('username'); ?>
									<br> 
									<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Cebu City
								</div>
							</div>
							<div class="row">
								<div class="minidash">
									<ul class="list-group">
									  <li class="list-group-item">
									    <span class="badge">20</span>
									    Places Traveled
									  </li>
									  <li class="list-group-item">
									    <span class="badge">14</span>
									    Destination List
									  </li>
									</ul>
								</div>
							</div>
						</div>
				</div>
				<div class="col-md-8">
						<div class="feed">Profile Here</div>
				</div>
			</div>
	</div>
</div>