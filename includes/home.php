
<div class="container">
	<div class="row">
		<section id="evento" class="home-blocks">
			<div class="col-xs-12  list-img-flex">
				<div class="flex-2 bg bg-cover items-centered">
					<div>
						<h1><?php  echo $home['maratona']['title']?></h1>
						<?php  foreach ($home['maratona']['body'] as $premio) { 
							echo '<p>' . $premio . '</p>'; 
						}?> 
						<div class="row">
							<hr id="line-saibamais" class="col-xs-12"/>
						</div>
					</div>
				</div>
				<div class="box flex-2">
					<div class=" items-centered">
						<div id="demo" class="wordcloud wow" data-wow-duration="0.5s" data-wow-delay="0.5s"></div>
					</div>
				</div>
			</div>
			<div id="premiacao"	class="col-xs-12  list-img-flex flex-revese-sm">
				<div class="flex-3"> </div>
				<div class="wow fadeIn box flex-2">
					<h1 class="col-xs-12"><?php  echo $home['premiacao']['title']?></h1>
					<div class="items-centered">
						<ul class="col-xs-12 ">
							<?php  foreach ($home['premiacao']['body'] as $premio) { echo '<li>' . $premio . '</li>'; }?> 
							<hr/>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<div class="bg-transition -xs dark-content">
	<div class="bg bg-fixed  high-full" style="background-image:url('<?php  echo URL_IMG?>bg/bg-index.jpg');"></div>
</div>
<section class="box-section"  id="calendario">
	<div class="container">
		<div class="row">
			<h1 class="wow fadeIn col-xs-12 "><?php echo $home['calendario']['title']?></h1>
			<p class="wow fadeIn col-xs-12"><?php echo $home['calendario']['subtitle']?></p>
			<hr/>			
			<h2 class="wow fadeIn col-xs-12">Etapas</h2>
			<ul class=" col-xs-12 alternated-list -reverse">
				<?php  $i= 0; foreach ($home['etapas']['body'] as $etapas) {  $i = $i + 0.15 ; echo '<li class="wow fadeIn" data-wow-delay="'.$i.'">' . $etapas . '</li>';  }?>  
			</ul>
		</div>
	</div>
</section>
<section class="box-section" id="editais">
	<div class="container">
		<div class="row">
			<hr class="col-xs-12"/>
			<h1 class="wow fadeIn col-xs-12 ">
				<?php  echo $home['editais']['title']?>
			</h1>
			<ul class=" col-xs-12 alternated-list -reverse">
				<?php  $i= 0; foreach ($home['editais']['body'] as $edital) { 
				 $i = $i + 0.15 ;
				 echo '<li class="wow fadeIn" data-wow-delay="'.$i.'">';
				 	 if (isset($edital['link'])) {
				 		echo '<a href="' . $edital['link'] .'" target="_blank">'.$edital["title"].'</a>';
				 	} else {
				 		if (isset($edital['file'])) { 
				 			echo '<a href="' . URL_DOWNLOADS . $edital['file'].'" target="_blank">'.$edital["title"].'</a>';
			 			}
					}
				 echo '</li>';
				}?>  
			</ul>
		</div>
	</div>
</section>
