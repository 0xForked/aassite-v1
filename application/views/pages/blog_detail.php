		<div class="row animate-box" style="margin-top: 40px">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>/.<a>SMIT</a> BLOG</h2>
				<p>Lorpem ipsum is not a qoute, keep <a>Learn</a> and <a>Share</a>.</p>
			</div>
		</div>
		<div class="container">
			<div class="col-md-8 col-md-offset-2 animate-box">
				
				<h1 style="text-align: center;"><?php echo $article['post_title'] ?></h1>
				
				<span class="posted_on">
					<?php 
                                    
                        $content = $article['post_body'];
                        $wordnum = str_word_count(strip_tags($content)) ;
                        $avgtime = 120;
						$seconds = floor( (int) $wordnum / (int) $avgtime ) * 60;
						$minutes = floor( $seconds / 60 );
                        $timestamp = strtotime($article['created_at']);
                        echo '<h4 style="text-align:center;">'.date('M. jS Y', $timestamp);
                        if ( $minutes < 1 ) {
							echo " - "." less than 1 minute";
						} else {
							echo " - <a>".$minutes." min read</a>".'</h4>';
						}
                                    
                    ?>
				</span>
				
				<div id="share-buttons" style="margin: 20px 0 20px 0">
					<center>
						<!-- Facebook -->
					    <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url(); ?>blog/<?php echo $article['post_slug']?>" target="_blank">
					        <img src="<?php echo base_url();?>assets/images/items/facebook.png" alt="Facebook" />
					    </a>
					    <!-- Google+ -->
					    <a href="https://plus.google.com/share?url=<?php echo base_url(); ?>blog/<?php echo $article['post_slug']?>" target="_blank">
					        <img src="<?php echo base_url();?>assets/images/items/google.png" alt="Google" />
					    </a>
					    <!-- Twitter -->
					    <a href="https://twitter.com/share?url=<?php echo base_url(); ?>blog/<?php echo $article['post_slug']?>" target="_blank">
							<img src="<?php echo base_url();?>assets/images/items/twitter.png" alt="Twitter" />
						</a>
					</center>
				</div>
				
				<figure class="figure fh5co-heading">
					<img src="<?php 
							$images = $article['post_image'];
							if($images != "noimage.jpg"){
								echo base_url()."assets/images/post/".$article['post_image'];
							} else {
								echo base_url()."assets/images/items/noimage.jpg";
							}
	
						?>" class="img-responsive ">
					<h5 style="margin-top: 10px" class="figure-caption text-center">Gambar ilustrasi.</h5>
				</figure>
				
				<p><?php echo $article['post_body'] ?></p>
				<?php

                    $tags = explode(',', $article['post_tag']);
                    foreach ($tags as $tag) {
                    	echo '<button type="button" class="btn btn-secondary">'.$tag.'</button>'." ";
                    }

				 ?>

				<div id="share-buttons" style="margin: 20px 0 20px 10px">
				
						Share :
						<!-- Facebook -->
					    <a style="margin-right: 10px" href="http://www.facebook.com/sharer.php?u=<?php echo base_url(); ?>blog/<?php echo $article['post_slug']?>" target="_blank">
					        <i class="fa fa-facebook"></i>
					    </a>
					    <!-- Google+ -->
					    <a style="margin-right: 10px" href="https://plus.google.com/share?url=<?php echo base_url(); ?>blog/<?php echo $article['post_slug']?>" target="_blank">
					        <i class="fa fa-google"></i>
					    </a>
					    <!-- Twitter -->
					    <a href="https://twitter.com/share?url=<?php echo base_url(); ?>blog/<?php echo $article['post_slug']?>" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>		
					
				</div>

				<div  style="margin:30px 10px 0px 10px;" id="disqus_thread"></div>

			</div>
		</div>
