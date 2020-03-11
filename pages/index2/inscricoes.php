
<div class="container wow fadeIn" data-wow-delay="0.3s">
	<section class="box-section">
		<h1 class="col-xs-12 main-title"><?php  echo $inscricoes['title'];?></h1>
		<div class="col-xs-12 wow fadeIn" >
			<?php  foreach ($inscricoes['body'] as $avaliacao_body) { 
				echo '<p>' . $avaliacao_body . '</p>'; 
			}?>
		</div>
	</section>
</div>