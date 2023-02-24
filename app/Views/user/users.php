<div class="content-page">
    <div class="container-fluid">
        <?php $session = session(); if($session->getFlashdata('item')=='202'): ?>
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
        <?php endif;?>
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">การจัดการข้อมูลผู้ใช้</h4>
                        <!-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> -->
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"
                        data-bs-whatever="@mdo">เพิ่มผู้ใช้</button>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <table class="data-tables table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                <th>ลำดับ</th>
                                <th>ID</th>
                                <th>ชื่อ</th>
                                <th>สกุล</th>
                                <!-- <th>username</th> -->
                                <!-- <th>password</th> -->
                                <th>Email</th>
                                <th>เบอร์โทร</th>
                                <!-- <th>ที่อยู่</th> -->
                                <th>สถานะ</th>
                                <th>หน้าที่</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            <?php

                            // var_dump($users_list);
                            $count = 0;
                            foreach ($users_list as $users_row):
                                $count++; ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- <img src="../assets/images/table/product/01.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image"> -->
                                            <div>
                                                <?php echo $count; ?>
                                                <!-- <p class="mb-0"><small>This is test Product</small></p> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $users_row["user_id"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $users_row["f_name"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $users_row["l_name"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $users_row["email"]; ?>
                                    </td>
                                    <!-- <td>
                                        <?php echo $users_row["username"]; ?>
                                    </td> -->
                                    <!-- <td>
                                        <?php echo $users_row["password"]; ?>
                                    </td> -->
                                    <td>
                                        <?php echo $users_row["tel"]; ?>
                                    </td>
                                    <!-- <td>
                                        <?php echo $users_row["address"]; ?>
                                    </td> -->
                                    <td>
                                        <?php echo $users_row["status"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $users_row["user_role"]; ?>
                                    </td>


                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="ดู" href="#" onclick="view_data('<?php echo $users_row["user_id"]; ?>')"><i
                                                    class="ri-eye-line mr-0"></i></a>
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="แก้ไข" href="#" onclick="edit_data('<?php echo $users_row["user_id"]; ?>')"><i
                                                    class="ri-pencil-line mr-0"></i></a>
                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="ลบ" href="#" onclick="delete_data('<?php echo $users_row["user_id"]; ?>')"><i
                                                    class="ri-delete-bin-line mr-0"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
    <!-- Modal Edit -->
    <!-- <div class="modal  fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <div class="media align-items-top justify-content-between">
                            <h3 class="mb-3">Product</h3>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                        <div class="content edit-notes">
                            <div class="card card-transparent card-block card-stretch event-note mb-0">
                                <div class="card-body px-0 bukmark">
                                    <div
                                        class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                                        <div class="quill-tool">
                                        </div>
                                    </div>
                                    <div id="quill-toolbar1">
                                        <p>Virtual Digital Marketing Course every week on Monday, Wednesday and
                                            Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                        <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- ส่วนของ MODAL -->

    <!-- Button trigger modal -->
    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มผู้ใช้</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_user_new" method="post" action="<?php echo site_url('add_user'); ?>">
                        <div class="col-md-6">
                            <label for="inputfname" class="form-label">ชื่อ *</label>
                            <input type="text" class="form-control was-validated" id="inputfname" name="fname" onchange="clr_border(this);" >

                            
                        </div>

                        <div class="col-md-6">
                            <label for="inputlname" class="form-label">นามสกุล *</label>
                            <input type="text" class="form-control" id="inputlname" name="lname" onchange="clr_border(this);">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="inputusername" class="form-label">username *</label>
                            <input type="text" class="form-control" id="inputusername" name="username">
                        </div>
                        <div class="col-md-6">
                            <label for="inputpassword" class="form-label">password *</label>
                            <input type="password" class="form-control" id="inputpassword" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="inputemail" class="form-label">Email *</label>
                            <input type="text" class="form-control" id="inputemail" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputtel" class="form-label">เบอร์โทร *</label>
                            <input type="text" class="form-control" id="inputtel" name="telno">
                        </div>
                        <div class="col-md-6">
                            <label for="inputaddress" class="form-label">ที่อยู่ *</label>
                            <textarea type="text" class="form-control" id="inputaddress" name="address"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="inputhiredate" class="form-label">วันที่เริ่มทำงาน</label>
                            <input type="date" class="form-control" id="inputhiredate" name="hiredate">
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">หน้าที่ *</label>
                            <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="role1" name="role" class="custom-control-input" value='1'>
                                <label class="custom-control-label" for="role1"> ผู้ประกอบการ</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="role2" name="role" class="custom-control-input" checked value='2'>
                                <label class="custom-control-label" for="role2"> เภสัชกร </label>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">สถานะ *</label>
                            <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status1" name="status" class="custom-control-input" checked value="1">
                                <label class="custom-control-label" for="status1"> ใช้งานอยู่ </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status2" name="status" class="custom-control-input" value="0" >
                                <label class="custom-control-label" for="status2"> ปิดการใช้งาน </label>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_user()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ประวัติ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>
                <div class="modal-body">
                <div class="card card-block p-card">
                  <div class="profile-box">
                     <div class="profile-card rounded">
                        <img src="../assets/images/user/12.jpg" alt="profile-bg" class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                        <h3 class="font-600 text-white text-center mb-0">สมพงษ์	ใจดี</h3>
                        <p class="text-white text-center mb-5">เภสัชกร</p>
                     </div>
                     <div class="pro-content rounded">
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon mr-3">
                              <i class="las la-envelope-open-text"></i>
                           </div>
                           <p class="mb-0 eml">xxxxx@gmail.com</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon bg-success mr-3">
                              <i class="las la-phone"></i>
                           </div>
                           <p class="mb-0">เบอร์โทร: xxx-xxx-xxxx</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon  bg-danger mr-3">
                              <i class="las la-map-marked"></i>
                           </div>
                           <p class="mb-0">ที่อยู่: xxxx</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon  bg-danger mr-3">
                              <i class="las la-map-marked"></i>
                           </div>
                           <p class="mb-0">วันที่เริ่มทำงาน: xx-xx-xxxx</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon  bg-danger mr-3">
                              <i class="las la-map-marked"></i>
                           </div>
                           <p class="mb-0">เงินเดือน: 45,000 บาท</p>
                        </div>

                        <div class="d-flex justify-content-center">
                           <div class="social-ic d-inline-flex rounded">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-youtube"></i></a>
                              <a href="#"><i class="fab fa-pinterest-p"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>



                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มผู้ใช้</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_user_new" method="post" action="<?php echo site_url('add_user'); ?>">
                        <div class="col-md-12">
                            <label for="inputuserID" class="form-label">รหัสผู้ใช้</label>
                            <input type="text" class="form-control was-validated" id="inputuserID" name="userID" readonly >

                            
                        </div>
                        <div class="col-md-6">
                            <label for="inputfname" class="form-label">ชื่อ *</label>
                            <input type="text" class="form-control was-validated" id="inputfname" name="fname" onchange="clr_border(this);" >

                            
                        </div>

                        <div class="col-md-6">
                            <label for="inputlname" class="form-label">นามสกุล *</label>
                            <input type="text" class="form-control" id="inputlname" name="lname" onchange="clr_border(this);">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="inputusername" class="form-label">username *</label>
                            <input type="text" class="form-control" id="inputusername" name="username">
                        </div>
                        <div class="col-md-6">
                            <label for="inputpassword" class="form-label">password *</label>
                            <input type="password" class="form-control" id="inputpassword" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="inputemail" class="form-label">Email *</label>
                            <input type="text" class="form-control" id="inputemail" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputtel" class="form-label">เบอร์โทร *</label>
                            <input type="text" class="form-control" id="inputtel" name="telno">
                        </div>
                        <div class="col-md-6">
                            <label for="inputaddress" class="form-label">ที่อยู่ *</label>
                            <textarea type="text" class="form-control" id="inputaddress" name="address"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="inputhiredate" class="form-label">วันที่เริ่มทำงาน</label>
                            <input type="date" class="form-control" id="inputhiredate" name="hiredate">
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">หน้าที่ *</label>
                            <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="role1" name="role" class="custom-control-input" value='1'>
                                <label class="custom-control-label" for="role1"> ผู้ประกอบการ</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="role2" name="role" class="custom-control-input" checked value='2'>
                                <label class="custom-control-label" for="role2"> เภสัชกร </label>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">สถานะ *</label>
                            <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status1" name="status" class="custom-control-input" checked value="1">
                                <label class="custom-control-label" for="status1"> ใช้งานอยู่ </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status2" name="status" class="custom-control-input" value="0" >
                                <label class="custom-control-label" for="status2"> ปิดการใช้งาน </label>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_user()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>


    
</div>
</div>

<script>
    function save_user(){
        let ch = true;
        if($("#inputfname").val().trim().length==0){
            ch = false;
            $("#inputfname").css("border-color","red");
        }
        
        if($("#inputlname").val().trim().length==0){
            ch = false;
            $("#inputlname").css("border-color","red");
        }
        if($("#inputusername").val().trim().length==0){
            ch = false;
            $("#inputusername").css("border-color","red");
        }
        if($("#inputpassword").val().trim().length==0){
            ch = false;
            $("#inputpassword").css("border-color","red");
        }
        if($("#inputemail").val().trim().length==0){
            ch = false;
            $("#inputemail").css("border-color","red");
        }
        if($("#inputaddress").val().trim().length==0){
            ch = false;
            $("#inputaddress").css("border-color","red");
        }
        if($("#inputtel").val().trim().length==0){
            ch = false;
            $("#inputtel").css("border-color","red");
        }
        
        if($("#inputhiredate").val().trim().length==0){
            ch = false;
            $("#inputhiredate").css("border-color","red");
        }

        if(ch){
            $('#form_user_new').submit();
        }
        else{
            alert("กรุณากรอกข้อมูลให้ครบ");
        }
            
    }



    function view_data(id){
        $('#viewModal').modal('show');
    }

    function edit_data(id){
        $('#editModal').modal('show');
    }

    function clr_border(obj){
        obj.style.removeProperty('border-color');
    }
</script>