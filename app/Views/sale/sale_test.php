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
                                                            placeholder="ชื่อลูกค้า">
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="ที่อยู่">
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
                                                            placeholder="บาร์โค้ด" id="barcode"
                                                            onchange="search_barcode()" ;>
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
                                                            onclick="search_item()"><i
                                                                class="ri-search-line"></i></button>
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
                                        <h6 class="card-title">จำนวนทั้งหมด</h6>
                                        <h6 class="card-title">ยอดรวมสุทธิ</h6>
                                        <h6 class="card-title">ภาษี</h6>
                                        <h1 class="card-title">รวมทั้งหมด</h1>
                                        <div class="col-6">
                                            <select class="form-control form-control-sm mb-3">
                                                <option selected="">ประเภทการรับเงิน</option>
                                                <option value="1">เงินสด</option>
                                                <option value="2">โอนเงิน</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">ยืนยันการขาย</button>
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

            function new_item() {
                let pha_id = $('#pha_id').val();
                let amount = $('#amount').val();
                let barcode = $('#barcode').val();
                if (pha_id == "") {
                    alert("กรุณาเลือกรายการยา");
                } else if (amount == "" || amount < 1) {
                    alert("กรุณาระบุจำนวน");
                } else if (barcode == "") {
                    alert("กรุณาใส่บาร์โค้ด");
                } else {
                    alert(pha_id);
                    alert(amount);
                    alert(barcode);



                    $.ajax({
                            method: "GET",
                            url: "<?php echo site_url('api/getPharmacy')?>" + "/" + pha_id,
                            data: {}
                        })
                        .done(function(data) {
                            console.log(data);
                            $.each(data.data, function(i, item) {
                                let tag_html = '<tr><td>' + item.pharmacy_name + '</td>' +
                                    '<td>' + amount + '</td>' +
                                    '<td>' + item.price + '</td>' +
                                    '<td>' + (item.price * amount) + '</td>' +
                                    '<td><button type="button" class="btn btn-sm btn-warning delete-row">ลบ</button>' +
                                    '</td></tr>';
                                $("#table_order_detail tbody").append(tag_html);
                                // $("#pha_id").val(item.pha_id);
                                // $("#barcode").val(item.barcode);
                                // $('#edit_username').val(item.username);
                                // $('#edit_email').val(item.email);
                            });
                        });







                    $('#pha_id').val("");
                    $('#barcode').val("");
                    $('#name').val("");
                    $('#amount').val("");
                }
            }

            function search_barcode() {
                let barcode = $('#barcode').val()
                $.ajax({
                        method: "GET",
                        url: "<?php echo site_url('api/getPharmacybybarcode')?>" + "/" + barcode,
                        data: {}
                    })
                    .done(function(data) {
                        console.log(data);
                        $.each(data.data, function(i, item) {
                            $('#pha_id').val(item.pharmacy_id);
                            $('#barcode').val(item.barcode);
                            $('#name').val(item.pharmacy_name);
                            $('#amount').val(1);

                        });
                    });
                alert(barcode);


            }
            </script>





            <!-- Page end  -->
        </div>
        </div>