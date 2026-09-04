<?php
include 'db.php';
session_start();
if (isset($_GET['id'])) {
    # code...
    $id=$_GET['id'];
    $sql=$conn->prepare('delete from event where id=?');
    $sql->bind_param('i',$id);
    if ($sql->execute()) {
        # code...
        header('location:dash.php');
    }
}
?>