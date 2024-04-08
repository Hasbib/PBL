<template>
	<div class="wrapper" style="margin-top: 20px;">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid" style="width: 1000px;">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Buat Akun</h3>
									</div>
									<br><br>
									<div class="form-body">
                                        <form class="row g-3" @submit.prevent="registerUser">
                                            <div class="col-12">
                                                <label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
                                                <input v-model="name" type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama lengkap">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputUsername" class="form-label">Username</label>
                                                <input v-model="username" type="text" class="form-control" id="inputUsername" placeholder="Username">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email</label>
                                                <input v-model="email" type="email" class="form-control" id="inputEmailAddress" placeholder="Email">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input v-model="password" type="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Masukkan Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
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
                                                    <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Registrasi</button>
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
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            username: '',
            email: '',
            password: '',
        };
    },
    methods: {
        async registerUser() {
            try {
                const response = await axios.post('http://localhost:8000/api/registrasi', {
                    name: this.name,
                    username: this.username,
                    email: this.email,
                    password: this.password,
                });

                console.log(response.data);

              // Redirect to login page after successful registration
            window.location.href = '/login'; // Navigasi ke halaman /login

            } catch (error) {
                console.error(error.response.data);
            }
        },
        cancelLogin() {
            this.$router.go(-1);
        },
    },
    head() {
        return {
            script: [
                { src: 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js' },
                { src: 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js' },
            ],
        };
    },
};
</script>
