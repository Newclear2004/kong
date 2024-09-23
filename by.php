<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผู้จัดทำ</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to bottom, #85D8CE, #085078);
            /* เพิ่มสีพื้นหลังด้วยการใช้ linear-gradient */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            display: flex;
            justify-content: space-between;
            max-width: 800px;
            width: 90%; /* ปรับความกว้างของ container */
            padding: 0 20px; /* เพิ่มช่องว่างด้านข้าง */
            box-sizing: border-box; /* คำนึงถึง padding และ border ในการคำนวณขนาดขององค์ประกอบ */
            margin-top: 20px; /* ขยับข้อมูลของผู้จัดทำขึ้นมาบนสัดส่วนของหน้าจอ */
        }
        .developer {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow:0 15px 50px rgba(0,0,0,0.25);
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 45%; /* ปรับขนาดให้ตรงกับการจัดเรียง */
        }
        .developer:hover {
            transform: translateY(-5px);
        }
        .developer img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            border: 5px solid #fff;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .developer h2 {
            margin-bottom: 5px;
            color: #333;
            font-size: 16px;
        }
        .developer p {
            color: #666;
            font-size: 16px;
            margin: 0;
        }
        .back-btn {
            margin-top: 20px;
            text-align: center;
            width: 100%;
        }
        .back-btn a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: inline-block;
            font-weight: bold;
        }
        .back-btn a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
    
    <div class="container">
        <div class="developer" style="margin-right: 20px;"> <!-- เพิ่มขอบขวา -->
            <img src="pic/kong.jpg" alt="Developer 1">
            <h2>ชื่อ : นายก้องภพ นวนันท์</h2>
            <h2>ชื่อเล่น : ก้อง อายุ : 20 ปี </h2>
            <h2>แผนกวิชา : คอมพิวเตอร์ธุรกิจ</h2>
            <h2>สาขาวิชา : เทคโนโลยีธุรกิจดิจิทัล</h2>
        </div>
        <div class="developer" style="margin-left: 20px;"> <!-- เพิ่มขอบซ้าย -->
            <img src="pic/new.jpg" alt="Developer 2">
            <h2>ชื่อ : นายคุณากร มาตรา</h2>
            <h2>ชื่อเล่น : นิวเคลียร์ อายุ : 19 ปี </h2>
            <h2>แผนกวิชา : คอมพิวเตอร์ธุรกิจ</h2>
            <h2>สาขาวิชา : เทคโนโลยีธุรกิจดิจิทัล</h2>
        </div>
    </div>

    <div class="back-btn">
        <a href="index.php">กลับสู่หน้าเข้าสู่ระบบ</a>
    </div>
</body>
</html>