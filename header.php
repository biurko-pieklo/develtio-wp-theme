<!DOCTYPE html>
<head>
    <title><?php the_title() ?></title>
    <?php wp_head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <header>
        <img
            src="<?php echo get_stylesheet_directory_uri() . '/img/logo.webp' ?>"
            class="logo"
            alt="Logo twojefinanse"
            width="242px"
            height="83px"
        />

        <div class="mobile-menu-toggle"></div>

        <div class="header-menu">
            <ul>
                <li><a href="#">o nas</a></li>
                <li><a href="#">oferta</a></li>
                <li><a href="#">towarzystwa ubezpieczeń</a></li>
                <li><a href="#">dołącz do nas</a></li>
                <li><a href="#">przydatne materiały</a></li>
                <li><a href="#">oddziały</a></li>
            </ul>
        </div>
    </header>