<?php $__env->startSection('content'); ?>
    <section id="content">
        <div class="container px-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home.index')); ?>" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-8">
                    <h1><?php echo e($posts->title); ?></h1>
                    <p>
                        <span class="badge text-bg-primary">
                            <i class="fa fa-calendar"></i>
                            <?php echo e(\Carbon\Carbon::parse($posts->created_at)->format('d F Y, H:i:s')); ?>

                        </span>
                        <span class="badge text-bg-warning">
                            <i class="fa fa-tag"></i> <?php echo e($posts->category->name); ?>

                        </span>
                        <?php if($posts->tags->count() > 0): ?>
                            <span class="badge text-bg-success">
                                <i class="fa fa-tags"></i>
                                <?php echo e(implode(', ', $posts->tags->pluck('name')->toArray())); ?>

                            </span>
                        <?php endif; ?>

                    </p>

                    <article class="blog-post">
                        <p>
                            <?php if($posts->featured_image && Storage::exists('images/posts/' . $posts->featured_image)): ?>
                                <a href="<?php echo e(asset('storage/images/posts/' . $posts->featured_image)); ?>">
                                    <img src="<?php echo e(asset('storage/images/posts/' . $posts->featured_image)); ?>"
                                        class="card-img-top">
                                </a>
                            <?php else: ?>
                                <img src="<?php echo e(asset('storage/images/posts/no-image.jpg')); ?>" width="50%" class="card-img-top">
                                <h1><?php echo e(Storage::exists('images/posts/' . $posts->featured_image)); ?> test</h1>
                            <?php endif; ?>
                        </p>

                        <?php echo preg_replace(
                            '/<img(.*?)src=("|\')(.*?)("|\')(.*?)>/i',
                            '<a href="$3"><img$1src=$2$3$4$5 class="img-fluid"></a>',
                            $posts->description,
                        ); ?>


                    </article>

                    <?php echo $__env->make('frontend.posts.related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="col-lg-4">
                    <?php echo $__env->make('frontend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFolder\Kuliah\pemweb-lanjut\lara-starter\resources\views/frontend/posts/show.blade.php ENDPATH**/ ?>