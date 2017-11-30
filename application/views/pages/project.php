		<div class="container" style="margin-top: 40px">

			<div class="row animate-box" style="margin-top: 40px">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>/.<a>SMIT</a> PROJECT</h2>
					<p>Everything begins with an <a>Idea</a>.</p>
				</div>
			</div>

			<div class="row">

				<?php
					if(empty($portfolio)){
						echo "<h1 class="."text-center".">Theres nothing in here</h1>";
					}
				?>

				<?php foreach($portfolio as $project) : ?>
					<div class="col-sm-6 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#" class="blog-bg" style="background-image: url(<?php
								$images = $project['portfolio_logo'];
								if($images != "noimage.jpg"){
									echo base_url()."assets/images/project/".$project['portfolio_logo'];
								} else {
									echo base_url()."assets/images/items/noimage.jpg";
								}

							?>);">
								<span style="margin: 10px 0 0 10px" class="badge badge-danger"> <?php echo $project['portfolio_category'] ?></span>
								<?php if($project['link_github'] != null): ?>
									<span style="margin: 10px 0 0 0; background:#000" class="badge badge-danger"> Open Source </span>
								<?php endif ?>
								<?php if($project['status_headline'] == "isFeatured"): ?>
									<span style="margin: 10px 0 0 0; background:#C2185B" class="badge badge-danger"> HOT </span>
								<?php endif ?>
							</a>

							<div class="blog-text">

								<div style="height:115px">
									<h3>
										<a href="#"><?php echo $project['portfolio_title'] ?></a>
									</h3>
								</div>


								<ul class="stuff">
									<?php if($project['link_store_google'] != null): ?>
										<li><a style="color:green;" href="<?php echo $project['link_store_google'] ?>" target="_blank" data-tooltip="tooltip" title="Play Store"><i style="font-size:25px" class="icon-android"></i></a></li>
									<?php endif ?>
									<?php if($project['link_store_apple'] != null): ?>
										<li><a style="color:black" href="<?php echo $project['link_store_apple'] ?>" target="_blank" data-tooltip="tooltip" title="App Store"><i style="font-size:25px" class="icon-appleinc"></i></a></li>
									<?php endif ?>
									<?php if($project['link_url_web'] != null): ?>
										<li><a style="color:blue" href="<?php echo $project['link_url_web'] ?>" target="_blank" data-tooltip="tooltip" title="URL WEB"><i style="font-size:25px" class="icon-earth"></i></a></li>
									<?php endif ?>
									<?php if($project['link_demo_web'] != null): ?>
										<li><a style="color:grey" href="<?php echo $project['link_demo_web'] ?>" target="_blank" data-tooltip="tooltip" title="URL DEMO"><i style="font-size:25px" class="icon-earth"></i></a></li>
									<?php endif ?>
									<?php if($project['link_github'] != null): ?>
										<li><a style="color:black" href="<?php echo $project['link_github'] ?>" target="_blank" data-tooltip="tooltip" title="Github Repository"><i style="font-size:25px" class="icon-github"></i></a></li>
									<?php endif ?>

									<li><a href="<?php echo $project['user_guide'] ?>" target="_blank" data-tooltip="tooltip" title="User Guide"><i style="font-size:25px" class="icon-book"></i></a></li>

								</ul>

							</div>

						</div>
					</div>
				<?php endforeach ?>

			</div>

		</div>