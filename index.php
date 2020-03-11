<?php 
	/**
	 * Página principal da aplicação.
	 * 
	 * Toda página do site é carregada a partir daqui.
	 */

    // Configuração do sistema
    //

	include "sys/inicializacao.php";
    include "sys/funcoes_sistema.php";

	$content = file_get_contents("json/maratona-home-content.json");
	$json_a = json_decode($content, true);
	$home = $json_a['home'];

	$content = file_get_contents("json/maratona-contato.json");
	$json_a = json_decode($content, true);
	$contato = $json_a['contato'];


	$content = file_get_contents("json/acompanheodesafio.json");
	$json_a = json_decode($content, true);
	$acompanheodesafio = $json_a['acompanheodesafio'];

	$content = file_get_contents("json/odesafio.json");
	$json_a = json_decode($content, true);
	$odesafio = $json_a['odesafio'];

	$content = file_get_contents("json/atosnormativos.json");
	$json_a = json_decode($content, true);
	$atosnormativos = $json_a['atosnormativos'];

	$content = file_get_contents("json/cronograma_visitas.json");
	$json_a = json_decode($content, true);
	$cronograma_visitas = $json_a['cronograma_visitas'];

	$content = file_get_contents("json/home.json");
	$json_a = json_decode($content, true);
	$home = $json_a['home'];

	// O desafio
	$content = file_get_contents("json/inscricoes.json");
	$json_a = json_decode($content, true);
	$inscricoes = $json_a['inscricoes'];

	$content = file_get_contents("json/comissao_avaliadora.json");
	$json_a = json_decode($content, true);
	$comissao_avaliadora = $json_a['comissao_avaliadora'];

	$content = file_get_contents("json/avaliacao_dos_resultados.json");
	$json_a = json_decode($content, true);
	$avaliacao_dos_resultados = $json_a['avaliacao_dos_resultados'];

	$content = file_get_contents("json/premiacao.json");
	$json_a = json_decode($content, true);
	$premiacao = $json_a['premiacao'];

	$content = file_get_contents("json/calendario.json");
	$json_a = json_decode($content, true);
	$calendario = $json_a['calendario'];


	

	$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$uri_segments = explode('/', $uri_path);

	if (URL_ROOT=="/") $lang = $uri_segments[1]; 
	else $lang = $uri_segments[2]; 

	

	include "sys/funcoes_basicas.php";
    
    // Template


	include "includes/template.php";
?>
