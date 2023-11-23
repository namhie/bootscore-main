<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
  <link href="<?= get_stylesheet_directory_uri(); ?>/libs/bootstrap/bootstrap.min.css" rel="stylesheet" media="all">
  <link href="<?= get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" media="all">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">
<div class="wrapper d-flex flex-column">
  <header class="header p-0"> 
        <div class="navbar navbar-top border-bottom border-default border-1 bg-white py-0">
          <div class="container justify-content-between row-gap-md-0 row-gap-4">
            <div class="navbar-menu">
              <button class="navbar-toggler p-3 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarMenu" aria-controls="offcanvasNavbarMenu" aria-expanded="false" aria-label="Переключатель навигации"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand p-0" href="index-home.html"><img class="logo" src="<?= get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="logo"></a>
            </div>
            <div class="offcanvas offcanvas-main offcanvas-start text-bg-danger" id="offcanvasNavbarMenu" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header justify-content-start p-0">
                <button class="btn-close btn-close-white fs-5 fs-md-3 p-4 pt-5 pb-3 me-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                <div class="offcanvas-title me-3"><a class="logo" href="#"><img src="<?= get_stylesheet_directory_uri(); ?>/img/logo-toggle.svg" alt="logo"></a></div>
                <div class="times text-nowrap px-md-3 px-2 ms-auto border-0 d-none"><span class="cantry">RU </span><span class="time time-form"></span></div>
              </div>
              <div class="offcanvas-body mt-md-4 px-0">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-lg-0 mt-3">
                  <li class="nav-item"> <a class="nav-link px-4" href="/#first-section" role="button">home</a></li>
                  <li class="nav-item"><a class="nav-link px-4" href="./#second-section" role="button">about us</a></li>
                  <li class="nav-item"> <a class="nav-link px-4" href="./#third-section" role="button">we’ll tell you</a></li>
                  <li class="nav-item"> <a class="nav-link px-4" href="./#fourth-section" role="button">our pipes</a></li>
                  <li class="nav-item"> <a class="nav-link px-4" href="./#fifth-section" role="button">get in touch</a></li>
                </ul>
                <div class="offcanvas-phone d-lg-none d-block border-top border-default"> 
                  <div class="phone text-nowrap text-light"><a class="py-md-3 px-3" href="tel:+79261605204"> 
                      <svg class="me-3" width="14" height="15" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.34352 7.43495C6.02585 8.8561 6.956 10.1881 8.13398 11.366C9.31195 12.544 10.6439 13.4742 12.0651 14.1565C12.1873 14.2152 12.2484 14.2445 12.3258 14.2671C12.6006 14.3472 12.9381 14.2896 13.1709 14.123C13.2364 14.0761 13.2924 14.02 13.4045 13.908C13.7472 13.5652 13.9186 13.3939 14.0909 13.2818C14.7408 12.8593 15.5786 12.8593 16.2284 13.2818C16.4008 13.3939 16.5721 13.5652 16.9149 13.908L17.1059 14.099C17.6269 14.62 17.8874 14.8805 18.0289 15.1603C18.3104 15.7167 18.3104 16.3738 18.0289 16.9302C17.8874 17.21 17.6269 17.4705 17.1059 17.9915L16.9514 18.146C16.4321 18.6652 16.1725 18.9249 15.8196 19.1231C15.4279 19.3431 14.8196 19.5013 14.3704 19.5C13.9656 19.4988 13.6889 19.4203 13.1355 19.2632C10.1617 18.4191 7.35557 16.8266 5.0145 14.4855C2.67343 12.1444 1.08086 9.3383 0.236803 6.36448C0.0797433 5.81112 0.00121244 5.53444 8.4101e-06 5.12961C-0.00132851 4.68039 0.156864 4.07208 0.376876 3.68043C0.575151 3.32747 0.834761 3.06786 1.35398 2.54864L1.50852 2.3941C2.02952 1.87309 2.29002 1.61259 2.5698 1.47108C3.12621 1.18965 3.78331 1.18965 4.33972 1.47108C4.6195 1.61259 4.88 1.87309 5.401 2.3941L5.59205 2.58514C5.93479 2.92788 6.10615 3.09925 6.21819 3.27157C6.64072 3.92144 6.64072 4.75924 6.21819 5.40911C6.10615 5.58143 5.93478 5.7528 5.59205 6.09554C5.47998 6.20761 5.42395 6.26364 5.37705 6.32914C5.21037 6.56191 5.15282 6.8994 5.23294 7.17425C5.25549 7.25159 5.28483 7.31271 5.34352 7.43495Z" fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8021 0.5C12.2219 0.5 12.5621 0.840264 12.5621 1.26L12.5621 4.7899L16.6294 0.7226C16.9262 0.425802 17.4074 0.425802 17.7042 0.7226C18.001 1.0194 18.001 1.5006 17.7042 1.7974L13.6369 5.86471L17.1668 5.86471C17.5866 5.86471 17.9268 6.20497 17.9268 6.62471C17.9268 7.04444 17.5866 7.38471 17.1668 7.38471H12.7505C11.807 7.38471 11.0421 6.61985 11.0421 5.67635L11.0421 1.26C11.0421 0.840263 11.3824 0.5 11.8021 0.5Z" fill="white"></path>
                      </svg><span>+7 (123) 456 78 99</span></a></div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center gap-1">
              <div class="phone text-nowrap d-lg-inline-block d-none"><a class="py-md-3 px-3" href="tel:+79261605204">+7 (926) 160 52 04</a></div>
              <div class="times text-nowrap ps-3"><span class="cantry">RU </span><span class="time"></span></div>
            </div>
          </div>
        </div>
      </header>
<!-- #masthead -->
