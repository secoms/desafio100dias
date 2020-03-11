<?php 

if (isset($_GET['grp']) && $_GET['grp']>0) { $ID_grupo = $_GET['grp']; ?>

<div class="container">
	<div class="row">
        <h1 class="col-xs-12 main-title"><?php  echo $odesafio[$ID_grupo]['title']?></h1>     
        <h2 class="col-xs-12 col-sm-8 col-sm-offset-2 subtitle text-center"><?php  echo $odesafio[$ID_grupo]['subtitle'] ?></h2>
        <p class="col-xs-12 subtitle text-center">Última atualização: <?php  echo $odesafio['last_update'] ?></p>
		<a class="col-xs-12 subtitle text-center">Última atualização: <?php  echo $odesafio['last_update'] ?></a>

		<a href="" class="col-xs-12 subtitle text-center">Veja o ranking geral do Grupo   <?php  echo $ID_grupo;?></a>

		<div class="items-centered">
			<figure class="col-xs-12 col-sm-8 col-md-7">
				<img src="<?php  echo URL_IMG?>bg/caminho.png" alt="">
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