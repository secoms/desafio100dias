
<div class="container">
  <section class="row box-section wow fadeIn" data-wow-delay="0.3s">
    <h1 class="col-xs-12 main-title"><?php  echo $atosnormativos['title']?></h1>     
      <?php 
      foreach ($atosnormativos['body'] as $atos) { ?>
        <a href="<?php  echo URL_ROOT . $atos['link'] ?>" class="col-xs-12 col-sm-8 col-sm-offset-2 text-center" target="_blank">
        <?php  echo $atos['title'] ?>
          
        </a>
      <?php  } ?>
    </ul>
  </section>
</div>