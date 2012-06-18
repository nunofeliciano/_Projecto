<?php
$url = $get_video['url_video'];
$rest = substr($get_video['url_video'], -3);
?>
<div id="container">


    <div id="container_view_video">
        <div id="view_stop">
            <a href="<?php echo base_url() . "videos"; ?>" onmouseover="document.add_friend.src='<?php echo base_url() . "public/images/STOP-02.png"; ?>'"
                   onmouseout="document.add_friend.src='<?php echo base_url() . "public/images/STOP-01.png"; ?>'" title="Adicionar Amigos">
                    <img name="add_friend" src=<?php echo base_url() . "public/images/STOP-01.png"; ?> width="200px">
                </a>
        </div>
        <div id="view_video_play">
            <video id="my_video_1" class="video-js vjs-default-skin" controls
                   data-setup='{ "controls": true, "autoplay": true}'
                   preload="auto" width="400" height="220" poster="<?php echo $get_video['thumbail']; ?>">
                <source src="<?php echo $url; ?>" type='<?php echo 'video/' . $rest; ?>'>
            </video>
        </div>

    </div>



</div>