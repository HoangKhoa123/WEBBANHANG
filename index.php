<?php
include 'quantri/modules/config.php';
include 'head.html';
    if (isset($_GET['xem'])){
      $tam = $_GET['xem'];
    }else{
      $tam = '';
    }
    if($tam =='trangchu'){
      include 'header.php';
      include 'menu.php';
      include 'tatcahanghoa.php';
      include 'footer.php';
    }elseif($tam =='dangki'){
      include 'header.php';
      include 'dang_ki.php';
      include 'footer.php';
    }elseif($tam =='dangnhap'){
      include 'header.php';
      include 'dangnhap.php';
      include 'footer.php';
    }elseif($tam == 'nhomhanghoa'){
      include 'header.php';
      include 'menu.php';
      include 'nhomhanghoa.php';
      include 'footer.php';
    }elseif(isset($_POST['search'])){
      include 'header.php';
      include 'menu.php';
      include 'timkiem.php';
      include 'footer.php';
    }elseif($tam == 'chitiethanghoa'){
      include 'header.php';
      include 'menu.php';
      include 'chitiethanghoa.php';
      include 'footer.php';
    }elseif($tam== 'lienhe'){
      include 'header.php';
      include 'lienhe.php';
      include 'footer.php';
    }elseif($tam== 'vechungtoi'){
      include 'header.php';
      include 'vechungtoi.php';
    }elseif($tam== 'giohang'){
      include 'header.php';
      include 'menu.php';
      include 'giohang.php';
      include 'footer.php';
    }elseif($tam== 'xulidangnhap'){
      include 'header.php';
      include 'menu.php';
      include 'xulidangnhap.php';
      include 'footer.php';
    }elseif($tam == 'thanhtoan'){
      include 'header.php';
      include 'menu.php';
      include 'thanhtoan.php';
      include 'footer.php';
    }elseif($tam =='camon'){
      include 'header.php';
      include 'camon.php';
    }
    else{
      include 'header.php';
      include 'menu.php';
      include 'carousel.php';
      include 'tatcahanghoa.php';
      include 'footer.php';
    }

 ?>   

