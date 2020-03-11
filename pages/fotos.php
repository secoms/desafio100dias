<?php 
$content = file_get_contents("json/fotos.json");
$json_a = json_decode($content, true);
$fotos = $json_a['fotos'];
?>

<style>
.grupos-section.-fotos a{
	height: 0px;
	width: 100%;
	padding-bottom: 100%; 
	overflow: hidden;
	margin-bottom: 30px;
	display: inline-block;
 }
.grupos-section.-fotos figure{
	height: 0px;
	width: 150%;

}
</style>
<div class="container wow fadeIn" data-wow-delay="0.3s">
	<div class="row grupos-section -fotos">
		<h1 class="col-xs-12 main-title"><?php  echo $fotos['title']?></h1>		
		<?php  foreach ($fotos['fotos']as $foto) { ?>
			<div class="col-xs-12 col-sm-3 col-md-4">

				<a class="example-image-link" href="<?php  echo URL_IMG .'fotos/'. $foto?>"
					data-lightbox="fotos-100-dias"
					data-title="Fotos no Desafio 100 dias">
					<figure class="">
						<img class="example-image" src="<?php  echo URL_IMG .'fotos/'. $foto?>" alt=""/>

					</figure>
				</a>

			</div>
			<?php 
		}?>
	</div>
</div>