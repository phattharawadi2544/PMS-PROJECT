<div class="content-page">
    <div class="container-fluid">
        <form action="" method="get">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">รายงานบัญชีการขายยาควบคุมพิเศษ</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="hiredate" class="form-label">วันที่เริ่ม</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="hiredate" class="form-label">วันที่สิ้นสุด</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
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
                        <center>วัน/เดือน/ปีที่ขาย</center>
                    </th>

                    <th>
                        <center>จำนวน/ปริมาณที่ขาย</center>
                    </th>
                    <th>
                        <center>ชื่อ-สกุลผู้ชื้อ</center>
                    </th>
                    <th>
                        <center>ชื่อ-สกุลผู้ขาย</center>
                    </th>
                    <th>
                        <center>จัดการ</center>
                    </th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                <td></td>
            </tbody>
        </table>
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
                $('#recive_type_id').html(item.recive_type_id);
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

function date() {
    const startDate = new Date(document.getElementById("start_date").value);
    const endDate = new Date(document.getElementById("end_date").value);
    const currentDate = new Date();


    if (startDate > currentDate || endDate > currentDate) {
        alert("กรุณาเลือกวันที่ให้ถูกต้อง");
    } else if (startDate > endDate) {
        alert("กรุณาเลือกวันที่ให้ถูกต้อง");
    } else {

    }
}
</script>