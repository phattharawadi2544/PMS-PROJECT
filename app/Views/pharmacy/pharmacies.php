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
                        <h4 class="mb-3">จัดการข้อมูลยา</h4>

                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"
                        data-bs-whatever="@mdo">เพิ่มข้อมูลยา</button>
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
                                    <center>รหัสยา</center>
                                </th>
                                <th>
                                    <center>บาร์โค้ด</center>
                                </th>
                                <th>
                                    <center>เลขทะเบียนยา</center>
                                </th>
                                <th>
                                    <center>ชื่อทางการค้า</center>
                                </th>
                                <th>
                                    <center>หมวดหมู่</center>
                                </th>
                                <th>
                                    <center>ราคาขาย</center>
                                </th>
                                <th>
                                    <center>หน่วยนับ</center>
                                </th>
                                <th>
                                    <center>จัดการ</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            <?php 
                        
                        // var_dump($pharmacy_list);
                        $count = 0;
                        foreach($pharmacy_list as $phamacy_row):
                        $count++; ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <?php echo $count; ?>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <center><?php echo  $phamacy_row["pharmacy_id"];?></center>
                                </td>
                                <td>
                                    <center><?php echo  $phamacy_row["barcode"];?></center>
                                </td>
                                <td>
                                    <center><?php echo  $phamacy_row["reg_no"];?></center>
                                </td>
                                <td>
                                    <center><?php echo  $phamacy_row["pharmacy_name"];?></center>
                                </td>
                                <td>
                                    <center>
                                        <?php 
                                            if ($phamacy_row["pharmacy_group"] == 1) {
                                                echo "ยาสามัญประจำบ้าน";
                                            } else if ($phamacy_row["pharmacy_group"] == 2) {
                                                echo "ยาอันตราย";
                                            } else {
                                                echo "ยาควบคุมพิเศษ";
                                            }
                                        ?>
                                    </center>
                                </td>
                                <td>
                                    <center><?php echo  $phamacy_row["price"];?></center>
                                </td>
                                
                                <td>
                                    <center><?php echo  $phamacy_row["counting_unit"];?></center>
                                </td>
                                <td>
                                    <center>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="ดู" href="#"
                                                onclick="view_data('<?php echo $phamacy_row["pharmacy_id"]; ?>')"><i
                                                    class="ri-eye-line mr-0"></i></a>
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="แก้ไข" href="#"
                                                onclick="edit_data('<?php echo $phamacy_row["pharmacy_id"]; ?>')"><i
                                                    class="ri-pencil-line mr-0"></i></a>
                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="ลบ" href="#"
                                                onclick="delete_data('<?php echo $phamacy_row["pharmacy_id"]; ?>')"><i
                                                    class="ri-delete-bin-line mr-0"></i></a>
                                        </div>
                                    </center>

                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>




    <!-- newmodal -->
    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลยา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_pharmacy_new" method="post"
                        action="<?php echo site_url('add_pharmacy'); ?>">
                        <div class="col-md-6">
                            <label for="input_barcode" class="form-label">บาร์โค้ด *</label>
                            <input type="text" class="form-control" id="input_barcode" name="barcode"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-md-12">
                            <label for="inputreg" class="form-label">เลขทะเบียนยา *</label>
                            <input type="text" class="form-control" id="input_reg" name="reg"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="input_pha_name" class="form-label">ชื่อสามัญ(ภาษาไทย/ภาษาอังกฤษ) *</label>
                            <input type="text" class="form-control" id="input_pha_name" name="commonpha_name"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputpharmacyname" class="form-label">ชื่อทางการค้า(ภาษาไทย/ภาษาอังกฤษ)*</label>
                            <input type="text" class="form-control" id="input_pharmacyname" name="pharmacyname"
                                onchange="clr_border(this);">
                        </div>

                        <div class="col-6">
                            <label for="inputdetails" class="form-label">ข้อบ่งใช้ *</label>
                            <textarea type="text" class="form-control" id="input_details" name="pharmacydetails"
                                onchange="clr_border(this);"></textarea>
                        </div>
                        <div class="col-6">
                            <label for="inputwarning" class="form-label">ผลข้างเคียง/ข้อควรระวัง *</label>
                            <textarea type="text" class="form-control" id="input_warning" name="pharmacywarning"
                                onchange="clr_border(this);"></textarea>
                        </div>
                        <div class="col-6">
                            <label for="inputprice" class="form-label">ราคาขาย *</label>
                            <input type="number" class="form-control " id="input_price" name="price"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-6">
                            <label for="inputamount" class="form-label">ปริมาณน้อยสุด *</label>
                            <input type="number" class="form-control " id="input_amount" name="min"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-6">
                            <label for="inputamount" class="form-label">ปริมาณมากสุด *</label>
                            <input type="number" class="form-control " id="input_amount" name="max"
                                onchange="clr_border(this);">
                        </div>

                        <div class="col-6">
                            <label for="inputunit" class="form-label">หน่วยนับ *</label>
                            <input type="text" class="form-control" id="input_unit" name="unit"
                                onchange="clr_border(this);">
                        </div>

                        <div class="col-md-12">
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">หมวดหมู่ *</legend>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="pharmacygroup1" name="pharmacygroup"
                                            class="custom-control-input" checked value='1'>
                                        <label class="custom-control-label"
                                            for="pharmacygroup1">ยาสามัญประจำบ้าน</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="pharmacygroup2" name="pharmacygroup"
                                            class="custom-control-input" checked value='2'>
                                        <label class="custom-control-label" for="pharmacygroup2"> ยาอันตราย </label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="pharmacygroup3" name="pharmacygroup"
                                            class="custom-control-input" checked value='3'>
                                        <label class="custom-control-label" for="pharmacygroup3"> ยาควบคุมพิเศษ </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_pharmacy()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>


    <!-- viewmodal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">รายละเอียดข้อมูลยา</h4>
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
                                        <p class="mb-0 h5">รหัสยา: </p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_pharmacyid"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">เลขที่ทะเบียนยา: </p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_reg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">บาร์โค้ด: </p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_barcode"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">ชื่อทางการค้า:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_pharmacyname"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">ชื่อยาสามัญ:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_pha_name"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">ข้อบ่งใช้:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_details"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">ผลข้างเคียง/ข้อควรระวัง:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_warning"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">หมวดหมู่:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_group"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">หน่วยนับ:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_unit"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">ราคาขาย:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_price"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">ปริมาณน้อยสุด:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_min"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 h5">ปริมาณมากสุด:</p>
                                    </div>
                                    <div class="col-md-6">
                                        <span id="view_max"></span>
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


</div>
</div>


<!-- editmodal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลยา</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                    </svg></button>
            </div>

            <div class="modal-body">
                <form class="row g-3" id="form_pharmacy_edit" method="post"
                    action="<?php echo site_url('edit_pharmacy'); ?>">

                    <div class="col-md-6">
                        <label for="edit_pharmacyid" class="form-label">รหัสยา</label>
                        <input type="text" class="form-control was-validated" id="edit_pharmacyid" name="pharmacy_id"
                            readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="edit_barcode" class="form-label">บาร์โค้ด</label>
                        <input type="text" class="form-control" id="edit_barcode" name="barcode" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="edit_reg" class="form-label">เลขทะเบียนยา</label>
                        <input type="text" class="form-control" id="edit_reg" name="reg" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="input_pha_name" class="form-label">ชื่อยาสามัญ(ภาษาไทย/ภาษาอังกฤษ) *</label>
                        <input type="text" class="form-control" id="input_pha_name" name="commonpha_name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputpharmacyname" class="form-label">ชื่อทางการค้า(ภาษาไทย/ภาษาอังกฤษ) * </label>
                        <input type="text" class="form-control" id="input_pharmacyname" name="pharmacyname">
                    </div>
                    <div class="col-6">
                        <label for="edit_details" class="form-label">ข้อบ่งใช้</label>
                        <textarea type="text" class="form-control" id="edit_details" name="pharmacydetails"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="edit_warning" class="form-label">ผลข้างเคียง/ข้อควรระวัง</label>
                        <textarea type="text" class="form-control" id="edit_warning" name="pharmacywarning"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="edit_price" class="form-label">ราคาขาย</label>
                        <input type="number" class="form-control " id="edit_price" name="price">
                    </div>
                    <div class="col-6">
                        <label for="edit_unit" class="form-label">หน่วยนับ</label>
                        <input type="text" class="form-control" id="edit_unit" name="unit">
                    </div>
                    <div class="col-6">
                        <label for="edit_unit" class="form-label">ปริมาณน้อยสุด</label>
                        <input type="text" class="form-control" id="edit_min" name="min">
                    </div>
                    <div class="col-6">
                        <label for="edit_unit" class="form-label">ปริมาณมากสุด</label>
                        <input type="text" class="form-control" id="edit_max" name="max">
                    </div>
                    <div class="col-md-12">
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">หมวดหมู่</legend>
                            <div class="col-sm-10">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="edit_pharmacygroup1" name="pharmacygroup"
                                        class="custom-control-input" checked value='1'>
                                    <label class="custom-control-label"
                                        for="edit_pharmacygroup1">ยาสามัญประจำบ้าน</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="edit_pharmacygroup2" name="pharmacygroup"
                                        class="custom-control-input" checked value='2'>
                                    <label class="custom-control-label" for="edit_pharmacygroup2"> ยาอันตราย </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="edit_pharmacygroup3" name="pharmacygroup"
                                        class="custom-control-input" checked value='3'>
                                    <label class="custom-control-label" for="edit_pharmacygroup3"> ยาควบคุมพิเศษ
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-primary" onclick="save_edit_pharmacy()">บันทึก</button>
            </div>
        </div>
    </div>
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
                <p>ข้อมูลยา</p>
                <form class="row g-3" id="form_pharmacy_del" method="post"
                    action="<?php echo site_url('del_pharmacy'); ?>">
                    <div class="col-md-12">
                        <label for="del_pharmacy_id" class="form-label">รหัสยา</label>
                        <input type="text" class="form-control was-validated" id="del_pharmacy_id" name="pharmacy_id"
                            onchange="clr_border(this);" readonly>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary" onclick="save_del_pharmacy()">ยืนยันการลบ</button>
            </div>
        </div>
    </div>
</div>


</div>
</div>




<script>
function save_pharmacy() {
    let ch = true;
    if ($("#input_reg").val().trim().length == 0) {
        ch = false;
        $("#input_reg").css("border-color", "red");
    }
    if ($("#input_pha_name").val().trim().length == 0) {
        ch = false;
        $("#input_pha_name").css("border-color", "red");
    }
    if ($("#input_barcode").val().trim().length == 0) {
        ch = false;
        $("#input_barcode").css("border-color", "red");
    }
    if ($("#input_pharmacyname").val().trim().length == 0) {
        ch = false;
        $("#input_pharmacyname").css("border-color", "red");
    }
    if ($("#input_details").val().trim().length == 0) {
        ch = false;
        $("#input_details").css("border-color", "red");
    }
    if ($("#input_unit").val().trim().length == 0) {
        ch = false;
        $("#input_unit").css("border-color", "red");
    }
    if ($("#input_warning").val().trim().length == 0) {
        ch = false;
        $("#input_warning").css("border-color", "red");
    }
    if ($("#input_price").val().trim().length == 0) {
        ch = false;
        $("#input_price").css("border-color", "red");
    }
    if ($("#input_min").val().trim().length == 0) {
        ch = false;
        $("#input_min").css("border-color", "red");
    }
    if ($("#input_max").val().trim().length == 0) {
        ch = false;
        $("#input_max").css("border-color", "red");
    }
    if (ch) {
        $('#form_pharmacy_new').submit();
    } else {
        alert("กรุณากรอกข้อมูลให้ครบ");
    }

}

function save_edit_pharmacy() {
    let ch = true;
    if ($("#edit_reg").val().trim().length == 0) {
        ch = false;
        $("#edit_reg").css("border-color", "red");
    }
    if ($("#edit_pha_name").val().trim().length == 0) {
        ch = false;
        $("#edit_pha_name").css("border-color", "red");
    }
    if ($("#edit_barcode").val().trim().length == 0) {
        ch = false;
        $("#edit_barcode").css("border-color", "red");
    }
    if ($("#edit_pharmacyname").val().trim().length == 0) {
        ch = false;
        $("#edit_pharmacyname").css("border-color", "red");
    }
    if ($("#edit_details").val().trim().length == 0) {
        ch = false;
        $("#edit_details").css("border-color", "red");
    }
    if ($("#edit_unit").val().trim().length == 0) {
        ch = false;
        $("#edit_unit").css("border-color", "red");
    }
    if ($("#edit_warning").val().trim().length == 0) {
        ch = false;
        $("#edit_warning").css("border-color", "red");
    }
    if ($("#edit_price").val().trim().length == 0) {
        ch = false;
        $("#edit_price").css("border-color", "red");
    }
    if ($("#edit_min").val().trim().length == 0) {
        ch = false;
        $("#edit_min").css("border-color", "red");
    }
    if ($("#edit_max").val().trim().length == 0) {
        ch = false;
        $("#edit_max").css("border-color", "red");
    }
    if (ch) {
        $('#form_pharmacy_edit').submit();
    }
}



function view_data(id) {
    $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getPharmacy')?>" + "/" + id,
            data: {}
        })
        .done(function(data) {
            $.each(data.data, function(i, item) {
                // console.log(item);
                $("#view_pharmacyid").html(item.pharmacy_id);
                $("#view_pha_name").html(item.commonpha_name);
                $("#view_reg").html(item.reg_no);
                $('#view_barcode').html(item.barcode);
                $('#view_pharmacyname').html(item.pharmacy_name);
                $('#view_details').html(item.pharmacy_details);
                $('#view_unit').html(item.counting_unit);
                $('#view_warning').html(item.pharmacy_warning);
                $('#view_group').html(item.pharmacy_group);
                $('#view_price').html(item.price);
                $('#view_min').html(item.min_stock);
                $('#view_max').html(item.max_stock);


            });
        });
    $('#viewModal').modal('show');
}




function edit_data(id) {
    $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getPharmacy')?>" + "/" + id,
            data: {}
        })
        .done(function(data) {
            $.each(data.data, function(i, item) {
                console.log(item);
                $("#edit_pharmacyid").val(item.pharmacy_id);
                $('#edit_barcode').val(item.barcode);
                $("#edit_reg").val(item.reg_no);
                $('#edit_pharmacyname').val(item.pharmacy_name);
                $('#edit_details').val(item.pharmacy_details);
                $('#edit_unit').val(item.counting_unit);
                $('#edit_warning').val(item.pharmacy_warning);
                $('#edit_price').val(item.price);
                $('#edit_min').val(item.min_stock)
                $('#edit_max').val(item.max_stock)

            });
        });
    $('#editModal').modal('show');
}

function delete_data(id) {
    $("#del_pharmacy_id").val(id);
    $('#dedeteModal').modal('show');
}

function save_del_pharmacy() {
    $('#form_pharmacy_del').submit();
}

function clr_border(obj) {
    obj.style.removeProperty('border-color');
}
</script>