# Employee Management System

## Giới thiệu
Dự án **Employee Management** là một hệ thống quản lý nhân sự được xây dựng bằng **Laravel**, cung cấp các chức năng quản lý nhân viên như:
- Thêm, sửa, xóa nhân viên
- Cập nhật chức vụ nhân viên
- Đăng ký/đăng nhập/đổi mật khẩu
- Hiển thị danh sách nhân viên

## Công nghệ sử dụng
- **Backend**: PHP Laravel
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL

## Cài đặt
### Yêu cầu hệ thống
- PHP >= 8.0
- Composer
- MySQL
- Laravel >= 10

### Hướng dẫn cài đặt
1. Clone repository:
   ```sh
   git clone https://github.com/loan4004/Webnangcao.git
   cd Webnangcao
   ```
2. Cài đặt các dependency:
   ```sh
   composer install
   ```
3. Tạo file `.env` từ file mẫu:
   ```sh
   cp .env.example .env
   ```
4. Cấu hình database trong file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```
5. Tạo key ứng dụng:
   ```sh
   php artisan key:generate
   ```
6. Chạy migration để tạo bảng trong database:
   ```sh
   php artisan migrate
   ```
7. Chạy ứng dụng:
   ```sh
   php artisan serve
   ```
   Truy cập **http://127.0.0.1:8000** trên trình duyệt.

## Sử dụng
- Truy cập trang chủ để xem danh sách nhân viên.
- Sử dụng các chức năng để thêm, sửa, xóa nhân viên.

## Đóng góp
Mọi đóng góp đều được hoan nghênh! Nếu bạn muốn cải thiện dự án, vui lòng tạo **Pull Request** hoặc mở **Issue**.