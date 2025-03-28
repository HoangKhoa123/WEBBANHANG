
<?php
    
    if (isset($_POST["dangnhap"])) {
        $sodienthoai = $_POST["sodienthoai"];
        $password = $_POST["matkhau"];
        $sql = "select * from khachhang where SoDienThoai='$sodienthoai' and Matkhau='$password' limit 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);

        if ($row > 0) {
           $ten_dangnhap= $_SESSION['dangnhap'] =$sodienthoai ;
           echo '<div class="alert alert-success">
           <strong>Success!</strong>Bạn đã đăng nhập thành công!.Quay lại đăng nhập để mua hàng!
           <a class"close" href="suagiohang.php">Cick vào đây để mua hàng.</a>
        </div>';
        } else {
            echo '<div class="alert alert-warning">
                <strong>Warning!</strong>Vui lòng đăng nhập lại!
                <a class"close" href="javascript: history.go(-1)">Cick vào đây để trở về.</a>
            </div>';
        }
    }

?>
<div class="modal-body container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <p class=" nav nav-tabs col-md-12 display-4">Đăng nhập</p>
            
            <!-- Tab panes -->
            <div>
                <div class="tab-pane">
                    <form role="form" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="phone" class="col-md-2 control-label">Phone</label>
                            <div class="col-md-10">
                                <input type="phone" class="form-control" id="phone" name="sodienthoai" placeholder="Phone" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="matkhau" id="password" placeholder="Password" />
                            </div>
                        </div>

                        
                        <div class="row text-center">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-md" name="dangnhap">Đăng nhập</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>