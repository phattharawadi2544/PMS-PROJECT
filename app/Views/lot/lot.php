<div class="content-page">
    <div class="container-fluid">
    <?php $session = session(); if($session->getFlashdata('item')=='202'): ?>
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
        <?php endif;?>
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">คลังยา</h4>
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
                            
                            <th>ลำดับ</th>
                            <th>รหัสคลังยา</th>
                            <th>รหัสผู้ขาย</th>
                            <th>เลขที่ครั้งที่ผลิต</th>
                            <th>วันที่ผลิต</th>
                            <th>วันหมดอายุ</th>
                            <th>จำนวน</th>
                            <th>ราคาทุน</th>
                            <th>ราคาขาย</th>
                            <th>จำนวนคงเหลือ</th>
                            <th>อายุการเก็บรักษา</th>
                         </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <?php 
                        
                        // var_dump($lot_list);
                        $count = 0;
                        foreach($lot_list as $lot_row):$count++; ?>
                        <tr>
                            
                            <td>
                                
                            </td>
                            
                            <td><?php echo  $lot_row["lot_id"];?></td>
                            <td><?php echo  $lot_row["id_supplie"];?></td>
                            <td><?php echo  $lot_row["batch_no"];?></td>
                            <td><?php echo  $lot_row["manu_date"];?></td>
                            <td><?php echo  $lot_row["exp_date"];?></td>
                            <td><?php echo  $lot_row["amount"];?></td>
                            <td><?php echo  $lot_row["cost_price"];?></td>
                            <td><?php echo  $lot_row["sale_price"];?></td>
                            <td><?php echo  $lot_row["remain"];?></td>
                            <td><?php echo  $lot_row["shelf_life"];?></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกการซื้อยา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>

                <div class="modal-body">
                    <form class="row g-3" id="form_lot_new" method="post" action="<?php echo site_url('add_lot'); ?>">
                        <div class="col-md-6">
                            <label for="inputbatch" class="form-label">เลขที่ครั้งที่ผลิต *</label>
                            <input type="text" class="form-control was-validated" id="inputbatch" name="batch" onchange="clr_border(this);" >
                        </div>
                        
                        <div class="col-md-6">
                            <label for="inputmanu" class="form-label">วันที่ผลิต *</label>
                            <input type="date" class="form-control" id="inputmanu" name="manu" onchange="clr_border(this);" >
                        </div>

                        <div class="col-md-6">
                            <label for="inputexp" class="form-label">วันหมดอายุ *</label>
                            <input type="date" class="form-control" id="inputexp" name="exp" onchange="clr_border(this);" >
                        </div>

                        <div class="col-md-6">
                            <label for="inputamount" class="form-label">จำนวน *</label>
                            <input type="text" class="form-control" id="inputamount" name="amount" onchange="clr_border(this);" >
                        </div>
                        <div class="col-md-6">
                            <label for="inputcost" class="form-label">ราคาทุน *</label>
                            <input type="text" class="form-control" id="inputcost" name="cost" onchange="clr_border(this);" >
                        </div>
                        <div class="col-md-6">
                            <label for="inputsale" class="form-label">ราคาขาย *</label>
                            <input type="text" class="form-control" id="inputsale" name="sale" onchange="clr_border(this);" >
                        </div>
                        <div class="col-md-6">
                            <label for="inputshelf" class="form-label">อายุการเก็บรักษา *</label>
                            <input type="text" class="form-control" id="inputshelf" name="shelf" onchange="clr_border(this);" >
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



</div>
    
<script>
    function save_lot(){
        let ch = true;
        
        if($("#inputbatch").val().trim().length==0){
            ch = false;
            $("#inputbatch").css("border-color","red");
        }
        if($("#inputmanu").val().trim().length==0){
            ch = false;
            $("#inputmanu").css("border-color","red");
        }
        if($("#inputexp").val().trim().length==0){
            ch = false;
            $("#inputexp").css("border-color","red");
        }
        if($("#inputamount").val().trim().length==0){
            ch = false;
            $("#inputamount").css("border-color","red");
        }
        if($("#inputcost").val().trim().length==0){
            ch = false;
            $("#inputcost").css("border-color","red");
        }
        if($("#inputsale").val().trim().length==0){
            ch = false;
            $("#inputsale").css("border-color","red");
        }
        if($("#inputshelf").val().trim().length==0){
            ch = false;
            $("#inputshelf").css("border-color","red");
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