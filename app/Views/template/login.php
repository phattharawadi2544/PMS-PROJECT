<?php  $session = session(); ?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title> Mini Pharmacy</title>

   <!-- Favicon -->
   <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.ico" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/backend-plugin.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/backend.css?v=1.0.0">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
   <link rel="stylesheet"
      href="<?php echo base_url(); ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class=" ">
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->



   <div class="wrapper">
      <section class="login-content">
         <div class="container">

            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
<?php  if($session->getFlashdata('message_session')=='cannot login'){ ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                           โปรดเช็ครหัสผ่านให้ถูกต้องอีกครั้ง
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
<?php }?>
                        <div class="d-flex align-items-center auth-content">

                           <div class="col-lg-7 align-self-center">



                              <div class="p-3">
                                 <h2 class="mb-2">เข้าสู่ระบบ</h2>
                                 <p>ยินดีต้อนรับเข้าสู่ Mini Pharmacy</p>
                                 <form action="<?php echo site_url('checkLogin'); ?>" method="POST">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="text" placeholder=" "
                                                name='username'>
                                             <label>ชื่อผู้ใช้</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="password" placeholder=" "
                                                name='password' required>
                                             <label>รหัสผ่าน</label>
                                          </div>
                                       </div>


                                    </div>
                                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                                    <!-- <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a> -->

                                 </form>



                              </div>

                           </div>
                           <div class="col-lg-5 content-right">
                              <img src="<?php echo base_url(); ?>/assets/images/login/logo3.png"
                                 class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>

   <!-- Backend Bundle JavaScript -->
   <script src="<?php echo base_url(); ?>/assets/js/backend-bundle.min.js"></script>

   <!-- Table Treeview JavaScript -->
   <script src="<?php echo base_url(); ?>/assets/js/table-treeview.js"></script>

   <!-- Chart Custom JavaScript -->
   <script src="<?php echo base_url(); ?>/assets/js/customizer.js"></script>

   <!-- Chart Custom JavaScript -->
   <script async src="<?php echo base_url(); ?>/assets/js/chart-custom.js"></script>

   <!-- app JavaScript -->
   <script src="<?php echo base_url(); ?>/assets/js/app.js"></script>
</body>

</html>