<template>
    <!--=========================
    LOGIN START
==========================-->
    <section style="background: url(../assets/images/login-images/bg-forgot-password.jpg);">
        <div class="wrapper">
            <div class="authentication-forgot d-flex align-items-center justify-content-center">
                <div class="card forgot-box">
                    <div class="card-body">
                        <div class="p-4 rounded  border">
                            <div class="text-center">
                                <img src="../../../../public/assets/images/icons/forgot-2.png" width="120" alt="" />
                            </div>
                            <h4 class="mt-5 font-weight-bold">Tidak ingat kata sandi?</h4>
                            <p class="text-muted">Masukkan ID email Anda yang terdaftar untuk mengatur ulang kata sandi</p>
                            <div class="my-4">
                                <label class="form-label">Email</label>
                                <input v-model="email" type="email" class="form-control form-control-lg" placeholder="Masukkan Email" />
                            </div>
                            <div class="d-grid gap-2">
                                <button type="button" @click="resetPassword" class="btn btn-primary btn-lg">Kirim</button>
                                <a href="/login" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Kembali ke halaman login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end wrapper -->
    </section>
    <!--=========================
    LOGIN END
==========================-->
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            email: ''
        };
    },
    methods: {
        async resetPassword() {
            try {
                const response = await axios.post('http://localhost:8000/api/lupapassword', {
                    email: this.email
                });
                alert('Email pengaturan ulang kata sandi telah berhasil dikirim.');
                console.log(response.data);
                // Redirect to login page
                window.location.href = '/login';
            } catch (error) {
                console.error(error.response.data);
                alert('Gagal mengirim email pengaturan ulang kata sandi.');
            }
        }
    }
};
</script>
