<?php
    session_start();
    require('conn.php');
    if($_SESSION['status']==1){
        header('location:user.php');
    }
    if($_SESSION['status']==""){
        header('location:index.php');
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการข้อมูลสมาชิก</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
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
                <div class="row">
                <div class="row"><a href="index.php"><font color="#FFFAFA" size="+10">เว็บไซต์แนะนำการออกกำลังกายเวทเทรนนิ่ง</font></a></div>                    <div class="col-md-9"></div>
                    <?php
                        $re=mysqli_query($conn,"SELECT * FROM member WHERE id='".$_SESSION['id']."' ");
                        $data=mysqli_fetch_assoc($re);
                    ?>
                    <div  class="col-md-20" align="right" size="+10" style="margin-top:-4%;"><font size="5">คุณ :<?php echo $data['name'] ?></font>  <a href="admin.php?out='y'" class="btn btn-danger">ออกจากระบบ</a></div>
                </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="de">
        <div class="container">
            <div class="container-md">
                <div class="row">
                    <div class="col-md-3">
                        <div class="a">
                            <table class="table table-hover">
                                <tr>
                                    <td><a href="ase.php"><img src="pic/<?php echo $data['pic'] ?>" class="rounded-circle me-2" width="50" height="50"><?php echo $data['name'] ?></a></td>
                                </tr>
                                <tr>
                                    <td><a href="adm.php"><img src="pic/14.png" width="10%"> ห้องสนทนา</a></td>
                                </tr>
                                <tr>
                                    <td><a href="am.php"><img src="pic/19.png" width="10%"> สมาชิก</a></td>
                                </tr>
                                <tr>
                                    <td><a href="ap.php"><img src="pic/15.png" width="10%"> ประชาสัมพันธ์</a></td>
                                </tr>
                                <tr>
                                    <td><a href="aform.php"><img src="pic/17.png" width="10%"> แบบประเมิน</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <?php
                        $re=mysqli_query($conn,"SELECT * FROM member WHERE id='".$_SESSION['id']."' ");
                        $data=mysqli_fetch_assoc($re);
                    ?>
                    <div class="col-md-6">
                        <div class="a">
                            <form action="ins.php" method="post">
                                <table width="80%" align="center">
                                    <tr>
                                        <td align="center"><font size="+3">สมัครพาร์ทเนอร์</font></td>
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
                                        <td><label class="form-label">ห้องสนทนา : </label></td>
                                    </tr>
                                    <tr>
                                        <td><select name="idr"class="form-control" required>
                                            <option value="">กรุณาเลือกห้องสนทนา</option>
                                            <?php
                                                $re=mysqli_query($conn,"SELECT * FROM  room WHERE idr!='1' ");
                                                while($data=(mysqli_fetch_assoc($re))){
                                            ?>
                                            <option value="<?php echo $data['idr'] ?>"><?php echo $data['namer'] ?></option>
                                            <?php } ?>
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="apre" value="สมัครพาร์ทเนอร์" class="btn btn-primary"></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                </table>
                            </form>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>