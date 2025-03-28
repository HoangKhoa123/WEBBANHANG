
<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php
                 if(isset($_SESSION['product'])){ ?>
                <div class="cart_container">
                    <div class="cart_title">Giỏ hàng của bạn<small> (1 item in your cart) </small></div>
                    <?php $thanhtien=0;
		                foreach($_SESSION['product'] as $cart_item){
                            $mshh=$cart_item['mshh'];
			                $sql="select * from hanghoa where MSHH='$mshh'";
			                $result=mysqli_query($conn,$sql);
			                $dong=mysqli_fetch_array($result); ?>
                    <div class="cart_items">
                        <ul class="cart_list">
                            <li class="cart_item clearfix">
                                <div class="cart_item_image"><img src="quantri/modules/quanlihanghoa/uploads/<?php echo $dong["Hinh"] ?>" alt=""></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_row">
                                        <div class="cart_item_title">Tên hàng hóa</div>
                                        <div class="cart_item_text"><?php echo $dong["TenHH"] ?></div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">Đơn giá</div>
                                        <div class="cart_item_text"><?php echo number_format($dong['Gia']).' '.'đ'?></div>
                                    </div>
                                    
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">Size</div>
                                        <div class="cart_item_text"><?php echo $cart_item['size'] ?>
			                            </div>
                                    </div>
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">Số lượng</div>
                                        <div class="cart_item_text"><a href="suagiohang.php?cong=<?php echo $cart_item["mshh"] ?>"><i class="fa fa-plus"></i></a> <?php echo $cart_item['soluong'] ?> <a href="suagiohang.php?tru=<?php echo $cart_item["mshh"] ?>"><i class="fa fa-minus"></i></a></div>
                                    </div>
                                    <?php
                                        $tongtien=0;
                                        $tongtien=$cart_item['soluong']*$cart_item['gia'];
                                        $thanhtien=($thanhtien + $tongtien);
                                     ?>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Tổng tiền</div>
                                        <div class="cart_item_text"><?php echo number_format($tongtien).' '.'đ'?></div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Xóa</div>
                                        <div class="cart_item_text">
                                            <a href="suagiohang.php?xoa=<?php echo $cart_item['mshh']?>"><i class="fa fa-remove"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                        <?php } ?>
                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Xóa toàn bộ</div>
                            <div class="order_total_amount"><a href="suagiohang.php?xoatoanbo=1"><i class="fa fa-remove"></i></a></div>
                        </div>
                    </div>

                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Thành tiền:</div>
                            <div class="order_total_amount"><?php echo number_format($thanhtien).' '.'đ'?></div>
                        </div>
                    </div>
                </div>
                <div class="cart_buttons"><a href="index.php?xem=camon" type="button"class="button cart_button_checkout">Thanh toán</a> </div>
                <?php }else{ echo 'Giỏ hàng bạn trống!'; }?>
                <div class="cart_buttons"> <a type="button" href="index.php?xem=trangchu" name="tieptuc" class="btn btn-danger">Continue Shopping</a></div>
            </div>
        </div>
    </div>
</div>