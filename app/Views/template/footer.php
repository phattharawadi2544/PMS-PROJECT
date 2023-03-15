<?php $session = session();?>
</div>
    <!-- <footer class="iq-footer">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class=""><a href="<?php echo base_url();?>">Mini Pharmacy</a></li>
                                <li class=""><a href="<?php echo base_url();?>">ระบบบริหารการจัดการร้านขายยาที่ดีที่สุด</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1"><script>document.write(new Date().getFullYear())</script></span> <a href="#" class="">mini pharmacy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->

    
    <!-- Backend Bundle JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/table-treeview.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="<?php echo base_url();?>/assets/js/chart-custom.js"></script>
    
    <!-- app JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    

    <script>
        $().ready(function(){
            <?php if($session->get('user_role')==2){?>
            jQuery("body").toggleClass("sidebar-main");
            <?php } ?>
        });
    </script>
  </body>
</html>