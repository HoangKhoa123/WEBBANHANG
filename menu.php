<?php
$sql = "select * from nhomhanghoa";
$result = mysqli_query($conn,$sql);
 ?>
 <!--navbar-->
 <div class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav  ml-5 pl-5">
          <li class="nav-item">
            <a href="index.php?xem=trangchu" class="nav-link active">Trang chủ</a>
          </li>
          <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link " id="navbardrop" data-toggle="dropdown collapse">Sản phẩm</a>
            <div class="dropdown-menu">
            <?php 
              while($row =mysqli_fetch_array($result)){
            ?>
              <a class="dropdown-item text-capitalize" href="index.php?xem=nhomhanghoa&manhom=<?php echo $row["MaNhom"] ?>"><?php echo $row["TenNhom"] ?></a>
            <?php 
            }?>
            </div>
          </li>
          <li class="nav-item">
            <a href="index.php?xem=giohang" class="nav-link">Giỏ hàng</a>
          </li>
          <li class="nav-item">
            <a href="index.php?xem=vechungtoi" class="nav-link">Về chúng tôi</a>
          </li>
          <li class="nav-item">
            <a href="index.php?xem=lienhe" class="nav-link">Liên hệ</a>
          </li>
        </ul>
        <!--search-->
        <form class="form-inline ml-4" method="POST" enctype="multipart/form-data" action="index.php">
          <input class="form-control mr-sm-2" type="text" name="nhap" placeholder="Search">
            <button class="btn btn-outline-dark p-1" name="search" type="submit">Search</button>
        </form>
        <!--giohnag-->
        <ul class="navbar-nav  ml-5 pl-2">
          <li class="nav-item pr-3" >
            <a href="index.php?xem=giohang" class="nav-link fa fa-shopping-cart cart-icon"><span class="badge badge-light" style="background-color: black;color:orange !important;">1</span></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fa fa-heart"><span class="badge badge-light" style="background-color: black;color:orange !important;">7</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  