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
    <title>จัดการข้อมูลประชาสัมพันธ์</title>
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
                    <div  class="col-md-20" align="right" size="+10" style="margin-top:-4%;"><font size="5">คุณ :<?php echo $data['name'] ?></font>  <a href="outadmin.php?out='y'" class="btn btn-danger">ออกจากระบบ</a></div>
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
                    <div class="col-md-9">
                        <div class="a"><br>
                            <table width="80%" align="center">
                                <tr>
                                    <td align="center"><label class="form-label"><h3><b>รายงานสรุปผลแบบประเมิน</b></h3></label></td>
                                </tr>
                            </table><br>
                        </div><br>
                        <table width="40%" align="right">
                            <tr>
                                <td>
                                    <div class="a"><br>
                                        <table align="center">
                                            <tr>
                                                <td><a href="afrp.php" class="btn btn-dark">พิมพ์สรุปผลแบบประเมิน</a></td>
                                            </tr>
                                        </table><br>
                                    </div>
                                </td>
                            </tr>
                        </table><br><br>
                        <div class="a">
                            <table class="table table-hover">
                                <tr>
                                    <td>#</td>
                                    <td>หัวข้อ</td>
                                    <td>ค่าเฉลี่ย</td>
                                    <td></td>
                                </tr>
                                <?php   $i=0;
                                        $re=mysqli_query($conn,"SELECT *, AVG(score) as ans FROM  ques_re INNER JOIN ques ON ques_re.idq = ques.idq  GROUP BY  ques_re.idq  ");
                                        while($data=(mysqli_fetch_assoc($re))){ $i=$i+1;
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $data['nameq'] ?></td>
                                    <td><?php echo number_format($data['ans'],2) ?></td>
                                    <td>
                                        <?php
                                            if($data['ans']>=4.50){
                                                echo 'มากที่สุด';
                                            }else if($data['ans']>=3.50){
                                                echo 'มาก';
                                            }else if($data['ans']>=2.50){
                                                echo 'ปานกลาง';
                                            }else if($data['ans']>=1.50){
                                                echo 'น้อย';
                                            }else{
                                                echo 'น้อยที่สุด';
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="a">
                            <table align="center">
                                <?php           $i=0;
                                                $re=mysqli_query($conn,"SELECT * FROM  ques_re GROUP BY id desc ");
                                                while($data=(mysqli_fetch_assoc($re))){ $i+=1; }
                                            ?>
                                <tr>
                                    <td  align="center"><font color="blue">เข้าชม/กรอกแบบประเมิน <?php echo $i ?> คน</font></td>
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