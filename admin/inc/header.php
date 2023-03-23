<?php
session_start();
if (!isset($_SESSION['user_login'])) {
    header('location: login.php');
}

require 'config/config.php';
require 'function/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SirTech | Admin</title>
    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css">
    <!--  -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">

    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-regular.css">

</head>

<body>


    <!-- Modal -->
    <div class="modal fade userDetailsModal" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- User details appear here -->
                </div>

            </div>
        </div>
    </div>
    <!--  -->
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <!--<div class="logo-src"></div>-->
                <h3>SirTech</h3>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="scrollbar-sidebar ps">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li class="">
                                <a href="#" aria-expanded="false">
                                    <i class="metismenu-icon fa-regular fa-gem"></i>
                                    Home page
                                    <i class="metismenu-state-icon pe-7s-angle-down fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="mm-collapse" style="height: 7.04px;">
                                    <li>
                                        <a href="home_header.php?sec=home_header">
                                            <i class="metismenu-icon"></i>
                                            Header
                                        </a>
                                    </li>
                                    <li>
                                        <a href="home_header.php?sec=home_first">
                                            <i class="metismenu-icon"></i>
                                            First Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="home_header.php?sec=home_second">
                                            <i class="metismenu-icon"></i>
                                            Second Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="home_header.php?sec=home_third">
                                            <i class="metismenu-icon"></i>
                                            Third Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="home_header.php?sec=home_fourth">
                                            <i class="metismenu-icon"></i>
                                            Fourth Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="home_header.php?sec=home_fifth">
                                            <i class="metismenu-icon"></i>
                                            Fifth Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="home_header.php?sec=home_sixth">
                                            <i class="metismenu-icon"></i>
                                            Sixth Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="home_header.php?sec=home_pricing">
                                            <i class="metismenu-icon"></i>
                                            Pricing Section
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#" aria-expanded="false">
                                    <i class="metismenu-icon fa-regular fa-gem"></i>
                                    Contact page
                                    <i class="metismenu-state-icon pe-7s-angle-down fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="mm-collapse" style="height: 7.04px;">
                                    <li>
                                        <a href="contact.php">
                                            <i class="metismenu-icon"></i>
                                            Contact Details
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#" aria-expanded="false">
                                    <i class="metismenu-icon fa-regular fa-gem"></i>
                                    About page
                                    <i class="metismenu-state-icon pe-7s-angle-down fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="mm-collapse" style="height: 7.04px;">
                                    <li>
                                        <a href="about_section.php?sec=hero_about">
                                            <i class="metismenu-icon"></i>
                                            Hero Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_section.php?sec=first_about">
                                            <i class="metismenu-icon"></i>
                                            First Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_section.php?sec=second_about">
                                            <i class="metismenu-icon"></i>
                                            Second Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_section.php?sec=third_about">
                                            <i class="metismenu-icon"></i>
                                            Third Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_section.php?sec=fourth_about">
                                            <i class="metismenu-icon"></i>
                                            Fourth Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_section.php?sec=fifth_about">
                                            <i class="metismenu-icon"></i>
                                            Fifth Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_section.php?sec=sixth_about">
                                            <i class="metismenu-icon"></i>
                                            Sixth Section
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#" aria-expanded="false">
                                    <i class="metismenu-icon fa-regular fa-gem"></i>
                                    Hospitality page
                                    <i class="metismenu-state-icon pe-7s-angle-down fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="mm-collapse" style="height: 7.04px;">
                                    <li>
                                        <a href="about_section.php?sec=hero_hospitality">
                                            <i class="metismenu-icon"></i>
                                            Hero Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="hospitality_section.php?sec=first_hospitality">
                                            <i class="metismenu-icon"></i>
                                            First Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="hospitality_section.php?sec=second_hospitality">
                                            <i class="metismenu-icon"></i>
                                            Second Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="hospitality_section.php?sec=third_hospitality">
                                            <i class="metismenu-icon"></i>
                                            Third Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="hospitality_section.php?sec=fourth_hospitality">
                                            <i class="metismenu-icon"></i>
                                            Fourth Section
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="">
                                <a href="#" aria-expanded="false">
                                    <i class="metismenu-icon fa-regular fa-gem"></i>
                                    Internet page
                                    <i class="metismenu-state-icon pe-7s-angle-down fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="mm-collapse" style="height: 7.04px;">
                                    <li>
                                        <a href="home_header.php?sec=hero_internet">
                                            <i class="metismenu-icon"></i>
                                            Hero Section
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#" aria-expanded="false">
                                    <i class="metismenu-icon fa-regular fa-gem"></i>
                                    Solar page
                                    <i class="metismenu-state-icon pe-7s-angle-down fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="mm-collapse" style="height: 7.04px;">
                                    <li>
                                        <a href="home_header.php?sec=hero_solar">
                                            <i class="metismenu-icon"></i>
                                            Hero Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_section.php?sec=solar_first">
                                            <i class="metismenu-icon"></i>
                                            First Section
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#" aria-expanded="false">
                                    <i class="metismenu-icon fa-regular fa-gem"></i>
                                    Iptv page
                                    <i class="metismenu-state-icon pe-7s-angle-down fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="mm-collapse" style="height: 7.04px;">
                                    <li>
                                        <a href="home_header.php?sec=hero_iptv">
                                            <i class="metismenu-icon"></i>
                                            Hero Section
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_section.php?sec=iptv_first">
                                            <i class="metismenu-icon"></i>
                                            First Section
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="footer.php">
                                    <i class="metismenu-icon fa-regular fa-gem"></i>
                                    Footer
                                </a>
                            </li>
                            <li class="">
                                <a href="form.php">
                                    <i class="metismenu-icon fa-regular fa-gem"></i>
                                    Internet Form
                                </a>
                            </li>
                            <li>
                                <a href="server/auth.php?logout">
                                    <i class="metismenu-icon  fa-regular fa-rocket"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fa-solid fa-home icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>SirTech Dashboard
                                    <div class="page-title-subheading">S.I.R Tech Jamaica Limited Admin Panel</div>
                                </div>
                            </div>
                        </div>
                    </div>