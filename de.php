<?php
    session_start();
    require('conn.php');
    if(isset($_GET['idr'])){
        mysqli_query($conn,"DELETE FROM room WHERE idr='".$_GET['idr']."' ");
        header('location:adm.php');
    }
    if(isset($_GET['idp'])){
        mysqli_query($conn,"DELETE FROM post WHERE idp='".$_GET['idp']."' ");
        mysqli_query($conn,"DELETE FROM cment WHERE idp='".$_GET['idp']."' ");
        mysqli_query($conn,"DELETE FROM good WHERE idp='".$_GET['idp']."' ");
        if($_SESSION['status']==1){
            header('location:p.php');
        }else{
            header('location:ap.php');
        }
    }
    if(isset($_GET['idq'])){
        mysqli_query($conn,"DELETE FROM ques WHERE idq='".$_GET['idq']."' ");
        mysqli_query($conn,"DELETE FROM ques_re WHERE idq='".$_GET['idq']."' ");
        header('location:aform.php');
    }
    if($_SESSION['status']==2){   
    if(isset($_GET['id'])){
        mysqli_query($conn,"DELETE FROM member WHERE id='".$_GET['id']."' ");
        mysqli_query($conn,"DELETE FROM post WHERE id='".$_GET['id']."' ");
        mysqli_query($conn,"DELETE FROM cment WHERE id='".$_GET['id']."' ");
        mysqli_query($conn,"DELETE FROM good WHERE id='".$_GET['id']."' ");
        mysqli_query($conn,"DELETE FROM slip WHERE id='".$_GET['id']."' ");
        mysqli_query($conn,"DELETE FROM ques_re WHERE id='".$_GET['id']."' ");
        header('location:am.php');
    }
    }
    if(isset($_GET['idm'])){
        mysqli_query($conn,"DELETE FROM cment WHERE idm='".$_GET['idm']."' ");
        header('location:ament.php');
    }
?>