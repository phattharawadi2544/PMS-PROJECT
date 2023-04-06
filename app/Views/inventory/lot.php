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
                        <h4 class="mb-3">จัดการรายการซื้อ</h4>
                        <!-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> -->
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"
                        data-bs-whatever="@mdo">บันทึกการซื้อยา</button>
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
                                    <center>รหัสคลัง</center>
                                </th>
                                <th>
                                    <center>รหัสยา</center>
                                </th>
                                <th>
                                    <center>รหัสผู้ขาย</center>
                                </th>
                                <th>
                                    <center>วันที่นำเข้า</center>
                                </th>
                                <th>
                                    <center>เลขที่ครั้งที่ผลิต</center>
                                </th>
                                <th>
                                    <center>วันที่ผลิต</center>
                                </th>
                                <th>
                                    <center>วันหมดอายุ</center>
                                </th>
                                <th>
                                    <center>จำนวน</center>
                                </th>
                                <th>
                                    <center>จำนวนคงเหลือ</center>
                                </th>
                                <th>
                                    <center>ราคาทุน</center>
                                </th>

                                <th>
                                    <center>จัดการ</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            <?php
                            // var_dump($lot_list);
                            $count = 0;
                            foreach ($lot_list as $lot_row):
                                $count++; ?>
                            <tr>
                                <td>
                                    <center><?php echo $count;?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["lot_id"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["pharmacy_id"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["id_supplie"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["import_date"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["batch_no"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["manu_date"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["exp_date"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["amount"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["remain"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $lot_row["cost_price"]; ?></center>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="แก้ไข" href="#"
                                            onclick="edit_data('<?php echo $lot_row["lot_id"]; ?>')"><i
                                                class="ri-pencil-line mr-0"></i></a>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="ลบ" href="#"
                                            onclick="delete_data('<?php echo $lot_row["lot_id"]; ?>')"><i
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

    <!-- new modal -->
    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกการซื้อยา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg></button>
                </div>

                <div class="modal-body">
                    <form class="row g-3" id="form_lot_new" method="post" action="<?php echo site_url('add_lot'); ?>">
                        <div class="col-md-6">
                            <label for="inputimport" class="form-label">วันที่นำเข้า *</label>
                            <input type="date" class="form-control" id="inputimport" name="import_date"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputpharmacy" class="form-label">รหัสยา *</label>
                            <select name="pharmacy_id" id="inputpharmacy" class="form-control">
                                <?php  foreach ($pharmacy_list as $row): 
                                echo '<option value="'.$row['pharmacy_id'].'">'.$row['pharmacy_name'].'</option>';
                                
                                endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputsupplie" class="form-label">รหัสผู้ขาย *</label>
                            <select name="id_supplier" id="inputsupplie" class="form-control">
                                <?php  foreach ($supplier_list as $row): 
                                echo '<option value="'.$row['id_supplier'].'">'.$row['company_name'].'</option>';
                                
                                endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputbatch" class="form-label">เลขที่ครั้งที่ผลิต *</label>
                            <input type="text" class="form-control was-validated" id="inputbatch" name="batch_no"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputmanu" class="form-label">วันที่ผลิต *</label>
                            <input type="date" class="form-control" id="inputmanu" name="manu_date"
                                onchange="clr_border(this);">
                        </div>

                        <div class="col-md-6">
                            <label for="inputexp" class="form-label">วันหมดอายุ *</label>
                            <input type="date" class="form-control" id="inputexp" name="exp_date"
                                onchange="clr_border(this);">
                        </div>

                        <div class="col-md-6">
                            <label for="inputamount" class="form-label">จำนวน *</label>
                            <input type="number" class="form-control" id="inputamount" name="amount"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputcost" class="form-label">ราคาทุน *</label>
                            <input type="number" class="form-control" id="inputcost" name="cost_price"
                                onchange="clr_border(this);">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_lot()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>


    <!-- edit modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกการซื้อยา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg></button>
                </div>

                <div class="modal-body">
                    <form class="row g-3" id="form_lot_edit" method="post" action="<?php echo site_url('edit_lot'); ?>">
                        <div class="col-md-4">
                            <label for="editlotid" class="form-label">รหัสคลัง *</label>
                            <input type="text" class="form-control was-validated" id="editlotid" name="lot_id"
                                onchange="clr_border(this);" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="editpharmacy" class="form-label">รหัสยา *</label>
                            <input type="text" class="form-control was-validated" id="editpharmacy" name="pharmacy_id"
                                onchange="clr_border(this);" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="editsupplie" class="form-label">รหัสผู้ขาย *</label>
                            <input type="text" class="form-control was-validated" id="editsupplie" name="id_supplie"
                                onchange="clr_border(this);" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="editimport" class="form-label">วันที่นำเข้า *</label>
                            <input type="date" class="form-control" id="editimport" name="import_date"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="editbatch" class="form-label">เลขที่ครั้งที่ผลิต *</label>
                            <input type="text" class="form-control was-validated" id="editbatch" name="batch_no"
                                onchange="clr_border(this);">
                        </div>

                        <div class="col-md-6">
                            <label for="editmanu" class="form-label">วันที่ผลิต *</label>
                            <input type="date" class="form-control" id="editmanu" name="manu_date"
                                onchange="clr_border(this);">
                        </div>

                        <div class="col-md-6">
                            <label for="editexp" class="form-label">วันหมดอายุ *</label>
                            <input type="date" class="form-control" id="editexp" name="exp_date"
                                onchange="clr_border(this);">
                        </div>

                        <div class="col-md-6">
                            <label for="editamount" class="form-label">จำนวน *</label>
                            <input type="number" class="form-control" id="editamount" name="amount"
                                onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="editcost" class="form-label">ราคาทุน *</label>
                            <input type="number" class="form-control" id="editcost" name="cost_price"
                                onchange="clr_border(this);">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_edit_lot()">บันทึก</button>
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
                    <p>ข้อมูลที่ต้องการลบ</p>
                    <form class="row g-3" id="form_lot_del" method="post" action="<?php echo site_url('del_lot'); ?>">
                        <div class="col-md-12">
                            <label for="del_lotid" class="form-label">รหัสคลัง</label>
                            <input type="text" class="form-control was-validated" id="del_lotid" name="lot_id"
                                onchange="clr_border(this);" readonly>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-primary" onclick="save_del_lot()">ยืนยันการลบ</button>
                </div>
            </div>
        </div>
    </div>



</div>

<script>
function save_lot() {
    let ch = true;

    if ($("#inputbatch").val().trim().length == 0) {
        ch = false;
        $("#inputbatch").css("border-color", "red");
    }
    if ($("#inputmanu").val().trim().length == 0) {
        ch = false;
        $("#inputmanu").css("border-color", "red");
    }
    if ($("#inputimport").val().trim().length == 0) {
        ch = false;
        $("#inputimport").css("border-color", "red");
    }
    if ($("#inputsupplie").val().trim().length == 0) {
        ch = false;
        $("#inputsupplie").css("border-color", "red");
    }
    if ($("#inputpharmacy").val().trim().length == 0) {
        ch = false;
        $("#inputpharmacy").css("border-color", "red");
    }
    if ($("#inputexp").val().trim().length == 0) {
        ch = false;
        $("#inputexp").css("border-color", "red");
    }
    if ($("#inputamount").val().trim().length == 0) {
        ch = false;
        $("#inputamount").css("border-color", "red");
    }
    if ($("#inputcost").val().trim().length == 0) {
        ch = false;
        $("#inputcost").css("border-color", "red");
    }
    if (ch) {
        $('#form_lot_new').submit();
    } else {
        alert("กรุณากรอกข้อมูลให้ครบ");
    }
}

function save_edit_lot() {
    let ch = true;

    if ($("#editbatch").val().trim().length == 0) {
        ch = false;
        $("#editbatch").css("border-color", "red");
    }
    if ($("#editmanu").val().trim().length == 0) {
        ch = false;
        $("#editmanu").css("border-color", "red");
    }
    if ($("#editimport").val().trim().length == 0) {
        ch = false;
        $("#editimport").css("border-color", "red");
    }
    if ($("#editexp").val().trim().length == 0) {
        ch = false;
        $("#editexp").css("border-color", "red");
    }
    if ($("#editamount").val().trim().length == 0) {
        ch = false;
        $("#editamount").css("border-color", "red");
    }
    if ($("#editcost").val().trim().length == 0) {
        ch = false;
        $("#editcost").css("border-color", "red");
    }
    if (ch) {
        $('#form_lot_edit').submit();
    } else {
        alert("กรุณากรอกข้อมูลให้ครบ");
    }

}

function edit_data(id) {
    $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getLot')?>" + "/" + id,
            data: {}
        })
        .done(function(data) {
            $.each(data.data, function(i, item) {
                $("#editlotid").val(item.lot_id);
                $('#editsupplie').val(item.id_supplie);
                $('#editpharmacy').val(item.pharmacy_id);
                $('#editbatch').val(item.batch_no);
                $('#editmanu').val(item.manu_date);
                $('#editimport').val(item.import_date);
                $('#editexp').val(item.exp_date);
                $('#editamount').val(item.amount);
                $('#editcost').val(item.cost_price);


            });
        });
    $('#editModal').modal('show');
}

function delete_data(id) {
    $("#del_lotid").val(id);
    $('#dedeteModal').modal('show');
}

function save_del_lot() {
    $('#form_lot_del').submit();
}


function clr_border(obj) {
    obj.style.removeProperty('border-color');
}
</script>