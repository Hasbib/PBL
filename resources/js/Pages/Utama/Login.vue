<template>
    <div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Login</h3>
										<br><br>
									</div>
									<div class="form-body">
                                        <form class="row g-3" @submit.prevent="loginUser">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email</label>
                                                <input v-model="email" type="email" class="form-control" id="inputEmailAddress" placeholder="Email">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input v-model="password" type="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Enter Password">
                                                    <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" v-model="rememberMe">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Ingatkan saya</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end">
                                                <a href="/lupapassword">Lupa Password ?</a>
                                            </div>
                                            <!-- Captcha input and display -->
                                            <div class="col-12">
												<label style="margin-right:5px ;">Hasil Dari</label>
                                                <label for="captcha" class="form-label">{{ captcha.question }}</label>
                                                <div class="input-group">
                                                    <input v-model="captchaInput" type="text" class="form-control" id="captcha" placeholder="Enter Captcha">
                                                </div>
                                            </div>
                                            <!-- End of captcha -->
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Login</button>
                                                </div>
                                                <div class="login-separater text-center mb-4">
                                                    <span>ATAU MASUK DENGAN EMAIL</span>
                                                    <hr/>
                                                </div>
                                                <div class="d-grid">
                                                    <a class="btn shadow-sm btn-white" href="javascript:;">
                                                        <span class="d-flex justify-content-center align-items-center">
                                                            <img class="me-2" src="../../../../public/assets/images/icons/search.svg" width="16" alt="Image Description">
                                                            <span>Masuk dengan Google</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="text-center">
                                                    <br>
                                                    <p>Belum punya akun? <a href="/daftar">Daftar disini</a>
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
            email: '',
            password: '',
            rememberMe: true,
            captcha: {},
            captchaInput: ''
        };
    },
    methods: {
        async loginUser() {
            try {
                // Check if captcha input matches the answer
                if (parseInt(this.captchaInput) !== this.captcha.answer) {
                    alert("Hasil penjumlahan yang Anda masukkan salah!");
                    return;
                }

                // Assuming API call for login
                const response = await axios.post('http://localhost:8000/api/login', {
                    email: this.email,
                    password: this.password
                });

                // Assuming API returns role information
                const userRole = response.data.role;

                // Redirect user based on role
                switch (userRole) {
                    case 'admin':
                        window.location.href = '/index2'; // Redirect to admin dashboard
                        break;
                    case 'petugas':
                        window.location.href = '/dashboardpetugas'; // Redirect to petugas dashboard
                        break;
                    case 'juri':
                        window.location.href = '/dashboardjuri'; // Redirect to juri dashboard
                        break;
                    default:
                        window.location.href = '/overviewpeserta'; // Redirect to user dashboard or homepage
                        break;
                }

            } catch (error) {
                console.error(error.response.data);
            }
        },
        async fetchCaptcha() {
            try {
                // Generate random numbers for the captcha question
                const num1 = Math.floor(Math.random() * 10);
                const num2 = Math.floor(Math.random() * 10);
                const question = `${num1} + ${num2}`;
                
                // Calculate the answer
                const answer = num1 + num2;

                // Set the captcha data
                this.captcha = {
                    question: question,
                    answer: answer
                };
            } catch (error) {
                console.error(error.response.data);
            }
        }
    },
    mounted() {
        this.fetchCaptcha();
    }
};
</script>
