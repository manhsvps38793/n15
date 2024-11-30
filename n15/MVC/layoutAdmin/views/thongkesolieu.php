<link rel="stylesheet" href="public/css/thongkesolieu.css">

        <main id="noi-dung-chinh">
            <header id="tieu-de-trang">
                <h1>Thống kê số liệu</h1>
                <div id="tai-khoan">
                    <div class="hinh">
                        <img src="public/img/ad.png" alt="">
                    </div>
                    <span>Nam Admin</span>  
                </div>
                
            </header>
            <hr style="margin-top: 15px; height: 1px; background-color: black;">
            
            <div id="content">
              <div class="doanhso">
                <h3>Doanh số bán hàng 12 tháng gần nhất</h3>
                <canvas class="bieudo" id="revenueChart" width="400" height="200"></canvas>
              </div>
              <div class="donhang">
                <h3 style="max-width: 100%;">Đơn hàng gần đây</h3>
                    <table id="bang-don-hang">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Mã đơn</th>
                                <th>Ngày</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Bá Tâm</td>
                                <td>13/11/2024</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td>13/11/2024</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td>13/11/2024</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td>13/11/2024</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td>13/11/2024</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td>13/11/2024</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td>13/11/2024</td>
                            </tr>        
                            <tr>
                              <td>1</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td>13/11/2024</td>
                            </tr>                                
                        </tbody>
                    </table>
              </div>
              <div class="binhluan">
                <h3 style="max-width: 100%;"> Đánh giá mới nhất</h3>
                    <table id="bang-don-hang">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Nội dung</th>
                                <th>Thao tac</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mạnh: Quá rẻ mua 2 cái...</td>                           
                                <td><button id="xem">Xem</button></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td><button id="xem">Xem</button></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td><button id="xem">Xem</button></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td><button id="xem">Xem</button></td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Nguyễn Bá Tâm</td>
                              <td><button id="xem">Xem</button></td>
                            </tr>                        
                        </tbody>
                    </table>
              </div>
              <div class="banchay">
                <h3>Sản phẩm bán chạy</h3>
                <div id="sp" class="sp">
                    
                    <div class="hinh">
                        <img src="public/img/group.png" alt="">
                    </div>
                    <div class="info">
                        <p>Yến Sào Sả Ớt</p>
                        <h3>Giá:<span>50.000đ</span></h3>
                        <p>Lượt bán: <span>200</span></p>
                    </div>
                </div>
              </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      var ctx = document.getElementById('revenueChart').getContext('2d');
      var revenueChart = new Chart(ctx, {
          type: 'line',  // Loại biểu đồ là biểu đồ đường
          data: {
              labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5'],  // Các tháng
              datasets: [{
                  label: 'Doanh Thu (triệu VND)',  // Tên dataset
                  data: [3, 5, 8, 12, 9],  // Doanh thu tương ứng
                  borderColor: '#053024',  // Màu đường biểu đồ
                  backgroundColor: 'rgba(75, 192, 192, 0.2)',  // Màu nền biểu đồ
                  fill: true,  // Đổ màu dưới đường
                  tension: 0.4  // Độ cong của đường
              }]
          },
          options: {
              responsive: true,
              scales: {
                  y: {
                      beginAtZero: true,  // Đảm bảo trục y bắt đầu từ 0
                      ticks: {
                          // Chỉ đơn giản hiển thị đơn vị 'triệu VND'
                          callback: function(value) {
                              return value + ' triệu';  // Thêm "triệu VND" vào giá trị trục y
                          }
                      }
                  }
              }
          }
      });
  </script>
</body>
</html>
