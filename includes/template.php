<!DOCTYPE html>
<html lang="pt-br">
<head>

	<link rel="alternate" href="http://deveart.com/br/" hreflang="pt-br" />
	<meta charset="UTF-8">
	<meta name="description" lang="pt-br" content="">
	<meta name="abstract" lang="pt-br" content=''>
	<meta name="keywords" lang="pt-br" content="">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Play:700" rel="stylesheet">
	<meta name="robot" content="All">
	<meta name="rating" content="general">
	<meta name="distribution" contetn="global">
	<meta name="language" content="PT">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="author" content='<?php  echo SITE_AUTOR?>'>
	<!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="<?php  echo URL_LIBS?>jqcloud2/css/jqcloud.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php  echo URL_LIBS?>lightbox2/css/lightbox.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php  echo URL_LIBS?>font-awesome/css/font-awesome.min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php  echo URL_LIBS?>slick/slick.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php  echo URL_LIBS?>slick/slick-theme.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php  echo URL_LIBS?>animation/animation.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php  echo URL_LIBS?>libtimer/timeTo.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php  echo URL_CSS?>main.css"> <!-- O bootstrap está dentro -->
	<title><?php  echo SITE_NOME?></title>
	<link rel="shortcut icon" href="<?php  echo URL_IMG?>logo.png">
	<script type="text/javascript" src="<?php  echo URL_LIBS?>jquery/js/jquery.js"></script>
</head>
<body id="start" class="dont-scroll scrollbar correction-body bg-grad-transp">
	<?php 

	include "sys/analytics.php";
	include "includes/nav.php";
	if (checkPaginaAtiva('home')){ include "includes/header-home.php"; }
	else { include "includes/header.php"; }
	// Carrega o conteúdo
	?>
	<div class="conteudo-body"> <?php  include getPaginaConteudo(); ?> </div>

	
	<?php 

	
	include "includes/footer.php";
	include "includes/scripts.php"; 
	?>
	<span id="startpoit"></span>
	<section id="btn-go-top" class="dark-content">
		<a href="#" class="link-light" title="Voltar ao topo da página"><i class="fa fa-chevron-up"></i></a>
	</section>

	<?php  if (isset($_GET["msg"])) { $msg = trataMensagem( $_GET["msg"] ); } ?> 

	<script>
		$(document).ready(function() {
			$('.dont-scroll').removeClass('dont-scroll');
			new WOW().init(); 
		});
	</script>
</body>
</html>

