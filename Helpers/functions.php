<?php

/*
    Fichier : /Helpers/functions.php
 */

/**
 * Retourne le contenu HTML du bloc d'en tête d'une page.
 * Deux CSS sont automatiquement intégré :
 *   - pico.css
 *   - custom.css
 *
 * @param string title le titre de la page.
 * @return string
 */
function head(string $title = ''): string
{
    return  <<<HTML_HEAD
    <!DOCTYPE html>
    <html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/redimension.css">
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
        <link rel="icon" type="image/png" href="./assets/img/favicon.webp" />
        <title>$title</title>
    </head>
HTML_HEAD;
}

function header_main(string $page = ''): string
{
    return '<header class="header_mobile">
    <div class="flex-header_mobile">
        <div class="flex_content-header_mobile">
            <div class="content-header_mobile">
                <a href="./index.php" class="logo-header_mobile">
                    <div class="logo-header_mobile">
                        <img src="./assets/img/logo.webp" alt="">
                    </div>
                </a>
                <div class="btn_burger-header_mobile">
                    <i class="fi fi-br-menu-burger"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-header_mobile hidden">
        <nav>
            <ul class="menu_content-header_mobile">
                <li>
                    <a href="./index.php#accueil-index">Accueil</a>
                </li>
                <li>
                    <a href="./le_concours.php">Le concours</a>
                </li>
                <li>
                    <a href="./le_reglement.php">Le règlement</a>
                </li>
                <li>
                    <a href="./les_editions.php">Les éditions</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<header class="header_desktop">
    <div class="flex-header_desktop">
        <div class="flex_content-header_desktop">
            <div class="content-header_desktop">
                <a href="./index.php" class="logo-header_mobile">
                    <img src="./assets/img/logo.webp" alt="">
                </a>
                <nav>
                    <ul class="menu_content-header_desktop">
                        <li>
                            <a href="./index.php#accueil-index" class="btn_li-header_desktop ' . ($page === "index" ? 'header_active' : '') . '">Accueil</a>
                        </li>
                        <li>
                            <a href="./le_concours.php" class="btn_li-header_desktop ' . ($page === "concours" ? 'header_active' : '') . '">Le concours</a>
                        </li>
                        <li>
                            <a href="./le_reglement.php" class="btn_li-header_desktop ' . ($page === "reglement" ? 'header_active' : '') . '">Le règlement</a>
                        </li>
                        <li>
                            <a href="./les_editions.php" class="btn_li-header_desktop ' . ($page === "editions" ? 'header_active' : '') . '">Les éditions</a>
                        </li>
                    </ul>
                </nav>
                <div class="social_media_content-header_desktop">
                    <a href="https://www.instagram.com/concours48h/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1c2632" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </a>
                    <a href="https://www.youtube.com/channel/UCJnZaF7PD6B4kBL77GLHZXA" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1c2632" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>';
}

function footer_main(): string
{
    return "<footer>
    <div class='flextop-footer'>
        <div class='flex_content-footer'>
            <div class='logo-footer'>
                <img src='./assets/img/logo_jaune.webp' alt=''>
            </div>
            <div class='content_text-footer'>
                <p style='font-weight:700;'>Concours 48h</p>
                <p>MMI - IUT d'Angoulême</p>
            </div>
        </div>
        <div class='flex_content-footer'>
            <div class='content_text-footer'>
                <a href='./le_concours.php'>Le concours</a>
                <a href='./le_reglement.php'>Le règlement</a>
                <a href='./les_editions.php'>Les éditions</a>
            </div>
            <div class='content_text-footer'>
                <a href='https://www.instagram.com/concours48h/' target='_blank'>Instagram</a>
                <a href='https://www.youtube.com/channel/UCJnZaF7PD6B4kBL77GLHZXA' target='_blank'>Youtube</a>
                <a href='mailto:concours48h@gmail.com' target='_blank'>Contact</a>
            </div>
        </div>
    </div>
    <div class='flexbottom-footer'>
        <p>Développé et designé avec ❤️ par <a href='https://arnaudgct.fr' target='_blank'>Arnaud Graciet</a>.</p>
        <p>©2024 Concours 48h - Tous droits réservés</p>
    </div>
</footer>";
}


/**
 * Retourne vrai si la méthode d'appel est GET.
 */
function isGetMethod(): bool
{
    return  ($_SERVER['REQUEST_METHOD'] === 'GET') ;
}

/**
 * Retourne vrai si la méthode d'appel est POST.
 */
function isPostMethod(): bool
{
    return  ($_SERVER['REQUEST_METHOD'] === 'POST') ;
}

function verif_user($user){
    if(isset($user) && $user === true) {
        return true;
    }else{
        return false;
    }
}