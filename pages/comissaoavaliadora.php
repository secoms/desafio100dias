
<div class="container">
    <section class="row box-section">
        <h1 class="col-xs-12 main-title"><?php  echo $comissao_avaliadora['title']?></h1>     
            <?php  foreach ($comissao_avaliadora['body'] as $grupo) { ?>
               <p class="col-xs-12"><?php  echo $grupo ?></p>
            <?php  } ?>
        </section>
</div>