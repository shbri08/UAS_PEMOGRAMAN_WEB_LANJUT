<?php $__env->startSection('content'); ?>
    <section id="content">
        <div class="container px-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home.index')); ?>" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Category </li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-8">
                    <h2><?php echo e($page_title); ?></h2>
                    <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
                        <?php $__currentLoopData = $post_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6">
                                <div class="card border-0 bg-light rounded-4">
                                        <img src="<?php echo e(asset('storage/images/posts/' . $postCategory->image)); ?>"
                                            class="card-img-top">

                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php echo e(route('posts.show', ['seotitle' => $postCategory->seotitle])); ?>"
                                                class="text-decoration-none">
                                                <?php echo e(Str::limit($postCategory->title, 60)); ?>

                                            </a>
                                        </h5>
                                        <p class="card-text mt-3"><?php echo Str::limit($postCategory->content, 150); ?></p>
                                    </div>
                                    <div class="card-footer border-0">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <i class="fa fa-calendar"></i>
                                                <?php echo e(\Carbon\Carbon::parse($postCategory->created_at)->format('d F Y, H:i:s')); ?>

                                            </div>
                                            <div class="col-lg-4 text-end">
                                                <a href="<?php echo e(route('posts.show', ['seotitle' => $postCategory->seotitle])); ?>"
                                                    class="btn btn-sm btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <?php echo e($post_category->links()); ?>

                </div>

                <div class="col-lg-4">
                    <?php echo $__env->make('frontend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\Pemrograman Web Lanjut\UAS\Laravel\resources\views/frontend/posts/category.blade.php ENDPATH**/ ?>