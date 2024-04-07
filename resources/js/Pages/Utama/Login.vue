<template>
    <section style="background: url(../assets/images/login-images/bg-forgot-password.jpg);">
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
                                            <br>
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
                                                <div class="d-grid">
                                                    <a class="btn shadow-sm btn-white" href="javascript:;">
                                                        <span>Capcha</span>
                                                    </a>
                                                </div>
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
    </section>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            email: '',
            password: '',
            rememberMe: true
        };
    },
    methods: {
        async loginUser() {
            try {
                const response = await axios.post('http://localhost:8000/api/login', {
                    email: this.email,
                    password: this.password
                });

                const userRole = response.data.role; // Assuming API returns role information

                // Redirect user based on role
                switch (userRole) {
                    case 'admin':
                        window.location.href = '/index2'; // Redirect to admin dashboard
                        break;
                    case 'petugas':
                        window.location.href = '/petugas'; // Redirect to petugas dashboard
                        break;
                    case 'juri':
                        window.location.href = '/juri'; // Redirect to juri dashboard
                        break;
                    default:
                        window.location.href = '/Dasboardpeserta'; // Redirect to user dashboard or homepage
                        break;
                }

            } catch (error) {
                console.error(error.response.data);
            }
        }
    }
};
</script>
