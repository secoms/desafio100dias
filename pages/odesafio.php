<?php 

if (isset($_GET['grp']) && $_GET['grp']>0) { $ID_grupo = $_GET['grp']; ?>

<div class="container">
	<div class="row">
		<h1 class="col-xs-12 main-title"><?php  echo $odesafio[$ID_grupo]['title']?></h1>     
		<h2 class="col-xs-12 col-sm-8 col-sm-offset-2 subtitle text-center"><?php  echo $odesafio[$ID_grupo]['subtitle'] ?></h2>
		<a href="<?php  echo URL_ROOT . 'grupos' ?>" class="col-xs-12 subtitle text-center">Acompanhe os outros grupos</a>
	
	<div class="items-centered gamevieww" style="align-items: flex-start;">
		<div class="col-xs-12  col-sm-7 col-md-5 ">
			<?php 
			if (isset($odesafio[$ID_grupo]['ranking'][0][0])) {
			 ?>
			<ul class="ranking-table">
				<?php  
					$position = 1;
					foreach ($odesafio[$ID_grupo]['ranking'] as $ranking) { 
					echo '<li class="items-centered" >';
				if (isset($odesafio[$ID_grupo]['link_afericao'][0])) {
				?>
					<h3><?php echo $position++; ?>º</h3>
				<?php } ?>
					<p class="flex-1"><?php echo $ranking; ?></p>
				<?php 
					echo '</li>'; 
				}
				// if (isset($odesafio[$ID_grupo]['link_afericao'][0])) {
				// 	echo '<li><a href="' .URL_DOWNLOADS .'afericao/'.$odesafio[$ID_grupo]['link_afericao'].'" target="_blank">Aferição completa destas unidades</a></li>';
				// } else {
				// }
					echo '<li></li>'; 	
				?>	
			</ul>
			<?php } ?>
		</div>
		<figure class="col-xs-12 col-sm-5 col-md-7 ">
			<img src="<?php  echo URL_IMG?>bg/caminho/<?php echo $odesafio[$ID_grupo]['caminho']?>" alt="">
		</figure>
	</div>
</div>
</div>

<div class="stars-bg  parallax-window" data-parallax="scroll" data-image-src="<?php  echo URL_IMG?>bg/stars.png"></div>	
<div class="stars-bg" style="background-image: url('<?php  echo URL_IMG ?>bg/stars.png")> </div>
<?php 

} else {
	include 'pages/home.php';
}