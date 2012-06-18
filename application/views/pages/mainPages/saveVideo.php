
<div id="container_save_video">
    <?php
    $id_vivencias = $_GET['id'];

    $nome_canal = null;

    if ($id_vivencias == 1) {
        $nome_canal = "vivencias";
    } else if ($id_vivencias == 2) {
        $nome_canal = "gastronomia";
    } else if ($id_vivencias == 3) {
        $nome_canal = "agricultura";
    }

    //Cria a pasta caso ainda nao exista uma pasta para o utilizador
    $filename = "application/views/pages/mainPages/videofiles/" . $user_information['id'];
    if (!file_exists($filename)) {

        mkdir($filename, 0777);
    }
    ?>
    <h1>
        <?php
        $var = array();
        date_default_timezone_set('Europe/Lisbon');
        $today = date("Y-m-d H.i.s");
        $video_value = $user_information['name'] . "_" . $today . $nome_canal . ".mp4";

        $value = "http://localhost/_Projecto/application/views/pages/mainPages/videofiles/" . $user_information['id'] . "/";
        ?>
    </h1>
    <div id="corpo"> 
        <div id="esquerda"> 
            <input id="gravar" TYPE=button VALUE="Gravar" STYLE="width:70;font-family:Tahoma;font-size:10pt" onClick="RECORD_RP();">
            <a href="#" id="stop" onclick="STOP_RP();"onmouseover="document.stop_save.src='<?php echo base_url() . "public/images/STOP-02.png"; ?>'"
               onmouseout="document.stop_save.src='<?php echo base_url() . "public/images/STOP-01.png"; ?>'" title="Parar Gravação">
                <img name="stop_save" src=<?php echo base_url() . "public/images/STOP-01.png"; ?> width="190px">
            </a>
            <a href="<?php echo "added_video?name=".$video_value;?>">
                    <input id="gravar_video" TYPE=button VALUE="Confirmar" onclick="UPLOAD_RP();">
                </a>
            <FORM name="Gui_RP" onsubmit="event.returnValue=false;return false;">
                <input TYPE=text NAME="Timer">
                <input id="name_video"TYPE=text NAME="FileName" VALUE="<?php echo $video_value; ?>">
                
            </FORM>
        </div>  
        <div id="direita_video"> 

            <SPAN ID="loading" style="visibility:visible">
                <div align="left" style="color:#000000;font-family: Verdana, Arial, Helvetica, sans-serif;font-size:14px">
                    Loading Java applet...
                </div>
            </SPAN>



            <SPAN ID="loaded" style="visibility:hidden">
                <applet
                    ID	   = "applet"
                    ARCHIVE  = "VideoApplet.jar"
                    codebase = "<?php echo base_url() . "public/applet/"; ?>"
                    code     = "com.vimas.videoapplet.VimasVideoApplet.class"
                    name     = "VimasVideoApplet"
                    width    = "326"
                    height   = "240"
                    align    = "middle">

                    <param name="left" value="100">
                    <param name="top" value="200">
                    <PARAM NAME = "Registration"	VALUE = "demo">
                    <PARAM NAME = "LocalizationFile" VALUE = "http://localhost/_Projecto/application/views/pages/mainPages/localization.xml">
                    <PARAM NAME = "ServerScript"	VALUE = "http://localhost/_Projecto/application/views/pages/mainPages/retrive_v.php">
                    <PARAM NAME = "VideoServerFolder"	VALUE = "<?php echo $value; ?>">
                    <PARAM NAME = "BlockSize"	VALUE = "10240">
                    <PARAM NAME = "UserServerFolder"VALUE = "mp4">
                    <PARAM NAME = "TimeLimit"	VALUE = "30">
                    <PARAM NAME = "LowQuality" 	VALUE = "96,24">
                    <PARAM NAME = "NormalQuality" 	VALUE = "160,32">
                    <PARAM NAME = "HighQuality" 	VALUE = "256,48">

                    <PARAM NAME = "FrameSize"		VALUE = "large">
                    <PARAM NAME = "interface"		VALUE = "compact">

                    <PARAM NAME = "UserPostVariables"	VALUE = "name,country">
                    <PARAM NAME = "name"			VALUE = "Vimas Video Recorder">
                    <PARAM NAME = "country"			VALUE = "Ukraine">

                </applet>
            </span>
        </div> 
    </div> 
</div>
