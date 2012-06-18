<div id="topmessage">
    <?php
    if ($count_user_friends != 0) {
        ?>
        <div id="message">
            <?php
        } else{
            ?>
            <div id="message"  style="width: 100%;">
                <?php
            }
            ?>
            <h3>Bem Vindo <?php echo $user_information['name'] ?></h3>
        </div>
        <div id="friends_message">
            <?php
            if ($count_user_friends != 0) {
                ?>
                <h3>Amigos</h3>
                <?php
            }
            ?>
        </div>
    </div>

    <div id="container_welcome">


        <div id="conteudo_welcome"> 
            <div id = "left_welcome">
                <?php
                if ($user_information['url'] == "") {
                    ?>
                    <img src=<?php echo base_url() . "public/images/semfoto.png"; ?> width="200px" height="130px">
                    <?php
                } else {
                    ?>
                    <img src=<?php echo base_url() . $user_information['url']; ?> width="120px" height="120px">
                    <?php
                }
                ?>
                <a href="<?php echo base_url() . "add_amigos"; ?>" onmouseover="document.add_friend.src='<?php echo base_url() . "public/images/add_friends_2.png"; ?>'"
                   onmouseout="document.add_friend.src='<?php echo base_url() . "public/images/add_friends.png"; ?>'" title="Adicionar Amigos">
                    <img name="add_friend" src=<?php echo base_url() . "public/images/add_friends.png"; ?> width="200px">
                </a>
            </div>


            <div id="center_welcome"> 
                <div id="add_amigos_carrousel2" class="jcarousel-skin-tango">
                    <?php
                    if ($count_user_friends == 0) {
                        
                    } else {
                        ?>

                        <ul>
                            <?php
                            for ($index = 0; $index < $count_user_friends; $index++) {
                                if ($friends[$index]['url'] == "") {
                                    ?>
                                    <li><img src=<?php echo base_url() . "public/images/semfoto.png"; ?> width="120px" height="75px" style="border-bottom: 1px solid #D0D0D0;"></li>
                                <?php } else {
                                    ?>
                                    <li><img src=<?php echo base_url() . $friends[$index]['url']; ?> width="60px" height="60px" style=" margin-left: 45%; margin-top: 5%"></li> 
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div id="center_welcome_details">
                    <div id="add_amigos_carrousel3" class="jcarousel-skin-tango">
                        <ul>
                            <?php
                            for ($index = 0; $index < $count_user_friends; $index++) {
                                ?>
                                <li id="carou3">

                                    <form id="<?php echo $index; ?>">
                                        <br/>
                                        <label>Nome: </label>
                                        <br />
                                        <label><?php echo $friends[$index]['name']; ?></label>       
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
                if ($count_user_friends != 0) {
            ?>
            <div id="direita_welcome">
                <form action="">
                    <a href="#" onmouseover="document.up.src='<?php echo base_url() . "public/images/UP-02.png"; ?>'"
                       onmouseout="document.up.src='<?php echo base_url() . "public/images/UP-01.png"; ?>'" id="mycarousel-prev">
                        <img name="up" src=<?php echo base_url() . "public/images/UP-01.png"; ?> width="250px" height="50px">
                    </a> 
                    <br/><br/><br/><br/><br/><br/><br/><br/>
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
