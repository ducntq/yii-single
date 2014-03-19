#Yii-single

Yii-single được tạo ra và chia sẻ với mục đích tạo một cấu trúc thống nhất cho các web app xây dựng dựa trên framework Yii.

#Hướng dẫn

Bạn chỉ cần clone về, set lại đường dẫn trong ```index.php```, ```console.php``` và ```console-production.php``` là có thể bắt đầu sử dụng.

#Chạy ConsoleCommand

Về cơ bản, việc chạy command trên môi trường local không khác gì. Nhưng đối với môi trường production, để chạy command, bạn thêm biến môi trường vào trước câu lệnh ```ENV=production```. Ví dụ:

```
ENV=production php console.php test
```

Câu lệnh trên sẽ thực hiện ```TestCommand``` với ```actionIndex``` trên môi trường production.

#Đóng gói

Yii-single được đóng gói kèm các 3rd party plugin sau:

1. Bootstrap 3.0.3
2. Font-Awesome 4.0.3
3. jQuery 1.10.2

#Người đóng tác

Đức Nguyễn:
    + Vai trò: đóng góp chính, dẫn dắt.
    + Email: ducntq@gmail.com