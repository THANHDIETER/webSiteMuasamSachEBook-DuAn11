<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
     <?php require_once './components/header.php' ?>
    <hr>
    <div class="container mt-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Sách - Truyện tranh</a></li>
                <li class="breadcrumb-item active" aria-current="page">Văn học</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="border p-3 mb-4">
                    <h5 class="font-weight-bold text-danger">Danh mục</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-danger">Sách - Truyện tranh</a></li>
                        <li><a href="#" class="text-danger">Văn học</a></li>
                        <li><a href="#" class="text-dark">Văn học Việt Nam <span class="text-muted">(6394)</span></a>
                        </li>
                        <li><a href="#" class="text-dark">Văn học nước ngoài <span class="text-muted">(6488)</span></a>
                        </li>
                    </ul>
                </div>

                <div class="border p-3">
                    <h5 class="font-weight-bold">Tìm theo</h5>
                    <h6 class="text-muted">Chủ đề</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Bước vào agency Quảng cáo & Truyền thông</a></li>
                        <li><a href="#">Biên cương Việt Nam</a></li>
                        <li><a href="#">Đam mê xê dịch</a></li>
                        <li><a href="#">Giải thưởng Sách Hay</a></li>
                        <li><a href="#">Hạt giống tâm hồn</a></li>
                        <li><a href="#">Ngày của mẹ</a></li>
                        <li><a href="#">Sách Giáng Sinh</a></li>

                    </ul>
                </div>
            </div>

            <!-- Product List -->
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="font-weight-bold">Văn học</h5>
                    <div>
                        <select class="form-control d-inline-block w-auto mr-2">
                            <option>Sản phẩm bán chạy</option>
                            <option>Sản phẩm mới</option>
                        </select>
                        <select class="form-control d-inline-block w-auto">
                            <option>20 sản phẩm</option>
                            <option>30 sản phẩm</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <!-- Product Item -->
                     <?php foreach($products as $key): ?>
                    <div class="col-md-3 mb-3">
                        <div class="card">
                       
                            <img style=" height:280px;  padding: 20px; "  src="./assets/images/prod/books/<?php echo $key['img'] ?>" class="card-img-top" alt="Về Đi Con - Bìa Cứng">
                            <div class="card-body"> 
                                <h6 class="card-title"><?php echo $key['ten'] ?></h6>
                                <p class="text-success"><?php echo $key['tac_gia'] ?></p>
                                <div class="d-flex justify-content-between">
                                    <p class="text-danger font-weight-bold"><?php echo $key['gia'] ?></p>
                                    <p class="text-muted"><del><?php echo $price=$key['gia']-($key['gia']/100)*$key['sale'] ?></del> <span
                                            class="badge badge-danger">-<?php echo $key['sale'] ?>%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                    

                </div>
            </div>
        </div>
    </div>
    <?php require_once './components/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</html>