<?php
require_once('../db/dbFunc.php');
$page = getGET('page');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-3/js/bootstrap.min.js"
        integrity="sha512-EDPPkTvnl5ilwG33ygi/y7ph1tGHC9CTYOc3JHVRhAmlCkB6TGZoaJ88YI8E0XfRFNMr31sCWcimdRv8Bf5wFA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    include('./layout/header.php');
    if ($page == "add") {
        include('./layout/add.php');
    } elseif ($page == "read") {
        include('./layout/read.php');
    } elseif ($page == "update") {
        include('./layout/add.php');
    } else {
        include('./layout/read.php');
    }
    ?>
</body>

</html>