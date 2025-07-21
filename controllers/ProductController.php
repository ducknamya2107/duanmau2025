<?php
// có class chứa các function thực thi xử lý logic 
// class ProductController
// {
//     public $modelProduct;

//     public function __construct()
//     {
//         $this->modelProduct = new ProductModel();
//     }

//     public function Home()
//     {
//         $title = "Đây là trang chủ nhé hahaa";
//         $thoiTiet = "Hôm nay trời có vẻ là mưa";
//         require_once './views/trangchu.php';
//     }
// }
class ProductController
{
    // Trang chủ - hiển thị sản phẩm nổi bật
    public function Home()
    {
        require_once './models/ProductModel.php';
        $products = ProductModel::getHighlight();

        include './views/layouts/header.php';
        include './views/home.php';
        include './views/layouts/footer.php';
    }

    // Danh sách sản phẩm
    public function list()
    {
        require_once './models/ProductModel.php';
        $products = ProductModel::getAll();

        include './views/layouts/header.php';
        include './views/products/list.php';
        include './views/layouts/footer.php';
    }

    // Chi tiết sản phẩm
    public function detail()
    {
        require_once './models/ProductModel.php';
        $id = $_GET['id'] ?? 0;
        $product = ProductModel::find($id);

        if (!$product) {
            echo "Sản phẩm không tồn tại!";
            return;
        }

        include './views/layouts/header.php';
        include './views/products/detail.php';
        include './views/layouts/footer.php';
    }
}
