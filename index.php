<?php
// Require file cấu hình và hàm dùng chung
require_once './commons/env.php';
require_once './commons/function.php';

// Require models
require_once './models/ProductModel.php';

// Require controllers
require_once './controllers/ProductController.php';

// Lấy route từ URL (theo biến act)
$act = $_GET['act'] ?? '/';

// Routing theo act
switch ($act) {
    case '/': // Trang chủ
        (new ProductController())->Home();
        break;

    case 'products': // Trang sản phẩm
        (new ProductController())->list();
        break;

    case 'product-detail': // Trang chi tiết sản phẩm
        (new ProductController())->detail();
        break;

    case 'login': // Trang đăng nhập
        include './views/layouts/header.php';
        include './views/auth/login.php';
        include './views/layouts/footer.php';
        break;

    case 'register': // Trang đăng ký
        include './views/layouts/header.php';
        include './views/auth/register.php';
        include './views/layouts/footer.php';
        break;

    case 'about': // Trang giới thiệu
        include './views/layouts/header.php';
        include './views/pages/about.php';
        include './views/layouts/footer.php';
        break;

    case 'contact': // Trang liên hệ
        include './views/layouts/header.php';
        include './views/pages/contact.php';
        include './views/layouts/footer.php';
        break;

    default:
        echo "404 - Không tìm thấy trang!";
        break;
}
