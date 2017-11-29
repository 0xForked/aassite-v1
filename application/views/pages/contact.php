
		<div class="container" style="margin-top: 40px">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Where I Work</h2>
					<p>I'd love your feedback!</p>
				</div>
			</div>
		</div>
		<div class="container">
				<div class="row">
					 <!-- Flash messages -->
	                <?php if($this->session->flashdata('save_message')): ?>
					  <?php echo '<p class="alert alert-success" style="text-align:center">'.$this->session->flashdata('save_message').'</p>'; ?>
				
					<?php endif; ?> 
					
					<div class="col-md-3 col-md-push-1 animate-box">
						<h3>My Address</h3>
						<ul class="contact-info">
							<li><i class="icon-location"></i>Jalan Kampung Baru, <br>Nomor 14 Kotamobagu ID 95712.</li>
							<li><i class="icon-old-phone"></i>+62 822 7111 5593</li>
							<li><i class="icon-mail22"></i><a>aasumitro@gmail.com </br> aasumitro@merahputih.id</a></li>
							<li><i class="icon-globe2"></i><a href="https://asmith.my.id">www.asmith.my.id</a></li>
						</ul>
					</div>
					<div class="col-md-7 col-md-push-1 animate-box">
						<?php echo form_open_multipart('messages/create'); ?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Name" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" name="subject" class="form-control" placeholder="Subject" required>
									</div>
									<div class="form-group">
										<textarea name="messages" class="form-control" id="" cols="30" rows="5" placeholder="How can I help?" required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>