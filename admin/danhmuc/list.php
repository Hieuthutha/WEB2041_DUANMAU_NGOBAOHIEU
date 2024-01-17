<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formLoai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td><a class ="btn" href="' . $suadm . '">Sửa</a>
                            <a class="btn" href="' . $xoadm . '">Xóa</a>
                        </td>
                    </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <a class="btn">Chọn tất cả</a>
            <a class="btn">Bỏ chọn tất cả</a>
            <a class="btn">Xóa các mục đã chọn</a>
            <a class="btn" href="index.php?act=adddm">Nhập thêm</a>
        </div>
    </div>
</div>  