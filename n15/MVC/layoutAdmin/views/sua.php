<link rel="stylesheet" href="public/css/sua.css">

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
            <div class="sua">
                <!-- form sửa sp -->
            <div id="form-sua">
            
            <form id="formsua" action="index.php?trang=sanpham&lenh=capnhat&id=<?php echo $mautin[0]['MaSP']?>&tenhinh=<?php echo $mautin[0]['HinhAnh']?>" method="post" enctype="multipart/form-data">

                    <h2>Sửa thông tin sản phẩm</h2> <br>
                    <input type="text" id="tensp" placeholder="Nhập tên sản phẩm" name="ten" value="<?php echo $mautin[0]['TenSP']?>"><br><br>
            
                    <input type="text" id="gia" placeholder="Nhập giá" name="gia" value="<?php echo $mautin[0]['Gia']?>"><br><br>
            
                    <input type="file" id="hinh" placeholder="Hình" name="hinh"><br><br>
                     
                    <?php 
                $ch = '<select name="iddm" style="width: 460px; height: 40px; border-radius: 5px;">';
                foreach($mautin as $a){
                    switch ($a['MaDM']) {
                        case '1':
                            $ch .= '<option value="1">Yến</option>
                                    <option value="2">Sâm</option>
                            ';
                        break;
                        case '2':
                            $ch .= '<option value="2">Sâm</option>
                                    <option value="1">Yến</option>
                            ';
                        break;
                    }
                    $ch .= '</select>';
                    echo $ch;
                }
                ?>

                    <input type="text" id="mota" placeholder="Nhập mô tả" name="mota" value="<?php echo $mautin[0]['MoTa']?>"><br><br>
            
                    <button type="submit">Cập nhật</button>
                    <button type="button" id="huysua">Hủy</button>
                </form>
            </div>
            </div>
            
        </main>
    </div>
</body>
</html>
