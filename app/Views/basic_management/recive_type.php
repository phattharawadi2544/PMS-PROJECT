<div class="content-page">
     <div class="container-fluid">
     <?php  if($session->getFlashdata('message_session')=='401'){ ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                           แก้ไขข้อมูลสำเร็จ
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
<?php }?>
<?php  if($session->getFlashdata('message_session')=='402'){ ?>
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
                        <h4 class="mb-3">ประเภทการรับเงิน</h4>
                        <!-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> -->
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"
                        data-bs-whatever="@mdo">เพิ่มผู้ใช้</button>
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
                            <th>รหัสประเภทการรับ</th>
                            <th>ชื่อประเภทการรับ</th>
                            <th>รายละเอียด</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <?php 
                        
                        // var_dump($recive_type_list);
                        $count = 0;
                        foreach($recive_type_list as $recive_row):$count++; ?>
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
                                <?php echo  $recive_row["recive_type_id"];?></td>
                            <td>
                                <?php echo  $recive_row["recive_name"];?></td>
                            <td>
                                <?php echo  $recive_row["recive_detail"];?></td>
                            
                            
                            <td>
                               <div class="d-flex align-items-center list-action">
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="แก้ไข" href="#" onclick="edit_data('<?php echo $recive_row["recive_type_id"]; ?>')"><i
                                                    class="ri-pencil-line mr-0"></i></a>
                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="ลบ" href="#" onclick="delete_data('<?php echo $recive_row["recive_type_id"]; ?>')"><i
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

    <!-- edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขประเภทยา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_recive_type" method="post" action="<?php echo site_url('recive_type_id'); ?>">
                        <div class="col-md-3">
                            <label for="edit_recive_type_id" class="form-label">รหัสประเภทการรับ</label>
                            <input type="text" class="form-control was-validated" id="edit_recive_type_id" name="recive_type_id" onchange="clr_border(this);" >
                        </div>
                        <div class="col-md-9">
                            <label for="edit_recive_type_name" class="form-label">ชื่อประเภทการรับ</label>
                            <input type="text" class="form-control was-validated" id="edit_recive_type_name" name="recive_type_name" onchange="clr_border(this);" >
                        </div>
                        <div class="col-md-6">
                            <label for="edit_recive_detail" class="form-label">รายละเอียด</label>
                            <textarea type="text" class="form-control was-validated" id="edit_recive_detail" name="pharmacy_recive_detail" onchange="clr_border(this);" ></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_edit_recive_type()">บันทึก</button>
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
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
        </div>
        <div class="modal-body">
        <p>ข้อมูลประเภทการรับเงิน</p>
        <form class="row g-3" id="form__recive_type_del" method="post" action="<?php echo site_url('del__recive_type'); ?>">
        <div class="col-md-12">
                            <label for="del__recive_type_id" class="form-label">รหัสประเภทการรับ</label>
                            <input type="text" class="form-control was-validated" id="del__recive_type_id" name="_recive_type_id" onchange="clr_border(this);" readonly>
                        </div>
        </form>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
            <button type="button" class="btn btn-primary" onclick="save_del_recive_type()">ยืนยันการลบ</button>
        </div>
        </div>
    </div>
    </div>

    
</div>
</div>


<script>
    function save_edit_recive_type(){
        let ch = true;
        if($("#edit_recive_type_id").val().trim().length==0){
            ch = false;
            $("#edit_recive_type_id").css("border-color","red");
        }
        if($("#edit_recive_name").val().trim().length==0){
            ch = false;
            $("#edit_recive_name").css("border-color","red");
        }
        if($("#edit_recive_detail").val().trim().length==0){
            ch = false;
            $("#edit_recive_detail").css("border-color","red");
        }
        if(ch){
            $('#form_recive_type').submit();
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
            url: "<?php echo site_url('api/getrecive_type')?>"+"/"+id,
            data: {}
        })
        .done(function( data ) {
            $.each(data.data,function(i,item){
                $("#edit_recive_type_id").val(item._recive_type_id);
                $("#edit_recive_name").val(item._recive_name);
                $("#edit_recive_detail").val(item._recive_detail);
            });
        });
        $('#editModal').modal('show');
    }
    function delete_data(id){
        $("#del_recive_type_id").val(id);
        $('#dedeteModal').modal('show');
    }

    function save_del_recive_type(){
        $('#form_recive_type_del').submit();
    }

    function clr_border(obj){
        obj.style.removeProperty('border-color');
    }
</script>