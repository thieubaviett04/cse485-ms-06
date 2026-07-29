<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop Admin — About</title>
</head>
<body>
    <h1>MiniShop Admin — About</h1>
    <ul>
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.categories.index') }}">Categories</a></li>
        <li><a href="{{ route('admin.products.index') }}">Products</a></li>
        <li><a href="{{ route('admin.about') }}">About</a></li>
    </ul>

    <p>MiniShop là một dự án cửa hàng trực tuyến cơ bản.</p>
    <p>Hệ thống Admin giúp quản lý danh mục và sản phẩm.</p>
    <p>Dự kiến sẽ hoàn thành toàn bộ CRUD Dashboard vào Phiếu 12.</p>
</body>
</html>
