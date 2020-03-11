<?php 
	/*
	*  Funcao para diminuir os caracteres de uma string
	*  Parametros:
	*      1 - string desejada
	*      2 - tamanho maximo
	*  Retorno: string
	*/
	function substring($string, $tamanho){
		if(strlen($string)>$tamanho){
			$resultado = substr($string, 0, $tamanho).'...';	
		}else{
			$resultado = $string;
		}
		
		return $resultado;
	}
	
	function checkPaginaAtiva( $paginaLink ){
	$paginaAtual = null;
	$secaoAtual = null;

	if (isset($_GET['secao']) and $_GET['secao'] != '') {
		$secaoAtual = $_GET['secao'];
	}

	if (isset($_GET['pagina']) and $_GET['pagina'] != '') {
		$paginaAtual = $_GET['pagina'];
	}
	
	$subpaginaAtual = "";
	if (isset($_GET['subpagina']) and $_GET['subpagina'] != '') {
		$subpaginaAtual = $_GET['subpagina'];
	}
	
	if ( empty($paginaAtual) && empty( $subpaginaAtual )){
		$paginaAtual = "home";
	}
	
	return ($paginaLink == $secaoAtual || $paginaLink == $paginaAtual || $paginaLink == $subpaginaAtual)?" active ": "";
}

	
	function getPaginaConteudo(){
		// Processa a secao
		$secao = "";
		if (isset($_GET['secao']) and $_GET['secao'] != '') {
			$secao = $_GET['secao'].'/';
		}
		
		$pagina = "home"; //página default
		//processa a página
		if (isset($_GET['pagina']) and trim($_GET['pagina']) != '') {
			$pagina = $_GET['pagina'];
		}
		
		//verifica se existe uma página, caso contrário carrega seção extra.
		$pathfile = sprintf( "pages/%s%s.php" ,$secao,$pagina);
		$pathfile2 = sprintf( "pages/%s%s/home.php" ,$secao,$pagina);
		if ( file_exists( $pathfile ) ){
			return $pathfile;
		}else if ( file_exists($pathfile2) ){
			return $pathfile2;
		}else{
			return 'includes/secao_extra.php';
		}
	}

    /**
	 *  Funcao que trata as mensagens de sucesso ou erro de contatos
	 *  Parametros:
	 *      1 - string indicada por GET
	 *  Retorno: string
	 */
	function trataMensagem( $tipo ){
		$mensagens = array(
				array( "class"=>"alert-success" , "texto" => "Mensagem enviada com sucesso!"),
				array( "class"=>"alert-danger", "texto" =>  "Erro ao enviar a mensagem. Por favor tente mais tarde!")
		);
		if(isset($mensagens[$tipo-1]))
			return $mensagens[$tipo-1];
		else
			return false;
	} 

    /**
    *   Função para enviar mensagem do formulário de contatos
    *   Parametros:
    *       1 - Nome do remetente
    *       2 - Email do remetente
    *       3 - Assunto
    *       4 - Mensagem
    */

    function enviaMensagem($nome, $email, $assunto, $mensagem){
        
        // E-mail para o envio
        $destino = EMAIL_CONTATO;

        $assunto = "[Contato ".SITE_SIGLA."] ".$assunto;

        // Enviar o e-mail
        if (mail($destino, $assunto, $mensagem, "Content-type: text/html; charset=utf-8\r\nFrom: $nome <$email>\r\n")) {
            header("Location: ".URL_ROOT."contact?msg=1");
        } else {
            header("Location: ".URL_ROOT."contact?msg=2");
        }
        exit;
    }

	/*
	*  Funcao para gerar o Breadcrumb
	*  Parametros:
	*      1 - Título página ativa
	*      2 - Os níveis anteriores
	*      3 - Os aliases das urls dos níveis anteriores
	*/
	function geraBreadcrumb($ativo, $niveis = array(), $urls = array()) {
		$breadcrumb = array(
			'niveis' => $niveis,
			'urls' => $urls,
			'ativo' => $ativo
			);

		include 'includes/breadcrumb.php';
	}

	/**
	 * Gera o link de uma notícia
	 *
	 * @param int $id
	 * @param string $titulo
	 * 
	 * @return string
	 */
	function geraLink($tipo, $titulo, $id){
		$path = URL_ROOT . "%s/%s/%d";
		$titulo = hyphenize($titulo);
		return sprintf($path, $tipo ,$titulo, $id);
	}
?>