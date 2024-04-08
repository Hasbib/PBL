<template>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="../../../../public/bootstrap/images/logocb.png" class="logo-icon" alt="logo icon">
                </div>
                <div class="toggle-icon ms-auto"><i class="fadeIn animated bx bx-menu"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/overviewpeserta">
                        <div class="parent-icon"><i class='bx bx-category'></i>
                        </div>
                        <div class="menu-title">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="/daftarlomba">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-street-view"></i>
                        </div>
                        <div class="menu-title">Daftar Lomba</div>
                    </a>
                </li>
                <li>
                    <a href="/profilpeserta">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">Profil</div>
                    </a>
                </li>
                <li>
                    <a href="/notifikasipeserta">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">Notifikasi<span class="alert-count">1</span></div>
                    </a>
                </li>
                <li>
                    <a href="/reportpeserta">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-comment-detail"></i>
                        </div>
                        <div class="menu-title">Report <span class="alert-count">1</span></div>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-log-out"></i>
                        </div>
                        <div class="menu-title">Keluar</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-plus-circle"></i>
                        </div>
                        <div class="menu-title">SEMENTARA</div>
                    </a>
                    <ul>
                        <li style="padding-left: 35px;"> <a href="/dashboardjuri">JURI</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/dashboardpetugas">PETUGAS</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/overviewpeserta">PESERTA</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/index2">ADMIN</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Habib</p>						
                            </div>
                            <div class="parent-icon" style="font-size: 30px; margin-left: 10px; "><i class="bx bxs-user me-1"></i>
                            </div>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-notifications-list">
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">	
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-message-list">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>		
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item">
                                </li>                             
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">Daftar lomba</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3"  style="margin-bottom: 10px;">
                                <label style="margin-bottom: 5px; color: black;"><b>PARTISIPAN</b></label>
                                <div style="margin-bottom: 20px;">Lomba Desain</div>
                            </div>
                            <div class="col-md-3">
                                <label style="margin-bottom: 5px; color: black;"><b>NAMA TIM</b></label>
                                <div style="margin-bottom: 20px;">Start Green</div>
                            </div>
                            <div class="col-md-2">
                                <label style="margin-bottom: 5px; color: black;"><b>LOMBA</b></label>
                                <div style="margin-bottom: 20px;">Lomba Desain</div>
                            </div>
                            <div class="col-md-2">
                                <label style="margin-bottom: 5px; color: black;"><b>EMAIL</b></label>
                                <div style="margin-bottom: 20px;">goat@gmail.com</div>
                            </div>
                            <div class="col-md-2">
                                <label style="margin-bottom: 5px; color: black;"><b>NO WHATSAPP</b></label>
                                <div style="margin-bottom: 20px;">0850000000s</div>
                            </div>
                            <div class="col-md-3">
                                <label style="margin-bottom: 5px; color: black;"><b>INSTASNSI</b></label>
                                <div style="margin-bottom: 20px;">Universitas</div>
                            </div>
                            <div class="col-md-3">
                                <label style="margin-bottom: 5px; color: black;"><b>STATUS</b></label>
                                <div style="margin-bottom: 20px;">Universitas</div>
                            </div>
                            <div class="col-md-3">
                                <label style="margin-bottom: 5px; color: black;"><b>PEMBAYARAN</b></label>
                                <div style="margin-bottom: 20px;">Universitas</div>
                            </div>
                        </div>
                        <div class="card" style="height: 300px;"></div>
                    </div>
                </div>   
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
    