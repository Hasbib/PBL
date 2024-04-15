import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})

// capcha

const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');

const app = express();
app.use(bodyParser.json());

// Generate captcha question and answer
app.get('/api/captcha', (req, res) => {
    const num1 = Math.floor(Math.random() * 10); // Generate random number 1
    const num2 = Math.floor(Math.random() * 10); // Generate random number 2
    const question = `${num1} + ${num2}`;
    const answer = num1 + num2;

    res.json({ question, answer });
});




// Endpoint untuk mengirim email pengaturan ulang kata sandi
app.post('/api/lupapassword', (req, res) => {
  const { email } = req.body;

  // Lakukan validasi email disini jika diperlukan

  // Konfigurasi transporter untuk mengirim email menggunakan nodemailer
  const transporter = nodemailer.createTransport({
      service: 'gmail',
      auth: {
          user: 'iqbalfarhanrasyid@gmail.com', // Ganti dengan email Anda
          pass: 'fkbhyxoqotpuaawg' // Ganti dengan password email Anda
      }
  });

  // Buat pesan email
  const mailOptions = {
      from: 'iqbalfarhanrasyid@gmail.com', // Ganti dengan email Anda
      to: email,
      subject: 'Reset Password',
      text: 'Silakan klik tautan berikut untuk mengatur ulang kata sandi Anda: http://127.0.0.1:8000/lupapassword'
  };

  // Kirim email
  transporter.sendMail(mailOptions, (error, info) => {
      if (error) {
          console.error(error);
          res.status(500).json({ message: 'Gagal mengirim email' });
      } else {
          console.log('Email sent: ' + info.response);
          res.json({ message: 'Email berhasil dikirim' });
      }
  });
});





// Other routes and middlewares

const PORT = process.env.PORT || 8000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});




