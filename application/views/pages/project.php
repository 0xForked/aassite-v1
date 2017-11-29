		<div class="row animate-box" style="margin-top: 40px">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>/.<a>SMIT</a> PROJECT</h2>
				<p>Everything begins with an <a>Idea</a>.</p>
			</div>
		</div>
		<div class="row">
		  <center> 
		  
		  <?php 
			
				if(!empty($title)){
					 echo "<h1 class="."text-center".">Theres nothing in here</h1>";
				}
				
				//Ads
				//contoh ada 15 artikel
				for ($article=1; $article<=15 ; $article++){ 
					if ($article % 15 == 0) {	
						//setiap 15 kali perulangan muncul Ads (iklan)
						echo "iklan"."</br>"; 
					}else if ($article % 5 == 0) { 
						//setiap 5 kali perulangan muncul artikel 
						//yang user da bayar paya muncul teratas
						echo "artikel promosi"."</br>";
					}else if ($article % 1 == 0) {
						//setiap kali perulangan muncul ini artikel 
						//kecuali urutan ka 5 artikel promosi deng
						//urutan ka 15 iklan
						echo "artikel biasa"."</br>";
					}
					//baru bekeng pagination tiap 15 artikel/halaman
				}
			?>
		  
		  
		  </center>
		 
			
		</div>