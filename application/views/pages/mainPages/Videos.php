<h3>Videos</h3>
<div id="container">

    <?php
    if ($count_videos != 0) {
        ?>

        <div id="conteudo_videos">
            <div id="left_videos">
                <div id="share_videos_img_carrousel" class="jcarousel-skin-tango">
                    <ul>
                        <?php
                        for ($index = 0; $index < $count_videos; $index++) {
                            ?>
                            <li> 
                                <img src="<?php echo base_url() . $videos[$index]['thumbail']; ?>" style=" height: 40px;width:80px; border-bottom: 1px solid #D0D0D0; margin-top: 25%;"><br/>
                            </li>
                            <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <div id="center_videos">
                <div id="share_videos_channel_carrousel" class="jcarousel-skin-tango">
                    <ul>
                        <?php
                        for ($index = 0; $index < $count_videos; $index++) {
                            ?>
                            <li> 
                                <form style="border-bottom: 1px solid #D0D0D0; height: 75px; width: 100%; ">
                                    <br/>
                                    <label>Canal: <?php echo $videos[$index]['canal_video']; ?></label>
                                </form>
                            </li>
                            <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <div id="center_details_videos">

                <div id="share_videos_play_carrousel" class="jcarousel-skin-tango">
                    <ul>
                        <?php
                        for ($index = 0; $index < $count_videos; $index++) {

                            $img_out = "document.im" . $index . ".src='" . base_url() . "public/images/PLAY-02.png'";
                            $img_on = "document.im" . $index . ".src='" . base_url() . "public/images/PLAY-01.png'";
                            ?>
                            <li> <a href = "<?php echo base_url()."view_video?id=".$videos[$index]['id_video']; ?>" onmouseover = "<?php echo $img_out; ?>"
                                    onmouseout = "<?php echo $img_on; ?>" title = "" >
                                    <img name = "<?php echo "im" . $index; ?>" src = <?php echo base_url() . "public/images/PLAY-01.png"; ?> width="120px" style="border-bottom: 1px solid #D0D0D0;">
                                </a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>


            </div>
            <div id="center_share_videos">
                <div id="share_videos_carrousel" class="jcarousel-skin-tango">
                    <ul>
                        <?php
                        for ($index = 0; $index < $count_videos; $index++) {

                            if ($videos[$index]['share_option'] == 0) {
                                $img_out = "document.img" . $index . ".src='" . base_url() . "public/images/PARTILHAR-02.png'";
                                $img_on = "document.img" . $index . ".src='" . base_url() . "public/images/PARTILHAR-01.png'";
                                ?>
                                <li> 
                                    <a href = "#" onmouseover = "<?php echo $img_out; ?>"
                                       onmouseout = "<?php echo $img_on; ?>" title = "" >
                                        <img name = "<?php echo "img" . $index; ?>" src = <?php echo base_url() . "public/images/PARTILHAR-01.png"; ?> width="120px" style="border-bottom: 1px solid #D0D0D0;">
                                    </a>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li>
                                    <img src = <?php echo base_url() . "public/images/PARTILHADO-02.png"; ?> width="120px" style="border-bottom: 1px solid #D0D0D0;">
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>

            </div>
            <div id="right_videos" class="jcarousel-scroll">
                <form action="">
                    <a href="#" onmouseover="document.up.src='<?php echo base_url() . "public/images/UP-02.png"; ?>'"
                       onmouseout="document.up.src='<?php echo base_url() . "public/images/UP-01.png"; ?>'">
                        <img name="up" src=<?php echo base_url() . "public/images/UP-01.png"; ?> width="250px" height="50px">
                    </a> 
                    <br/><br/><br/><br/><br/><br/>
                    <a href="#" onmouseover="document.down.src='<?php echo base_url() . "public/images/DOWN-02.png"; ?>'"
                       onmouseout="document.down.src='<?php echo base_url() . "public/images/DOWN-01.png"; ?>'">
                        <img name="down" src=<?php echo base_url() . "public/images/DOWN-01.png"; ?> width="250px" height="50px">
                    </a>
                </form>
            </div>


        </div><?php } ?>

</div>

