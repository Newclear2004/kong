<?php
    session_start();
    require('conn.php');
    if(isset($_POST['aep'])){
        $dir="pic/";
        $f=$dir.basename($_FILES["pic"]["name"]);
        move_uploaded_file($_FILES["pic"]["tmp_name"],$f);
        $pic=basename($_FILES["pic"]["name"],$f);
        mysqli_query($conn,"UPDATE member SET pic='$pic' WHERE id='".$_SESSION['id']."' ");
        if($_SESSION['status']==1){
            header('location:mse.php');
        }else{
            header('location:ase.php');
        }
    }
    if(isset($_POST['aei'])){
        $name=$_POST['name'];
        $sex=$_POST['fav-lenguage'];
        $born=$_POST['born'];
        $address=$_POST['address'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        $re=mysqli_query($conn,"SELECT * FROM member WHERE id!='".$_SESSION['id']."' AND tel='$tel' ");
        if(mysqli_num_rows($re)==0){
            mysqli_query($conn,"UPDATE member SET name='$name', sex='$sex', born='$born', address='$address', mail='$mail', tel='$tel' WHERE id='".$_SESSION['id']."' ");
            if($_SESSION['status']==1){
                header('location:mse.php');
            }else{
                header('location:ase.php');
            }
        }else{
            echo ' <script>alert("เบอร์โทรถูกใช้งานไปแล้ว");location.href="javascript:history.back(1)";</script> ';
        }
    }
    if(isset($_POST['aepa'])){
        $pass=$_POST['pass'];
        $passx=$_POST['passx'];
        $pass1=$_POST['pass1'];
        $pass2=$_POST['pass2'];
        if($pass==$passx){
            if($pass1==$pass2){         
                mysqli_query($conn,"UPDATE member SET pass='$pass1' WHERE id='".$_SESSION['id']."' ");
                if($_SESSION['status']==1){
                header('location:mse.php');
                }else{
                header('location:ase.php');
                }
            }else{
            echo ' <script>alert("รหัสผ่านใหม่ไม่ตรงกัน");location.href="javascript:history.back(1)";</script> ';
        }
    }else{
        echo ' <script>alert("รหัสผ่านปัจจุบันไม่ถูกต้อง");location.href="javascript:history.back(1)";</script> ';
    }
    }
    if(isset($_POST['aer'])){
        $idr=$_POST['idr'];
        $namer=$_POST['namer'];
        mysqli_query($conn,"UPDATE room SET namer='$namer' WHERE idr='$idr' ");
        header('location:adm.php');
    }
    if(isset($_GET['id'])){
        mysqli_query($conn,"UPDATE member SET status='1' WHERE id='".$_GET['id']."' ");
        header('location:am.php');
    }
    if(isset($_GET['ido'])){
        mysqli_query($conn,"UPDATE member SET status='0' WHERE id='".$_GET['ido']."' ");
        header('location:am.php');
    }
    if(isset($_POST['aem'])){
        $name=$_POST['name'];
        $sex=$_POST['fav-lenguage'];
        $born=$_POST['born'];
        $address=$_POST['address'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        $re=mysqli_query($conn,"SELECT * FROM member WHERE id!='".$_POST['id']."' AND tel='$tel' ");
        if(mysqli_num_rows($re)==0){
            mysqli_query($conn,"UPDATE member SET name='$name', sex='$sex', born='$born', address='$address', mail='$mail', tel='$tel' WHERE id='".$_POST['id']."' ");
            if($_SESSION['status']==1){
                header('location:mse.php');
            }else{
                header('location:am.php');
            }
        }else{
            echo ' <script>alert("เบอร์โทรถูกใช้งานไปแล้ว");location.href="javascript:history.back(1)";</script> ';
        }
    }
    if(isset($_GET['idp'])){
        mysqli_query($conn,"UPDATE post SET statusp='1' WHERE idp='".$_GET['idp']."' ");
        header('location:ap.php');
    }
    if(isset($_GET['idpo'])){
        mysqli_query($conn,"UPDATE post SET statusp='0' WHERE idp='".$_GET['idpo']."' ");
        header('location:ap.php');
    }
    if(isset($_POST['epost'])){
        $idp=$_POST['idp'];
        $top=$_POST['top'];
        $content=$_POST['content'];
        $dir="pic/";
        $f=$dir.basename($_FILES["picp"]["name"]);
        move_uploaded_file($_FILES["picp"]["tmp_name"],$f);
        $picp=basename($_FILES["picp"]["name"],$f);
        if($picp==""){
            mysqli_query($conn,"UPDATE post SET top='$top',content='$content' WHERE idp='$idp' ");
            if($_SESSION['status']==1){
                header('location:p.php');
            }else{
                header('location:ap.php');
            }
    }else{
            mysqli_query($conn,"UPDATE post SET top='$top',content='$content',picp='$picp' WHERE idp='$idp' ");
            if($_SESSION['status']==1){
                header('location:p.php');
            }else{
                header('location:ap.php');
            }
    }
    }
    if(isset($_POST['aeq'])){
        $idq=$_POST['idq'];
        $nameq=$_POST['nameq'];
        mysqli_query($conn,"UPDATE ques SET nameq='$nameq' WHERE idq='$idq' ");
        header('location:aform.php');
    }
    if(isset($_POST['ac'])){
        $id=$_POST['id'];
        $ids=$_POST['ids'];
        $coins=$_POST['coins'];
        $ren=mysqli_query($conn,"SELECT * FROM member WHERE id='$id'  ");
        while($data=(mysqli_fetch_assoc($ren))){
            $coin=$data['coin'];
            $coin=$coin+$coins;
            mysqli_query($conn,"UPDATE member SET coin='$coin' WHERE id='$id'  ");
            mysqli_query($conn,"UPDATE slip SET statuss='1' WHERE ids='$ids'  ");
            header('location:ac.php');
    }
    }
?>