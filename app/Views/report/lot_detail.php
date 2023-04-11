<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">รายงานบัญชีซื้อยา</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <table class="data-tables table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>
                                <center>ลำดับ</center>
                            </th>
                            <th>
                                <center>วันที่นำเข้า</center>
                            </th>
                            <th>
                                <center>ชื่อผู้ขาย</center>
                            </th>
                            <th>
                                <center>ชื่อทางการค้า</center>
                            </th>
                            <th>
                                <center>จำนวน</center>
                            </th>
                            <th>
                                <center>หน่วย</center>
                            </th>

                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <?php
                            $count = 0;
                            foreach ($detail_list as $row):
                                $count++; ?>
                        <tr>
                            <td>
                                <center><?php echo $count;?></center>
                            </td>
                            <td>
                                <center><?php echo $row["import_date"]; ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["company_name"]; ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["pharmacy_name"]; ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["amount"]; ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["counting_unit"]; ?></center>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>