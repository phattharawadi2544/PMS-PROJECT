<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">รายการยาที่กำลังจะหมดคลัง ณ วันที่ <?php echo date("d/m/Y")?> </h4>
                    </div>
                </div>
            </div>
            <table class="data-tables table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>
                            <center>ลำดับ</center>
                        </th>
                        <th>
                            <center>รหัสยา</center>
                        </th>
                        <th>
                            <center>ชื่อทางการค้า</center>
                        </th>
                        <th>
                            <center>จำนวนคงเหลือ</center>
                        </th>
                        <th>
                            <center>หน่วยนับ</center>
                        </th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    <?php
                            $count = 0;
                            foreach ($pharmacy_list as $row):
                                $count++; ?>
                    <tr>
                        <td>
                            <center><?php echo $count;?></center>
                        </td>
                        <td>
                            <center><?php echo $row["pharmacy_id"]; ?></center>
                        </td>
                        <td>
                            <center><?php echo $row["pharmacy_name"]; ?></center>
                        </td>
                        <!-- <td>
                            <center><?php echo $row["total_remain"]; ?></center>
                        </td> -->
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