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
    <title>แสดงความคิดเห็น</title>
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
                        <?php if($_SESSION['idp']==""){
                                $_SESSION['idp']=$_GET['idp'];
                                $re=mysqli_query($conn,"SELECT * FROM post WHERE idp='".$_SESSION['idp']."'  ");
                                while($data=(mysqli_fetch_assoc($re))){
                                    $view=$data['view'];
                                    $view=$view+1;
                                    mysqli_query($conn,"UPDATE post SET view='$view' WHERE idp='".$_SESSION['idp']."' ");
                                }
                        } ?>
                        <?php
                            $re=mysqli_query($conn,"SELECT * FROM  post WHERE idp='".$_SESSION['idp']."' ");
                            while($data=(mysqli_fetch_assoc($re))){
                                $l=0;
                                $ren=mysqli_query($conn,"SELECT * FROM  good WHERE idp='".$data['idp']."' ");
                                while($datan=(mysqli_fetch_assoc($ren))){$l+=1; }
                                $m=0;
                                $ren=mysqli_query($conn,"SELECT * FROM  cment WHERE idp='".$data['idp']."' ");
                                while($datan=(mysqli_fetch_assoc($ren))){$m+=1; }

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
                                        <td colspan="2"><font color="purple"><?php echo $data['top'] ?></font></td>
                                    </tr>
                                    <?php if($data['picp']!=""){ ?>
                                    <tr>
                                        <td colspan="2"><a href="cment.php?idp=<?php echo $data['idp'] ?>"><img src="pic/<?php echo $data['picp'] ?>" width="100%"></a></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="2"><?php echo $data['content'] ?></td>
                                    </tr>
                        <?php
                            $ren=mysqli_query($conn,"SELECT * FROM  room WHERE idr='".$data['idr']."' ");
                            while($datan=(mysqli_fetch_assoc($ren))){

                        ?>          
                                    <tr>
                                        <td width="50%"><a href="room.php?idr=<?php echo $datan['idr'] ?>">#<?php echo $datan['namer'] ?></a></td>
                                        <td align="right">โพสต์เมื่อ : <?php echo $data['datep'] ?></td>
                                    </tr>
                        <?php } ?>
                                    <tr>
                                        <td>
                                            <?php
                                                $ren=mysqli_query($conn,"SELECT * FROM  good WHERE idp='".$data['idp']."' AND id='".$_SESSION['id']."' ");
                                                if(mysqli_num_rows($ren)==0){
                                            ?>
                                                <a href="like.php?idp=<?php echo $data['idp'] ?>"><img src="pic/10.png" width="10%"></a>
                                            <?php }else{ ?>
                                                <a href="like.php?idpo=<?php echo $data['idp'] ?>"><img src="pic/11.png" width="10%"></a>
                                            <?php } ?><font color="red"><?php echo $l ?></font>
                                            <a href="cment.php?idp=<?php echo $data['idp'] ?>"><img src="pic/9.png" width="11%"></a><font color="blue"><?php echo $m ?></font>
                                        </td>
                                        <td align="right">เข้าชม : <?php echo $data['view'] ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <?php if($_SESSION['idr']==0){ ?>
                                <div class="a">
                                    <table class="table table-hover">
                                        <form action="ins.php" method="post">
                                            <tr>
                                                <td><textarea name="ment" placeholder="แสดงความคิดเห็น..." class="form-control" cols="30" rows="3" required></textarea></td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" name="cment" class="btn btn-dark" value="แสดงความคิดเห็น"></td>
                                            </tr>
                                        </form>
                                    </table>
                                </div>
                            <?php  } ?>
                            <?php if($_SESSION['idr']==$data['idr']){ ?>
                                <div class="a">
                                    <table class="table table-hover">
                                        <form action="ins.php" method="post">
                                            <tr>
                                                <td><textarea name="ment" placeholder="แสดงความคิดเห็น..." class="form-control" cols="30" rows="3" required></textarea></td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" name="cment" class="btn btn-dark" value="แสดงความคิดเห็น"></td>
                                            </tr>
                                        </form>
                                    </table>
                                </div>
                            <?php  } ?>
                            <?php if($_SESSION['idr']!=0 AND $data['idr']==1 ){ ?>
                                <div class="a">
                                    <table class="table table-hover">
                                        <form action="ins.php" method="post">
                                            <tr>
                                                <td><textarea name="ment" placeholder="แสดงความคิดเห็น..." class="form-control" cols="30" rows="3" required></textarea></td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" name="cment" class="btn btn-dark" value="แสดงความคิดเห็น"></td>
                                            </tr>
                                        </form>
                                    </table>
                                </div>
                            <?php  } ?>
                        <?php } ?>
                        <div class="a">
                            <table class="table">
                        <?php
                            $re=mysqli_query($conn,"SELECT * FROM  cment WHERE idp='".$_SESSION['idp']."' ORDER BY idm desc ");
                            while($data=(mysqli_fetch_assoc($re))){ ?>
                                <tr>
                                    <td>   <?php
                            $ren=mysqli_query($conn,"SELECT * FROM  member WHERE id='".$data['id']."' ");
                            while($datan=(mysqli_fetch_assoc($ren))){
    

                        ?>          
                            <img src="pic/<?php echo $datan['pic'] ?>" class="rounded-circle me-2" width="30" height="30"> <?php echo $datan['name'] ?> <?php if($datan['idr']==99){ ?><font color="blue"><b>A.</b></font> <?php } ?>
                        <?php } ?><br>
                                <?php echo $data['ment'] ?> <br>
                                    <font color="skyblue"><?php echo $data['datem'] ?></font></td>
                                </tr>
                            <?php } ?>
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