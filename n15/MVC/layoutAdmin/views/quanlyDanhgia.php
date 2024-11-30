<link rel="stylesheet" href="public/css/quanlyDanhgia.css">

        <main id="noi-dung-chinh">
            <header id="tieu-de-trang">
                <h1>Quản Lý Đánh Giá</h1>
                <div id="tai-khoan">
                    <div class="hinh">
                        <img src="img/ad.png" alt="">
                    </div>
                    <span>Nam Admin</span>  
                </div>
                
            </header>
            <hr style="margin-top: 15px; height: 1px; background-color: black;">  
            <div id="quan-ly-danh-gia">
                <!-- Bộ lọc đánh giá -->
                <div class="bo-loc-danh-gia">
                  <button class="tat-ca">Tất cả (20)</button>
                  <button class="loc-1-sao">1 <span style="color: #ffc107;">★</span> (6)</button>
                  <button class="loc-2-sao">2 <span style="color: #ffc107;">★</span> (2)</button>
                  <button class="loc-3-sao">3 <span style="color: #ffc107;">★</span> (4)</button>
                  <button class="loc-4-sao">4 <span style="color: #ffc107;">★</span> (8)</button>
                  <button class="loc-5-sao">5 <span style="color: #ffc107;">★</span> (10)</button>
                </div>
              
                <!-- Thanh tìm kiếm -->
                <div class="tim-kiem">
                    <select id="chon-san-pham">
                        <option>Chọn sản phẩm</option>
                        <option>Tổ yến thô loại 1</option>
                        <option>Tổ yến thô loại 2</option>
                      </select>
                  <input
                    type="text"
                    id="tim-ten-san-pham"
                    placeholder="Tìm tên sản phẩm..."
                  />
                  <select id="chon-thuong-hieu">
                    <option>Chọn danh mục</option>
                    <option>Yến sào</option>
                    <option>Sâm hàn quốc</option>
                  </select>
                  <button id="loc-chua-tra-loi">Chưa trả lời</button>
                  <button id="loc-co-hinh">Có hình ảnh/video</button>
                </div>
                <!-- form trả lời -->
                 <!-- Form trả lời đánh giá -->
                  <div id="form-tra-loi" style="display: none; position: fixed; background-color: aliceblue; padding: 20px;">
                    <h2>Trả lời đánh giá</h2>
                    <textarea id="noi-dung-tra-loi" placeholder="Nhập nội dung trả lời..." rows="5" cols="40"></textarea><br><br>
                    <button id="gui-tra-loi" style="width: 60px; background-color: #28a745; border-radius: 5px; padding: 5PX; color: white; border: none; cursor: pointer;">Gửi</button>
                    <button id="huy-tra-loi" style="width: 60px; background-color: #d62020; border-radius: 5px; padding: 5PX; color: white; border: none; cursor: pointer;">Hủy</button>
                  </div>

                <!-- Bảng danh sách đánh giá -->
                <table class="bang-danh-gia">
                  <thead>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Sản phẩm</th>
                      <th>Đánh giá</th>
                      <th>Nội dung</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>ps38793</td>
                      <td>
                        <img src="logo1.2.png" alt="Sản phẩm" />
                        <span>Tổ yến tinh chế cho bé Baby (loại 3)</span>
                      </td>
                      <td>
                        <span class="danh-gia-sao">★★★★★</span>
                      </td>
                      <td>Woo tôi chưa bao giờ mua yến rẻ như vậy</td>
                      <td>
                        <button class="tra-loi">Trả lời</button>
                      </td>
                    </tr>
                    <!-- Thêm các dòng dữ liệu khác -->
                  </tbody>
                </table>
              </div>              
        </main>
    </div>
    <script>
      // Lấy các phần tử cần thiết
const buttonsTraLoi = document.querySelectorAll('.tra-loi'); // Lấy tất cả nút "Trả lời"
const formTraLoi = document.getElementById('form-tra-loi'); // Form trả lời
const btnHuy = document.getElementById('huy-tra-loi'); // Nút "Hủy"

// Hiển thị form khi nhấn vào nút "Trả lời"
buttonsTraLoi.forEach(button => {
    button.addEventListener('click', function () {
        formTraLoi.style.display = 'block'; // Hiển thị form
    });
});

// Ẩn form khi nhấn vào nút "Hủy"
btnHuy.addEventListener('click', function () {
    formTraLoi.style.display = 'none'; // Ẩn form
});

    </script>
</body>
</html>
