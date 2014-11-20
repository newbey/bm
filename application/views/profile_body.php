<!--Top Navigation-->
<div class="topnav">
	<div class = "container">
		<div class="row">
			<div class="col-md-4">PLACES TO TRAVEL</div>
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
									<div class="pubname col-md-12">
										<?php echo $this->session->userdata('username'); ?>
									</div>
								
									<div class="username col-md-12">
										<?php echo '@'. $this->session->userdata('username'); ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="minidash">
									<div class="userbio"><span class="glyphicon glyphicon-map-marker" aria-hidden="true" style="padding-right:10px"></span>Cebu City</div>
									<div class="userbio"><span class="glyphicon glyphicon-globe" aria-hidden="true" style="padding-right:10px"></span>www.yoursite.com</div>
									<div class="userbio"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true" style="padding-right:10px"></span>09123456</div>
									<button type="button" class="btn btn-primary col-md-12">ADD TRAVEL BUDDY</button><br><br>
									<button type="button" class="btn btn-success col-md-12">RECOMMENDATIONS</button>
								</div>
							</div>
						</div>
				</div>
				<div class="col-md-8">
						<div class="feed">
							<div class="row">
								<div class="col-md-3 ">
									<div class="stats"><h2>12</h2>
									<br>
									<p><span class="glyphicon glyphicon-globe" aria-hidden="true"></span><span style="margin-left:8px"/>Places Visited</p></div>
								</div>
								<div class="col-md-3">
									<div class="stats"><h2>4</h2>
									<br>
									<p><span class="glyphicon glyphicon-plane" aria-hidden="true"></span><span style="margin-left:8px"/>Destinations</p></div>
								</div>
								<div class="col-md-3">
									<div class="stats"><h2>100</h2>
									<br>
									<p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><span style="margin-left:8px"/>Followers</p></div>
								</div>
								<div class="col-md-3">
									<div class="stats"><h2>12</h2>
									<br>
									<p><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span><span style="margin-left:8px"/>Travel Buddies</p></div>
								</div>
							</div>
						</div>
				</div>
			</div>
	</div>
</div>