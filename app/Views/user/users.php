<?php  $session = session(); ?>
<div class="content-page">
    <div class="container-fluid">
        <?php  if($session->getFlashdata('message_session')=='201'){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            บันทึกข้อมูลสำเร็จ
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php }?>
        <?php  if($session->getFlashdata('message_session')=='202'){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            แก้ไขข้อมูลสำเร็จ
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php }?>
        <?php  if($session->getFlashdata('message_session')=='203'){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            ลบข้อมูลสำเร็จ
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php }?>

        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">จัดการข้อมูลผู้ใช้</h4>
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

                        <th>
                            <center>ลำดับ</center>
                        </th>
                        <th>
                            <center>รหัสผู้ใช้</center>
                        </th>
                        <th>
                            <center>ชื่อผู้ใช้</center>
                        </th>
                        <th>
                            <center>ชื่อ</center>
                        </th>
                        <th>
                            <center>สกุล</center>
                        </th>
                        <th>
                            <center>อีเมลล์</center>
                        </th>
                        <th>
                            <center>เบอร์โทร</center>
                        </th>
                        <th>
                            <center>หน้าที่</center>
                        </th>
                        <th>
                            <center>สถานะ</center>
                        </th>

                        <th>
                            <center>จัดการ</center>
                        </th>
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

                                <div>
                                    <center><?php echo $count; ?></center>
                                </div>

                            </div>

                        </td>
                        <td>
                            <center><?php echo $users_row["user_id"]; ?></center>
                        </td>
                        <td>
                            <center><?php echo $users_row["username"]; ?></center>
                        </td>
                        <td>
                            <center><?php echo $users_row["f_name"]; ?></center>
                        </td>
                        <td>
                            <center><?php echo $users_row["l_name"]; ?></center>
                        </td>
                        <td>
                            <center><?php echo $users_row["email"]; ?></center>
                        </td>

                        <td>
                            <center><?php echo $users_row["tel"]; ?></center>
                        </td>
                        <td>
                            <center><?php echo ($users_row["user_role"] == '1' ? "ผู้จัดการร้าน" : "เภสัชกร"); ?>
                            </center>
                        </td>
                        <td>
                            <span class="badge bg-primary">
                                <center><?php echo ($users_row["status"] == '1' ? "ใช้งาน" : "ไม้ใช้งาน"); ?></center>
                            </span>

                        </td>

                        <td>
                            <div class="d-flex align-items-center list-action">
                                <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="ดู" href="#"
                                    onclick="view_data('<?php echo $users_row["user_id"]; ?>')"><i
                                        class="ri-eye-line mr-0"></i></a>
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="แก้ไข" href="#"
                                    onclick="edit_data('<?php echo $users_row["user_id"]; ?>')"><i
                                        class="ri-pencil-line mr-0"></i></a>
                                <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="ลบ" href="#"
                                    onclick="delete_data('<?php echo $users_row["user_id"]; ?>')"><i
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">รายละเอียดข้อมูลผู้ใช้</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                    </svg></button>
            </div>

            <div class="card">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>รหัสผู้ใช้:</h5>
                                    </strong>
                                </div>
                                <div class="col-md-6">
                                    <span id="view_userid"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>วันที่เริ่มทำงาน:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_hiredate"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>ชื่อผู้ใช้:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_username"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>เลขที่ใบอนุญาต:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_idlicense"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>วันที่ใบอนุญาตหมดอายุ:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_licenseexp"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>ชื่อ:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_f_name"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>สกุล:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_l_name"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>อีเมล:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_email"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>เบอร์โทร:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_tel"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>หน้าที่:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_role"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>ประสบการณ์ทำงาน:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_work"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>
                                        <h5>สถานะ:</h5>
                                    </strong>

                                </div>
                                <div class="col-md-6">
                                    <span id="view_status"></span>
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

<!-- newmodal -->
<div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มผู้ใช้</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                    </svg></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" id="form_user_new" method="post" action="<?php echo site_url('add_user'); ?>">
                    <div class="col-md-6">
                        <label for="inputhiredate" class="form-label">วันที่เริ่มทำงาน</label>
                        <input type="date" class="form-control" id="inputhiredate" name="hiredate"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="inputlicense" class="form-label">เลขที่ใบอนุญาต *</label>
                        <input type="text" class="form-control was-validated" id="inputlicense" name="license"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="inputlicenseexp" class="form-label">วันที่ใบอนุญาตหมดอายุ</label>
                        <input type="date" class="form-control" id="inputlicenseexp" name="licenseexp"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="inputfname" class="form-label">ชื่อ *</label>
                        <input type="text" class="form-control was-validated" id="inputfname" name="fname"
                            onchange="clr_border(this);">
                    </div>

                    <div class="col-md-6">
                        <label for="inputlname" class="form-label">นามสกุล *</label>
                        <input type="text" class="form-control" id="inputlname" name="lname"
                            onchange="clr_border(this);">
                    </div>

                    <div class="col-md-6">
                        <label for="inputusername" class="form-label">ชื่อผู้ใช้ *</label>
                        <input type="text" class="form-control" id="inputusername" name="username"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="inputpassword" class="form-label">รหัสผ่าน *</label>
                        <input type="password" class="form-control" id="inputpassword" name="password"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="inputemail" class="form-label">อีเมล *</label>
                        <input type="text" class="form-control" id="inputemail" name="email"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="inputtel" class="form-label">เบอร์โทร *</label>
                        <input type="text" class="form-control" id="inputtel" name="telno" onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="inputaddress" class="form-label">ที่อยู่ *</label>
                        <textarea type="text" class="form-control" id="inputaddress" name="address"
                            onchange="clr_border(this);"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="inputwork" class="form-label">ประสบการณ์ทำงาน *</label>
                        <textarea type="text" class="form-control" id="inputwork" name="work"
                            onchange="clr_border(this);"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="inputsalary" class="form-label">เงินเดือน *</label>
                        <input type="number" class="form-control " id="inputsalary" name="salary"
                            onchange="clr_border(this);">
                    </div>


                    <div class="col-md-6">
                        <label for="" class="form-label">หน้าที่ *</label>
                        <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="role1" name="role" class="custom-control-input" value='1'>
                                <label class="custom-control-label" for="role1"> ผู้ประกอบการ</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="role2" name="role" class="custom-control-input" checked
                                    value='2'>
                                <label class="custom-control-label" for="role2"> เภสัชกร </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="" class="form-label">สถานะ *</label>
                        <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status1" name="status" class="custom-control-input" checked
                                    value="1">
                                <label class="custom-control-label" for="status1"> ใช้งานอยู่ </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status2" name="status" class="custom-control-input" value="0">
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

<!-- editmodal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">แก้ไขผู้ใช้</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                    </svg></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" id="form_user_edit" method="post" action="<?php echo site_url('edit_user'); ?>">
                    <div class="col-md-3">
                        <label for="edit_userID" class="form-label">รหัสผู้ใช้งาน *</label>
                        <input type="text" class="form-control was-validated" id="edit_userID" name="userID"
                            onchange="clr_border(this);" readonly>
                    </div>
                    <div class="col-md-9">
                        <label for="edit_license" class="form-label">เลขที่ใบอนุญาต *</label>
                        <input type="text" class="form-control was-validated" id="edit_license" name="license"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="edit_fname" class="form-label">ชื่อ *</label>
                        <input type="text" class="form-control was-validated" id="edit_fname" name="fname"
                            onchange="clr_border(this);">
                    </div>

                    <div class="col-md-6">
                        <label for="edit_lname" class="form-label">นามสกุล *</label>
                        <input type="text" class="form-control" id="edit_lname" name="lname"
                            onchange="clr_border(this);">
                    </div>

                    <div class="col-md-6">
                        <label for="edit_username" class="form-label">ชื่อผู้ใช้ *</label>
                        <input type="text" class="form-control" id="edit_username" name="username"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="edit_password" class="form-label">รหัสผ่าน *</label>
                        <input type="password" class="form-control" id="edit_password" name="password"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="edit_email" class="form-label">อีเมล *</label>
                        <input type="text" class="form-control" id="edit_email" name="email"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="edit_tel" class="form-label">เบอร์โทร *</label>
                        <input type="text" class="form-control" id="edit_tel" name="telno" onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="edit_address" class="form-label">ที่อยู่ *</label>
                        <textarea type="text" class="form-control" id="edit_address" name="address"
                            onchange="clr_border(this);"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="edit_work" class="form-label">ประสบการณ์ทำงาน *</label>
                        <textarea type="text" class="form-control" id="edit_work" name="work"
                            onchange="clr_border(this);"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="edit_hiredate" class="form-label">วันที่เริ่มทำงาน</label>
                        <input type="date" class="form-control" id="edit_hiredate" name="hiredate"
                            onchange="clr_border(this);">
                    </div>
                    <div class="col-md-6">
                        <label for="edit_licenseexp" class="form-label">วันที่ใบอนุญาตหมดอายุ</label>
                        <input type="date" class="form-control" id="edit_licenseexp" name="licenseexp"
                            onchange="clr_border(this);">
                    </div>

                    <div class="col-md-6">
                        <label for="" class="form-label">หน้าที่ *</label>
                        <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_role1" name="role" class="custom-control-input" value='1'>
                                <label class="custom-control-label" for="edit_role1"> ผู้ประกอบการ</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_role2" name="role" class="custom-control-input" checked
                                    value='2'>
                                <label class="custom-control-label" for="edit_role2"> เภสัชกร </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="" class="form-label">สถานะ *</label>
                        <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_status1" name="status" class="custom-control-input" checked
                                    value="1">
                                <label class="custom-control-label" for="edit_status1"> ใช้งานอยู่ </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_status2" name="status" class="custom-control-input"
                                    value="0">
                                <label class="custom-control-label" for="edit_status2"> ปิดการใช้งาน </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-primary" onclick="save_edit_user()">บันทึก</button>
            </div>
        </div>
    </div>
</div>


<!-- delete modal -->
<div class="modal" id="dedeteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ยืนยันการลบข้อมูล</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                    </svg></button>
            </div>
            <div class="modal-body">
                <p>ข้อมูลผู้ใช้ที่ต้องการลบ</p>
                <form class="row g-3" id="form_user_del" method="post" action="<?php echo site_url('del_user'); ?>">
                    <div class="col-md-12">
                        <label for="del_userID" class="form-label">รหัสผู้ใช้</label>
                        <input type="text" class="form-control was-validated" id="del_userID" name="userID"
                            onchange="clr_border(this);" readonly>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary" onclick="save_del_user()">ยืนยันการลบ</button>
            </div>
        </div>
    </div>
</div>


</div>
</div>


<script>
function save_user() {
    let ch = true;
    if ($('#role2').is(":checked")) {
        if ($("#inputlicense").val().trim().length == 0) {
            ch = false;
            $("#inputlicense").css("border-color", "red");
        }
        if ($("#inputlicenseexp").val().trim().length == 0) {
            ch = false;
            $("#inputlicenseexp").css("border-color", "red");
        }
        if ($("#inputsalary").val().trim().length == 0) {
            ch = false;
            $("#inputsalary").css("border-color", "red");
        }

    }
    if ($("#inputfname").val().trim().length == 0) {
        ch = false;
        $("#inputfname").css("border-color", "red");
    }
    if ($("#inputlname").val().trim().length == 0) {
        ch = false;
        $("#inputlname").css("border-color", "red");
    }
    if ($("#inputusername").val().trim().length == 0) {
        ch = false;
        $("#inputusername").css("border-color", "red");
    }

    if ($("#inputemail").val().trim().length == 0) {
        ch = false;
        $("#inputemail").css("border-color", "red");
    }
    if ($("#inputaddress").val().trim().length == 0) {
        ch = false;
        $("#inputaddress").css("border-color", "red");
    }
    if ($("#inputwork").val().trim().length == 0) {
        ch = false;
        $("#inputwork").css("border-color", "red");
    }
    if ($("#inputtel").val().trim().length == 0) {
        ch = false;
        $("#inputtel").css("border-color", "red");
    }
    if ($("#inputhiredate").val().trim().length == 0) {
        ch = false;
        $("#inputhiredate").css("border-color", "red");
    }
    if (ch) {
        $('#form_user_new').submit();
    } else {
        alert("กรุณากรอกข้อมูลให้ครบ");
    }

}


function view_data(id) {
    $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getUser')?>" + "/" + id,
            data: {}
        })
        .done(function(data) {
            $.each(data.data, function(i, item) {
                console.log(item);
                $("#view_userid").html(item.user_id);
                $("#view_username").html(item.username);
                $("#view_f_name").html(item.f_name);
                $('#view_l_name').html(item.l_name);
                $('#view_email').html(item.email);
                $('#view_role').html(item.user_role);
                $('#view_tel').html(item.tel);
                $('#view_address').html(item.address);
                $('#view_work').html(item.work_experience);
                $('#view_hiredate').html(item.hiredate);
                $('#view_idlicense').html(item.id_license);
                $('#view_licenseexp').html(item.licenseexp);
                $('#view_status').html(item.status);
            });
        });
    $('#viewModal').modal('show');
}

function save_edit_user() {
    let ch = true;
    if ($('#edit_role2').is(":checked")) {
        if ($("#edit_license").val().trim().length == 0) {
            ch = false;
            $("#edit_license").css("border-color", "red");
        }
        if ($("#edit_licenseexp").val().trim().length == 0) {
            ch = false;
            $("#edit_licenseexp").css("border-color", "red");
        }
    }

    if ($("#edit_fname").val().trim().length == 0) {
        ch = false;
        $("#edit_fname").css("border-color", "red");
    }
    if ($("#edit_lname").val().trim().length == 0) {
        ch = false;
        $("#edit_lname").css("border-color", "red");
    }
    if ($("#edit_username").val().trim().length == 0) {
        ch = false;
        $("#edit_username").css("border-color", "red");
    }
    if ($("#edit_email").val().trim().length == 0) {
        ch = false;
        $("#edit_email").css("border-color", "red");
    }
    if ($("#edit_address").val().trim().length == 0) {
        ch = false;
        $("#edit_address").css("border-color", "red");
    }
    if ($("#edit_work").val().trim().length == 0) {
        ch = false;
        $("#edit_work").css("border-color", "red");
    }
    if ($("#edit_tel").val().trim().length == 0) {
        ch = false;
        $("#edit_tel").css("border-color", "red");
    }
    if ($("#edit_hiredate").val().trim().length == 0) {
        ch = false;
        $("#edit_hiredate").css("border-color", "red");
    }
    if (ch) {
        $('#form_user_edit').submit();
    }
}



function edit_data(id) {
    $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getUser')?>" + "/" + id,
            data: {}
        })
        .done(function(data) {
            $.each(data.data, function(i, item) {
                $("#edit_userID").val(item.user_id);
                $("#edit_license").val(item.id_license);
                $('#edit_username').val(item.username);
                $('#edit_email').val(item.email);
                $('#edit_fname').val(item.f_name);
                $('#edit_lname').val(item.l_name);
                $('#edit_tel').val(item.tel);
                $('#edit_address').val(item.address);
                $('#edit_work').val(item.work_experience);
                $('#edit_hiredate').val(item.hiredate);
                $('#edit_licenseexp').val(item.licenseexp);
            });
        });
    $('#editModal').modal('show');
}

function delete_data(id) {
    $("#del_userID").val(id);
    $('#dedeteModal').modal('show');
}

function save_del_user() {
    $('#form_user_del').submit();
}

function clr_border(obj) {
    obj.style.removeProperty('border-color');
}
</script>