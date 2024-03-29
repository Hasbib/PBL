<template>
<section style="background: url(../assets/images/login-images/bg-forgot-password.jpg);">
    <div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Buat Akun</h3>
									</div>
                                    <br><br>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-sm-6">
												<label for="inputNamaDepan" class="form-label">Nama Depan</label>
												<input type="email" class="form-control" id="inputNamaDepan" placeholder="Nama depan">
											</div>
											<div class="col-sm-6">
												<label for="inputNamaBelakang" class="form-label">Nama Belakang</label>
												<input type="email" class="form-control" id="inputNamaBelakang" placeholder="Nama belakang">
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control" id="inputEmailAddress" placeholder="Email">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Masukkan Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>	
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Saya membaca dan menyetujui Syarat & Ketentuan</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<a href="/index2" class="btn btn-primary"><i class='bx bx-user'></i>Daftar</a>
												</div>
                                                <div class="login-separater text-center mb-4"> <span>ATAU MASUK DENGAN EMAIL</span>
													<hr/>
												</div>
												<div class="d-grid">
													<a class="btn shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
														<img class="me-2" src="../../../../public/assets/images/icons/search.svg" width="16" alt="Image Description">
														<span>Masuk dengan Google</span>
														</span>
													</a>
												</div>
												<div class="text-center">
													<br>
													<p>Sudah memiliki akun? <a href="/login"> Masuk di sini</a>
													</p>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
</section>
</template>

<script>
export default {
    methods: {
        goToIndex2() {
            this.$router.push('/index2');
        }
    }
}
</script>