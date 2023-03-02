<?php  $session = session(); ?>
<div class="content-page">
     <div class="container-fluid">
     <div class="container-fluid">
     <!-- <?php $session = session(); if($session->getFlashdata('item')=='202'): ?>
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
        <?php endif;?> -->
        <?php  if($session->getFlashdata('message_session')=='201'){ ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                           บันทึกข้อมูลสำเร็จ
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
<?php }?>

        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">ประเภทของยา</h4>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>ลำดับ</th>
                            <th>รหัสประเภทยา</th>
                            <th>ชื่อประเภทยา</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                    <?php 
                        
                        // var_dump($pharmacy_group);
                        $count = 0;
                        foreach($pharmacy_group as $pharmacy_row):$count++; ?>
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
                            <td>
                                <?php echo  $pharmacy_row["id_pharmacy_type"];?></td>
                            <td>
                                <?php echo  $pharmacy_row["pharmacy_type_name"];?></td>
                            <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="แก้ไข" href="#" onclick="edit_data('<?php echo $pharmacy_row["id_pharmacy_type"]; ?>')"><i
                                                    class="ri-pencil-line mr-0"></i></a>
                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="ลบ" href="#" onclick="delete_data('<?php echo $pharmacy_row["pharmacy_type_name"]; ?>')"><i
                                                    class="ri-delete-bin-line mr-0"></i></a>
                                        </div>
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
   
<!-- edit modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขประเภทยา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_pharmacy_type" method="post" action="<?php echo site_url('id_pharmacy_type'); ?>">
                        <div class="col-md-3">
                            <label for="edit_id_pharmacy_type" class="form-label">รหัสประเภทยา</label>
                            <input type="text" class="form-control was-validated" id="edit_id_pharmacy_type" name="id_pharmacy_type" onchange="clr_border(this);" >
                        </div>
                        <div class="col-md-9">
                            <label for="edit_pharmacy_type_name" class="form-label">ชื่อประเภทยา</label>
                            <input type="text" class="form-control was-validated" id="edit_pharmacy_type_name" name="pharmacy_type_name" onchange="clr_border(this);" >
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_edit_pharmacy_type()">บันทึก</button>
                </div>
            </div>
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
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>ข้อมูลประเภทยา</p>
        <form class="row g-3" id="form_pharmacy_type_del" method="post" action="<?php echo site_url('del_pharmacy_type'); ?>">
        <div class="col-md-12">
                            <label for="del_id_pharmacy_type" class="form-label">รหัสผู้ใช้งาน</label>
                            <input type="text" class="form-control was-validated" id="del_id_pharmacy_type" name="id_pharmacy_type" onchange="clr_border(this);" readonly>
                        </div>
        </form>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
            <button type="button" class="btn btn-primary" onclick="save_del_user()">ยืนยันการลบ</button>
        </div>
        </div>
    </div>
    </div>

<script>
    function save_edit_pharmacy_type(){
        let ch = true;
        if($("#edit_id_pharmacy_type").val().trim().length==0){
            ch = false;
            $("#edit_id_pharmacy_type").css("border-color","red");
        }
        if($("#edit_pharmacy_type_name").val().trim().length==0){
            ch = false;
            $("#edit_pharmacy_type_name").css("border-color","red");
        }
        if(ch){
            $('#form_pharmacy_type').submit();
        }
        else{
            alert("กรุณากรอกข้อมูลให้ครบ");
        }
    }
    function view_data(id){
        $('#viewModal').modal('show');
    }

    function edit_data(id){
        $.ajax({
            method: "GET",
            url: "<?php echo site_url('api/getpharmacy_type')?>"+"/"+id,
            data: {}
        })
        .done(function( data ) {
            $.each(data.data,function(i,item){
                $("#edit_id_pharmacy_type").val(item._id_pharmacy_type);
                $("#edit_pharmacy_type_name").val(item._pharmacy_type_name);
            
            });
        });
        $('#editModal').modal('show');
    }

    function delete_data(id){
        $("#del_id_pharmacy_type").val(id);
        $('#dedeteModal').modal('show');
    }

    function save_del_user(){
        $('#form_pharmacy_type_del').submit();
    }
    function clr_border(obj){
        obj.style.removeProperty('border-color');
    }
</script>