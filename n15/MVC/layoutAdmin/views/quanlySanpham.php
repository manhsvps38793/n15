<link rel="stylesheet" href="public/css/quanlySanpham.css">

        <main id="noi-dung-chinh">
            <header id="tieu-de-trang">
                <h1>Quản Lý Sản Phẩm : Admin</h1>
                <div id="tai-khoan">
                    <div class="hinh">
                        <img src="img/ad.png" alt="">
                    </div>
                    <span>Nam Admin</span>  
                </div>
                
            </header>
            <hr style="margin-top: 15px; height: 1px; background-color: black;">
            <button class="themsp">Thêm sản phẩm</button>

            <!-- form thêm sp -->
            <div id="form-them" style="display: none; ">
                <h2>Nhập thông tin sản phẩm</h2>
                <form  id="formthem" action="index.php?trang=sanpham&lenh=them" method="post" enctype="multipart/form-data" >
                    <input type="text" id="tensp" placeholder="Nhập tên sản phẩm" name="ten"><br><br>
            
                    <input type="text" id="gia" placeholder="Nhập giá" name="gia"><br><br>
            
                    <input type="text" id="mota" placeholder="Nhap mô tả" name="mota"><br><br>

                    <select name="iddm" style="width: 322px; height: 40px; border-radius: 5px;">
                    <option value="">Chọn sản phẩm</option>
                        <option value="1">Yến</option>
                        <option value="2">Sâm</option>
                    </select>

                    <label for="image">Chọn ảnh :</label>
                    <input style="border: none;" type="file" id="image" name="hinh" accept="image/*" required> <br><br>

                    <button type="submit" id="them">Thêm</button>
                    <button type="button" id="huythem">Hủy</button>
                </form>
            </div>
            <!-- form sửa sp -->
            <div id="form-sua" style="display: none; border: 1px solid #ccc; padding: 10px; width: 300px; margin-top: 10px;">
                <h2>Sửa thông tin sản phẩm</h2>
                <form id="formsua">
                    <input type="hidden" id="idsp" placeholder="Nhập id sản phẩm" name="id" readonly>
            
                    <input type="text" id="tensp" placeholder="Nhập tên sản phẩm" name="ten"><br><br>
            
                    <input type="text" id="gia" placeholder="Nhập giá" name="gia"><br><br>
            
                    <input type="text" id="hinh" placeholder="Hình" name="hinh"><br><br>
                     
                    <input type="text" id="mota" placeholder="Nhập mô tả" name="mota"><br><br>
            
                    <button type="submit">Thêm</button>
                    <button type="button" id="huysua">Hủy</button>
                </form>
            </div>

            <div id="bang-quan-ly">
                <!-- load database -->
                <table id="bang-san-pham">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Hình</th>
                            <th>Mô tả</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>

                    <?php
                $i=1;
                $ch ='';
                foreach($mangth as $key => $value){
                    $ch .= '<tbody>
                                <tr>
                                    <td>'.$i++.'</td>
                                    <td>'.$value['TenSP'].'</td>
                                    <td>'.$value['Gia'].'</td>
                                    <td><img style="width: 70px;" src="../layout/public/img/'.$value['HinhAnh'].'" alt=""></td>
                                    <td>'.$value['MoTa'].'</td>
                                    <td class="action-icons">
                                        <a class="chinh-sua" href="index.php?trang=sanpham&lenh=sua&id='.$value['MaSP'].'">Edit</i></a>
                                        <a class="xoa" href="index.php?trang=sanpham&lenh=xoa&id='.$value['MaSP'].'&tenhinh='.$value['HinhAnh'].'">Delete</a>
                                    </td>
                                </tr>
                            </tbody>';
                }
                echo $ch;
                ?>
                </table>
            </div>
        </main>
    </div>
    <script>
        // Lấy các phần tử HTML cần sử dụng
        var nutThem = document.querySelector('.themsp'); // Nút "Thêm sản phẩm"
        var formThem = document.getElementById('form-them'); // Form thêm sản phẩm
        var huyThem = document.getElementById('huythem'); // Nút hủy

        // Xử lý sự kiện khi nhấn nút "Thêm sản phẩm"
        nutThem.onclick = function () {
        // Xóa dữ liệu cũ trong form
        document.getElementById('idsp').value = ''; // ID sẽ để trống
        document.getElementById('tensp').value = '';
        document.getElementById('gia').value = '';
        document.getElementById('hinh').value = '';
        document.getElementById('mota').value = '';

        // Hiển thị form
        formThem.style.display = 'block';
        };

        // Xử lý sự kiện khi nhấn nút "Hủy"
        huyThem.onclick = function () {
        formThem.style.display = 'none';
        };


        // sửa sp
        // Lấy các phần tử HTML cần sử dụng
        var nutSua = document.querySelector('.chinh-sua'); // Nút "Thêm sản phẩm"
        var formSua = document.getElementById('form-sua'); // Form thêm sản phẩm
        var huySua = document.getElementById('huysua'); // Nút hủy

        // Xử lý sự kiện khi nhấn nút "sửa"
        nutSua.onclick = function () {
        // Xóa dữ liệu cũ trong form
        document.getElementById('idsp').value = ''; // ID sẽ để trống
        document.getElementById('tensp').value = '';
        document.getElementById('gia').value = '';
        document.getElementById('hinh').value = '';
        document.getElementById('mota').value = '';

        // Hiển thị form
        formSua.style.display = 'block';
        };

        // Xử lý sự kiện khi nhấn nút "Hủy"
        huySua.onclick = function () {
        formSua.style.display = 'none';
        };
    </script>
</body>
</html>
