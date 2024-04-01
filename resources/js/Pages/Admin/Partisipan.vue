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
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0" style="margin-top: -5px;">Tabel Partisipan</h4>
                        <hr style="margin-top: 10px;" />		
                        <label style="margin-right: 10px;">Filter by Status</label> 
						<select class="form-select2">
							<option selected>Semua</option>
							<option>Verified</option>
                            <option>Unverified</option>
						</select>
                        <button class="btn btn-primary" style="margin-top: -7px; float: right;">Export Excel</button>
                        <br><br>
                        <table id="example" class="table table-bordered" style="width:100%">
							<thead class="table-dark">
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>Username</th>
                                    <th>Instansi</th>
									<th>Email</th>
                                    <th>Status</th>
									<th>Tanggal</th>
								</tr>
							</thead>
                            <tbody>
								<tr>
									<td>1</td>
									<td>Lionel Andres </td>
									<td>leon</td>
                                    <td>Universitas</td>
									<td>goat@gmail.com</td>
                                    <td>Verified</td>
									<td>January 26, 2024</td>
								</tr>
                                <tr>
									<td>2</td>
									<td>Cristiano Ikhsan </td>
									<td>cris</td>
                                    <td>Universitas</td>
									<td>goat@gmail.com</td>
                                    <td>Unverified</td>
									<td>January 26, 2024</td>
								</tr>
                                <tr>
                                    <td>3</td>
                                    <td>Agus Setiawan</td>
                                    <td>agus123</td>
                                    <td>Universitas</td>
                                    <td>agus.setiawan@example.com</td>
                                    <td>Verified</td>
                                    <td>February 10, 2024</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Siti Rahayu</td>
                                    <td>siti12</td>
                                    <td>Universitas</td>
                                    <td>siti.rahayu@example.com</td>
                                    <td>Unverified</td>
                                    <td>February 15, 2024</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Joko Susilo</td>
                                    <td>joko_sus</td>
                                    <td>Universitas</td>
                                    <td>joko.susilo@example.com</td>
                                    <td>Verified</td>
                                    <td>February 20, 2024</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Rina Fitriani</td>
                                    <td>rina_fi</td>
                                    <td>Universitas</td>
                                    <td>rina.fitriani@example.com</td>
                                    <td>Unverified</td>
                                    <td>February 25, 2024</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Adi Pratama</td>
                                    <td>adi11</td>
                                    <td>Universitas</td>
                                    <td>adi.pratama@example.com</td>
                                    <td>Verified</td>
                                    <td>March 5, 2024</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Dewi Indah</td>
                                    <td>dewi_22</td>
                                    <td>Universitas</td>
                                    <td>dewi.indah@example.com</td>
                                    <td>Unverified</td>
                                    <td>March 10, 2024</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Budi Santoso</td>
                                    <td>budi_s</td>
                                    <td>Universitas</td>
                                    <td>budi.santoso@example.com</td>
                                    <td>Verified</td>
                                    <td>March 15, 2024</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Putri Wulandari</td>
                                    <td>putri_w</td>
                                    <td>Universitas Indonesia</td>
                                    <td>putri.wulandari@example.com</td>
                                    <td>Unverified</td>
                                    <td>March 20, 2024</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Rizki Pratama</td>
                                    <td>rizki_p</td>
                                    <td>Universitas</td>
                                    <td>rizki.pratama@example.com</td>
                                    <td>Verified</td>
                                    <td>March 25, 2024</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Yuli Susanti</td>
                                    <td>yuli_s</td>
                                    <td>Universitas</td>
                                    <td>yuli.susanti@example.com</td>
                                    <td>Unverified</td>
                                    <td>March 30, 2024</td>
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