<template>
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
                    <a href="/proses">
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
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
				<div class="top-menu ms-auto">
					<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#">
						<div class="user-info ps-3">
							<p class="user-name mb-0">Habib</p>						
						</div>
                        <img src="../../../../public/bootstrap/images/profil.png" class="user-img" alt="user avatar" style="width: 38px; height: 38px;">
					</a>
				</div>
                </nav>    
                    <div class="header-notifications-list">
                    </div>
                    <div class="header-message-list">                                                                                
                </div>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="card" style="height: 300px;">
                    <div class="card-body">
                        <button class="btn btn-danger" style="width: 300px;">TIDAK LOLOS</button>
                        <br><br>
                        <div class="row">
                            <div class="col-md-7" style="text-align: left;">
                                <h5 style="color: black; margin-bottom: 20px;"><b>Poster Keamanan Data</b></h5>
                                <div style="margin-bottom: 20px;">Olinas Periode 2024</div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end align-items-center">
                                <button class="btn btn-primary" style="width: 150px;">Detail</button>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
    