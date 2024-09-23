<script>
    window.print();
</script>
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
<body>                            <table width="80%" align="center">
                                <tr>
                                    <td><h3><b>สมาชิก</b></h3></td>
                                </tr>
                            </table><br>
                            <table class="table table-hover">
                                <tr>
                                    <td>#</td>
                                    <td>รูปภาพ</td>
                                    <td>ชื่อ-สกุล</td>
                                    <td>เพศ</td>
                                    <td>อีเมล</td>
                                    <td>เบอร์โทร</td>
                                    <td>สถานะ</td>
                                </tr>
                                <?php   $i=0;
                                        $re=mysqli_query($conn,"SELECT * FROM  member WHERE status!='2'  ");
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