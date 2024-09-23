<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ชื่อเว็บ</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
    a{
            text-decoration:none;
        }
        body{
            font-family: 'Itim', cursive;
            background: LightSkyBlue;
            background-image: linear-gradient(to bottom, #85D8CE, #085078);
        }
        .header{
            width:100%;
            position:fixed;
            position:sticky;
            top:0;
            background: DarkTurquoise;
            box-shadow:0 15px 30px rgba(0,0,0,0.25);
        }
        img{
            border-radius:15px;
        }
        input[class]{
            width:100%;
            border-radius:15px;
        }
        a[class]{
            border-radius:15px;
        }
        textarea[class]{
            width:100%;
            border-radius:15px;
        }
        select[class]{
            width:100%;
            border-radius:15px;
        }
        .a{
            width:100%;
            background: #fff;
            box-shadow:0 15px 30px rgba(0,0,0,0.25);
            border-radius:15px;
        }
        .fot{
            width:100%;
            background: #fff;
            bottom:0;
            position:fixed;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="container-md">
            <div class="row"><a href="index.php"><font color="#FFFAFA" size="+10">เว็บไซต์แนะนำการออกกำลังกายเวทเทรนนิ่ง</font></a></div>                </div>
            </div>
        </div>
    </div><br>
    <div class="de">
        <div class="container">
            <div class="container-md">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <div class="a">
                            <form action="ins.php" method="post">
                                <table width="80%" align="center">
                                    <tr>
                                        <td align="center"><font size="+3">สมัครสมาชิก</font></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">ชื่อ-สกุล : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="name" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">เพศ : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="fav-lenguage" value="ชาย" required> ชาย <input type="radio" name="fav-lenguage" value="หญิง" required> หญิง </td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">วัน/เดือน/ปีเกิด : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="date" name="born" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">ที่อยู่ : </label></td>
                                    </tr>
                                    <tr>
                                        <td><textarea  name="address" class="form-control" required cols="30" rows="3"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">อีเมล : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" name="mail" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">เบอร์โทร : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="tel" maxlength="10" maxlength="10" minlength="10" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">รหัสผ่าน : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="password" name="pass" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">ยืนยันรหัสผ่าน : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="password" name="passx" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="mre" value="สมัครสมาชิก" class="btn btn-primary"></td>
                                    </tr>

                                    <tr>
                                        <td> <font size="5"><a href="index.php">มีบัญชีอยู่แล้ว เข้าสู่ระบบ</a></font><br></td>
                                    </tr>
                                    
                                </table>
                                <br><br>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>