<div class="container wow fadeIn" data-wow-delay="0.3s">
	<div class="row grupos-section">
		<h1 class="col-xs-12 main-title"><?php  echo $home['grupos']['title']?></h1>		
		<p class="col-xs-12"><?php  echo $home['grupos']['subtitle']?>
		<br/>
		<br/>
		</p>
			<?php  foreach ($home['grupos']['body'] as $grupo) { 
				echo '<div class="col-xs-12 col-md-6 grupo-box">';
			?>
				<div class="row">
					<figure class="col-xs-4"><img src="<?php  echo URL_IMG .'grupos/'. $grupo['img']?>" alt=""></figure>
					<a href="<?php  echo URL_ROOT . $grupo['link']; ?>" class="col-xs-8"><?php  echo $grupo['subtitle'] ?></a>
				</div>
			<?php 
				echo '</div>'; 
			}?>
		<p class="col-xs-12"><?php  echo $home['grupos']['last_text']?>
	
	</div>

</div>

