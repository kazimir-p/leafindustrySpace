<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RD939SQYY5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RD939SQYY5');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leafindustry</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/src/img/favicon (4).ico?v=2" type="image/x-icon" />

    <!-- leafindustry-spaceAlt -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/all.min.css">
</head>

<body>
    <div id="leafContainer">
        <header>
                <nav id="nav">
                    <div id="title">leafindustry.space</div>
                    <div id="nav-list">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                       <!-- <ul>  
                            <li><a href="../boatbuild/index.html" target="about_blank">boatbuild</a> </li>
                            <li> <a href="../portfolio/index.html" target="
                                _blank">portfolio</a> </li>
                            <li> <a href="#me">me</a></li>
                        </ul> -->
                    </div>
                    <!-- hamburger-->
<div class="mmenu-menu">
<?php wp_nav_menu( array( 'theme_location' =>
'header-menu' ) ); ?>
</div>
<div id="mmenu" class="mmenu-icon-wrapper">
<span class="mmenu-icon"></span>
</div>
<!-- konec hamburgeru-->
                </nav>
        </header>
