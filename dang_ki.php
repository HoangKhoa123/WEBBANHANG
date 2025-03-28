<?php
   require_once 'quantri/modules/config.php';
if(isset($_POST['dangki'])){
    $hovaten =$_POST['hovaten'];
    $matkhau =$_POST['matkhau'];
    $sodienthoai=$_POST['sodienthoai'];
    $diachi=$_POST['diachi'];
    $email=$_POST['email'];
    if(!$hovaten ||!$matkhau || !$sodienthoai || !$diachi ||  !$email){
        echo '<div class="alert alert-warning">
                <strong>Warning!</strong>Vui lòng nhập đầy đủ thông tin!
                <a class"close" href="javascript: history.go(-1)">Cick vào đây để trở về.</a>
            </div>';
        
        exit();
    }
    if(mysqli_num_rows(mysqli_query($conn,"select SoDienThoai from khachhang where SoDienThoai='$sodienthoai'")) >0){
        
        echo '<div class="alert alert-warning">
                <strong>Warning!</strong>Số điện thoại đã được sử dụng.Vui lòng nhập số điện thoại khác!
                <a class"close" href="javascript: history.go(-1)">Cick vào đây để trở về.</a>
            </div>';
            exit();
    }if(isset($sodienthoai)){
        $sql_dangky=mysqli_query($conn,"insert into khachhang (HoTenKH,Matkhau,DiaChi,SoDienThoai,Email) values('$hovaten','$matkhau','$diachi','$sodienthoai','$email')");
        echo '<div class="alert alert-success">
                <strong>Success!</strong>Bạn đã đăng kí thành công!.Quay lại đăng nhập để mua hàng!
                <a class"close" href="index.php?xem=dangnhap">Cick vào đây để đăng nhập.</a>
            </div>';
    }
}?>        
           


  

  
<div class="modal-body container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <p class=" nav nav-tabs col-md-12 display-4">Đăng kí</p>
            <!-- Tab panes -->
            
                <div class="tab-pane">
                    <form role="form" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Họ và Tên</label>
                            <div class="col-md-10">
                                <input type="text" id="name" class="form-control" name="hovaten" placeholder="Name"/>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-2 control-label">Số Điện Thoại</label>
                            <div class="col-md-10">
                                <input type="phone" class="form-control" name="sodienthoai" id="phone" placeholder="Phone" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">Mật khẩu</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" id="password" name="matkhau" placeholder="Password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-md-2 control-label">Địa chỉ</label>
                            <div class="col-md-10">
                                <input type="address" class="form-control" id="address" name="diachi" placeholder="Address" />
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-md" name="dangki">Đăng kí</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>