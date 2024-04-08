<template>
    <div class="wrapper">
        <!--start header -->
        <header>
            <div class="navbar-tambah">
                <div class="navbar-left">
                    <img src="../../../../../public/bootstrap/images/logo.png" alt="Logo">
                </div>
                <div class="navbar-right" style="margin-left: auto;">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#">
						<div class="user-info ps-3">
							<p class="user-name mb-0">Habib</p>						
						</div>
                        <img src="../../../../../public/bootstrap/images/profil.png" class="user-img" alt="user avatar" style="width: 38px; height: 38px;">
					</a>
                </div>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper-tambah">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">Edit Lomba</h4>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6"  style="margin-bottom: 10px;">
                                <label style="margin-bottom: 5px; color: black;"><b>Nama Lomba</b></label>
                                <input type="email" class="form-control" value="Lomba Desain">
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Nama PJ</b></label>
                                <input type="email" class="form-control" value="Agung">
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Deskripsi</b></label>
                                <div class="col-12">
                                    <textarea class="form-control" id="inputProductDescription" rows="7" value="Lomba Desain adalah ajang kompetitif di mana beberapa tim bersaing dalam merancang dan menciptakan karya visual yang unik dan inovatif, sesuai dengan tema yang ditentukan." style="margin-bottom: 10px;" ></textarea>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: 5px; color: black;"><b>Kontak PJ</b></label>
                                <input type="email" class="form-control" value="085000000000" style="margin-bottom: 8px;">
     
                                <div>
                                    <label style="margin-bottom: 5px; color: black;"><b>Tempat</b></label>
                                    <input type="email" class="form-control">
                                </div>
                                <div style="margin-top: 10px;">
                                    <label style="margin-bottom: 5px; color: black;"><b>Biaya Pendaftaran</b></label>
                                    <input type="email" class="form-control" value="20.000" style="margin-bottom: 8px;">
                                </div>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <button class="btn btn-primary" style="width: 200px; margin-right: auto; margin-top: 50px; margin-bottom: 30px" onclick="window.location.href='/lomba'">Edit</button>
                            <button class="btn btn-danger" style="width: 200px; margin-left: auto; margin-top: 50px; margin-bottom: 30px" onclick="window.location.href='/lomba'">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
</template>
    
   >>