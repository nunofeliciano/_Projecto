<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php base_url(); ?>public/style/maincss.css" type="text/css"/>
    <div class="buttons" id="buttons">    

        <a href="<?php echo base_url() . "vivencias"; ?>" onmouseover="document.vivencias.src='<?php echo base_url() . "public/images/VIVENCIAS-01.png"; ?>'"
           onmouseout="document.vivencias.src='<?php echo base_url() . "public/images/VIVENCIAS-02.png"; ?>'" title="Canal Vivencias">
            <img name="vivencias" src=<?php echo base_url() . "public/images/VIVENCIAS-02.png"; ?> width="190px">
        </a>

        <a href="<?php echo base_url() . "gastronomia"; ?>" onmouseover="document.gastronomia.src='<?php echo base_url() . "public/images/GASTRONOMIA-02.png"; ?>'"
           onmouseout="document.gastronomia.src='<?php echo base_url() . "public/images/GASTRONOMIA-01.png"; ?>'" title="Canal Gastronomia">
            <img name="gastronomia" src=<?php echo base_url() . "public/images/GASTRONOMIA-01.png"; ?> width="190px">
        </a>
        <a href="<?php echo base_url() . "agricultura"; ?>" onmouseover="document.agricultura.src='<?php echo base_url() . "public/images/AGRICULTURA-02.png"; ?>'"
           onmouseout="document.agricultura.src='<?php echo base_url() . "public/images/AGRICULTURA-01.png"; ?>'" title="Canal Agricultura">
            <img name="agricultura" src=<?php echo base_url() . "public/images/AGRICULTURA-01.png"; ?> width="190px">
        </a>
        <a href="#" onmouseover="document.sair.src='<?php echo base_url() . "public/images/SAIR-02.png"; ?>'"
           onmouseout="document.sair.src='<?php echo base_url() . "public/images/SAIR-01.png"; ?>'" title="Sair">
            <img name="sair" src=<?php echo base_url() . "public/images/SAIR-01.png"; ?> width="190px">
        </a>
    </div>
</head>
<body>







