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
                                    <td><a href="mse.php"><img src="pic/<?php echo $data['pic'] ?>" class="rounded-circle me-2" width="50" height="50"><?php echo $data['name'] ?></a></td>
                                </tr>
                                <tr>
                                    <td><a href="s.php"><img src="pic/18.png" width="10%"> ค้นหา</a></td>
                                </tr>
                                <tr>
                                    <td><a href="r.php"><img src="pic/14.png" width="10%"> ห้องสนทนา</a></td>
                                </tr>
                                <?php if($_SESSION['idr']!=0){ ?>
                                <tr>
                                    <td><a href="p.php"><img src="pic/13.png" width="10%"> โพสต์ของตนเอง</a></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td><a href="room.php?idr=1"><img src="pic/15.png" width="10%"> ประชาสัมพันธ์</a></td>
                                </tr>
                                <tr>
                                    <td><a href="form.php"><img src="pic/17.png" width="10%"> แบบประเมิน</a></td>
                                </tr>
                                <?php if($_SESSION['idr']!=0){ ?>
                                <tr>
                                    <td><a href="c.php"><img src="pic/16.png" width="10%"> เติมเงิน <font color="purple">( <img src="pic/16.png" width="7%"> <?php echo $data['coin'] ?> )</font></a></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="a">
                            <table class="table table-hover">
                                <tr>
                                    <td align="center"><h3><b>เติมเงิน</b></h3></td>
                                </tr>
                                <form action="ins.php" method="post" enctype="multipart/form-data">
                                <tr>
                                    <td>1 บาท = 1 <img src="pic/16.png" width="5%"></td>
                                </tr>
                                <tr>
                                    <td>เลขบัญชี : 4261329-306</td>
                                </tr>
                                <tr>
                                    <td>ชื่อบัญชี : ก้องภพ</td>
                                </tr>
                                <tr>
                                    <td>ธนาคาร : SCB</td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        คิวอาร์โค้ดเพื่อแสกน  <br>
                                        <img src="pic/20.png" width="100%">
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="number" name="coins" class="form-control" placeholder="จำนวนเงิน" required></td>
                                </tr>
                                <tr>
                                    <td>รูปสลิป :</td>
                                </tr>
                                <tr>
                                    <td><input type="file" name="pics" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="c" value="ยืนยันการเติมเงิน" class="btn btn-dark"></td>
                                </tr>
                                </form>
                            </table>
                        </div>
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