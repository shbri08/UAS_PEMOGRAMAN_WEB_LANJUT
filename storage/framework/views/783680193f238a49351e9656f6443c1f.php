

<link rel="stylesheet" href="<?php echo e(asset('assets/template/backend/dist/css/adminlte.min.css')); ?>">

<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="wrapper-content">
        <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger"><?php echo e($error); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <form action="<?php echo e(route('user-profile.update', $users->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#biodata" data-toggle="tab"><i class="far fa-id-card"></i>
                                    Biodata</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#login" data-toggle="tab"><i class="fas fa-key"></i> Login</a>
                            </li>
                        </ul>
                    </h3>
                    <div class="card-tools">
                    </div>
                </div><!-- /.card-header -->

                <div class="card-body">
                    <div class="tab-content p-0">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="biodata">
                            <div class="row">
                                <div class="col col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap (*)</label>
                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name', $users->name)); ?>" required>
                                    </div>
                                </div>
                                <div class="col col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="identity_card_number">NIK</label>
                                        <input type="number" class="form-control" name="identity_card_number" id="identity_card_number" value="<?php echo e($users->identity_card_number); ?>">
                                    </div>
                                </div>
                                <div class="col col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="phone">No. HP</label>
                                        <input type="number" class="form-control" name="phone" id="phone" value="<?php echo e($users->phone); ?>">
                                    </div>
                                </div>
                                <div class="col col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <br>
                                        <input type="radio" name="gender" id="gender" value="1" <?php if($users->gender == '1'): ?> checked <?php endif; ?>> Pria
                                        <input type="radio" name="gender" id="gender" value="0" <?php if($users->gender == '0'): ?> checked <?php endif; ?>> Wanita
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <textarea type="address" class="form-control" name="address" id="address" rows="2"><?php echo e($users->address); ?></textarea>
                            </div>

                            <div class="row">
                                <div class="col col-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="province_id">Provinsi</label>
                                        <select class="form-control" name="province_id" id="province_id">
                                            <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($province->code); ?>" <?php if($province->code == $users->province_id): ?> selected <?php endif; ?>>
                                                <?php echo e($province->name); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="city_id">Kabupaten / Kota</label>
                                        <select name="city_id" id="city_id" class="form-control">
                                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($city->code); ?>" <?php if($city->code == $users->city_id): ?> selected <?php endif; ?>>
                                                <?php echo e($city->name); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="district_id">Kecamatan</label>
                                        <select name="district_id" id="district_id" class="form-control">
                                            <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($district->code); ?>" <?php if($district->code == $users->district_id): ?> selected <?php endif; ?>>
                                                <?php echo e($district->name); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="subdistrict_id">Kelurahan / Desa</label>
                                        <select name="village_id" id="village_id" class="form-control">
                                            <?php $__currentLoopData = $villages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $village): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($village->code); ?>" <?php if($village->code == $users->village_id): ?> selected <?php endif; ?>>
                                                <?php echo e($village->name); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="rt">RT</label>
                                        <input type="number" class="form-control" name="rt" id="rt" value="<?php echo e($users->rt); ?>">
                                    </div>
                                </div>
                                <div class="col col-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="rw">RW</label>
                                        <input type="number" class="form-control" name="rw" id="rw" value="<?php echo e($users->rw); ?>">
                                    </div>
                                </div>
                                <div class="col col-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="postcode">Kode Pos</label>
                                        <input type="number" class="form-control" name="postcode" id="postcode" value="<?php echo e($users->postcode); ?>" placeholder="isikan angka saja">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="current_profile_image">Foto Saat Ini</label>
                                        <?php if($users->profile_image): ?>
                                        <p>
                                            <img src="<?php echo e(Storage::url('images/users/' . $users->profile_image)); ?>" alt="Profile Image" class="img-fluid">
                                        </p>
                                        <?php else: ?>
                                        <p>Belum ada foto</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="profile_image">Foto Baru</label>
                                        <br>
                                        <input type="file" name="profile_image" id="profile_image" accept="image/*">
                                    </div>
                                </div>
                                <div class="col col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="profile_image">Preview Foto Baru</label>
                                        <br>
                                        <img id="imagePreview" src="" alt="Preview Gambar" style="display: none;" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chart tab-pane" id="login">
                            <div class="row">
                                <div class="col col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="<?php echo e($users->email); ?>">
                                    </div>
                                </div>
                                <div class="col col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" value="" placeholder="diisi jika ingin mengganti password" autocomplete="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                        Simpan</button>
                    <button type="reset" name="reset" class="btn btn-danger"><i class="fa fa-sync"></i>
                        Reset</button>
                </div>
                <!-- /.card-body -->
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_addon'); ?>
<!-- select2 -->
<script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/select2/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
<script type="text/javascript" src="<?php echo e(asset('assets/plugins/select2/js/select2.full.min.js')); ?>"></script>

<script>
    // Menonaktifkan tombol submit setelah diklik
    $('form').submit(function() {
        $('#submit').attr('disabled', 'disabled');
        return true; // proses form
    });

    $('#province_id').select2({
        theme: 'bootstrap4',
        placeholder: "-- Pilih Provinsi --",
    });
    $('#city_id').select2({
        theme: 'bootstrap4',
        placeholder: "-- Pilih Kota --",
    });
    $('#district_id').select2({
        theme: 'bootstrap4',
        placeholder: "-- Pilih Kecamatan --",
    });
    $('#village_id').select2({
        theme: 'bootstrap4',
        placeholder: "-- Pilih Kelurahan / Desa --",
    });

    const profile_image = document.getElementById("profile_image");
    const imagePreview = document.getElementById("imagePreview");

    profile_image.addEventListener("change", function() {
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

    // Show region data
    $(document).ready(function() {
        // show province
        $('#province_id').change(function() {
            var provinceId = $(this).val();
            $.get('/region/getCity', {
                province_id: provinceId
            }, function(data) {
                $('#city_id').empty();
                $('#city_id').append('<option value="">Silahkan Pilih Kota</option>');
                $.each(data, function(key, value) {
                    $('#city_id').append('<option value="' + value.code + '">' + value
                        .name + '</option>');
                });
            });
        });

        // show city based on province id
        $('#city_id').change(function() {
            var cityId = $(this).val();
            $.get('/region/getDistrict', {
                city_id: cityId
            }, function(data) {
                $('#district_id').empty();
                $('#district_id').append('<option value="">Silahkan Pilih Kecamatan</option>');
                $.each(data, function(key, value) {
                    $('#district_id').append('<option value="' + value.code + '">' +
                        value.name + '</option>');
                });
            });
        });

        // show district based on city code
        $('#district_id').change(function() {
            var districtId = $(this).val();
            $.get('/region/getVillage', {
                district_id: districtId
            }, function(data) {
                $('#village_id').empty();
                $('#village_id').append('<option value="">Silahkan Pilih Kecamatan</option>');
                $.each(data, function(key, value) {
                    $('#village_id').append('<option value="' + value.code + '">' +
                        value.name + '</option>');
                });
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\Pemrograman Web Lanjut\UTS\Laravel\lara-starter\resources\views/frontend/author/profile/index.blade.php ENDPATH**/ ?>