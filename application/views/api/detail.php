
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>带本书给家乡的孩子</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/css/x-admin.css" media="all">
    <link rel="stylesheet" href="/static/css/app.css" media="all">
    <link rel="stylesheet" href="/static/lib/fontello/css/fontello.css" media="all">
    <style type="text/css">
        .icon-play-circled, .icon-pause-circled {font-size: 200%;}
    </style>
</head>
<body>
<div>
    <div>
        <img src="/static/images/1_01.png" width="100%">
    </div>
    <div>

        <div class="f-l" style="width:23%"><img src="/static/images/2_02.png" width="100%"></div>
        <div class="f-l t-c" style="width:29%;"><img src="/static/images/2_03.png" width="100%"></div>
        <div class="f-l" style="width:48%"><img src="/static/images/2_04.png" width="100%"></div>
    </div>
    <div>
        <img src="/static/images/1_05.png" width="100%">
    </div>
    <div>
        <img src="/static/images/1_06.png" width="100%">
    </div>
    <div>
        <div class="f-l" style="width:53%"><img src="/static/images/2_07.png" width="100%"></div>
        <div class="f-l" style="width:47%"><img src="/static/images/2_08.png" width="100%"></div>
    </div>
    <div>
        <img src="/static/images/1_09.png" width="100%">
    </div>
    <div>
        <a href="http://u.eqxiu.com/s/nE0Nb675"><img src="/static/images/1_10.png" width="100%"></a>
    </div>
    <div>
        <img src="/static/images/1_11.png" width="100%">
    </div>
    <div>
        <a href="http://u.eqxiu.com/s/nE0Nb675"><img src="/static/images/1_12.png" width="100%"></a>
    </div>
    <div>
        <img src="/static/images/1_13.png" width="100%">
    </div>
    <!--<div class="x-nav" style="border:0px;font-size:140%;margin-bottom:10px;padding:0px;position: absolute;top:50px;color: white;overflow: inherit;left:20px; font-weight:bold; line-height:25px;letter-spacing:4px; ">
        <div>我是第位为山区孩子读诗的人</div>
        <div>快来和我一起为爱读诗</div>
        <div class="x-right">
            <i class="icon-play-circled" id="i_start" onclick="playFn()"></i>
            <i class="icon-pause-circled" id="i_stop" onclick="playFn()" style="display: none;"></i>
        </div>
    </div>
    <div style="position: absolute;top:2805px;left:75px;font-size:120%;font-weight:bold;letter-spacing:6px;">
        <a href="http://u.eqxiu.com/s/nE0Nb675" style="color: white">详细地址</a>
    </div>
    <div style="position: absolute;top:2940px;left:65px;font-size:140%;">
        <a href="http://u.eqxiu.com/s/nE0Nb675" style="color: white;text-decoration: underline;">http://u.eqxiu.com/s/nE0Nb675</a>
    </div>
    -->

    <p>
        <audio id="audio" src="<?php echo $row->url?>" controls="controls" style="display: none">
        </audio>
        <input type="hidden" id="btnPlay" value="播放"/>
        　　<script>
            function playFn(){
                var audio=document.getElementById('audio');
                if (document.getElementById('btnPlay').value =="播放") {
                    audio.play();
                    audio.loop=true;
                    document.getElementById('btnPlay').value='暂停';
                    document.getElementById('i_start').setAttribute("style", "display:none;");
                    document.getElementById('i_stop').setAttribute("style", "display:block;");
                }else{
                    audio.pause();
                    document.getElementById('btnPlay').value='播放';
                    document.getElementById('i_start').setAttribute("style", "display:block;");
                    document.getElementById('i_stop').setAttribute("style", "display:none;");
                }
            }
        </script>
    </p>
</div>
</body>
</html>