<?php
require_once('../db/dbFunc.php');
$id = getGET('id');
$sql = "DELETE FROM monhoc where mamh = '$id'";
execute($sql);
header('Location: ../view/index.php?page=read');