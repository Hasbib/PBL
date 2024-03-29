<template>
    <!--=================================
       MAIN MENU START
    ==================================-->
   <nav class="navbar navbar-expand-lg main_menu">
       <div class="container">
           <a class="navbar-brand" href="#">
               <img src="../../../../public/bootstrap/images/logo.png" alt="Olinas" class="img-fluid w-100">
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <i class="far fa-bars menu_icon"></i>
               <i class="far fa-times close_icon"></i>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                       <a class="nav-link active" href="#">Beranda</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#tentang-section">Tentang</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#kategori-section">Kategori</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#timeline-section">Timeline</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#berita-section">Berita</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#sponsor-section">Sponsor</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/kontak">Kontak</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link common_btn" href="/login">Login</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
   <!--=================================
       MAIN MENU END
   ==================================-->


    <!--=================================
        ERROR PAGE START
    ==================================-->
    <section class="tf__error_page mt_195 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__error_text">
                        <div class="img">
                            <img src="../../../../public/bootstrap/images/error_img.png" alt="error" class="img-fluid w-100">
                        </div>
                        <h4>Page not found</h4>
                        <p>Halaman Belum tersedia</p>
                        <a class="common_btn" href="/">go to home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        ERROR PAGE END
    ==================================-->

</template>
