<?php  $session = session(); ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="container-fluid">
            <?php  if($session->getFlashdata('message_session')=='111'){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                บันทึกข้อมูลสำเร็จ
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }?>
            <?php  if($session->getFlashdata('message_session')=='113'){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                ลบข้อมูลสำเร็จ
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">ประเภทยา</h4>

                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"
                            data-bs-whatever="@mdo">เพิ่มประเภทยา</button>
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
                                        <center>รหัสประเภทยา</center>
                                    </th>
                                    <th>
                                        <center>ชื่อประเภทยา</center>
                                    </th>
                                    <th>
                                        <center>จัดการ</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                <?php 
                        
                        // var_dump($pharmacy_group);
                        $count = 0;
                        foreach($pharmacy_group as $pharmacy_row):$count++; ?>
                                <tr>
                                    <td>
                                        <center><?php echo $count;?></center>
                                    </td>
                                    <td>
                                        <center><?php echo  $pharmacy_row["id_pharmacy_type"];?></center>
                                    </td>
                                    <td>
                                        <center><?php echo  $pharmacy_row["pharmacy_type_name"];?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="ลบ" href="#"
                                                    onclick="delete_data('<?php echo $pharmacy_row["id_pharmacy_type"]; ?>')"><i
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
    </div>
</div>

<!-- newmodal -->
<div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มประเภทยา</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                    </svg></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" id="form_pharmacy_type_new" method="post"
                    action="<?php echo site_url('add_pharmacy_type'); ?>">
                    <div class="col-md-12">
                        <label for="input_pharmacy_type_name" class="form-label">ชื่อประเภทยา *</label>
                        <input type="text" class="form-control was-validated" id="input_pharmacy_type_name"
                            name="pharmacy_type_name" onchange="clr_border(this);">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-primary" onclick="save_pharmacy_type()">บันทึก</button>
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
                <p>ข้อมูลประเภทยา</p>
                <form class="row g-3" id="form_pharmacy_type_del" method="post"
                    action="<?php echo site_url('delete_pharmacy_type'); ?>">
                    <div class="col-md-12">
                        <label for="del_id_pharmacy_type" class="form-label">รหัสประเภทยา</label>
                        <input type="text" class="form-control was-validated" id="del_id_pharmacy_type"
                            name="id_pharmacy_type" onchange="clr_border(this);" readonly>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary" onclick="save_del_pharmacy_type()">ยืนยันการลบ</button>
            </div>
        </div>
    </div>
</div>

<script>
function save_pharmacy_type() {
    let ch = true;
    if ($("#input_pharmacy_type_name").val().trim().length == 0) {
        ch = false;
        $("#input_pharmacy_type_name").css("border-color", "red");
    }

    if (ch) {
        $('#form_pharmacy_type_new').submit();
    } else {
        alert("กรุณากรอกข้อมูลให้ครบ");
    }

}


function delete_data(id) {
    $("#del_id_pharmacy_type").val(id);
    $('#dedeteModal').modal('show');
}

function save_del_pharmacy_type() {
    $('#form_pharmacy_type_del').submit();
}

function clr_border(obj) {
    obj.style.removeProperty('border-color');
}
</script>