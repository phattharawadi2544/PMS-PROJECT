<div class="content-page">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">ประเภทการรับเงิน</h4>
                        <!-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> -->
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"
                        data-bs-whatever="@mdo">เพิ่มการรับเงิน</button>
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
                                    <center>รหัสประเภทการรับ</center>
                                </th>
                                <th>
                                    <center>ชื่อประเภทการรับ</center>
                                </th>
                                <th>
                                    <center>จัดการ</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            <?php 
                        
                        // var_dump($recive_type_list);
                        $count = 0;
                        foreach($recive_type_list as $recive_row):$count++; ?>
                            <tr>

                                <td>
                                    <center><?php echo $count;?></center>
                                </td>
                                <td>
                                    <center><?php echo  $recive_row["recive_type_id"];?></center>
                                </td>

                                <td>
                                    <center><?php echo  $recive_row["recive_name"];?></center>
                                </td>



                                <td>
                                    <center>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="ลบ" href="#"
                                                onclick="delete_data('<?php echo $recive_row["recive_type_id"]; ?>')"><i
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
                            <label for="input_barcode" class="form-label">ชื่อประเภทการรับเงิน</label>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_pharmacy()">บันทึก</button>
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
                    <p>ข้อมูลประเภทการรับเงิน</p>
                    <form class="row g-3" id="form__recive_type_del" method="post"
                        action="<?php echo site_url('del__recive_type'); ?>">
                        <div class="col-md-12">
                            <label for="del__recive_type_id" class="form-label">รหัสประเภทการรับ</label>
                            <input type="text" class="form-control was-validated" id="del__recive_type_id"
                                name="_recive_type_id" onchange="clr_border(this);" readonly>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-primary" onclick="save_del_recive_type()">ยืนยันการลบ</button>
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

    if (ch) {
        $('#form_pharmacy_new').submit();
    } else {
        alert("กรุณากรอกข้อมูลให้ครบ");
    }

}

function delete_data(id) {
    $("#del_recive_type_id").val(id);
    $('#dedeteModal').modal('show');
}

function save_del_recive_type() {
    $('#form_recive_type_del').submit();
}

function clr_border(obj) {
    obj.style.removeProperty('border-color');
}
</script>