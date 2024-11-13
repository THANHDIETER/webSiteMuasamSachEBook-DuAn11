<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php require_once '../components/header.php' ?>
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
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Về Đi Con - Bìa Cứng">
                            <div class="card-body">
                                <h6 class="card-title">Về Đi Con - Bìa Cứng</h6>
                                <p class="text-success">Mộc Trầm</p>
                                <div class="d-flex justify-content-between">
                                    <p class="text-danger font-weight-bold">187,000₫</p>
                                    <p class="text-muted"><del>220,000₫</del> <span
                                            class="badge badge-danger">-15%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Copy product item template to add more items -->
                    <!-- Repeat this block for more products -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Yêu, Cần Phải Học">
                            <div class="card-body">
                                <h6 class="card-title">Yêu, Cần Phải Học</h6>
                                <p class="text-success">Trần Hải Hiền</p>
                                <div class="d-flex justify-content-between">
                                    <p class="text-danger font-weight-bold">106,000₫</p>
                                    <p class="text-muted"><del>125,000₫</del> <span
                                            class="badge badge-danger">-15%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Thêm các sản phẩm khác tương tự ở đây -->

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>