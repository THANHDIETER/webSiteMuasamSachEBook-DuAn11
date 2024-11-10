<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styte/css/styte.css">
</head>
<body>
    <h1 class="wrapper">Show sản phẩm</h1>
    <div class="product wrapper">
        <?php foreach($product as $key => $rows) { ?>
            <div class="pro-items">
                <img src="<?php echo $rows['pro_img']; ?>" alt="">
                <h3 class="name-pro">
                    <a href="?act=detailpro&id=<?php echo $rows['pro_id']; ?>">
                        <?php echo $rows['pro_name']; ?>
                    </a>
                </h3>
                <p class="price"><?php echo $rows['price']; ?><span>35.000</span></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>
