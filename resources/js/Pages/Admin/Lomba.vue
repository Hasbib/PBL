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
                        <a href="/index2">
                            <div class="parent-icon"><i class='bx bx-home-circle'></i>
                            </div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="fadeIn animated bx bx-plus-circle"></i>
                            </div>
                            <div class="menu-title">Event</div>
                        </a>
                        <ul>
                            <li style="padding-left: 35px;"> <a href="/lomba">Lomba</a>
                            </li>
                            <li style="padding-left: 35px;"> <a href="/proses">Administrator</a>
                            </li>
                            <li style="padding-left: 35px;"> <a href="/proses">Setting</a>
                            </li>
                            <li style="padding-left: 35px;"> <a href="/proses">Tim</a>
                            </li>
                            <li style="padding-left: 35px;"> <a href="/proses">Sponsor</a>
                            </li>
                            <li style="padding-left: 35px;"> <a href="/proses">Berita</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/partisipan">
                            <div class="parent-icon"><i class="fadeIn animated bx bx-street-view"></i>
                            </div>
                            <div class="menu-title">Partisipan</div>
                        </a>
                    </li>
                    <li>
                        <a href="/pesan">
                            <div class="parent-icon"><i class="fadeIn animated bx bx-comment-detail"></i>
                            </div>
                            <div class="menu-title">Pesan <span class="alert-count">1</span></div>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <div class="parent-icon"><i class="fadeIn animated bx bx-log-out"></i>
                            </div>
                            <div class="menu-title">Logout</div>
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
                            <h4 class="mb-0" style="margin-top: -5px;">Tabel Lomba</h4>
                            <hr style="margin-top: 10px;" />		
                            <button class="btn btn-success"  style="margin-top: -7px;" onclick="window.location.href='/proses'">Tambah Lomba</button>
                            <hr style="margin-top: 10px;" />
                            <div style="display: flex; align-items: center; margin-top: -15px;">
                                <label  style="margin-right: 5px;">Tampilkan</label>
                                    <select id="theme_selector">
                                        <option value="15" selected>15</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                    </select>
                                <label  style="margin-left: 5px;"> entri </label>
                                <br><br><br>
                                <div style="flex-grow: 1; text-align: right;">
                                    <label style="margin: 10px;">Cari </label>
                                    <label><input type="text" class="form-control" style="width: 250px;">
                                        <span class="product-show"><i></i></span>
                                    </label> 
                                </div>
                            </div>
                                <table class="table table-hover mt-3  table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Lomba</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Kontak PJ</th>  
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Lomba AR/VR</td>
                                            <td>Desain adalah</td>
                                            <td>Lomba Desain</td>
                                            <td>29 Maret 2024</td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-secondary" onclick="window.location.href='/proses'"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-primary" onclick="window.location.href='/proses'"><i class="bi bi-pencil-square"></i></button>    
                                                <button class="btn btn-danger" ><i class="bi bi-trash"></i></button>                              
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                         
                                <div class="row">
                                <div class="col-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="far fa-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="far fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end page wrapper -->
        </div>
    </template>
    
   