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
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/remixicon/fonts/remixicon.css">  </head>
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
                <img src="<?php echo base_url();?>/assets/images/login/logo4.png" class="img-fluid rounded-normal light-logo" alt="logo"><h5 class="logo-title light-logo ml-6">Mini Pharmacy</h5>
              </a>
              <div class="iq-menu-bt-sidebar ml-0">
                  <i class="las la-bars wrapper-menu"></i>
              </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="">
                            <a href="<?php echo site_url('/');?>" class="svg-icon">                        
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                </svg>
                              <span class="ml-4">หน้าหลัก</span>
                            </a>
                        </li>

                        <?php if($session->get('user_role')==1){?>
                        <li class="">
                            <a href="<?php echo site_url('/users');?>" class="svg-icon">                        
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                </svg>
                              <span class="ml-4">การจัดการข้อมูลผู้ใช้</span>
                          </a>
                        </li>
                        <?php } ?>

                      <li class="">
                          <a href="<?php echo site_url('/pharmacies');?>" class="svg-icon">                        
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule" viewBox="0 0 16 16">
                                <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z"/>
                            </svg>
                            <span class="ml-4">การจัดการข้อมูลยา</span>
                          </a>
                      </li>
                      

                        <li class=" ">
                            <a href="#basic_management" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                                <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
                                </svg>

                                <span class="ml-4">จัดการข้อมูลพื้นฐาน</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
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
                      


                        <li class="">
                            <a href="<?php echo site_url('/supplier');?>" class="svg-icon">                        
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                    <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                                    <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                                </svg>
                                <span class="ml-4">รายการสั่งซื้อ</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="<?php echo site_url('/lot');?>" class="svg-icon">                        
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                                </svg>
                                <span class="ml-4">คลังยา</span>
                            </a>
                        </li>



                        <li class=" ">
                            <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                              <span class="ml-4">รายการขาย</span>
                              <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                              </svg>
                            </a>
                          <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          
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
                          </ul>
                        </li>



                        <li class=" ">
                            <a href="#report" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg>
                              <span class="ml-4">ออกรายงาน</span>
                              <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                              </svg>
                          </a>
                          <ul id="report" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                  <!-- <li class="">
                                          <a href="<?php echo base_url('report_purchase');?>">
                                              <i class="las la-minus"></i><span>รายงานบัญชีการซื้อยา </span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url('report_control ');?>">
                                              <i class="las la-minus"></i><span>รายงานบัญชีการขายยาควบคุมพิเศษ (ข.ย.10)</span>
                                          </a>
                                </li>
                                <li class="">
                                          <a href="<?php echo base_url('report_dangerous');?>">
                                              <i class="las la-minus"></i><span>รายงานบัญชีการขายยาอันตราย ตาม ที่ อ.ย. กำหนด (ข.ย.11)</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url('report_profession');?>">
                                              <i class="las la-minus"></i><span>รายงานบัญชีการขายยาตามใบสั่งของผู้ประกอบวิชาชีพเวชกรรม หรือผู้ประกอบโรคศิลปะ ฯ (ข.ย.12)</span>
                                          </a>
                                  </li> -->
                          </ul>
                      </li>
                      <!-- <li class=" ">
                          <a href="#purchase" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <svg class="svg-icon" id="p-dash5" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                  <line x1="1" y1="10" x2="23" y2="10"></line>
                              </svg>
                              <span class="ml-4">Purchases</span>
                              <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                              </svg>
                          </a>
                          <ul id="purchase" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-list-purchase.html">
                                              <i class="las la-minus"></i><span>List Purchases</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-add-purchase.html">
                                              <i class="las la-minus"></i><span>Add purchase</span>
                                          </a>
                                  </li>
                          </ul>
                      </li>
                      <li class=" ">
                          <a href="#return" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <svg class="svg-icon" id="p-dash6" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="4 14 10 14 10 20"></polyline><polyline points="20 10 14 10 14 4"></polyline><line x1="14" y1="10" x2="21" y2="3"></line><line x1="3" y1="21" x2="10" y2="14"></line>
                              </svg>
                              <span class="ml-4">Returns</span>
                              <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                              </svg>
                          </a>
                          <ul id="return" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-list-returns.html">
                                              <i class="las la-minus"></i><span>List Returns</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-add-return.html">
                                              <i class="las la-minus"></i><span>Add Return</span>
                                          </a>
                                  </li>
                          </ul>
                      </li>
                      <li class=" ">
                          <a href="#people" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <svg class="svg-icon" id="p-dash8" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                              </svg>
                              <span class="ml-4">People</span>
                              <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                              </svg>
                          </a>
                          <ul id="people" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-list-customers.html">
                                              <i class="las la-minus"></i><span>Customers</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-add-customers.html">
                                              <i class="las la-minus"></i><span>Add Customers</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-list-users.html">
                                              <i class="las la-minus"></i><span>Users</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-add-users.html">
                                              <i class="las la-minus"></i><span>Add Users</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-list-suppliers.html">
                                              <i class="las la-minus"></i><span>Suppliers</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/page-add-supplier.html">\
                                          </a>
                                  </li>
                          </ul>
                      </li> -->
                      <!-- <li class="">
                          <a href="<?php echo base_url();?>/backend/page-report.html" class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6 19H3a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-3v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm0-2v-1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1h2V9H4v8h2zM8 4v3h8V4H8zm0 13v3h8v-3H8zm-3-7h3v2H5v-2z" fill="rgba(149,164,166,1)"/></svg>
                              <span class="ml-4">ออกรายงาน</span>
                          </a>
                          <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          </ul>
                      </li> -->
                      <!-- <li class=" ">
                          <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <svg class="svg-icon" id="p-dash9" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect>
                              </svg>
                              <span class="ml-4">other page</span>
                              <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                              </svg>
                          </a>
                          <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                  <li class=" ">
                                      <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash10" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>
                                          </svg>
                                          <span class="ml-4">User Details</span>
                                          <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                          </svg>
                                      </a>
                                      <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/app/user-profile.html">
                                                      <i class="las la-minus"></i><span>User Profile</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/app/user-add.html">
                                                      <i class="las la-minus"></i><span>User Add</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/app/user-list.html">
                                                      <i class="las la-minus"></i><span>User List</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class=" ">
                                      <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                         <svg class="svg-icon" id="p-dash11" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                          </svg>
                                          <span class="ml-4">UI Elements</span>
                                          <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                          </svg>
                                      </a>
                                      <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-avatars.html">
                                                      <i class="las la-minus"></i><span>Avatars</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-alerts.html">
                                                      <i class="las la-minus"></i><span>Alerts</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-badges.html">
                                                      <i class="las la-minus"></i><span>Badges</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-breadcrumb.html">
                                                      <i class="las la-minus"></i><span>Breadcrumb</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-buttons.html">
                                                      <i class="las la-minus"></i><span>Buttons</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-buttons-group.html">
                                                      <i class="las la-minus"></i><span>Buttons Group</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-boxshadow.html">
                                                      <i class="las la-minus"></i><span>Box Shadow</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-colors.html">
                                                      <i class="las la-minus"></i><span>Colors</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-cards.html">
                                                      <i class="las la-minus"></i><span>Cards</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-carousel.html">
                                                      <i class="las la-minus"></i><span>Carousel</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-grid.html">
                                                      <i class="las la-minus"></i><span>Grid</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-helper-classes.html">
                                                      <i class="las la-minus"></i><span>Helper classes</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-images.html">
                                                      <i class="las la-minus"></i><span>Images</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-list-group.html">
                                                      <i class="las la-minus"></i><span>list Group</span>
                                                  </a>
                                              </li>
                                              <li  class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-media-object.html">
                                                      <i class="las la-minus"></i><span>Media</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-modal.html">
                                                      <i class="las la-minus"></i><span>Modal</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-notifications.html">
                                                      <i class="las la-minus"></i><span>Notifications</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-pagination.html">
                                                      <i class="las la-minus"></i><span>Pagination</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-popovers.html">
                                                      <i class="las la-minus"></i><span>Popovers</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-progressbars.html">
                                                      <i class="las la-minus"></i><span>Progressbars</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-typography.html">
                                                      <i class="las la-minus"></i><span>Typography</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-tabs.html">
                                                      <i class="las la-minus"></i><span>Tabs</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-tooltips.html">
                                                      <i class="las la-minus"></i><span>Tooltips</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/ui-embed-video.html">
                                                      <i class="las la-minus"></i><span>Video</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li> -->
                                  <!-- <li class=" ">
                                      <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash12" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                          </svg>
                                          <span class="ml-4">Authentication</span>
                                          <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                          </svg>
                                      </a>
                                      <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/auth-sign-in.html">
                                                      <i class="las la-minus"></i><span>Login</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/auth-sign-up.html">
                                                      <i class="las la-minus"></i><span>Register</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/auth-recoverpw.html">
                                                      <i class="las la-minus"></i><span>Recover Password</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/auth-confirm-mail.html">
                                                      <i class="las la-minus"></i><span>Confirm Mail</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/auth-lock-screen.html">
                                                      <i class="las la-minus"></i><span>Lock Screen</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class="">
                                      <a href="#form" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash13" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                          </svg>
                                          <span class="ml-4">Forms</span>
                                          <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                          </svg>
                                      </a>
                                      <ul id="form" class="iq-submenu collapse" data-parent="#otherpage">
                                          <li class="">
                                              <a href="<?php echo base_url();?>/backend/form-layout.html">
                                                  <i class="las la-minus"></i><span class="">Form Elements</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="<?php echo base_url();?>/backend/form-input-group.html" class="svg-icon">
                                                 <i class="las la-minus"></i><span class="">Form Input</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="<?php echo base_url();?>/backend/form-validation.html" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Validation</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="<?php echo base_url();?>/backend/form-switch.html" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Switch</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="<?php echo base_url();?>/backend/form-chechbox.html" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Checkbox</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="<?php echo base_url();?>/backend/form-radio.html" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Radio</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="<?php echo base_url();?>/backend/form-textarea.html" class="svg-icon">
                                                  <i class="las la-minus"></i><span class="">Form Textarea</span>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class=" ">
                                      <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash14" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                                          </svg>
                                          <span class="ml-4">Table</span>
                                          <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                          </svg>
                                      </a>
                                      <ul id="table" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/tables-basic.html">
                                                      <i class="las la-minus"></i><span>Basic Tables</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/table-data.html">
                                                      <i class="las la-minus"></i><span>Data Table</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/table-tree.html">
                                                      <i class="las la-minus"></i><span>Table Tree</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class=" ">
                                      <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash16" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                          </svg>
                                          <span class="ml-4">Pricing</span>
                                          <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                          </svg>
                                      </a>
                                      <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/pricing.html">
                                                      <i class="las la-minus"></i><span>Pricing 1</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/pricing-2.html">
                                                      <i class="las la-minus"></i><span>Pricing 2</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class="">
                                      <a href="<?php echo base_url();?>/backend/pages-invoice.html" class="svg-icon">
                                          <svg class="svg-icon" id="p-dash07" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                          </svg>
                                          <span class="ml-4">Invoice</span>
                                      </a>
                                  </li>
                                  <li class=" ">
                                      <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                          <svg class="svg-icon" id="p-dash17" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line>
                                          </svg>
                                          <span class="ml-4">Error</span>
                                          <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                          </svg>
                                      </a>
                                      <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/pages-error.html">
                                                      <i class="las la-minus"></i><span>Error 404</span>
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a href="<?php echo base_url();?>/backend/pages-error-500.html">
                                                      <i class="las la-minus"></i><span>Error 500</span>
                                                  </a>
                                              </li>
                                      </ul>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/pages-blank-page.html">
                                              <svg class="svg-icon" id="p-dash18" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                  <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline>
                                              </svg>
                                              <span class="ml-4">Blank Page</span>
                                          </a>
                                  </li>
                                  <li class="">
                                          <a href="<?php echo base_url();?>/backend/pages-maintenance.html">
                                              <svg class="svg-icon" id="p-dash19" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                  <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                              </svg>
                                              <span class="ml-4">Maintenance</span>
                                          </a>
                                  </li>
                          </ul>
                      </li> -->
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
                          <img src="<?php echo base_url();?>/assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                          <h5 class="logo-title ml-3">Mini Pharmacy</h5>
      
                      </a>
                  </div>
                  <div class="iq-search-bar device-search">
                      <!-- <form action="#" class="searchbox">
                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                          <input type="text" class="text search-input" placeholder="Search here<?php echo base_url();?>.">
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
                              <!-- <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle btn border add-btn"
                                      id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true"
                                      aria-expanded="false">
                                      <img src="<?php echo base_url();?>/assets/images/small/flag-01.png" alt="img-flag"
                                          class="img-fluid image-flag mr-2">En
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                      <div class="card shadow-none m-0">
                                          <div class="card-body p-3">
                                              <a class="iq-sub-card" href="#"><img
                                                      src="<?php echo base_url();?>/assets/images/small/flag-02.png" alt="img-flag"
                                                      class="img-fluid mr-2">French</a>
                                              <a class="iq-sub-card" href="#"><img
                                                      src="<?php echo base_url();?>/assets/images/small/flag-03.png" alt="img-flag"
                                                      class="img-fluid mr-2">Spanish</a>
                                              <a class="iq-sub-card" href="#"><img
                                                      src="<?php echo base_url();?>/assets/images/small/flag-04.png" alt="img-flag"
                                                      class="img-fluid mr-2">Italian</a>
                                              <a class="iq-sub-card" href="#"><img
                                                      src="<?php echo base_url();?>/assets/images/small/flag-05.png" alt="img-flag"
                                                      class="img-fluid mr-2">German</a>
                                              <a class="iq-sub-card" href="#"><img
                                                      src="<?php echo base_url();?>/assets/images/small/flag-06.png" alt="img-flag"
                                                      class="img-fluid mr-2">Japanese</a>
                                          </div>
                                      </div>
                                  </div>
                              </li> -->
                              <!-- <li>
                                  <a href="#" class="btn border add-btn shadow-none mx-2 d-none d-md-block"
                                      data-toggle="modal" data-target="#new-order"><i class="las la-plus mr-2"></i>New
                                      Order</a>
                              </li> -->
                              <!-- <li class="nav-item nav-icon search-content">
                                  <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">
                                      <i class="ri-search-line"></i>
                                  </a>
                                  <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                      <form action="#" class="searchbox p-2">
                                          <div class="form-group mb-0 position-relative">
                                              <input type="text" class="text search-input font-size-12"
                                                  placeholder="type here to search<?php echo base_url();?>.">
                                              <a href="#" class="search-link"><i class="las la-search"></i></a>
                                          </div>
                                      </form>
                                  </div>
                              </li> -->
                              <!-- <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" class="feather feather-mail">
                                          <path
                                              d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                          </path>
                                          <polyline points="22,6 12,13 2,6"></polyline>
                                      </svg>
                                      <span class="bg-primary"></span>
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                      <div class="card shadow-none m-0">
                                          <div class="card-body p-0 ">
                                              <div class="cust-title p-3">
                                                  <div class="d-flex align-items-center justify-content-between">
                                                      <h5 class="mb-0">All Messages</h5>
                                                      <a class="badge badge-primary badge-card" href="#">3</a>
                                                  </div>
                                              </div>
                                              <div class="px-3 pt-0 pb-0 sub-card">
                                                  <a href="#" class="iq-sub-card">
                                                      <div class="media align-items-center cust-card py-3 border-bottom">
                                                          <div class="">
                                                              <img class="avatar-50 rounded-small"
                                                                  src="<?php echo base_url();?>/assets/images/user/01.jpg" alt="01">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
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
                                                                  src="<?php echo base_url();?>/assets/images/user/02.jpg" alt="02">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
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
                                                                  src="<?php echo base_url();?>/assets/images/user/03.jpg" alt="03">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
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
                              <li class="nav-item nav-icon dropdown"> -->
                                  <!-- <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" class="feather feather-bell">
                                          <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                          <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                      </svg>
                                      <span class="bg-primary "></span>
                                  </a> -->
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
                                                                  src="<?php echo base_url();?>/assets/images/user/01.jpg" alt="01">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
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
                                                                  src="<?php echo base_url();?>/assets/images/user/02.jpg" alt="02">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
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
                                                                  src="<?php echo base_url();?>/assets/images/user/03.jpg" alt="03">
                                                          </div>
                                                          <div class="media-body ml-3">
                                                              <div class="d-flex align-items-center justify-content-between">
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
                                      <img src="<?php echo base_url();?>/assets/images/user/1.png" class="img-fluid rounded" alt="user">
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <div class="card shadow-none m-0">
                                          <div class="card-body p-0 text-center">
                                              <div class="media-body profile-detail text-center">
                                                  <img src="<?php echo base_url();?>/assets/images/page-img/profile-bg.jpg" alt="profile-bg"
                                                      class="rounded-top img-fluid mb-4">
                                                  <img src="<?php echo base_url();?>/assets/images/user/1.png" alt="profile-img"
                                                      class="rounded profile-img img-fluid avatar-70">
                                              </div>
                                              <div class="p-3">
                                                  <h5 class="mb-1">ชื่อผู้ใช้ <?php echo $name;?></h5>
                                                  <p class="mb-0">หน้าที่ <?php echo (($session->get('user_role')==1)?"ผู้บริหาร":"เภสัตร"); ?></p>
                                                  <p class="mb-0">ใช้งานอยู่</p>
                                                  <div class="d-flex align-items-center justify-content-center mt-3">
                                                      <!-- <a href="<?php echo base_url();?>/app/user-profile.html" class="btn border mr-2">โปรไฟล์</a> -->
                                                      <a href="<?php echo site_url('logout');?>" class="btn border">ออกจากระบบ</a>
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
      <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="popup text-left">
                          <h4 class="mb-3">New Order</h4>
                          <div class="content create-workform bg-body">
                              <div class="pb-3">
                                  <label class="mb-2">Email</label>
                                  <input type="text" class="form-control" placeholder="Enter Name or Email">
                              </div>
                              <div class="col-lg-12 mt-4">
                                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                      <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                      <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>      
  
        