
<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới Sản Phẩm</h2>
            <form action="index.php?trang=sanpham&lenh=them" method="post">
                <input type="text" name="tensp" placeholder="Tên sản phẩm">
                <input type="text" name="mota" placeholder="mô tả">
                <input type="text" name="danhmuc" placeholder="danh mục">
                <input type="file" name="hinh" name="product_image"> <!-- Thêm trường nhập hình ảnh -->
                <input type="submit" value="Thêm">
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách Sản Phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>mô tả</th>
                        <th>IDdm</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i=1;
                $ch ='';
                foreach($mangth as $key => $value){
                    $ch .= '<tr>
                                <td>'.$i++.'</td>
                                <td><img style="width: 70px;" src="public/img/'.$value['hinh'].'" alt=""></td>
                                <td>'.$value['tensp'].'</td>
                                <td>'.$value['mota'].'</td>
                                <td>'.$value['tendm'].'</td>
                                <td class="action-icons">
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>';
                }
                echo $ch;
                ?>
                    <!-- <tr>
                        <td>1</td>
                        <td><img src="" alt=""></td>
                        <td>Sản Phẩm 1</td>
                        <td>$100</td>
                        <td>50</td>
                        <td>10</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="" alt=""></td>
                        <td>Sản Phẩm 2</td>
                        <td>$200</td>
                        <td>20</td>
                        <td>22</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr> -->
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
</html>
