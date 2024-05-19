<!-- load phòng tiêu biêu -->
<?php $__currentLoopData = $roomsFreatured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$images = explode("|", $room->ANHPHONG);
$firstImage = $images[0];
$format_cost = number_format($room->GIATHUE, 0, ',', '.');
$format_promition = number_format(2500000, 0, ',', '.');
?>
<div class="card" style="width: 18rem; margin-right:30px; box-shadow:2px 2px 10px 5px rgba(0,0,0,0.1)">
    <img src="<?php echo e($firstImage); ?>" style="width:288px;height:192px" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo e($room->TENPHONG); ?></h5>
        <p class="card-text" style="font-weight: bold;"><?php echo e($room->VITRI); ?></p>
        <p class="card-text">
            <?php
            $starFloat = $room->avg_star_rating >= 4 ? $room->avg_star_rating : 3.5;
            $starCount = floor($starFloat);
            $hasHalfStar = $starFloat - $starCount > 0;
            ?>
            <?php for($i = 0; $i < $starCount; $i++): ?> <i class="fa-solid fa-star" style="color: #FFFF00;"></i>
                <?php endfor; ?>
                <?php if($hasHalfStar): ?>
                <i class="fa-regular fa-star-half-stroke" style="color: #FFFF00;"></i>
                <?php endif; ?>

        </p>
        <p class="card-text rend-cost"><?php echo e($format_cost); ?><sup>đ</sup>
            <span class="reduced-cose"><?php echo e($format_promition); ?></span><sup style="color:gray;">đ</sup>
        </p>
        <a href="#" class="btn btn-primary" style="background-color: #74C0FC; border:none">Xem chi tiết</a>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\PHP_QLKS\resources\views/User/Room/roomFeatured.blade.php ENDPATH**/ ?>