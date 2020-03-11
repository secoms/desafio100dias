<div class="container wow fadeIn" data-wow-delay="0.3s">
	<section class="box-section">
		<h1 class="col-xs-12 main-title"><?php  echo $avaliacao_dos_resultados['title'];?></h1>
		<div class="col-xs-12 wow fadeIn" >
			<?php  foreach ($avaliacao_dos_resultados['body'] as $avaliacao_body) { 
				echo '<p>' . $avaliacao_body . '</p>'; 
			}?>
		</div>
	</section>
	<section class="box-section">
		<h2 class="col-xs-12 "><?php  echo $avaliacao_dos_resultados['avaliacoes']['title'];?></h2>
		<div class="col-xs-12 wow fadeIn" >
			<?php  foreach ($avaliacao_dos_resultados['avaliacoes']['body'] as $avaliacao_body) { 
				echo '<p>' . $avaliacao_body . '</p>'; 
			}?>
		</div>
	</section>

	<section class="box-section">
		<h2 class="col-xs-12 "><?php  echo $avaliacao_dos_resultados['observacoes']['title'];?></h2>
		<div class="col-xs-12 wow fadeIn" >
			<?php  foreach ($avaliacao_dos_resultados['observacoes']['body'] as $observacoes) { 
				echo '<p>' . $observacoes . '</p>'; 
			}?>
		</div>
	</section>
</div>