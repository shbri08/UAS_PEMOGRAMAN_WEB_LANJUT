<?php $__env->startSection('content'); ?>
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="" class="h1">
                <img src="<?php echo e(asset('images/general/app-logo.png')); ?>" height="35" alt="">
                <b><?php echo e(config('app.name')); ?></b>
            </a>
        </div>
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                    <h2 class="text-center mb-4">Daftar Akun Baru</h2>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e(old('name')); ?>" placeholder="name">
                        <?php if($errors->has('name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">
                        <?php if($errors->has('email')): ?>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" value="<?php echo e(old('password')); ?>" placeholder="password">
                            <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Password</label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password_confirmation" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" placeholder="password_confirmation">
                            <?php if($errors->has('password_confirmation')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Daftar Sekarang</button>
                    </div>
                </div>
            </form>
        <div class="text-center text-muted my-3">
            Sudah punya akun? <a href="<?php echo e(url('login')); ?>" tabindex="-1">Login disini</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFolder\Kuliah\pemweb-lanjut\lara-starter\resources\views/auth/register.blade.php ENDPATH**/ ?>