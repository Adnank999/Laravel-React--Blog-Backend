<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Dashtic - Bootstrap Webapp Responsive Dashboard Simple Admin Panel Premium HTML5 Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="admin, admin template, dashboard, admin dashboard, bootstrap 5, responsive, clean, ui, admin panel, ui kit, responsive admin, application, bootstrap 4, flat, bootstrap5, admin dashboard template" />

    <!-- Title -->
    <title>Dashtic - Bootstrap Webapp Responsive Dashboard Simple Admin Panel Premium HTML5 Template</title>

    <!--Favicon -->
    <link rel="icon" href="{{asset('asset_dashboard/assets/images/brand/favicon.ico')}}" type="image/x-icon" />

    <!-- Bootstrap css -->
    <link id="style" href="{{asset('asset_dashboard/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Style css -->
    <link href="{{asset('asset_dashboard/assets/css/style.css')}}" rel="stylesheet" />

    <!-- Plugin css -->
    <link href="{{asset('asset_dashboard/assets/css/plugin.css')}}" rel="stylesheet" />

    <!-- Animate css -->
    <link href="{{asset('asset_dashboard/assets/css/animated.css')}}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{asset('asset_dashboard/assets/plugins/web-fonts/icons.css')}}" rel="stylesheet" />
    <link href="{{asset('asset_dashboard/assets/plugins/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset_dashboard/assets/plugins/web-fonts/plugin.css')}}" rel="stylesheet" />

</head>

<body class="main-body app sidebar-mini light-mode ltr">

    <!---Global-loader-->
    <div id="global-loader">
        <img src="{{asset('asset_dashboard/assets/images/svgs/loader.svg')}}" alt="loader">
    </div>

    <div class="page">
        <div class="page-main">

            <!--app header-->
            <div class="app-header header top-header">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <div class="dropdown side-nav">
                            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                                <a class="open-toggle" href="javascript:void(0)">
                                    <svg class="header-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                </a>
                                <a class="close-toggle" href="javascript:void(0)">
                                    <svg class="header-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <a class="header-brand" href="index.html">
                            <img src="{{asset('asset_dashboard/assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dashtic logo">
                            <img src="{{asset('asset_dashboard/assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Dashtic logo">
                            <img src="{{asset('asset_dashboard/assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Dashtic logo">
                            <img src="{{asset('asset_dashboard/assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Dashtic logo">
                        </a>
                        <div class="dropdown  header-option">
                            <a class="nav-link icon p-0" data-bs-toggle="dropdown">
                                <svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path opacity=".3" d="M19.28,8.6 L18.58,7.39 L17.31,7.9 L16.25,8.33 L15.34,7.63 C14.95,7.33 14.54,7.09 14.11,6.92 L13.05,6.49 L12.89,5.36 L12.7,4 L11.3,4 L11.11,5.35 L10.95,6.48 L9.89,6.92 C9.48,7.09 9.07,7.33 8.64,7.65 L7.74,8.33 L6.69,7.91 L5.42,7.39 L4.72,8.6 L5.8,9.44 L6.69,10.14 L6.55,11.27 C6.52,11.57 6.5,11.8 6.5,12 C6.5,12.2 6.52,12.43 6.55,12.73 L6.69,13.86 L5.8,14.56 L4.72,15.4 L5.42,16.61 L6.69,16.1 L7.75,15.67 L8.66,16.37 C9.05,16.67 9.46,16.91 9.89,17.08 L10.95,17.51 L11.11,18.64 L11.3,20 L12.69,20 L12.88,18.65 L13.04,17.52 L14.1,17.09 C14.51,16.92 14.92,16.68 15.35,16.36 L16.25,15.68 L17.29,16.1 L18.56,16.61 L19.26,15.4 L18.18,14.56 L17.29,13.86 L17.43,12.73 C17.47,12.42 17.48,12.21 17.48,12 C17.48,11.79 17.46,11.57 17.43,11.27 L17.29,10.14 L18.18,9.44 L19.28,8.6 Z M12,16 C9.79,16 8,14.21 8,12 C8,9.79 9.79,8 12,8 C14.21,8 16,9.79 16,12 C16,14.21 14.21,16 12,16 Z"></path>
                                    <path d="M19.43,12.98 C19.47,12.66 19.5,12.34 19.5,12 C19.5,11.66 19.47,11.34 19.43,11.02 L21.54,9.37 C21.73,9.22 21.78,8.95 21.66,8.73 L19.66,5.27 C19.57,5.11 19.4,5.02 19.22,5.02 C19.16,5.02 19.1,5.03 19.05,5.05 L16.56,6.05 C16.04,5.65 15.48,5.32 14.87,5.07 L14.49,2.42 C14.46,2.18 14.25,2 14,2 L10,2 C9.75,2 9.54,2.18 9.51,2.42 L9.13,5.07 C8.52,5.32 7.96,5.66 7.44,6.05 L4.95,5.05 C4.89,5.03 4.83,5.02 4.77,5.02 C4.6,5.02 4.43,5.11 4.34,5.27 L2.34,8.73 C2.21,8.95 2.27,9.22 2.46,9.37 L4.57,11.02 C4.53,11.34 4.5,11.67 4.5,12 C4.5,12.33 4.53,12.66 4.57,12.98 L2.46,14.63 C2.27,14.78 2.22,15.05 2.34,15.27 L4.34,18.73 C4.43,18.89 4.6,18.98 4.78,18.98 C4.84,18.98 4.9,18.97 4.95,18.95 L7.44,17.95 C7.96,18.35 8.52,18.68 9.13,18.93 L9.51,21.58 C9.54,21.82 9.75,22 10,22 L14,22 C14.25,22 14.46,21.82 14.49,21.58 L14.87,18.93 C15.48,18.68 16.04,18.34 16.56,17.95 L19.05,18.95 C19.11,18.97 19.17,18.98 19.23,18.98 C19.4,18.98 19.57,18.89 19.66,18.73 L21.66,15.27 C21.78,15.05 21.73,14.78 21.54,14.63 L19.43,12.98 Z M17.45,11.27 C17.49,11.58 17.5,11.79 17.5,12 C17.5,12.21 17.48,12.43 17.45,12.73 L17.31,13.86 L18.2,14.56 L19.28,15.4 L18.58,16.61 L17.31,16.1 L16.27,15.68 L15.37,16.36 C14.94,16.68 14.53,16.92 14.12,17.09 L13.06,17.52 L12.9,18.65 L12.7,20 L11.3,20 L11.11,18.65 L10.95,17.52 L9.89,17.09 C9.46,16.91 9.06,16.68 8.66,16.38 L7.75,15.68 L6.69,16.11 L5.42,16.62 L4.72,15.41 L5.8,14.57 L6.69,13.87 L6.55,12.74 C6.52,12.43 6.5,12.2 6.5,12 C6.5,11.8 6.52,11.57 6.55,11.27 L6.69,10.14 L5.8,9.44 L4.72,8.6 L5.42,7.39 L6.69,7.9 L7.73,8.32 L8.63,7.64 C9.06,7.32 9.47,7.08 9.88,6.91 L10.94,6.48 L11.1,5.35 L11.3,4 L12.69,4 L12.88,5.35 L13.04,6.48 L14.1,6.91 C14.53,7.09 14.93,7.32 15.33,7.62 L16.24,8.32 L17.3,7.89 L18.57,7.38 L19.27,8.59 L18.2,9.44 L17.31,10.14 L17.45,11.27 Z M12,8 C9.79,8 8,9.79 8,12 C8,14.21 9.79,16 12,16 C14.21,16 16,14.21 16,12 C16,9.79 14.21,8 12,8 Z M12,14 C10.9,14 10,13.1 10,12 C10,10.9 10.9,10 12,10 C13.1,10 14,10.9 14,12 C14,13.1 13.1,14 12,14 Z"></path>
                                </svg>
                                <span class="nav-span">Projects <i class="fa fa-angle-down ms-1 fs-18"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-start dropdown-menu-arrow animated">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    App Design Projects
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    Web Design Projects
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    App Development Projects
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    Back-End Projects
                                </a>
                                <div class="text-start px-5 p-2 border-top">
                                    <a href="javascript:void(0)" class="">View Projects</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex order-lg-2 ms-lg-auto">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical "></span>
                            </button>
                            <div class="navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="search" class="nav-link nav-link-lg d-lg-none navsearch">
                                            <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                            </svg>
                                        </a>
                                        <div class="mt-2 me-md-2">
                                            <form class="form-inline">
                                                <div class="search-element">
                                                    <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                                    <button class="btn btn-primary-color" type="button">
                                                        <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- SEARCH -->
                                        <div class="dropdown header-theme">
                                            <a class="nav-link icon layout-setting">
                                                <span class="dark-layout">
                                                    <svg class="header-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <rect fill="none" height="24" width="24" />
                                                        <circle cx="12" cy="12" opacity=".3" r="3" />
                                                        <path d="M12,9c1.65,0,3,1.35,3,3s-1.35,3-3,3s-3-1.35-3-3S10.35,9,12,9 M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5 S14.76,7,12,7L12,7z M2,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S1.45,13,2,13z M20,13l2,0c0.55,0,1-0.45,1-1 s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S19.45,13,20,13z M11,2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V2c0-0.55-0.45-1-1-1S11,1.45,11,2z M11,20v2c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1C11.45,19,11,19.45,11,20z M5.99,4.58c-0.39-0.39-1.03-0.39-1.41,0 c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0s0.39-1.03,0-1.41L5.99,4.58z M18.36,16.95 c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0c0.39-0.39,0.39-1.03,0-1.41 L18.36,16.95z M19.42,5.99c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41 s1.03,0.39,1.41,0L19.42,5.99z M7.05,18.36c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06 c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L7.05,18.36z" />
                                                    </svg>
                                                </span>
                                                <span class="light-layout">
                                                    <svg class="header-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <rect fill="none" height="24" width="24" />
                                                        <path d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27 C17.45,17.19,14.93,19,12,19c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z" opacity=".3" />
                                                        <path d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27C17.45,17.19,14.93,19,12,19 c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36 c-0.98,1.37-2.58,2.26-4.4,2.26c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="dropdown header-fullscreen">
                                            <a class="nav-link icon full-screen-link" id="fullscreen-button">
                                                <svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <path d="M7,14 L5,14 L5,19 L10,19 L10,17 L7,17 L7,14 Z M5,10 L7,10 L7,7 L10,7 L10,5 L5,5 L5,10 Z M17,17 L14,17 L14,19 L19,19 L19,14 L17,14 L17,17 Z M14,5 L14,7 L17,7 L17,10 L19,10 L19,5 L14,5 Z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="dropdown header-notify">
                                            <a class="nav-link icon" data-bs-toggle="dropdown">
                                                <svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <path opacity=".3" d="M12 6.5c-2.49 0-4 2.02-4 4.5v6h8v-6c0-2.48-1.51-4.5-4-4.5z"></path>
                                                    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-11c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2v-5zm-2 6H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2a8.445 8.445 0 013.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43a8.495 8.495 0 013.54 6.42z"></path>
                                                </svg>
                                                <span class="pulse "></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  animated">
                                                <a href="email-inbox.html" class="dropdown-item d-flex pb-3">
                                                    <svg class="header-icon me-4" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3" />
                                                        <path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z" />
                                                    </svg>
                                                    <div>
                                                        <div class="font-weight-bold">Message Sent.</div>
                                                        <div class="small text-muted">3 hours ago</div>
                                                    </div>
                                                </a>
                                                <a href="email-inbox.html" class="dropdown-item d-flex pb-3">
                                                    <svg class="header-icon me-4" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path d="M15.55 11l2.76-5H6.16l2.37 5z" opacity=".3" />
                                                        <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                                    </svg>
                                                    <div>
                                                        <div class="font-weight-bold"> Order Placed</div>
                                                        <div class="small text-muted">5 hour ago</div>
                                                    </div>
                                                </a>
                                                <a href="email-inbox.html" class="dropdown-item d-flex pb-3">
                                                    <svg class="header-icon me-4" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <path d="M5 8h14V6H5z" opacity=".3" />
                                                        <path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z" />
                                                    </svg>
                                                    <div>
                                                        <div class="font-weight-bold"> Event Started</div>
                                                        <div class="small text-muted">45 mintues ago</div>
                                                    </div>
                                                </a>
                                                <a href="email-inbox.html" class="dropdown-item d-flex pb-3">
                                                    <svg class="header-icon me-4" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path d="M18 13h5v7h-5z" opacity=".3" />
                                                        <path d="M23 11.01L18 11c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-9c0-.55-.45-.99-1-.99zM23 20h-5v-7h5v7zM2 4h18v5h2V4c0-1.11-.9-2-2-2H2C.89 2 0 2.89 0 4v12c0 1.1.89 2 2 2h7v2H7v2h8v-2h-2v-2h2v-2H2V4zm9 2l-.97 3H7l2.47 1.76-.94 2.91 2.47-1.8 2.47 1.8-.94-2.91L15 9h-3.03z" />
                                                    </svg>
                                                    <div>
                                                        <div class="font-weight-bold">Your Admin launched</div>
                                                        <div class="small text-muted">1 day ago</div>
                                                    </div>
                                                </a>
                                                <div class=" text-center p-2 border-top">
                                                    <a href="email-inbox.html" class="">View All Notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown profile-dropdown">
                                            <a href="javascript:void(0)" class="nav-link icon leading-none" data-bs-toggle="dropdown">
                                                <span>
                                                    <img src="{{asset('asset_dashboard/assets/images/users/16.jpg')}}" alt="img" class="avatar avatar-md brround">
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                                <div class="text-center">
                                                
                                                    <a href="javascript:void(0)" class="dropdown-item text-center user pb-0 font-weight-bold">{{ auth()->user()->name}}</a>
                                                
                                                    <span class="text-center user-semi-title">App Developer</span>
                                                    <div class="dropdown-divider"></div>
                                                </div>
                                                <a class="dropdown-item d-flex" href="profile-1.html">
                                                    <svg class="header-icon me-3" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3" />
                                                        <circle cx="12" cy="8" opacity=".3" r="2" />
                                                        <path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" />
                                                    </svg>
                                                    <div class="mt-1">Profile</div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="settings.html">
                                                    <svg class="header-icon me-3" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <path opacity=".3" d="M19.28,8.6 L18.58,7.39 L17.31,7.9 L16.25,8.33 L15.34,7.63 C14.95,7.33 14.54,7.09 14.11,6.92 L13.05,6.49 L12.89,5.36 L12.7,4 L11.3,4 L11.11,5.35 L10.95,6.48 L9.89,6.92 C9.48,7.09 9.07,7.33 8.64,7.65 L7.74,8.33 L6.69,7.91 L5.42,7.39 L4.72,8.6 L5.8,9.44 L6.69,10.14 L6.55,11.27 C6.52,11.57 6.5,11.8 6.5,12 C6.5,12.2 6.52,12.43 6.55,12.73 L6.69,13.86 L5.8,14.56 L4.72,15.4 L5.42,16.61 L6.69,16.1 L7.75,15.67 L8.66,16.37 C9.05,16.67 9.46,16.91 9.89,17.08 L10.95,17.51 L11.11,18.64 L11.3,20 L12.69,20 L12.88,18.65 L13.04,17.52 L14.1,17.09 C14.51,16.92 14.92,16.68 15.35,16.36 L16.25,15.68 L17.29,16.1 L18.56,16.61 L19.26,15.4 L18.18,14.56 L17.29,13.86 L17.43,12.73 C17.47,12.42 17.48,12.21 17.48,12 C17.48,11.79 17.46,11.57 17.43,11.27 L17.29,10.14 L18.18,9.44 L19.28,8.6 Z M12,16 C9.79,16 8,14.21 8,12 C8,9.79 9.79,8 12,8 C14.21,8 16,9.79 16,12 C16,14.21 14.21,16 12,16 Z"></path>
                                                        <path d="M19.43,12.98 C19.47,12.66 19.5,12.34 19.5,12 C19.5,11.66 19.47,11.34 19.43,11.02 L21.54,9.37 C21.73,9.22 21.78,8.95 21.66,8.73 L19.66,5.27 C19.57,5.11 19.4,5.02 19.22,5.02 C19.16,5.02 19.1,5.03 19.05,5.05 L16.56,6.05 C16.04,5.65 15.48,5.32 14.87,5.07 L14.49,2.42 C14.46,2.18 14.25,2 14,2 L10,2 C9.75,2 9.54,2.18 9.51,2.42 L9.13,5.07 C8.52,5.32 7.96,5.66 7.44,6.05 L4.95,5.05 C4.89,5.03 4.83,5.02 4.77,5.02 C4.6,5.02 4.43,5.11 4.34,5.27 L2.34,8.73 C2.21,8.95 2.27,9.22 2.46,9.37 L4.57,11.02 C4.53,11.34 4.5,11.67 4.5,12 C4.5,12.33 4.53,12.66 4.57,12.98 L2.46,14.63 C2.27,14.78 2.22,15.05 2.34,15.27 L4.34,18.73 C4.43,18.89 4.6,18.98 4.78,18.98 C4.84,18.98 4.9,18.97 4.95,18.95 L7.44,17.95 C7.96,18.35 8.52,18.68 9.13,18.93 L9.51,21.58 C9.54,21.82 9.75,22 10,22 L14,22 C14.25,22 14.46,21.82 14.49,21.58 L14.87,18.93 C15.48,18.68 16.04,18.34 16.56,17.95 L19.05,18.95 C19.11,18.97 19.17,18.98 19.23,18.98 C19.4,18.98 19.57,18.89 19.66,18.73 L21.66,15.27 C21.78,15.05 21.73,14.78 21.54,14.63 L19.43,12.98 Z M17.45,11.27 C17.49,11.58 17.5,11.79 17.5,12 C17.5,12.21 17.48,12.43 17.45,12.73 L17.31,13.86 L18.2,14.56 L19.28,15.4 L18.58,16.61 L17.31,16.1 L16.27,15.68 L15.37,16.36 C14.94,16.68 14.53,16.92 14.12,17.09 L13.06,17.52 L12.9,18.65 L12.7,20 L11.3,20 L11.11,18.65 L10.95,17.52 L9.89,17.09 C9.46,16.91 9.06,16.68 8.66,16.38 L7.75,15.68 L6.69,16.11 L5.42,16.62 L4.72,15.41 L5.8,14.57 L6.69,13.87 L6.55,12.74 C6.52,12.43 6.5,12.2 6.5,12 C6.5,11.8 6.52,11.57 6.55,11.27 L6.69,10.14 L5.8,9.44 L4.72,8.6 L5.42,7.39 L6.69,7.9 L7.73,8.32 L8.63,7.64 C9.06,7.32 9.47,7.08 9.88,6.91 L10.94,6.48 L11.1,5.35 L11.3,4 L12.69,4 L12.88,5.35 L13.04,6.48 L14.1,6.91 C14.53,7.09 14.93,7.32 15.33,7.62 L16.24,8.32 L17.3,7.89 L18.57,7.38 L19.27,8.59 L18.2,9.44 L17.31,10.14 L17.45,11.27 Z M12,8 C9.79,8 8,9.79 8,12 C8,14.21 9.79,16 12,16 C14.21,16 16,14.21 16,12 C16,9.79 14.21,8 12,8 Z M12,14 C10.9,14 10,13.1 10,12 C10,10.9 10.9,10 12,10 C13.1,10 14,10.9 14,12 C14,13.1 13.1,14 12,14 Z"></path>
                                                    </svg>
                                                    <div class="mt-1">Settings</div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="email-inbox.html">
                                                    <svg class="header-icon me-3" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3" />
                                                        <path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z" />
                                                    </svg>
                                                    <div class="mt-1">Messages</div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="login-1.html">
                                                    <svg class="header-icon me-3" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                                        <path d="M6 20h12V10H6v10zm2-6h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z" opacity=".3" />
                                                        <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10zm-7-1h2v-3h3v-2h-3v-3h-2v3H8v2h3z" />
                                                    </svg>
                                                    <div class="mt-1">Sign Out</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/app header-->

            <!-- main-sidebar -->
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="sticky">
                <aside class="app-sidebar sidebar-scroll">
                    <div class="main-sidebar-header active">
                        <a class="desktop-logo logo-light active" href="{{Route('admindashboard')}}"><img src="{{asset('asset_dashboard/assets/images/brand/logo.png')}}" class="main-logo" alt="logo"></a>
                        <a class="desktop-logo logo-dark active" href="{{Route('admindashboard')}}"><img src="{{asset('asset_dashboard/assets/images/brand/logo1.png')}}" class="main-logo" alt="logo"></a>
                        <a class="logo-icon mobile-logo icon-light active" href="{{Route('admindashboard')}}"><img src="{{asset('asset_dashboard/assets/images/brand/favicon.png')}}" alt="logo"></a>
                        <a class="logo-icon mobile-logo icon-dark active" href="{{Route('admindashboard')}}"><img src="{{asset('asset_dashboard/assets/images/brand/favicon1.png')}}" alt="logo"></a>
                    </div>
                    <div class="main-sidemenu">
                        <div class="app-sidebar__user">
                            <div class="dropdown user-pro-body text-center">
                                <div class="user-pic">
                                    <img alt="user-img" class="avatar avatar-xl brround mb-1" src="{{asset('asset_dashboard/assets/images/users/16.jpg')}}">
                                </div>
                                <div class="user-info text-center">
                                    <h5 class=" mb-1 font-weight-bold">{{ auth()->user()->name}}</h5>
                                    <span class="text-muted app-sidebar__user-name text-sm">App Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                    <span class="side-menu__label">Dashboard</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Dashboard</a></li>
                                    <li><a class="slide-item" href="index.html"><span>Dashboard 01</span></a></li>
                                    <li><a class="slide-item" href="index2.html"><span>Dashboard 02</span></a></li>
                                    <li><a class="slide-item" href="index3.html"><span>Dashboard 03</span></a></li>
                                    <li><a class="slide-item" href="index4.html"><span>Dashboard 04</span></a></li>
                                    <li><a class="slide-item" href="index5.html"><span>Dashboard 05</span></a></li>
                                </ul>
                            </li>


                            <!-- Custom blog menu -->
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                    <span class="side-menu__label">BLog</span><i class="fa-solid fa-blog"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Blog</a></li>
                                    <li><a class="slide-item" href="{{Route('allblogs')}}"><span>All Blogs</span></a></li>
                                    <li><a class="slide-item" href="index5.html"><span>Delete Blogs</span></a></li>
                                </ul>
                            </li>
                            <!-- end Custom blog menu -->



                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                        <polyline points="2 17 12 22 22 17"></polyline>
                                        <polyline points="2 12 12 17 22 12"></polyline>
                                    </svg>
                                    <span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Apps</a>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Chat</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="chat.html">Chat</a></li>
                                            <li><a class="sub-slide-item" href="chat2.html">Chat 02</a></li>
                                            <li><a class="sub-slide-item" href="chat3.html">Chat 03</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Contact</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="contact-list.html">Contact list</a></li>
                                            <li><a class="sub-slide-item" href="contact-list2.html">Contact list 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">File Manager</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="file-manager.html">File Manager</a></li>
                                            <li><a class="sub-slide-item" href="file-manager-list.html">File Manager 02</a></li>
                                            <li><a class="sub-slide-item" href="file-details.html">File Details</a></li>
                                            <li><a class="sub-slide-item" href="file-attachments.html">File Attachments</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Todo List</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="todo-list.html">Todo List</a></li>
                                            <li><a class="sub-slide-item" href="todo-list2.html">Todo List 02</a></li>
                                            <li><a class="sub-slide-item" href="todo-list3.html">Todo List 03</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">User List</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="users-list-1.html">User List 01</a></li>
                                            <li><a class="sub-slide-item" href="users-list-2.html">User List 02</a></li>
                                            <li><a class="sub-slide-item" href="users-list-3.html">User List 03</a></li>
                                            <li><a class="sub-slide-item" href="users-list-4.html">User List 04</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Maps</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="maps.html">Vector Maps</a></li>
                                            <li><a class="sub-slide-item" href="maps2.html">Leaflet Maps</a></li>
                                            <li><a class="sub-slide-item" href="maps3.html">Mapel Maps</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="calendar.html" class="slide-item"> Calendar</a></li>
                                    <li><a href="dragula.html" class="slide-item"> Dragula Card</a></li>
                                    <li><a href="cookies.html" class="slide-item"> Cookies</a></li>
                                    <li><a href="image-comparison.html" class="slide-item"> Image Comparison</a></li>
                                    <li><a href="img-crop.html" class="slide-item"> Image Crop</a></li>
                                    <li><a href="page-sessiontimeout.html" class="slide-item"> Page-sessiontimeout</a></li>
                                    <li><a href="notify.html" class="slide-item"> Notifications</a></li>
                                    <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
                                    <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
                                    <li><a href="counters.html" class="slide-item"> Counters</a></li>
                                    <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
                                    <li><a href="time-line.html" class="slide-item"> Time Line</a></li>
                                    <li><a href="rating.html" class="slide-item"> Rating</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                    </svg>
                                    <span class="side-menu__label">Widgets</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Widgets</a>
                                    </li>
                                    <li><a href="widgets-1.html" class="slide-item">Widgets</a></li>
                                    <li><a href="widgets-2.html" class="slide-item">Chart Widgets</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                    <span class="side-menu__label">Forms</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Forms</a>
                                    </li>
                                    <li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
                                    <li><a href="advanced-forms.html" class="slide-item"> Advanced Forms</a></li>
                                    <li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
                                    <li><a href="wysiwyag.html" class="slide-item"> Form Edit</a></li>
                                    <li><a href="form-sizes.html" class="slide-item"> Form Element Sizes</a></li>
                                    <li><a href="form-treeview.html" class="slide-item"> Form Treeview</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                        <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                    </svg>
                                    <span class="side-menu__label">Charts</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Charts</a>
                                    </li>
                                    <li><a href="chart-chartist.html" class="slide-item">Chartjs Charts</a></li>
                                    <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
                                    <li><a href="chart-apex.html" class="slide-item"> Apex Charts</a></li>
                                    <li><a href="chart-peity.html" class="slide-item"> Pie Charts</a></li>
                                    <li><a href="chart-echart.html" class="slide-item"> Echart Charts</a></li>
                                    <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                                    <li><a href="chart-c3.html" class="slide-item">C3 Charts</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="3" y1="9" x2="21" y2="9"></line>
                                        <line x1="9" y1="21" x2="9" y2="9"></line>
                                    </svg>
                                    <span class="side-menu__label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Tables</a>
                                    </li>
                                    <li><a href="tables.html" class="slide-item">Default table</a></li>
                                    <li><a href="datatable.html" class="slide-item">Data Table</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                    <span class="side-menu__label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Elements</a>
                                    </li>
                                    <li><a href="accordion.html" class="slide-item"> Accordion</a></li>
                                    <li><a href="alerts.html" class="slide-item"> Alerts</a></li>
                                    <li><a href="avatars.html" class="slide-item"> Avatars</a></li>
                                    <li><a href="badge.html" class="slide-item"> Badges</a></li>
                                    <li><a href="breadcrumbs.html" class="slide-item"> Breadcrumb</a></li>
                                    <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
                                    <li><a href="cards.html" class="slide-item"> Cards</a></li>
                                    <li><a href="cards-image.html" class="slide-item"> Card Images</a></li>
                                    <li><a href="carousel.html" class="slide-item"> Carousel</a></li>
                                    <li><a href="dropdown.html" class="slide-item"> Dropdown</a></li>
                                    <li><a href="footers.html" class="slide-item"> Footers</a></li>
                                    <li><a href="headers.html" class="slide-item"> Headers</a></li>
                                    <li><a href="list.html" class="slide-item"> List</a></li>
                                    <li><a href="media-object.html" class="slide-item"> Media Object</a></li>
                                    <li><a href="modal.html" class="slide-item"> Modal</a></li>
                                    <li><a href="navigation.html" class="slide-item"> Navigation</a></li>
                                    <li><a href="pagination.html" class="slide-item"> Pagination</a></li>
                                    <li><a href="panels.html" class="slide-item"> Panel</a></li>
                                    <li><a href="popover.html" class="slide-item"> Popover</a></li>
                                    <li><a href="progress.html" class="slide-item"> Progress</a></li>
                                    <li><a href="tabs.html" class="slide-item"> Tabs</a></li>
                                    <li><a href="tags.html" class="slide-item"> Tags</a></li>
                                    <li><a href="tooltip.html" class="slide-item"> Tooltips</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon">
                                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                                    </svg>
                                    <span class="side-menu__label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Icons</a>
                                    </li>
                                    <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                                    <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                                    <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                                    <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                                    <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                                    <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                                    <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                                    <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                                    <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                                    <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
                                    <li><a href="icons11.html" class="slide-item">Material Icons</a></li>
                                    <li><a href="icons12.html" class="slide-item">Bootstrap5 SVG Icons</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                        <polyline points="13 2 13 9 20 9"></polyline>
                                    </svg>
                                    <span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Pages</a>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Profile</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="profile-1.html">Profile 01</a></li>
                                            <li><a class="sub-slide-item" href="profile-2.html">Profile 02</a></li>
                                            <li><a class="sub-slide-item" href="profile-3.html">Profile 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html" class="slide-item"> About Us</a></li>
                                    <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                                    <li><a href="settings.html" class="slide-item"> Settings</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Email</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="email-compose.html">Email Compose</a></li>
                                            <li><a class="sub-slide-item" href="email-inbox.html">Email Inbox</a></li>
                                            <li><a class="sub-slide-item" href="email-read.html">Email Read</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Pricing</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="pricing.html">Pricing 01</a></li>
                                            <li><a class="sub-slide-item" href="pricing-2.html">Pricing 02</a></li>
                                            <li><a class="sub-slide-item" href="pricing-3.html">Pricing 03</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Invoice</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="invoice-list.html">Invoice list</a></li>
                                            <li><a class="sub-slide-item" href="invoice-1.html">Invoice 01</a></li>
                                            <li><a class="sub-slide-item" href="invoice-2.html">Invoice 02</a></li>
                                            <li><a class="sub-slide-item" href="invoice-3.html">Invoice 03</a></li>
                                            <li><a class="sub-slide-item" href="invoice-add.html">Add Invoice</a></li>
                                            <li><a class="sub-slide-item" href="invoice-edit.html">Edit Invoice</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-</span><i class=" sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="#">Blog 01</a></li>
                                            <li><a class="sub-slide-item" href="#">Blog 02</a></li>
                                            <li><a class="sub-slide-item" href="#">Blog 03</a></li>
                                            <li><a class="sub-slide-item" href="#">Blog Styles</a></li>
                                            <li><a class="sub-slide-item" href="#">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">E-commerce</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="shop.html">Products</a></li>
                                            <li><a class="sub-slide-item" href="shop-des.html">Product Details</a></li>
                                            <li><a class="sub-slide-item" href="cart.html">Shopping Cart</a></li>
                                            <li><a class="sub-slide-item" href="checkout.html">Checkout</a></li>
                                            <li><a class="sub-slide-item" href="wishlist.html">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                                    <li><a href="faq.html" class="slide-item"> FAQS</a></li>
                                    <li><a href="terms.html" class="slide-item"> Terms</a></li>
                                    <li><a href="empty.html" class="slide-item"> Empty Page</a></li>
                                    <li><a href="switcher.html" class="slide-item"> Switcher</a></li>
                                    <li><a href="search.html" class="slide-item"> Search</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon">
                                        <line x1="4" y1="21" x2="4" y2="14"></line>
                                        <line x1="4" y1="10" x2="4" y2="3"></line>
                                        <line x1="12" y1="21" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12" y2="3"></line>
                                        <line x1="20" y1="21" x2="20" y2="16"></line>
                                        <line x1="20" y1="12" x2="20" y2="3"></line>
                                        <line x1="1" y1="14" x2="7" y2="14"></line>
                                        <line x1="9" y1="8" x2="15" y2="8"></line>
                                        <line x1="17" y1="16" x2="23" y2="16"></line>
                                    </svg>
                                    <span class="side-menu__label">Submenus</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)"></a>Submenus</li>
                                    <li><a href="javascript:void(0)" class="slide-item">Level-1</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Level-2.1</a></li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Level-2.2</a></li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Level-2.3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    <span class="side-menu__label">Account</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Account</a>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Login</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="login-1.html">Login 01</a></li>
                                            <li><a class="sub-slide-item" href="login-2.html">Login 02</a></li>
                                            <li><a class="sub-slide-item" href="login-3.html">Login 03</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Register</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="register-1.html">Register 01</a></li>
                                            <li><a class="sub-slide-item" href="register-2.html">Register 02</a></li>
                                            <li><a class="sub-slide-item" href="register-3.html">Register 03</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Forget Password</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="forgot-password-1.html">Forgot Password 01</a></li>
                                            <li><a class="sub-slide-item" href="forgot-password-2.html">Forgot Password 02</a></li>
                                            <li><a class="sub-slide-item" href="forgot-password-3.html">Forgot Password 03</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Reset Password</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="reset-password-1.html">Reset Password 01</a></li>
                                            <li><a class="sub-slide-item" href="reset-password-2.html">Reset Password 02</a></li>
                                            <li><a class="sub-slide-item" href="reset-password-3.html">Reset Password 03</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Lock Screen</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="lockscreen-1.html">Lock Screen 01</a></li>
                                            <li><a class="sub-slide-item" href="lockscreen-2.html">Lock Screen 02</a></li>
                                            <li><a class="sub-slide-item" href="lockscreen-3.html">Lock Screen 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="construction.html" class="slide-item"> Under Construction</a></li>
                                    <li><a href="coming.html" class="slide-item"> Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="side-menu__icon">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="12"></line>
                                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                    </svg>
                                    <span class="side-menu__label">Error Pages</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Error Pages</a>
                                    </li>
                                    <li><a href="400.html" class="slide-item"> 400</a></li>
                                    <li><a href="401.html" class="slide-item"> 401</a></li>
                                    <li><a href="403.html" class="slide-item"> 403</a></li>
                                    <li><a href="404.html" class="slide-item"> 404</a></li>
                                    <li><a href="500.html" class="slide-item"> 500</a></li>
                                    <li><a href="503.html" class="slide-item"> 503</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                        <rect x="9" y="9" width="6" height="6"></rect>
                                        <line x1="9" y1="1" x2="9" y2="4"></line>
                                        <line x1="15" y1="1" x2="15" y2="4"></line>
                                        <line x1="9" y1="20" x2="9" y2="23"></line>
                                        <line x1="15" y1="20" x2="15" y2="23"></line>
                                        <line x1="20" y1="9" x2="23" y2="9"></line>
                                        <line x1="20" y1="14" x2="23" y2="14"></line>
                                        <line x1="1" y1="9" x2="4" y2="9"></line>
                                        <line x1="1" y1="14" x2="4" y2="14"></line>
                                    </svg>
                                    <span class="side-menu__label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1">
                                        <a href="javascript:void(0)">Utilities</a>
                                    </li>
                                    <li><a href="element-colors.html" class="slide-item"> Colors</a></li>
                                    <li><a href="element-flex.html" class="slide-item"> Flex Items</a></li>
                                    <li><a href="element-height.html" class="slide-item"> Height</a></li>
                                    <li><a href="elements-border.html" class="slide-item"> Border</a></li>
                                    <li><a href="elements-display.html" class="slide-item"> Display</a></li>
                                    <li><a href="elements-margin.html" class="slide-item"> Margin</a></li>
                                    <li><a href="elements-paddning.html" class="slide-item"> Padding</a></li>
                                    <li><a href="element-typography.html" class="slide-item"> Typography</a></li>
                                    <li><a href="element-width.html" class="slide-item"> Width</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="app-sidebar-help">
                            <div class="dropdown text-center">
                                <div class="help d-flex">
                                    <a href="javascript:void(0)" class="nav-link p-0 help-dropdown" data-bs-toggle="dropdown">
                                        <span class="font-weight-bold">Help Info</span> <i class="fa fa-angle-down ms-2"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-4">
                                        <div class="sidebar-dropdown-divider pb-3">
                                            <h4 class="font-weight-bold">Help</h4>
                                            <a class="d-block" href="javascript:void(0)">Knowledge base</a>
                                            <a class="d-block" href="javascript:void(0)">Contact@info.com</a>
                                            <a class="d-block" href="javascript:void(0)">88 8888 8888</a>
                                        </div>
                                        <div class="sidebar-dropdown-divider pb-3 pt-3 mb-3">
                                            <p class="mb-1">Your Fax Number</p>
                                            <a class="font-weight-bold" href="javascript:void(0)">88 8888 8888</a>
                                        </div>
                                        <a href="login-1.html">Logout</a>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="nav-link icon p-0" href="javascript:void(0)">
                                            <svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                <path opacity=".3" d="M12 6.5c-2.49 0-4 2.02-4 4.5v6h8v-6c0-2.48-1.51-4.5-4-4.5z"></path>
                                                <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-11c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2v-5zm-2 6H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2a8.445 8.445 0 013.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43a8.495 8.495 0 013.54 6.42z"></path>
                                            </svg>
                                            <span class="pulse "></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </aside>
            </div>


            <!-- main-sidebar -->

            <!-- Content wrapper -->

            @yield('content')

           

                
            
            <!-- app-content end-->
            <!-- end Content wrapper -->
        </div>



        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2022 <a href="javascript:void(0);" class="text-primary">Dashtic</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->

    </div>

    <!-- Back to top -->
    <a href="#top" id="back-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z" />
        </svg>
    </a>

    <!-- Jquery js-->
    <script src="{{asset('asset_dashboard/assets/js/vendors/jquery.min.js')}}"></script>

    <!-- Bootstrap5 js-->
    <script src="{{asset('asset_dashboard/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!--Othercharts js-->
    <script src="{{asset('asset_dashboard/assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

    <!-- Circle-progress js-->
    <script src="{{asset('asset_dashboard/assets/js/vendors/circle-progress.min.js')}}"></script>

    <!-- Jquery-rating js-->
    <script src="{{asset('asset_dashboard/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

    <!-- P-scroll js-->
    <script src="{{asset('asset_dashboard/assets/plugins/p-scrollbar/p-scrollbar.js')}}"></script>

    <!--Sidemenu js-->
    <script src="{{asset('asset_dashboard/assets/plugins/sidemenu/sidemenu.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{asset('asset_dashboard/assets/js/sticky.js')}}"></script>

    <!-- ECharts js -->
    <script src="{{asset('asset_dashboard/assets/plugins/echarts/echarts.js')}}"></script>

    <!-- Peitychart js-->
    <script src="{{asset('asset_dashboard/assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- Apexchart js-->
    <script src="{{asset('asset_dashboard/assets/js/apexcharts.js')}}"></script>

    <!--Moment js-->
    <script src="{{asset('asset_dashboard/assets/plugins/moment/moment.js')}}"></script>

    <!-- Daterangepicker js-->
    <script src="{{asset('asset_dashboard/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/js/daterange.js')}}"></script>

    <!---jvectormap js-->
    <script src="{{asset('asset_dashboard/assets/plugins/jvectormap/jquery.vmap.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/jvectormap/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/jvectormap/jquery.vmap.sampledata.js')}}"></script>

    <!-- Data tables js-->
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/js/datatables.js')}}"></script>

    <!-- Select2 js -->
    <script src="{{asset('asset_dashboard/assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/js/select2.js')}}"></script>

    <!--Counters -->
    <script src="{{asset('asset_dashboard/assets/plugins/counters/counterup.min.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/counters/waypoints.min.js')}}"></script>

    <!--Chart js -->
    <script src="{{asset('asset_dashboard/assets/plugins/chart/chart.bundle.js')}}"></script>
    <script src="{{asset('asset_dashboard/assets/plugins/chart/utils.js')}}"></script>

    <!-- Index js-->
    <script src="{{asset('asset_dashboard/assets/js/index1.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('asset_dashboard/assets/js/themeColors.js')}}"></script>

    <!-- Switcher-Styles js -->
    <script src="{{asset('asset_dashboard/assets/js/switcher-styles.js')}}"></script>

    <!-- Custom js-->
    <script src="{{asset('asset_dashboard/assets/js/custom.js')}}"></script>

</body>

</html>