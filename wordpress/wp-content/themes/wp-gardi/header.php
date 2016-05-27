<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" async="" src="<?php echo get_template_directory_uri(); ?>/js/code.js"></script>
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/media-query.css">
    <base href=".">
    <meta name="viewport" content="width=1020">
    <meta name="format-detection" content="telephone=no">
    <meta name="wmail-verification" content="30678ed36474eea7">
    <link rel="apple-touch-icon" sizes="57x57" href="http://www.gardi.biz/apple-touch-icon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.gardi.biz/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.gardi.biz/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.gardi.biz/apple-touch-icon-144.png">
    <script async="" src="<?php echo get_template_directory_uri(); ?>/js/gtm.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/fotorama.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/fotorama.js"></script>
    <style type="text/css"></style>
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.transit.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.ba-throttle-debounce.min.js"></script>
 <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->





    <script type="text/javascript">
    $(document).ready(function() {

        $("#carousel-of-news").carouFredSel({
            infinite: false,
            direction: "up",
            circular: true,
            auto: {
                items: 1,
                duration: 2000
            },
            scroll: {
                items: 1,
                duration: 2000
            },

            prev: {
                button: "#carousel-of-news_prev",
                key: "down"
            },
            next: {
                button: "#carousel-of-news_next",
                key: "up"
            },
            pagination: "#carousel-of-news_pag"
        });

        //  var $scrollingDiv = $(".gardi-advertisement");
        //  if($scrollingDiv.height() !== null) {
        //     $scrollingDiv.sticky({topSpacing:65});
        //  }

    });
    </script>
    <!--
    <script type="text/javascript" language="javascript" src="assets/js/snow.js"></script>
    <script>
        $(document).ready( function(){
            $.fn.snow({ minSize: 5, maxSize: 50, newOn: 500, flakeColor: 'white' });
        });
    </script>
    -->
    <style type="text/css"></style>
    <style type="text/css" id="consultsystems_style">
    .consultsystems {
        -khtml-opacity: 0;
        -moz-opacity: 0;
        opacity: 0;
        position: absolute;
        margin: 0;
        padding: 0;
        z-index: 1000000;
    }

    #consultsystems_widget,
    #consultsystems_widget * {
        z-index: 1000000;
        border: none;
        background: none;
        margin: 0;
        padding: 0;
    }

    .consultsystems_pre {
        transition: top .3s ease, left .3s ease, opacity .3s ease, width .3s ease, height .3s ease;
        -moz-transition: top .3s ease, left .3s ease, opacity .3s ease, width .3s ease, height .3s ease;
        -webkit-transition: top .3s ease, left .3s ease, opacity .3s ease, width .3s ease, height .3s ease;
        border: none;
        margin: 0;
        padding: 0;
    }

    .consultsystems_hidden {
        -khtml-opacity: 0;
        -moz-opacity: 0;
        opacity: 0;
        height: 0;
        width: 0;
        border: none;
        margin: 0;
        padding: 0;
    }

    .consultsystems_visible {
        -khtml-opacity: 1;
        -moz-opacity: 1;
        opacity: 1;
        border: none;
        margin: 0;
        padding: 0;
    }

    #consultsystems_widget .consultsystems a {
        border: none;
        text-decoration: none;
        margin: 0;
        padding: 0;
    }

    #consultsystems_widget .consultsystems_widget {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }

    #consultsystems_widget .consultsystems_title {
        cursor: default;
        left: 0;
        top: 0;
        right: 0;
        position: static;
        width: auto;
        text-align: left;
    }

    #consultsystems_widget .consultsystems_title span {
        text-align: left;
        cursor: default;
        font-size: 14px!important;
        font-family: Arial!important;
        font: bold 14px/35px Arial !important;
        font-weight: bold!important;
        display: block!important;
        line-height: 35px;
        color: #fff!important;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, .5)!important;
        -moz-text-shadow: 1px 1px 1px rgba(0, 0, 0, .5)!important;
        -webkit-text-shadow: 1px 1px 1px rgba(0, 0, 0, .5)!important;
        margin: 0;
        display: block;
        height: 35px;
        padding-left: 15px;
    }

    #consultsystems_widget .consultsystems_title strong {
        text-align: left;
        display: block;
        overflow: hidden;
    }

    #consultsystems_widget .consultsystems_title b {
        display: none;
        /*right:0;width:6px;height:35px;overflow:hidden;position:absolute;float:right;*/
    }

    #consultsystems_widget .consultsystems_iframe_div {
        border-left: solid 1px #DFDFDF;
        border-right: solid 1px #DFDFDF;
        background: #fff;
        min-height: 100px;
        position: absolute;
        left: 0;
        right: 0;
        top: 35px;
        bottom: 10px;
    }

    #consultsystems_widget .consultsystems_bottom {
        height: 12px;
        display: block;
        overflow: hidden;
        width: 100%;
        right: 0;
        left: 0;
        position: absolute;
        bottom: 0;
    }

    #consultsystems_widget .consultsystems_bottom strong {
        display: block;
        height: 12px;
        overflow: hidden;
        background: url(http://consultsystems.ru/script/im/images/bottom.png) repeat-x 0 0;
        left: 0;
        right: 12px;
        margin-right: 12px;
        position: relative;
    }

    #consultsystems_widget .consultsystems_bottom b {
        display: block;
        height: 12px;
        width: 12px;
        overflow: hidden;
        background: url(http://consultsystems.ru/script/im/images/bottom-r.png) repeat-x 0 0;
        right: 0;
        float: right;
        position: absolute;
    }

    .consultsystems_fixed .consultsystems_shadows {
        display: block!important;
    }

    .consultsystems_shadow_lefttop {
        position: absolute;
        overflow: hidden;
        left: -3px;
        top: 0;
        width: 3px;
        height: 20px;
        background: url(http://consultsystems.ru/script/im/images/shadow-corners.png) no-repeat 0 0;
    }

    #consultsystems_widget .consultsystems_shadow_righttop {
        position: absolute;
        overflow: hidden;
        right: -7px;
        top: 10px;
        width: 7px;
        height: 10px;
        background: url(http://consultsystems.ru/script/im/images/shadow-corners.png) no-repeat -27px 0;
    }

    #consultsystems_widget .consultsystems_shadow_right {
        position: absolute;
        overflow: hidden;
        right: -7px;
        width: 7px;
        top: 20px;
        bottom: 11px;
        background: url(http://consultsystems.ru/script/im/images/shadow-both.png) repeat-y -3px 0;
    }

    #consultsystems_widget .consultsystems_shadow_rightbottom {
        position: absolute;
        overflow: hidden;
        right: -7px;
        bottom: -7px;
        width: 18px;
        height: 18px;
        background: url(http://consultsystems.ru/script/im/images/shadow-corners.png) no-repeat -16px -20px;
    }

    #consultsystems_widget .consultsystems_shadow_bottom {
        position: absolute;
        overflow: hidden;
        left: 13px;
        right: 11px;
        bottom: -7px;
        height: 7px;
        background: url(http://consultsystems.ru/script/im/images/shadow-bottom.png) repeat-x 0 0;
    }

    #consultsystems_widget .consultsystems_shadow_leftbottom {
        position: absolute;
        overflow: hidden;
        left: -3px;
        bottom: -7px;
        width: 16px;
        height: 18px;
        background: url(http://consultsystems.ru/script/im/images/shadow-corners.png) no-repeat 0 -20px;
    }

    #consultsystems_widget .consultsystems_shadow_left {
        position: absolute;
        overflow: hidden;
        left: -3px;
        width: 3px;
        top: 20px;
        bottom: 11px;
        background: url(http://consultsystems.ru/script/im/images/shadow-both.png) repeat-y 0 0;
    }

    #consultsystems_widget .consultsystems_resizer {
        position: absolute;
        overflow: hidden;
        right: 0;
        bottom: 0;
        width: 18px;
        height: 18px;
        cursor: se-resize;
    }

    #consultsystems_widget .consultsystems_close {
        cursor: pointer;
        position: absolute;
        width: 13px;
        height: 35px;
        right: 0;
        top: 0;
    }

    #consultsystems_widget .consultsystems_close i {
        position: absolute;
        background: url(http://consultsystems.ru/script/im/images/close.png) no-repeat 0 0;
        overflow: hidden;
        width: 13px;
        height: 13px;
        right: 27px;
        top: 12px;
    }

    #consultsystems_widget .consultsystems_close:hover i {
        background-position: -16px 0;
    }

    #consultsystems_widget .consultsystems_close:active i {
        background-position: -32px 0;
    }

    #consultsystems_widget .consultsystems_end {
        cursor: pointer;
        position: absolute;
        width: 13px;
        height: 35px;
        right: 0;
        top: 0;
    }

    #consultsystems_widget .consultsystems_end i {
        position: absolute;
        background: url(http://consultsystems.ru/script/im/images/end.png) no-repeat 0 0;
        overflow: hidden;
        width: 13px;
        height: 13px;
        right: 10px;
        top: 12px;
    }

    #consultsystems_widget .consultsystems_end:hover i {
        background-position: -16px 0;
    }

    #consultsystems_widget .consultsystems_end:active i {
        background-position: -32px 0;
    }

    #consultsystems_widget .consultsystems_iframe_over,
    .consultsystems_iframe_loading {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #fff;
    }

    #consultsystems_widget .consultsystems_iframe_over {
        display: none;
        filter: alpha(opacity=10);
        -khtml-opacity: 0.1;
        -moz-opacity: 0.1;
        opacity: 0.1;
    }

    #consultsystems_widget .consultsystems_iframe_loading {
        background: url(http://consultsystems.ru/script/im/images/preloader.gif) no-repeat center center;
    }

    #consultsystems_widget .consultsystems_iframe_over_show {
        display: block;
    }

    .consultsystems_fixed {
        position: fixed;
    }

    #consultsystems_widget .consultsystems_shadows,
    .consultsystems_closed,
    #consultsystems_widget .consultsystems_iframe_loaded {
        display: none;
    }

    #consultsystems_widget .consultsystems_title,
    #consultsystems_widget .consultsystems_title strong,
    #consultsystems_widget .consultsystems_title span {
        border-radius: 0px 0px 0 0;
        -moz-border-radius: 0px 0px 0 0;
        -webkit-border-radius: 0px 0px 0 0
    }

    .consultsystems_button_wrap {
        position: absolute;
        cursor: default;
        display: block;
        -khtml-opacity: 1;
        z-index: 100000;
        -moz-opacity: 1;
        opacity: 1;
        transition: opacity .5s ease;
        -moz-transition: opacity .5s ease;
        -webkit-transition: opacity .5s ease;
    }

    .consultsystems_button_wrap,
    .consultsystems_button_wrap * {
        border: none;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-select: none;
        margin: 0;
        padding: 0;
    }

    .consultsystems_button_wrap .consultsystems_button {
        z-index: 1000000;
        display: block;
        text-decoration: none;
        position: relative;
    }

    .consultsystems_button_hide {
        display: none;
    }

    .consultsystems_button_outscreen {
        left: -1000px!important;
        top: -10000px!important;
        right: auto!important;
        bottom: auto!important;
    }

    .consultsystems_button_left-top {
        top: 0;
        left: 0;
    }

    .consultsystems_button_center-top {
        top: 0;
        left: 50%;
    }

    .consultsystems_button_right-top {
        top: 0;
        right: 0;
    }

    .consultsystems_button_right-center {
        top: 50%;
        right: 0;
    }

    .consultsystems_button_left-bottom {
        bottom: 0;
        left: 0;
    }

    .consultsystems_button_center-bottom {
        bottom: 0;
        left: 50%;
    }

    .consultsystems_button_right-bottom {
        bottom: 0;
        right: 0;
    }

    .consultsystems_button_left-center {
        top: 50%;
        left: 0;
    }

    .consultsystems_button_wrap .consultsystems_button_pos {
        display: block;
        position: relative;
    }

    .consultsystems_button_wrap .consultsystems_button_border {
        display: block;
        border: solid 1px #619829;
        text-decoration: none;
        vertical-align: bottom;
        overflow: hidden;
        outline: none;
        margin: 0;
    }

    .consultsystems_button_wrap .consultsystems_button_in {
        cursor: pointer;
        display: block;
        text-decoration: none;
        position: relative;
        overflow: hidden;
    }

    .consultsystems_button_text {
        display: inline-block;
        font: bold 14px/32px Arial!important;
        font-family: Arial!important;
        font-weight: bold;
        border: none;
        white-space: nowrap;
        margin: 0;
    }

    .consultsystems_button_left-top .consultsystems_button_text,
    .consultsystems_button_center-top .consultsystems_button_text,
    .consultsystems_button_right-top .consultsystems_button_text,
    .consultsystems_button_left-bottom .consultsystems_button_text,
    .consultsystems_button_center-bottom .consultsystems_button_text,
    .consultsystems_button_right-bottom .consultsystems_button_text {
        padding: 0 10px 0 35px;
    }

    .consultsystems_button_right-center .consultsystems_button_text,
    .consultsystems_button_left-center .consultsystems_button_text {
        width: 33px;
        text-align: center;
        padding: 35px 0 25px;
    }

    .consultsystems_button_icon {
        display: block;
        overflow: hidden;
        position: absolute;
        left: 7px;
        top: 50%;
        background: url(http://consultsystems.ru/script/im/button/icon-1.png) no-repeat center center;
        width: 24px;
        height: 24px;
        margin-top: -12px;
    }

    .consultsystems_button_right-center .consultsystems_button_icon,
    .consultsystems_button_left-center .consultsystems_button_icon {
        left: 50%;
        margin-left: -12px;
        bottom: 7px;
        top: auto;
    }

    .consultsystems_button_status {
        display: none;
        background: url(http://consultsystems.ru/script/im/button/online.png) no-repeat 0 0;
        width: 70px;
        height: 21px;
        overflow: hidden;
        position: absolute;
        right: 7px;
        top: 50%;
        border: none;
        margin: -10px 0 0;
        padding: 0;
    }

    .consultsystems_button_right-center .consultsystems_button_status,
    .consultsystems_button_left-center .consultsystems_button_status {
        background: url(http://consultsystems.ru/script/im/button/online.png) no-repeat 0 -30px;
        width: 21px;
        height: 70px;
        left: 50%;
        top: 7px;
        bottom: auto;
        margin: 0 0 0 -10px;
    }

    .consultsystems_button_wrap .consultsystems_bubble_trans {
        transition: opacity .5s ease;
        -moz-transition: opacity .5s ease;
        -webkit-transition: opacity .5s ease;
    }

    .consultsystems_button_wrap .consultsystems_bubble {
        text-align: left;
        border: solid 1px #D3CEC9;
        background: #F9F5F1;
        width: 240px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        position: absolute;
        display: block;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.1);
        -moz-shadow: 1px 2px 3px rgba(0, 0, 0, 0.1);
        -webkit-shadow: 1px 2px 3px rgba(0, 0, 0, 0.1);
        -khtml-opacity: 1;
        -moz-opacity: 1;
        opacity: 1;
    }

    .consultsystems_button_wrap .consultsystems_bubble_in {
        text-align: left;
        font: normal 12px/15px Arial, Tahoma!important;
        color: #333333;
        display: block;
        position: relative;
    }

    .consultsystems_button_wrap .consultsystems_bubble_info {
        display: block;
        padding: 10px;
    }

    .consultsystems_button_wrap .consultsystems_bubble_arrow {
        position: absolute;
    }

    .consultsystems_button_left-top .consultsystems_bubble_arrow,
    .consultsystems_button_center-top .consultsystems_bubble_arrow {
        display: inline-block;
        width: 15px;
        height: 23px;
        top: -23px;
        left: 20px;
        background: url(http://consultsystems.ru/script/im/button/bubble-top-1.png) no-repeat 0 0;
    }

    .consultsystems_button_right-top .consultsystems_bubble_arrow {
        display: block;
        width: 15px;
        height: 23px;
        top: -23px;
        right: 20px;
        background: url(http://consultsystems.ru/script/im/button/bubble-top-2.png) no-repeat 0 0;
    }

    .consultsystems_button_right-center .consultsystems_bubble_arrow {
        display: block;
        width: 21px;
        height: 16px;
        top: 10px;
        right: -21px;
        background: url(http://consultsystems.ru/script/im/button/bubble-right.png) no-repeat 0 0;
    }

    .consultsystems_button_left-center .consultsystems_bubble_arrow {
        display: inline-block;
        width: 21px;
        height: 16px;
        top: 10px;
        left: -21px;
        background: url(http://consultsystems.ru/script/im/button/bubble-left.png) no-repeat 0 0;
    }

    .consultsystems_button_left-bottom .consultsystems_bubble_arrow,
    .consultsystems_button_center-bottom .consultsystems_bubble_arrow {
        display: inline-block;
        width: 18px;
        height: 19px;
        bottom: -19px;
        left: 20px;
        background: url(http://consultsystems.ru/script/im/button/bubble-bottom-1.png) no-repeat 0 0;
    }

    .consultsystems_button_right-bottom .consultsystems_bubble_arrow {
        display: inline-block;
        width: 18px;
        height: 19px;
        bottom: -19px;
        right: 20px;
        background: url(http://consultsystems.ru/script/im/button/bubble-bottom-2.png) no-repeat 0 0;
    }

    .consultsystems_button_right-top .consultsystems_bubble {
        top: 100%;
        right: 0;
        margin: 10px 0 0;
    }

    .consultsystems_button_right-center .consultsystems_bubble {
        top: 10px;
        left: -250px;
    }

    .consultsystems_button_left-center .consultsystems_bubble {
        top: 10px;
        left: 100%;
        margin: 0 0 0 10px;
    }

    .consultsystems_button_right-bottom .consultsystems_bubble {
        top: -100%;
        right: 10px;
        margin: -10px 0 0;
    }

    .consultsystems_button_wrap .consultsystems_bubble_info_img {
        float: left;
        display: block;
        padding: 0 10px 0 0;
        position: absolute;
        left: 10px;
        top: 10px
    }

    .consultsystems_button_wrap .consultsystems_bubble_info_text {
        text-align: left;
        display: block;
        margin-left: 55px;
        text-decoration: none;
    }

    .consultsystems_button_wrap .consultsystems_bubble_button {
        cursor: pointer;
        display: inline-block;
        margin-top: 6px;
        border-radius: 4px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        font-size: 11px;
        text-decoration: none;
        padding: 3px 8px;
        margin-left: 55px;
    }

    .consultsystems_button_wrap .consultsystems_bubble_close {
        background: url(http://consultsystems.ru/script/im/button/close.png) no-repeat 0 0;
        position: absolute;
        display: inline-block;
        right: 10px;
        top: 10px;
        width: 10px;
        height: 10px;
        overflow: hidden;
        cursor: pointer;
    }

    .consultsystems_button_wrap .consultsystems_bubble_close:hover {
        background-position: 0 -20px;
    }

    .consultsystems_button_hidden,
    .consultsystems_button_wrap .consultsystems_bubble_hidden {
        filter: alpha(opacity=0);
        -khtml-opacity: 0;
        -moz-opacity: 0;
        opacity: 0;
    }

    .consultsystems_online .consultsystems_button_status,
    .consultsystems_offline .consultsystems_button_status {
        display: block;
    }

    .consultsystems_button_wrap .consultsystems_bubble_closed,
    .consultsystems_button_closed {
        display: none;
    }

    .consultsystems_button_left-top .consultsystems_bubble,
    .consultsystems_button_center-top .consultsystems_bubble {
        top: 100%;
        left: 0;
        margin: 10px 0 0 5px;
    }

    .consultsystems_button_left-bottom .consultsystems_bubble,
    .consultsystems_button_center-bottom .consultsystems_bubble {
        top: -100%;
        left: 0;
        margin: -10px 0 0 5px;
    }

    .consultsystems_button_preopen {
        top: -10000px;
        left: -10000px
    }

    #consultsystems_widget .consultsystems_title span {
        color: #ffffff !important
    }

    #consultsystems_widget .consultsystems_title span {
        text-shadow: 1px 1px 1px rgba(0, 0, 0, .5) !important;
        -moz-text-shadow: 1px 1px 1px 1px 1px 1px rgba(0, 0, 0, .5) !important;
        -webkit-text-shadow: 1px 1px 1px 1px 1px 1px rgba(0, 0, 0, .5) !important;
    }

    #consultsystems_widget .consultsystems_title span {
        background: #8AB320;
    }

    #consultsystems_widget .consultsystems_title span {
        background: #8AB320;
        background: -moz-linear-gradient(top, #9de21d 0%, #5e9427 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #9de21d), color-stop(100%, #5e9427));
        background: -webkit-linear-gradient(top, #9de21d 0%, #5e9427 100%);
        background: -o-linear-gradient(top, #9de21d 0%, #5e9427 100%);
        background: -ms-linear-gradient(top, #9de21d 0%, #5e9427 100%);
        background: linear-gradient(top, #9de21d 0%, #5e9427 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#9de21d', endColorstr='#5e9427', GradientType=0);
    }

    #consultsystems_widget .consultsystems_title span {
        font-size: 14px !important;
        color: #ffffff !important;
        line-height: 30px !important;
        height: 31px !important;
    }

    #consultsystems_widget .consultsystems_title {
        border-top: solid 1px #619829;
        border-right: solid 1px #619829;
        border-bottom: solid 1px #619829;
        border-left: solid 1px #619829;
    }

    #consultsystems_widget .consultsystems_title strong {
        border-top: solid 1px #BEEC69;
        border-right: solid 1px #ADD76C;
        border-bottom: solid 1px #9BC070;
        border-left: solid 1px #ADD76C;
    }
    </style>
    <style type="text/css">
    .fb_hidden {
        position: absolute;
        top: -10000px;
        z-index: 10001
    }

    .fb_reposition {
        overflow: hidden;
        position: relative
    }

    .fb_invisible {
        display: none
    }

    .fb_reset {
        background: none;
        border: 0;
        border-spacing: 0;
        color: #000;
        cursor: auto;
        direction: ltr;
        font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
        font-size: 11px;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        letter-spacing: normal;
        line-height: 1;
        margin: 0;
        overflow: visible;
        padding: 0;
        text-align: left;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        visibility: visible;
        white-space: normal;
        word-spacing: normal;
    }

    .fb_reset>div {
        overflow: hidden;
    }

    .fb_link img {
        border: none;
    }

    @keyframes fb_transform {
        from {
            opacity: 0;
            transform: scale(.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .fb_animate {
        animation: fb_transform .3s forwards;
    }

    .fb_dialog {
        background: rgba(82, 82, 82, .7);
        position: absolute;
        top: -10000px;
        z-index: 10001;
    }

    .fb_reset .fb_dialog_legacy {
        overflow: visible;
    }

    .fb_dialog_advanced {
        padding: 10px;
        -moz-border-radius: 8px;
        -webkit-border-radius: 8px;
        border-radius: 8px;
    }

    .fb_dialog_content {
        background: #fff;
        color: #333;
    }

    .fb_dialog_close_icon {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
        _background-image: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);
        cursor: pointer;
        display: block;
        height: 15px;
        position: absolute;
        right: 18px;
        top: 17px;
        width: 15px;
    }

    .fb_dialog_mobile .fb_dialog_close_icon {
        top: 5px;
        left: 5px;
        right: auto;
    }

    .fb_dialog_padding {
        background-color: transparent;
        position: absolute;
        width: 1px;
        z-index: -1;
    }

    .fb_dialog_close_icon:hover {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;
        _background-image: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);
    }

    .fb_dialog_close_icon:active {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;
        _background-image: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);
    }

    .fb_dialog_loader {
        background-color: #f6f7f9;
        border: 1px solid #606060;
        font-size: 24px;
        padding: 20px;
    }

    .fb_dialog_top_left,
    .fb_dialog_top_right,
    .fb_dialog_bottom_left,
    .fb_dialog_bottom_right {
        height: 10px;
        width: 10px;
        overflow: hidden;
        position: absolute;
    }

    .fb_dialog_top_left {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;
        left: -10px;
        top: -10px;
    }

    .fb_dialog_top_right {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;
        right: -10px;
        top: -10px;
    }

    .fb_dialog_bottom_left {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;
        bottom: -10px;
        left: -10px;
    }

    .fb_dialog_bottom_right {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;
        right: -10px;
        bottom: -10px;
    }

    .fb_dialog_vert_left,
    .fb_dialog_vert_right,
    .fb_dialog_horiz_top,
    .fb_dialog_horiz_bottom {
        position: absolute;
        background: #525252;
        filter: alpha(opacity=70);
        opacity: .7;
    }

    .fb_dialog_vert_left,
    .fb_dialog_vert_right {
        width: 10px;
        height: 100%;
    }

    .fb_dialog_vert_left {
        margin-left: -10px;
    }

    .fb_dialog_vert_right {
        right: 0;
        margin-right: -10px;
    }

    .fb_dialog_horiz_top,
    .fb_dialog_horiz_bottom {
        width: 100%;
        height: 10px;
    }

    .fb_dialog_horiz_top {
        margin-top: -10px;
    }

    .fb_dialog_horiz_bottom {
        bottom: 0;
        margin-bottom: -10px;
    }

    .fb_dialog_iframe {
        line-height: 0;
    }

    .fb_dialog_content .dialog_title {
        background: #6d84b4;
        border: 1px solid #365899;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        margin: 0;
    }

    .fb_dialog_content .dialog_title>span {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
        float: left;
        padding: 5px 0 7px 26px;
    }

    body.fb_hidden {
        -webkit-transform: none;
        height: 100%;
        margin: 0;
        overflow: visible;
        position: absolute;
        top: -10000px;
        left: 0;
        width: 100%;
    }

    .fb_dialog.fb_dialog_mobile.loading {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
        min-height: 100%;
        min-width: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 10001;
    }

    .fb_dialog.fb_dialog_mobile.loading.centered {
        width: auto;
        height: auto;
        min-height: initial;
        min-width: initial;
        background: none;
    }

    .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
        width: 100%;
    }

    .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
        background: none;
    }

    .loading.centered #fb_dialog_loader_close {
        color: #fff;
        display: block;
        padding-top: 20px;
        clear: both;
        font-size: 18px;
    }

    #fb-root #fb_dialog_ipad_overlay {
        background: rgba(0, 0, 0, .45);
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        width: 100%;
        min-height: 100%;
        z-index: 10000;
    }

    #fb-root #fb_dialog_ipad_overlay.hidden {
        display: none;
    }

    .fb_dialog.fb_dialog_mobile.loading iframe {
        visibility: hidden;
    }

    .fb_dialog_content .dialog_header {
        -webkit-box-shadow: white 0 1px 1px -1px inset;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));
        border-bottom: 1px solid;
        border-color: #1d4088;
        color: #fff;
        font: 14px Helvetica, sans-serif;
        font-weight: bold;
        text-overflow: ellipsis;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
        vertical-align: middle;
        white-space: nowrap;
    }

    .fb_dialog_content .dialog_header table {
        -webkit-font-smoothing: subpixel-antialiased;
        height: 43px;
        width: 100%;
    }

    .fb_dialog_content .dialog_header td.header_left {
        font-size: 12px;
        padding-left: 5px;
        vertical-align: middle;
        width: 60px;
    }

    .fb_dialog_content .dialog_header td.header_right {
        font-size: 12px;
        padding-right: 5px;
        vertical-align: middle;
        width: 60px;
    }

    .fb_dialog_content .touchable_button {
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));
        border: 1px solid #29487d;
        -webkit-background-clip: padding-box;
        -webkit-border-radius: 3px;
        -webkit-box-shadow: rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;
        display: inline-block;
        margin-top: 3px;
        max-width: 85px;
        line-height: 18px;
        padding: 4px 12px;
        position: relative;
    }

    .fb_dialog_content .dialog_header .touchable_button input {
        border: none;
        background: none;
        color: #fff;
        font: 12px Helvetica, sans-serif;
        font-weight: bold;
        margin: 2px -12px;
        padding: 2px 6px 3px 6px;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
    }

    .fb_dialog_content .dialog_header .header_center {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        text-align: center;
        vertical-align: middle;
    }

    .fb_dialog_content .dialog_content {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
        border: 1px solid #555;
        border-bottom: 0;
        border-top: 0;
        height: 150px;
    }

    .fb_dialog_content .dialog_footer {
        background: #f6f7f9;
        border: 1px solid #555;
        border-top-color: #ccc;
        height: 40px;
    }

    #fb_dialog_loader_close {
        float: left
    }

    .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
    }

    .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
        visibility: hidden;
    }

    #fb_dialog_loader_spinner {
        animation: rotateSpinner 1.2s linear infinite;
        background-color: transparent;
        background-image: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yD/r/t-wz8gw1xG1.png);
        background-repeat: no-repeat;
        background-position: 50% 50%;
        height: 24px;
        width: 24px;
    }

    @keyframes rotateSpinner {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    .fb_iframe_widget {
        display: inline-block;
        position: relative;
    }

    .fb_iframe_widget span {
        display: inline-block;
        position: relative;
        text-align: justify;
    }

    .fb_iframe_widget iframe {
        position: absolute;
    }

    .fb_iframe_widget_fluid_desktop,
    .fb_iframe_widget_fluid_desktop span,
    .fb_iframe_widget_fluid_desktop iframe {
        max-width: 100%;
    }

    .fb_iframe_widget_fluid_desktop iframe {
        min-width: 220px;
        position: relative;
    }

    .fb_iframe_widget_lift {
        z-index: 1;
    }

    .fb_hide_iframes iframe {
        position: relative;
        left: -10000px;
    }

    .fb_iframe_widget_loader {
        position: relative;
        display: inline-block;
    }

    .fb_iframe_widget_fluid {
        display: inline;
    }

    .fb_iframe_widget_fluid span {
        width: 100%;
    }

    .fb_iframe_widget_loader iframe {
        min-height: 32px;
        z-index: 2;
        zoom: 1;
    }

    .fb_iframe_widget_loader .FB_Loader {
        background: url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;
        height: 32px;
        width: 32px;
        margin-left: -16px;
        position: absolute;
        left: 50%;
        z-index: 4;
    }
    </style>
    <style type="text/css" id="ya_share_style">
    .b-share-popup-wrap {
        z-index: 1073741823;
        position: absolute;
        width: 500px;
    }

    .b-share-popup {
        position: absolute;
        z-index: 1073741823;
        border: 1px solid #888;
        background: #FFF;
        color: #000;
    }

    .b-share-popup-wrap .b-share-popup_down {
        top: 0;
    }

    .b-share-popup-wrap .b-share-popup_up {
        bottom: 0;
    }

    .b-share-popup-wrap_state_hidden {
        position: absolute!important;
        top: -9999px!important;
        right: auto!important;
        bottom: auto!important;
        left: -9999px!important;
        visibility: hidden!important;
    }

    .b-share-popup,
    x:nth-child(1) {
        border: 0;
        padding: 1px!important;
    }

    @media all and (resolution=0) {
        .b-share-popup,
        x:nth-child(1),
        x:-o-prefocus {
            padding: 0!important;
            border: 1px solid #888;
        }
    }

    .b-share-popup__i {
        display: -moz-inline-box;
        display: inline-block;
        padding: 5px 0!important;
        overflow: hidden;
        vertical-align: top;
        white-space: nowrap;
        visibility: visible;
        background: #FFF;
        -webkit-box-shadow: 0 2px 9px rgba(0, 0, 0, .6);
        -moz-box-shadow: 0 2px 9px rgba(0, 0, 0, .6);
        box-shadow: 0 2px 9px rgba(0, 0, 0, .6);
    }

    .b-share-popup__item {
        font: 1em/1.25em Arial, sans-serif;
        display: block;
        padding: 5px 15px!important;
        white-space: nowrap;
        background: #FFF;
    }

    .b-share-popup__item,
    a.b-share-popup__item:link,
    a.b-share-popup__item:visited {
        text-decoration: none!important;
        border: 0!important;
    }

    a.b-share-popup__item {
        cursor: pointer;
    }

    a.b-share-popup__item .b-share-popup__item__text {
        display: inline;
        text-decoration: underline;
        color: #1A3DC1;
    }

    a.b-share-popup__item:hover {
        word-spacing: 0;
    }

    a.b-share-popup__item:hover .b-share-popup__item__text {
        color: red;
        cursor: pointer;
    }

    .b-share-popup__icon {
        display: -moz-inline-box;
        display: inline-block;
        margin: -3px 0 0;
        padding: 0 5px 0 0!important;
        vertical-align: middle;
    }

    .b-share-popup__icon_input {
        width: 21px;
        height: 16px;
        margin-top: -6px;
        padding: 0!important
    }

    .b-share-popup__icon__input {
        margin-right: 0;
        margin-left: 2px;
        vertical-align: top;
    }

    .b-share-popup__spacer {
        display: block;
        padding-top: 10px!important;
    }

    .b-share-popup__header {
        font: 86%/1em Verdana, sans-serif;
        display: block;
        padding: 10px 15px 5px!important;
        color: #999;
    }

    .b-share-popup__header_first {
        padding-top: 5px!important;
    }

    .b-share-popup__input {
        font: 86%/1em Verdana, sans-serif;
        display: block;
        padding: 5px 15px!important;
        color: #999;
        text-align: left;
    }

    .b-share-popup__input__input {
        font: 1em/1em Verdana, sans-serif;
        display: block;
        width: 10px;
        margin: 5px 0 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        resize: none;
        text-align: left;
        direction: ltr;
    }

    .b-share-popup_down .b-share-popup_with-link .b-share-popup__input_link {
        position: absolute;
        top: 5px;
        right: 0;
        left: 0;
    }

    .b-share-popup_up .b-share-popup_with-link .b-share-popup__input_link {
        position: absolute;
        right: 0;
        bottom: 5px;
        left: 0;
    }

    .b-share-popup_down .b-share-popup_with-link {
        padding-top: 55px!important;
    }

    .b-share-popup_up .b-share-popup_with-link {
        padding-bottom: 55px!important;
    }

    .b-share-popup_down .b-share-popup_expandable .b-share-popup__main {
        padding-bottom: 25px!important;
    }

    .b-share-popup_up .b-share-popup_expandable .b-share-popup__main {
        padding-top: 25px!important;
    }



    .b-share-popup__expander .b-share-popup__item {
        position: absolute;
        bottom: 5px;
        font: 86%/1em Verdana, sans-serif;
        margin: 10px 0 0;
        padding: 5px 10px!important;
        cursor: pointer;
        color: #999;
        background: 0 0;
    }

    .b-share-popup_to-right,
    .b-share-popup_to-right .b-share-popup__expander {
        direction: rtl;
    }

    .b-share-popup_to-right .b-share-popup__expander .b-share-popup__icon {
        padding: 0 0 0 5px!important;
    }

    .b-share-popup_up .b-share-popup__expander .b-share-popup__item {
        top: -5px;
        bottom: auto;
    }

    .b-share-popup__expander .b-share-popup__item:hover .b-share-popup__item__text {
        text-decoration: underline;
    }

    .b-share-popup__expander .b-ico_action_rarr,
    .b-share-popup_to-right .b-share-popup__expander .b-ico_action_larr,
    .b-share-popup_full .b-share-popup__expander .b-ico_action_larr,
    .b-share-popup_to-right .b-share-popup_full .b-share-popup__expander .b-ico_action_rarr,
    .b-share-popup__expander .b-share-popup__item__text_collapse,
    .b-share-popup_full .b-share-popup__item__text_expand {
        display: none;
    }

    .b-share-popup_to-right .b-share-popup__expander .b-ico_action_rarr,
    .b-share-popup_full .b-share-popup__item__text_collapse,
    .b-share-popup_full .b-share-popup__expander .b-ico_action_rarr,
    .b-share-popup_to-right .b-share-popup_full .b-share-popup__expander .b-ico_action_larr {
        display: inline;
    }

    .b-ico_action_rarr,
    .b-ico_action_larr {
        width: 8px;
        height: 7px;
        border: 0;
    }

    .b-share-popup__main,
    .b-share-popup__extra {
        direction: ltr;
        vertical-align: bottom;
        text-align: left;
    }

    .b-share-popup_down .b-share-popup__main,
    .b-share-popup_down .b-share-popup__extra {
        vertical-align: top;
    }

    .b-share-popup__main {
        display: -moz-inline-stack;
        display: inline-block;
    }

    .b-share-popup__extra {
        display: none;
        margin: 0 -10px 0 0;
    }

    .b-share-popup_full .b-share-popup__extra {
        display: -moz-inline-stack;
        display: inline-block;
    }

    .b-share-popup_to-right .b-share-popup__extra {
        margin: 0 0 0 -10px;
    }

    .b-share-popup__tail {
        position: absolute;
        width: 21px;
        height: 10px;
        margin: 0 0 0 -11px;
    }

    .b-share-popup_down .b-share-popup__tail {
        top: -10px;
        background: url("//yastatic.net/share/static/b-share-popup_down__tail.gif") 0 0 no-repeat;
    }

    .b-share-popup_up .b-share-popup__tail {
        bottom: -10px;
        background: url("//yastatic.net/share/static/b-share-popup_up__tail.gif") 0 0 no-repeat;
    }

    .b-share-popup_down .b-share-popup__tail,
    x:nth-child(1) {
        top: -9px;
        background-image: url("//yastatic.net/share/static/b-share-popup_down__tail.png");
    }

    .b-share-popup_up .b-share-popup__tail,
    x:nth-child(1) {
        bottom: -9px;
        background-image: url("//yastatic.net/share/static/b-share-popup_up__tail.png");
    }

    @media all and (resolution=0) {
        .b-share-popup_down .b-share-popup__tail,
        x:nth-child(1),
        x:-o-prefocus {
            top: -10px;
            background-image: url("//yastatic.net/share/static/b-share-popup_down__tail.gif");
        }
        .b-share-popup_up .b-share-popup__tail,
        x:nth-child(1),
        x:-o-prefocus {
            bottom: -10px;
            background-image: url("//yastatic.net/share/static/b-share-popup_up__tail.gif");
        }
    }

    .b-share-popup .b-share-popup_show_form_mail,
    .b-share-popup .b-share-popup_show_form_html {
        padding: 0!important;
    }

    .b-share-popup .b-share-popup_show_form_mail .b-share-popup__main,
    .b-share-popup .b-share-popup_show_form_html .b-share-popup__main,
    .b-share-popup .b-share-popup_show_form .b-share-popup__main,
    .b-share-popup .b-share-popup_show_form_mail .b-share-popup__extra,
    .b-share-popup .b-share-popup_show_form_html .b-share-popup__extra,
    .b-share-popup .b-share-popup_show_form .b-share-popup__extra {
        height: 15px;
        padding: 0!important;
        overflow: hidden;
        visibility: hidden;
    }

    .b-share-popup_show_form_mail .b-share-popup__expander,
    .b-share-popup_show_form_html .b-share-popup__expander,
    .b-share-popup_show_form .b-share-popup__expander,
    .b-share-popup_show_form_mail .b-share-popup__input_link,
    .b-share-popup_show_form_html .b-share-popup__input_link,
    .b-share-popup_show_form .b-share-popup__input_link {
        display: none;
    }

    .b-share-popup__form {
        position: relative;
        display: none;
        overflow: hidden;
        padding: 5px 0 0!important;
        margin: 0 0 -15px;
        white-space: normal;
    }

    .b-share-popup_show_form_mail .b-share-popup__form_mail,
    .b-share-popup_show_form_html .b-share-popup__form_html,
    .b-share-popup_show_form .b-share-popup__form {
        display: block;
    }

    .b-share-popup__form__link {
        padding: 5px!important;
        margin: 0 0 5px 10px;
        text-decoration: underline;
        cursor: pointer;
        color: #1A3DC1;
    }

    .b-share-popup__form__link,
    .b-share-popup__form__button {
        font: 86%/1.4545em Verdana, sans-serif;
        float: left;
        display: inline;
    }

    .b-share-popup__form__button {
        margin: 5px 0 0 15px;
    }

    .b-share-popup__form__close {
        font: 86%/1.4545em Verdana, sans-serif;
        float: right;
        display: inline;
        padding: 5px!important;
        margin: 0 10px 5px 0;
        cursor: pointer;
        color: #999;
    }

    a.b-share-popup__form__link:hover,
    a.b-share-popup__form__close:hover {
        text-decoration: underline;
        color: red;
    }

    .b-share-popup_font_fixed .b-share-popup__item {
        font-size: 12.8px;
    }

    .b-share-popup_font_fixed .b-share-popup__header,
    .b-share-popup_font_fixed .b-share-popup__input,
    .b-share-popup_font_fixed .b-share-popup__expander .b-share-popup__item,
    .b-share-popup_font_fixed .b-share-popup__form__link,
    .b-share-popup_font_fixed .b-share-popup__form__button,
    .b-share-popup_font_fixed .b-share-popup__form__close {
        font-size: 11px;
    }


    .b-share-form-button {
        font: 86%/17px Verdana, Arial, sans-serif;
        display: -moz-inline-box;
        display: inline-block;
        position: relative;
        height: 19px;
        margin: 0 3px;
        padding: 0 4px;
        cursor: default;
        white-space: nowrap;
        text-decoration: none!important;
        color: #000!important;
        border: none;
        outline: none;
        background: url("//yastatic.net/share/static/b-share-form-button.png") 0 -20px repeat-x;
    }

    .b-share-form-button:link:hover,
    .b-share-form-button:visited:hover {
        color: #000!important;
    }

    .b-share-form-button__before,
    .b-share-form-button__after {
        position: absolute;
        width: 3px;
        height: 19px;
        background: url("//yastatic.net/share/static/b-share-form-button.png");
    }

    .b-share-form-button__before {
        margin-left: -7px;
    }

    .b-share-form-button__after {
        margin-left: 4px;
        background-position: -3px 0
    }

    .b-share-form-button::-moz-focus-inner {
        border: none;
    }

    button.b-share-form-button .b-share-form-button__before,
    button.b-share-form-button .b-share-form-button__after {
        margin-top: -1px;
    }

    @-moz-document url-prefix() {
        button.b-share-form-button .b-share-form-button__after {
            margin-top: -2px;
            margin-left: 6px;
        }
        button.b-share-form-button .b-share-form-button__before {
            margin-top: -2px;
            margin-left: -9px;
        }
    }

    SPAN.b-share-form-button:hover,
    .b-share-form-button_state_hover {
        background-position: 0 -60px;
    }

    SPAN.b-share-form-button:hover .b-share-form-button__before,
    .b-share-form-button_state_hover .b-share-form-button__before {
        background-position: 0 -40px;
    }

    SPAN.b-share-form-button:hover .b-share-form-button__after,
    .b-share-form-button_state_hover .b-share-form-button__after {
        background-position: -3px -40px;
    }

    .b-share-form-button_state_pressed,
    .b-share-form-button_state_pressed .b-share-form-button_share {
        background-position: 0 -100px!important;
    }

    .b-share-form-button_state_pressed .b-share-form-button__before {
        background-position: 0 -80px!important;
    }

    .b-share-form-button_state_pressed .b-share-form-button__after {
        background-position: -3px -80px!important;
    }

    button.b-share-form-button_state_pressed {
        overflow: visible;
    }

    .b-share-form-button_icons {
        position: relative;
        padding: 0;
        background-position: 0 -20px!important;
    }

    .b-share-form-button_icons .b-share-form-button__before {
        left: 0;
        margin-left: -3px;
        background-position: 0 0!important;
    }

    .b-share-form-button_icons .b-share-form-button__after {
        z-index: -1;
        margin-left: 0;
        background-position: -3px 0!important;
    }

    .b-share-form-button_icons .b-share__handle {
        padding: 2px!important;
    }

    .b-share-form-button_icons .b-share__handle_more {
        position: relative;
        padding-right: 6px!important;
        margin-right: -4px;
    }

    .b-share-form-button_icons .b-share-icon {
        opacity: .5;
        background-image: url("//yastatic.net/share/static/b-share-icon_size_14.png");
    }

    .b-share-form-button_icons A.b-share__handle:hover .b-share-icon {
        opacity: 1;
    }

    .b-share {
        font: 86%/1.4545em Arial, sans-serif;
        display: -moz-inline-box;
        display: inline-block;
        padding: 1px 3px 1px 4px!important;
        vertical-align: middle;
    }

    .b-share .b-share-form-button {
        font-size: 1em;
    }

    .b-share__text .b-share-icon {
        margin: 0 5px 0 0;
        border: none;
    }

    .b-share__text {
        margin-right: 5px;
    }

    .b-share__handle {
        float: left;
        height: 16px;
        padding: 5px 3px 5px 2px!important;
        cursor: pointer;
        text-align: left;
        text-decoration: none!important;
    }

    .b-share__handle_cursor_default {
        cursor: default;
    }

    .b-share__handle .b-share-form-button {
        margin-top: -2px;
    }

    .b-share__hr {
        display: none;
        float: left;
        width: 1px;
        height: 26px;
        margin: 0 3px 0 2px;
    }

    a.b-share__handle:hover .b-share__text {
        text-decoration: underline;
        color: red;
    }

    .b-share_bordered {
        padding: 0 2px 0 3px!important;
        border: 1px solid #E4E4E4;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }

    .b-share_bordered .b-share__hr {
        display: inline;
        background: #E4E4E4;
    }

    .b-share_link {
        margin: -8px 0;
    }

    a.b-share_link {
        margin: 0;
    }

    .b-share_link .b-share__text {
        text-decoration: underline;
        color: #1A3DC1;
    }

    .b-share-form-button_share {
        padding-left: 26px!important;
        vertical-align: top;
    }

    .b-share-form-button_share .b-share-form-button__before {
        margin-left: -29px;
    }

    .b-share-form-button_share .b-share-form-button__icon {
        position: absolute;
        width: 20px;
        height: 17px;
        margin: 1px 0 0 -23px;
        background: url("//yastatic.net/share/static/b-share-form-button_share__icon.png") 0 0 no-repeat;
    }

    .b-share-pseudo-link {
        border-bottom: 1px dotted;
        cursor: pointer;
        text-decoration: none!important;
    }

    .b-share_font_fixed {
        font-size: 11px;
    }

    .b-share__handle_more {
        font-size: 9px;
        margin-top: -1px;
        color: #7B7B7B;
    }

    A.b-share__handle_more:hover {
        color: #000;
    }

    .b-share__group {
        float: left;
    }

    .b-share-icon {
        float: left;
        display: inline;
        overflow: hidden;
        width: 16px;
        height: 16px;
        padding: 0!important;
        vertical-align: top;
        border: 0;
      background: url("//yastatic.net/share/static/b-share-icon.png") 0 99px no-repeat;
    }

    .b-share-icon_vkontakte,
    .b-share-icon_custom {
        background-position: 0 0;
    }

    .b-share-icon_yaru,
    .b-share-icon_yaru_photo,
    .b-share-icon_yaru_wishlist {
        background-position: 0 -17px;
    }

    .b-share-icon_lj {
        background-position: 0 -34px;
    }

    .b-share-icon_twitter {
        background-position: 0 -51px;
    }

    .b-share-icon_facebook {
        background-position: 0 -68px;
    }

    .b-share-icon_moimir {
        background-position: 0 -85px;
    }

    .b-share-icon_friendfeed {
        background-position: 0 -102px;
    }

    .b-share-icon_mail {
        background-position: 0 -119px;
    }

    .b-share-icon_html {
        background-position: 0 -136px;
    }

    .b-share-icon_postcard {
        background-position: 0 -153px;
    }

    .b-share-icon_odnoklassniki {
        background-position: 0 -170px;
    }

    .b-share-icon_blogger {
        background-position: 0 -187px;
    }

    .b-share-icon_delicious {
        background-position: 0 -221px;
    }

    .b-share-icon_gbuzz {
        background-position: 0 -238px;
    }

    .b-share-icon_linkedin {
        background-position: 0 -255px;
    }

    .b-share-icon_myspace {
        background-position: 0 -272px;
    }

    .b-share-icon_evernote {
        background-position: 0 -289px;
    }

    .b-share-icon_digg {
        background-position: 0 -306px;
    }

    .b-share-icon_juick {
        background-position: 0 -324px;
    }

    .b-share-icon_moikrug {
        background-position: 0 -341px;
    }

    .b-share-icon_yazakladki {
        background-position: 0 -358px;
    }

    .b-share-icon_liveinternet {
        background-position: 0 -375px;
    }

    .b-share-icon_tutby {
        background-position: 0 -392px;
    }

    .b-share-icon_diary {
        background-position: 0 -409px;
    }

    .b-share-icon_gplus {
        background-position: 0 -426px;
    }

    .b-share-icon_pocket {
        background-position: 0 -443px;
    }

    .b-share-icon_surfingbird {
        background-position: 0 -460px
    };

    .b-share-icon_pinterest {
        background-position: 0 -477px;
    }

    .b-share-icon_renren {
        background-position: 0 0;
    }

    .b-share-icon_renren,
    .b-share-icon_sina_weibo {
    background: url("//yastatic.net/share/static/b-share-icon__china.png") no-repeat;
    }

    .b-share-icon_sina_weibo {
        background-position: -18px 0;
    }

    .b-share-icon_qzone {
        background-position: -36px 0;
    }

    .b-share-icon_qzone,
    .b-share-icon_tencent_weibo {
      background: url("//yastatic.net/share/static/b-share-icon__china.png") no-repeat;
    }

    .b-share-icon_tencent_weibo {
        background-position: -54px 0;
    }

    .b-share_theme_dark .b-share-icon {
        background: url("//yastatic.net/share/static/b-share-icons__theme_dark.png") 99px 0 no-repeat;
    }

    .b-share_theme_dark .b-share-icon_odnoklassniki {
        background-position: -4px -3px;
    }

    .b-share_theme_dark .b-share-icon_vkontakte {
        background-position: -24px -3px;
    }

    .b-share_theme_dark .b-share-icon_twitter {
        background-position: -44px -3px;
    }

    .b-share_theme_dark .b-share-icon_facebook {
        background-position: -64px -3px;
    }

    .b-share_theme_dark .b-share-icon_lj {
        background-position: -85px -3px;
    }

    .b-share_theme_dark .b-share-icon_yaru {
        background-position: -105px -3px;
    }

    .b-share_theme_dark .b-share-popup .b-share-icon_odnoklassniki,
    .b-share_theme_dark .b-share-icon_odnoklassniki:hover {
        background-position: -4px -28px;
    }

    .b-share_theme_dark .b-share-popup .b-share-icon_vkontakte,
    .b-share_theme_dark .b-share-icon_vkontakte:hover {
        background-position: -24px -28px;
    }

    .b-share_theme_dark .b-share-popup .b-share-icon_twitter,
    .b-share_theme_dark .b-share-icon_twitter:hover {
        background-position: -44px -28px;
    }

    .b-share_theme_dark .b-share-popup .b-share-icon_facebook,
    .b-share_theme_dark .b-share-icon_facebook:hover {
        background-position: -64px -28px;
    }

    .b-share_theme_dark .b-share-popup .b-share-icon_lj,
    .b-share_theme_dark .b-share-icon_lj:hover {
        background-position: -85px -28px;
    }

    .b-share_theme_dark .b-share-popup .b-share-icon_yaru,
    .b-share_theme_dark .b-share-icon_yaru:hover {
        background-position: -105px -28px;
    }

    .b-share_theme_dark .b-share-form-button_share .b-share-form-button__icon {
        background-image: url("//yastatic.net/share/static/b-share-form-button_share__icon_dark.png");
    }

    .b-share_theme_dark .b-share-form-button {
        color: #fff!important;
        opacity: .8;
    }

    .b-share_theme_dark .b-share__handle:hover .b-share-form-button,
    .b-share_theme_dark .b-share-form-button:hover {
        opacity: 1;
        cursor: pointer;
    }

    .b-share_theme_dark .b-share-form-button,
    .b-share_theme_dark .b-share-form-button__before,
    .b-share_theme_dark .b-share-form-button__after {
        background: 0 0;
    }

    .b-share_theme_dark .b-share-popup__i {
        background-color: #333;
        border-radius: 10px;
        -webkit-box-shadow: 0 2px 9px rgba(255, 255, 255, .6);
        -moz-box-shadow: 0 2px 9px rgba(255, 255, 255, .6);
        box-shadow: 0 2px 9px rgba(255, 255, 255, .6);
    }

    .b-share_theme_dark .b-share__text {
        color: #AAA;
    }

    .b-share_theme_dark .b-share-popup {
        color: #AAA;
        border-radius: 10px;
        background-color: #333;
        background-color: rgba(50, 50, 50, .3);
    }

    .b-share_theme_dark .b-share-popup__item {
        background: 0 0;
        color: #ccc;
    }

    .b-share_theme_dark .b-share-popup .b-share-popup__item__text {
        color: #ccc;
    }

    .b-share_theme_counter .b-share {
        display: inline-block;
        vertical-align: middle;
        white-space: nowrap;
    }

    .b-share-counter {
        font: 14px Arial, sans-serif;
        line-height: 18px;
        display: none;
        float: left;
        margin: 3px 6px 3px 3px;
        color: #fff;
    }

    .b-share_theme_counter .b-share_type_small .b-share-counter {
        font-size: 11px;
        line-height: 14px;
        margin: 2px 6px 2px 1px;
    }

    .b-share_theme_counter .b-share-btn__counter .b-share-counter {
        display: block;
    }

    .b-share-btn__counter {
        text-decoration: none;
    }

    .b-share_theme_counter .b-share-btn__wrap {
        position: relative;
        float: left;
        margin-left: 5px;
    }

    .b-share_theme_counter .b-share_type_small .b-share-btn__wrap {
        margin-left: 4px;
    }

    .b-share_theme_counter .b-share-btn__wrap:first-child {
        margin-left: 0;
    }

    .b-share_theme_counter .b-share__link {
        display: inline-block;
        cursor: pointer;
        -webkit-border-radius: 3px;
        border-radius: 3px;
    }

    .b-share_theme_counter .b-share_type_small .b-share__link {
        -webkit-border-radius: 2px;
        border-radius: 2px;
    }

    .b-share_theme_counter .b-share-icon {
        display: block;
        float: left;
        width: 24px;
        height: 24px;
        background-image: url("//yastatic.net/share/static/b-share_counter_large.png");
        background-position: -20px 0;
    }

    .b-share_theme_counter .b-share_type_small .b-share-icon {
        width: 18px;
        height: 18px;
        background-image: url("//yastatic.net/share/static/b-share_counter_small.png");
    }

    .b-share_theme_counter .b-share-icon_facebook {
        background-position: 0 0;
    }

    .b-share_theme_counter .b-share-btn__facebook {
        background-color: #3c5a98;
    }

    .b-share_theme_counter .b-share-btn__facebook:hover {
        background-color: #30487a;
    }

    .b-share_theme_counter .b-share-btn__facebook:active {
        border-top: 2px solid #24365a;
        background-color: #334d81;
    }

    .b-share_theme_counter .b-share-icon_moimir {
        background-position: 0 -29px;
    }

    .b-share_theme_counter .b-share-btn__moimir {
        background-color: #226eb7;
    }

    .b-share_theme_counter .b-share-btn__moimir:hover {
        background-color: #1b5892;
    }

    .b-share_theme_counter .b-share-btn__moimir:active {
        border-top: 2px solid #14426d;
        background-color: #1d5e9c;
    }

    .b-share_theme_counter .b-share-icon_vkontakte {
        background-position: 0 -58px
    };

    .b-share_theme_counter .b-share-btn__vkontakte {
        background-color: #48729e;
    }

    .b-share_theme_counter .b-share-btn__vkontakte:hover {
        background-color: #3a5b7e;
    }

    .b-share_theme_counter .b-share-btn__vkontakte:active {
        border-top: 2px solid #2b445e;
        background-color: #3d6186;
    }

    .b-share_theme_counter .b-share-icon_twitter {
        background-position: 0 -87px;
    }

    .b-share_theme_counter .b-share-btn__twitter {
        background-color: #00aced;
    }

    .b-share_theme_counter .b-share-btn__twitter:hover {
        background-color: #008abe;
    }

    .b-share_theme_counter .b-share-btn__twitter:active {
        border-top: 2px solid #00668d;
        background-color: #0092ca;
    }

    .b-share_theme_counter .b-share-icon_odnoklassniki {
        background-position: 0 -116px;
    }

    .b-share_theme_counter .b-share-btn__odnoklassniki {
        background-color: #ff9f4d;
    }

    .b-share_theme_counter .b-share-btn__odnoklassniki:hover {
        background-color: #cc7f3e;
    }

    .b-share_theme_counter .b-share-btn__odnoklassniki:active {
        border-top: 2px solid #975e2e;
        background-color: #d98742;
    }

    .b-share_theme_counter .b-share-icon_gplus {
        background-position: 0 -145px;
    }

    .b-share_theme_counter .b-share-btn__gplus {
        background-color: #c25234;
    }

    .b-share_theme_counter .b-share-btn__gplus:hover {
        background-color: #9b422a;
    }

    .b-share_theme_counter .b-share-btn__gplus:active {
        border-top: 2px solid #73311f;
        background-color: #a5462c;
    }

    .b-share_theme_counter .b-share-icon_yaru {
        background-position: 0 -174px;
    }

    .b-share_theme_counter .b-share-btn__yaru {
        background-color: #d83933;
    }

    .b-share_theme_counter .b-share-btn__yaru:hover {
        background-color: #ad2e29;
    }

    .b-share_theme_counter .b-share-btn__yaru:active {
        border-top: 2px solid #80221e;
        background-color: #b8312b;
    }

    .b-share_theme_counter .b-share-icon_pinterest {
        background-position: 0 -203px;
    }

    .b-share_theme_counter .b-share-btn__pinterest {
        background-color: #cd1e27;
    }

    .b-share_theme_counter .b-share-btn__pinterest:hover {
        background-color: #a4181f;
    }

    .b-share_theme_counter .b-share-btn__pinterest:active {
        border-top: 2px solid #7b1217;
        background-color: #ae1921;
    }

    .b-share_theme_counter .b-share__link:active {
        height: 22px;
    }

    .b-share_theme_counter .b-share_type_small .b-share__link:active {
        height: 16px;
    }

    .b-share_theme_counter .b-share__link:active .b-share-icon,
    .b-share_theme_counter .b-share__link:active .b-share-counter {
        position: relative;
        top: -1px;
    }

    .b-share_theme_counter .b-share__link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        content: "";
        background-image: url(data:img/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==);
    }

    .b-share_theme_counter .b-share__handle {
        height: auto;
        padding: 0!important;
    }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="content">
        <div class="wrapper1">
            <div class="content_shadow">
                <div class="blok-header-nav1">
                    <div class="center-content-wrapper">
                        <div class="branding-nav-wrapper">
                            <a href="http://www.gardi.biz/"><img src="<?php echo get_template_directory_uri(); ?>/img/gardi-logotype.png" class="gardi-logo" alt="Gardi logo"></a>
                            <ul class="header-nav">
                                <li class="first active">
                                    <a href="#" title="О компании" class="header-nav-element">
             О питомнике
         </a>
                                </li>
                                <li>
                                    <a href="# title="Деревья и кустарники" class="header-nav-element">
             Деревья и кустарники
         </a>
                                    <ul class="header-nav">
                                        <li class="first">
                                            <a href="#" title="Хвойные деревья и кустарники" class="header-nav-element">
             Плодовые деревья
         </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Лиственные деревья" class="header-nav-element">
             Плодовые кустарники
         </a>
                                        </li>
                                        <li   class="last">
                                            <a href="#" title="Вьющиеся  растения" class="header-nav-element">
             Декоративные
         </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#" title="Прайс-лист" class="header-nav-element">
            Видео уроки
        </a>
                             </li>

                                <li>
                                    <a href="#" title="Прайс-лист" class="header-nav-element">
             Прайс-лист
         </a>
                                    <ul class="header-nav">
                                        <li class="first" id="trees-links">
                                            <a href="#" title="Лиственные деревья" class="header-nav-element">
             Плодовые деревья
         </a>
                                        </li>
                                        <li>
                                            <a href="http://www.gardi.biz/price-list/deciduous-shrubs" title="Лиственные кустарники" class="header-nav-element">
             Плодовые кустарники
         </a>
                                        </li>
                                        <li>
                                            <a href="http://www.gardi.biz/price-list/coniferous-trees-and-shrubs" title="Хвойные растения" class="header-nav-element">
             Декоративные
         </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="http://www.gardi.biz/contacts" title="Контакты" class="header-nav-element">
             Контакты
         </a>
                                </li>
                                <li class="last" id="shop-gardi">
                                    <a href="http://shop.gardi.biz/" title="Интернет-магазин" class="header-nav-element">
             Интернет-магазин
         </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="unit-with-the-upper-gallery">
                    <div id="mainGallery" data-width="100%" data-height="455" data-autoplay="true" class="fotorama fotorama_horizontal fotorama_shadows fotorama_csstransitions" style="overflow: hidden;">
                        <div class="fotorama__wrap fotorama__wrap_style_fade fotorama__wrap_mouseout" style="width: 1280px; height: 455px;">
                            <div class="fotorama__noise"></div>
                            <div class="fotorama__shaft" style="width: 1280px; height: 455px; cursor: pointer;">
                                <div class="fotorama__state" style="opacity: 0;">
                                    <svg viewBox="0 0 32 32">
                                        <g fill="none" stroke="#808080" stroke-width="2">
                                            <circle cx="16" cy="16" r="13"></circle>
                                            <line x1="7" y1="7" x2="25" y2="25"></line>
                                        </g>
                                    </svg>
                                </div>
                                <div class="fotorama__frame" style="visibility: visible; opacity: 0; display: block; width: 1280px; height: 455px;"><img src="<?php echo get_template_directory_uri(); ?>/img/panorama40.jpg" class="fotorama__img" width="1294" height="455" style="visibility: visible; width: 1294px; height: 455px; top: 0px; left: -7px;"></div>
                                <div class="fotorama__frame" style="visibility: visible; opacity: 0; display: block; width: 1280px; height: 455px;"><img src="<?php echo get_template_directory_uri(); ?>/img/panorama41.jpg" class="fotorama__img" width="1294" height="455" style="visibility: visible; width: 1294px; height: 455px; top: 0px; left: -7px;"></div>
                                <div class="fotorama__frame" style="visibility: visible; opacity: 0; display: block; width: 1280px; height: 455px;"><img src="<?php echo get_template_directory_uri(); ?>/img/panorama42.jpg" class="fotorama__img" width="1294" height="455" style="visibility: visible; width: 1294px; height: 455px; top: 0px; left: -7px;"></div>
                                <div class="fotorama__frame fotorama__frame_active" style="visibility: visible; opacity: 1; display: block; width: 1280px; height: 455px;"><img src="<?php echo get_template_directory_uri(); ?>/img/panorama43.jpg" class="fotorama__img" width="1294" height="455" style="visibility: visible; width: 1294px; height: 455px; top: 0px; left: -7px;"></div>
                                <div class="fotorama__frame" style="visibility: visible; opacity: 0; display: block; width: 1280px; height: 455px;"><img src="<?php echo get_template_directory_uri(); ?>/img/panorama44.jpg" class="fotorama__img" width="1294" height="455" style="visibility: visible; width: 1294px; height: 455px; top: 0px; left: -7px;"></div>
                                <div class="fotorama__frame" style="visibility: visible; opacity: 0; display: block; width: 1280px; height: 455px;"><img src="<?php echo get_template_directory_uri(); ?>/img/panorama1.jpg" class="fotorama__img" width="1280" height="455" style="visibility: visible; width: 1280px; height: 455px; top: 0px; left: 0px;"></div>
                            </div><i class="fotorama__arr fotorama__arr_prev fotorama__arr_hover" style="transition-duration: 1500ms;">◀</i><i class="fotorama__arr fotorama__arr_next" style="transition-duration: 1500ms;">▶</i>
                            <p class="fotorama__caption fotorama__caption_overlay" style="display: none;"></p>
                        </div>
                    </div>
                    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fotorama.js"></script>
                    <script type="text/javascript">
                    jQuery(document).ready(function($) {

                        images = [{
                            "img": "\/assets\/panorama\/gardi-skidka-15.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama12.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama36.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama37.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama38.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama39.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama40.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama41.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama42.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama43.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama44.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama35.jpg",
                            "caption": ""
                        }, {
                            "img": "\/assets\/panorama\/panorama1.jpg",
                            "caption": "\u0414\u0435\u043a\u043e\u0440\u0430\u0442\u0438\u0432\u043d\u044b\u0435 \u0446\u0432\u0435\u0442\u044b \u0438 \u0434\u0435\u0440\u0435\u0432\u044c\u044f<span>\u041f\u0440\u043e\u0434\u0430\u0436\u0430 \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u0439, \u0446\u0432\u0435\u0442\u043e\u0447\u043d\u043e\u0439 \u0440\u0430\u0441\u0441\u0430\u0434\u044b, \u0434\u0435\u0440\u0435\u0432\u044c\u0435\u0432, \u043a\u0443\u0441\u0442\u0430\u0440\u043d\u0438\u043a\u043e\u0432, \u0441\u0430\u0436\u0435\u043d\u0446\u0435\u0432,  \u043b\u0438\u0441\u0442\u0432\u0435\u043d\u043d\u044b\u0445, \u0445\u0432\u043e\u0439\u043d\u044b\u0445 \u0434\u0435\u0440\u0435\u0432\u044c\u0435\u0432, \u043c\u043d\u043e\u0433\u043e\u043b\u0435\u0442\u043d\u0438\u0445 \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u0439,\u0445\u0432\u043e\u0439\u043d\u044b\u0445 \u043a\u0443\u0441\u0442\u0430\u0440\u043d\u0438\u043a\u043e\u0432<\/span>"
                        }, {
                            "img": "\/assets\/panorama\/panorama16.jpg",
                            "caption": "\u0414\u043b\u044f \u043b\u044e\u0431\u0438\u043c\u043e\u0433\u043e \u0433\u043e\u0440\u043e\u0434\u0430<span>\u0413\u0430\u0440\u0434\u0438 \u043e\u0441\u0443\u0449\u0435\u0441\u0442\u0432\u043b\u044f\u0435\u0442 \u043f\u0440\u043e\u0434\u0430\u0436\u0443 \u0446\u0432\u0435\u0442\u043e\u0447\u043d\u044b\u0445 \u043a\u0443\u043b\u044c\u0442\u0443\u0440, \u0434\u0435\u043a\u043e\u0440\u0430\u0442\u0438\u0432\u043d\u044b\u0445 \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u0439 \u0434\u043b\u044f \u0433\u043e\u0440\u043e\u0434\u0441\u043a\u043e\u0433\u043e \u043e\u0437\u0435\u043b\u0435\u043d\u0435\u043d\u0438\u044f<\/span>"
                        }, {
                            "img": "\/assets\/panorama\/panorama3.jpg",
                            "caption": "\u041e\u0440\u0430\u043d\u0436\u0435\u0440\u0435\u044f \u0446\u0432\u0435\u0442\u043e\u0447\u043d\u044b\u0445 \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u0439 \u0413\u0430\u0440\u0434\u0438<span>\u041f\u0440\u043e\u0434\u0430\u0436\u0430 \u0446\u0432\u0435\u0442\u0443\u0449\u0438\u0445 \u0433\u043e\u0440\u0448\u0435\u0447\u043d\u044b\u0445 \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u0439, \u044d\u043a\u0437\u043e\u0442\u0438\u0447\u0435\u0441\u043a\u0438\u0445 \u0446\u0432\u0435\u0442\u043e\u0432, \u0433\u043e\u0440\u0448\u0435\u0447\u043d\u044b\u0445 \u0446\u0432\u0435\u0442\u043e\u0432, \u043a\u043b\u0443\u043c\u0431\u043e\u0432\u044b\u0445 \u0446\u0432\u0435\u0442\u043e\u0432, \u043a\u0430\u0448\u043f\u043e, \u0437\u043b\u0430\u043a\u043e\u0432\u044b\u0445 \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u0439, \u043a\u043b\u0435\u043c\u0430\u0442\u0438\u0441\u043e\u0432<\/span>"
                        }, {
                            "img": "\/assets\/panorama\/panorama9.jpg",
                            "caption": "\u0414\u043b\u044f \u0442\u043e\u0440\u0433\u043e\u0432\u044b\u0445 \u0446\u0435\u043d\u0442\u0440\u043e\u0432<span>\u0413\u0430\u0440\u0434\u0438 \u043e\u0441\u0443\u0449\u0435\u0441\u0442\u0432\u043b\u044f\u0435\u0442 \u043f\u0440\u043e\u0434\u0430\u0436\u0443 \u0446\u0432\u0435\u0442\u043e\u0447\u043d\u044b\u0445 \u043a\u0443\u043b\u044c\u0442\u0443\u0440, \u0434\u0435\u043a\u043e\u0440\u0430\u0442\u0438\u0432\u043d\u044b\u0445 \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u0439 \u0434\u043b\u044f \u0433\u043e\u0440\u043e\u0434\u0441\u043a\u043e\u0433\u043e \u043e\u0437\u0435\u043b\u0435\u043d\u0435\u043d\u0438\u044f<\/span>"
                        }, {
                            "img": "\/assets\/panorama\/panorama2.jpg",
                            "caption": "\u0421\u043e\u0442\u0440\u0443\u0434\u043d\u0438\u0447\u0435\u0441\u0442\u0432\u043e<span>\u0414\u043b\u044f \u0441\u043e\u0442\u0440\u0443\u0434\u043d\u0438\u0447\u0435\u0441\u0442\u0432\u0430 \u0441 \u0441\u0435\u0442\u0435\u0432\u044b\u043c\u0438 \u043c\u0430\u0440\u043a\u0435\u0442\u0430\u043c\u0438 \u043d\u0430 \u0442\u0435\u0440\u0440\u0438\u0442\u043e\u0440\u0438\u0438 \u0423\u043a\u0440\u0430\u0438\u043d\u044b. \u041e\u043f\u0442\u043e\u0432\u0430\u044f \u043f\u0440\u043e\u0434\u0430\u0436\u0430 \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u0439 \u0432 \u0430\u0441\u0441\u043e\u0440\u0442\u0438\u043c\u0435\u043d\u0442\u0435.<\/span>"
                        }, {
                            "img": "\/assets\/panorama\/panorama4.jpg",
                            "caption": "\u0414\u043b\u044f \u0442\u043e\u0440\u0433\u043e\u0432\u044b\u0445 \u0446\u0435\u043d\u0442\u0440\u043e\u0432<span>\u0413\u0430\u0440\u0434\u0438 \u043e\u0441\u0443\u0449\u0435\u0441\u0442\u0432\u043b\u044f\u0435\u0442 \u043f\u0440\u043e\u0434\u0430\u0436\u0443 \u0446\u0432\u0435\u0442\u043e\u0447\u043d\u044b\u0445 \u043a\u0443\u043b\u044c\u0442\u0443\u0440, \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u0439  \u0432 \u043a\u0440\u0443\u043f\u043d\u0435\u0439\u0448\u0438\u0435 \u0442\u043e\u0440\u0433\u043e\u0432\u044b\u0435 \u0441\u0435\u0442\u0438 \u0423\u043a\u0440\u0430\u0438\u043d\u044b<\/span>"
                        }, {
                            "img": "\/assets\/panorama\/panorama5.jpg",
                            "caption": "\u041e\u0437\u0435\u043b\u0435\u043d\u0435\u043d\u0438\u0435 \u0433\u043e\u0440\u043e\u0434\u0430<span>\u0412\u044b\u0440\u0430\u0449\u0438\u0432\u0430\u0435\u043c \u0440\u0430\u0441\u0442\u0435\u043d\u0438\u044f \u043f\u0440\u0438\u043c\u0435\u043d\u044f\u0435\u043c\u044b\u0435 \u0434\u043b\u044f \u043e\u0437\u0435\u043b\u0435\u043d\u0435\u043d\u0438\u044f \u0438 \u0431\u043b\u0430\u0433\u043e\u0443\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432\u0430, \u043f\u043e\u0441\u0430\u0434\u043a\u0438 \u0436\u0438\u0432\u043e\u0439 \u0438\u0437\u0433\u043e\u0440\u043e\u0434\u0438, \u0441\u043e\u0437\u0434\u0430\u043d\u0438\u044f \u0446\u0432\u0435\u0442\u043d\u0438\u043a\u043e\u0432, \u0430\u043b\u044c\u043f\u0438\u0439\u0441\u043a\u0438\u0445 \u0433\u043e\u0440\u043e\u043a \u0438 \u0434\u0440\u0443\u0433\u0438\u0445 \u043b\u0430\u043d\u0434\u0448\u0430\u0444\u0442\u043d\u044b\u0445 \u043a\u043e\u043c\u043f\u043e\u0437\u0438\u0446\u0438\u0439<\/span>"
                        }];

                        if (jQuery.isArray(images)) {
                            $("#mainGallery").fotorama({
                                data: images,
                                cropToFit: true,
                                nav: 'none',
                                arrows: true,
                                transitionDuration: 1500,
                                transition: 'fade',
                                caption: 'overlay',
                                loop: true
                            });
                        }

                    });
                    </script>
                    <div class="sisea-search-form-container">
                        <div class="center-content-wrapper">
                            <form class="sisea-search-form" action="http://www.gardi.biz/search" method="get">
                                <fieldset>
                                    <label for="search">Поиск по сайту:</label>
                                    <input type="text" name="search" id="search" value="">
                                    <input type="hidden" name="id" value="351">
                                </fieldset>
                                <div id="site-search-results" class="search-results search-results-on-main"></div>
                            </form>
                            <div class="b-header-social">
                                <div id="fb-root" class=" fb_reset">
                                    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                                        <div>

                                        </div>
                                    </div>
                                    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                                        <div></div>
                                    </div>
                                </div>
                                <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5&appId=469457486472064";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                                </script>
                                <div class="fb-follow fb_iframe_widget" data-href="https://www.facebook.com/%D0%93%D0%B0%D1%80%D0%B4%D0%B8-%D0%9F%D0%B8%D1%82%D0%BE%D0%BC%D0%BD%D0%B8%D0%BA-%D1%80%D0%B0%D1%81%D1%82%D0%B5%D0%BD%D0%B8%D0%B9-%D0%9E%D1%80%D0%B0%D0%BD%D0%B6%D0%B5%D1%80%D0%B5%D1%8F-%D1%86%D0%B2%D0%B5%D1%82%D0%BE%D0%B2-600208133407620/" data-layout="button" data-show-faces="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=469457486472064&amp;container_width=300&amp;href=https%3A%2F%2Fwww.facebook.com%2F%25D0%2593%25D0%25B0%25D1%2580%25D0%25B4%25D0%25B8-%25D0%259F%25D0%25B8%25D1%2582%25D0%25BE%25D0%25BC%25D0%25BD%25D0%25B8%25D0%25BA-%25D1%2580%25D0%25B0%25D1%2581%25D1%2582%25D0%25B5%25D0%25BD%25D0%25B8%25D0%25B9-%25D0%259E%25D1%2580%25D0%25B0%25D0%25BD%25D0%25B6%25D0%25B5%25D1%2580%25D0%25B5%25D1%258F-%25D1%2586%25D0%25B2%25D0%25B5%25D1%2582%25D0%25BE%25D0%25B2-600208133407620%2F&amp;layout=button&amp;locale=ru_RU&amp;sdk=joey&amp;show_faces=true"><span style="vertical-align: bottom; width: 99px; height: 20px;"></span></div>
                                <a href="https://vk.com/gardi_biz" target="_blank" rel="nofollow" class="b-social-link b-social-link_vk" title="Питомник растений и оранжерея цветов в Вконтакте"></a>

                                <a href="https://www.facebook.com/pages/%D0%93%D0%B0%D1%80%D0%B4%D0%B8-%D0%9F%D0%B8%D1%82%D0%BE%D0%BC%D0%BD%D0%B8%D0%BA-%D1%80%D0%B0%D1%81%D1%82%D0%B5%D0%BD%D0%B8%D0%B9-%D0%9E%D1%80%D0%B0%D0%BD%D0%B6%D0%B5%D1%80%D0%B5%D1%8F-%D1%86%D0%B2%D0%B5%D1%82%D0%BE%D0%B2/600208133407620" target="_blank" rel="nofollow" class="b-social-link b-social-link_fb" title="Питомник растений Гарди в Facebook"></a>
                                <a href="https://www.youtube.com/channel/UCgylPRSqfD-JrDnm03_bZRA" target="_blank" rel="nofollow" class="b-social-link b-social-link_youtube" title="Ютуб канал"></a>
                            </div>
                        </div>
                    </div>
                    <script>
                    var $ = jQuery.noConflict();

                    $(document).ready(function() {

                        $('#search').on('input', function(e) {
                            var str = $(this).val();
                            str = str.charAt(0).toUpperCase() + str.slice(1);
                            $(this).val(str);
                        });


                        $(".sisea-search-form").submit(function() {
                            $("#site-search-results").load("search", $(".sisea-search-form").serialize()).show(); //Загружаем результаты с лэндинг-документа и выводим контейнер
                            return false;
                        });
                        $(".sisea-search-form input").keyup(function() {
                            if (this.value.length > 2) { //2 - миниум знаков для начала отображения live search
                                $("#site-search-results").load("search", $(".sisea-search-form").serialize()).show(); //Загружаем результаты с лэндинг-документа и выводим контейнер
                            } else {
                                $("#site-search-results").hide(); //Если введено менее 2 знаков, контейнер скрыт (CSS display:none;)
                            }
                        });
                    });
                    </script>
                </div>
