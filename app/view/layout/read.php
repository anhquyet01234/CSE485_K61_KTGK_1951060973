<?php
$sql = "SELECT * FROM monhoc";
$list = executeResult($sql);

?>

<div class="container">
    <h4 class="text-primary">TẤT CẢ MÔN HỌC</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Tên môn học</th>
                <th scope="col">Tín chỉ</th>
                <th scope="col">Tiết lý thuyết</th>
                <th scope="col">Tiết thực hành</th>
                <th scope="col">Tiết THTN</th>
                <th scope="col">Tiết tự học</th>

            </tr>
        </thead>
        <tbody>
            <?php
            if ($list) {
                foreach ($list as $a) {
                    echo '  <tr>
                                <th>' . $a['ten_mh'] . '</th>
                                <td>' . $a['sotinchi'] . '</td>
                                <td>' . $a['sotiet_lt'] . '</td>
                                <td>' . $a['sotiet_th'] . '</td>
                                <td>' . $a['sotiet_thtn'] . '</td>
                                <td>' . $a['sogio_tuhoc'] . '</td>
                                <td><a class="btn btn-primary" href="?page=update&id=' . $a['mamh'] . '">Sửa</a></td>
                                <td><a class="btn btn-danger" href="../controller/delete.php?id=' . $a['mamh'] . '">XÓA</a></td>
                            </tr>';
                }
            }
            ?>

        </tbody>
    </table>
</div>