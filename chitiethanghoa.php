<?php
// Sanitize input to prevent SQL injection
$mshh = mysqli_real_escape_string($conn, $_GET['mshh']);

// Fetch product details with error handling
$sql = "SELECT h.*, n.TenNhom 
        FROM hanghoa h 
        JOIN nhomhanghoa n ON h.MaNhom = n.MaNhom 
        WHERE h.MSHH = '$mshh'";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Sản phẩm không tồn tại");
}

$dong = mysqli_fetch_array($result);
?>

<div class="container product-detail-section my-5">
    <div class="row">
        <!-- Product Image Gallery -->
        <div class="col-lg-6 product-gallery">
            <div class="main-image mb-4">
                <img 
                    src="quantri/modules/quanlihanghoa/uploads/<?php echo $dong["Hinh"]; ?>" 
                    alt="<?php echo htmlspecialchars($dong['TenHH']); ?>" 
                    class="img-fluid main-product-image"
                >
            </div>
            
            <div class="thumbnail-gallery d-flex justify-content-center">
                <?php 
                // Define a list of additional images (you can modify or fetch from database)
                $additional_images = [
                    $dong["Hinh"],
                    "./Hinh_anh/giaychitiet.jpg",
                    "./Hinh_anh/giaychitiet3.jpg",
                    "./Hinh_anh/giaychitiet4.jpg"
                ];
                
                foreach ($additional_images as $index => $image): 
                ?>
                <div class="thumbnail mx-2" data-image-index="<?php echo $index; ?>">
                    <img 
                        src="<?php echo strpos($image, 'uploads/') !== false 
                            ? 'quantri/modules/quanlihanghoa/uploads/' . $image 
                            : $image; ?>" 
                        alt="Thumbnail <?php echo $index + 1; ?>" 
                        class="img-thumbnail"
                    >
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-lg-6 product-details">
            <div class="product-header mb-4">
                <h1 class="product-title"><?php echo htmlspecialchars($dong['TenHH']); ?></h1>
                
                <div class="product-rating d-flex align-items-center mb-3">
                    <div class="stars me-2">
                        <?php 
                        $rating = 3; // You can make this dynamic
                        for ($i = 1; $i <= 5; $i++): ?>
                            <i class="fa fa-star <?php echo $i <= $rating ? 'text-warning' : 'text-muted'; ?>"></i>
                        <?php endfor; ?>
                    </div>
                    <span class="rating-text text-muted">(<?php echo rand(10, 100); ?> đánh giá)</span>
                </div>
            </div>

            <div class="product-meta mb-4">
                <div class="meta-item">
                    <strong>Thương hiệu:</strong> 
                    <span><?php echo htmlspecialchars($dong['TenNhom']); ?></span>
                </div>
                <div class="meta-item">
                    <strong>Mã sản phẩm:</strong> 
                    <span><?php echo $dong['MSHH']; ?></span>
                </div>
                <div class="meta-item">
                    <strong>Trạng thái:</strong> 
                    <span class="text-success">Còn hàng</span>
                </div>
            </div>

            <div class="product-price mb-4">
                <h3 class="current-price text-primary">
                    <?php 
                    $current_price = $dong['Gia'];
                    $original_price = $current_price + 200000;
                    $discount_percent = round(($original_price - $current_price) / $original_price * 100);
                    ?>
                    <?php echo number_format($current_price); ?> đ
                </h3>
                <div class="price-compare">
                    <span class="original-price text-muted me-2">
                        <del><?php echo number_format($original_price); ?> đ</del>
                    </span>
                    <span class="discount-badge badge bg-danger">
                        -<?php echo $discount_percent; ?>%
                    </span>
                </div>
            </div>

            <div class="product-description mb-4">
                <h5>Mô tả sản phẩm</h5>
                <p><?php echo htmlspecialchars($dong['MotaHH']); ?></p>
            </div>

            <form 
                action="suagiohang.php?mshh=<?php echo $dong['MSHH']; ?>" 
                method="POST" 
                class="purchase-form"
            >
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="size" class="form-label">Chọn Size</label>
                        <select name="size" id="size" class="form-select">
                            <?php 
                            $sizes = [35, 36, 37, 38, 39, 40, 41, 42, 43];
                            foreach ($sizes as $size): ?>
                                <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="quantity" class="form-label">Số lượng</label>
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-secondary" id="quantity-minus">-</button>
                            <input 
                                type="number" 
                                name="soluong" 
                                id="quantity" 
                                class="form-control text-center" 
                                value="1" 
                                min="1" 
                                max="100"
                            >
                            <button type="button" class="btn btn-outline-secondary" id="quantity-plus">+</button>
                        </div>
                    </div>
                </div>

                <div class="product-actions mt-4">
                    <button 
                        type="submit" 
                        name="muahang" 
                        class="btn btn-primary btn-lg me-3"
                    >
                        <i class="fa fa-shopping-cart me-2"></i>Thêm vào giỏ
                    </button>
                    <button 
                        type="submit" 
                        name="muangay" 
                        class="btn btn-success btn-lg"
                    >
                        Mua ngay
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image gallery functionality
    const mainImage = document.querySelector('.main-product-image');
    const thumbnails = document.querySelectorAll('.thumbnail');
    
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            const imageSrc = this.querySelector('img').src;
            mainImage.src = imageSrc;
            
            // Remove active class from all thumbnails
            thumbnails.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Quantity control
    const quantityInput = document.getElementById('quantity');
    const quantityMinus = document.getElementById('quantity-minus');
    const quantityPlus = document.getElementById('quantity-plus');

    quantityMinus.addEventListener('click', function() {
        if (quantityInput.value > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    });

    quantityPlus.addEventListener('click', function() {
        if (quantityInput.value < 100) {
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }
    });
});
</script>