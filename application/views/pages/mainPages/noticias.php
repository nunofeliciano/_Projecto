<div id="containern">
    <!--    <h1>Noticias</h1>-->
    <div id="corpo"> 
        <div id="esquerdan"> 
            <?php
            //echo $count_users_news;
            if ($count_users_news == 0) {
                
            } else {
                for ($index = 0; $index < $count_users_news; $index++) {
                    ?>

                    <a href="?new=<?php echo $news[$index]['url_site']; ?>"> 
                        <img src=<?php echo $news[$index]['url_icon']; ?> width="110px" title=<?php echo $news[$index]['title'] ?> >
                    </a>
                    <br/>
                    <?php
                }
                ?>

                <?php
                ?>

            </div>  
            <div id="direitan"> 
                <?php
                for ($index = 0; $index < $count_users_news; $index++) {
                    if ($index == 0) {
                        $defeito_url = $news[$index]['url_site'];
                    }
                }

                $news = $_GET['new'];
                if ($news == "defeito") {
                    ?>
                    <object data=<?php echo $defeito_url; ?> width=95% height = "450px"> <embed src=<?php echo $defeito_url; ?>  width=95% height=100%> </embed> Error: Embedded data could not be displayed. </object>

        <?php
    } else {
        ?>

                    <object data=<?php echo $news; ?> width=95% height = "450px"> <embed src=<?php echo $news; ?>  width=95% height=100%> </embed> Error: Embedded data could not be displayed. </object>    

        <?php
    }
}
?>

        </div> 
    </div> 

</div>
