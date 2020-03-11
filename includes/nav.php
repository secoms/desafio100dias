<nav id="mainNav" class="navbar navbar-default navbar-fixed-top  clear-style nav-index wow fadeInDown <?php if (checkPaginaAtiva('home')){?>home-nav <?php }?>" data-wow-delay="0.7s" data-wow-duration="1s">
  <div class="container ">
    <div class="btn-menu hidden-md hidden-lg">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <ul class="navbar-header">
      <li>
        <a id="brand" class="brand transparent-bg" href="<?php  echo URL_ROOT?>">
          <figure   class="-index">
            <img class="img" src="<?php  echo URL_IMG?>logo-short.png">
          </figure>
        </a>
      </li> 
    </ul> 
    <ul id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav  navbar-right">
        <li><a <?php if (checkPaginaAtiva('home')){?>id="btnEvento" <?php }?> href="<?php  echo URL_ROOT?>">Início</a></li>
        <li><a href="<?php  echo URL_ROOT?>atosnormativos">Atos Normativos</a></li>
        <li><a href="<?php  echo URL_ROOT?>visitas">Visitas</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">O Desafio</a>
          <ol class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="<?php  echo URL_ROOT?>eixos">Eixos</a></li>
            <li><a href="<?php  echo URL_ROOT?>inscricoes">Inscrição</a></li>
            <li><a href="<?php  echo URL_ROOT?>calendario">Calendário</a></li>
            <li><a href="<?php  echo URL_ROOT?>grupos">Grupos de Competências</a></li>
            <li><a href="<?php  echo URL_ROOT?>avaliacaodosresultados">Avaliação dos Resultados</a></li>
            <li><a href="<?php  echo URL_ROOT?>comissaoavaliadora">Comissão Avaliadora</a></li>
          </ol>
        </li>
        <?php /*
        <li><a id="btn" href="">Acompanhe o Desafio</a></li>
        */?>
        <li><a href="<?php  echo URL_ROOT?>premiacao">Premiação</a></li>
        <li><a href="<?php  echo URL_ROOT?>fotos">Fotos</a></li>
      </ul>
    </div>
  </div>
</nav>


