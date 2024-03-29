<div class="content-page">
    <div class="container-fluid">
        <form action="" method="get">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">ประวัติการขาย</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="hiredate" class="form-label">วันที่เริ่ม</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="hiredate" class="form-label">วันที่สิ้นสุด</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary" onclick="date()">ค้นหา</button>
                </div>
            </div>
        </form>

        <table class="data-tables table mb-0 tbl-server-info">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>
                        <center>ลำดับ</center>
                    </th>
                    <th>
                        <center>เลขที่การขาย</center>
                    </th>
                    <th>
                        <center>วันและเวลาที่ขาย</center>
                    </th>
                    <th>
                        <center>รหัสผู้ขาย</center>
                    </th>
                    <th>
                        <center>ชื่อลูกค้า</center>
                    </th>
                    <th>
                        <center>รหัสประเภทการรับเงิน</center>
                    </th>
                    <th>
                        <center>ยอดรวม</center>
                    </th>
                    <th>
                        <center>ภาษี</center>
                    </th>

                    <th>
                        <center>จัดการ</center>
                    </th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                <?php
                            // var_dump($order_list);
                            $count = 0;
                            foreach ($orders_list as $order_row):
                                $count++; ?>
                <tr>
                    <td>
                        <center><?php echo $count;?></center>
                    </td>
                    <td>
                        <center><?php echo $order_row["order_id"]; ?></center>
                    </td>
                    <td>
                        <center><?php echo $order_row["order_date"]; ?></center>
                    </td>
                    <td>
                        <center><?php echo $order_row["seller_id"]; ?></center>
                    </td>
                    <td>
                        <center><?php echo $order_row["customer"]; ?></center>
                    </td>
                    <td>
                        <center><?php echo ($order_row["recive_type_id"] == '1' ? "เงินสด" : "โอนเงิน"); ?>
                        </center>
                    </td>

                    <td>
                        <center><?php echo $order_row["total_price"]; ?></center>
                    </td>
                    <td>
                        <center><?php echo $order_row["vat"]; ?></center>
                    </td>

                    <td>
                        <div class="d-flex align-items-center list-action">
                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="ดู" href="#"
                                onclick="view_data('<?php echo $order_row["order_id"]; ?>')"><i
                                    class="ri-eye-line mr-0"></i></a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- viewmodal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">รายละเอียดการขาย</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="order_id" class="form-label h5">เลขที่การขาย:</label>
                            <span id="order_id"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="seller_id" class="form-label h5">รหัสผู้ขาย:</label>
                            <span id="seller_id"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="customer" class="form-label h5">ชื่อลูกค้า:</label>
                            <span id="customer"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label h5">ที่อยู่ลูกค้า:</label>
                            <span id="address"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="vat_number" class="form-label h5">เลขที่ใบกำกับภาษี:</label>
                            <span id="vat_number"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="recive_type_id" class="form-label h5">ประเภทการรับเงิน:</label>
                            <span id="recive_type_id"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="total_price" class="form-label h5">ยอดรวมสุทธิ:</label>
                            <span id="total_price"></span>บาท
                        </div>
                        <div class="col-md-6">
                            <label for="vat" class="form-label h5">ภาษี:</label>
                            <span id="vat"></span>บาท
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="table-responsive rounded mb-3 ">
                            <table class="table mb-0 tbl-server-info" id="table_order_detail">
                                <thead class="bg-white text-uppercase">
                                    <tr class="ligth ligth-data">
                                        <th>
                                            <center>รหัสยา</center>
                                        </th>
                                        <th>
                                            <center>บาร์โค้ด</center>
                                        </th>
                                        <th>
                                            <center>ชื่อยา</center>
                                        </th>
                                        <th>
                                            <center>ประเภท</center>
                                        </th>
                                        <th>
                                            <center>จำนวน</center>
                                        </th>
                                        <th>
                                            <center>หน่วย</center>
                                        </th>
                                        <th>
                                            <center>ราคาต่อหน่วย</center>
                                        </th>
                                        <th>
                                            <center>ยอดรวม</center>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="ligth-body">
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-primary" onclick="form_data()">แสดงใบเสร็จ</button>

                </div>
            </div>
        </div>
    </div>


    <!-- formmodal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xxl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">ใบเสร็จรับเงิน</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg></button>
                </div>
                <!-- SELECT o.*,u.f_name,p.pharmacy_name, od.amount,od.sale_price,o.total_price FROM orders o JOIN user u ON o.seller_id = u.user_id JOIN order_detail od ON o.order_id = od.pharmacy_id JOIN pharmacy p ON od.pharmacy_id = p.pharmacy_id; -->
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <center><label for="name_pharmacy" class="form-label h5">ร้านยา มินิฮาร์ท</label>
                                <span id="name_pharmacy"></span>
                            </center>
                        </div>
                        <div class="col-md-12">
                            <center><label for="address" class="form-label h5">222 มหาวิทยาลัยวลัยลักษณ์ ม.10 ต.ท่าศาลา
                                    อ.ท่าศาลา จ.นครศรีธรรมราช 80160</label>
                                <span id="address"></span>
                            </center>
                        </div>
                        <div class="col-md-12">
                            <center><label for="vat_no" class="form-label h5">เลขผู้เสียภาษี:CA1212100000</label>
                                <span id="vat_no"></span>
                            </center>
                        </div>
                        <div class="col-md-12">
                            <label for="f_name" class="form-label h5">ชื่อผู้ขาย:</label>
                            <span id="f_name"></span>
                        </div>
                        <div class="col-md-12">
                            <label for="date" class="form-label h5">วันและเวลาที่ขาย:</label>
                            <span id="date"></span>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <hr>
                                </hr>
                            </center>
                        </div>
                        <div class="col-12">
                            <center><label for="recpt" class="form-label h5">ใบเสร็จรับเงิน/ใบกำกับภาษีอย่างย่อ</label>
                                <span id="recpt"></span>
                            </center>
                        </div>
                        <div class="table-responsive  col-md-12">
                            <table class="table" id="table_order_receipt">
                                <thead class="text-uppercase">
                                    <tr class="ligth ligth-data">
                                        <th>
                                            <center>จำนวน</center>
                                        </th>
                                        <th>
                                            <center>รายการ</center>
                                        </th>
                                        <th>
                                            <center>ราคา</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="ligth-body">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="total" class="form-label h5">ยอดรวมสุทธิ</label>
                        <span id="total"></span> บาท
                    </div>
                    <div class="col-md-12">
                        <center>
                            <hr>
                            </hr>
                        </center>
                    </div>
                    <div class="col-md-12">
                        <center><label for="tel" class="form-label h5">เบอร์โทร:098-082-3967</label>
                            <span id="tel"></span>
                        </center>
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
</div>
</div>


<script>
function view_data(id) {
    $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getOrderSummary')?>" + "/" + id,
            data: {}
        })
        .done(function(data) {
            $.each(data.data, function(i, item) {
                console.log(item);
                $("#order_id").html(item.order_id);
                $("#seller_id").html(item.seller_id);
                $('#customer').html(item.customer);
                $('#address').html(item.address);
                $('#vat_number').html(item.vat_number);
                $('#total_price').html(item.total_price);
                $('#vat').html(item.vat);
                if (item.recive_type_id === '1') {
                    $('#recive_type_id').html('เงินสด');
                } else if (item.recive_type_id === '2') {
                    $('#recive_type_id').html('โอนเงิน');
                } else {
                    
                }
                // console.log(item.order_detail);
                $("#table_order_detail > tbody").html("");
                $.each(item.order_detail, function(j, item_detail) {
                    let tag_html = '<tr><td>' + item_detail.pharmacy_id + '</td>' +
                        '<td>' + item_detail.barcode + '</td>' +
                        '<td>' + item_detail.pharmacy_name + '</td>' +
                        '<td>' + item_detail.pharmacy_group + '</td>' +
                        '<td>' + item_detail.amount + '</td>' +
                        '<td>' + item_detail.counting_unit + '</td>' +
                        '<td>' + item_detail.sale_price + '</td>' +
                        '<td>' + (item_detail.sale_price * item_detail.amount) + '</td>' +
                        '</td></tr>';
                    $("#table_order_detail tbody").append(tag_html);

                    console.log(item_detail);
                });



            });
        });
    $('#viewModal').modal('show');
}

function form_data() {
    //alert($("#order_id").html());
    let id = $("#order_id").html();
    $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getOrderReceipt')?>" + "/" + id,
            data: {}
        })
        .done(function(data) {
            $.each(data.data, function(i, item) {
                console.log(item.order[0]);
                console.log(item.order_detail);

                $("#f_name").html(item.order[0].f_name);
                $("#total").html(item.order[0].total_price);
                $("#date").html(item.order[0].order_date);

                $("#table_order_receipt > tbody").html("");
                $.each(item.order_detail, function(j, item_detail) {
                    let tag_html = '<tr><td>' + item_detail.amount + '</td>' +
                        '<td>' + item_detail.pharmacy_name + '</td>' +
                        '<td>' + item_detail.sale_price + '</td>' +
                        '</td></tr>';
                    $("#table_order_receipt tbody").append(tag_html);

                    //     console.log(item_detail);
                });



            });
        });

    $('#formModal').modal('show');
}

function date() {
    const start_date = new Date(document.getElementById("start_date").value);
    const end_date = new Date(document.getElementById("end_date").value);
    const current_date = new Date();


    if (start_date > current_date || end_date > current_date) {
        alert("กรุณาเลือกวันที่ให้ถูกต้อง");
    } else if (start_date > end_date) {
        alert("กรุณาเลือกวันที่ให้ถูกต้อง");
    } else {

    }

}
</script>