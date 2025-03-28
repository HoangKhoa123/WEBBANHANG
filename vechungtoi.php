<div class="about-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 pe-lg-5">
                <div class="about-content">
                    <div class="section-header mb-4">
                        <h1 class="display-5 mb-3">
                            Giới Thiệu <span class="text-primary">Cong Store</span>
                        </h1>
                        <h3 class="text-muted mb-4">Nơi Đam Mê Thời Trang Hội Tụ</h3>
                    </div>

                    <div class="about-text">
                        <p class="lead text-dark mb-4">
                            Cong Store - Câu chuyện của niềm đam mê và sự sáng tạo trong thế giới thời trang. 
                            Chúng tôi không chỉ là một cửa hàng, mà còn là một không gian kết nối những giá trị đích thực của phong cách cá nhân.
                        </p>

                        <div class="story-highlights mb-4">
                            <h4 class="mb-3">Hành Trình Của Chúng Tôi</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fa fa-check-circle text-primary me-2"></i>
                                    3 năm phát triển với những dòng sản phẩm đẳng cấp từ các thương hiệu quốc tế
                                </li>
                                <li class="mb-2">
                                    <i class="fa fa-check-circle text-primary me-2"></i>
                                    Đồng hành cùng các thương hiệu hàng đầu: Gucci, Nike, Adidas, Converse
                                </li>
                                <li class="mb-2">
                                    <i class="fa fa-check-circle text-primary me-2"></i>
                                    Cam kết mang đến trải nghiệm mua sắm tuyệt vời và phong cách riêng biệt
                                </li>
                            </ul>
                        </div>

                        <blockquote class="blockquote bg-white p-3 rounded shadow-sm mb-4">
                            <p class="mb-0 fst-italic">
                                "Tinh thần sáng tạo của chúng tôi là vô tận, là sự biến hóa không giới hạn trong mỗi sản phẩm."
                            </p>
                        </blockquote>
                    </div>

                    <div class="social-links">
                        <h4 class="mb-3">Kết Nối Với Chúng Tôi</h4>
                        <div class="d-flex">
                            <a href="https://www.facebook.com/" class="btn btn-outline-primary me-3">
                                <i class="fa fa-facebook me-2"></i>Facebook
                            </a>
                            <a href="https://www.instagram.com/" class="btn btn-outline-danger me-3">
                                <i class="fa fa-instagram me-2"></i>Instagram
                            </a>
                            <a href="mailto:congstore@example.com" class="btn btn-outline-secondary">
                                <i class="fa fa-envelope me-2"></i>Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="brand-showcase">
                    <div class="row g-3">
                        <?php 
                        $brands = [
                            ['name' => 'Adidas', 'image' => './Hinh_anh/logo_adidas.jpg'],
                            ['name' => 'Converse', 'image' => './Hinh_anh/logo_converse.jpg'],
                            ['name' => 'Gucci', 'image' => './Hinh_anh/logo_gucci.jpg'],
                            ['name' => 'Nike', 'image' => './Hinh_anh/logo_nike.jpg']
                        ];

                        foreach ($brands as $brand): ?>
                        <div class="col-6 mb-3">
                            <div class="brand-logo shadow-sm rounded overflow-hidden">
                                <img 
                                    src="<?php echo $brand['image']; ?>" 
                                    alt="<?php echo $brand['name']; ?>" 
                                    class="img-fluid hover-scale"
                                >
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-scale {
    transition: transform 0.3s ease;
}
.hover-scale:hover {
    transform: scale(1.1);
}
.blockquote {
    border-left: 4px solid #2e86de;
}
.brand-logo img {
    object-fit: contain;
    height: 150px;
    width: 100%;
}
</style>