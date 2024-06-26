<div class="row">
    <div class="col-lg-3 col-12">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php echo e($total_posts); ?></h3>
                <p>Total Post</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="<?php echo e(route('posts.index')); ?>" class="small-box-footer">Detail <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-12">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?php echo e($total_categories); ?></h3>
                <p>Total Category</p>
            </div>
            <div class="icon">
                <i class="fas fa-tag"></i>
            </div>
            <a href="<?php echo e(route('categories.index')); ?>" class="small-box-footer">Detail <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-12">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3><?php echo e($total_tags); ?></h3>
                <p>Total Tags</p>
            </div>
            <div class="icon">
                <i class="fas fa-tags"></i>
            </div>
            <a href="<?php echo e(route('tags.index')); ?>" class="small-box-footer">Detail <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-12">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?php echo e($total_users); ?></h3>
                <p>Total User</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="<?php echo e(route('users.index')); ?>" class="small-box-footer">Detail <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<?php /**PATH D:\Semester 4\Pemrograman Web Lanjut\UAS\Laravel\resources\views/backend/dashboard/record.blade.php ENDPATH**/ ?>