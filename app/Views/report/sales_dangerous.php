<div class="content-page">
    <div class="container-fluid">
        <form action="" method="get">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">รายงานบัญชีการขายยาอันตราย</h4>
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
function new_item() {
            let pha_id = $('#pha_id').val();
            let amount = $('#amount').val();
            let barcode = $('#barcode').val();
            const customer_name = $('#customer_name').val().trim();
            

            if (pha_id == "") {
                alert("กรุณาเลือกรายการยา");
            } else if (amount == "" || amount < 1) {
                alert("กรุณาระบุจำนวน");
            } else if (pha_special(barcode) || pha_danger(barcode)) {
                if (!customer_name) {
                    alert("กรุณาระบุชื่อลูกค้า");
                }
            } else {

                $.ajax({
                        method: "GET",
                        url: "<?php echo site_url('api/getPharmacy')?>" + "/" + pha_id,
                        data: {}
                    })
                    .done(function(data) {
                        console.log(data);
                        $.each(data.data, function(i, item) {
                            let phamacy_detail = amount + "||" + item.pharmacy_name + "||" + (item
                                .price *
                                amount + "||" + item.pharmacy_id);
                            let tag_html = '<tr><td>' + item.pharmacy_name + '</td>' +
                                '<td>' + amount + '</td>' +
                                '<td>' + item.price + '</td>' +
                                '<td>' + (item.price * amount) +
                                ' <input type="hidden" class="phamacy_detail" value="' +
                                phamacy_detail +
                                '">' +
                                ' <input type="hidden" class="price_detail" value="' + (item.price *
                                    amount) +
                                '"></td>' +
                                '<td><button type="button" class="btn btn-sm btn-warning delete-row phamacy_list" onclick="delete_phamact_list(this) ;">ลบ</button>' +
                                '</td></tr>';
                            $("#table_order_detail tbody").append(tag_html);
                            display_totalprice();
                        });
                    });
                $('#pha_id').val("");
                $('#barcode').val("");
                $('#name').val("");
                $('#amount').val("");
            }
            caluate_price_sum();
        }
</script>