<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techcare Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    .top-bar {
      background-color: #008cdd;
      color: white;
      padding: 15px 0;
    }
    .top-bar a, .top-bar p {
      color: white;
      margin: 0;
      font-size: 14px;
    }
    .nav-link {
      color: #333 !important;
      font-weight: 500;
    }
    .nav-link:hover {
      color: #007bff !important;
    }
    .badge-custom {
      background-color: red;
      font-size: 10px;
      position: absolute;
      top: -5px;
      right: -10px;
    }
  </style>
</head>
<body>
<header>
  <div class="top-bar">
    <div class="container d-flex justify-content-between align-items-center">
      <!-- Logo -->
      <div class="d-flex align-items-center gap-2">
        <!-- <img src="https://via.placeholder.com/40x40?text=T" alt="Logo" class="img-fluid"> -->
        <h5 class="mb-0 fw-bold text-white">Techcare</h5>
      </div>

      <!-- Tìm kiếm -->
      <form class="d-flex flex-grow-1 mx-4" style="max-width: 600px;">
        <input class="form-control rounded-start" type="search" placeholder="Bạn tìm gì..." aria-label="Search">
        <button class="btn btn-light rounded-end" type="submit"><i class="fas fa-search"></i></button>
      </form>

      <!-- Liên hệ + icon -->
      <div class="d-flex align-items-center gap-4">
        <div>
          <p><i class="fas fa-headset me-1"></i>Ducknamya2107@Gmail.Com</p>
          <p><i class="fas fa-phone-alt me-1"></i>+0327540277</p>
        </div>
        <div class="position-relative">
          <a href="#"><i class="far fa-heart fa-lg text-white"></i></a>
          <span class="badge rounded-pill badge-custom">0</span>
        </div>
        <div class="position-relative">
          <a href="#"><i class="fas fa-shopping-bag fa-lg text-white"></i></a>
          <span class="badge rounded-pill badge-custom">0</span>
        </div>
        <a href="?act=login" class="text-white text-decoration-none ms-3">Đăng Nhập</a>
      </div>
    </div>
  </div>

  <!-- Menu -->
  <nav class="navbar navbar-expand-lg bg-white border-top border-bottom shadow-sm">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item"><a class="nav-link" href="?act=">Trang Chủ</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Khuyến Mãi Đặc Biệt</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Bài Viết</a></li>
          <li class="nav-item"><a class="nav-link" href="?act=contact">Liên Hệ</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
