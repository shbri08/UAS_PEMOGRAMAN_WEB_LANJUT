<?php $__env->startSection('content'); ?>
    <section id="content">
        <div class="container px-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home.index')); ?>" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Archive </li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-8">
                    <h2><?php echo e($page_title); ?></h2>
                    <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
                        <?php $__currentLoopData = $post_archive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postArchive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6">
                                <div class="card border-0 bg-light rounded-4">
                                    <?php if($postArchive->featured_image && Storage::exists('images/posts/' . $postArchive->featured_image)): ?>
                                        <img src="<?php echo e(asset('storage/images/posts/' . $postArchive->featured_image)); ?>"
                                            class="card-img-top">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('storage/images/no-image.jpg')); ?>" class="card-img-top">
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php echo e(route('posts.show', ['slug' => $postArchive->slug])); ?>"
                                                class="text-decoration-none">
                                                <?php echo e(Str::limit($postArchive->title, 60)); ?>

                                            </a>
                                        </h5>
                                        <p class="card-text mt-3"><?php echo e(Str::limit($postArchive->description, 150)); ?></p>
                                    </div>
                                    <div class="card-footer border-0">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <i class="fa fa-calendar"></i>
                                                <?php echo e(\Carbon\Carbon::parse($postArchive->created_at)->format('d F Y, H:i:s')); ?>

                                            </div>
                                            <div class="col-lg-4 text-end">
                                                <a href="<?php echo e(route('posts.show', ['slug' => $postArchive->slug])); ?>"
                                                    class="btn btn-sm btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <?php echo e($post_archive->links()); ?>

                </div>

                <div class="col-lg-4">
                    <?php echo $__env->make('frontend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFolder\Kuliah\pemweb-lanjut\lara-starter\resources\views/frontend/posts/archive.blade.php ENDPATH**/ ?>