<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?php echo e(url('/')); ?>">
                <i class=" fa-solid fa-house" style="color: #74C0FC;"></i>
                <span>Trang chủ</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-door-open" style="color: #74C0FC;"></i><span>Phòng</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo e($url = route('all.rooms')); ?>">
                        <i class="bi bi-circle"></i><span>Toàn bộ phòng</span>
                    </a>
                </li>
                <?php $__currentLoopData = $loaiPhong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(route('rooms.by_type', $lp->MALP)); ?>">
                        <i class="bi bi-circle"></i><span><?php echo e($lp->TENLOAIPHONG); ?></span>
                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-magnifying-glass-dollar" style="color: #74C0FC;"></i><span>Phân loại theo giá
                    phòng</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo e(route('price.hight')); ?>">
                        <i class=" bi bi-circle"></i><span>Giá từ cao tới thấp</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('price.low')); ?>">
                        <i class="bi bi-circle"></i><span>Giá từ thấp tới cao</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="fa-brands fa-servicestack" style="color: #74C0FC;"></i><span>Dịch vụ</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Dịch vụ đưa đón</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>Dịch vụ ăn uống</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>Dịch vụ tiện ích</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-map-location-dot" style="color: #74C0FC;"></i><span>Bản đồ</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Cơ sở 1</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Cơ sở 2</span>
                    </a>
                </li>
                <li>
                    <a href="icons-boxicons.html">
                        <i class="bi bi-circle"></i><span>Cở sở 3</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-heading">Tài khoản</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="fa-solid fa-user" style="color: #74C0FC;"></i>
                <span>Trang cá nhân</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="fa-solid fa-tag" style="color: #74C0FC;"></i>
                <span>Đặt phòng</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="fa-solid fa-star" style="color: #74C0FC;"></i>
                <span>Đánh giá</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="fa-solid fa-square-pen" style="color: #74C0FC;"></i>
                <span>Đăng ký</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="fa-solid fa-right-to-bracket" style="color: #74C0FC;"></i>
                <span>Đăng nhập</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-error-404.html">
                <i class="fa-solid fa-question" style="color: #74C0FC;"></i>
                <span>Liên hệ</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="fa-solid fa-circle-info" style="color: #74C0FC;"></i>
                <span>Thông tin</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar--><?php /**PATH C:\xampp\htdocs\PHP_QLKS_BRANCHS_THUHA\resources\views/sideBar.blade.php ENDPATH**/ ?>