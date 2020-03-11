<script type="text/javascript" src="<?php  echo URL_LIBS;?>bootstrap-sass/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php  echo URL_LIBS;?>libtimer/jquery.time-to.min.js"></script>
<script type="text/javascript" src="<?php  echo URL_LIBS;?>animation/animation.js"></script>
<script type="text/javascript" src="<?php  echo URL_LIBS;?>parallax/parallax.min.js"></script>
<script type="text/javascript" src="<?php  echo URL_LIBS;?>lightbox2/js/lightbox.js"></script>

<script type="text/javascript" src="<?php  echo URL_JS;?>main.js"></script>
 <script>
        $('#countdown-header').timeTo({
            timeTo: new Date('2018-12-10T23:59:59'), 
            displayDays: 2,
            theme: "red",
            displayCaptions: true,
            fontSize: 80,
            fontFamily:'Play',
            captionSize: 25,
            languages: { pl: {days: 'dias', hours: 'horas', min: 'minutos', sec: 'segundos'} },
            lang: 'pl'
        });
        // $('#countdown-2').timeTo();
    </script>