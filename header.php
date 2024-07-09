<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono:ital@0;1&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <title>Foresight</title>
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="burger-menu">
                <div class="burger-icon">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <ul class="menu">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Головна</a></li>
                    <li><a href="<?php echo esc_url(home_url('/publications')); ?>">Публікації</a></li>
                    <li><a href="<?php echo esc_url(home_url('results')); ?>">Результати опитування</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contacts')); ?>">Контакти</a></li>
                    <li><a href="<?php echo esc_url(home_url('/join')); ?>">Долучитись до опитування</a></li>
                    <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Політика приватності</a></li>
                </ul>
            </div>
            <a href="index.html">
                <h1>Foresight</h1>
            </a>
        </nav>
        <div class="language-switcher">
            <div class="current-language">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ua.png" alt="english" class="flag" style="margin-right: 7px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.svg" alt="" style="height: 9px" />
            </div>
            <ul class="language-switcher-flags">
                <li><a href="?lang=ua"><img src="<?php echo get_template_directory_uri(); ?>/img/ua.png" alt="ukrainian" class="flag"></a></li>
                <li><a href="?lang=en"><img src="<?php echo get_template_directory_uri(); ?>/img/en.png" alt="english" class="flag"></a></li>
            </ul>
        </div>

    </header>

    <main>