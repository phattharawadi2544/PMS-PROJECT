<?php  $session = session(); ?>
<div class="content-page">
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
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">การจัดการข้อมูลยา</h4>
                        <!-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> -->
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"
                        data-bs-whatever="@mdo">เพิ่มข้อมูลยา</button>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-tables table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            
                            <th>ลำดับ</th>
                            <th>รูป</th>
                            <th>รหัสยา</th>
                            <th>เลขทะเบียนยา</th>
                            <th>ชื่อยา</th>
                            <th>ข้อบ่งใช้</th>
                            <th>ผลข้างเคียง/ข้อควรระวัง</th>
                            <th>หมวดหมู่</th>
                            <!-- <th>ประเภท</th> -->
                            <!-- <th>หน่วยนับ</th> -->
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <?php 
                        
                        // var_dump($pharmacy_list);
                        $count = 0;
                        foreach($pharmacy_list as $phamacy_row):$count++; ?>
                        <tr>
                            
                            <td>
                                <div class="d-flex align-items-center">
                                    <!-- <img src="../assets/images/table/product/01.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image"> -->
                                    <div>
                                    <?php echo $count;?>
                                        <!-- <p class="mb-0"><small>This is test Product</small></p> -->
                                    </div>
                                </div>
                            </td></td>
                            <td>
                            <td><?php echo  $phamacy_row["pharmacy_id"];?></td>
                            <td><?php echo  $phamacy_row["reg_no"];?></td>
                            <td><?php echo  $phamacy_row["pharmacy_name"];?></td>
                            <td><?php echo  $phamacy_row["pharmacy_details"];?></td>
                            <td><?php echo  $phamacy_row["pharmacy_warning"];?></td>
                            <td><?php echo  $phamacy_row["pharmacy_group"];?></td>
                            <!-- <td><?php echo  $phamacy_row["pharmacy_type"];?></td> -->
                            <!-- <td><?php echo  $phamacy_row["counting_unit"];?></td> -->
                            
                            <td>
                            <div class="d-flex align-items-center list-action">
                                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="ดู" href="#" onclick="view_data('<?php echo $phamacy_row["pharmacy_id"]; ?>')"><i
                                                    class="ri-eye-line mr-0"></i></a>
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="แก้ไข" href="#" onclick="edit_data('<?php echo $phamacy_row["pharmacy_id"]; ?>')"><i
                                                    class="ri-pencil-line mr-0"></i></a>
                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="ลบ" href="#" onclick="delete_data('<?php echo $phamacy_row["pharmacy_id"]; ?>')"><i
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
    

     

 <!-- newmodal -->
 <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลยา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="form_pharmacy_new" method="post" action="<?php echo site_url('add_pharmacy'); ?>">
                    <div class="col-md-6">
                        
                        <div class="input-group mb-3">
                            <img class="crm-profile-pic rounded avatar-100" src="../assets/images/pharmacy/medicine2.jpg" alt="profile-pic">
                            <div class="crm-p-image bg-primary">
                                    <i class="las la-pen upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*">
                                 </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                        <label for="inputreg" class="form-label">เลขทะเบียนยา *</label>
                            <input type="text" class="form-control" id="inputreg" name="reg" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="inputpharmacyname" class="form-label">ชื่อยา(ภาษาไทย/ภาษาอังกฤษ) *</label>
                            <input type="text" class="form-control" id="inputpharmacyname" name="pharmacyname" onchange="clr_border(this);">
                        </div>
                        
                        <div class="col-6">
                            <label for="inputdetails" class="form-label">ข้อบ่งใช้ *</label>
                            <textarea type="text" class="form-control" id="inputdetails"  name="pharmacydetails" onchange="clr_border(this);"></textarea>
                        </div>
                        <div class="col-6">
                            <label for="inputwarning" class="form-label">ผลข้างเคียง/ข้อควรระวัง *</label>
                            <textarea type="text" class="form-control" id="inputwarning"  name="pharmacywarning" onchange="clr_border(this);"></textarea>
                        </div>

                        <div class="col-6">
                            <label for="inputunit" class="form-label">หน่วยนับ</label>
                            <input type="text" class="form-control" id="inputunit" name="unit" onchange="clr_border(this);">
                        </div>
                        
                       
                        <div class="col-md-12">
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">หมวดหมู่ *</legend>
                            <div class="col-sm-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="pharmacygroup1" name="pharmacygroup" class="custom-control-input" value='1'>
                                <label class="custom-control-label" for="pharmacygroup1">ยาสามัญประจำบ้าน</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="pharmacygroup2" name="pharmacygroup" class="custom-control-input" checked value='2'>
                                <label class="custom-control-label" for="pharmacygroup2"> ยาอันตราย </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="pharmacygroup3" name="pharmacygroup" class="custom-control-input" checked value='3'>
                                <label class="custom-control-label" for="pharmacygroup3"> ยาควบคุมพิเศษ </label>
                            </div>
                            </div>
                        </fieldset>
                        </div>
                        
                       
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_pharmacy()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>

  <!-- viewmodal -->
  <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ข้อมูลยา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>
                <div class="modal-body">
                <div class="card card-block p-card">
                  <div class="profile-box">
                     <div class="profile-card rounded">
                        <img src="../assets/images/user/12.jpg" alt="profile-bg" class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                        <h3 class="font-600 text-white text-center mb-0">ชื่อยา</h3>
                        <p class="text-white text-center mb-5">เลขทะเบียนยา</p>
                     </div>
                     <div class="pro-content rounded">
                        <div class="d-flex align-items-center mb -3">
                           <div class="p-icon mr-3">
                              <i class="las la-envelope-open-text"></i>
                           </div>
                           <p class="mb-0 eml">ข้อบ่งใช้:</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon bg-success mr-3">
                              <i class="las la-phone"></i>
                           </div>
                           <p class="mb-0">ผลข้างเคียง/ข้อควรระวัง:</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon  bg-danger mr-3">
                              <i class="las la-map-marked"></i>
                           </div>
                           <p class="mb-0">หน่วยนับ:</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="p-icon  bg-danger mr-3">
                              <i class="las la-map-marked"></i>
                           </div>
                           <p class="mb-0">หมวดหมู่:</p>
                        </div>
                     </div>
                  </div>
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


   <!-- editmodal -->
   <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลยา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
                </div>

                <div class="modal-body">
                <form class="row g-3" id="form_pharmacy_edit" method="post" action="<?php echo site_url('edit_pharmacy'); ?>">
                    <div class="col-md-12">
                        <label for="edit_pharmacyid" class="form-label">รหัสยา</label>
                        <input type="text" class="form-control was-validated" id="edit_pharmacyid" name="pharmacyid" readonly >
                    </div>
                    <div class="col-md-6">
                        <label for="edit_img" class="form-label">รูป</label>
                            <input type="text" class="form-control" id="edit_img" name="img" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                        <label for="edit_reg" class="form-label">เลขทะเบียนยา *</label>
                            <input type="text" class="form-control" id="edit_reg" name="reg" onchange="clr_border(this);">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_pharmacyname" class="form-label">ชื่อยา(ภาษาไทย/ภาษาอังกฤษ) *</label>
                            <input type="text" class="form-control" id="edit_pharmacyname" name="pharmacyname" onchange="clr_border(this);">
                        </div>
                        
                        <div class="col-6">
                            <label for="edit_details" class="form-label">ข้อบ่งใช้ *</label>
                            <textarea type="text" class="form-control" id="edit_details"  name="pharmacydetails" onchange="clr_border(this);"></textarea>
                        </div>
                        <div class="col-6">
                            <label for="edit_warning" class="form-label">ผลข้างเคียง/ข้อควรระวัง *</label>
                            <textarea type="text" class="form-control" id="edit_warning"  name="pharmacywarning" onchange="clr_border(this);"></textarea>
                        </div>

                        <div class="col-6">
                            <label for="edit_unit" class="form-label">หน่วยนับ</label>
                            <input type="text" class="form-control" id="edit_unit" name="unit" onchange="clr_border(this);">
                        </div>
                        
                       
                        <div class="col-md-12">
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">หมวดหมู่ *</legend>
                            <div class="col-sm-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_pharmacygroup" name="pharmacygroup" class="custom-control-input" value='1'>
                                <label class="custom-control-label" for="edit_pharmacygroup1">ยาสามัญประจำบ้าน</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_pharmacygroup2" name="edit_pharmacygroup" class="custom-control-input" checked value='2'>
                                <label class="custom-control-label" for="pharmacygroup2"> ยาอันตราย </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="edit_pharmacygroup3" name="edit_pharmacygroup" class="custom-control-input" checked value='3'>
                                <label class="custom-control-label" for="pharmacygroup3"> ยาควบคุมพิเศษ </label>
                            </div>
                            </div>
                        </fieldset>
                        </div>
                    </form>
                    </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" onclick="save_pharmacy()">บันทึก</button>
                </div>
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
        <p>ข้อมูลผู้ใช้งาน</p>
        <form class="row g-3" id="form_pharmacy_del" method="post" action="<?php echo site_url('del_pharmacy'); ?>">
        <div class="col-md-12">
                            <label for="del_pharmacy_id" class="form-label">รหัสผู้ใช้งาน</label>
                            <input type="text" class="form-control was-validated" id="del_pharmacy_id" name="pharmacy_id" onchange="clr_border(this);" readonly>
                        </div>
        </form>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
            <button type="button" class="btn btn-primary" onclick="save_del_pharmacy()">ยืนยันการลบ</button>
        </div>
        </div>
    </div>
    </div>

    
</div>
</div>



    
<script>
    function save_pharmacy(){
        let ch = true;
        
        if($("#inputreg").val().trim().length==0){
            ch = false;
            $("#inputreg").css("border-color","red");
        }
        if($("#inputpharmacyname").val().trim().length==0){
            ch = false;
            $("#inputpharmacyname").css("border-color","red");
        }
        if($("#inputdetails").val().trim().length==0){
            ch = false;
            $("#inputdetails").css("border-color","red");
        }
        if($("#inputwarning").val().trim().length==0){
            ch = false;
            $("#inputwarning").css("border-color","red");
        }
        if($("#inputunit").val().trim().length==0){
            ch = false;
            $("#inputunit").css("border-color","red");
        }
        if(ch){
            $('#form_pharmacy_new').submit();
        }
        else{
            alert("กรุณากรอกข้อมูลให้ครบ");
        }
            
    }
    function save_edit_pharmacy(){
        let ch = true;
        if($("#edit_reg").val().trim().length==0){
            ch = false;
            $("#edit_reg").css("border-color","red");
        }
        if($("#edit_pharmacyname").val().trim().length==0){
            ch = false;
            $("#edit_pharmacyname").css("border-color","red");
        }
        if($("#edit_details").val().trim().length==0){
            ch = false;
            $("#edit_details").css("border-color","red");
        }
        if($("#edit_warning").val().trim().length==0){
            ch = false;
            $("#edit_warning").css("border-color","red");
        }
        if($("#edit_unit").val().trim().length==0){
            ch = false;
            $("#edit_unit").css("border-color","red");
        }
       
        if(ch){
            $('#form_pharmacy_edit').submit();
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
            url: "<?php echo site_url('api/getPharmacy')?>"+"/"+id,
            data: {}
        })
        .done(function( data ) {
            $.each(data.data,function(i,item){
                $("#edit_pharmacyid").val(item.pharmacy_id);
                $("#edit_reg").val(item.id_reg);
                $('#edit_pharmacyname').val(item.pharmacyname);
                $('#edit_details').val(item.details);
                $('#edit_warning').val(item.warning);
                $('#edit_unit').val(item.unit);
            });
        });
        $('#editModal').modal('show');
    }

    function delete_data(id){
        $("#del_pharmacy_id").val(id);
        $('#dedeteModal').modal('show');
    }

    function save_del_pharmacy(){
        $('#form_pharmacy_del').submit();
    }

    function clr_border(obj){
        obj.style.removeProperty('border-color');
    }
</script>