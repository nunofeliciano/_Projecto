<div id="container">
    <h1>Gravar Em:</h1>
    <div id="corpo"> 
        <div id="centro"> 
            <a href="<?php echo base_url()."savevideo?id=1"; ?>" onmouseover="document.vivencias.src='<?php echo base_url()."public/images/VIVENCIAS-02.png"; ?>'"
               onmouseout="document.vivencias.src='<?php echo base_url()."public/images/VIVENCIAS-01.png"; ?>'" >
                <img class="left_image" name="vivencias" src=<?php echo base_url() . "public/images/VIVENCIAS-01.png"; ?> width="280px">
            </a>
            
            <a href="<?php echo base_url()."savevideo?id=2"; ?>" onmouseover="document.gastronomia.src='<?php echo base_url()."public/images/GASTRONOMIA-02.png"; ?>'"
               onmouseout="document.gastronomia.src='<?php echo base_url()."public/images/GASTRONOMIA-01.png"; ?>'">
                <img class="center_image" name="gastronomia" src=<?php echo base_url() . "public/images/GASTRONOMIA-01.png"; ?> width="280px">
            </a>
            
            <a href="<?php echo base_url()."savevideo?id=3"; ?>" onmouseover="document.agricultura.src='<?php echo base_url()."public/images/AGRICULTURA-02.png"; ?>'"
               onmouseout="document.agricultura.src='<?php echo base_url()."public/images/AGRICULTURA-01.png"; ?>'">
                <img class="right_image" name="agricultura" src=<?php echo base_url() . "public/images/AGRICULTURA-01.png"; ?> width="280px">
            </a>
 
        </div>  
    </div>
</div>
