<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal CZN - Página da notícia interna</title>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/logofooter.png" rel="apple-touch-icon"/>
	<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

    <script>
        //<![CDATA[
        const getData = {
            'urlDir':'<?php bloginfo('template_directory');?>/',
            'ajaxDir':'<?php echo stripslashes(get_admin_url()).'admin-ajax.php';?>',
        }
        //]]>
    </script>

    <!--    TODO tranferir para o front-->
    <style>
        .load-posts.disabled > i {
            -webkit-animation: rotation 2s infinite linear;
        }
        @-webkit-keyframes rotation {
            from {
                -webkit-transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(359deg);
            }
        }
        @keyframes rotation {
            from {
                -webkit-transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(359deg);
            }
        }
    </style>
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0"></script>

<?php
get_template_part( 'parts/nav', 'scroll' );

get_template_part( 'parts/nav', 'offcanvas' );

get_template_part( 'parts/nav', 'topbar' );
?>