<?php
    session_start();
    require('conn.php');
    if(isset($_POST['alog'])){
        $tel=$_POST['tel'];
        $pass=$_POST['pass'];
        $re=mysqli_query($conn,"SELECT * FROM member WHERE tel='$tel' AND pass='$pass' AND status='2' ");
        if(mysqli_num_rows($re)==1){
            $data=mysqli_fetch_assoc($re);
            $_SESSION['id']=$data['id'];
            $_SESSION['status']=$data['status'];
            $_SESSION['idr']=$data['idr'];
            header('location:adm.php');
        }else{
            echo ' <script>alert("เบอร์โทรหรือรหัสผ่านไม่ถูกต้อง");location.href="javascript:history.back(1)";</script> ';
        }
    }
    if(isset($_POST['log'])){
        $tel=$_POST['tel'];
        $pass=$_POST['pass'];
        $re=mysqli_query($conn,"SELECT * FROM member WHERE tel='$tel' AND pass='$pass' AND status='1' ");
        if(mysqli_num_rows($re)==1){
            $data=mysqli_fetch_assoc($re);
            $_SESSION['id']=$data['id'];
            $_SESSION['status']=$data['status'];
            $_SESSION['idr']=$data['idr'];
            header('location:adm.php');
        }else{
            echo ' <script>alert("เบอร์โทรหรือรหัสผ่านไม่ถูกต้อง");location.href="javascript:history.back(1)";</script> ';
        }
    }
?>