<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <form action="#" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value ="' . $id . '">' . $name . '</option>';
            } ?>

        </select>
    </form>
    <input type="submit" name="litok" value="Tìm kiếm">
    <div class="row formcontent">
        <div class="row mb10 formLoai">

            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH ẢNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src ='$hinhpath' height ='50'>";
                    } else {
                        $hinh = "Không có hình ảnh";
                    }

                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                        <td>' . $luotxem . '</td>
                        <td><a class ="btn" href="' . $suasp . '">Sửa</a>
                            <a class="btn" href="' . $xoasp . '">Xóa</a>
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
            <a class="btn" href="index.php?act=addsp">Nhập thêm</a>
        </div>
    </div>
</div>