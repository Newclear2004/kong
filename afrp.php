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
<body>
    <div class="de">
        <div class="container">
            <div class="container-md">
                <div class="row">
                            <table width="80%" align="center">
                                <tr>
                                    <td align="center"><label class="form-label"><h3><b>รายงานสรุปผลแบบประเมิน</b></h3></label></td>
                                </tr>
                            </table><br>
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>