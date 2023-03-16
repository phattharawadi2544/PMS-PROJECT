<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="card card-transparent card-block card-stretch card-height border-none">
                    <div class="card-body p-0 mt-lg-2 mt-0">
                        <h4 class="mb-3">สร้างใบสั่งซื้อ</h4>

                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card auth-card">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                            <div class="col-lg-12 align-self-center">
                                <div class="p-3">
                                    <h6 class="card-title">ข้อมูลผู้ซื้อ</h6>
                                    <form>
                                        <div class="form-row">
                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="ชื่อลูกค้า" id="customer_name">
                                            </div>
                                            <div class="col-5">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="ที่อยู่" >
                                            </div>
                                            <div class="col-3">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="เลขผู้เสียภาษี">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card auth-card">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                            <div class="col-lg-12 align-self-center">
                                <div class="p-3">
                                    <h6 class="card-title">เพิ่มรายการขาย</h6>
                                    <form>
                                        <div class="form-row">
                                            <div class="col-3">
                                                <input type="hidden" name="" id="pha_id">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="บาร์โค้ด" id="barcode" onchange="search_barcode()" ;>
                                            </div>
                                            <div class="col-5">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="ชื่อยา" id="name" readonly>
                                            </div>
                                            <div class="col-1">
                                                <input type="number" class="form-control form-control-sm"
                                                    placeholder="จำนวน" id="amount">
                                            </div>
                                            <div class="col-3">
                                                <input type="button" class="btn btn-sm btn-primary add-row"
                                                    value="เพิ่ม" onclick="new_item()">
                                                <button type="button" class="btn btn-sm btn-primary"
                                                    onclick="search_item()"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <table class="table table-sm" id="table_order_detail">
                                        <thead>
                                            <tr class="ligth">
                                                <th scope="col">ชื่อยา</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">ราคาต่อหน่วย</th>
                                                <th scope="col">ราคา</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card auth-card">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                            <div class="col-lg-12 align-self-center">
                                <div class="form-row">
                                    <div class="col-7 h6">
                                        จำนวนทั้งหมด
                                    </div>
                                    <div class="col-3 h6">
                                        <span id="total_amount_sum"></span>
                                    </div>
                                    <div class="col-2 h6">
                                        รายการ
                                    </div>
                                    <div class="col-7 h6">
                                        ยอดรวมสุทธิ
                                    </div>
                                    <div class="col-3 h6">
                                        <span id="total_price_sum"></span>
                                    </div>
                                    <div class="col-2 h6">
                                        บาท
                                    </div>
                                    <div class="col-7 h6">
                                        ภาษี 7.00%
                                    </div>
                                    <div class="col-3 h6">
                                        <span id="total_vat"></span>
                                    </div>
                                    <div class="col-2 h6">
                                        บาท
                                    </div>
                                    <div class="col-7 h4">
                                        ยอดรวมทั้งหมด
                                    </div>
                                    <div class="col-3 h4">
                                        <span id="total"></span>
                                    </div>
                                    <div class="col-2 h4">
                                        บาท
                                    </div>
                                </div>

                                <div class="col-6">
                                    <select class="form-control form-control-sm mb-3" id="payment_type">
                                        <option value="1" selected>เงินสด</option>
                                        <option value="2">โอนเงิน</option>
                                    </select>

                                    <input type="text" class="form-control form-control-sm" placeholder="ระบุจำนวนเงิน"
                                        id="money_pay" onchange="pay_change()" ;>
                                    <input type="text" class="form-control form-control-sm" placeholder="เงินทอน"
                                        id="change" readonly>
                                </div>

                                <div class="modal-footer">

                                    <button type="button" class="btn btn-primary" onclick="pay_summery()"
                                        data-bs-whatever="@mdo">ยืนยันการขาย</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="viewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">ค้นหายา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive rounded mb-3">
                        <table class="data-tables table mb-0 tbl-server-info">
                            <thead class="bg-white text-uppercase">
                                <tr class="ligth ligth-data">
                                    <th>รหัสยา</th>
                                    <th>ชื่อยา</th>
                                    <th>หมวดหมู่</th>
                                    <th>จำนวน</th>
                                    <th>หน่วยนับ</th>
                                    <th></th>
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
                                        <?php echo  $phamacy_row["pharmacy_id"];?>
                                    </td>

                                    <td>
                                        <?php echo  $phamacy_row["pharmacy_name"];?>
                                    </td>
                                    <td>
                                        <?php echo ($phamacy_row["pharmacy_group"] == '1' ? "ยาสามัญประจำบ้าน" : "ยาควบคุมพิเศษ" ); ?>
                                    </td>
                                    <td>
                                        <?php echo  $phamacy_row["price"];?>
                                    </td>
                                    <td>
                                        <?php echo  $phamacy_row["counting_unit"];?>
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary "
                                            onclick="selected_pha('<?php echo $phamacy_row['pharmacy_id'];?>','<?php echo $phamacy_row['barcode'];?>','<?php echo $phamacy_row['pharmacy_name'];?>');">
                                            เลือก</button>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-primary">เลือก</button>
                </div>
            </div>
        </div>
    </div>



    <!-- newmodal -->
    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">รายการขาย</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_pharmacy_new" method="post"
                        action="<?php echo site_url('add_order_detail'); ?>">

                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="ชื่อลูกค้า" id="customer"
                                readonly>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm" placeholder="เงินสด" id="payment_type_detail" 
                                readonly>
                        </div>

                        <table class="table" id="table_order_detail_summery">
                            <thead>
                                <tr>
                                    <th scope="col">จำนวน</th>
                                    <th scope="col">ชื่อยา</th>
                                    <th scope="col">ราคา</th>
                                </tr>
                            </thead>
                            <tbody>

                                        </tbody>
                        </table>
                        <div class="col-7 h4">
                            ยอดรวมทั้งหมด
                        </div>
                        <div class="col-3 h4">
                            <span id="total_summery"></span>
                        </div>
                        <div class="col-2 h4">
                            บาท
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_pharmacy()">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>




    <script>
    function search_item() {
        $('#viewModal').modal('show');
    }

    function selected_pha(pha_id, barcode, name) {
        // alert(pha_id);
        $('#pha_id').val(pha_id);
        $('#barcode').val(barcode);
        $('#name').val(name);
        $('#amount').val(1);


        $('#viewModal').modal('hide');
    }

    function pay_summery() {

        
       let customer_name = $('#customer_name').val();
       let payment_type = $('#payment_type').val();
       let total = $("#total").html();

       $('#total_summery').html(total);
       $('#customer').val(customer_name);
       $('#payment_type_detail').val((payment_type == '1') ? 'เงินสด' :'โอนเงิน');
       $("#table_order_detail_summery > tbody").html("");

       let price_list = $(".phamacy_detail");
        $.each(price_list, function(key, v) {
            let arr = v.value.split("||");
            console.log(arr[0]);
            console.log(arr[1]);
            console.log(arr[2]);

            let tag_html = '<tr><td>' + arr[0]+ '</td>' +
                            '<td>' + arr[1] + '</td>' +
                            '<td>' + arr[2] + '</td>' +
                            '</tr>';
                        $("#table_order_detail_summery tbody").append(tag_html);
        });
        console.log(price_list);

        $('#newModal').modal('show');


    }



    function caluate_price_sum() {
        let price_list = $(".price_detail");
        $.each(price_list, function(key, v) {
            console.log(v.value);
        });
        console.log(price_list);

    }


    function new_item() {
        let pha_id = $('#pha_id').val();
        let amount = $('#amount').val();
        let barcode = $('#barcode').val();
        if (pha_id == "") {
            alert("กรุณาเลือกรายการยา");
        } else if (amount == "" || amount < 1) {
            alert("กรุณาระบุจำนวน");
        } else {

            $.ajax({
                    method: "GET",
                    url: "<?php echo site_url('api/getPharmacy')?>" + "/" + pha_id,
                    data: {}
                })
                .done(function(data) {
                    console.log(data);
                    $.each(data.data, function(i, item) {
                        let phamacy_detail = amount+"||"+item.pharmacy_name+"||"+ (item.price * amount);
                        let tag_html = '<tr><td>' + item.pharmacy_name + '</td>' +
                            '<td>' + amount + '</td>' +
                            '<td>' + item.price + '</td>' +
                            '<td>' + (item.price * amount) +
                            ' <input type="hidden" class="phamacy_detail" value="' + phamacy_detail +'">'+
                            ' <input type="hidden" class="price_detail" value="' + (item.price * amount) +
                            '"></td>' +
                            '<td><button type="button" class="btn btn-sm btn-warning delete-row phamacy_list" onclick="delete_phamact_list(this) ;">ลบ</button>' +
                            '</td></tr>';
                        $("#table_order_detail tbody").append(tag_html);

                        var total_price = 0;
                        var total_amount = 0;

                        let price_list = $(".price_detail");
                        $.each(price_list, function(key, v) {
                            // console.log(v.value);
                            total_price = parseFloat(total_price) + parseFloat(v.value);
                            total_amount++;
                        });
                        let total_vat = (total_price * 7) / 100;


                        $("#total_amount_sum").html(total_amount);
                        $("#total_price_sum").html(Number(total_price).toFixed(2));
                        $("#total_vat").html(Number(total_vat).toFixed(2));
                        $("#total").html(total_price + total_vat);

                        console.log(total_price);
                        console.log(total_amount);

                    });
                });
            $('#pha_id').val("");
            $('#barcode').val("");
            $('#name').val("");
            $('#amount').val("");
        }
        caluate_price_sum();
    }

    function pay_change() {
        let money_pay = $('#money_pay').val();
        let total = $("#total").html();
        let change = money_pay - total;

        $("#change").val(Number(change).toFixed(2));
        console.log(total);
        console.log(money_pay);
        console.log(change);


    }

    function search_barcode() {
        let barcode = $('#barcode').val()
        if (barcode == "") {
            alert("กรุณาระบุบาร์โค้ด");
        } else {
            // alert(barcode);

            $.ajax({
                    method: "GET",
                    url: "<?php echo site_url('api/getPharmacybybarcode')?>" + "/" + barcode,
                    data: {}
                })
                .done(function(data) {
                    console.log(data);
                    if (data.data.length > 0) {
                        $.each(data.data, function(i, item) {
                            $('#pha_id').val(item.pharmacy_id);
                            $('#barcode').val(item.barcode);
                            $('#name').val(item.pharmacy_name);
                            $('#amount').val(1);

                        });
                    } else {
                        alert("ไม่พบรายการยา บาร์โค้ด " + barcode);
                    }

                });
            $('#pha_id').val("");
            $('#barcode').val("");
            $('#name').val("");
            $('#amount').val("");

        }
    }



    function delete_phamact_list(x) {
        var listItem = $(".phamacy_list");
        // $("#table_order_detail").deleteRow(listItem.index(x));
        console.log(listItem.index(x));
        console.log(x);
    }
    </script>





    <!-- Page end  -->
</div>
</div>