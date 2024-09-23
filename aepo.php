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
                               
                            </table>
                        </div>
                    </div>
                    <?php
                            $re=mysqli_query($conn,"SELECT * FROM  post WHERE idp='".$_GET['idp']."' ");
                            while($data=(mysqli_fetch_assoc($re))){
                    ?>
                    <div class="col-md-6">
                        <div class="a">
                            <table width="80%" align="center">
                                <form action="up.php" method="post" enctype="multipart/form-data">
                                    <tr>
                                        <td align="center"><h3><b>แก้ไขโพสต์</b></h3></td>
                                    </tr><input type="hidden" name="idp" value="<?php echo $_GET['idp'] ?>">
                                    <tr>
                                        <td><label class="form-label">หัวเรื่อง : </label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="top" value="<?php echo $data['top'] ?>" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-label">เนื้อหา : </label></td>
                                    </tr>
                                    <tr>
                                        <td><textarea  name="content" class="form-control"  cols="30" rows="3"><?php echo $data['content'] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <?php if($data['picp']!=""){ ?>
                                    <tr>
                                        <td><img src="pic/<?php echo $data['picp'] ?>" width="100%"></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td><label class="form-label">รูปภาพ : </label></td>
                                    </tr>
                                    <tr>
                                        <td align="center"><input type="file" name="picp" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                    <td><input type="submit" name="epost" value="แก้ไขโพสต์" class="btn btn-dark"></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                </form>
                            </table>
                        </div><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>