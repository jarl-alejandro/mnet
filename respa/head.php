<?php session_start();
if(!isset($_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"])){
  header("Location: ../../login.php");
}
else {
  $id = $_SESSION["b81ac816c94556b2f033f9c1a6fce82e76cb90cb"];
  $nombre = $_SESSION["b5945009161e239ef9164232db640cdfb1829e49"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?> | Mundonet</title>
    <!-- Core CSS - Include with every page -->
    <link rel="shortcut icon" href="../../media/favicon.png" type="image/x-icon" />
    <link href="../../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/main-style.css" rel="stylesheet" />
    <link href="../../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/mundonet.css">
    <link rel="stylesheet" href="../../assets/css/flat.css">
    <link rel="stylesheet" href="../../assets/css/default.css">
    <link rel="stylesheet" href="../../assets/css/default.date.css">
    <link rel="stylesheet" href="../../assets/css/sweetalert2.min.css">
   </head>