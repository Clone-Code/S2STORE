<div class="topbar">
    <div class="toggle">
        <!-- <ion-icon name="menu-outline"></ion-icon> -->
    </div>
    <div class="search">
        <label for="">
            <input type="text" placeholder="tìm kím tại đây">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>
    <div class="user">
        <a href="">
            <div class="userName"><?php
            require 'standardize_name.php';
            echo print_name($_SESSION['name']);
            ?></div>
            <img src="../admins/image/user.jpg" alt="">
        </a>
    </div>
</div>