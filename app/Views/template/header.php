<?php $session = session();?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mini Pharmacy</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url();?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="<?php echo site_url('/');?>" class="header-logo">
                    <img src="<?php echo base_url();?>/assets/images/login/logo4.png"
                        class="img-fluid rounded-normal light-logo" alt="logo">
                    <h5 class="logo-title light-logo ml-6">Mini Pharmacy</h5>
                </a>
                <div class="iq-menu-bt-sidebar ml-0">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">

                        <?php if($session->get('user_role')==1){?>
                        <li class="">
                            <a href="<?php echo site_url('/');?>" class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-house" viewBox="0 0 16 16">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                </svg>
                                <span class="ml-4">หน้าหลัก</span>
                            </a>
                        </li>
                        <?php } ?>

                        <?php if($session->get('user_role')==1){?>
                        <li class="">
                            <a href="<?php echo site_url('/users');?>" class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                                <span class="ml-4">การจัดการข้อมูลผู้ใช้</span>
                            </a>
                        </li>

                        <?php } ?>

                        <li class="">
                            <a href="<?php echo site_url('/pharmacies');?>" class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-capsule" viewBox="0 0 16 16">
                                    <path
                                        d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z" />
                                </svg>
                                <span class="ml-4">การจัดการข้อมูลยา</span>
                            </a>
                        </li>

                        <?php if($session->get('user_role')==1){?>
                        <li class=" ">
                            <a href="#basic_management" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-folder" viewBox="0 0 16 16">
                                    <path
                                        d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
                                </svg>

                                <span class="ml-4">การจัดการข้อมูลพื้นฐาน</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="basic_management" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                                <li class="">
                                    <a href="<?php echo base_url('pharmacy_type');?>">
                                        <i class="las la-minus"></i><span>ประเภทของยา</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?php echo base_url('recive_type');?>">
                                        <i class="las la-minus"></i><span>ประเภทการรับเงิน</span>
                                    </a>
                                </li>
                                <!-- <li class="">
                                          <a href="<?php echo base_url('user_role');?>">
                                              <i class="las la-minus"></i><span>ประเภทผู้ใช้</span>
                                          </a>
                                  </li> -->
                            </ul>
                        </li>
                        <?php } ?>



                        <li class="">
                            <a href="<?php echo site_url('/supplier');?>" class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-vcard" viewBox="0 0 16 16">
                                    <path
                                        d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                                    <path
                                        d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                                </svg>
                                <span class="ml-4">รายการสั่งซื้อ</span>
                            </a>
                        </li>

                        <?php if($session->get('user_role')==1){?>
                        <li class="">
                            <a href="<?php echo site_url('/lot');?>" class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-shop" viewBox="0 0 16 16">
                                    <path
                                        d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                </svg>
                                <span class="ml-4">คลังยา</span>
                            </a>
                        </li>
                        <?php } ?>


                        <li class=" ">
                            <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                                <span class="ml-4">รายการขาย</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>

                            <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                                <li class="">
                                    <a href="<?php echo base_url('sale_new');?>">
                                        <i class="las la-minus"></i><span>บันทึกการขายยา</span>
                                    </a>
                                </li>
                                <?php if($session->get('user_role')==1){?>
                                <li class="">
                                    <a href="<?php echo base_url('sale_all');?>">
                                        <i class="las la-minus"></i><span>รายการขายทั้งหมด</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="<?php echo base_url('sale_today');?>">
                                        <i class="las la-minus"></i><span>รายการขายวันนี้</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="<?php echo base_url('sale_week');?>">
                                        <i class="las la-minus"></i><span>รายการขายสัปดาห์นี้</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <li class="">
                                    <a href="<?php echo base_url('sale_test');?>">
                                        <i class="las la-minus"></i><span>การขายทดลอง</span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class=" ">
                            <a href="#report" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                    <path
                                        d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                                    <path
                                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                    <path
                                        d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                </svg>
                                <span class="ml-4">ออกรายงาน</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="report" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                            </ul>
                </nav>

                <div class="p-3"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="<?php echo base_url();?>/backend/index.html" class="header-logo">
                            <img src="<?php echo base_url();?>/assets/images/logo.png" class="img-fluid rounded-normal"
                                alt="logo">
                            <h5 class="logo-title ml-3">Mini Pharmacy</h5>

                        </a>
                    </div>
                    <div class="iq-search-bar device-search">
                        <!-- <form action="#" class="searchbox">
                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                          <input type="text" class="text search-input" placeholder="ค้นหา">
                      </form> -->
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">

                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 ">
                                            <div class="cust-title p-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Notifications</h5>
                                                    <a class="badge badge-primary badge-card" href="#">3</a>
                                                </div>
                                            </div>
                                            <div class="px-3 pt-0 pb-0 sub-card">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                src="<?php echo base_url();?>/assets/images/user/01.jpg"
                                                                alt="01">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Emma Watson</h6>
                                                                <small class="text-dark"><b>12 : 47 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                src="<?php echo base_url();?>/assets/images/user/02.jpg"
                                                                alt="02">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Ashlynn Franci</h6>
                                                                <small class="text-dark"><b>11 : 30 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                src="<?php echo base_url();?>/assets/images/user/03.jpg"
                                                                alt="03">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Kianna Carder</h6>
                                                                <small class="text-dark"><b>11 : 21 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                                role="button">
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </li>
                                <li class="nav-item nav-icon dropdown caption-content">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php 
                                      
                                      $name = $session->get('f_name')." ".$session->get('l_name'); 
                                      echo $name ?>
                                        <img src="<?php echo base_url();?>/assets/images/user/1.png"
                                            class="img-fluid rounded" alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 text-center">
                                                <div class="media-body profile-detail text-center">
                                                    <img src="<?php echo base_url();?>/assets/images/page-img/profile-bg.jpg"
                                                        alt="profile-bg" class="rounded-top img-fluid mb-4">
                                                    <img src="<?php echo base_url();?>/assets/images/user/1.png"
                                                        alt="profile-img"
                                                        class="rounded profile-img img-fluid avatar-70">
                                                </div>
                                                <div class="p-3">
                                                    <h5 class="mb-1">ชื่อผู้ใช้ <?php echo $name;?></h5>
                                                    <p class="mb-0">หน้าที่
                                                        <?php echo (($session->get('user_role')==1)?"ผู้บริหาร":"เภสัตร"); ?>
                                                    </p>
                                                    <p class="mb-0">ใช้งานอยู่</p>
                                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                                        <!-- <a href="<?php echo base_url();?>/app/user-profile.html" class="btn border mr-2">โปรไฟล์</a> -->
                                                        <a href="<?php echo site_url('logout');?>"
                                                            class="btn border">ออกจากระบบ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>