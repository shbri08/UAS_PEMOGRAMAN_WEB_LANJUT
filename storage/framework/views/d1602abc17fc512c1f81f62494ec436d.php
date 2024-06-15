<style>
    .ck-editor__editable_inline {
        min-height: 400px;
    }
</style>

<?php $__env->startSection('content'); ?>
    <section id="latest-post">
        <div class="container mb-3 px-4">
            <h1><?php echo e($page_title); ?></h1>
            <form action="<?php echo e(route('author.posts.update', $posts->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <div class="card">
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($error); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input class="form-control" name="title" id="title"
                                    value="<?php echo e(old('title', $posts->title)); ?>" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="meta_description">Meta Description (SEO)</label>
                                <textarea class="form-control" name="meta_description" id="meta_description" rows="3"><?php echo e(old('meta_description', $posts->meta_description)); ?></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="10"><?php echo e(old('description', $posts->description)); ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="name">Category</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value=""></option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"
                                                    <?php if($category->id == $posts->category_id): ?> selected <?php endif; ?>><?php echo e($category->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="tag_id">Tags</label>
                                        <select name="tag_id[]" id="tag_id" class="form-control" multiple required>
                                            <option value=""></option>
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($tag->id); ?>"
                                                    <?php echo e(in_array($tag->id, $posts->tags->pluck('id')->toArray()) ? 'selected' : ''); ?>>
                                                    <?php echo e($tag->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="is_publish">Publish?</label>
                                        <br>
                                        <input type="radio" name="is_publish" id="is_publish_yes" value="1"
                                            <?php if($posts->is_published == 1): ?> checked <?php endif; ?>>
                                        <label for="is_publish_yes">Yes</label>

                                        <input type="radio" name="is_publish" id="is_publish_no" value="0"
                                            <?php if($posts->is_published == 0): ?> checked <?php endif; ?>>
                                        <label for="is_publish_no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="name">Published at</label>
                                        <input name="published_at" id="published_at" class="form-control"
                                            value="<?php echo e(old('published_at', $posts->published_at)); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-12 col-lg-4">
                                <div class="form-group mb-3">
                                    <label for="featured_image">Current Featured Image</label>
                                    <br>
                                    <?php if($posts->featured_image && Storage::exists('images/posts/' . $posts->featured_image)): ?>
                                        <img src="<?php echo e(Storage::url('images/posts/' . $posts->featured_image)); ?>"
                                            class="card-img-top" alt="...">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('storage/images/general/noimage.jpg')); ?>" class="card-img-top">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col col-12 col-lg-4">
                                <div class="form-group mb-3">
                                    <label for="featured_image">New Featured Image</label>
                                    <br>
                                    <input type="file" name="featured_image" id="featured_image" accept="image/*">
                                </div>
                            </div>
                            <div class="col col-12 col-lg-4">
                                <div class="form-group mb-3">
                                    <label for="featured_image">Preview Featured Image</label>
                                    <br>
                                    <img id="imagePreview" src="" alt="Preview Gambar" style="display: none;"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> Save
                        </button>
                        <button type="reset" name="reset" class="btn btn-danger">
                            <i class="fa fa-sync"></i> Reset
                        </button>
                        <a class="btn btn-dark" href="<?php echo e(route('author.posts')); ?>">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>
                    </div>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_addon'); ?>
    <!-- select2 -->
    <script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('assets/plugins/select2/js/select2.full.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('assets/plugins/ckeditor5/ckeditor.js')); ?>"></script>
    <!-- datepicker -->
    <link rel="stylesheet"
        href="<?php echo e(asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')); ?>">
    <script type="text/javascript"
        src="<?php echo e(asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script>
        $('#published_at').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true
        });

        ClassicEditor.create(document.querySelector('#description'), {
                ckfinder: {
                    uploadUrl: "<?php echo e(route('image.upload') . '?_token=' . csrf_token()); ?>",
                }
            })
            .catch(error => {
                console.error(error);
            });


        $('#category_id').select2({
            theme: 'bootstrap4',
            placeholder: '-- Choose Category --'
        });
        $('#tag_id').select2({
            theme: 'bootstrap4',
            placeholder: '-- Choose Tag --'
        });

        const featured_image = document.getElementById("featured_image");
        const imagePreview = document.getElementById("imagePreview");

        featured_image.addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = "block";
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.src = "";
                imagePreview.style.display = "none";
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFolder\Kuliah\pemweb-lanjut\lara-starter\resources\views/frontend/author/posts/edit.blade.php ENDPATH**/ ?>