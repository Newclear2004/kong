<?php
    session_start();
    require('conn.php');
    if($_SESSION['status']==2){
        header('location:adm.php');
    }
    if($_SESSION['status']==""){
        header('location:index.php');
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลส่วนตัวผู้ใช้งาน</title>
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
                <div class="row">
                <div class="row"><a href="index.php"><font color="#FFFAFA" size="+10">เว็บไซต์แนะนำการออกกำลังกายเวทเทรนนิ่ง</font></a></div>                    <div class="col-md-9"></div>
                    <?php
                        $re=mysqli_query($conn,"SELECT * FROM member WHERE id='".$_SESSION['id']."' ");
                        $data=mysqli_fetch_assoc($re);
                    ?>
                    <div  class="col-md-20" align="right" size="+10" style="margin-top:-4%;"><font size="5">คุณ :<?php echo $data['name'] ?></font>  <a href="out.php?out='y'" class="btn btn-danger">ออกจากระบบ</a></div>
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
                                    <td><a href="mse.php"><img src="pic/<?php echo $data['pic'] ?>" class="rounded-circle me-2" width="50" height="50"><?php echo $data['name'] ?></a></td>
                                </tr>
                                <tr>
                                    <td><a href="s.php"><img src="pic/search.png" width="10%"> ค้นหา</a></td>
                                </tr>
                                <tr>
                                    <td><a href="r.php"><img src="pic/home.png" width="10%"> ห้องสนทนา</a></td>
                                </tr>
                                <?php if($_SESSION['idr']!=0){ ?>
                                <tr>
                                    <td><a href="p.php"><img src="pic/p.png" width="10%"> โพสต์ของตนเอง</a></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td><a href="room.php?idr=1"><img src="pic/megaphone.png" width="10%"> ประชาสัมพันธ์</a></td>
                                </tr>
                                <tr>
                                    <td><a href="form.php"><img src="pic/files.png" width="10%"> แบบประเมิน</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="a">
                            <table width="60%" align="center">
                                <tr>
                                    <td align="center"><h3>แก้ไขข้อมูลส่วนตัว</h3></td>
                                </tr>
                                <form action="up.php" method="post" enctype="multipart/form-data">
                                    <tr>
                                        <td><label class="form-label">ชื่อ-สกุล : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="name" value="<?php echo $data['name'] ?>" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">เพศ : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="fav-lenguage" value="ชาย" <?php if($data['sex']=="ชาย"){ echo 'checked'; } ?> required> ชาย <input type="radio" name="fav-lenguage" value="หญิง" <?php if($data['sex']=="หญิง"){ echo 'checked'; } ?> required> หญิง </td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">วัน/เดือน/ปีเกิด : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="date" name="born" class="form-control"value="<?php echo $data['born'] ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">ที่อยู่ : </label></td>
                                    </tr>
                                    <tr>
                                        <td><textarea  name="address" class="form-control" required cols="30" rows="3"><?php echo $data['address'] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">อีเมล : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" name="mail" class="form-control" value="<?php echo $data['mail'] ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">เบอร์โทร : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="tel" maxlength="10" maxlength="10" value="<?php echo $data['tel'] ?>" minlength="10" class="form-control" required></td>
                                    </tr>
                                <tr>
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="aei" value="แก้ไขข้อมูลส่วนตัว" class="btn btn-dark"></td>
                                </tr>
                                <tr>
                                    <td><br></td>
                                </tr>
                                </form>
                            </table>
                        </div><br>
                    </div>
                    <div class="col-md-3">
                        <div class="a">
                            <table class="table table-hover">
                                <tr>
                                    <td><b>ห้องสนทนา</b></td>
                                </tr>
                                            <?php
                                                $re=mysqli_query($conn,"SELECT * FROM  room ");
                                                while($data=(mysqli_fetch_assoc($re))){
                                            ?>
                                <tr>
                                    <td><a href="room.php?idr=<?php echo $data['idr'] ?>"><?php echo $data['namer'] ?></a></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                        </div><br>
                        
                        <div class="a">
                            <table class="table table-hover">
                                <tr>
                                    <td><b>สมาชิก</b></td>
                                </tr>
                                            <?php
                                                $re=mysqli_query($conn,"SELECT * FROM  member WHERE status!='2' ");
                                                while($data=(mysqli_fetch_assoc($re))){
                                            ?>
                                <tr>
                                    <td><img src="pic/<?php echo $data['pic'] ?>" class="rounded-circle me-2" width="50" height="50"><?php echo $data['name'] ?></a></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>