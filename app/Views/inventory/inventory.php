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
                        <h4 class="mb-3">คลังยา</h4>
                        <!-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> -->
                    </div>
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
                                    <center>ชื่อทางการค้า</center>
                                </th>
                                <th>
                                    <center>หมวดหมู่</center>
                                </th>
                                <th>
                                    <center>จำนวนคงเหลือ</center>
                                </th>
                                <th>
                                    <center>หน่วยนับ</center>
                                </th>
                                <th>
                                    <center>ราคาขาย</center>
                                </th>
                                <th>
                                    <center>ต้นทุนเฉลี่ย</center>
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            <?php
                            // var_dump($lot_list);
                            $count = 0;
                            foreach ($inventory_list as $row):
                                $count++; ?>
                            <tr>
                                <td>
                                    <center><?php echo $count;?></center>
                                </td>
                                <td>
                                    <center><?php echo $row["pharmacy_id"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row["pharmacy_name"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row["pharmacy_type_name"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row["total_remain"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row["counting_unit"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row["price"]; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row["average_cost"]; ?></center>
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