<h3>Adicionar Amigos</h3>
<div id="container">


    <div id="conteudo_amigos">
        <?php
        if ($count_users_not_friends == 0) {
            
        } else {
            ?>
            <div id = "left_amigos">
                <div id="add_amigos_carrousel" class="jcarousel-skin-tango">
                    <ul>
                        <?php
                        for ($index = 0; $index < $count_users_not_friends; $index++) {
                            
                            //echo $not_friends[$index]['name_user']."<br/>";
                            $img_out = "document.img" . $index . ".src='" . base_url() . "public/images/add_2.png'";
                            $img_on = "document.img" . $index . ".src='" . base_url() . "public/images/add.png'";
                            ?>
                            <li> <a href = "<?php echo base_url() . "added?index=" . $not_friends[$index]['id_user']; ?>" onmouseover = "<?php echo $img_out; ?>"
                                    onmouseout = "<?php echo $img_on; ?>" title = "" >
                                    <img name = "<?php echo "img" . $index; ?>" src = <?php echo base_url() . "public/images/add.png"; ?> width="120px" style="border-bottom: 1px solid #D0D0D0;">
                                </a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>

            </div>
            <div id="center_amigos">
                <div id="add_amigos_carrousel2" class="jcarousel-skin-tango">
                    <ul>
                        <?php
                        for ($index = 0; $index < $count_users_not_friends; $index++) {
                            if ($not_friends[$index]['url_user'] == "") {
                                ?>
                                <li><img src=<?php echo base_url() . "public/images/semfoto.png"; ?> width="120px" height="75px" style="border-bottom: 1px solid #D0D0D0;"></li>
                            <?php } else {
                                ?>
                                <li><img src=<?php echo base_url() . $not_friends[$index]['url_user']; ?> width="60px" height="60px" style=" margin-left: 45%; margin-top: 5%"></li> 
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div id="center_details">
                <div id="add_amigos_carrousel3" class="jcarousel-skin-tango">
                    <ul>
                        <?php
                        for ($index = 0; $index < $count_users_not_friends; $index++) {
                            ?>
                            <li id="carou3">

                                <form id="<?php echo $index; ?>">
                                    <br/>
                                    <label>Nome: </label>
                                    <br />
                                    <label><?php echo $not_friends[$index]['name_user']; ?></label>       
                                </form>   

                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>

        </div>
        <?php
        if ($count_users_not_friends != 0) {
            ?>
            <div id="right_amigos" class="jcarousel-scroll">
                <form action="">
                    <a href="#" onmouseover="document.up.src='<?php echo base_url() . "public/images/UP-02.png"; ?>'"
                       onmouseout="document.up.src='<?php echo base_url() . "public/images/UP-01.png"; ?>'" id="mycarousel-prev">
                        <img name="up" src=<?php echo base_url() . "public/images/UP-01.png"; ?> width="250px" height="50px">
                    </a> 
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <a href="#" onmouseover="document.down.src='<?php echo base_url() . "public/images/DOWN-02.png"; ?>'"
                       onmouseout="document.down.src='<?php echo base_url() . "public/images/DOWN-01.png"; ?>'" id="mycarousel-next">
                        <img name="down" src=<?php echo base_url() . "public/images/DOWN-01.png"; ?> width="250px" height="50px">
                    </a>
                </form>
            </div>  
            <?php
        }
        ?>


    </div>
</div>
