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
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0" style="margin-top: -5px;">Tabel Pesan</h4>
                        <hr style="margin-top: 10px;" />		
                        <label style="margin-right: 10px;">Filter by Status</label> 
						<select class="form-select2">
							<option selected>Semua</option>
							<option>Belum Dibaca</option>
                            <option>Sudah Dibaca</option>
						</select>
                        <br><br>  
                        <table id="example" class="table table-bordered" style="width:100%">
							<thead class="table-dark">
								<tr>
									<th>ID</th>
									<th>Nama</th>  
									<th>Email</th>
                                    <th style="width: 100px;" >No WhatsApp</th>
                                    <th style="width: 290px;">Pesan</th>
									<th style="border: none;">Status</th>
                                    <th style="border: none;"></th> 
								</tr>
							</thead>
                            <tbody>
								<tr>
									<td>1</td>
									<td>Lionel Andres </td>
									<td>goat@gmail.com</td>
                                    <td>08123456789</td>
                                    <td>Mohon ijin min, saya tidak bisa login akun min, mohon solusinya</td>
                                    <td style="border: none;"><label>Belum Baca</label></td>
                                    <td style="border: none;">
                                        <input type="checkbox">
                                    </td>
								</tr>
                                <tr>
									<td>2</td>
									<td>Cristiano Ikhsan </td>
									<td>goat@gmail.com</td>
                                    <td>08123456789</td>
                                    <td>Mohon ijin min, saya tidak bisa login akun min, mohon solusinya</td>
                                    <td style="border: none;"><label>Sudah Baca</label></td>
                                    <td style="border: none;">
                                        <input type="checkbox" checked>
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