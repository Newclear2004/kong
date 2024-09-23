<?php
session_start();
require('conn.php');
if (isset($_GET['idp'])) {
    $idp = $_GET['idp'];
    $id = $_SESSION['id'];
    mysqli_query($conn, "INSERT INTO good (idp,id) VALUES ('$idp','$id') ");
    $_SESSION['idp'] = $_GET['idp'];
    if ($_SESSION['status'] == 1) {
        header('location:cment.php');
    } else {
        header('location:ament.php');
    }
}
if (isset($_GET['idpo'])) {
    mysqli_query($conn, "DELETE FROM good WHERE idp='".$_GET['idpo'].
        "' AND id='".$_SESSION['id'].
        "' ");
    $_SESSION['idp'] = $_GET['idpo'];
    if ($_SESSION['status'] == 1) {
        header('location:cment.php');
    } else {
        header('location:ament.php');
    }
} 
?>