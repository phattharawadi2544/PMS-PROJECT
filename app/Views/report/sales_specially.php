<div class="content-page">
    <div class="container-fluid">
        <form action="" method="get">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">รายงานการขายยาควบคุมพิเศษ</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="hiredate" class="form-label">วันที่เริ่ม</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="hiredate" class="form-label">วันที่สิ้นสุด</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" onclick="date()">ค้นหา</button>
                </div>
            </div>
        </form>

        <table class="data-tables table mb-0 tbl-server-info">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>
                        <center>ลำดับ</center>
                    </th>
                    <th>
                        <center>วันที่ขาย</center>
                    </th>
                    <th>
                        <center>ชื่อผู้ขาย</center>
                    </th>
                    <th>
                        <center>ชื่อลูกค้า</center>
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
                    <th>
                        <center>ราคา</center>
                    </th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                <?php 
                        
                        // var_dump($specially_list);
                        $count = 0;
                        foreach($specially_list as $row):
                        $count++; ?>
                <tr>
                    <td>
                        <center><?php echo $count;?></center>
                    </td>
                    <td>
                        <center><?php echo  $row["date(o.order_date)"];?></center>
                    </td>
                    <td>
                        <center><?php echo  $row["f_name"];?></center>
                    </td>
                    <td>
                        <center><?php echo  $row["customer"];?></center>
                    </td>
                    <td>
                        <center><?php echo  $row["pharmacy_name"];?></center>
                    </td>
                    <td>
                        <center><?php echo  $row["amount"];?></center>
                    </td>
                    <td>
                        <center><?php echo  $row["counting_unit"];?></center>
                    </td>
                    <td>
                        <center><?php echo  $row["sale_price"];?></center>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>


</div>
</div>


<script>
function date() {
    const start_date = new Date(document.getElementById("start_date").value);
    const end_date = new Date(document.getElementById("end_date").value);
    const current_date = new Date();


    if (start_date > current_date || end_date > current_date) {
        alert("กรุณาเลือกวันที่ให้ถูกต้อง");
    } else if (start_date > end_date) {
        alert("กรุณาเลือกวันที่ให้ถูกต้อง");
    } else {

    }
}
</script>