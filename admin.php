<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบผู้ดูแล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="bg.css">
    <style>
        a{
            text-decoration:none;
        }
        body{
            font-family: 'Itim', cursive;
            background: LightSkyBlue;
        }
        .header{
            width:100%;
            position:fixed;
            position:sticky;
            top:0;
            background: skyblue;
            box-shadow:0 15px 50px rgba(0,0,0,0.25);
        }
        img{
            border-radius:15px;
        }
        input[class]{
            
            width:100%;
            border-radius:15px;
        }
        a[class]{
            width:100%;
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
    </style>
</head>
<body>

            <div class="circles"
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
    <div class="header">
        <div class="container">
            <div class="container-md">
            <div class="row"><a href="index.php"><font color="#FFFAFA" size="+10">เว็บไซต์แนะนำการออกกำลังกายเวทเทรนนิ่ง</font></a></div>            </div>
        </div>
         </div><br><br><br>
         
         <center>
                    <div class="col-md-4">
                     
                        <div class="a">
                            <form action="ch.php" method="post">
                                <table width="80%" align="center">
                                    <tr><br>
                                        <td align="center"><font size="+3">เข้าสู่ระบบ</font></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">เบอร์โทร : </label></td>
                                    </tr>
                                    <tr>    
                                        <td><input type="text" name="tel" maxlength="10" maxlength="10" minlength="10" class="form-control" required><br>   </td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">รหัสผ่าน : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="password" name="pass" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="alog" value="เข้าสู่ระบบ" class="btn btn-primary"> <br><br></td>
                                    </tr>
                                </table>
                                <br>
                            </form>
                        </div>
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>