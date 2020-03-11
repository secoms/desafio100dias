
<div class="container">
    <section class="row box-section">
        <h1 class="col-xs-12 main-title"><?php  echo $premiacao['title']?></h1>     
            <?php  foreach ($premiacao['body'] as $grupo) { ?>
               <p class="col-xs-12"><?php  echo $grupo ?></p>
            <?php  } ?>
        </section>
   <section class="row box-section wow fadeIn" data-wow-delay="0.3s">
        <ul class="">
            <?php 

             foreach ($premiacao['premios'] as $posicao) { ?>
               
               <h2 class="col-xs-12 col-sm-8 col-sm-offset-2 text-center"><?php  echo $posicao['title'] ?></h2>
               <p class="col-xs-12 col-sm-8 col-sm-offset-2 text-center"><?php  echo $posicao['body'] ?></p>

            <?php  } ?>
            <li></li>
        </ul>
    </section>
</div>