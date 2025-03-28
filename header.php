<?php session_start(); ?>
<nav class="navbar navbar-expand-md bg-light" id="navbar1">
  <a class="navbar-branch" href="index.php">
        <img src="./Hinh_anh/logo_cong_store.png" alt="logo" height="100px">
      </a>
    <!-- Links -->
    
    <ul class="navbar-nav ml-auto" id="navbar-ul-1">
      <li class="nav-item dropdown dropleft">
      <?php
        
        if(isset($_SESSION['dangnhap'])){
          echo '<a class="dropdown-toggle nav-link  " id="navbardrop" data-toggle="dropdown collapse">'.$_SESSION['dangnhap'].'</a>
          <div class="dropdown-menu"><a class="dropdown-item-top text-capitalize" style="color:white !important ;" href="suagiohang.php?thoat=1">Đăng xuất</a></div>
            ';
         }else{
          echo '<a class="nav-link" id="nav-link-1" href="index.php?xem=dangnhap">Tài khoản</a>';
         }
      ?>
        
      </li>
      <li class="nav-item" id="nav-item-1">
        <a class="nav-link" id="nav-link-1" href="index.php?xem=dangki" >Đăng kí</a>
      </li>
      <li class="nav-item" id="nav-item-1">
        <a class="nav-link" id="nav-link-1" href="index.php?xem=dangnhap">Đăng nhập</a>
      </li>
     
    </ul>
  
  </nav>
