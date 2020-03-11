
<div class="container">
    <section class="row box-section">
        <h1 class="col-xs-12 main-title"><?php  echo $calendario['title']?></h1>     
            <?php  foreach ($calendario['body'] as $data) { ?>
               <p class="col-xs-12 text-center"><?php  echo $data ?></p>
            <?php  } ?>
        </section>
</div>