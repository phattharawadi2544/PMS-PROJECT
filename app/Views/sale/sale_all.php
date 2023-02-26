<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">รายการขายทั้งหมด</h4>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>ลำดับ</th>
                            <th>รหัสการขาย</th>
                            <th>วันที่ขาย</th>
                            <th>รหัสผู้ขาย</th>
                            <th>ประเภทการรับเงิน</th>
                            <th>ยอดรวม</th>
                            <th>ภาษี</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <?php 
                        
                        // var_dump($order_list);
                        $count = 0;
                        foreach($order_list as $order_row):$count++; ?>
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
                            <td><?php echo  $order_row["order_id"];?></td>
                            <td><?php echo  $order_row["order_date"];?></td>
                            <td><?php echo  $order_row["seller_id"];?></td>
                            <td><?php echo  $order_row["recive_type_id"];?></td>
                            <td><?php echo  $order_row["total_price"];?></td>
                            <td><?php echo  $order_row["vat"];?></td>
                           
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
</div>
   
   