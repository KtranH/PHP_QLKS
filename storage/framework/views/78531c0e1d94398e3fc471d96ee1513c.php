
<?php $__env->startSection('body'); ?>
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
                        <div class="card-body">
                            <h5 class="card-title">Phòng <span>/Phòng tiêu biểu</span></h5>
                            <div class="row bg-white" style="padding:20px;">
                                <?php $__currentLoopData = $roomsFreatured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $images = explode("|", $r->ANHPHONG);
                                $firstImage = $images[0];
                                $format_cost = number_format($r->GIATHUE, 0, ',', '.');
                                $format_promition = number_format(2500000, 0, ',', '.');
                                ?>

                                <div class="col-md-6">
                                    <div class="test card my-specific-card">
                                        <div class="card-img">
                                            <img src="<?php echo e($firstImage); ?>" alt="">
                                        </div>
                                        <div class="card-info">
                                            <p class="text-title"><?php echo e($r->TENPHONG); ?></p>
                                            <p class="text-body"><?php echo e($r->VITRI); ?></p>
                                            <p class="text-body">
                                                <?php
                                                $starFloat = $r->avg_star_rating >= 4 ? $r->avg_star_rating : 3.5;
                                                $starCount = floor($starFloat);
                                                $hasHalfStar = $starFloat - $starCount > 0;
                                                ?>
                                                <?php for($i = 0; $i < $starCount; $i++): ?> <i class="fa-solid fa-star"
                                                    style="color: #ff4242;"></i>
                                                    <?php endfor; ?>
                                                    <?php if($hasHalfStar): ?>
                                                    <i class="fa-regular fa-star-half-stroke"
                                                        style="color: #ff4242;"></i>
                                                    <?php endif; ?>
                                            </p>

                                        </div>
                                        <div class="card-footer">
                                            <span class="text-title rend-cost"><?php echo e($format_cost); ?><sup>đ</sup></span>
                                            <div class="card-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#fafafa"
                                                        d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                        </div>
                    </div>
                    <!-- End Recent Sales -->

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
                                            <th scope="row"><a href="#"><img
                                                        src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">2</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img
                                                        src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">2</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img
                                                        src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">2</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img
                                                        src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">1</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img
                                                        src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">3</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img
                                                        src="https://www.vanorohotel.com/wp-content/uploads/2021/07/drz-vanoro_6737.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Phòng chất lượng tốt</a></td>
                                            <td>Nguyễn Văn A</td>
                                            <td class="fw-bold">3</td>
                                            <td><i class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i><i
                                                    class="fa-solid fa-star" style="color: #ff4242;"></i></td>
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
                            <?php $__currentLoopData = $lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $array = explode('|', $x);
                            ?>
                            <div class="activity-item d-flex">
                                <div class="activite-label"><?php echo $array[0] ?> </div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'
                                    style="color:#74C0FC"></i>
                                <div class="activity-content">
                                    <?php echo $array[1] ?>
                                </div>
                            </div><!-- End activity item-->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="post-item clearfix">
                                <img src="<?php echo e($x['image']); ?>" alt="">
                                <h4><a href="#"><?php echo $x["title"] ?></a></h4>
                                <p><?php echo $x["content"] ?></p>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP_QLKS_BRANCHS_THUHA\resources\views/User/Home/home.blade.php ENDPATH**/ ?>