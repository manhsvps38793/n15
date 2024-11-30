<link rel="stylesheet" href="public/css/quanlyDonhang.css">

        <main id="noi-dung-chinh">
            <header id="tieu-de-trang">
                <h1>Quản Lý Đơn Hàng</h1>
                <div id="tai-khoan">
                    <div class="hinh">
                        <img src="img/ad.png" alt="">
                    </div>
                    <span>Nam Admin</span>  
                </div>
                
            </header>
            <hr style="margin-top: 15px; height: 1px; background-color: black;">  
            <div id="quan-ly-danh-gia">
              <!-- Thanh tìm kiếm -->
              <div class="tim-kiem">
                <input type="text" id="tim-don-hang" placeholder="Tìm đơn hàng.."/>
                <button type="submit">Tìm</button>
              </div>
                <!-- Bộ lọc đánh giá -->
                <div class="bo-loc-danh-gia">
                  <button class="tat-ca">Tất cả (20)</button>
                  <button class="loc-giao-thanh-cong">Giao thành công (6)</button>
                  <button class="loc-da-duy">Đã hủy (2)</button>
                  <button class="loc-van-chuyen">Đang vận chuyến (4)</button>
                </div>
              
              
                <!-- Bảng danh sách đánh giá -->
                <table class="bang-danh-gia">
                  <thead>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Sản phẩm</th>
                      <th>Tổng tiền</th>
                      <th>Địa chỉ</th>
                      <th>Ngày</th>
                      <th>Trạng thái</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>ps38793</td>
                      <td>
                        <!-- <img src="logo1.2.png" alt="Sản phẩm" />  KO CẦN HÌNH CŨNG DC-->
                        <span>Tổ yến tinh chế cho bé Baby (loại 3)</span>
                      </td>
                      <td>
                        <span>500.000</span>
                      </td>
                      <td><span>391 tô ký, phường tmt, Q12</span></td>
                      <td>10-10-2024</td>
                      <td>Giao thành công</td>
                      <td><button class="huy">Hủy đơn</button></td>
                    </tr>
                    <!-- Thêm các dòng dữ liệu khác -->
                  </tbody>
                </table>
              </div>              
        </main>
    </div>
</body>
</html>
