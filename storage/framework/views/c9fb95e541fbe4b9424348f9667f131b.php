<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                Add Data
            </a>
            <a href="<?php echo e(route('categories.excelExport')); ?>" class="btn btn-success">
                <i class="fa-regular fa-file-excel"></i>
                Excel
            </a>
            <a href="<?php echo e(route('categories.pdfExport')); ?>" class="btn btn-danger">
                <i class="fa-regular fa-file-pdf"></i>
                PDF
            </a>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <th>No.</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="width: 50px; text-align:center"><?php echo e($index + 1); ?></td>
                        <td><?php echo e($category->name); ?></td>
                        <td><?php echo e($category->slug); ?></td>
                        <td style="width: 100px; text-align:center">
                            <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" class="d-inline delete-data">
                                <div class="btn-group">
                                    <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-warning">
                                        <i class="fa fa-pencil-alt"></i></a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger" title='Delete'>
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- /.card-body -->
</div>
<?php /**PATH C:\MyFolder\Kuliah\pemweb-lanjut\lara-starter\resources\views/backend/category/pdf.blade.php ENDPATH**/ ?>