<?php 
	ob_start();

	// defined("URL_ROOT")			OR define("URL_ROOT", "/100dias/");
	defined("URL_ROOT")			OR define("URL_ROOT", "/");
	/**
	 * Sigla e nome do projeto
	 */
	defined("SITE_NOME")	OR define("SITE_NOME", "Desafio 100 Dias");
	defined("SITE_SIGLA")	OR define("SITE_SIGLA", "100 Dias");
	defined("SITE_AUTOR")	OR define("SITE_AUTOR", "Desafio 100 Dias");

	/**
	 * Constantes para os resources.
	 */
	defined("URL_JSON")	OR define("URL_JSON", URL_ROOT."dist/json/");
	defined("URL_CSS")	OR define("URL_CSS", URL_ROOT."dist/css/");
	defined("URL_JS")	OR define("URL_JS", URL_ROOT."dist/js/");
	defined("URL_IMG")	OR define("URL_IMG", URL_ROOT."dist/img/");
	defined("URL_DOWNLOADS")	OR define("URL_DOWNLOADS", URL_ROOT."downloads/");
	defined("URL_LIBS")	OR define("URL_LIBS", URL_ROOT."dist/vendors/");

	defined("IMG_PADRAO") OR define("IMG_PADRAO", URL_IMG."imagem_padrao.png");
	defined("IMG_LOGO") OR define("IMG_LOGO", URL_IMG."logo.png");

	/**
	 * Informações do site.
	 */
	defined("EMAIL_CONTATO")	OR define("EMAIL_CONTATO", "contato@email.com");
	defined("TEL_CONTATO")		OR define("TEL_CONTATO", "+55 84 0000-0000");

	/**
	 * Definindo timezone e locale
	 * Obs.: Necessário para o PHP formatar as datas em português
	 */
	setlocale (LC_ALL, 'ptb');
	date_default_timezone_set("Brazil/East");
