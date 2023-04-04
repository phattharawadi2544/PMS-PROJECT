<?php  $session = session(); ?>
<div class="content-page">
    <div class="container-fluid">
        <?php  if($session->getFlashdata('message_session')=='201'){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            บันทึกรายการแล้ว
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php }?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card card-transparent card-block card-stretch card-height border-none">
                        <div class="card-body p-0 mt-lg-2 mt-0">
                            <h4 class="mb-3">รายการขาย</h4>

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
                                                        placeholder="ที่อยู่" id="customer_address">
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="เลขผู้เสียภาษี" id="customer_vat_no">
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
                                                        placeholder="บาร์โค้ด" id="barcode" onchange="search_barcode()"
                                                        ;>
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
                                                    <th scope="col">
                                                        <center>ชื่อยา</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>จำนวน</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>ราคาต่อหน่วย</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>ราคา</center>
                                                    </th>
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
                                            ยอดรวม
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
                                            ยอดรวมสุทธิ
                                        </div>
                                        <div class="col-3 h4">
                                            <span id="total"></span>
                                        </div>
                                        <div class="col-2 h4">
                                            บาท
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <select class="form-control form-control-sm mb-3" id="recive_type">
                                            <option value="1" selected>เงินสด</option>
                                            <option value="2">โอนเงิน</option>
                                        </select>

                                        <input type="number" class="form-control form-control-sm"
                                            placeholder="ระบุจำนวนเงิน" id="money_pay" onchange="pay_change()" ;>
                                        <input type="text" class="form-control form-control-sm" placeholder="เงินทอน"
                                            id="change" readonly>
                                    </div>

                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-primary" onclick="pay_summary()"
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
                                        <th>
                                            <center>ลำดับ</center>
                                        </th>
                                        <th>
                                            <center>รหัสยา</center>
                                        </th>
                                        <th>
                                            <center>ชื่อยา</center>
                                        </th>
                                        <th>
                                            <center>หมวดหมู่</center>
                                        </th>
                                        <th>
                                            <center>จำนวน</center>
                                        </th>
                                        <th>
                                            <center>หน่วยนับ</center>
                                        </th>
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
                                            <center><?php echo $count; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo  $phamacy_row["pharmacy_id"];?></center>
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
                                            <center><button type="button" class="btn btn-sm btn-primary "
                                                    onclick="selected_pha('<?php echo $phamacy_row['pharmacy_id'];?>','<?php echo $phamacy_row['barcode'];?>','<?php echo $phamacy_row['pharmacy_name'];?>');">
                                                    เลือก</button></center>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary" onclick="choose_pharmacy()">เลือก</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- form_order_detail -->
        <div class="modal fade" id="form_order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form class="row g-3" id="form_order_detail" method="post"
                            action="<?php echo site_url('add_order'); ?>">
                            <!-- <input type="hidden" name="customer" id="add_customer"> -->
                            <input type="hidden" name="total_price" id="add_total_price">
                            <!-- <input type="hidden" name="vat" id="add_vat"> -->
                            <input type="hidden" name="recive_type" id="add_recive_type">
                            <input type="hidden" name="vat_number" id="add_vat_number">
                            <input type="hidden" name="address" id="add_address">
                            
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-sm" placeholder="ลูกค้าทั่วไป"
                                    id="customer" readonly name="customer">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-sm" placeholder="เงินสด"
                                    id="recive_type_detail" readonly>
                            </div>
                            <br></br>
                            <div class="col-7 h5">
                                ยอดรวมสุทธิ
                            </div>
                            <div class="col-3 h5">
                                <span id="total_summary"></span>
                            </div>
                            <div class="col-2 h5">
                                บาท
                            </div>
                            <div class="col-7 h5">
                                จำนวนเงิน
                            </div>
                            <div class="col-3 h5">
                                <span id="pay_detail"></span>
                            </div>
                            <div class="col-2 h5">
                                บาท
                            </div>
                            <div class="col-7 h5">
                                เงินทอน
                            </div>
                            <div class="col-3 h5">
                                <span id="change_detail"></span>
                            </div>
                            <div class="col-2 h5">
                                บาท
                            </div>
                            <table class="table" id="table_order_detail_summary">
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
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary" onclick="save_order_detail()">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>



        <script>
        function search_item() {
            $('#viewModal').modal('show');
        }

        function selected_pha(pha_id, barcode, name) {
            $('#pha_id').val(pha_id);
            $('#barcode').val(barcode);
            $('#name').val(name);
            $('#amount').val(1);


            $('#viewModal').modal('hide');
        }

        function pay_summary() {

            let money_pay = $('#money_pay').val();
            let customer_name = $('#customer_name').val();
            let address = $('#customer_address').val();
            let vat = $('#vat').val();
            let vat_number = $('#customer_vat_no').val();
            let recive_type = $('#recive_type').val();

            let total = $("#total").html();
            let = total_price_sum = $("#total_price_sum").html();
            let chk_phamacy_list = false;
            let change = $("#change").val();

            $("#table_order_detail_summary > tbody").html("");
            let price_list = $(".phamacy_detail");
            $.each(price_list, function(key, v) {
                chk_phamacy_list = true;
                let arr = v.value.split("||");
                let tag_html = '<tr><td>' + arr[0] + '</td>' +
                    '<input type="hidden" name="phamacyID[]" value="' + arr[3] + '">' +
                    '<input type="hidden" name="amount[]" value="' + arr[0] + '">' +
                    '<td>' + arr[1] + '</td>' +
                    '<td>' + arr[2] + '</td>' +
                    '</tr>';
                $("#table_order_detail_summary tbody").append(tag_html);
            });
            console.log(price_list);

            $('#total_summary').html(Number(total).toFixed(2));
            $('#customer').val(customer_name);
            $('#recive_type_detail').val((recive_type == '1') ? 'เงินสด' : 'โอนเงิน');
            $("#change_detail").html(Number(change).toFixed(2));
            $("#pay_detail").html(Number(money_pay).toFixed(2));
            $('#add_total_price').val(total_price_sum);
            $('#add_address ').val(address);
            $('#add_vat_number').val(vat_number);
            $('#add_recive_type').val(recive_type);

            if (chk_phamacy_list == false) {
                alert("กรุณาเลือกรายการสินค้า");
            } else if (money_pay == "" || (parseFloat(money_pay) < parseFloat(total))) {
                alert("กรุณาระบุจำนวนเงินให้ถูกต้อง");
            } else {
                $('#form_order').modal('show');
            }
        }

        function caluate_price_sum() {
            let price_list = $(".price_detail");
            $.each(price_list, function(key, v) {
                console.log(v.value);
            });
            console.log(price_list);

        }

        function display_totalprice() {
            var total_price = 0;
            var total_amount = 0;

            let price_list = $(".price_detail");
            $.each(price_list, function(key, v) {
                total_price = parseFloat(total_price) + parseFloat(v.value);
                total_amount++;
            });
            let total_vat = (total_price * 7) / 100;

            $("#total_amount_sum").html(total_amount);
            $("#total_price_sum").html(Number(total_price).toFixed(2));
            $("#total_vat").html(Number(total_vat).toFixed(2));
            $("#total").html(total_price + total_vat);
            pay_change();
        }

        function new_item() {
            let pha_id = $('#pha_id').val();
            let amount = $('#amount').val();
            let remain = $('#remain').val();
            let barcode = $('#barcode').val();
            const customer_name = $('#customer_name').val().trim();


            if (pha_id == "") {
                alert("กรุณาเลือกรายการยา");
            } else if (amount == "" || amount < 1) {
                alert("กรุณาระบุจำนวน");
            } else if (amount > remain) {
                alert("จำนวนไม่เพียงพอ");
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

        function pay_change() {
            let money_pay = $('#money_pay').val();
            if (money_pay != "") {
                let total = $("#total").html();
                let change = money_pay - total;
                $("#change").val(Number(change).toFixed(2));
            }
        }

        function search_barcode() {
            let barcode = $('#barcode').val()
            if (barcode == "") {
                alert("กรุณาระบุบาร์โค้ด");
            } else {
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

        function save_order_detail() {
            $('#form_order_detail').submit();

        }



        function delete_phamact_list(x) {
            var listItem = $(".phamacy_list");
            let row = listItem.index(x);

            alert(row + 1);
            $("#table_order_detail tbody").find("tr:eq(" + row + ")").remove();
            display_totalprice();
        }
        </script>





        <!-- Page end  -->
    </div>
</div>