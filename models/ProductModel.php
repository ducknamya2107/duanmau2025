<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
// class ProductModel 
// {
//     public $conn;
//     public function __construct()
//     {
//         $this->conn = connectDB();
//     }

//     // Viết truy vấn danh sách sản phẩm 
//     public function getAllProduct()
//     {
        
//     }
// }
require_once './commons/env.php';

class ProductModel
{
    // Lấy tất cả sản phẩm (join với category)
    public static function getAll()
    {
        $conn = getConnect();
        $sql = "SELECT p.ID_Product, p.Product_Name, p.Description, p.Image, c.Category_Name
                FROM product p
                LEFT JOIN category c ON p.ID_Category = c.ID_Category
                ORDER BY p.ID_Product DESC";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy chi tiết sản phẩm theo ID, bao gồm danh mục và biến thể sản phẩm
    public static function find($id)
    {
        $conn = getConnect();

        // Thông tin sản phẩm + danh mục
        $sql = "SELECT p.ID_Product, p.Product_Name, p.Description, p.Image, c.Category_Name
                FROM product p
                LEFT JOIN category c ON p.ID_Category = c.ID_Category
                WHERE p.ID_Product = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$product) return null;

        // Lấy các biến thể (size, color, price, discount, stock)
        $sqlVariants = "SELECT pv.ID_Product_Variant, s.Size_Name, co.Color_Name, pv.Price, pv.Discount, pv.Stock
                        FROM product_variant pv
                        LEFT JOIN size s ON pv.ID_Size = s.ID_Size
                        LEFT JOIN color co ON pv.ID_Color = co.ID_Color
                        WHERE pv.ID_Product = :id";
        $stmtVar = $conn->prepare($sqlVariants);
        $stmtVar->execute(['id' => $id]);
        $variants = $stmtVar->fetchAll(PDO::FETCH_ASSOC);

        $product['variants'] = $variants;

        return $product;
    }

    // Lấy một số sản phẩm nổi bật (ví dụ 4 sản phẩm mới nhất)
    public static function getHighlight($limit = 4)
    {
        $conn = getConnect();
        $sql = "SELECT p.ID_Product, p.Product_Name, p.Description, p.Image, c.Category_Name
                FROM product p
                LEFT JOIN category c ON p.ID_Category = c.ID_Category
                ORDER BY p.ID_Product DESC
                LIMIT :limit";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

