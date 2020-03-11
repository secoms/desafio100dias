<div id="eixos" class="container">
	<div class="row">
		<h1 class="col-xs-12 main-title"><?php  echo $home['eixos']['title'];?></h1>
		<p class="col-xs-12"><?php  echo $home['eixos']['subtitle'];?></p>
		<div class="col-xs-12 col-md-8  wow fadeIn" data-wow-delay="0.3s"
			<section class="box-section">
				<h2><?php  echo $home['eixos']['magistrados']['title']?></h2>
				<?php  foreach ($home['eixos']['magistrados']['body'] as $magistrado) { 
					echo '<p>' . $magistrado . '</p>'; 
				}?>
			</section>
		</div>

		<div class="col-xs-12 col-md-8 col-md-offset-4 wow fadeIn" data-wow-delay="0.3s">
			<section class="box-section">
				<h2><?php  echo $home['eixos']['secretarias_judiciarias']['title']?></h2>
				<?php  foreach ($home['eixos']['secretarias_judiciarias']['body'] as $magistrado) { 
					echo '<p>' . $magistrado . '</p>'; 
				}?>
			</section>
		</div>

		<div class="col-xs-12 wow fadeIn" data-wow-delay="0.3s">
			<section class="box-section">
				<?php  foreach ($home['eixos']['body'] as $magistrado) { 
					echo '<p>' . $magistrado . '</p>'; 
				}?>
			</section>
		</div>
	</div>
</div>