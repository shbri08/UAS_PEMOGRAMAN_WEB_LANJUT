<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger"><?php echo e($error); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <form action="<?php echo e(route('categories.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name')); ?>"
                        required>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                <button type="reset" name="reset" class="btn btn-danger"><i class="fa fa-sync"></i> Reset</button>
                <a href="<?php echo e(route('categories.index')); ?>" name="reset" class="btn btn-dark"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
            <!-- /.card-body -->
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFolder\Kuliah\pemweb-lanjut\lara-starter\resources\views/backend/category/create.blade.php ENDPATH**/ ?>