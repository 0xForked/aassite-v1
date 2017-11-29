
		<div class="container" style="margin-top: 40px">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>/.<a>SMIT</a> BLOG</h2>
					<p>Lorpem ipsum is not a qoute, keep <a>Learn</a> and <a>Share</a>.</p>
				</div>
			</div>
			<div class="row">
			
			<?php 
				if(empty($article)){
					 echo "<h1 class="."text-center".">Theres nothing in here</h1>";
				}	
			?>
			
			<?php foreach($article as $post) : ?>
				<div class="col-sm-6 col-md-4">
					<div class="fh5co-blog animate-box card-columns">
						<a href="<?php echo base_url(); ?>blog/<?php echo $post['post_slug'] ?>" class="blog-bg" 
						style="background-image: url(<?php 
							$images = $post['post_image'];
							if($images != "noimage.jpg"){
								echo base_url()."assets/images/post/".$post['post_image'];
							} else {
								echo base_url()."assets/images/items/noimage.jpg";
							}
	
						?>);">
							<?php 
								$Headline = $post['post_status'];
								if($Headline == "isFeatured"){
									echo '<span style="margin: 10px 0 0 10px; background:#C2185B" class="badge badge-danger">'
												  ."HOT". 
												'</span>';	
								}
								
								$cats = explode(',', $post['post_category']);
			                        foreach ($categories as $key) {
			                            foreach ($cats as $value) {
			                                if($key['category_id'] == $value){
			                                    echo 
			                                    '<span style="margin: 10px 0 0 10px" class="badge badge-danger">'
												  .$key['category_title']. 
												'</span>';
			                                }
			                            }
			                                    	
			                    	}                	

							?></a>
						<div class="blog-text">
							
							<span class="posted_on">
								<?php 
                                    
                                    $content = $post['post_body'];
                                    $wordnum = str_word_count(strip_tags($content)) ;
                                    $avgtime = 120;
									$seconds = floor( (int) $wordnum / (int) $avgtime ) * 60;
									$minutes = floor( $seconds / 60 );
                                    $timestamp = strtotime($post['created_at']);
                                    echo "<a>".date('M. jS Y', $timestamp)."</a>";
                                    if ( $minutes < 1 ) {
										echo " - "." less than 1 min read";
									} else {
										echo " - ".$minutes." min read".'</br>';
									}

                                ?>
							</span>
							
							<div style="height:115px">
								<h3>
									<a href="<?php echo base_url(); ?>blog/<?php echo $post['post_slug'] ?>">
									<?php echo $post['post_title'] ?></a>
								</h3>
							</div>
							
							
							<ul class="stuff">
								<li><i class="icon-heart2"></i><?php echo $post['post_clap']; ?></li>
								<li><a href="<?php echo base_url(); ?>blog/<?php echo $post['post_slug'] ?>">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
			<?php endforeach; ?>
				
			</div>
		</div>


