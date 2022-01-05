<div class="main">
    <?php
    require '../topbar.php';
    if(isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="number">1000</div>
                <div class="cardName">Lượt Xem</div>
            </div>
            <div class="iconBox">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="number">1000</div>
                <div class="cardName">Số Hàng Bán</div>
            </div>
            <div class="iconBox">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="number">1000</div>
                <div class="cardName">Lượt Đánh Giá</div>
            </div>
            <div class="iconBox">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="number">1000</div>
                <div class="cardName">Lợi Nhuận</div>
            </div>
            <div class="iconBox">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>
    <!-- table -->
    <div class="details">
        <div class="productOrders">
            <div class="cardHeader">
                <h2>TOP MẶT HÀNG</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>TÊN</td>
                        <td>GIÁ(VNĐ)</td>
                        <td>SỐ LƯỢNG BÁN</td>
                        <td>TRẠNG THÁI</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Đồng hồ a</td>
                        <td>120</td>
                        <td>100</td>
                        <td><span class="status0">Hết hàng</span></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>Đồng hồ b</td>
                        <td>120</td>
                        <td>90</td>
                        <td><span class="status1">Còn hàng</span></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>Đồng hồ c</td>
                        <td>120</td>
                        <td>80</td>
                        <td><span class="status0">Hết hàng</span></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>