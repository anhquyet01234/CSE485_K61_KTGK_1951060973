<?php
$ten = getPOST('ten');
$tinchi = getPOST('tinchi');
$tiet_lt = getPOST('tiet_lt');
$tiet_th = getPOST('tiet_th');
$tiet_thtn = getPOST('tiet_thtn');
$tiet_thoc = getPOST('tiet_thoc');
$id = getGET('id');
if ($id) {
    $sql_on = "SELECT * FROM monhoc WHERE mamh = '$id'";
    $list_mh = executeResult($sql_on);
    if ($list_mh) {
        $item = $list_mh[0];
    }
}
if ($ten != '') {
    if ($id) {
        $sql = "update monhoc set ten_mh = '$ten', sotinchi = '$tinchi', sotiet_lt = '$tiet_lt', sotiet_th = '$tiet_th', sotiet_thtn = '$tiet_thtn', sogio_tuhoc = '$tiet_thoc' where mamh = $id";
    } else {
        $sql = "INSERT INTO `monhoc` (`mamh`, `ten_mh`, `sotinchi`, `sotiet_lt`, `sotiet_th`, `sotiet_thtn`, `sogio_tuhoc`) VALUES (NULL, '$ten', '$tinchi', '$tiet_lt', '$tiet_th', '$tiet_thtn', '$tiet_thoc')";
    }

    execute($sql);
    echo $sql;
    header("Location: ?page=read");
}

?>

<div class="add-container">
    <div class="text-center">
        <h4 class="text-primary">Nhập môn học mới</h4>
        <div class="form container">
            <form method="post">
                <label for="">Tên môn học</label>
                <input type="text" class="form-control" value="<?php if ($id) echo $item['ten_mh'] ?>" name="ten">
                <br>
                <label for="">Số tín chỉ</label>
                <input type="text" class="form-control" value="<?php if ($id) echo $item['sotinchi'] ?>" name="tinchi">
                <br>
                <label for="">Số tiết lý thuyết</label>
                <input type="number" class="form-control" value="<?php if ($id) echo $item['sotiet_lt'] ?>"
                    name="tiet_lt">
                <br>
                <label for="">Số tiết thực hành</label>
                <input type="number" class="form-control" value="<?php if ($id) echo $item['sotiet_th'] ?>"
                    name="tiet_th">
                <br>
                <label for="">Số tiết thực hành tn</label>
                <input type="number" class="form-control" value="<?php if ($id) echo $item['sotiet_thtn'] ?>"
                    name="tiet_thtn">
                <br>
                <label for="">Số tiết tự học</label>
                <input type="number" class="form-control" value="<?php if ($id) echo $item['sogio_tuhoc'] ?>"
                    name="tiet_thoc">
                <br>
                <button type="submit" class="btn btn-primary">CẬP NHẬT</button>
            </form>
        </div>
    </div>

</div>