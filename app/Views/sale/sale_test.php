        
        
     <div class="content-page">
        <div class="container-fluid">   
        <div class="row">
            <div class="col-lg-2">
                <div class="card card-transparent card-block card-stretch card-height border-none">
                    <div class="card-body p-0 mt-lg-2 mt-0">
                        <h4 class="mb-3">สร้างใบสั่งซื้อ</h4>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-12 align-self-center">
                              <div class="p-3">
                                <h6 class="card-title">ข้อมูลผู้ซื้อ</h6>
                                <form>
                                    <div class="form-row">
                                    <div class="col-4">
                                        <input type="text" class="form-control form-control-sm" placeholder="ชื่อลูกค้า">
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control form-control-sm" placeholder="ที่อยู่">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control form-control-sm" placeholder="เลขผู้เสียภาษี">
                                    </div>
                                    </div>
                                </form>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-8">
                <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-12 align-self-center">
                           
                              <div class="p-3">
                                <h6 class="card-title">เพิ่มรายการขาย</h6>
                                <form>
                                    <div class="form-row">
                                        <div class="col-3">
                                            <input type="text" class="form-control form-control-sm" placeholder="บาร์โค๊ด">
                                        </div>
                                        <div class="col-5">
                                        <select  class="form-control form-control-sm mb-3">
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                           
                                        </div>
                                        <div class="col-1">
                                            <input type="number" class="form-control form-control-sm" placeholder="จำนวน">
                                        </div>
                                        <div class="col-3">
                                        <button type="button" class="btn btn-sm btn-primary "><i class="ri-add-line"></i> เพิ่ม</button>
                                        <button type="button" class="btn btn-sm btn-primary" onclick="search_item()"><i class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-sm">
                                    <thead>
                                    <tr class="ligth">
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">รหัสยา</th>
                                        <th scope="col">ชื่อยา</th>
                                        <th scope="col">จำนวน</th>
                                        <th scope="col">หน่วยนับ</th>
                                        <th scope="col">ราคา</th>
                                        <th scope="col">xxx</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td> <div class="d-flex align-items-center ">
                                                <button class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="ลบ" href="#" ><i
                                                    class="ri-delete-bin-line mr-0"></i></button>
                                                    
                                            </div></td>
                                    </tr>
                                    </tbody>
                                </table>


                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-12 align-self-center">
                              <div class="p-3">
                                <h6 class="card-title">รายการที่ต้องการขาย</h6>
                                <table class="table" class="table-sm">
                                    <thead>
                                    <tr class="ligth">
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">รหัสยา</th>
                                        <th scope="col">ชื่อยา</th>
                                        <th scope="col">จำนวน</th>
                                        <th scope="col"></th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="ลบ" href="#" ><i
                                                    class="ri-delete-bin-line mr-0"></i></a>
                                                    
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                    
                                        <h6 class="card-title">ยอดรวมสุทธิ</h6>
                                        <h6 class="card-title">ภาษี</h6>
                                        <h6 class="card-title">รวมทั้งหมด</h6>
                                        <button type="button" class="btn btn-primary">ยืนยันการขาย</button>

                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
            </div>
             
        </div>  



<!-- Modal -->
<div class="modal fade" id="viewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ค้นหายา</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary">เลือก</button>
      </div>
    </div>
  </div>
</div>


<script>
    function search_item(){
        $('#viewModal').modal('show');
    }
</script>





    <!-- Page end  -->
    </div>
      </div>