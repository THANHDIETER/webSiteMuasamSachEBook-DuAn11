<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="styte/css/styte.css">
</head>
<body>
    <h1 class="wrapper">Chi tiết sản phẩm</h1>
    <div class="top-pro wrapper">
        <div class="top-pro-items">
            <img src="assets/images/<?php echo $productOne['pro_img']; ?>" class="top-pro-img" alt="">
        </div>
        <div class="top-pro-items">
            <h2><?php echo $productOne['pro_name']; ?></h2>
            <p class="price"><?php echo $productOne['price']; ?>đ</p>
            <p class="sale">150.000đ</p>
        </div>
    </div>
    <div class="detail-pro wrapper">
        <?php echo $productOne['detail']; ?>
    </div>
</body>
</html>
