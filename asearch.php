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
                                <?php   $s=0;
                                        $re=mysqli_query($conn,"SELECT * FROM slip WHERE statuss='0' ");
                                        while($data=(mysqli_fetch_assoc($re))){ $s+=1; }
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="a"><br>
                            <table width="80%" align="center">
                                <tr>
                                    <td><h3><b>สมาชิก</b></h3> <a href="apre.php" class="btn btn-dark">เพิ่มสมาชิก</a></td>
                                </tr>
                            </table><br>
                        </div><br>
                        <div class="a"><br>
                            <table width="80%" align="center">
                                <tr>
                                    <td><label class="form-label">ค้นหา :</label></td>
                                </tr>
                                <form action="asearch.php" method="GET">
                                <tr>
                                    <td><input type="search" name="search" value="<?php echo $_GET['search'] ?>" class="form-control" required></td>
                                    <td><input type="submit" name="ar" value="ค้นหา..." class="btn btn-dark"></td>
                                </tr>
                                </form>
                            </table><br>
                        </div><br>
                        <div class="a">
                            <table class="table table-hover">
                                <tr>
                                    <td>#</td>
                                    <td>รูปภาพ</td>
                                    <td>ชื่อ-สกุล</td>
                                    <td>เพศ</td>
                                    <td>อีเมล</td>
                                    <td>เบอร์โทร</td>
                                    <td>สถานะ</td>
                                    <td align="right" width="25%"></td>
                                </tr>
                                <?php   $i=0;
                                        $s=$_GET['search'];
                                        $re=mysqli_query($conn,"SELECT * FROM  member WHERE name LIKE '%$s%' AND status!='2'  ");
                                        while($data=(mysqli_fetch_assoc($re))){ $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><img src="pic/<?php echo $data['pic'] ?>" class="rounded-circle me-2" width="30" height="30"></td>
                                    <td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['sex'] ?></td>
                                    <td><?php echo $data['mail'] ?></td>
                                    <td><?php echo $data['tel'] ?></td>
                                    <td><?php if($data['idr']==0){ ?>สมาชิก <?php }else{ ?> พาร์ทเนอร์<?php } ?></td>
                                    <td><?php if($data['status']==0){ ?> <a href="up.php?id=<?php echo $data['id'] ?>" class="btn btn-dark">ยืนยัน</a> <?php }else{ ?> <a href="up.php?ido=<?php echo $data['id'] ?>" class="btn btn-light">ระงับ</a>  <?php } ?>
                                        <a href="aem.php?id=<?php echo $data['id'] ?>" class="btn btn-warning">แก้ไข</a> <a href="de.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">ลบ</a> </td>
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