
<div class="container">
  <section class="row box-section wow fadeIn" data-wow-delay="0.3s">
    <h1 class="col-xs-12 main-title"><?php  echo $cronograma_visitas['title']?></h1>     
      <?php       
      foreach ($cronograma_visitas['body'] as $visitas) { ?>
        <a href="<?php  echo URL_ROOT .'downloads/'. $visitas['link'] ?>" class="col-xs-12 col-sm-8 col-sm-offset-2 text-center" target="_blank">
        <?php  echo $visitas['title'] ?>
          
        </a>
      <?php  } ?>
    </ul>
  </section>
</div>