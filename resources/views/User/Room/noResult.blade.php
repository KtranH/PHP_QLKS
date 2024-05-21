@extends('container')
@section('body')
<title>GTX - Đặt phòng khách sạn</title>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Trang chủ</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">GTX</a></li>
                <li class="breadcrumb-item active">Trang chủ</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Số khách lưu trú <span>| Hôm nay</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-users" style="color: #74C0FC;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                        <span class="text-success small pt-1 fw-bold">Đã</span><span
                                            class="text-muted small pt-2 ps-1">ghé thăm</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Số phòng còn trống <span>| Hôm nay</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-table-list" style="color: #63E6BE;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>10</h6>
                                        <span class="text-success small pt-1 fw-bold">Vẫn còn</span><span
                                            class="text-muted small pt-2 ps-1">trống</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Số sao đánh giá <span>| Tất cả</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-star" style="color: #fb5032;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">Lượt đánh giá</span><span
                                            class="text-muted small pt-2 ps-1">trải nghiệm</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Loại phòng <span>/Tìm kiếm</span></h5>
                                <div class="row bg-white" style="padding:20px;">

                                    <h1>Không có kết quả phù hợp</h1>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div><!-- End Recent Sales -->

            <!-- End Top Selling -->

        </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->
@endsection