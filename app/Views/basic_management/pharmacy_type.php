<div class="content-page">
     <div class="container-fluid">
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
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                    <?php 
                        
                        // var_dump($recive__type_list);
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
                            <td><?php echo  $pharmacy_row["id_pharmacy_type"];?></td>
                            <td><?php echo  $pharmacy_row["pharmacy_type_name"];?></td>
                          
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
   