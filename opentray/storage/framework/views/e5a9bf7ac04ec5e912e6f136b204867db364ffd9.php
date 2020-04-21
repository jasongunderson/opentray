<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Staff
            <a href="<?php echo e(route('staff.create')); ?>" class="btn btn-primary" dusk="button_create">Add Staff</a>
        </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Username</td>
                    <td>Facilty</td>
                    <td>Permission</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($employee->id); ?></td>
                    <td><?php echo e($employee->fname); ?> <?php echo e($employee->lname); ?></td>
                    <td><?php echo e($employee->uname); ?></td>
                    <td><?php echo e($facilities[$employee->facility - 1]['name']); ?></td>
                    <td><?php echo e($employee->permission); ?></td>
                    <td>
                        <a href="<?php echo e(route('staff.edit',$employee->id)); ?>" class="btn btn-primary" dusk="button_edit">Edit</a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('staff.destroy', $employee->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger" type="submit" dusk="button_delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/staff/index.blade.php ENDPATH**/ ?>