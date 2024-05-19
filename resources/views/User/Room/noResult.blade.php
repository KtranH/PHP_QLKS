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
            <div class="col-lg-8">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Số khách lưu trú <span>| Hôm nay</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-users" style="color: #74C0FC;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                        <span class="text-success small pt-1 fw-bold">Đã</span><span class="text-muted small pt-2 ps-1">ghé thăm</span>

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
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-table-list" style="color: #63E6BE;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>10</h6>
                                        <span class="text-success small pt-1 fw-bold">Vẫn còn</span><span class="text-muted small pt-2 ps-1">trống</span>

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
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-star" style="color: #fb5032;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">Lượt đánh giá</span><span class="text-muted small pt-2 ps-1">trải nghiệm</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Loại phòng <span>/Kết quả</span></h5>
                                <div class="row bg-white" style="padding:20px;">
                                    <h2 style="color:#74C0FC">Không có kết quả tìm kiếm</h2>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Những đánh giá <span>| tiêu biểu</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Phòng</th>
                                            <th scope="col">Đánh giá</th>
                                            <th scope="col">Khách hàng</th>
                                            <th scope="col">Số ngày ở</th>
                                            <th scope="col">Số sao</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">2</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">2</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">2</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">1</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">3</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">3</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i><i class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hoạt động của khách sạn<span> | các ngày trong tuần</span></h5>
                        <div class="activity">
                            @foreach ($lines as $x)
                            @php
                            $array = explode('|', $x);
                            @endphp
                            <div class="activity-item d-flex">
                                <div class="activite-label">@php echo $array[0] @endphp </div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start' style="color:#74C0FC"></i>
                                <div class="activity-content">
                                    @php echo $array[1] @endphp
                                </div>
                            </div><!-- End activity item-->
                            @endforeach
                        </div>
                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Thống kê loại phòng<span> | được đặt nhiều nhất</span></h5>

                        <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                    legend: {
                                        data: ['Số lượt đặt phòng']
                                    },
                                    radar: {
                                        // shape: 'circle',
                                        indicator: [{
                                                name: 'Phòng có ban công',
                                                max: 6500
                                            },
                                            {
                                                name: 'Phòng đôi',
                                                max: 16000
                                            },
                                            {
                                                name: 'Phòng gia đình',
                                                max: 30000
                                            },
                                            {
                                                name: 'Phòng VIP',
                                                max: 38000
                                            },
                                            {
                                                name: 'Phòng đơn',
                                                max: 52000
                                            }
                                        ]
                                    },
                                    series: [{
                                        name: 'Budget vs spending',
                                        type: 'radar',
                                        data: [{
                                            value: [4200, 3000, 20000, 35000, 50000],
                                            name: 'Số lượt đặt phòng'
                                        }]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Số lượng <span>| từng loại phòng</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Số lượng',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                                value: 1048,
                                                name: 'Phòng đơn'
                                            },
                                            {
                                                value: 735,
                                                name: 'Phòng đôi'
                                            },
                                            {
                                                value: 580,
                                                name: 'Phòng gia đình'
                                            },
                                            {
                                                value: 484,
                                                name: 'Phòng VIP'
                                            },
                                            {
                                                value: 300,
                                                name: 'Phòng có ban công'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Tin tức &amp; Thông báo <span>| Hôm nay</span></h5>

                        <div class="news">
                            @foreach ($data as $x)
                            <div class="post-item clearfix">
                                <img src="{{ $x['image'] }}" alt="">
                                <h4><a href="#">@php echo $x["title"] @endphp</a></h4>
                                <p>@php echo $x["content"] @endphp</p>
                            </div>
                            @endforeach
                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->
@endsection