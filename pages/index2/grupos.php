<div class="container wow fadeIn" data-wow-delay="0.3s">
	<div class="row grupos-section">
		<h1 class="col-xs-12 main-title"><?php  echo $home['grupos']['title']?></h1>		
		<p class="col-xs-12"><?php  echo $home['grupos']['subtitle']?>
		<br/>
		<br/>
		</p>		

			<?php  foreach ($home['grupos']['body'] as $grupo) { 
				echo '<div class="col-xs-6 col-sm-4 col-md-3 grupo-box">';
			?>
				<figure class=""><img src="<?php  echo URL_IMG .'grupos/'. $grupo['img']?>" alt=""></figure>
				<h2 class="title" ><?php  echo $grupo['subtitle'] ?></h2>
			<?php 
				echo '</div>'; 
			}?>
	</div>
</div>