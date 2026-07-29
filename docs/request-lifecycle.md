Browser → public/index.php → Route → Controller → View cho /admin/products.

Giải thích: Thư mục `public/` được thiết lập làm document root (thư mục gốc) để tăng cường tính bảo mật. Web server chỉ cho phép người dùng bên ngoài truy cập vào các file bên trong thư mục `public/` (chủ yếu là file `index.php` để khởi động app, cùng với CSS/JS/Images). Tất cả mã nguồn logic (`app/`), cấu hình bảo mật (`.env`), và thư viện (`vendor/`) đều nằm bên ngoài document root, nhờ đó hacker không thể gõ URL để xem trộm mã nguồn hay cấu hình hệ thống của bạn được.
