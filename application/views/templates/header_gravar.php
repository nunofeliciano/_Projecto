<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php base_url(); ?>public/style/maincss.css" type="text/css"/>
        
        <SCRIPT language="JavaScript">
            function vision()	
            {
                document.getElementById("loading").style.visibility="hidden";
                document.getElementById("loaded").style.visibility="visible";
                document.getElementById("stop").style.visibility="hidden";
                document.getElementById("name_video").style.visibility="hidden";
                document.getElementById("gravar_video").style.visibility="hidden";

            }

            function setStatus(num, str)	{
                // Handle status changes
                //**********************
                // Status codes:
                // StartUpload = 0;
                // UploadDone = 1;
                // StartRecord = 2;
                // StartPlay = 3;
                // PauseSet = 4;
                // Stopped = 5;
                document.Gui_RP.Status.value = str;
            }
            
            function setTimer(str)	{
                document.Gui_RP.Timer.value = str;
            }

            function RECORD_RP()	{
                document.VimasVideoApplet.RECORD_VIDEO();
                document.getElementById("gravar").style.visibility="hidden";
                document.getElementById("stop").style.visibility="visible";
            }

            function STOP_RP()	{
                document.VimasVideoApplet.STOP_VIDEO();
                
                document.getElementById("stop").style.visibility="hidden";
                document.getElementById("gravar_video").style.visibility="visible";
//                document.VimasVideoApplet.UPLOAD_VIDEO(document.Gui_RP.FileName.value);
            }

            function UPLOAD_RP()	{
                document.VimasVideoApplet.UPLOAD_VIDEO(String(document.Gui_RP.FileName.value));
            }

        </SCRIPT>
        
    <div class="buttons" id="buttons">    
        <a href="<?php echo base_url() . "gravar"; ?>" onmouseover="document.gravar.src='<?php echo base_url() . "public/images/GRAVAR-01.png"; ?>'"
           onmouseout="document.gravar.src='<?php echo base_url() . "public/images/GRAVAR-02.png"; ?>'" title="Gravar Video">
            <img name="gravar" src=<?php echo base_url() . "public/images/GRAVAR-02.png"; ?> width="190px">
        </a>

        <a href="<?php echo base_url() . "videos"; ?>" onmouseover="document.videos.src='<?php echo base_url() . "public/images/VIDEOS-02.png"; ?>'"
           onmouseout="document.videos.src='<?php echo base_url() . "public/images/VIDEOS-01.png"; ?>'" title="Ver Videos">
            <img name="videos" src=<?php echo base_url() . "public/images/VIDEOS-01.png"; ?> width="190px">
        </a>
        <a href="<?php echo base_url()."noticias?new=defeito"; ?>" onmouseover="document.noticias.src='<?php echo base_url() . "public/images/NOTICIAS-02.png"; ?>'"
           onmouseout="document.noticias.src='<?php echo base_url() . "public/images/NOTICIAS-01.png"; ?>'" title="Noticias">
            <img name="noticias" src=<?php echo base_url() . "public/images/NOTICIAS-01.png"; ?> width="190px">
        </a>

        <a href="<?php echo base_url()."vivencias"; ?>" onmouseover="document.canais.src='<?php echo base_url() . "public/images/CANAIS-02.png"; ?>'"
           onmouseout="document.canais.src='<?php echo base_url() . "public/images/CANAIS-01.png"; ?>'" title="Canais">
            <img name="canais" src=<?php echo base_url() . "public/images/CANAIS-01.png"; ?> width="190px">
        </a>

        <a href="#" onmouseover="document.sair.src='<?php echo base_url() . "public/images/SAIR-02.png"; ?>'"
           onmouseout="document.sair.src='<?php echo base_url() . "public/images/SAIR-01.png"; ?>'" title="Sair">
            <img name="sair" src=<?php echo base_url() . "public/images/SAIR-01.png"; ?> width="190px">
        </a>
    </div>
</head>
<body onLoad="vision()">
