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
                        <h4 class="mb-3">จัดการข้อมูลผู้ขาย</h4>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"
                        data-bs-whatever="@mdo">บันทึกข้อมูลผู้ขาย</button>
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
                                    <center>รหัสผู้ขาย</center>
                                </th>
                                <th>
                                    <center>ชื่อผู้ขาย</center>
                                </th>
                                <th>
                                    <center>เบอร์โทร</center>
                                </th>
                                <th>
                                    <center>ที่อยู่</center>
                                </th>
                                <th>
                                    <center>จัดการ</center>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            <?php 
                        
                        // var_dump($supplier);
                        $count = 0;
                        foreach($supplier_list as $supplier_row):$count++; ?>
                            <tr>

                                <td>
                                    <center> <?php echo $count;?></center>
                                </td>
                                <td>
                                    <center><?php echo  $supplier_row["id_supplier"];?></center>
                                </td>
                                <td>
                                    <center><?php echo  $supplier_row["company_name"];?></center>
                                </td>
                                <td>
                                    <center><?php echo  $supplier_row["tel"];?></center>
                                </td>
                                <td>
                                    <?php echo  $supplier_row["address"];?>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="แก้ไข" href="#"
                                            onclick="edit_data('<?php echo $supplier_row["id_supplier"]; ?>')"><i
                                                class="ri-pencil-line mr-0"></i></a>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="ลบ" href="#"
                                            onclick="delete_data('<?php echo $supplier_row["id_supplier"]; ?>')"><i
                                                class="ri-delete-bin-line mr-0"></i></a>
                                    </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกรายการสั่งซื้อ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_supplier_new" method="post"
                        action="<?php echo site_url('add_supplier'); ?>">
                        <div class="col-md-6">
                            <label for="inputcompanyname" class="form-label">ชื่อผู้ขาย/ชื่อบริษัท *</label>
                            <input type="text" class="form-control was-validated" id="inputcompanyname"
                                name="company_name" onchange="clr_border(this);">
                        </div>



                        <div class="col-md-6">
                            <label for="inputtel" class="form-label">เบอร์โทร *</label>
                            <input type="text" class="form-control" id="inputtel" name="tel"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputaddress" class="form-label">ที่อยู่ *</label>
                            <textarea type="text" class="form-control" id="inputaddress" name="address"
                                onchange="clr_border(this);"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">

                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_supplier()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- editmodal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลรายการสั่งซื้อ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_supplier_edit" method="post"
                        action="<?php echo site_url('edit_supplier'); ?>">

                        <div class="col-md-6">
                            <label for="editsupplie" class="form-label">รหัสผู้ขาย </label>
                            <input type="text" class="form-control was-validated" id="editsupplie" name="id_supplier"
                                readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="editcompanyname" class="form-label">ชื่อผู้ขาย *</label>
                            <input type="text" class="form-control was-validated" id="editcompanyname"
                                name="company_name" onchange="clr_border(this);">
                        </div>

                        <div class="col-md-6">
                            <label for="editaddress" class="form-label">ที่อยู่ *</label>
                            <textarea type="text" class="form-control" id="editaddress" name="address"
                                onchange="clr_border(this);"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="edittel" class="form-label">เบอร์โทร</label>
                            <input type="text" class="form-control" id="edittel" name="tel"
                                onchange="clr_border(this);">
                        </div>


                    </form>
                </div>
                <div class="modal-footer">

                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_edit_supplier()">บันทึก</button>
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
                    <p>ข้อมูลผู้ขาย</p>
                    <form class="row g-3" id="form_supplier_del" method="post"
                        action="<?php echo site_url('del_supplier'); ?>">
                        <div class="col-md-12">
                            <label for="del_supplier_id" class="form-label">รหัสผู้ขาย</label>
                            <input type="text" class="form-control was-validated" id="del_supplier_id"
                                name="id_supplier" onchange="clr_border(this);" readonly>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-primary" onclick="save_del_supplier()">ยืนยันการลบ</button>
                </div>
            </div>
        </div>
    </div>




</div>

<script>
function save_supplier() {
    let ch = true;
    if ($("#inputcompanyname").val().trim().length == 0) {
        ch = false;
        $("#inputcompanyname").css("border-color", "red");
    }
    if ($("#inputaddress").val().trim().length == 0) {
        ch = false;
        $("#inputaddress").css("border-color", "red");
    }
    if ($("#inputtel").val().trim().length == 0) {
        ch = false;
        $("#inputtel").css("border-color", "red");
    }
    if (ch) {
        $('#form_supplier_new').submit();
    } else {
        alert("กรุณากรอกข้อมูลให้ครบ");
    }

}

function save_edit_supplier() {
    let ch = true;

    if ($("#editcompanyname").val().trim().length == 0) {
        ch = false;
        $("#editcompanyname").css("border-color", "red");
    }
    if ($("#editaddress").val().trim().length == 0) {
        ch = false;
        $("#editaddress").css("border-color", "red");
    }
    if ($("#edittel").val().trim().length == 0) {
        ch = false;
        $("#edittel").css("border-color", "red");
    }
    if (ch) {
        $('#form_supplier_edit').submit();
    } else {
        alert("กรุณากรอกข้อมูลให้ครบ");
    }

}

function edit_data(id) {
    $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getSupplier')?>" + "/" + id,
            data: {}
        })
        .done(function(data) {
            $.each(data.data, function(i, item) {
                $('#editsupplie').val(item.id_supplier);
                $('#editcompanyname').val(item.company_name);
                $('#edittel').val(item.tel);
                $('#editaddress').val(item.address);

            });
        });
    $('#editModal').modal('show');
}

function delete_data(id) {
    $("#del_supplier_id").val(id);
    $('#dedeteModal').modal('show');
}

function save_del_supplier() {
    $('#form_supplier_del').submit();
}


function clr_border(obj) {
    obj.style.removeProperty('border-color');
}
</script>