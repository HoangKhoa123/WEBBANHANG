<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'quantri/modules/config.php';

// Prepare SQL query with error handling and pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$items_per_page = 8; // Adjust number of items per page
$offset = ($page - 1) * $items_per_page;

// Count total items for pagination
$count_query = "SELECT COUNT(*) AS total FROM hanghoa";
$count_result = mysqli_query($conn, $count_query);
$total_items = mysqli_fetch_assoc($count_result)['total'];
$total_pages = ceil($total_items / $items_per_page);

// Fetch products with pagination
$sql = "SELECT * FROM hanghoa LIMIT $items_per_page OFFSET $offset";
$result = mysqli_query($conn, $sql);

// Check query errors
if (!$result) {
    die("Lỗi truy vấn: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="vi">
<div class="container-fluid product-section mb-5 mt-5">
    <div class="container">
        <!-- Section Title -->
        <div class="row text-center section-header mb-4">
            <div class="col-12">
                <h1 class="display-5 section-title">
                    <span class="title-line"></span>
                    Sản phẩm mới
                    <span class="title-line"></span>
                </h1>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row product-grid">
            <?php 
            while ($product = mysqli_fetch_array($result)) {
                // Calculate discount price
                $original_price = $product['Gia'];
                $discount_price = $original_price + 200000;
                $discount_percentage = round((($discount_price - $original_price) / $discount_price) * 100);
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="product-card shadow-hover">
                    <div class="product-badge">
                        <?php if ($discount_percentage > 0): ?>
                        <span class="badge bg-danger"><?php echo $discount_percentage; ?>% OFF</span>
                        <?php endif; ?>
                    </div>
                    <div class="product-image">
                        <a href="index.php?xem=chitiethanghoa&mshh=<?php echo $product['MSHH']; ?>">
                            <img 
                                src="quantri/modules/quanlihanghoa/uploads/<?php echo $product['Hinh']; ?>" 
                                alt="<?php echo htmlspecialchars($product['TenHH'], ENT_QUOTES, 'UTF-8'); ?>" 
                                class="img-fluid product-img"
                            >
                        </a>
                        <div class="product-actions">
                            <a href="#" class="btn btn-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                            <a href="index.php?xem=chitiethanghoa&mshh=<?php echo $product['MSHH']; ?>" class="btn btn-view">Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">
                            <a href="index.php?xem=chitiethanghoa&mshh=<?php echo $product['MSHH']; ?>">
                                <?php echo htmlspecialchars($product['TenHH'], ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </h3>
                        <div class="product-price">
                            <span class="current-price"><?php echo number_format($original_price) . ' đ'; ?></span>
                            <span class="original-price"><?php echo number_format($discount_price) . ' đ'; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-12">
                <nav aria-label="Phân trang sản phẩm">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>