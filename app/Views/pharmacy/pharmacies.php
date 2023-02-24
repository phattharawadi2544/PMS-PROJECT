<div class="content-page">
     <div class="container-fluid">
         
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
                            </td>
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
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดู"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="แก้ไข"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="ลบ"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
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
    <!-- Modal Edit -->
    <!-- <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <div class="media align-items-top justify-content-between">                            
                            <h3 class="mb-3">Product</h3>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                        <div class="content edit-notes">
                            <div class="card card-transparent card-block card-stretch event-note mb-0">
                                <div class="card-body px-0 bukmark">
                                    <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">                                                    
                                        <div class="quill-tool">
                                        </div>
                                    </div>
                                    <div id="quill-toolbar1">
                                        <p>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                        <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

     

 <!-- Button trigger modal -->
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
                        <label for="inputreg" class="form-label">เลขทะเบียนยา</label>
                            <input type="text" class="form-control" id="inputreg" name="reg">
                        </div>
                        <div class="col-md-6">
                            <label for="inputpharmacyname" class="form-label">ชื่อยา(ภาษาไทย/ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="inputpharmacyname" name="pharmacyname">
                        </div>
                        
                        <div class="col-12">
                            <label for="inputpharmacydetails" class="form-label">ข้อบ่งใช้</label>
                            <textarea type="text" class="form-control" id="inputpharmacydetails"  name="pharmacydetails"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="inputpharmacywarning" class="form-label">ผลข้างเคียง/ข้อควรระวัง</label>
                            <textarea type="text" class="form-control" id="inputpharmacywarning"  name="pharmacywarning"></textarea>
                        </div>
                        
                       
                        <div class="col-md-12">
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">หมวดหมู่ *</legend>
                            <div class="col-sm-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="pmtype1" name="pmtype" class="custom-control-input" value='1'>
                                <label class="custom-control-label" for="pmtype1">ยาสามัญประจำบ้าน</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="pmtype2" name="pmtype" class="custom-control-input" checked value='2'>
                                <label class="custom-control-label" for="pmtype2"> ยาอันตราย </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="pmtype3" name="pmtype" class="custom-control-input" checked value='3'>
                                <label class="custom-control-label" for="pmtype3"> ยาควบคุมพิเศษ </label>
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












    
    <script>
    function save_pharmacy(){
        let ch = true;
        if($("#inputreg").val().trim().length==0){
            ch = false;
            alert("inputreg");
        }
        if($("#inputpharmacyname").val().trim().length==0){
            ch = false;
            alert("inputpharmacyname");
        }

        if(ch){
            $('#form_pharmacy_new').submit();
        }
    }

    function view_data(id){
        alert(id);
        $('#viewModal').modal('show');

    }
</script>