<?php 
    session_start();
    require_once 'quantri/modules/config.php';

    if(isset($_SESSION['dangnhap']) and isset($_POST['muahang'])){
		$mshh=$_GET['mshh'];
		$soluong=$_POST['soluong'];
		if(isset($_POST["size"])) {
			$size =$_POST['size'];
			}
		$sql="select * from hanghoa where MSHH='$mshh' limit 1";
		$row=mysqli_query($conn,$sql);
		$dong=mysqli_fetch_array($row);
		if($dong){
			$new_product=array(array('tenhh'=>$dong['TenHH'],'mshh'=>$mshh,'soluong'=>$soluong,'size'=>$size,'gia'=>$dong['Gia']));
			if(isset($_SESSION['product'])){
				$found=false;
				foreach($_SESSION['product'] as $cart_item){
					if($cart_item['mshh'] == $mshh){
						$product[]=array('tenhh'=>$cart_item['tenhh'],'mshh'=>$cart_item['mshh'],'soluong'=>$soluong,'size'=>$size,'gia'=>$cart_item['gia']);
						$found=true;
					}else{
						$product[]=array('tenhh'=>$cart_item['tenhh'],'mshh'=>$cart_item['mshh'],'soluong'=>$cart_item['soluong'],'size'=>$cart_item['size'],'gia'=>$cart_item['gia']);
					}
					
				}if($found==false){
					$_SESSION['product']=array_merge($product,$new_product);
				}else{
					$_SESSION['product']=$product;
				}
			}else{
				$_SESSION['product']=$new_product;
			}
		}
        header('location:index.php?xem=giohang');
    }elseif(!isset($_SESSION['dangnhap']) and isset($_POST["muahang"])){
		header('location:index.php?xem=dangnhap');
	}elseif(isset($_SESSION['dangnhap']) and !isset($_POST["muahang"])){
		header('location:index.php?xem=trangchu');
	}


    if(isset($_GET['thoat'])&&$_GET['thoat']==1){
        unset($_SESSION['dangnhap']);
        unset($_SESSION['product']);
		header('location:index.php?xem=trangchu');
    }
    
    if(isset($_GET['tru'])){
		$mshh=$_GET['tru'];
		foreach($_SESSION['product'] as $cart_item){
			if($mshh!=$cart_item['mshh']){
				
				$product[]=array('tenhh'=>$cart_item['tenhh'],'mshh'=>$cart_item['mshh'],'soluong'=>$cart_item['soluong'],'size'=>$cart_item['size'],'gia'=>$cart_item['gia']);
				$_SESSION['product']=$product;
			}else{
				$giam=$cart_item['soluong']-1;
				$giam1=$cart_item['size']-1;
				if($cart_item['soluong']>1){
				$product[]=array('tenhh'=>$cart_item['tenhh'],'mshh'=>$cart_item['mshh'],'soluong'=>$giam,'size'=>$cart_item['size'],'gia'=>$cart_item['gia']);
				
				}else{
					$giam=1;
					$product[]=array('tenhh'=>$cart_item['tenhh'],'mshh'=>$cart_item['mshh'],'soluong'=>$giam,'size'=>$cart_item['size'],'gia'=>$cart_item['gia']);
				}
				$_SESSION['product']=$product;
			}

			header('location:index.php?xem=giohang');
		}
		
	}
	


    if(isset($_GET['cong'])){
        $mshh =$_GET['cong'];
        foreach ($_SESSION['product'] as $cart_item) {
            if($mshh!=$cart_item['mshh']){
                $product[]=array('tenhh'=>$cart_item['tenhh'],'mshh'=>$cart_item['mshh'],'soluong'=>$cart_item['soluong'],'size'=>$cart_item['size'],'gia'=>$cart_item['gia']);
                $_SESSION['product'] =$product;
            }else{
                $tang = $cart_item['soluong']+1;
                $product[]= array('tenhh'=>$cart_item['tenhh'],'mshh'=>$cart_item['mshh'],'soluong'=>$tang,'size'=>$cart_item['size'],'gia'=>$cart_item['gia']);
                $_SESSION['product'] =$product;
            }
        }
        header('location:index.php?xem=giohang');
    }
    //Xoa 1 hang hoa
    if( isset($_SESSION['product']) && isset($_GET['xoa'])){
        $mshh =$_GET['xoa'];
        foreach($_SESSION['product'] as $cart_item){
            if($cart_item['mshh']!=$mshh){
                $product[] = array('tenhh'=>$cart_item['tenhh'],'mshh'=>$cart_item['mshh'],'soluong'=>$cart_item['soluong'],'size'=>$cart_item['size'],'gia'=>$cart_item['gia']);
            }
            $_SESSION['product']=$product;
            header('location:index.php?xem=giohang');
    }
        }
        
    //Xoa toan bo hang hoa
    if(isset($_GET['xoatoanbo']) && $_GET['xoatoanbo']==1){
        unset($_SESSION['product']);
        header('location:index.php?xem=giohang');
    }

?>