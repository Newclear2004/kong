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
    <title>OlderWhite</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <style>
        a{
            text-decoration:none;
        }
        body{
            background: skyblue;
        }
        .header{
            width:100%;
            position:fixed;
            position:sticky;
            top:0;
            background: #fff;
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
                <div class="row"><a href="index.php"><font color="#FFFAFA" size="+10">เว็บไซต์แนะนำการออกกำลังกายเวทเทรนนิ่ง</font></a></div>                    <div class="col-md-6"></div>
                    <?php
                        $re=mysqli_query($conn,"SELECT * FROM member WHERE id='".$_SESSION['id']."' ");
                        $data=mysqli_fetch_assoc($re);
                    ?>
                    <div class="col-md-3" align="right" style="margin-top:2%;">คุณ : <?php echo $data['name'] ?>  <a href="out.php?out='y'" class="btn btn-primary">ออกจากระบบ</a></div>
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
                                <tr>
                                    <td><a href="ac.php"><img src="pic/16.png" width="10%"> การเติมเงิน <font color="red">(<?php echo $s ?>)</font></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="a"><br>
                            <table align="center">
                                <tr>
                                    <td align="center"><h3><b>การเติมเงิน</b></h3></td>
                                </tr>
                            </table><br>
                        </div><br>
                        
                        <?php   
                                        $re=mysqli_query($conn,"SELECT * FROM slip WHERE statuss='0' ");
                                        while($data=(mysqli_fetch_assoc($re))){
                                ?>
                        <div class="a">
                            <table class="table table-hover">
                        <?php
                            $ren=mysqli_query($conn,"SELECT * FROM  member WHERE id='".$data['id']."' ");
                            while($datan=(mysqli_fetch_assoc($ren))){
    

                        ?>          
                                    <tr>
                                        <td colspan="2"><img src="pic/<?php echo $datan['pic'] ?>" class="rounded-circle me-2" width="30" height="30"> <?php echo $datan['name'] ?> <?php if($datan['idr']==99){ ?><font color="blue"><b>A.</b></font> <?php } ?></td>
                                    </tr>
                                    <?php } ?>
                                <tr>
                                    <td><img src="pic/<?php echo $data['pics'] ?>" width="100%"></td>
                                </tr>
                                <form action="up.php" method="post">
                                <tr>
                                    <td>จำนวนเงิน :</td>
                                </tr><input type="hidden" name="id" value="<?php echo $data['id'] ?>"><input type="hidden" name="ids" value="<?php echo $data['ids'] ?>">
                                <tr>
                                    <td><input type="number" name="coins" value="<?php echo $data['coins'] ?>" required class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="ac" value="อนุมัติ"class="btn btn-dark" ></td>
                                </tr>
                                </form>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>