<?php 
    session_start();
    require('conn.php');
    if(isset($_POST['mre'])){
        $name=$_POST['name'];
        $sex=$_POST['fav-lenguage'];
        $born=$_POST['born'];
        $address=$_POST['address'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        $pass=$_POST['pass'];
        $passx=$_POST['passx'];
        $re=mysqli_query($conn,"SELECT * FROM member WHERE tel='$tel' ");
        if(mysqli_num_rows($re)==0){
            if($pass==$passx){
           mysqli_query($conn,"INSERT INTO member (name,sex,born,address,mail,tel,pass,pic,status,idr,coin) VALUES ('$name','$sex','$born','$address','$mail','$tel','$pass','4.png','0','0','0') ");
            header('location:index.php');
            }else{
            echo ' <script>alert("รหัสผ่านไม่ตรงกัน");location.href="javascript:history.back(1)";</script> ';
        }
        }else{
            echo ' <script>alert("เบอร์โทรถูกใช้งานไปแล้ว");location.href="javascript:history.back(1)";</script> ';
        }
    }
    if(isset($_POST['pre'])){
        $name=$_POST['name'];
        $sex=$_POST['fav-lenguage'];
        $born=$_POST['born'];
        $address=$_POST['address'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        $pass=$_POST['pass'];
        $passx=$_POST['passx'];
        $idr=$_POST['idr'];
        $re=mysqli_query($conn,"SELECT * FROM member WHERE tel='$tel' ");
        if(mysqli_num_rows($re)==0){
            if($pass==$passx){
           mysqli_query($conn,"INSERT INTO member (name,sex,born,address,mail,tel,pass,pic,status,idr,coin) VALUES ('$name','$sex','$born','$address','$mail','$tel','$pass','4.png','0','$idr','0') ");
            header('location:index.php');
            }else{
            echo ' <script>alert("รหัสผ่านไม่ตรงกัน");location.href="javascript:history.back(1)";</script> ';
        }
        }else{
            echo ' <script>alert("เบอร์โทรถูกใช้งานไปแล้ว");location.href="javascript:history.back(1)";</script> ';
        }
    }
    if(isset($_POST['apre'])){
        $name=$_POST['name'];
        $sex=$_POST['fav-lenguage'];
        $born=$_POST['born'];
        $address=$_POST['address'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        $pass=$_POST['pass'];
        $passx=$_POST['passx'];
        $idr=$_POST['idr'];
        $re=mysqli_query($conn,"SELECT * FROM member WHERE tel='$tel' ");
        if(mysqli_num_rows($re)==0){
            if($pass==$passx){
           mysqli_query($conn,"INSERT INTO member (name,sex,born,address,mail,tel,pass,pic,status,idr,coin) VALUES ('$name','$sex','$born','$address','$mail','$tel','$pass','4.png','1','$idr','0') ");
            header('location:am.php');
            }else{
            echo ' <script>alert("รหัสผ่านไม่ตรงกัน");location.href="javascript:history.back(1)";</script> ';
        }
        }else{
            echo ' <script>alert("เบอร์โทรถูกใช้งานไปแล้ว");location.href="javascript:history.back(1)";</script> ';
        }
    }
    if(isset($_POST['ar'])){
        $namer=$_POST['namer'];
        mysqli_query($conn,"INSERT INTO room (namer) VALUES ('$namer') ");
         header('location:adm.php');

    }
    if(isset($_POST['post'])){
        $id=$_SESSION['id'];
        $idr=$_SESSION['idr'];
        $top=$_POST['top'];
        $content=$_POST['content'];
        $coinp=$_POST['coinp'];
        $date=date('Y-m-d');
        $dir="pic/";
        $f=$dir.basename($_FILES["picp"]["name"]);
        move_uploaded_file($_FILES["picp"]["tmp_name"],$f);
        $picp=basename($_FILES["picp"]["name"],$f);
        $re=mysqli_query($conn,"SELECT * FROM member WHERE id='".$_SESSION['id']."' ");
        while($data=(mysqli_fetch_assoc($re))){
            if($coinp!=""){
                if($data['coin']>=$coinp){
                    $coin=$data['coin'];
                    $coin=$coin-$coinp;
                    mysqli_query($conn,"UPDATE member SET coin='$coin' WHERE id='".$_SESSION['id']."' ");
                    mysqli_query($conn,"INSERT INTO post (idr,id,top,content,picp,view,statusp,datep,coinp) VALUES ('$idr','$id','$top','$content','$picp','0','0','$date','$coinp') ");
                    if($_SESSION['status']==1){
                        header('location:p.php');
                    }else{
                        header('location:ap.php');
                    }
                }else{
            echo ' <script>alert("เหรียญไม่เพียงพอ");location.href="javascript:history.back(1)";</script> ';
        }
            }else{
                mysqli_query($conn,"INSERT INTO post (idr,id,top,content,picp,view,statusp,datep,coinp) VALUES ('$idr','$id','$top','$content','$picp','0','0','$date','0') ");
                header('location:p.php');
            }
        }
    }
    if(isset($_POST['apost'])){
        $id=$_SESSION['id'];
        $idr=$_POST['idr'];
        $top=$_POST['top'];
        $content=$_POST['content'];
        $date=date('Y-m-d');
        $dir="pic/";
        $f=$dir.basename($_FILES["picp"]["name"]);
        move_uploaded_file($_FILES["picp"]["tmp_name"],$f);
        $picp=basename($_FILES["picp"]["name"],$f);
                    mysqli_query($conn,"INSERT INTO post (idr,id,top,content,picp,view,statusp,datep,coinp) VALUES ('$idr','$id','$top','$content','$picp','0','1','$date','5') ");
                    if($_SESSION['status']==1){
                        header('location:p.php');
                    }else{
                        header('location:ap.php');
                    }
                }
    if(isset($_POST['cment'])){
        $id=$_SESSION['id'];
        $idp=$_SESSION['idp'];
        $ment=$_POST['ment'];
        $date=date('Y-m-d');
        mysqli_query($conn,"INSERT INTO cment (idp,id,ment,datem) VALUES ('$idp','$id','$ment','$date') ");
        if($_SESSION['status']==1){
            header('location:cment.php');
        }else{
            header('location:ament.php');
        }
    }
    if(isset($_POST['aq'])){
        $nameq=$_POST['nameq'];
        mysqli_query($conn,"INSERT INTO ques (nameq) VALUES ('$nameq') ");
         header('location:aform.php');

    }
    if(isset($_POST['form'])){
        $re=mysqli_query($conn,"SELECT * FROM ques_re WHERE id='".$_SESSION['id']."' ");
        if(mysqli_num_rows($re)==0){
            $ren=mysqli_query($conn,"SELECT * FROM ques  ");
            while($data=(mysqli_fetch_assoc($ren))){
                $idq=$data['idq'];
                $id=$_SESSION['id'];
                $score=$_POST['ans'.$data['idq']];
                mysqli_query($conn,"INSERT INTO ques_re (idq,id,score) VALUES ('$idq','$id','$score') ");
                header('location:end.php');
            }
        }else{
            echo ' <script>alert("คุณทำแบบประเมินไปก่อนหน้านี่แล้ว");location.href="javascript:history.back(1)";</script> ';
        }
    }
    if(isset($_POST['c'])){
        $id=$_SESSION['id'];
        $coins=$_POST['coins'];
        $dir="pic/";
        $f=$dir.basename($_FILES["pics"]["name"]);
        move_uploaded_file($_FILES["pics"]["tmp_name"],$f);
        $pics=basename($_FILES["pics"]["name"],$f);
        mysqli_query($conn,"INSERT INTO slip  (id,coins,pics,statuss) VALUES ('$id','$coins','$pics','0') ");
        echo ' <script>alert("การเติมเงินเสร็จสิ้น รอการตรวจสอบและอนุมัติจาก Admin");location.href="c.php";</script> ';
    }
?>