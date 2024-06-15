<div class="row py-4">
    <h4>Related Post</h4>
    <?php $__currentLoopData = $related_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedPosts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 mb-3">
            <div class="card bg-light rounded-4 shadow border-0">
                <a href="<?php echo e(route('posts.show', ['slug' => $relatedPosts->slug])); ?>">
                    <?php if($relatedPosts->featured_image && Storage::exists('images/posts/' . $relatedPosts->featured_image)): ?>
                        <img src="<?php echo e(asset('storage/images/posts/' . $relatedPosts->featured_image)); ?>"
                            class="card-img-top">
                    <?php else: ?>
                        <img src="<?php echo e(asset('storage/images/no-image.jpg')); ?>" class="card-img-top">
                    <?php endif; ?>
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="<?php echo e(route('posts.show', ['slug' => $relatedPosts->slug])); ?>" class=" text-decoration-none">
                            <?php echo e(Str::limit($relatedPosts->title, 20)); ?>

                        </a>
                    </h5>
                    <p class="card-text mt-3"><?php echo Str::limit($relatedPosts->description, 50); ?></p>
                </div>
                <div class="card-footer border-0">
                    <a href="<?php echo e(route('posts.show', ['slug' => $relatedPosts->slug])); ?>"
                        class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\MyFolder\Kuliah\pemweb-lanjut\lara-starter\resources\views/frontend/posts/related.blade.php ENDPATH**/ ?>