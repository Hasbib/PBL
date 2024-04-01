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
                    <a href="/dashboardjuri">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="/proses">
                        <div class="parent-icon"><i class=""></i>
                        </div>
                        <div class="menu-title" style="padding-left: 25px;">Nilai</div>
                    </a>
                </li>
                <li>
                    <a href="/proses">
                        <div class="parent-icon"><i class=""></i>
                        </div>
                        <div class="menu-title" style="padding-left: 25px;">Karya</div>
                    </a>
                </li>
                
                <li>
                    <a href="/">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-log-out"></i>
                        </div>
                        <div class="menu-title">Keluar</div>
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
                      <p class="user-name mb-0">Juri</p>						
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
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-info" style="width: 310px;">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0"><b>1265 Partisipan</b></h5>
                                        <br>
                                        <p class="mb-0 font-13">1250 Verified</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-success" style="width: 310px; margin-left: 79px;">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0"><b>987 Tim</b></h5>
                                        <br>
                                        <p class="mb-0 font-13">Semua Lomba</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 border-start border-0 border-3 border-danger" style="width: 310px; margin-left: 160px;">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0"><b>987 Tim</b></h5>
                                        <br>
                                        <p class="mb-0 font-13">-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <!--end row-->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center;"><b>Jumlah Pengunjung Setiap Bulan</b></h3>
                        <br><br>
                        <div id="bi-weekly-visit" class="chart-lg"></div>
                    </div>
                </div>
            </div>    
        </div>
    </div>        
</template>
    

<script>
document.addEventListener("DOMContentLoaded", function () {
  window.ApexCharts && (new ApexCharts(document.getElementById('bi-weekly-visit'), {
    chart: {
      type: "bar",
      fontFamily: 'inherit',
      height: 240,
      parentHeightOffset: 0,
      toolbar: {
        show: false,
      },
      animations: {
        enabled: false
      },
      stacked: true,
    },
    plotOptions: {
      bar: {
        columnWidth: '60%',
      }
    },
    dataLabels: {
      enabled: false,
    },
    fill: {
      opacity: 1,
    },
    series: [{
      name: "Jumlah Kunjungan",
      data: [500,200,820,500,1000,400,500,223,125,89,260,140]            }],
    tooltip: {
      theme: 'dark'
    },
    grid: {
      padding: {
        top: -20,
        right: 0,
        left: -4,
        bottom: -4
      },
      strokeDashArray: 4,
    },
    xaxis: {
      labels: {
        padding: 0,
      },
      tooltip: {
        enabled: false
      },
      axisBorder: {
        show: false,
      },
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    },
    yaxis: {
      labels: {
        padding: 4
      },
    },
  })).render();
});
</script>
   