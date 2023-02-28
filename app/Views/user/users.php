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
  

    <!-- viewmodal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ประวัติ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>
               <div class="card card-block p-card">
                  <div class="profile-box">
                     <div class="profile-card rounded">
                        <h3 class="font-600 text-white text-center mb-0">ชื่อผู้ใช้</h3>
                        <p class="text-white text-center mb-5">หน้าที่</p>
                     </div>
                     <div class="pro-content rounded">
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon mr-3">
                              <i class="las la-envelope-open-text"></i>
                           </div>
                           <p class="mb-0 eml">johndoe9891@gmail.com</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon bg-success mr-3">
                              <i class="las la-phone"></i>
                           </div>
                           <p class="mb-0">(123) 123 1234</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon  bg-danger mr-3">
                              <i class="las la-map-marked"></i>
                           </div>
                           <p class="mb-0">USA</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon  bg-danger mr-3">
                              <i class="las la-map-marked"></i>
                           </div>
                           <p class="mb-0">USA</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon  bg-danger mr-3">
                              <i class="las la-map-marked"></i>
                           </div>
                           <p class="mb-0">USA</p>
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
                    <div class="col-md-12">
                            <label for="inputlicense" class="form-label">เลขที่ใบอนุญาต *</label>
                            <input type="text" class="form-control was-validated" id="inputlicense" name="license" onchange="clr_border(this);" >
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
                            <input type="text" class="form-control" id="inputusername" name="username" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputpassword" class="form-label">password *</label>
                            <input type="password" class="form-control" id="inputpassword" name="password" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputemail" class="form-label">Email *</label>
                            <input type="text" class="form-control" id="inputemail" name="email" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputtel" class="form-label">เบอร์โทร *</label>
                            <input type="text" class="form-control" id="inputtel" name="telno" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputaddress" class="form-label">ที่อยู่ *</label>
                            <textarea type="text" class="form-control" id="inputaddress" name="address" onchange="clr_border(this);"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputwork" class="form-label">ประสบการณ์ทำงาน *</label>
                            <textarea type="text" class="form-control" id="inputwork" name="work" onchange="clr_border(this);"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputhiredate" class="form-label">วันที่เริ่มทำงาน</label>
                            <input type="date" class="form-control" id="inputhiredate" name="hiredate" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputlicenseexp" class="form-label">วันที่ใบอนุญาตหมดอายุ</label>
                            <input type="date" class="form-control" id="inputlicenseexp" name="licenseexp" onchange="clr_border(this);">
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

     <!-- Button trigger modal -->
     <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขผู้ใช้</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_user_new" method="post" action="<?php echo site_url('add_user'); ?>">
                        <div class="col-md-3">
                            <label for="edit_userID" class="form-label">รหัสผู้ใช้งาน *</label>
                            <input type="text" class="form-control was-validated" id="edit_userID" name="userID" onchange="clr_border(this);" readonly>
                        </div>
                        <div class="col-md-9">
                            <label for="edit_license" class="form-label">เลขที่ใบอนุญาต *</label>
                            <input type="text" class="form-control was-validated" id="edit_license" name="license" onchange="clr_border(this);" >
                        </div>
                        <div class="col-md-6">
                            <label for="edit_fname" class="form-label">ชื่อ *</label>
                            <input type="text" class="form-control was-validated" id="edit_fname" name="fname" onchange="clr_border(this);" >
                        </div>

                        <div class="col-md-6">
                            <label for="edit_lname" class="form-label">นามสกุล *</label>
                            <input type="text" class="form-control" id="edit_lname" name="lname" onchange="clr_border(this);">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="edit_username" class="form-label">username *</label>
                            <input type="text" class="form-control" id="edit_username" name="username" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_password" class="form-label">password *</label>
                            <input type="password" class="form-control" id="edit_password" name="password" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_email" class="form-label">Email *</label>
                            <input type="text" class="form-control" id="edit_email" name="email" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_tel" class="form-label">เบอร์โทร *</label>
                            <input type="text" class="form-control" id="edit_tel" name="telno" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_address" class="form-label">ที่อยู่ *</label>
                            <textarea type="text" class="form-control" id="edit_address" name="address" onchange="clr_border(this);"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_work" class="form-label">ประสบการณ์ทำงาน *</label>
                            <textarea type="text" class="form-control" id="edit_work" name="work" onchange="clr_border(this);"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_hiredate" class="form-label">วันที่เริ่มทำงาน</label>
                            <input type="date" class="form-control" id="edit_hiredate" name="hiredate" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_licenseexp" class="form-label">วันที่ใบอนุญาตหมดอายุ</label>
                            <input type="date" class="form-control" id="edit_licenseexp" name="licenseexp" onchange="clr_border(this);">
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">หน้าที่ *</label>
                            <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_role1" name="role" class="custom-control-input" value='1'>
                                <label class="custom-control-label" for="edit_role1"> ผู้ประกอบการ</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_role2" name="role" class="custom-control-input" checked value='2'>
                                <label class="custom-control-label" for="edit_role2"> เภสัชกร </label>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">สถานะ *</label>
                            <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_status1" name="status" class="custom-control-input" checked value="1">
                                <label class="custom-control-label" for="edit_status1"> ใช้งานอยู่ </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_status2" name="status" class="custom-control-input" value="0" >
                                <label class="custom-control-label" for="edit_status2"> ปิดการใช้งาน </label>
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
        if($("#inputlicense").val().trim().length==0){
            ch = false;
            $("#inputlicense").css("border-color","red");
        }
        
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
        if($("#inputwork").val().trim().length==0){
            ch = false;
            $("#inputwork").css("border-color","red");
        }
        if($("#inputtel").val().trim().length==0){
            ch = false;
            $("#inputtel").css("border-color","red");
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
        $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getUser')?>"+"/"+id,
            data: {}
        })
        .done(function( data ) {
            $.each(data.data,function(i,item){
                $("#edit_userID").val(item.user_id);
                $("#edit_license").val(item.id_license);
                $('#edit_fname').val(item.f_name);
            });
        });
        $('#editModal').modal('show');
    }

    function clr_border(obj){
        obj.style.removeProperty('border-color');
    }
</script>