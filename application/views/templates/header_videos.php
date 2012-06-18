<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php base_url(); ?>public/style/maincss.css" type="text/css"/>
        <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
        <script src="http://vjs.zencdn.net/c/video.js"></script>
        <!--
jQuery library
        -->
        <script type="text/javascript" src="<?php base_url(); ?>public/jquery/jquery-1.4.2.min.js"></script>
        <!--
          jCarousel library
        -->
        <script type="text/javascript" src="<?php base_url(); ?>public/jquery/jquery.jcarousel.min.js"></script>

        <script type="text/javascript">
            /**
             * We use the initCallback callback
             * to assign functionality to the controls
             */
            function mycarousel_initCallback(carousel) {
                jQuery('.jcarousel-control a').bind('click', function() {
                    carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
                    return false;
                });

                jQuery('.jcarousel-scroll select').bind('change', function() {
                    carousel.options.scroll = jQuery.jcarousel.intval(this.options[this.selectedIndex].value);
                    return false;
                });

                jQuery('#mycarousel-next').bind('click', function() {
                    carousel.next();
                    return false;
                });

                jQuery('#mycarousel-prev').bind('click', function() {
                    carousel.prev();
                    return false;
                });
            };

            // Ride the carousel...
            jQuery(document).ready(function() {
                jQuery("#share_videos_carrousel").jcarousel({
                    scroll: 3,
                    initCallback: mycarousel_initCallback,
                    // This tells jCarousel NOT to autobuild prev/next buttons
                    buttonNextHTML: null,
                    buttonPrevHTML: null
                });
            });
            jQuery(document).ready(function() {
                jQuery("#share_videos_carrousel").jcarousel({
                    scroll: 3,
                    initCallback: mycarousel_initCallback,
                    // This tells jCarousel NOT to autobuild prev/next buttons
                    buttonNextHTML: null,
                    buttonPrevHTML: null
                });
            });
            jQuery(document).ready(function() {
                jQuery("#share_videos_play_carrousel").jcarousel({
                    scroll: 3,
                    initCallback: mycarousel_initCallback,
                    // This tells jCarousel NOT to autobuild prev/next buttons
                    buttonNextHTML: null,
                    buttonPrevHTML: null
                });
            });
            jQuery(document).ready(function() {
                jQuery("#share_videos_channel_carrousel").jcarousel({
                    scroll: 3,
                    initCallback: mycarousel_initCallback,
                    // This tells jCarousel NOT to autobuild prev/next buttons
                    buttonNextHTML: null,
                    buttonPrevHTML: null
                });
            });
            jQuery(document).ready(function() {
                jQuery("#share_videos_img_carrousel").jcarousel({
                    scroll: 3,
                    initCallback: mycarousel_initCallback,
                    // This tells jCarousel NOT to autobuild prev/next buttons
                    buttonNextHTML: null,
                    buttonPrevHTML: null
                });
            });
            

        </script>

    <div class="buttons" id="buttons">    
        <a href="<?php echo base_url() . "gravar"; ?>" onmouseover="document.gravar.src='<?php echo base_url() . "public/images/GRAVAR-02.png"; ?>'"
           onmouseout="document.gravar.src='<?php echo base_url() . "public/images/GRAVAR-01.png"; ?>'" title="Gravar Video">
            <img name="gravar" src=<?php echo base_url() . "public/images/GRAVAR-01.png"; ?> width="190px">
        </a>

        <a href="<?php echo base_url() . "videos"; ?>" onmouseover="document.videos.src='<?php echo base_url() . "public/images/VIDEOS-01.png"; ?>'"
           onmouseout="document.videos.src='<?php echo base_url() . "public/images/VIDEOS-02.png"; ?>'" title="Ver Videos">
            <img name="videos" src=<?php echo base_url() . "public/images/VIDEOS-02.png"; ?> width="190px">
        </a>
        <a href="<?php echo base_url() . "noticias?new=defeito"; ?>" onmouseover="document.noticias.src='<?php echo base_url() . "public/images/NOTICIAS-02.png"; ?>'"
           onmouseout="document.noticias.src='<?php echo base_url() . "public/images/NOTICIAS-01.png"; ?>'" title="Noticias">
            <img name="noticias" src=<?php echo base_url() . "public/images/NOTICIAS-01.png"; ?> width="190px">
        </a>

        <a href="<?php echo base_url() . "vivencias"; ?>" onmouseover="document.canais.src='<?php echo base_url() . "public/images/CANAIS-02.png"; ?>'"
           onmouseout="document.canais.src='<?php echo base_url() . "public/images/CANAIS-01.png"; ?>'" title="Canais">
            <img name="canais" src=<?php echo base_url() . "public/images/CANAIS-01.png"; ?> width="190px">
        </a>

        <a href="#" onmouseover="document.sair.src='<?php echo base_url() . "public/images/SAIR-02.png"; ?>'"
           onmouseout="document.sair.src='<?php echo base_url() . "public/images/SAIR-01.png"; ?>'" title="Sair">
            <img name="sair" src=<?php echo base_url() . "public/images/SAIR-01.png"; ?> width="190px">
        </a>
    </div>
</head>
<body>