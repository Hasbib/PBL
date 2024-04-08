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
                        <li style="padding-left: 35px;"> <a href="/administrator">Administrator</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/tim">Tim</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/sponsor">Sponsor</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/berita">Berita</a>
                        </li>
                        <li style="padding-left: 35px;"> <a href="/setting">Setting</a>
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
                        <button class="btn btn-success"  style="margin-top: -7px;" onclick="window.location.href='/tambahlomba'">Tambah Lomba</button>
                        <hr style="margin-top: 10px;" />
                        <table id="example" class="table mt-3  table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Lomba</th>
                                    <th>Deskripsi</th>
                                    <th>Nama PJ</th>
                                    <th>Kontak PJ</th>  
                                    <th style="width: 180px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lomba Desain</td>
                                    <td>Desain adalah</td>
                                    <td>Leocris</td>
                                    <td>29 Maret 2024</td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-secondary" onclick="window.location.href='/detaillomba'"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-primary" onclick="window.location.href='/editlomba'"><i class="bi bi-pencil-square"></i></button>    
                                        <button class="btn btn-danger" ><i class="bi bi-trash"></i></button>                              
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
    
<script>
$(document).ready(function() {
    $('#example').DataTable();
  } );
</script>