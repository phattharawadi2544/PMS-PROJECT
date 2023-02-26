<div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">ผู้ขาย</h4>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"
                        data-bs-whatever="@mdo">บันทึกรายการสั่งซื้อ</button>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-tables table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>
                                ลำดับ
                            </th>
                            <th>รหัสผู้ขาย</th>
                            <th>ชื่อผู้ขาย</th>
                            <th>เบอร์โทร</th>
                            <th>ที่อยู่</th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <?php 
                        
                        // var_dump($supplier);
                        $count = 0;
                        foreach($supplier as $supplier_row):$count++; ?>
                        <tr>
                            
                            <td>
                                <div class="d-flex align-items-center">
                                    <!-- <img src="../assets/images/table/product/01.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image"> -->
                                    <div>
                                    <?php echo $count;?>
                                        <!-- <p class="mb-0"><small>This is test Product</small></p> -->
                                    </div>
                                </div>
                            </td>
                            <td><?php echo  $supplier_row["id_supplier"];?></td>
                            <td><?php echo  $supplier_row["company_name"];?></td>
                            <td><?php echo  $supplier_row["tel"];?></td>
                            <td><?php echo  $supplier_row["address"];?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                </div>
            </div>
        </div> 
        <!-- Page end  -->
    </div>
   <!-- Button trigger modal -->
   <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกรายการสั่งซื้อ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>

                <div class="modal-body">
                    <form class="row g-3" id="form_supplier_new" method="post" action="<?php echo site_url('add_supplier'); ?>">
                        <div class="col-md-12">
                            <label for="inputname" class="form-label">ชื่อผู้ขาย</label>
                            <input type="text" class="form-control was-validated" id="inputname" name="name" onchange="clr_border(this);" >
                        </div>
                        
                        <div class="col-md-6">
                            <label for="inputaddress" class="form-label">ที่อยู่</label>
                            <textarea type="text" class="form-control" id="inputaddress" name="address" onchange="clr_border(this);"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="inputtel" class="form-label">เบอร์โทร</label>
                            <input type="text" class="form-control" id="inputtel" name="tel" onchange="clr_border(this);" >
                        </div>

                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_supplier()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>



</div>
    
<script>
    function save_supplier(){
        let ch = true;
        
        if($("#inputname").val().trim().length==0){
            ch = false;
            $("#inputname").css("border-color","red");
        }
        if($("#inputaddress").val().trim().length==0){
            ch = false;
            $("#inputaddress").css("border-color","red");
        }
        if($("#inputtel").val().trim().length==0){
            ch = false;
            $("#inputtel").css("border-color","red");
        }
        if(ch){
            $('#form_lot_new').submit();
        }
        else{
            alert("กรุณากรอกข้อมูลให้ครบ");
        }
            
    }


    function clr_border(obj){
        obj.style.removeProperty('border-color');
    }
</script>