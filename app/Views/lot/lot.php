<div class="content-page">
     <div class="container-fluid">
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
                            <th>ชื่อ</th>
                            <th>เลขที่ครั้งที่ผลิต</th>
                            <th>วันหมดอายุ</th>
                            <th>วันที่ผลิต</th>
                            <th>จำนวน</th>
                            <th>ราคาขาย</th>
                            <th>ราคาทุน</th>
                            <th>อายุการเก็บรักษา</th>
                            <th>ผู้ขาย</th>
                            <th></th>
                            <th></th>
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
                            <td><?php echo  $lot_row["pharmacy_id"];?></td>
                            <td><?php echo  $lot_row["lot_id"];?></td>
                            <td><?php echo  $lot_row["batch_no"];?></td>
                            <td><?php echo  $lot_row["exp_date"];?></td>
                            <td><?php echo  $lot_row["manu_date"];?></td>
                            <td><?php echo  $lot_row["amount"];?></td>
                            <td><?php echo  $lot_row["sale_price"];?></td>
                            <td><?php echo  $lot_row["cost_price"];?></td>
                            <td><?php echo  $lot_row["remain"];?></td>
                            <td><?php echo  $lot_row["shelf_life"];?></td>
                            <td><?php echo  $lot_row["id_supplie"];?></td>

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
    <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
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
    </div>
      </div>
    </div>
    